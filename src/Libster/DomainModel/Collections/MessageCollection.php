<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 27.03.2016
 * Time: 2:27
 */

namespace Libster\DomainModel\Collections;


use Libster\DomainModel\Collection;
use Libster\DomainModel\DomainObjects\Message;
use Libster\DomainModel\DomainObjects\ObjectSpecializations\MessageCollectionSpecialize;

/**
 * Class MessageCollection
 * @package Libster\DomainModel\Collections
 */
class MessageCollection extends Collection implements MessageCollectionSpecialize
{
    public function targetClass()
    {
    }

    public function add(Message $obj)
    {
    }

}