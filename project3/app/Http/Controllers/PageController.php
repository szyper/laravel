<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($drive){
        $drives = match($drive){
            "fdd" => "Dyskietka",
            "hdd" => "Dysk twardy",
            "ssd" => "Dysk SSD",
            default => "Błędna wartość"
        };
        return $drives;
    }
}
