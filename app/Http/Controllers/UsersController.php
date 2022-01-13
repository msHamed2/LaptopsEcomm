<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getUser(Request $request)
    {
        return json_encode('this user');
    }

    function getData()
    {

return 'hi aloush';
    }
}
