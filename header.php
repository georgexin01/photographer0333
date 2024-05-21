<?php
     //Init
    $web_title = 'Gen Studio';
    $web_subtitle = 'DLove Production';
    $web_marketing = 'Vista Marketing';

    //Init
    $default_name = 'Thaxden';
    $default_contact = '011-58779139';
    $default_email = 'genstudio27@gmail.com';
    $default_address = '73B, Jalan Harmonium 35/1, Taman Desa Tebrau 81100, Johor Bahru';
    function formatPhoneNumber($contact) {
        $num = preg_replace('/[^0-9]/', '', $contact);
        if (substr($num, 0, 1) !== '6') { $num = '6' . $num; }
        return '+6 ' . substr($num, 1, 3) . '-' . substr($num, 4, 3) . ' ' . substr($num, 7);
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Gen Studio | DLove Production | Vista Marketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/fancybox.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress-wrapp scroll-button -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div id="app">