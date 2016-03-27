<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 27.03.2016
 * Time: 2:21
 */

namespace Libster\DomainModel\DomainObjects;


use Libster\DomainModel\DomainObject;

/**
 * {@inheritDoc}
 */
class Biz extends DomainObject
{

    /**
     * @param DomainObject $obj
     */
    protected function doInsert(DomainObject $obj)
    {
        // TODO: Implement doInsert() method.
    }

    /**
     * @param array $fields
     * @return DomainObject
     */
    protected function doCreateObject(array $fields)
    {
        // TODO: Implement doCreateObject() method.
    }

    /**
     * @return \PDOStatement
     */
    protected function selectStmt()
    {
        // TODO: Implement selectStmt() method.
    }

    /**
     * @return \PDOStatement
     */
    protected function selectAllStmt()
    {
        // TODO: Implement selectAllStmt() method.
    }
}