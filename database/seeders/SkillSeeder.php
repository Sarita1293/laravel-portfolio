<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\SkillCategory;


class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $backend = SkillCategory::where('name', 'Backend')->first();
        $frontend = SkillCategory::where('name', 'Frontend')->first();
        $database = SkillCategory::where('name', 'Database')->first();
        $cloudDevOps = SkillCategory::where('name', 'Cloud & DevOps')->first();
        $api = SkillCategory::where('name', 'API')->first();
        $operatingSystem = SkillCategory::where('name', 'Operating Systems')->first();    
        $tool = SkillCategory::where('name', 'Tools')->first();
        $versionControl = SkillCategory::where('name', 'Version Control')->first();
        $projectManagement = SkillCategory::where('name', 'Project Management')->first();
        $ideEditor = SkillCategory::where('name', 'Editor')->first();


        Skill::insert([

            [
                'skill_category_id' => $backend->id,
                'name' => 'PHP',
                'percentage' => 90,
                'display_order' => 1,
                'status' => true,
            ],

            [
                'skill_category_id' => $backend->id,
                'name' => 'Laravel',
                'percentage' => 90,
                'display_order' => 2,
                'status' => true,
            ],

            [
                'skill_category_id' => $backend->id,
                'name' => 'PHP-Slim (Symfony Components)',
                'percentage' => 80,
                'display_order' => 3,
                'status' => true,
            ],

            [
                'skill_category_id' => $database->id,
                'name' => 'MySQL',
                'percentage' => 90,
                'display_order' => 4,
                'status' => true,
            ],

            [
                'skill_category_id' => $database->id,
                'name' => 'PostgreSQL',
                'percentage' => 75,
                'display_order' => 5,
                'status' => true,
            ],

            [
                'skill_category_id' => $frontend->id,
                'name' => 'HTML5',
                'percentage' => 95,
                'display_order' => 6,
                'status' => true,
            ],

            [
                'skill_category_id' => $frontend->id,
                'name' => 'CSS3',
                'percentage' => 90,
                'display_order' => 7,
                'status' => true,
            ],

            [
                'skill_category_id' => $frontend->id,
                'name' => 'JQuery',
                'percentage' => 85,
                'display_order' => 8,
                'status' => true,
            ],

            [
                'skill_category_id' => $api->id,
                'name' => 'REST API',
                'percentage' => 85,
                'display_order' => 9,
                'status' => true,
            ],

            [
                'skill_category_id' => $cloudDevOps->id,
                'name' => 'Docker',
                'percentage' => 70,
                'display_order' => 10,
                'status' => true,
            ],

            [
                'skill_category_id' => $cloudDevOps->id,
                'name' => 'AWS',
                'percentage' => 65,
                'display_order' => 11,
                'status' => true,
            ],

            [
                'skill_category_id' => $versionControl->id,
                'name' => 'Git',
                'percentage' => 90,
                'display_order' => 12,
                'status' => true,
            ],

            [
                'skill_category_id' => $versionControl->id,
                'name' => 'GitHub',
                'percentage' => 90,
                'display_order' => 13,
                'status' => true,
            ],

            [
                'skill_category_id' => $versionControl->id,
                'name' => 'SVN',
                'percentage' => 75,
                'display_order' => 14,
                'status' => true,
            ],

            [
                'skill_category_id' => $operatingSystem->id,
                'name' => 'Linux',
                'percentage' => 70,
                'display_order' => 15,
                'status' => true,
            ],

            [
                'skill_category_id' => $operatingSystem->id,
                'name' => 'Windows',
                'percentage' => 90,
                'display_order' => 16,
                'status' => true,
            ],

            [
                'skill_category_id' => $tool->id,
                'name' => 'Postman',
                'percentage' => 90,
                'display_order' => 17,
                'status' => true,
            ],

            [
                'skill_category_id' => $projectManagement->id,
                'name' => 'JIRA',
                'percentage' => 80,
                'display_order' => 18,
                'status' => true,
            ],

            [
                'skill_category_id' => $ideEditor->id,
                'name' => 'VS Code',
                'percentage' => 95,
                'display_order' => 19,
                'status' => true,
            ],

        ]);
    }
}
