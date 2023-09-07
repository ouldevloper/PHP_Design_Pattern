<?php
namespace Observer;
interface IObserver
{
    public function attach(IProduct $product);
    public function detach(IProduct $product);
    public function notify();
}

