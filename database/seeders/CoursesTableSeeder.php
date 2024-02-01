<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        $coursesData = [
            [
                'title' => 'Introduction to Laravel',
                'description' => 'Learn the basics of Laravel framework.',
                'instructor' => 'John Doe',
                'duration_hours' => 10,
            ],
            [
                'title' => 'Advanced PHP Techniques',
                'description' => 'Explore advanced PHP programming techniques.',
                'instructor' => 'Jane Smith',
                'duration_hours' => 15,
            ],
            [
                'title' => 'Web Development with JavaScript',
                'description' => 'Build dynamic web applications with JavaScript.',
                'instructor' => 'Sam Johnson',
                'duration_hours' => 20,
            ],
            [
                'title' => 'Database Design Fundamentals',
                'description' => 'Learn the fundamentals of database design.',
                'instructor' => 'Alice Williams',
                'duration_hours' => 12,
            ],
            [
                'title' => 'Responsive Web Design',
                'description' => 'Create responsive and mobile-friendly websites.',
                'instructor' => 'Bob Anderson',
                'duration_hours' => 18,
            ],
        ];
        //php artisan db:seed --class=CoursesTableSeeder

        foreach ($coursesData as $course) {
            Course::create($course);
        }

    }
}

