<?php

namespace App\Services\Contracts;

interface CartServiceContract
{
    public function store($request);
    public function open();
    public function isEmpty();
    public function delete($product_id);
    public function purchase($request);
}
