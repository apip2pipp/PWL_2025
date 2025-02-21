<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'welcome';
    }

    public function about(){
        return 'Name: M Afif K, NIM 2341760159';
    }

    public function articles($id){
        return "Article Page with id {$id}";
    }
}
