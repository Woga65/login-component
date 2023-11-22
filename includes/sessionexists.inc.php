<?php
require_once "../classes/autoloader.class.php";
Autoloader::register();


switch($_SERVER['REQUEST_METHOD']) {

    case("OPTIONS"):                                        // Allow preflighting to take place.
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Allow-Headers: content-type");
        exit;


    case("POST"):
        echo JsonHttp::okResp([
            "data" => [
                "loggedIn" => (new SessionController())->sessionExists(),
            ]
        ]);
        exit();


    default:                                                // Reject any non POST or OPTIONS requests.
        header("Allow: POST", true, 405);
        exit;
} 