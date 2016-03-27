<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 27.03.2016
 * Time: 1:42
 */

namespace Libster\DomainModel;

/**
 * Class DomainObject
 * @package Libster\DomainModel
 */
abstract class DomainObject
{
    public function __construct(\PDO $PDO)
    {
    }
    /**
     * @param $id
     * @return DomainObject
     */
    public function find($id)
    {
    }

    /**
     * @return Collection
     */
    public function findAll()
    {
        return HelperFactory::getCollection(self::__construct());
    }

    /**
     * @param array $fields
     * @return DomainObject
     */
    public function createObject(array $fields)
    {
    }

    public function insert(DomainObject $obj)
    {
    }

    public function update(DomainObject $obj)
    {
    }

    /**
     * @param DomainObject $obj
     */
    abstract protected function doInsert(DomainObject $obj);

    /**
     * @param array $fields
     * @return DomainObject
     */
    abstract protected function doCreateObject(array $fields);

    /**
     * @return \PDOStatement
     */
    abstract protected function selectStmt();

    /**
     * @return \PDOStatement
     */
    abstract protected function selectAllStmt();
}