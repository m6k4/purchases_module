<?php

namespace App\Services;

class CollectionsRecords
{
    private static $records = [];

    /**
     * Set records.
    * @param Array $records
    */
    public function setRecords(array $records): void
    {
        self::$records = $records;
    }

    /**
     * Get all records.
    */
    public function getAllRecords(): array
    {
        return self::$records;
    }

    /**
     * Get total.
     * @return Integer
    */
    public function getTotal(): Int
    {
        return count(self::$records);
    }
}
