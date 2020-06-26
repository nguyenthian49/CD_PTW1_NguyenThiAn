<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1063">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <span class="title-main">LATEST ARTICLES <a class="truk">Visit our blog</a></span>
                </div>
            </div>
            <div class="col-md-6" id="aa">
                <div class="btn1">
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/1a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> Best new-season sneakers</h5>
                            </div>
                            <div class="meta">
                                <a>Fashion news</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>May 6, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Vestibulum venenatis est tortor, et ultricies ex viverra et. Praesent non
                                    venenatis erat.
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/2a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5>Lux loungwear</h5>
                            </div>
                            <div class="meta">
                                <a>Fashion trends</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>April 30, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Non neque ut ipsum aliquet tristique. Morbi in magna sapien. Etiam augue
                                    mauris!
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/3a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> Fashion trends S/S 2020</h5>
                            </div>
                            <div class="meta">
                                <a>Fashion news</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>February 7, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Fusce sed maximus est, et viverra mauris. Phasellus a aubit elit. Praesent
                                    varius sem id…
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/4a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> The forever denim</h5>
                            </div>
                            <div class="meta">
                                <a>Events</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>February 6, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Ut egestas augue ac molestie pharetra. Sed private porta dui quis imperdiet
                                    consectetur.
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/5a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> Updates on a classic</h5>
                            </div>
                            <div class="meta">
                                <a>Fashion news</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>January 1, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Quisque sed ipsum vestibulum turpis consectetur iaculis. Donec ornare imperdiet
                                    sem. </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/6a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> Style symbols</h5>
                            </div>
                            <div class="meta">
                                <a>Events</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>January 1, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Morbi ac bibendum mauris. Curabitur ultrices purus ac neque suscipit et augue
                                    neque.
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="#"><img src="./images/7a.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="product-rating">
                                <h5> What you may have missed</h5>
                            </div>
                            <div class="meta">
                                <a>Events</a>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                                <a>January 1, 2020</a></div>
                            <div class="product-document">
                                <span>
                                    Nam non neque ut ipsum aliquet tristique. Morbi in porta sed feugiat laoreet, cursus
                                    in…
                                </span>
                            </div>
                            <a class=" btn ">Read & shop <i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>    
var swiper = new Swiper('.swiper-container', {
    spaceBetween: 50,
    slidesPerView: 6,
    slidesPerGroup: 2,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        720: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1040: {
            slidesPerView: 4,
            spaceBetween: 40
        },
    },
});
</script>