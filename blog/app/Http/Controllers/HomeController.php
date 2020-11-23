<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function blog_post($id,$welcome=1){
        $pages = [
            1=> [
                'tid' => "from page 1",
            ],
            2=> [
                'tid' => "from page 2",
            ]
        ];
        $welcomes = [
            1=> "<b>Hello</b> ",
            2=> "Welcome to "
        ];
        
        return view('blog-post', ['data' => $pages[$id], 'wel' => $welcomes[$welcome] ]);
    }
}

?>