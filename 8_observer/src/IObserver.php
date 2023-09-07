<?php

interface Observer
{
    public function attach();
    public function detach();
    public function notify();
}

