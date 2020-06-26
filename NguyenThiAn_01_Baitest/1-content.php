<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1">
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-2">
                <div class="navbar-header navbar-center img-logo">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo-mobile.PNG" alt="logo" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-10">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid navar-boder">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header ">

                            <a class="navbar-brand hv-text-main" href="#"> <i class="fa fa-map-marker"></i>ABC Town
                                Luton Street, New York 22</a>
                            <a class="navbar-brand hv-text-main" href="#"> <i class="fa fa-phone"></i>+ 0800 567 345</a>
                            <a class="navbar-brand hv-text-main" href="#"></a>
                        </div>
                        <div class="navbar-header navbar-right">
                            <a class="navbar-brand hv-text-main boder-right" href="#"> <i
                                    class="fa fa-user"></i>Account</a>
                            <a class="navbar-brand hv-text-main" href="#">USD<i
                                    class="fa fa-angle-down  mg-right"></i></a>
                            <a class="navbar-brand hv-text-main" href="#"><i class="fa fa-flag-checkered"></i>English<i
                                    class="fa fa-angle-down mg-right"></i></a> </div>
                    </div>
                </nav>
                <nav class="navbar navbar-default navbar-fixed-bottom">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand hv-text1" href="#">HOME</a><i class="fa fa-circle-thin"></i>
                            <!-- dropdown -->
                            <div class="dropdown">
                                <button class="dropbtn hv-text">FURNITURE</button><i class="fa fa-circle-thin"></i>
                                <div class="dropdown-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Top</label>
                                            <a href="#">Cooktail</a>
                                            <a href="#">Day</a>
                                            <a href="#">Evening</a>
                                            <a href="#">Sundresses</a>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Handbags</label>
                                            <a href="#">Toter</a>
                                            <a href="#">Clutches</a>
                                            <a href="#">Satchels</a>
                                            <a href="#">Cross Body</a>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Accessories</label>
                                            <a href="#">Hats And Gloves</a>
                                            <a href="#">Lingerie</a>
                                            <a href="#">Bras</a>
                                            <a href="#">Dresses</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-img">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="./images/2.PNG" class="img-responsive" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <img src="./images/3.PNG" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="navbar-brand hv-text" href="#">WOMEN</a><i class="fa fa-circle-thin"></i>
                            <a class="navbar-brand hv-text" href="#">MEN</a><i class="fa fa-circle-thin"></i>

                            <a class="navbar-brand hv-text" href="#">JEWERLY</a><i class="fa fa-circle-thin"></i>
                            <a class="navbar-brand hv-text" href="#">BLOG</a><i class="fa fa-circle-thin"></i>
                            <a class="navbar-brand hv-text" href="#">CONTACT</a>

                            <a class="navbar-brand hv-icon" href="#">
                                <form class="example" action="/action_page.php">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit" class="search-icon"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </a>
                            <a class="navbar-brand hv-icon" href="#">
                                <span class="userstyle"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span
                                        class="style">0</span></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="demo1">
        </div>
    </div>

</div>