<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!-- viet code -->
<div class="type-1471">
    <div class="container">
        <section class="related products">
            <h2>Related products</h2>
        </section>
        <!-- content -->
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <img src="./images/1.jpg" width="100" height="100" alt="">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5>Medium leather backpack</h5>
                                    </div>
                                    <span class="product-price">
                                        <span class="price">$</span>250.000
                                    </span>
                                    <div class="product-icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <img src="./images/2.jpg" width="100" height="100" alt="">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5>Red sunglasses</h5>
                                    </div>
                                    <span class="product-price">
                                        <span class="price">$</span>169.000
                                    </span>
                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <img src="./images/3.jpg" width="100" height="100" alt="">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5> Futuristic sunglasses</h5>
                                    </div>
                                    <span class="product-price">
                                        <span class="price">$</span>25.000
                                    </span>
                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="content2">
            <div class="row">
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <img src="./images/4.jpg" width="100" height="100" alt="">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5>Minimalistic watch</h5>
                                    </div>
                                    <span class="product-price">
                                        <span class="price">$</span>25.000
                                    </span>

                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <img src="./images/5.jpg" width="100" height="100" alt="">
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5>Leather cross body bag </h5>
                                    </div>
                                    <span class="product-price">
                                        <span class="price">$</span>48.000
                                    </span>
                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-img">
                        <ul>
                            <li>
                                <div class="product-percent">
                                    <img src="./images/6.jpg" width="100" height="100" alt="">
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h5> Vintage round lens sunglasses</h5>
                                    </div>
                                    <span class="product-price">
                                        <del class="price amount"><span class="price symbol">$</span>125.00</del>
                                        <span class="price">$</span>99.000
                                    </span>
                                    <div class="product-button">
                                        Select Options
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
