<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;

class ProfileController extends Controller
{
    public function index($id)
    {

        $name = "Donald Trump";
        $age = "75";

        $data =
            [
                'id' => $id,
                'name' => $name,
                'age' => $age
            ];



        $cookie = cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        return response()->json($data)->cookie($cookie)->setStatusCode(200);
    }
}
