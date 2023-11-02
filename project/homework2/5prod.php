<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CountyPharmacy</title>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="products.html">Products/Services</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="users.html">Users</a></li>
                        <li><a href="admin.html">Admin</a></li>

                    </ul>
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Products/Services</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">
                
                <main id="contentbar">
                    <div class="article">
                       <?php

                        // Get the existing cookie value (if any)
                        $cookie_value = isset($_COOKIE['last_5_pages_pharmacy']) ? $_COOKIE['last_5_pages_pharmacy'] : "";

                        // Split the cookie value into an array of product IDs
                        $product_ids = $cookie_value ? explode(",", $cookie_value) : array();

                        // If there are less than 5 products, pad the array with empty strings
                        $product_ids = array_pad($product_ids, 5, "");

                        // Print out the 5 products using the product IDs
                        echo "Last five previously visited products.";
                        foreach ($product_ids as $product_id) {
                            echo "<br><a href='$product_id'>$product_id</a> ";
                        // You can add code here to fetch and display the product details from a database or API
                        }

                        ?>




                    </div>
                </main>

                <!-- <nav id="sidebar">
                    <div class="widget">
                        <h3>Left heading</h3>
                        <ul>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                        </ul>
                    </div>
                </nav> -->

                <div class="clr"></div>
            </div>
        </div>

        <!-- <div id="footerblurb">
            <div id="footerblurb-inner">

                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>
                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>
                <div class="column">
                    <h2><span>Heading</span></h2>
                    <p>
                        <script>
                            generateText(2)
                        </script>
                    </p>
                </div>

                <div class="clr"></div>
            </div>
        </div> -->
        <footer id="footer">
            <div id="footer-inner">
                <p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a
                        href="#">Privacy Policy</a></p>
                <div class="clr"></div>
            </div>
        </footer>
    </div>
</body>

</html>