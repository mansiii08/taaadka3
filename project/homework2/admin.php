<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CountyPharmacy</title>
    <link rel="stylesheet" href="index.css">


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
                <h1>Admin Panel</h1>
            </div>
        </div>


        <div id="content">
            <div id="content-inner">

                <main id="contentbar">
                    <div class="article">
                        <h3>List of Users</h3>
                        <?php 

                        extract($_POST);

                        $lines = file('password.txt');

                        if(!$username || !$password){
                            echo "Blank Fields";
                        }

                        if($username == "admin" && $password == $lines[0])
                        {
                            $lines = file('users.txt');
                            $count = 0;
                            foreach($lines as $line) 
                            {
                                $count += 1;
                                echo str_pad($count, 2, 0, STR_PAD_LEFT).". ".$line;
                                echo "<br>";
                            }

                            ?><a href="download.php?path=users.txt">Download Users List</a><?php
                        }
                        else
                        {
                            echo "Invalid Credentials";
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