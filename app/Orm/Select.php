<?php

namespace App\Orm;

use \PDO;
class Select
{
    private string|array $field = "*";
    private string|array $tableName;
    private ?string $orderBy = null;
    private ?string $groupBy = null;
    private ?int $limit = null;
    private ?int $offset = null;
    private PDO $connect;
    public function __construct()
    {
        $this->connect = (new Connect)->getConnect();
    }
    public function setField(string|array $value) : void
    {
    $this->field = $value;
    }
    public function getField() : string|array
    {
        if(!is_array($this->field))
        {
            return $this->field;
        }
    }
    public function setTableName(string|array $name) : void
    {
        $this->tableName = $name;
    }
    public function getTableName() : string|array
    {
        if(!is_array($this->tableName))
        {
            return $this->tableName;
        }
    }
    public function setOrderBy(string $orderBy) : void
    {
        $this->orderBy = $orderBy;
    }

    public function setGroupBy(string $groupBy) : void
    {
        $this->groupBy = $groupBy;
    }

    public function setLimit(int $limit) : void
    {
        $this->limit = $limit;
    }

    public function setOffset(int $offset) : void
    {
        $this->offset = $offset;
    }
    public function build() : string
    {
       $query = "SELECT " . $this->getField() . " FROM " .  $this->getTableName();
        if ($this->groupBy) {
            $query .= " GROUP BY " . $this->groupBy;
        }

        if ($this->orderBy) {
            $query .= " ORDER BY " . $this->orderBy;
        }

        if ($this->limit !== null) {
            $query .= " LIMIT " . $this->limit;
        }

        if ($this->offset !== null) {
            $query .= " OFFSET " . $this->offset;
        }
        return $query;
    }
    public  function get() : ?array
    {
        $sql = $this->build();
        echo "Generated SQL: " . $sql . "\n"; // Отладочный вывод

        $result = $this->connect->query($this->build(), PDO::FETCH_ASSOC);

        return $result->fetchAll();
    }

}