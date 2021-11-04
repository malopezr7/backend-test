<?php

namespace Runroom\GildedRose\Models;

use Runroom\GildedRose\Item;

abstract class BaseAbstract
{
    abstract public function updateQuality(Item $item): void;


    protected function increase(Item $item): void
    {
        $item->quality++;
    }

    protected function decrease(Item $item, bool $isQuality = true): void
    {
        if ($isQuality) {
            $item->quality--;
        } else {
            $item->sell_in--;
        }
    }
}
