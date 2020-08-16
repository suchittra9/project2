<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Suchittra Muangman",
            "age" => 26,
        ];
        return view("welcome", $data);
    }
}
