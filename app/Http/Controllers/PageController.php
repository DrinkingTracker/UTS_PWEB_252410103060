<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function logingateway(Request $request)
    {

    $request->validate([
        "username" => "required",
        "password" => "required",
    ]);

    $usernameSample = "Yehezkiel Hansen Santoso";
    $passwordSample = "QAZWSX";

    if ($request->username !== $usernameSample || $request->password !== $passwordSample) {
        return back()->withErrors(["error" => "Username or password incorrect"]);
    }

    return redirect()->route("dashboard", ["username" => $request->username]);

    }

    public function dashboard(string $username)
    {
         $menu = [
            [
                "title" => "Player Report",
                "modal" => "modal-player",
            ],
            [
                "title" => "Bug Report",
                "modal" => "modal-bug",
            ],
        ];

        $CheatType = [
            "Auto Aim",
            "Wallhack",
            "Damage Modifier",
            "Illegal Transaction",
            "Bug Exploit",
            "Speed Hack",
            "Others",
        ];

        return view("dashboard", compact("username", "menu", "CheatType"));

    }

    public function profile(string $username)
    {
        $Identity = [
            $username,
            "252410103060"
        ]; 

        return view("profile", compact("username", "Identity"));
    }

    public function pengelolaan(string $username)
    {
        $PlayerReport = [
            [
            "ID" => "PR001",
            "Player ID" => "883923110",
            "Cheat Type" => "Auto Aim",
            "Description" => "Impossible 1000m headshot"
            ],

            [
            "ID" => "PR002",
            "Player ID" => "444721410",
            "Cheat Type" => "Auto Aim",
            "Description" => "Inhuman 1ms ADS flick"
            ]
        ];

        $BugReport = [
            [
            "ID" => "BR001",
            "Bug name" => "Stuck",
            "Description" => "Texture not loaded"
            ],

            [
            "ID" => "BR002",
            "Bug name" => "Render",
            "Description" => "Render not properly optimized"
            ]
        ];

        return view("pengelolaan", compact("username", "PlayerReport", "BugReport"));
    }
}
