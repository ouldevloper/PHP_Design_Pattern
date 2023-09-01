<?php
namespace AdapterPattern;

class Car implements Viecule
{
    public final function speed():string
    {
        return "200km";
    }

    public final function color():string
    {
        return "black";
    }

    public final function setsNumber():int
    {
        return 4;
    }
}