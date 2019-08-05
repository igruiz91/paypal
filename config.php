<?php

    require 'paypal/autoload.php';

    define('URL_SITIO', 'http://localhost:8080/paypal');

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AQBDgdyuxA_dH9a4n5THRs8NMybw7uPAvTKnDiK-ioIK-0Szc_LuqYsIIeuSo2epSpi3iJuQd6C5mtNH','EC-51kBsjjQMpj8UUnFYf1a1k3ERokLNp5QBVH3AwY4t25jcZ7YUcq_Vj2phneWd_95Xs-tLCiWTMJPz' 
        )
    );



