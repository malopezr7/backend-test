<?php


namespace Runroom\GildedRose\Builders;


use Runroom\GildedRose\Item;
use Runroom\GildedRose\Models\AgedBrie;
use Runroom\GildedRose\Models\Backstage;
use Runroom\GildedRose\Models\BaseAbstract;
use Runroom\GildedRose\Models\DefaultModel;
use Runroom\GildedRose\Models\Sulfuras;

class BaseBuilder
{

    public static function build(Item $item):BaseAbstract
    {
        switch ($item->name) {
            case 'Aged Brie':
                return new AgedBrie();
            case 'Backstage passes to a TAFKAL80ETC concert':
                return new Backstage();
            case 'Sulfuras, Hand of Ragnaros':
                return new Sulfuras();
            default:
                return new DefaultModel();
        }
    }

}
