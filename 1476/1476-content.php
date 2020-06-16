<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1476">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-inner clearfix">
                    <div class="title">
                        <h3>The7 & Elementor</h3>
                        <h2>Fashion store</h2>
                    </div>
                    <div class="image clearfix">
                        <div class="image_big fl-right">
                            <img src="images/img2.jpg" alt="">
                        </div>
                        <div class="image_smail">
                            <img src="images/img1.jpg" alt="">
                        </div>
                    </div>
                    <div class="content">
                        <span class="main-title">
                            Our Mission
                        </span>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ullamcorper mattis!
                        </p>
                    </div>
                    <div class="section">
                        <span class="main-title">
                            Our Values
                        </span>
                        <ul class="values">
                            <li class="values_list"><i class="fa fa-star-o" aria-hidden="true"></i>
                                Quality over quantity
                            </li>
                            <li class="values_list"><i class="fa fa-tasks" aria-hidden="true"></i>
                                Products variety
                            </li>
                            <li class="values_list"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                Quality check
                            </li>
                            <li class="values_list"><i class="fa fa-pagelines" aria-hidden="true"></i>
                                Positive ecology impact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-inner top">
                    <div class="image clearfix">
                        <div class="image_big fl-left">
                            <img src="images/img3.jpg" alt="">
                        </div>
                        <div class="image_smail_two">
                            <img src="images/img4.jpg" alt="">
                        </div>
                    </div>
                    <div class="about">
                        <span class="main-title">
                            About us
                        </span>
                        <div class="list-about">
                            <p>Aliquam suscipit, ligula ut maximus dignissim, lectus sapien egestas orci, eget congue
                                diam
                                ante sed nibh. Cras ut leo magna. Mauris eu ligula non orci ultrices accumsan.</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas.
                                Pellentesque fringilla diam ante, in lacinia magna venenatis non. Integer iaculis
                                consequat
                                arcu, quis rutrum orci suscipit laoreet. Cras ut leo magna. Mauris eu ligula non orci
                                ultrices accumsan.</p>
                            <p>Habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                Pellentesque
                                fringilla diam ante, in lacinia magna venenatis non. Integer iaculis consequat arcu,
                                quis
                                rutrum orci suscipit laoreet.</p>
                        </div>
                    </div>
                    <a href="" class="button">
                        <span>Contact us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>