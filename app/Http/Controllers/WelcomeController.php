<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'hello world wordl wordl';
    }
    
    // public function greeting(){
    //     return view ('blog.hello',['name'=> 'Zakiereeee']);
    // }
    
    public function greeting(){
        return view ('blog.hello')
                ->with('name','Afif')
                ->with('occupation',' Mr HULK');
    }
}
