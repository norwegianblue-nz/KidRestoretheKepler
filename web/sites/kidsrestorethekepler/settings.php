<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 *
 */
$settings['hash_salt'] = '8tBJjJINM0gdOw9xB8zbSihwwQto8EDgEEJaDxbYzudlPPdPM2dkN7FgiAHCO7dtyB4E3c2NcA';

/**
 * Access control for update.php script.
 *
 */
$settings['update_free_access'] = FALSE;


/**
 * Public file path:
 */
$settings['file_public_path'] = 'sites/kidsrestorethekepler.co.nz/files';

/**
 * Private file path:
 */
$settings['file_private_path'] = '/var/www/vhosts/kidsrestorethekepler.co.nz/private';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';



$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'config/sync';

/**
 * Load local development override configuration, if available.
 *
 * Keep this code block at the end of this file to take full effect.
 */
 if (file_exists(__DIR__ . '/settings.local.php')) {
   include __DIR__ . '/settings.local.php';
 }
