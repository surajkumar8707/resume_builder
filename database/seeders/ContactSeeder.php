<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Contact::truncate();

        $contacts = [
            [
                'name' => 'Rajesh Kumar',
                'email' => 'rajeshkumar@example.com',
                'subject' => 'Query about booking',
                'message' => 'I am interested in booking a tour package. Can you provide more details?',
            ],
            [
                'name' => 'Priya Singh',
                'email' => 'priyasingh@example.com',
                'subject' => 'Feedback on recent trip',
                'message' => 'I recently visited your park and had a wonderful experience. Thank you!',
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'subject' => 'Inquiry about facilities',
                'message' => 'Could you please provide information about the facilities available at the park?',
            ],
            [
                'name' => 'Lisa Sharma',
                'email' => 'lisasharma@example.com',
                'subject' => 'Group booking request',
                'message' => 'We are planning a group visit. Can you offer any discounts?',
            ],
            [
                'name' => 'Amit Patel',
                'email' => 'amitpatel@example.com',
                'subject' => 'Availability query',
                'message' => 'Are there any safari slots available for the upcoming weekend?',
            ],
            [
                'name' => 'Neha Gupta',
                'email' => 'nehagupta@example.com',
                'subject' => 'Accommodation inquiry',
                'message' => 'Can you suggest affordable accommodation options near the park?',
            ],
            [
                'name' => 'Deepak Singh',
                'email' => 'deepaksingh@example.com',
                'subject' => 'Event booking details',
                'message' => 'We are interested in hosting an event at your park. What are the arrangements available?',
            ],
            [
                'name' => 'Shreya Jain',
                'email' => 'shreyajain@example.com',
                'subject' => 'Adventure activities information',
                'message' => 'Could you provide details about the adventure activities offered at the park?',
            ],
            [
                'name' => 'Aryan Verma',
                'email' => 'aryanverma@example.com',
                'subject' => 'Feedback on accommodation',
                'message' => 'I stayed at one of your resorts recently. Here are my thoughts and suggestions.',
            ],
            [
                'name' => 'Anjali Khanna',
                'email' => 'anjalikhanna@example.com',
                'subject' => 'Safari timing clarification',
                'message' => 'What are the timings for the morning safari? Can we book in advance?',
            ],
            [
                'name' => 'Amit Sharma',
                'email' => 'amitsharma@example.com',
                'subject' => 'Wildlife photography tour',
                'message' => 'I am a photographer interested in wildlife photography. Do you offer specialized tours?',
            ],
            [
                'name' => 'Kavita Reddy',
                'email' => 'kavitareddy@example.com',
                'subject' => 'Resort booking inquiry',
                'message' => 'We are looking to book a resort for a family vacation. What are the options available?',
            ],
            [
                'name' => 'Sanjay Patel',
                'email' => 'sanjaypatel@example.com',
                'subject' => 'Transportation arrangements',
                'message' => 'Can you arrange transportation from the nearest airport to the park?',
            ],
            [
                'name' => 'Pooja Singh',
                'email' => 'poojasingh@example.com',
                'subject' => 'Cancellation policy query',
                'message' => 'What is your policy regarding cancellations and refunds?',
            ],
            [
                'name' => 'Manish Verma',
                'email' => 'manishverma@example.com',
                'subject' => 'Guided tour information',
                'message' => 'Are guided tours available? How can we book them?',
            ],
            [
                'name' => 'Sneha Mishra',
                'email' => 'snehamishra@example.com',
                'subject' => 'Feedback on tour guide',
                'message' => 'Our tour guide was excellent! Please convey our appreciation.',
            ],
            [
                'name' => 'Vikas Singh',
                'email' => 'vikassingh@example.com',
                'subject' => 'Dining options inquiry',
                'message' => 'What dining options are available at the park? Do you cater to special dietary requirements?',
            ],
            [
                'name' => 'Suman Gupta',
                'email' => 'sumangupta@example.com',
                'subject' => 'Safari package details',
                'message' => 'Could you provide information about the different safari packages offered?',
            ],
            [
                'name' => 'Rahul Sharma',
                'email' => 'rahulsharma@example.com',
                'subject' => 'Park entry fees',
                'message' => 'What are the entry fees for adults and children at the park?',
            ],
            [
                'name' => 'Meera Patel',
                'email' => 'meerapatel@example.com',
                'subject' => 'Booking confirmation',
                'message' => 'I have made a booking. Can you confirm the details?',
            ],
        ];

        // foreach ($contacts as $contact) {
        //     Contact::create($contact);
        // }
    }
}
