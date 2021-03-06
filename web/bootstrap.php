<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 09-12-2016 14:31
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );

/**
 * Define some constants that hold the paths for the project.
 */
define( 'DIR_SEP', DIRECTORY_SEPARATOR );
define( 'DIR_UP', '..'.DIR_SEP );
define( 'WEB_ROOT', __DIR__ . DIR_SEP  );
define( 'PROJECT_ROOT', WEB_ROOT . DIR_UP );
define( 'PROJECT_SRC', PROJECT_ROOT . 'src' . DIR_SEP );
define( 'THEMES_DIR', PROJECT_SRC . 'PortfolioCMS'. DIR_SEP . 'Themes' .DIR_SEP );
define( 'ASSET_BASE_PATH', WEB_ROOT . 'assets' . DIR_SEP );

/**
 * Define constants for all configuration paths/files.
 */
define( 'CONFIG_ROOT', PROJECT_ROOT . 'config' . DIR_SEP );
define( 'CONFIG_FILE', CONFIG_ROOT . 'config.xml' );
define( 'ROUTE_CONFIG_FILE', CONFIG_ROOT . 'Routes.xml' );
define( 'FEEDBACK_CONFIG_FILE', CONFIG_ROOT . 'Feedback.xml' );
define( 'DATABASE_CONFIG_FILE', CONFIG_ROOT . 'Database.xml' );

/**
 * Never set debug to TRUE on an production server!
 */
define( 'DEBUG', TRUE );

/**
 * Set the locale to dutch UTF-8 for date formatting.
 */
setlocale(LC_ALL, 'nl_NL.UTF-8');

/**
 * This file contains an error and exception handler that are needed when things go wrong...
 */
require WEB_ROOT . 'panic.php';


/**
 * Todo: replace this un secure session start with the ^/Http/Session libs (not enough time to implement)
 */
session_start();

/**
 * Register an autoloader for autoloading project classes.
 */
spl_autoload_register( function( $className ){
    $vendorPrefix = 'StendenINF1B\\';

    if( strpos( $className, $vendorPrefix ) !== 0 )
    {
        // The class is not from this project so move to the next registered autoloader.
        return;
    }

    $includePath = str_replace( [ $vendorPrefix, '\\' ], [ PROJECT_SRC, DIR_SEP ], $className ) . '.php';

    if( file_exists( $includePath ) )
    {
        require $includePath;
    }
    else
    {
        throw new \ErrorException( sprintf( 'The class: %s is not found on location: %s', $className, $includePath ) );
    }
});

require PROJECT_ROOT . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

