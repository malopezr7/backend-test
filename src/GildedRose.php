<?php

namespace Runroom\GildedRose;

use Runroom\GildedRose\Models\AgedBrie;
use Runroom\GildedRose\Models\Backstage;
use Runroom\GildedRose\Models\DefaultModel;
use Runroom\GildedRose\Models\Sulfuras;

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
                    (new AgedBrie())->updateQuality($item);
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    (new Backstage())->updateQuality($item);
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    (new Sulfuras())->updateQuality($item);
                    break;

                default:
                    (new DefaultModel())->updateQuality($item);
                    break;
            }
        }
    }
}
