<?php

namespace Codeilia\LaravelRestfulApi\Transformers;


Abstract class Transformer
{
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    abstract public function transform($item);
}