<?php


namespace Runroom\GildedRose\Models;


use Runroom\GildedRose\Item;

class DefaultModel extends BaseAbstract
{

    public function updateQuality(Item $item): void
    {
        if ($item->quality > 0) {
            $this->decrease($item);
        }

        $this->decrease($item, false);

        if ($item->sell_in < 0 && $item->quality > 0) {
            $this->decrease($item);
        }
    }
}
