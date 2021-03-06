<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 22-12-2016 17:35
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );

namespace StendenINF1B\PortfolioCMS\Kernel\Database\Helper;

use StendenINF1B\PortfolioCMS\Kernel\Helper\ParameterContainer;

class EntityCollection extends ParameterContainer implements \IteratorAggregate
{
    /**
     * Gets an new EntityCollection filtered by the entities which field has an certain value.
     *
     * @param string $fieldName
     * @param        $hasValue
     * @return EntityCollection
     */
    public function getEntitiesWith( string $fieldName, $hasValue ) : EntityCollection
    {
        $filteredEntityCollection = new EntityCollection();

        foreach ($this->parameters as $entityId => $entity)
        {
            $methodString = 'get' . ucfirst( $fieldName );

            if ( method_exists( $entity, $methodString ) )
            {
                if ( $entity->{$methodString}() == $hasValue )
                {
                    $filteredEntityCollection->set( $entityId, $entity );
                }
            }
            else
            {
                // The field name was not found so return an empty entity collection.
                return $filteredEntityCollection;
            }
        }
        return $filteredEntityCollection;
    }

    /**
     * Gets the first entity from the collection that has an property with an certain value.
     *
     * @param string $fieldName
     * @param        $hasValue
     * @return bool
     */
    public function getEntityWith( string $fieldName, $hasValue )
    {
        foreach ($this->parameters as $entityId => $entity)
        {
            $methodString = 'get' . ucfirst( $fieldName );

            if ( method_exists( $entity, $methodString ) )
            {
                if ( $entity->{$methodString}() == $hasValue )
                {
                    return $entity;
                }
            }
        }
        return FALSE;
    }

    /**
     * This function sorts an entity collection by an certain field name.
     *
     * @param string $fieldName
     */
    public function sortByField( string $fieldName )
    {
        usort( $this->parameters, function( $a, $b ) use ( $fieldName ){
            return ($a->$fieldName < $b->$fieldName) ? -1 : 1;
        } );
        return $this->parameters;
    }

    /**
     * This merges an entity collection with an other entity collection.
     *
     * @param EntityCollection $collection
     * @return array
     */
    public function mergeWith( EntityCollection $collection )
    {
        return array_merge( $this->parameters, $collection->getAsArray() );
    }

    /**
     * Gets an Array iterator for use with an foreach loop.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return parent::getIterator();
    }

}