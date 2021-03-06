<?php

namespace Drupal\webform\Tests;

use Drupal\Core\Serialization\Yaml;
use Drupal\webform\Entity\Webform;

/**
 * Tests for webform translation.
 *
 * @group Webform
 */
class WebformEntityTranslationTest extends WebformTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = ['block', 'webform', 'webform_ui', 'webform_test_translation'];

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Place blocks.
    $this->placeBlocks();
  }

  /**
   * Tests webform translate.
   */
  public function testTranslate() {
    // Login admin user.
    $this->drupalLogin($this->rootUser);

    // Set [site:name] to 'Test Website' and translate it into Spanish.
    $this->drupalPostForm('/admin/config/system/site-information', ['site_name' => 'Test Website'], t('Save configuration'));
    $this->drupalPostForm('/admin/config/system/site-information/translate/es/add', ['translation[config_names][system.site][name]' => 'Sitio web de prueba'], t('Save translation'));

    /** @var \Drupal\webform\WebformTranslationManagerInterface $translation_manager */
    $translation_manager = \Drupal::service('webform.translation_manager');

    $webform = Webform::load('test_translation');
    $elements_raw = \Drupal::config('webform.webform.test_translation')->get('elements');
    $elements = Yaml::decode($elements_raw);

    // Check translate tab.
    $this->drupalGet('admin/structure/webform/manage/test_translation');
    $this->assertRaw('>Translate<');

    // Check translations.
    $this->drupalGet('admin/structure/webform/manage/test_translation/translate');
    $this->assertRaw('<a href="' . base_path() . 'webform/test_translation"><strong>English (original)</strong></a>');
    $this->assertRaw('<a href="' . base_path() . 'es/webform/test_translation" hreflang="es">Spanish</a>');
    $this->assertNoRaw('<a href="' . base_path() . 'fr/webform/test_translation" hreflang="fr">French</a>');
    $this->assertRaw('<a href="' . base_path() . 'admin/structure/webform/manage/test_translation/translate/es/edit">Edit</a>');

    // Check Spanish translation.
    $this->drupalGet('admin/structure/webform/manage/test_translation/translate/es/edit');
    $this->assertFieldByName('translation[config_names][webform.webform.test_translation][title]', 'Prueba: Traducci??n');
    $this->assertField('translation[config_names][webform.webform.test_translation][elements]');

    // Check form builder is not translated.
    $this->drupalGet('es/admin/structure/webform/manage/test_translation');
    $this->assertLink('Text field');
    $this->assertNoLink('Campo de texto');

    // Check form builder is not translated when reset.
    $this->drupalPostAjaxForm('es/admin/structure/webform/manage/test_translation', [], ['op' => t('Reset')]);
    $this->assertLink('Text field');
    $this->assertNoLink('Campo de texto');

    // Check element edit form is not translated.
    $this->drupalGet('es/admin/structure/webform/manage/test_translation/element/textfield/edit');
    $this->assertFieldByName('properties[title]', 'Text field');
    $this->assertNoFieldByName('properties[title]', 'Campo de texto');

    // Check translated webform options.
    $this->drupalGet('es/webform/test_translation');
    $this->assertRaw('<label for="edit-textfield">Campo de texto</label>');
    $this->assertRaw('<option value="1">Uno</option>');
    $this->assertRaw('<option value="4">Las cuatro</option>');

    // Check translated webform custom composite.
    $this->drupalGet('es/webform/test_translation');
    $this->assertRaw('<label for="edit-composite">Compuesto</label>');
    $this->assertRaw('<th class="composite-table--first_name webform-multiple-table--first_name">Nombre</th>');
    $this->assertRaw('<th class="composite-table--last_name webform-multiple-table--last_name">Apellido</th>');
    $this->assertRaw('<th class="composite-table--age webform-multiple-table--age">Edad</th>');
    $this->assertRaw('<span class="field-suffix">a??os. antiguo</span>');

    // Check translated webform token.
    $this->assertRaw('Site name: Sitio web de prueba');

    // Check that webform is not translated into French.
    $this->drupalGet('fr/webform/test_translation');
    $this->assertRaw('<label for="edit-textfield">Text field</label>');
    $this->assertRaw('<option value="1">One</option>');
    $this->assertRaw('<option value="4">Four</option>');
    $this->assertRaw('Site name: Test Website');

    // Check that French config elements returns the default languages elements.
    // Please note: This behavior might change.
    $translation_element = $translation_manager->getElements($webform, 'fr', TRUE);
    $this->assertEqual($elements, $translation_element);

    // Translate [site:name] into French.
    $this->drupalPostForm('/admin/config/system/site-information/translate/fr/add', ['translation[config_names][system.site][name]' => 'Site Web de test'], t('Save translation'));

    // Create French translation.
    $translation_elements = [
      'textfield' => [
        '#title' => 'French',
        '#custom' => 'custom',
      ],
      'custom' => [
        '#title' => 'Custom',
      ],
    ] + $elements;
    $edit = [
      'translation[config_names][webform.webform.test_translation][elements]' => Yaml::encode($translation_elements),
    ];
    $this->drupalPostForm('admin/structure/webform/manage/test_translation/translate/fr/add', $edit, t('Save translation'));

    // Check French translation.
    $this->drupalGet('fr/webform/test_translation');
    $this->assertRaw('<label for="edit-textfield">French</label>');
    $this->assertRaw('Site name: Site Web de test');

    // Check translations.
    $this->drupalGet('admin/structure/webform/manage/test_translation/translate');
    $this->assertRaw('<a href="' . base_path() . 'webform/test_translation"><strong>English (original)</strong></a>');
    $this->assertRaw('<a href="' . base_path() . 'es/webform/test_translation" hreflang="es">Spanish</a>');
    $this->assertRaw('<a href="' . base_path() . 'fr/webform/test_translation" hreflang="fr">French</a>');

    // Check French config elements only contains translated properties and
    // custom properties are removed.
    $translation_element = $translation_manager->getElements($webform, 'fr', TRUE);
    $this->assertEqual(['textfield' => ['#title' => 'French']], $translation_element);

    /**************************************************************************/
    // Submissions.
    /**************************************************************************/

    // Check English table headers are not translated.
    $this->drupalGet('admin/structure/webform/manage/test_translation/results/submissions');
    $this->assertRaw('>Text field<');
    $this->assertRaw('>Select (options)<');
    $this->assertRaw('>Select (custom)<');
    $this->assertRaw('>Composite<');

    // Check Spanish table headers are translated.
    $this->drupalGet('es/admin/structure/webform/manage/test_translation/results/submissions');
    $this->assertRaw('>Campo de texto<');
    $this->assertRaw('>Seleccione (opciones)<');
    $this->assertRaw('>Seleccione (personalizado)<');
    $this->assertRaw('>Compuesto<');

    // Create translated submissions.
    $this->drupalPostForm('webform/test_translation', ['textfield' => 'English Submission'], 'Send message');
    $this->drupalPostForm('es/webform/test_translation', ['textfield' => 'Spanish Submission'], 'Enviar mensaje');
    $this->drupalPostForm('fr/webform/test_translation', ['textfield' => 'French Submission'], 'Send message');

    // Check computed token is NOT translated for each language because only
    // one language can be loaded for a config translation.
    $this->drupalGet('admin/structure/webform/manage/test_translation/results/submissions');
    $this->assertRaw('Site name: Test Website');
    $this->assertNoRaw('Site name: Sitio web de prueba');
    $this->assertNoRaw('Site name: Sitio web de prueba');

    /**************************************************************************/
    // Site wide language.
    /**************************************************************************/

    // Make sure the site language is English (en).
    \Drupal::configFactory()->getEditable('system.site')->set('default_langcode', 'en')->save();

    $language_manager = \Drupal::languageManager();

    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('en')]);
    $this->assertRaw('<label for="edit-textfield">Text field</label>');

    // Check Spanish translation.
    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('es')]);
    $this->assertRaw('<label for="edit-textfield">Campo de texto</label>');

    // Check French translation.
    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('fr')]);
    $this->assertRaw('<label for="edit-textfield">French</label>');

    // Change site language to French (fr).
    \Drupal::configFactory()->getEditable('system.site')->set('default_langcode', 'fr')->save();

    // Check English translation.
    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('en')]);
    $this->assertRaw('<label for="edit-textfield">Text field</label>');

    // Check Spanish translation.
    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('es')]);
    $this->assertRaw('<label for="edit-textfield">Campo de texto</label>');

    // Check French translation.
    $this->drupalGet('webform/test_translation', ['language' => $language_manager->getLanguage('fr')]);
    $this->assertRaw('<label for="edit-textfield">French</label>');

    /**************************************************************************/

    // Make sure the site language is English (en).
    \Drupal::configFactory()->getEditable('system.site')->set('default_langcode', 'en')->save();

    // Duplicate translated webform.
    $edit = [
      'title' => 'DUPLICATE',
      'id' => 'duplicate',
    ];
    $this->drupalPostForm('admin/structure/webform/manage/test_translation/duplicate', $edit, t('Save'));

    // Check duplicate English translation.
    $this->drupalGet('webform/duplicate', ['language' => $language_manager->getLanguage('en')]);
    $this->assertRaw('<label for="edit-textfield">Text field</label>');

    // Check duplicate Spanish translation.
    $this->drupalGet('webform/duplicate', ['language' => $language_manager->getLanguage('es')]);
    $this->assertRaw('<label for="edit-textfield">Campo de texto</label>');

    // Check duplicate French translation.
    $this->drupalGet('webform/duplicate', ['language' => $language_manager->getLanguage('fr')]);
    $this->assertRaw('<label for="edit-textfield">French</label>');
  }

}
