<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeekerRegistration;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    // 

    const JOB_SEEKER = 'seeker'; 

    /* 
    * Sample URL: http://localhost:8000/contact/createSeeker?name=test&email=testinguser787@gmail.com&password=12345&password_confirmation=12345&about=12345 
    * http://localhost:8000/contact/createSeeker?about=12345&email=testinguser787%40gmail.com&name=test&password=12345&password_confirmation=12345   
    */ 
    public function createSeeker(SeekerRegistration $request)  
    {
        // request()->validate(
            
        // ); 
        
        DB::enableQueryLog(); 
        $user = ''; 
        // try {
            $user = User::create([
                'name' => 'Test Seeker'. rand(1, 1000000), 
                'email' => 'seeker'. rand(1,100000) . '@example.com', 
                'password' => bcrypt('123'), 
                'user_type' => self::JOB_SEEKER, 
                'plan' => 'basic',
                // 'about' => request('about', 'a default about as not found in request'),   
                'status' => 'active', 
            ]);  
        // } 
        // catch (\Exception $e) {
            // dump(DB::getQueryLog()); 

            // dd($e); 
            // Handle the exception, log it, or return an error response
            // return back()->withErrors(['error' => 'User creation failed: ' . $e->getMessage()]);
        // }  
        return back(); 

        return view('contact.createSeeker'); 
    } 

    public function index() 
    {
        $a = [5, 10, 15, 20 ]; 
        $b = 10; 
        // return 'list of users'; 
        return view('user.index', compact('a', 'b'));  
    } 

    public function store(){
        User::create([
            'name' => 'Test'. rand(1, 100), 
            'email' => 'tester'. rand(1,100), 
            'password' => '123', 
        ]); 
    }
}
