<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CurrentLearning;

class CurrentLearningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurrentLearning::insert([

            [
                'logo' => 'bi bi-cloud-fill',
                'title' => 'AWS Cloud',
                'description' => 'Preparing for AWS Cloud Practitioner with hands-on practice in VPC, IAM, S3, EC2, Lambda, and CloudWatch to build secure, scalable apps.',
                'display_order' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'logo' => 'bi bi-box-seam',
                'title' => 'Docker & Containers',
                'description' => 'Enhancing my Docker expertise by optimizing multi-container workflows, improving image efficiency, and exploring orchestration with Kubernetes.',
                'display_order' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'logo' => 'bi bi-diagram-3-fill',
                'title' => 'CI/CD & DevOps',
                'description' => 'Exploring GitHub Actions, CI/CD workflows, and automation to build and deploy applications faster,  with automated testing integration.',
                'display_order' => 3,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
