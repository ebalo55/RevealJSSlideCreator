<?php
/**
 *   Reveal JS Slide Creator
 *   Copyright (C) 2020  ebalo <webdev.ebalo@gmail.com>
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

if(!function_exists("generateNavigationLink")) {
    function generateNavigationLink() :string {
        $result = [
            [
                "name" => "Home",
                "href" => route("home"),
                "path" => asset("storage/logo-rev.png"),
                "complete_logo" => asset("storage/logo-complete-rev.png")
            ]
        ];

        if(Auth::guest()) {
            array_push($result, [
                "name" => "Login",
                "href" => route("login"),
                "col" => 7
            ], [
                    "name" => "Registration",
                    "href" => route("register"),
                    "col" => 8
                ]
            );
        }
        else {
            $result[] = [
                "name" => "Dashboard",
                "href" => route("dashboard"),
                "col" => 8
            ];
        }

        return json_encode($result);
    }
}

if(!function_exists("generateDashboardLinks")) {
    function generateDashboardLinks() {
        return json_encode([
            [
                "href" => '/',
                "path" => asset("storage/logo-rev.png"),
                "name" => 'Home'
            ],
            ["href" => '#', "name" => 'New'],
            ["href" => '#', "name" => 'Settings'],
            ["href" => '#', "name" => 'Profile', "col" => 7],
            [
                "href" => "javascript:document.getElementById('logout').submit()",
                "name" =>  "
                <form id='logout' method='post' action='" . route('logout') . "'>
                    <input type='hidden' value='" . csrf_token() . "' name='_token'>
                    Logout
                </form>"
            ],
        ]);
    }
}
