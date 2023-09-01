<?php

namespace AdapterPattern;

class VieculeAdapter implements Viecule
{
    public function __construct(public Becycle $bc)
    {
    }

    public function speed(): string
    {
        return $this->bc->speed();
    }

    public function color(): string
    {
        return $this->bc->color();
    }

    public function setsNumber(): int
    {
        return $this->bc->sets();
    }
}