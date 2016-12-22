<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 09-12-2016 17:08
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );

namespace Tests\PortfolioCMS\Kernel;


use StendenINF1B\PortfolioCMS\Kernel\ApplicationKernel;
use StendenINF1B\PortfolioCMS\Kernel\Http\Request;

class ApplicationKernelTest extends \PHPUnit_Framework_TestCase
{
    public function setUp(  )
    {
        parent::setUp();
    }

    public function testHandleReturnesResponse(  )
    {
        $application = new ApplicationKernel();

        $request = new Request();
        $this->assertInstanceOf( '\StendenINF1B\PortfolioCMS\Http\Response', $application->handle( $request ));
    }


}