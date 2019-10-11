<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public function home()
    
    {
        
     /*
        $tasks = [
    
    'Go to the store',
    
    'go to the market',
    
    'go to work'
    ];
    */
return view('welcome', [
   // 'tasks' => $tasks, 
    
    'foo' => 'foobar'
    ]);
    //
}

public function about()
{
return view ('about');
}

public function contact()
{
    return view ('contact');
}

public function projects()
{
    $projects = \App\project::all();
return view ('project');
}
}
