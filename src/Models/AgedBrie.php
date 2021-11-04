<?php


namespace Runroom\GildedRose\Models;


use Runroom\GildedRose\Item;

class AgedBrie extends BaseAbstract
{
    public function updateQuality(Item $item): void
    {
        if ($item->quality < 50) {
            $this->increase($item);
        }

        $this->decrease($item, false);

        if ($item->sell_in < 0 && $item->quality < 50) {
            $this->increase($item);
        }
    }

}
