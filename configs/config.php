<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => '{{=randomString(12)}}',
  'passwordsalt' => '{{=randomString(32)}}',
  'secret' => '{{=randomString(50)}}',
  'trusted_domains' =>
  array (
    0 => '{{=service('nextcloud').getNginxDomain()}}',
  ),
  'config_is_read_only' => true,
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '14.0.0.19',
  'overwrite.cli.url' => '{{=service('nextcloud').getNginxDomain()}}',
  'dbname' => '{{=service('db').get('database')}}',
  'dbhost' => '{{=service('db').getMasterAlias()}}',
  'dbport' => '',
  'dbtableprefix' => '',
  'dbuser' => '{{=service('db').get('username')}}',
  'dbpassword' => '{{=service('db').get('userPassword')}}',
  'installed' => false,
);
