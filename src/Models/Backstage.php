<?php


namespace Runroom\GildedRose\Models;


use Runroom\GildedRose\Item;

class Backstage extends BaseAbstract
{

    public function updateQuality(Item $item)
    {
        if ($item->quality < 50){
            $this->increase($item);

            if ($item->sell_in < 11 && $item->quality < 50){
                $this->increase($item);
            }
            if ($item->sell_in < 6 && $item->quality<50){
                $this->increase($item);
            }
        }

        $this->decrease($item, false);

        if ($item->sell_in < 0){
            $item->quality = 0;
        }
    }
}
