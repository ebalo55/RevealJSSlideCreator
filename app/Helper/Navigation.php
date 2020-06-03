<?php

if(!function_exists("generateNavigationLink")) {
    function generateNavigationLink() :string {
        $result = [
            [
                "name" => "Home",
                "href" => route("home"),
                "path" => asset("storage/logo.png")
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
