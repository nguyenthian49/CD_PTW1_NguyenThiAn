<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<div class="type-1398">
    <div class="contaner-fluid">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <div class="swiper-slide" id="b1" style="background-image:url(./images/1.jpg); ">
                    <div class="layout">
                        <div class="testcoin">
                            <div class="title">
                                <h4>
                                    Trendy colors & glossy textures
                                </h4>
                                <h2>
                                    New stylish bags & accessories!
                                </h2>
                                <button class="shopnew">SHOP NEW COLLECTION</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="b2" style="background-image:url(./images/2.jpg)">
                    <div class="layout">
                        <div class="testcoin">
                            <div class="title">
                                <h4>
                                    Classic & elegant shoes
                                </h4>
                                <h2>
                                    Natural leather & suede shoes
                                </h2>

                                <button class="shopnew">SHOP NEW COLLECTION</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="b3" style="background-image:url(./images/3.jpg)">
                    <div class="layout">
                        <div class="testcoin">
                            <div class="title">
                                <h4>
                                    Check out our limited S/S 2020 collection!
                                </h4>
                                <h2>
                                    Latest trends actual models
                                </h2>

                                <button class="shopnew">SHOP NEW COLLECTION</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" id="b4" style="background-image:url(./images/4.jpg)">
                    <div class="layout">
                        <div class="testcoin">
                            <div class="title">
                                <h4>
                                    Check out our limited S/S 2020 collection!
                                </h4>
                                <h2>
                                    Light skirts & summer dresses
                                </h2>
                                <button class="shopnew">SHOP NEW COLLECTION</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide" id="a1">
                    <span class="thums">
                        <span class="thums-img" style="background-image:url(./images/1.jpg)">
                        </span>
                        <span class="thums-title">Stylish bags & accessories</span>
                        <span class="thums-more">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                    </span>
                </div>
                <div class="swiper-slide" id="a2">
                    <span class="thums">
                        <span class="thums-img" style="background-image:url(./images/2.jpg)">
                        </span>
                        <span class="thums-title">Classic & elegant shoes</span>
                        <span class="thums-more">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                    </span>
                </div>
                <div class="swiper-slide" id="a3">
                    <span class="thums">
                        <span class="thums-img" style="background-image:url(./images/3.jpg)">
                        </span>
                        <span class="thums-title">S/S 2020 accessories collection</span>
                        <span class="thums-more">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                    </span>
                </div>
                <div class="swiper-slide" id="a4">
                    <span class="thums">
                        <span class="thums-img" style="background-image:url(./images/4.jpg)">
                        </span>
                        <span class="thums-title">Light summer skirts & dresses</span>
                        <span class="thums-more">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
<script>
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    direction: 'vertical',
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs
    }
});
</script>