<?php

namespace Runroom\GildedRose;

class GildedRose
{

    private $items;

    function __construct($items)
    {
        $this->items = $items;
    }

    function update_quality()
    {
        foreach ($this->items as $item) {

            switch ($item->name) {
                case 'Aged Brie':
                    $item->quality += 1;
                    $item->sell_in -= 1;

                    if ($item->sell_in <= 0) {
                        $item->quality += 1;
                    }
                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }
                    return;
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality++;

                    if ($item->sell_in <= 10) {
                        $item->quality += 1;
                    }

                    if ($item->sell_in <= 5) {
                        $item->quality += 1;
                    }

                    if ($item->quality > 50) {
                        $item->quality = 50;
                    }

                    if ($item->sell_in <= 0) {
                        $item->quality = 0;
                    }
                    $item->sell_in -= 1;
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    // Doing nothing
                    break;

                default:
                    $item->sell_in -= 1;
                    if ($item->sell_in <= 0) {
                        $item->quality -= 1;
                    }
                    break;
            }
        }
    }
}
