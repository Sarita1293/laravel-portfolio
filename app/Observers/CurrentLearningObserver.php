<?php

namespace App\Observers;

use App\Models\CurrentLearning;
use Illuminate\Support\Facades\Cache;

class CurrentLearningObserver
{
    /**
     * Handle the CurrentLearning "created" event.
     */
    public function created(CurrentLearning $currentLearning): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the CurrentLearning "updated" event.
     */
    public function updated(CurrentLearning $currentLearning): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the CurrentLearning "deleted" event.
     */
    public function deleted(CurrentLearning $currentLearning): void
    {
        Cache::forget('home_page');
    }

    /**
     * Handle the CurrentLearning "restored" event.
     */
    public function restored(CurrentLearning $currentLearning): void
    {
        //
    }

    /**
     * Handle the CurrentLearning "force deleted" event.
     */
    public function forceDeleted(CurrentLearning $currentLearning): void
    {
        //
    }
}
