<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index(){
        //return "db connect";
        //return DB::select('SELECT * FROM users');
        //return DB::table('users')->get();

//        return DB::table('users')
//            ->where('lastname', '=', 'Nowak')
//            ->get();

//        $data = DB::table('users')->count();
//        echo $data;

//        return DB::table('users')
//            ->where('firstName', '=', 'Krystyna2')
//            ->delete();

//        DB::table('users')
//            ->insert(
//              [
//                  'firstName' => 'Krystyna',
//                  'lastName' => 'Nowak',
//                  'birthday' => '2023-02-15'
//              ]
//            );

//         $count = DB::table('users')
//         ->where('firstName', '=', 'Krystyna')
//         ->update(
//             [
//                'lastName' => 'Kowalska',
//                'firstName' => 'Anna',
//             ]
//         );
//
//         echo $count;

        //return DB::table('users')->max('weight');
        //return DB::table('users')->min('weight');
        //return DB::table('users')->sum('weight');
        //return DB::table('users')->avg('weight');
        //return number_format(DB::table('users')->avg('weight'), 2)."kg";
        //return DB::table('users')->count();
        //return DB::table('users')->count('weight');

        $data = DB::table('users')
            ->join('cities', 'city_id', 'cities.id')
            ->get();
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }
}
