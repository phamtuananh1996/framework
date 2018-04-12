<!doctype html>
<html class="no-js" lang="vi">
<head>
    <link rel="shortcut icon" href="/theme.hstatic.net/1000177652/1000229231/14/favicon.png?v=90"
        type="image/png" />
    <meta charset="utf-8" />
    <title>OxyWatch </title>
    <link rel="dns-prefetch" href="http://happylive.vn">
    <link rel="dns-prefetch" href="/hstatic.net">
    <script src="/hstatic.net/0/0/global/design/js/jquery.min.1.11.0.js"></script>
    <script src="/hstatic.net/0/0/global/design/js/bootstrap.min.js"></script>
    <script src='/hstatic.net/0/0/global/option_selection.js' type='text/javascript'></script>
    <script src='/hstatic.net/0/0/global/api.jquery.js' type='text/javascript'></script>
    <script src='/theme.hstatic.net/1000177652/1000229231/14/default_script.min.js?v=90'
        type='text/javascript'></script>
    <link href='/theme.hstatic.net/1000177652/1000229231/14/default_style.min.css?v=90'
        rel='stylesheet' type='text/css' media='all' />
    <!--[if lt IE 9]>
<script src="/hstatic.net/0/0/global/design/theme-default/html5shiv.js"></script>
<![endif]-->
    <script src="/hstatic.net/0/0/global/design/theme-default/jquery-migrate-1.2.0.min.js"></script>
    <script src='/hstatic.net/0/0/global/design/theme-default/jquery.touchSwipe.min.js'
        type='text/javascript'></script>
    <script data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize"
        src="/hstatic.net/0/0/global/design/js/fixheightproductv2.js"></script>
    <script src="/hstatic.net/0/0/global/design/js/haravan.plugin.1.0.js"></script>
    <script src='/hstatic.net/0/0/global/design/theme-default/jquery.flexslider.js'
        type='text/javascript'></script>
    <link href='/hstatic.net/0/0/global/design/theme-default/flexslider.css' rel='stylesheet'
        type='text/css' media='all' />
    <script src='/theme.hstatic.net/1000177652/1000229231/14/scripts.js?v=90' type='text/javascript'></script>
    <link rel="stylesheet" type="text/css" href="/hstatic.net/0/0/global/design/member/fonts-master/roboto.css">
    <link rel="stylesheet" href="/hstatic.net/0/0/global/design/css/bootstrap.3.3.1.css">
    <!-- Latest compiled and minified JavaScript -->
    <link href='/hstatic.net/0/0/global/design/plugins/font-awesome/4.6.3/css/font-awesome.min.css'
        rel='stylesheet' type='text/css' media='all' />
    <link href='/theme.hstatic.net/1000177652/1000229231/14/styles.css?v=90' rel='stylesheet'
        type='text/css' media='all' />
