<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 09-12-2016 14:31
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );

/**
 * This file defines some global constants and contains the code for autoloading classes.
 */
require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';

$application = new StendenINF1B\PortefolioCMS\Kernel\ApplicationKernel();
$request = \StendenINF1B\PortefolioCMS\Kernel\Http\Request::createFromGlobals();
dump( $request );
//dump($request);
//$routeParser = new \StendenINF1B\PortefolioCMS\Kernel\Routing\RouteParser();

//$routeParser->loadXml();
// dump( $routeParser->getSimpleXmlObject());
//$routeParser->parseXmlToRoutes();

//$response = $application->handle( $request );
//$response->send();

//$response = $application->handle( $request );

