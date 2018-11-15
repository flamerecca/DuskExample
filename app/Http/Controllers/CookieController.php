<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function cookie()
    {
        $minutes = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('test_cookie', 'hi', $minutes));
        $response->withCookie(cookie('plain_cookie', 'plain_hi', $minutes));
        return $response;
    }
}
