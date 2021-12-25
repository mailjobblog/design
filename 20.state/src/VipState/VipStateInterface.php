<?php
namespace Design\Src\VipState;

use Design\Src\Services\ItemService;

interface VipStateInterface
{
    public function discount(ItemService $item);
}