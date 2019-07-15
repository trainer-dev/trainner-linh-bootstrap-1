<?php


namespace App\Http\Controllers;


class HomeController
{
    function get() {
        return view("index");
    }

    function carousel() {
        return view("carousel");
    }
}