<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'professional_summary' => [
        'Hardworking College Student seeking employment.',
        'Bringing forth a motivated attitude and a variety of powerful skills.',
        'Adept in various social media platforms and office technology programs.',
        'Committed to utilizing my skills to further the mission of a company.',
        'Dedicated Customer Service Representative dedicated to providing quality care for ultimate customer satisfaction.',
        'Proven ability to establish and maintain excellent communication and relationships with clients.',
        'Adept in general accounting and finance transactions.',
        'Dedicated to identifying customer needs and delivering effective solutions to all problems.',
        'Excellent time management skills combined with a superior knowledge of the customer service industry.',
        'Bilingual, hardworking, and ready to join my next team.',
        'Resourceful and dedicated High School student with excellent analytical skills and a demonstrated commitment to providing great customer service.',
        'Strong organizational abilities with proven successes managing multiple academic projects and volunteering events.',
        'Well-rounded and professional team player dedicated to continuing academic pursuits at a collegiate level.',
        'Dedicated Nursing Student with the ability to multitask and work well with others.',
        'Patient-care oriented, bringing forth a compassionate and friendly attitude.',
        'Highly organized, and skilled in written and verbal communication.',
        'Committed to utilizing my skills to help others, while working towards the mission of a company.',
        'A strong leader who works well under pressure, and exudes positivity.',
        'Experienced Software Developer adept in bringing forth expertise in design, installation, testing and maintenance of software systems.',
        'Proficient in various platforms, languages, and embedded systems.',
        'Experienced with the latest cutting edge development tools and procedures.',
        'Able to effectively self-manage during independent projects, as well as collaborate as part of a productive team.',
        'Dynamic Executive with six years of experience helping organizations reach their full potential.',
        'Adept in making key decisions and working with other professionals to achieve goals and solve problems.',
        'Experienced in managing employee and community programs, and dedicated to successfully directing business operations.',
        'Experienced and self-motivated Office Secretary with ten+ years of industry experience overseeing the main offices of schools.',
        'Highly competent communicator skilled in multitasking and effectively communicating with others.',
        'Bringing forth a proven track record of successfully managing offices, and helping to lead school professionals to work toward reaching goals.',
        'Experienced and dedicated Data Analyst with several years of experience identifying efficiencies and problem areas within data streams, while communicating needs for projects.',
        'Adept at receiving and monitoring data from multiple data streams, including Access, SQL, and Excel data sources.',
        'Bringing forth the ability to synthesize quantitative information and interact effectively with colleagues and clients.',
        'Proven track record of generating summary documents for senior management for monthly and quarterly audit and compliance reporting.',
        'Dedicated Visual Artist with a decorated background in a variety of artistic mediums.',
        'Highly experienced in illustration and animation.',
        'Adept at working independently and collaboratively on projects, and committed to achieving visual innovation and beauty.',
        'Bringing forth the ability to work well with others and utilize my art skills to visually enhance projects.',
        'Passionate Doctor with extensive experience in Internal Medicine and hospital settings.',
        'Adept in properly diagnosing and strategizing for the best treatment plans for patients.',
        'Bringing forth an empathetic and professional attitude, committed to providing patients with the best care possible.',
        'Experienced in counseling patients on preventative care and positive lifestyle changes.',
        'A strong leader who works well under pressure and with other medical professionals.',
    ],

];
