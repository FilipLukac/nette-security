<?php

namespace IPub\Security\Entities;
use Nette\Security\IAuthorizator;


interface IPrivilege
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string|IAuthorizator::ALL
     */
    public function getValue();

    /**
     * @return Permission
     */
    public function getPermission();

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value);
}