<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">

<head>
  <link rel="shortcut icon" href="//theme.hstatic.net/1000177652/1000229231/14/favicon.png?v=101" type="image/png" />
  <title>
    Happylive - Thanh toán đơn hàng
  </title>


  <meta name="description" content="Happylive - Thanh to&#225;n đơn h&#224;ng" />

  <link href='//hstatic.net/0/0/global/checkouts.css?v=1.1' rel='stylesheet' type='text/css' media='all' />
  <link href='//theme.hstatic.net/1000177652/1000229231/14/check_out.css?v=101' rel='stylesheet' type='text/css' media='all'
  />
  <script src='//hstatic.net/0/0/global/jquery.min.js' type='text/javascript'></script>
  <script src='//hstatic.net/0/0/global/jquery.validate.js' type='text/javascript'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">
</head>

<body>
  <div class="content">

    <div class="wrap">
      <div class="sidebar">
        <div class="sidebar-content">
          <div class="order-summary order-summary-is-collapsed">
            <h2 class="visually-hidden">Thông tin đơn hàng</h2>
            <div class="order-summary-sections">
              <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                <table class="product-table">
                  <thead>
                    <tr>
                      <th scope="col">
                        <span class="visually-hidden">Hình ảnh</span>
                      </th>
                      <th scope="col">
                        <span class="visually-hidden">Mô tả</span>
                      </th>
                      <th scope="col">
                        <span class="visually-hidden">Số lượng</span>
                      </th>
                      <th scope="col">
                        <span class="visually-hidden">Giá</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach (Cart::content() as $cart)
                    <tr class="product" data-product-id="1013105108" data-variant-id="1025311112">
                      <td class="product-image">
                        <div class="product-thumbnail">
                          <div class="product-thumbnail-wrapper">
                            <img class="product-thumbnail-image" alt="Đồng hồ nữ Sanda v2 - dây đỏ mặt đen" src="{{$cart->options->image}}"
                            />
                          </div>
                          <span class="product-thumbnail-quantity" aria-hidden="true">{{$cart->qty}}</span>
                        </div>
                      </td>
                      <td class="product-description">
                        <span class="product-description-name order-summary-emphasis">{{$cart->name}}</span>

                      </td>
                      <td class="product-quantity visually-hidden">2</td>
                      <td class="product-price">
                        <span class="order-summary-emphasis">{{number_format($cart->price)}}₫</span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="order-summary-section order-summary-section-total-lines" data-order-summary-section="payment-lines">
                <table class="total-line-table">
                  <thead>
                    <tr>
                      <th scope="col">
                        <span class="visually-hidden">Mô tả</span>
                      </th>
                      <th scope="col">
                        <span class="visually-hidden">Giá</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="total-line total-line-subtotal">
                      <td class="total-line-name">Tạm tính</td>
                      <td class="total-line-price">
                        <span class="order-summary-emphasis" data-checkout-subtotal-price-target="138000000">
                          {{Cart::subtotal()}}₫
                        </span>
                      </td>
                    </tr>

                    <tr class="total-line total-line-shipping">
                      <td class="total-line-name">Phí vận chuyển</td>
                      <td class="total-line-price">
                        <span class="order-summary-emphasis" data-checkout-total-shipping-target="0">

                          —

                        </span>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot class="total-line-table-footer">
                    <tr class="total-line">
                      <td class="total-line-name payment-due-label">
                        <span class="payment-due-label-total">Tổng cộng</span>
                      </td>
                      <td class="total-line-name payment-due">
                        <span class="payment-due-currency">VND</span>
                        <span class="payment-due-price" data-checkout-payment-due-target="138000000">
                          {{Cart::subtotal()}}₫
                        </span>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main">
        <div class="main-header">
          <a href="/" class="logo">
            <h1 class="logo-text">Happylive</h1>
          </a>

          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/cart">Giỏ hàng</a>
            </li>

            <li class="breadcrumb-item breadcrumb-item-current">

              Thông tin giao hàng

            </li>
            <li class="breadcrumb-item ">

              Phương thức thanh toán

            </li>

          </ul>

        </div>
        <div class="main-content">

          <div class="step">
            <div class="step-sections " step="1">


              <div class="section">
                <div class="section-header">
                  <h2 class="section-title">Thông tin giao hàng</h2>
                </div>
                <div class="section-content section-customer-information no-mb">

                  <input name="utf8" type="hidden" value="✓">
                  <div class="inventory_location_data">

                    <input name="customer_shipping_district" type="hidden" value="" />
                    <input name="customer_shipping_ward" type="hidden" value="" />

                  </div>

                  @if(!Auth::check())
                  <p class="section-content-text">
                    Bạn đã có tài khoản?
                    <a href="/login">Đăng nhập</a>
                  </p>
                  @endif


                  <div class="fieldset">


                    <div class="field   ">
                      <div class="field-input-wrapper">
                        <label class="field-label" for="billing_address_full_name">Họ và tên</label>
                        <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="fullname"
                          name="fullname" @if(Auth::check()) value="{{Auth::user()->name}}" @endif/>
                      </div>

                    </div>



                    <div class="field  field-two-thirds  ">
                      <div class="field-input-wrapper">
                        <label class="field-label" for="checkout_user_email">Email</label>
                        <input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="checkout_user_email"
                          name="email" @if(Auth::check()) value="{{Auth::user()->email}}" @endif/>
                      </div>

                    </div>



                    <div class="field field-required field-third  ">
                      <div class="field-input-wrapper">
                        <label class="field-label" for="billing_address_phone">Số điện thoại</label>
                        <input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="tel"
                          id="phone" name="phone" @if(Auth::check()) value="{{Auth::user()->phone}}" @endif/>
                      </div>

                    </div>


                    <div class="field   ">
                      <div class="field-input-wrapper">
                        <label class="field-label" for="address">Địa chỉ</label>
                        <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1"
                          name="address" @if(Auth::check()) value="{{Auth::user()->address}}" @endif />
                      </div>

                    </div>

                  </div>
                </div>
                <div class="section-content">
                  <div class="fieldset">

                    <form id="form_update_location" class="clearfix" accept-charset="UTF-8" method="post">
                      <input name="utf8" type="hidden" value="✓">
                      <div class="field  field-half  ">
                        <div class="field-input-wrapper field-input-wrapper-select">
                          <label class="field-label" for="customer_shipping_province">Tỉnh / thành</label>
                          <select class="field-input" id="customer_shipping_province" name="customer_shipping_province">
                            <option data-code="null" value="null" selected>Chọn tỉnh / thành</option>



                            <option data-code="HC" value="50">Hồ Chí Minh</option>



                            <option data-code="HI" value="1">Hà Nội</option>



                            <option data-code="DA" value="32">Đà Nẵng</option>



                            <option data-code="AG" value="57">An Giang</option>



                            <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>



                            <option data-code="BG" value="15">Bắc Giang</option>



                            <option data-code="BK" value="4">Bắc Kạn</option>



                            <option data-code="BL" value="62">Bạc Liêu</option>



                            <option data-code="BN" value="18">Bắc Ninh</option>



                            <option data-code="BT" value="53">Bến Tre</option>



                            <option data-code="BD" value="35">Bình Định</option>



                            <option data-code="BI" value="47">Bình Dương</option>



                            <option data-code="BP" value="45">Bình Phước</option>



                            <option data-code="BU" value="39">Bình Thuận</option>



                            <option data-code="CM" value="63">Cà Mau</option>



                            <option data-code="CN" value="59">Cần Thơ</option>



                            <option data-code="CB" value="3">Cao Bằng</option>



                            <option data-code="DC" value="42">Đắk Lắk</option>



                            <option data-code="DO" value="43">Đắk Nông</option>



                            <option data-code="DB" value="7">Điện Biên</option>



                            <option data-code="DN" value="48">Đồng Nai</option>



                            <option data-code="DT" value="56">Đồng Tháp</option>



                            <option data-code="GL" value="41">Gia Lai</option>



                            <option data-code="HG" value="2">Hà Giang</option>



                            <option data-code="HM" value="23">Hà Nam</option>



                            <option data-code="HT" value="28">Hà Tĩnh</option>



                            <option data-code="HD" value="19">Hải Dương</option>



                            <option data-code="HP" value="20">Hải Phòng</option>



                            <option data-code="HU" value="60">Hậu Giang</option>



                            <option data-code="HO" value="11">Hòa Bình</option>



                            <option data-code="HY" value="21">Hưng Yên</option>



                            <option data-code="KH" value="37">Khánh Hòa</option>



                            <option data-code="KG" value="58">Kiên Giang</option>



                            <option data-code="KT" value="40">Kon Tum</option>



                            <option data-code="LI" value="8">Lai Châu</option>



                            <option data-code="LD" value="44">Lâm Đồng</option>



                            <option data-code="LS" value="13">Lạng Sơn</option>



                            <option data-code="LO" value="6">Lào Cai</option>



                            <option data-code="LA" value="51">Long An</option>



                            <option data-code="ND" value="24">Nam Định</option>



                            <option data-code="NA" value="27">Nghệ An</option>



                            <option data-code="NB" value="25">Ninh Bình</option>



                            <option data-code="NT" value="38">Ninh Thuận</option>



                            <option data-code="PT" value="16">Phú Thọ</option>



                            <option data-code="PY" value="36">Phú Yên</option>



                            <option data-code="QB" value="29">Quảng Bình</option>



                            <option data-code="QM" value="33">Quảng Nam</option>



                            <option data-code="QG" value="34">Quảng Ngãi</option>



                            <option data-code="QN" value="14">Quảng Ninh</option>



                            <option data-code="QT" value="30">Quảng Trị</option>



                            <option data-code="ST" value="61">Sóc Trăng</option>



                            <option data-code="SL" value="9">Sơn La</option>



                            <option data-code="TN" value="46">Tây Ninh</option>



                            <option data-code="TB" value="22">Thái Bình</option>



                            <option data-code="TY" value="12">Thái Nguyên</option>



                            <option data-code="TH" value="26">Thanh Hóa</option>



                            <option data-code="TT" value="31">Thừa Thiên Huế</option>



                            <option data-code="TG" value="52">Tiền Giang</option>



                            <option data-code="TV" value="54">Trà Vinh</option>



                            <option data-code="TQ" value="5">Tuyên Quang</option>



                            <option data-code="VL" value="55">Vĩnh Long</option>



                            <option data-code="VT" value="17">Vĩnh Phúc</option>



                            <option data-code="YB" value="10">Yên Bái</option>



                          </select>
                        </div>

                      </div>

                      <div class="field  field-half  ">
                        <div class="field-input-wrapper field-input-wrapper-select">
                          <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                          <select class="field-input" id="customer_shipping_district" name="customer_shipping_district">
                            <option data-code="null" value="null" selected>Chọn quận / huyện</option>

                          </select>
                        </div>

                      </div>


                    </form>

                  </div>
                </div>
                <div id="change_pick_location_or_shipping">


                </div>
              </div>


            </div>
            <div class="step-footer">


              <form id="form_next_step" accept-charset="UTF-8" method="post">
                <input name="utf8" type="hidden" value="✓">
                <button type="submit" class="step-footer-continue-btn btn">
                  <span class="btn-content">Tiếp tục đến phương thức thanh toán</span>
                  <i class="btn-spinner icon icon-button-spinner"></i>
                </button>
              </form>
              <a class="step-footer-previous-link" href="/cart">
                <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3">
                  <path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path>
                </svg>
                Giỏ hàng
              </a>


            </div>
          </div>

        </div>
        <div class="main-footer">

        </div>
      </div>
    </div>

  </div>

</body>

</html>