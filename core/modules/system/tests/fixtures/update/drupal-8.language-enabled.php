<?php
// @codingStandardsIgnoreFile

use Drupal\Core\Database\Database;
use Symfony\Component\Yaml\Yaml;

$connection = Database::getConnection();

// Set the schema version.
$connection->merge('key_value')
  ->fields([
    'value' => 'i:8000;',
    'name' => 'language',
    'collection' => 'system.schema',
  ])
  ->condition('collection', 'system.schema')
  ->condition('name', 'language')
  ->execute();

// Update core.extension.
$extensions = $connection->select('config')
  ->fields('config', ['data'])
  ->condition('collection', '')
  ->condition('name', 'core.extension')
  ->execute()
  ->fetchField();
$extensions = unserialize($extensions);
$extensions['module']['language'] = 8000;
$connection->update('config')
  ->fields([
    'data' => serialize($extensions),
    'collection' => '',
    'name' => 'core.extension',
  ])
  ->condition('collection', '')
  ->condition('name', 'core.extension')
  ->execute();

// Install configs.
$config_directory = new DirectoryIterator(__DIR__ . '/../../../../language/config/install');
foreach ($config_directory as $file_info) {
  if ($file_info->getExtension() == 'yml') {
    $config = Yaml::parse(file_get_contents($file_info->getRealPath()));
    $connection->merge('config')
      ->condition('name', $file_info->getBasename('.yml'))
      ->condition('collection', '')
      ->fields([
        'data' => serialize($config),
        'name' => $file_info->getBasename('.yml'),
        'collection' => '',
      ])
      ->execute();
  }
}

$connection->merge('key_value')
  ->condition('collection', 'entity.definitions.installed')
  ->condition('name', 'configurable_language.entity_type')
  ->fields([
    'value' => 'O:42:"Drupal\Core\Config\Entity\ConfigEntityType":35:{s:16:" * config_prefix";s:6:"entity";s:15:" * static_cache";b:0;s:14:" * lookup_keys";a:1:{i:0;s:4:"uuid";}s:16:" * config_export";a:0:{}s:21:" * mergedConfigExport";a:0:{}s:15:" * render_cache";b:1;s:19:" * persistent_cache";b:1;s:14:" * entity_keys";a:8:{s:2:"id";s:2:"id";s:5:"label";s:5:"label";s:6:"weight";s:6:"weight";s:8:"revision";s:0:"";s:6:"bundle";s:0:"";s:8:"langcode";s:8:"langcode";s:16:"default_langcode";s:16:"default_langcode";s:4:"uuid";s:4:"uuid";}s:5:" * id";s:21:"configurable_language";s:11:" * provider";s:8:"language";s:8:" * class";s:43:"Drupal\language\Entity\ConfigurableLanguage";s:16:" * originalClass";N;s:11:" * handlers";a:4:{s:12:"list_builder";s:35:"Drupal\language\LanguageListBuilder";s:6:"access";s:44:"Drupal\language\LanguageAccessControlHandler";s:4:"form";a:3:{s:3:"add";s:36:"Drupal\language\Form\LanguageAddForm";s:4:"edit";s:37:"Drupal\language\Form\LanguageEditForm";s:6:"delete";s:39:"Drupal\language\Form\LanguageDeleteForm";}s:7:"storage";s:45:"Drupal\Core\Config\Entity\ConfigEntityStorage";}s:19:" * admin_permission";s:20:"administer languages";s:25:" * permission_granularity";s:11:"entity_type";s:8:" * links";a:3:{s:11:"delete-form";s:62:"/admin/config/regional/language/delete/{configurable_language}";s:9:"edit-form";s:60:"/admin/config/regional/language/edit/{configurable_language}";s:10:"collection";s:31:"/admin/config/regional/language";}s:17:" * label_callback";N;s:21:" * bundle_entity_type";N;s:12:" * bundle_of";N;s:15:" * bundle_label";N;s:13:" * base_table";N;s:22:" * revision_data_table";N;s:17:" * revision_table";N;s:13:" * data_table";N;s:15:" * translatable";b:0;s:8:" * label";O:48:"Drupal\Core\StringTranslation\TranslatableMarkup":3:{s:9:" * string";s:8:"Language";s:12:" * arguments";a:0:{}s:10:" * options";a:0:{}}s:15:" * uri_callback";N;s:8:" * group";s:13:"configuration";s:14:" * group_label";O:48:"Drupal\Core\StringTranslation\TranslatableMarkup":3:{s:9:" * string";s:13:"Configuration";s:12:" * arguments";a:0:{}s:10:" * options";a:1:{s:7:"context";s:17:"Entity type group";}}s:22:" * field_ui_base_route";N;s:26:" * common_reference_target";b:0;s:22:" * list_cache_contexts";a:0:{}s:18:" * list_cache_tags";a:1:{i:0;s:33:"config:configurable_language_list";}s:14:" * constraints";a:0:{}s:20:" * stringTranslation";N;}',
    'name' => 'configurable_language.entity_type',
    'collection' => 'entity.definitions.installed',
  ])
  ->execute();

