<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class SkillCategoryMappingSeeder extends Seeder
{
    public function run(): void
    {
        $mapping = [

            'Backend' => [
                'PHP',
                'Laravel',
                'PHP-Slim (Symfony Components)',
                'REST API',
                'AJAX',
                'JSON',
            ],

            'Frontend' => [
                'HTML5',
                'CSS3',
                'JQuery',
                'Vue.js',
                'Bootstrap',
            ],

            'Database' => [
                'MySQL',
                'PostgreSQL',
                'SQL Server',
            ],

            'Cloud & DevOps' => [
                'Docker',
                'AWS',
                'CICD',
            ],

            'Operating Systems' => [
                'Linux',
                'Windows',
            ],

            'Tools' => [
                'Git',
                'GitHub',
                'SVN',
                'Postman',
                'JIRA',
                'VS Code',
            ],

        ];

        foreach ($mapping as $categoryName => $skills) {

            $category = SkillCategory::where('name', $categoryName)->first();

            if (!$category) {
                throw new Exception("Category '{$categoryName}' not found.");
            }

            Skill::whereIn('name', $skills)
                ->update([
                    'skill_category_id' => $category->id,
                ]);
        }
    }
}