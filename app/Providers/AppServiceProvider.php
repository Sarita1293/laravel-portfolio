<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\PersonalDetail;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\SkillCategory;
use App\Models\Skill;
use App\Models\FAQ;
use App\Models\Service;
use App\Models\CurrentLearning;

use App\Observers\PersonalDetailObserver;
use App\Observers\ProjectObserver;
use App\Observers\EducationObserver;
use App\Observers\ExperienceObserver;
use App\Observers\SkillCategoryObserver;
use App\Observers\SkillObserver;
use App\Observers\FAQObserver;
use App\Observers\ServiceObserver;
use App\Observers\CurrentLearningObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

        public function boot(): void
        {
            View::composer(
                'admin.layouts.app',
                function ($view) {

                    $personalDetail = PersonalDetail::first();

                    $view->with(
                        'personalDetail',
                        $personalDetail
                    );

                }
            );

             // Redis Cache Invalidation Observer
            Project::observe(ProjectObserver::class);
            PersonalDetail::observe(PersonalDetailObserver::class);
            Education::observe(EducationObserver::class);
            Experience::observe(ExperienceObserver::class);
            SkillCategory::observe(SkillCategoryObserver::class);
            Skill::observe(SkillObserver::class);
            FAQ::observe(FAQObserver::class);
            Service::observe(ServiceObserver::class);
            CurrentLearning::observe(CurrentLearningObserver::class);
        }
    
}
