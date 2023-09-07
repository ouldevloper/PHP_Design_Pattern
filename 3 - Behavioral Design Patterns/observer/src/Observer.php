<?php
namespace Observer;
class Observer implements IObserver
{
    private array $observers;
    public function attach(IProduct $product)
    {
        $this->observers[$product->name] = $product;
    }

    public function detach(IProduct $product)
    {
        unset($this->observers[$product->name]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            echo "{$observer->name} has been notified";
        }
    }
}