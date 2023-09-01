<?php

namespace AdapterPattern;

interface Viecule 
{
    public function speed():string;
    public function color():string;
    public function setsNumber():int;
}