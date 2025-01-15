<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    // Homepage route logic
    public function index(Request $request)
    {
        // Get the username cookie if it exists
        $username = $request->cookie('username');

        // Return the homepage view with the username variable
        return view('home', compact('username'));
    }

    // Set cookie logic
    public function setCookie($username)
    {
        // Create a cookie with a 1-day expiration
        $cookie = cookie('username', $username, 1440); // 1440 minutes = 1 day

        // Return a response that sets the cookie
        return response("Cookie set for $username.")
            ->cookie($cookie);
    }

    // Delete cookie logic
    public function deleteCookie()
    {
        // Delete the 'username' cookie
        Cookie::queue(Cookie::forget('username'));

        // Redirect back to homepage
        return redirect('/cook');
    }
}


