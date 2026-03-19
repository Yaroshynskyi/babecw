<?php
namespace models;

use core\Model;

class Categories extends Model
{
    public static $tableName = 'categories';

    public static function getAllCategories()
    {
        return self::getAll(self::$tableName);
    }
}