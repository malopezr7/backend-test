<?php

namespace Runroom\GildedRose;

use Runroom\GildedRose\Builders\BaseBuilder;
use Runroom\GildedRose\Models\AgedBrie;
use Runroom\GildedRose\Models\Backstage;
use Runroom\GildedRose\Models\BaseAbstract;
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
           $builder = BaseBuilder::build($item);
           $this->doUpdate($item, $builder);
        }
    }

    public function doUpdate(Item $item, BaseAbstract $abstract)
    {
        $abstract->updateQuality($item);
    }
}
