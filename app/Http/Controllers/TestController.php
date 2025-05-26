<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class TestController extends Controller
{
    // 

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
