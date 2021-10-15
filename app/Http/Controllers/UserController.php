<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function loadView($id=null) {
        //return "this is from user controller. ID from URL:".$id;
        return View("users",['user'=>$id]);
    }
}
