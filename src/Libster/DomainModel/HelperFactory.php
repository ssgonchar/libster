<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 27.03.2016
 * Time: 1:52
 */

namespace Libster\DomainModel;

class HelperFactory
{
    /**
     * @param DomainObject $type
     * @return Collection
     */
    public static function getCollection(DomainObject $type)
    {
        return new Collection();
    }
}