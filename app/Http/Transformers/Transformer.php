<?php

namespace FollicallyFeral\Http\Transformers;


abstract class Transformer {

    public abstract function transform($item);

    /**
     * Transform a collection
     *
     * @param array $items
     * @return array
     */
    public function transformCollection($items) {
        return array_map([$this, 'transform'], $items);
    }

}