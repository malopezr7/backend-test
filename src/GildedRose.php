<?php

namespace Runroom\GildedRose;

use phpDocumentor\Reflection\Types\Mixed_;
use Runroom\GildedRose\Builders\BaseBuilder;
use Runroom\GildedRose\Models\AgedBrie;
use Runroom\GildedRose\Models\Backstage;
use Runroom\GildedRose\Models\BaseAbstract;
use Runroom\GildedRose\Models\DefaultModel;
use Runroom\GildedRose\Models\Sulfuras;

class GildedRose
{

    private array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function update_quality(): void
    {
        foreach ($this->items as $item) {
            $builder = BaseBuilder::build($item);
            $this->doUpdate($item, $builder);
        }
    }

    protected function doUpdate(Item $item, BaseAbstract $abstract): void
    {
        $abstract->updateQuality($item);
    }
}
