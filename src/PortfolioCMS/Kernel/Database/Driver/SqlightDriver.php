<?php
/**
 * Author: Joris Rietveld <jorisrietveld@protonmail.com>
 * Date: 14-09-2015 - 12:02
 *
 * Todo rewrite this driver to work with the new framework. DOES NOT WORK AT THE MOMENT.
 */

namespace StendenINF1B\PortfolioCMS\Kernel\Database\Driver;

use InvalidArgumentException;
use PDO;
use StendenINF1B\PortfolioCMS\Kernel\Helper\ParameterContainer;


class SqlightDriver extends Driver implements DriverInterface
{

	/**
	 * This method will connect to a Sqlight database
	 *
	 * @param array $config
	 *
	 * @return mixed
	 */
	public function connect( ParameterContainer $config )
	{
		$options = $this->getOptions( $config );

		/**
		 * For an SQLight in memory database
		 */
		if( $config[ 'database' ] == 'memory' )
		{
			return $this->openConnection( 'sqlite::memory:', $config, $options );
		}

		$sqlightPath = realpath( $config[ 'database' ] );

		if( $sqlightPath == false )
		{
			throw new InvalidArgumentException( "The SQLight database does not exist at: {$sqlightPath}." );
		}

		return $this->openConnection( "sqlite:{$sqlightPath}", $config, $options );
	}
}