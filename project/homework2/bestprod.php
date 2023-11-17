<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MARKET PLACE</title>
    <link rel="stylesheet" href="index.css">


<?php require "dbconnect.php"; ?>
</head>

<body>
    <div id="page">
        <header id="header">
            <div id="header-inner">
                <div id="logo">
                    <h1><a href="#">Market<span>Place</span></a></h1>
                </div>
                <div id="top-nav">
                  
                </div>
                <div class="clr"></div>
            </div>
        </header>
        <div class="feature">
            <div class="feature-inner">
                <h1>Top 5 Products from Pharmacy</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">
                
                <main id="contentbar">
                    <div class="article">
                       <?php

                        $sql = "SELECT * FROM product WHERE shop = 'pharmacy' ORDER BY rating DESC LIMIT 5;";
                        $result = $conn->query($sql);
                        $url = "http://localhost/marketplace/";
                        $row = $result->fetch_assoc();
                        while ($row = $result->fetch_assoc()) {
                            echo "<br/><a href=" . $url . $row["shop"] . "/products/" . $row["id"] . ".php" . ">" . ucfirst($row["id"]) . " from " . ucfirst($row['shop']) . "</a>";


                            // "<br><a href='$product_id'>$product_id</a> ";
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