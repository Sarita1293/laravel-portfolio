<?php

namespace App\Observers;

use App\Models\SkillCategory;
use Illuminate\Support\Facades\Cache;

class SkillCategoryObserver
{
    /**
     * Handle the SkillCategory "created" event.
     */
    public function created(SkillCategory $skillCategory): void
    {
         Cache::forget('home_page');
    }

    /**
     * Handle the SkillCategory "updated" event.
     */
    public function updated(SkillCategory $skillCategory): void
    {
         Cache::forget('home_page');
    }

    /**
     * Handle the SkillCategory "deleted" event.
     */
    public function deleted(SkillCategory $skillCategory): void
    {
         Cache::forget('home_page');
    }

    /**
     * Handle the SkillCategory "restored" event.
     */
    public function restored(SkillCategory $skillCategory): void
    {
        //
    }

    /**
     * Handle the SkillCategory "force deleted" event.
     */
    public function forceDeleted(SkillCategory $skillCategory): void
    {
        //
    }
}
