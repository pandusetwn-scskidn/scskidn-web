<?php
    return [
        // -- email configuration --
        "email" => [
            'auth' => true,
            "secure" => 'tls',
            "host" => "smtp.mailtrap.io",
            "port" => 25,
            "username" => "211753b342e588",
            "password" => "247638ba508124",
            'debug' => 2,

            //default inquiry email
            "inquiry_email" => "contact@scskidn.com",

             // -- set it false to use mailtrap
            "sendmail" => false,
        ],

        // -- captcha --
        'site_key' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
        'secret_key' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',

    ];
?>
