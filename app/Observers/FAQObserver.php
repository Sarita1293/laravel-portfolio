<?php

namespace App\Observers;

use App\Models\FAQ;
use Illuminate\Support\Facades\Cache;

class FAQObserver
{
    /**
     * Handle the FAQ "created" event.
     */
    public function created(FAQ $fAQ): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the FAQ "updated" event.
     */
    public function updated(FAQ $fAQ): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the FAQ "deleted" event.
     */
    public function deleted(FAQ $fAQ): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the FAQ "restored" event.
     */
    public function restored(FAQ $fAQ): void
    {
        //
    }

    /**
     * Handle the FAQ "force deleted" event.
     */
    public function forceDeleted(FAQ $fAQ): void
    {
        //
    }
}
