<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Professor;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function insertData() {

        /** 
        $admin =  ['first_name' => 'Adam', 'last_name' => 'Clark', 'email' => 'admin@um5.ac.ma', 'password' => '00000000'];
        Admin::create($admin);

*/
        
        $students = [
            ['first_name' => 'Alice', 'last_name' => 'Smith', 'email' => 'alice_smith@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Bob', 'last_name' => 'Johnson', 'email' => 'bob_johnson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'Emma', 'last_name' => 'Brown', 'email' => 'emma_brown@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'David', 'last_name' => 'Lee', 'email' => 'david_lee@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Olivia', 'last_name' => 'Wilson', 'email' => 'olivia_wilson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'James', 'last_name' => 'Taylor', 'email' => 'james_taylor@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'Sophia', 'last_name' => 'Miller', 'email' => 'sophia_miller@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Daniel', 'last_name' => 'Anderson', 'email' => 'daniel_anderson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'Mia', 'last_name' => 'Garcia', 'email' => 'mia_garcia@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'Liam', 'last_name' => 'Clark', 'email' => 'liam_clark@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
                    ];
    
        foreach ($students as $student) {
            Student::create($student);
        }

        /** 
        $professors = [
            ['first_name' => 'Alice', 'last_name' => 'Smith', 'email' => 'alice_smith@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Bob', 'last_name' => 'Johnson', 'email' => 'bob_johnson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'Emma', 'last_name' => 'Brown', 'email' => 'emma_brown@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'David', 'last_name' => 'Lee', 'email' => 'david_lee@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Olivia', 'last_name' => 'Wilson', 'email' => 'olivia_wilson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'James', 'last_name' => 'Taylor', 'email' => 'james_taylor@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'Sophia', 'last_name' => 'Miller', 'email' => 'sophia_miller@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
            ,
            ['first_name' => 'Daniel', 'last_name' => 'Anderson', 'email' => 'daniel_anderson@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '2A']
            ,
            ['first_name' => 'Mia', 'last_name' => 'Garcia', 'email' => 'mia_garcia@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '3A']
            ,
            ['first_name' => 'Liam', 'last_name' => 'Clark', 'email' => 'liam_clark@um5.ac.ma', 'password' => '11111111', 'sector' => 'GL', 'level' => '1A']
                    ];
    
        foreach ($professor as $professors) {
            Professor::create($student);
        }
         */
    }
}
