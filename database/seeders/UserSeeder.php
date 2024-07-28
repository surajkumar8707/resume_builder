<?php

namespace Database\Seeders;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Suraj Kumar Verma',
                'email' => 'suraj@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => 'Aman Kumar Verma',
                'email' => 'aman@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => 'Akash Kumar Verma',
                'email' => 'akash@gmail.com',
                'password' => '123456',
            ],
        ];

        foreach ($users as $user) {
            $user['country'] = 'India';
            $user['state'] = 'Uttar Pradesh';
            $user['city'] = 'Lucknow';
            $user['image'] = 'assets/user/img/bruce-mars.jpg';
            $user['is_default_image'] = 1;
            $user['address'] = 'Lucknow';
            $user['phone'] = '938977005';
            $userData = User::create($user);
            $userData->markEmailAsVerified();

            $myResume = [
                'user_id' => $userData['id'],
                'first_name' => $userData['name'],
                'last_name' => $userData['name'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'address' => $userData['address'],
                'country' => $userData['country'],
                'state' => $userData['state'],
                'city' => $userData['city'],
                'photo' => 'assets/front/images/profile.jpg',
                'professional_summary' => NULL,
            ];
            $resume = Resume::create($myResume);

            $work_experience = [
                [
                    'company_name' => 'Lazlo Software Solution',
                    'start_date' => '2021-09-01',
                    'end_date' => '2022-07-30',
                    'currently_work' => NULL,
                    'country' => $user['country'],
                    'state' => $user['state'],
                    'city' => $user['city'],
                ],
                [
                    'company_name' => 'Next Olive Technology Pvt Ltd',
                    'start_date' => '2021-08-01',
                    'end_date' => '2022-06-28',
                    'currently_work' => NULL,
                    'country' => $user['country'],
                    'state' => $user['state'],
                    'city' => $user['city'],
                ],
                [
                    'company_name' => 'Jamtech Technologies Pvt Ltd',
                    'start_date' => '2021-06-29',
                    'end_date' => NULL,
                    'currently_work' => 'Present',
                    'country' => $user['country'],
                    'state' => $user['state'],
                    'city' => $user['city'],
                ],
            ];

            $education = [
                [
                    'school_name' => 'M.D.M Public Inter College',
                    'degree' => NULL,
                    'field_of_study' => 'High School',
                    'start_date' => '2014-04-01',
                    'end_date' => '2015-06-24',
                    'currently_study' => NULL,
                    'country' => $user['country'],
                    'state' => $user['state'],
                    'city' => $user['city'],
                ],
                [
                    'school_name' => 'M.D.M Public Inter College',
                    'degree' => NULL,
                    'field_of_study' => 'Inermediate',
                    'start_date' => '2016-04-03',
                    'end_date' => '2017-06-25',
                    'currently_study' => NULL,
                    'country' => $user['country'],
                    'state' => $user['state'],
                    'city' => $user['city'],
                ],
            ];
            $skills = [
                [
                    'name' => 'HTML',
                ],
                [
                    'name' => 'CSS',
                ],
                [
                    'name' => 'Javascript',
                ],
                [
                    'name' => 'jQuery',
                ],
                [
                    'name' => 'Ajax',
                ],
                [
                    'name' => 'Bootstrap',
                ],
                [
                    'name' => 'PHP',
                ],
                [
                    'name' => 'MySQL',
                ],
                [
                    'name' => 'Laravel',
                ],
                [
                    'name' => 'Codeigniter',
                ],
                [
                    'name' => 'React-js',
                ],
                [
                    'name' => 'Wordpress',
                ],
            ];
            $languages = [
                [
                    'name' => 'Hindi',
                ],
                [
                    'name' => 'English',
                ],
            ];

            $resume->workExperiences()->createMany($work_experience);
            $resume->educations()->createMany($education);
            $resume->skills()->createMany($skills);
            $resume->languages()->createMany($languages);
        }
    }
}
