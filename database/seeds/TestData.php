<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class TestUsersTableSeeder extends Seeder {
    public function run(){
        //Managers
        User::create([  'first_name' => 'Jacob','last_name' => 'William','password' => bcrypt('Test@1234'), 'email' => 'manager.test998@gmail.com',
            'role_request' => 'manager','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Abigail','last_name' => 'Madison','password' => bcrypt('Test@1234'), 'email' => 'manager.test997@gmail.com',
            'role_request' => 'manager','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Anthony','last_name' => 'Matthew','password' => bcrypt('Test@1234'), 'email' => 'manager.test996@gmail.com',
            'role_request' => 'manager','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Ella','last_name' => 'Addison','password' => bcrypt('Test@1234'), 'email' => 'manager.test9950@gmail.com',
            'role_request' => 'manager','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Joshua','last_name' => 'Liam','password' => bcrypt('Test@1234'), 'email' => 'manager.test9960@gmail.com',
            'role_request' => 'manager','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        // Business Owners
        User::create([  'first_name' => 'Naresh','last_name' => 'Pasupuleti','password' => bcrypt('Test@1234'), 'email' => 'nareshpasupuleti@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Andrew','last_name' => 'James','password' => bcrypt('Test@1234'), 'email' => 'borrower_test11@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'David','last_name' => 'Benjamin','password' => bcrypt('Test@1234'), 'email' => 'bo_sample@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Logan','last_name' => 'Joseph','password' => bcrypt('Test@1234'), 'email' => 'bo_sample2@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Sofia','last_name' => 'Victoria','password' => bcrypt('Test@1234'), 'email' => 'bo_sample3@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Ryan','last_name' => 'Samuel','password' => bcrypt('Test@1234'), 'email' => 'bo_ sample4@yahoo.com',
            'role_request' => 'businessowner','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        //Investors
        User::create([  'first_name' => 'Ravi','last_name' => 'Singhania','password' => bcrypt('Test@1234'), 'email' => 'singhaniaravi@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Lucas','last_name' => 'Dylan','password' => bcrypt('Test@1234'), 'email' => 'investor_test5@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Zoe','last_name' => 'Hailey','password' => bcrypt('Test@1234'), 'email' => 'investor_test6@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Layla','last_name' => 'Gabriella','password' => bcrypt('Test@1234'), 'email' => 'inv_sample@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Nevaeh','last_name' => 'Kaylee','password' => bcrypt('Test@1234'), 'email' => 'inv_sample2@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Carter','last_name' => 'Nicholas','password' => bcrypt('Test@1234'), 'email' => 'inv_sample3@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'first_name' => 'Owen','last_name' => 'Jack','password' => bcrypt('Test@1234'), 'email' => 'inv_sample4@yahoo.com',
            'role_request' => 'investor','verified' => 1, 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class TestUsersRolesTableSeeder extends Seeder
{
    public function run()
    {
        $managerrole = Role::where('name','manager')->first();
        $manager1 = User::where('first_name','Jacob')->first();
        $manager1->attachRole($managerrole);
        $manager2 = User::where('first_name','Abigail')->first();
        $manager2->attachRole($managerrole);
        $manager3 = User::where('first_name','Anthony')->first();
        $manager3->attachRole($managerrole);
        $manager4 = User::where('first_name','Ella')->first();
        $manager4->attachRole($managerrole);
        $manager5 = User::where('first_name','Joshua')->first();
        $manager5->attachRole($managerrole);

//        $borrowerrole = Role::where('name','businessowner')->first();
//        $borrower1 = User::where('first_name','Naresh')->first();
//        $borrower1->attachRole($borrowerrole);
//        $borrower2 = User::where('first_name','Andrew')->first();
//        $borrower2->attachRole($borrowerrole);
//        $borrower3 = User::where('first_name','David')->first();
//        $borrower3->attachRole($borrowerrole);
//        $borrower4 = User::where('first_name','Logan')->first();
//        $borrower4->attachRole($borrowerrole);
//        $borrower5 = User::where('first_name','Sofia')->first();
//        $borrower5->attachRole($borrowerrole);
//        $borrower6 = User::where('first_name','Ryan')->first();
//        $borrower6->attachRole($borrowerrole);
//
//        $investorrole = Role::where('name','investor')->first();
//        $investor1 = User::where('first_name','Ravi')->first();
//        $investor1->attachRole($investorrole);
//        $investor2 = User::where('first_name','Lucas')->first();
//        $investor2->attachRole($borrowerrole);
//        $investor3 = User::where('first_name','Zoe')->first();
//        $investor3->attachRole($borrowerrole);
//        $investor4 = User::where('first_name','Layla')->first();
//        $investor4->attachRole($borrowerrole);
//        $investor5 = User::where('first_name','Nevaeh')->first();
//        $investor5->attachRole($borrowerrole);
//        $investor6 = User::where('first_name','Carter')->first();
//        $investor6->attachRole($borrowerrole);
//        $investor7 = User::where('first_name','Owen')->first();
//        $investor7->attachRole($borrowerrole);
    }
}