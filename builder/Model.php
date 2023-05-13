<?php

require 'IBuilder.php';

class Model implements BuilderInterface{
    private string $Sql = "";
    private static $obj;
    public function __construct(){
        self::$obj = $this;
    }
    public static function where_(){
        
        $params = func_get_args();
        $sql = "select * from ".static::$table." where ";
        self::$obj->Sql  .= $sql . join(",",$params);
        return self::$obj;
    }

    public function where(...$prarms){
        $params = func_get_args();
        $this->Sql .= " and ". join(",",$params);
        return $this;
    }

    public function orderby(){
        $params = func_get_args();

        $this->Sql .= " order By ". join(" ",$params);
        return $this;
    }
    public function gte(){
        $params = func_get_args();

        $this->Sql .=" and ". join(",",$params);
        return $this;
    }
    public final function get()
    {
        return $this->Sql;
    }
}