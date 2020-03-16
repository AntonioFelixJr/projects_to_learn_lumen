<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index($name) {
        return "Hello-World $name";
    }

    public function store($request) {
        dd($request);
    }

}