</head>
<body>
    <div id="page">
        <script>
            /* QUICK VIEW JS */
            jQuery(document).ready(function () {
                var callBack = function (variant, selector) {
                    if (variant) {
                        item = $('.wrapper-quickview');
                        if (variant != null && variant.featured_image != null) {
                            item.find(".product-thumb a[data-image='" + Haravan.resizeImage(variant.featured_image.src, 'large') + "']").click();
                        }
                        item.find('.quickview-price').find('span').html(Haravan.formatMoney(variant.price, "{{100}}₫"));

                        if (variant.compare_at_price > variant.price)
                            item.find('.quickview-price').find('del').html(Haravan.formatMoney(variant.compare_at_price, "{{100}}₫"));
                        else
                            item.find('.quickview-price').find('del').html('');
                        if (variant.available) {
                            item.find('.btn-addcart').css('display', 'block');
                            item.find('.btn-soldout').css('display', 'none');
                        }
                        else {
                            item.find('.btn-addcart').css('display', 'none');
                            item.find('.btn-soldout').css('display', 'block');
                        }
                    }
                    else {
                        item.find('.btn-addcart').css('display', 'none');
                        item.find('.btn-soldout').css('display', 'block');
                    }
                }
                var quickview_html_variants = $('.quickview-variants').html();
                var quickview_image_zoom = $('.quickview-image').html();
                var quickViewProduct = function (purl) {
                    if ($(window).width() < 680) {
                        window.location = purl;
                        return false;
                    }
                    item = $('.wrapper-quickview');
                    $.ajax({
                        url: purl + '.js',
                        async: false,
                        success: function (product) {
                            $.each(product.options, function (i, v) {
                                product.options[i] = v.name;
                            })
                            item.find('.quickview-title').attr('title', product.title).attr('href', product.url).find('h4').html(product.title);
                            item.find('.quickview-variants').html(quickview_html_variants);
                            $('.quickview-image').html(quickview_image_zoom);
                            $.each(product.variants, function (i, v) {
                                item.find('#quickview-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                            })
                            if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                                $('#quickview-select').hide();
                            else
                                $('#quickview-select').show();
                            if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                                callBack(product.variants[0], null);
                            }
                            else {
                                new Haravan.OptionSelectors("quickview-select", { product: product, onVariantSelected: callBack });
                                if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề') == -1)
                                    item.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');
                                $('.p-option-wrapper select:not(#p-select)').each(function () {
                                    $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                                    $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                                });
                                callBack(product.variants[0], null);
                            }
                            if (product.images.length == 0) {
                                item.find('.quickview-image').find('img').attr('alt', product.title).attr('src', '/hstatic.net/0/0/global/design/theme-default/no-image.png');
                            }
                            else {
                                $('.quickview-slider').remove();
                                $('#quickview-sliderproduct').append("<div class='quickview-slider' class='flexslider'>");
                                $('.quickview-slider').append("<ul class='owl-carousel'>");
                                $.each(product.images, function (i, v) {
                                    elem = $('<li class="product-thumb">').append('<a href="javascript:void(0);" data-image=""><img /></a>');
                                    elem.find('a').attr('data-image', Haravan.resizeImage(v, 'large'));
                                    elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
                                    item.find('.owl-carousel').append(elem);
                                });
                                item.find('.quickview-image img').attr('alt', product.title).attr('src', Haravan.resizeImage(product.featured_image, 'large'));

                                $('.quickview-slider img').imagesLoaded(function () {
                                    var owl = $('.owl-carousel');
                                    owl.owlCarousel({
                                        items: 3,
                                        navigation: true,
                                        navigationText: ['owl-prev', 'owl-next']
                                    });
                                    $('.quickview-slider .owl-carousel .owl-item').first().children('.product-thumb').addClass('active');
                                });

                            }

                        }
                    });
                    return false;
                }
                //final width --> this is the quick view image slider width
                //maxQuickWidth --> this is the max-width of the quick-view panel
                var sliderFinalWidth = 500,
			maxQuickWidth = 900;

                //open the quick view panel
                jQuery(document).on("click", ".quickview", function (event) {
                    var selectedImage = $(this).parents('.product-block').find('.product-img img'),
				slectedImageUrl = selectedImage.attr('src');
                    quickViewProduct($(this).attr('data-handle'));

                    animateQuickView(selectedImage, sliderFinalWidth, maxQuickWidth, 'open');

                    //update the visible slider image in the quick view panel
                    //you don't need to implement/use the updateQuickView if retrieving the quick view data with ajax

                });

                $('.wrapper-quickview').on('click', '.product-thumb a', function () {
                    item = $('.wrapper-quickview');
                    item.find('.quickview-image img').attr('src', $(this).attr('data-image'));
                    item.find('.product-thumb').removeClass('active');
                    $(this).parents('li').addClass('active');
                    return false;
                });
                //close the quick view panel

                $(document).on('click', '.quickview-close, .quickviewOverlay', function (e) {
                    $(".wrapper-quickview").fadeOut(500);

                    $('.jsQuickview').fadeOut(500);
                });


                //center quick-view on window resize
                $(window).on('resize', function () {
                    if ($('.wrapper-quickview').hasClass('is-visible')) {
                        window.requestAnimationFrame(resizeQuickView);
                    }
                });

                function animateQuickView(image, finalWidth, maxQuickWidth, animationType) {

                    $('.wrapper-quickview').fadeIn(500);
                    $('.jsQuickview').fadeIn(500);
                }

                $(document).on("click", ".btn-addcart", function (event) {
                    event.preventDefault();
                    variant_id_quickview = $('#quickview-select').val();
                    quantity_quickview = $('#quantity-quickview').val();
                    var params = {
                        type: 'POST',
                        url: '/cart/add.js',
                        async: true,
                        data: 'quantity=' + quantity_quickview + '&id=' + variant_id_quickview,
                        dataType: 'json',
                        success: function (line_item) {
                            window.location = '/cart';
                        },
                        error: function (XMLHttpRequest, textStatus) {
                            alert('Sản phẩm bạn vừa mua đã vượt quá tồn kho');
                        }
                    };
                    jQuery.ajax(params);
                });


            });
        </script>
        <section id="page_content" class="">
				<div id="pageContainer" class="clearfix">
					@include('layout.header')
					@include('layout.menu')
					@include('layout.slide')
				</div>
					<section id="content" class="clearfix container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								
								@yield('content')
								
							</div>
						</div>
					</section>
					
					@include('layout.footer')
	</section> 
</div>
</body>
</html>
