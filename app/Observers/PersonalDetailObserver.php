<?php

namespace App\Observers;

use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Cache;

class PersonalDetailObserver
{
    /**
     * Handle the PersonalDetail "created" event.
     */
    public function created(PersonalDetail $personalDetail): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the PersonalDetail "updated" event.
     */
    public function updated(PersonalDetail $personalDetail): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the PersonalDetail "deleted" event.
     */
    public function deleted(PersonalDetail $personalDetail): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the PersonalDetail "restored" event.
     */
    public function restored(PersonalDetail $personalDetail): void
    {
        //
    }

    /**
     * Handle the PersonalDetail "force deleted" event.
     */
    public function forceDeleted(PersonalDetail $personalDetail): void
    {
        //
    }
}
