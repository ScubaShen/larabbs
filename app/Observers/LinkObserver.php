<?php

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{
    // 在後台保存後清空 cache_key 对应的缓存
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}