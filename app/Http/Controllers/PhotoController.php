<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use view;


class PhotoController extends Controller
{

    public function __invoke()
    {
        dd("invoke");
    }
    public function __construct()
    {
       // dd("Construct");
    }
    public function index()
    {
        // dd('index');
        $welcome = "Zuber Welcome message";
       return view('welcome',compact('welcome'));
    }
    public function callmethod()
    {
        dd('call method with alias');
    }
    public function zuber()
    {
        dd('call method with alias : Zuber');
    }
}
