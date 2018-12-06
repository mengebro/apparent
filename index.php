<!DOCTYPE HTML>
<html>
<head>
    <title>Students Intership Finder</title>
    <meta charset="utf-8">
    <noscript>
        <link rel="stylesheet" href="css/5grid/core.css">
        <link rel="stylesheet" href="css/5grid/core-desktop.css">
        <link rel="stylesheet" href="css/5grid/core-1200px.css">
        <link rel="stylesheet" href="css/5grid/core-noscript.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-desktop.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/5grid/jquery.js"></script>
    <script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
    <!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head>
<body>
<div id="header-wrapper">
    <header id="header" class="5grid-layout">
        <div class="row">
            <div class="12u">
                <!-- Logo -->
                <h1><a href="#" class="mobileUI-site-name">Students Intership Finder</a></h1>

                <nav class="mobileUI-site-nav"> <a href="index.html" class="active">Homepage</a> <a href="threecolumn.html">Three Column</a> <a href="twocolumn1.html">Two Column #1</a> <a href="twocolumn2.html">Two Column #2</a> <a href="onecolumn.html">One Column</a> </nav>
            </div>
        </div>
    </header>
</div>
<div id="wrapper">
    <div class="5grid-layout">
        <div class="row">
            <div class="12u" id="banner">
                <section><a href="#"><img src="images/pics01.jpg" alt=""></a></section>
            </div>

            <form class="form-group" method="post">

            <div class="form-group">
                <label for="city">City :</label>
                <select class="form-control" name="city" id="city">
                    <option>Addis Abeba</option>
                    <option>Adama</option>
                    <option>BahirDar</option>
                    <option>Anbo</option>
                    <option>Mekele</option>
                    <option>Harar</option>
                    <option>Adama</option>
                    <option>Jimma</option>
                    <option>Gonder</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Department">Department :</label>
                <select class="form-control" name="Department" id="Department">
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>EPCE</option>
                </select>
            </div>

                <button type="submit" class="btn btn-primary" name="submit">Search</button>
                <?php
                require_once ("include/search.php");
                ?>
                 </form>
        </div>
        <div id="feature-content">
            <section>
                <h2>List Of Comapnys </h2>
            </section>
            <div class="row">
                <div class="12u">
                    <div class="row">
                        <?php
                        require_once("include/DB_connection.php");


                        $query="SELECT * FROM stdcomapnyinfo ORDER BY company_id ASC ";
                        $result=mysqli_query($conn,$query);
                        if(mysqli_num_rows($result)>0){

                        while($row=mysqli_fetch_array($result)){

                        ?>

                        <div class="3u">

                            <section>
                                <div>
                                    <div class="image-style1"><a href="#"><img height="200" width="200" src="images/<?php echo $row["image"];?>" alt=""></a></div>

                                </div>

                                <p style="height: 100px"><?php echo $row["descrption"];?></p>
                                <p class="button"><a href="ComanyDetail.php?link=<?php echo $row["company_id"];?>">Read Full Details</a></p>
                            </section>
                        </div>
                        <?php
                        }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div id="page">
            <div class="row">
                <div class="12u">
                    <section id="content">
                        <h2>Integer gravida nibh quis urna</h2>
                        <p class="subtitle">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum</p>
                        <div class="alignleft">
                            <div class="image-style1"><a href="#"><img src="images/pics02.jpg" alt=""></a></div>
                            <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                        </div>
                        <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque pede. Donec pulvinar ullamcorper metus. In eu odio at lectus pulvinar mollis. Vestibulum sem magna, elementum ut, vestibulum eu, facilisis quis, arcu. Mauris a dolor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed blandit. Phasellus pellentesque, ante nec iaculis dapibus, eros justo auctor lectus, a lobortis lorem mauris quis nunc. Praesent pellentesque facilisis elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. </p>
                        <p>&nbsp;</p>
                        <p>Welcome to<strong> Royale</strong>, a free responsive HTML5 website template designed by HTML5Templates.com. It features a pretty simple combination of color which gives the template an elegant look, making it a great design for a corporate/portfolio type of website. And like all of our templates, it is built on HTML5 and CSS3, has full responsive support for desktops, tablets, and mobile devices, and is 100% free to use personally or commercially under the Creative Commons license. Be sure to check out our website for more awesome free HTML5 templates and follow us on Twitter for updates and new releases! Enjoy!</p>
                    </section>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="12u">
                <div class="row">
                    <div id="splash"> <span>In posuere eleifend</span> odio quisque semper augue maecenas ligula congue rutrum. Pellentesque vulputaterisus semper. </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="12u" id="gallery">
                <div class="row">
                    <div class="4u">
                        <section>
                            <div>
                                <div class="image-style1"><a href="#"><img src="images/pics03.jpg" alt=""></a></div>
                                <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                            </div>
                        </section>
                    </div>
                    <div class="4u">
                        <section>
                            <div>
                                <div class="image-style1"><a href="#"><img src="images/pics04.jpg" alt=""></a></div>
                                <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                            </div>
                        </section>
                    </div>
                    <div class="4u">
                        <section>
                            <div>
                                <div class="image-style1"><a href="#"><img src="images/pics05.jpg" alt=""></a></div>
                                <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="5grid-layout">
    <div id="copyright">
        <section>
            <p>&copy; MenYo | Images: <a target="_blank" href="http://fotogrph.com/">Fotogrph</a> | Design: <a target="_blank" href="http://html5templates.com/">HTML5Templates.com</a></p>
        </section>
    </div>
</div>
<div align=center>This template  downloaded form MenYo <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
