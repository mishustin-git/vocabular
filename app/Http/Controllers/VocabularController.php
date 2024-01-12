<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;

class VocabularController extends Controller
{
    public function showAllWords():View{
        // return 'showAllWords';
        return view('showAllWords');
    }
}
