<?php
/**
 * Displays Swiper Template
 */
?>

<div class="swiper-container swiper1">
    
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <figure class="swiper-slide-img-wrapper">
                <img src="<?php echo get_theme_file_uri('assets/images/gregory-pappas-ncQM0sUOUMw-unsplash.jpg'); ?>">
            </figure><!-- .swiper-slide-img-wrapper -->

            <div class="swiper-slide-body">
                <h3 class="swiper-slide-title"><span>VISIT</span>ご来店</h3>
                <p class="swiper-slide-text">まずは当店まで気を付けてご来店ください。</p>
            </div><!-- .swiper-slide-body -->
        </div><!-- .swiper-slide -->
        
        <div class="swiper-slide">
            <figure class="swiper-slide-img-wrapper">
                <img src="<?php echo get_theme_file_uri('assets/images/steffan-mitchell-gHrgeeCCkYA-unsplash.jpg'); ?>">
            </figure><!-- .swiper-slide-img-wrapper -->

            <div class="swiper-slide-body">
                <h3 class="swiper-slide-title"><span>ORDER</span>ご注文</h3>
                <p class="swiper-slide-text">レジカウンターにてお好きなメニューを注文します。フードメニューもあります。</p>
            </div><!-- .swiper-slide-body -->
        </div><!-- .swiper-slide -->

        <div class="swiper-slide">
            <figure class="swiper-slide-img-wrapper">
                <img src="<?php echo get_theme_file_uri('assets/images/clay-banks-oNm9NkTFLfA-unsplash.jpg'); ?>">
            </figure><!-- .swiper-slide-img-wrapper -->

            <div class="swiper-slide-body">
                <h3 class="swiper-slide-title"><span>PAY</span>お支払い</h3>
                <p class="swiper-slide-text">現金またはクレジットカードまたは電子マネーでお支払いできます。</p>
            </div><!-- .swiper-slide-body -->
        </div><!-- .swiper-slide -->

        <div class="swiper-slide">
            <figure class="swiper-slide-img-wrapper">
                <img src="<?php echo get_theme_file_uri('assets/images/bannon-morrissy-xFG4doqFI-o-unsplash.jpg'); ?>">
            </figure><!-- .swiper-slide-img-wrapper -->

            <div class="swiper-slide-body">
                <h3 class="swiper-slide-title"><span>DRINK<small>&</small>EAT</span>ご飲食</h3>
                <p class="swiper-slide-text">お好きな席に座り、あとはごゆっくりお楽しみください。</p>
            </div><!-- .swiper-slide-body -->
        </div><!-- .swiper-slide -->
    </div><!-- .swiper-wrapper -->

    <div class="swiper-pagination"></div>
    
    <div class="swiper-button-wrapper">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div><!-- .swiper-button-wrapper -->
</div><!-- .swiper-container -->

<script>
    $(window).on('load resize', function() {
        var menu = ['ご来店', 'ご注文', 'お支払い', 'ご飲食']
        var mySwiper1 = new Swiper ('.swiper-container.swiper1', {
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1.15,
            spaceBetween: 15,
            centeredSlides: true,
            breakpoints: {
                480: {
                    spaceBetween: 20,
                    slidesPerView: 1.2,
                },
                600: {
                    spaceBetween: 30,
                    slidesPerView: 1.4,
                },
                700: {
                    spaceBetween: 30,
                    slidesPerView: 1.2,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                        renderBullet: '',
                    },
                },
                1000: {
                    spaceBetween: 30,
                    slidesPerView: 1.5,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '">' + (menu[index]) + '</span>';
                        },
                    },
                },
            },
        });
    });
</script>
