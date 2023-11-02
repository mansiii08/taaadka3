<?php
$cookie_name_pharmacy = "last_5_pages_pharmacy";
$cookie_expiration = time() + (86400 * 30); // 30 days

// Get the current page URL
$current_page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Get the existing cookie value (if any) for the pharmacy
$cookie_value_pharmacy = isset($_COOKIE[$cookie_name_pharmacy]) ? $_COOKIE[$cookie_name_pharmacy] : "";

// Split the cookie value into an array of page URLs for the pharmacy
$page_urls_pharmacy = $cookie_value_pharmacy ? explode(",", $cookie_value_pharmacy) : array();

// Add the current page URL to the beginning of the array for the pharmacy
array_unshift($page_urls_pharmacy, $current_page_url);

// Trim the array to only include the last 5 pages for the pharmacy
$page_urls_pharmacy = array_slice($page_urls_pharmacy, 0, 5);

// Join the array back into a comma-separated string for the pharmacy
$cookie_value_pharmacy = implode(",", $page_urls_pharmacy);

// Set the new cookie value for the pharmacy
setcookie($cookie_name_pharmacy, $cookie_value_pharmacy, $cookie_expiration, "/");

$cookie_name_all = "last_5_pages_all";
// Get the existing cookie value (if any) for all pages
$cookie_value_all = isset($_COOKIE[$cookie_name_all]) ? $_COOKIE[$cookie_name_all] : "";

// Split the cookie value into an array of page URLs for all pages
$page_urls_all = $cookie_value_all ? explode(",", $cookie_value_all) : array();

// Add the current page URL to the beginning of the array for all pages
array_unshift($page_urls_all, $current_page_url);

// Trim the array to only include the last 10 pages for all pages
$page_urls_all = array_slice($page_urls_all, 0, 10);

// Join the array back into a comma-separated string for all pages
$cookie_value_all = implode(",", $page_urls_all);

// Set the new cookie value for all pages
setcookie($cookie_name_all, $cookie_value_all, $cookie_expiration, "/");
?>


?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>County Pharmacy</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="products.css">
</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">County<span>Pharmacy</span></a></h1>
                </div>
                <div id="top-nav">
                    <ul>
                    <li><a href="/marketplace/pharmacy/index.html">Home</a></li>
                        <li><a href="/marketplace/pharmacy/about.html">About</a></li>
                        <li><a href="/marketplace/pharmacy/products.html">Products/Services</a></li>
                        <li><a href="/marketplace/pharmacy/news.html">News</a></li>
                        <li><a href="/marketplace/pharmacy/contacts.php">Contact</a></li>
                        <li><a href="/marketplace/pharmacy/admin.html">Admin</a></li>

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Flexible Bandaids</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                    
                    <div class="card">
                            <img src="/marketplace/pharmacy/images/medicines/medicine4.png" alt="Denim Jeans" style="max-height:450px; max-width:450px;">
                            <h1>Flexible Bandaids</h1>
                            <p class="price">$5.99</p>
                            <p>Flexible Fabric Adhesive Bandages to cover & protect minor wounds, cuts, scrapes & burns.</p>
                            <!-- <p><button onclick="window.location.href='products/bandaid.php';">Details</button></p> -->
                          </div>
                    </div>
</body>
</html>
