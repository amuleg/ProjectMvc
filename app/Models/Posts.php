<?php

namespace App\Models;
use App\Orm\Select;
Class Posts 
{
    protected string $tableName = "Post";
    private Select $select;

    public function __construct()
    {
        $this->select = new Select;
    }
    public function findOne()
    {
        return [
            "id" => 1,
            "authorId" => 1,
            "author" => "author1",
            "title" => "title1",
            "body" => "body1"
        ];
    }
    public function findAll() : ?array
    {
        $this->select->setTableName($this->tableName);
        return $this->select->get();
    }
    public function findLimitFromOffset(int $offset, int $limit ) : ?array
    {
        $this->select->setTableName($this->tableName);
        $this->select->setOffset($offset);
        $this->select->setLimit($limit);
        return $this->select->get();
    }
    public function findOrderBy(string $name) : ?array
    {
        $this->select->setTableName($this->tableName);
        $this->select->setOrderBy($name);
        return $this->select->get();
    }
    public function findGroupBy(string $name) : ?array
    {
        $this->select->setTableName($this->tableName);
        $this->select->setGroupBy($name);
        return $this->select->get();
    }
}