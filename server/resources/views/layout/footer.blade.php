<footer id="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Giới thiệu</h3>
                        <div class="inner about_us">
                            <p class="message">OXYWATCH cam kết, tất cả đồng hồ được bán trực tiếp tại hệ thống các cửa hàng của chúng tôi và
                                bán Online đều là hàng chính hãng 100%</p>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-home"></i>Quận Bắc Từ Liêm, Hà Nội
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:Suport@oxywatch.vn">Suport@oxywatch.vn</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>0978.825.365
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">

                        <h3 class="title title_left">Liên kết</h3>

                        <div class="inner">

                            <ul class="list-unstyled list-styled">

                                <li>
                                    <a href="/">Trang chủ</a>
                                </li>

                                @foreach($menuc as $item)
                                <li class="item  first">
                                    <a href="groupcategory/{{$item['id']}}">
                                        <span>{{$item['name']}}</span>
                                    </a>
                                </li>
                                @endforeach

                                <li>
                                    <a href="/dichvu">Dịch vụ</a>
                                </li>

                                <li>
                                    <a href="/gioithieu">Giới thiệu</a>
                                </li>

                                <li>
                                    <a href="/news">Blog</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Đăng kí nhận tin</h3>
                        <div class="inner">
                            <form accept-charset='UTF-8' action='/account/contact' class='contact-form' method='post'>
                                <input name='form_type' type='hidden' value='customer'>
                                <input name='utf8' type='hidden' value='✓'>
                                <div class="group-input">
                                    <input type="hidden" id="contact_tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin" />
                                    <input type="email" required="required" name="contact[email]" id="contact_email" />
                                    <span class="bar"></span>
                                    <label>Nhập email của bạn</label>
                                    <button type="submit">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="caption">Hãy nhập email của bạn vào đây để nhận tin!</div>
                        </div>
                        <div id="widget-social" class="social-icons">
                            <ul class="list-inline">
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper facebook">
                                        <span class="social-icon">
                                            <i class="fa fa-facebook"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper twitter">
                                        <span class="social-icon">
                                            <i class="fa fa-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper pinterest">
                                        <span class="social-icon">
                                            <i class="fa fa-pinterest"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper google">
                                        <span class="social-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper youtube">
                                        <span class="social-icon">
                                            <i class="fa fa-youtube"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="/" class="social-wrapper instagram">
                                        <span class="social-icon">
                                            <i class="fa fa-instagram"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12 clear-sm">
                    <div class="widget-wrapper animated">
                        <h3 class="title title_left">Kết nối với chúng tôi</h3>
                        <div class="inner">
                            <!-- Facebook widget -->
                            <div class="footer-static-content">
                                <div class="fb-page" data-href="https://www.facebook.com/happylive.vn" data-height="300" data-small-header="false" data-adapt-container-width="true"
                                    data-hide-cover="false" data-show-facepile="true" data-show-posts="false"> </div>
                            </div>
                            <div style="clear:both;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scrollToTop show">
    <i class="fa fa-chevron-up"></i>
</a>