$connection->merge('key_value')
  ->condition('collection', 'entity.definitions.installed')
  ->condition('name', 'language_content_settings.entity_type')
  ->fields([
    'value' => 'O:42:"Drupal\Core\Config\Entity\ConfigEntityType":35:{s:16:" * config_prefix";s:16:"content_settings";s:15:" * static_cache";b:0;s:14:" * lookup_keys";a:1:{i:0;s:4:"uuid";}s:16:" * config_export";a:0:{}s:21:" * mergedConfigExport";a:0:{}s:15:" * render_cache";b:1;s:19:" * persistent_cache";b:1;s:14:" * entity_keys";a:6:{s:2:"id";s:2:"id";s:8:"revision";s:0:"";s:6:"bundle";s:0:"";s:8:"langcode";s:8:"langcode";s:16:"default_langcode";s:16:"default_langcode";s:4:"uuid";s:4:"uuid";}s:5:" * id";s:25:"language_content_settings";s:11:" * provider";s:8:"language";s:8:" * class";s:46:"Drupal\language\Entity\ContentLanguageSettings";s:16:" * originalClass";N;s:11:" * handlers";a:2:{s:6:"access";s:45:"Drupal\Core\Entity\EntityAccessControlHandler";s:7:"storage";s:45:"Drupal\Core\Config\Entity\ConfigEntityStorage";}s:19:" * admin_permission";s:20:"administer languages";s:25:" * permission_granularity";s:11:"entity_type";s:8:" * links";a:0:{}s:17:" * label_callback";N;s:21:" * bundle_entity_type";N;s:12:" * bundle_of";N;s:15:" * bundle_label";N;s:13:" * base_table";N;s:22:" * revision_data_table";N;s:17:" * revision_table";N;s:13:" * data_table";N;s:15:" * translatable";b:0;s:8:" * label";O:48:"Drupal\Core\StringTranslation\TranslatableMarkup":3:{s:9:" * string";s:25:"Content Language Settings";s:12:" * arguments";a:0:{}s:10:" * options";a:0:{}}s:15:" * uri_callback";N;s:8:" * group";s:13:"configuration";s:14:" * group_label";O:48:"Drupal\Core\StringTranslation\TranslatableMarkup":3:{s:9:" * string";s:13:"Configuration";s:12:" * arguments";a:0:{}s:10:" * options";a:1:{s:7:"context";s:17:"Entity type group";}}s:22:" * field_ui_base_route";N;s:26:" * common_reference_target";b:0;s:22:" * list_cache_contexts";a:0:{}s:18:" * list_cache_tags";a:1:{i:0;s:37:"config:language_content_settings_list";}s:14:" * constraints";a:0:{}s:20:" * stringTranslation";N;}',
    'name' => 'language_content_settings.entity_type',
    'collection' => 'entity.definitions.installed',
  ])
  ->execute();
