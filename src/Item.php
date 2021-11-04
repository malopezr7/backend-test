<?php

namespace Runroom\GildedRose;

class Item
{
    public String $name;
    public int $sell_in;
    public int $quality;

    public function __construct(String $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}
