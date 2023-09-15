<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
function getUsers() {
    return [
        1 => ["name"=>"Kinza Danish", "city"=>"Karachi", "gender"=>"female"],
        2 => ["name"=>"Fatima Zehra", "city"=>"Karachi", "gender"=>"female"],
        3 => ["name"=>"Muhammad Ahsan", "city"=>"Karachi", "gender"=>"male"],
        4 => ["name"=>"Husnain Ali", "city"=>"Karachi", "gender"=>"male"],
        5 => ["name"=>"Saqlain Dejwani", "city"=>"Karachi", "gender"=>"male"]
    ];
}
class PageController extends Controller
{    
    public function showHome () {
        return view('home');
    }
    public function showAbout () {
        return view('about');
    }
    public function showContact () {
        return view('contact');
    }
    public function showShop () {
        return view('shop');
    }
    public function showProduct () {
        return view('product');
    }
    public function showUsers () {
        $students = getUsers();
        return view('users',['users' => $students]);        
    }
    public function showUser ($id) {
        $students = getUsers();
        $student = $students[$id];
        return view('user',["user" => $student]);
    }
}