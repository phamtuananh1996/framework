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
  <form action="/checkout" method="post">
    {{csrf_field()}}
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
                            <img class="product-thumbnail-image" alt="Đồng hồ nữ Sanda v2 - dây đỏ mặt đen" src="{{$cart->options->image}}" />
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
                      <div class="field  field-half">
                        <div class="field-input-wrapper field-input-wrapper-select">
                          <label class="field-label" for="customer_shipping_province">Tỉnh / thành</label>
                          <select class="field-input" id="customer_shipping_province" name="province">
                            <option data-code="null" value="null" selected>Chọn tỉnh / thành</option>
                            @foreach ($provinces as $province)
                            <option value="{{$province->name}}">{{$province->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="field  field-half">
                        <div class="field-input-wrapper field-input-wrapper-select">
                          <label class="field-label" for="customer_shipping_district">Quận / huyện</label>
                          <select class="field-input" id="customer_shipping_district" name="district">
                            <option value="" selected>Chọn quận / huyện</option>
                          </select>
                        </div>
                      </div>
                      <div class="field  field-half">
                        <div class="field-input-wrapper field-input-wrapper-select">
                          <label class="field-label" for="customer_shipping_ward">Quận / huyện</label>
                          <select class="field-input" id="customer_shipping_ward" name="ward">
                            <option data-code="null" value="null" selected>Chọn Xã /Phường</option>
                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                <div id="change_pick_location_or_shipping">
                </div>
              </div>
            </div>
            <div class="step">
              <div class="step-sections " step="2">




                <div id="section-shipping-rate" class="section">
                  <div class="section-header">
                    <h2 class="section-title">Phương thức vận chuyển</h2>
                  </div>
                  <div class="section-content">

                    <div class="content-box">

                      <div class="content-box-row">
                        <div class="radio-wrapper">
                          <label class="radio-label" for="shipping_rate">
                            <div class="radio-input">
                              <input id="shipping_rate" class="input-radio" type="radio" name="shipping_rate" value="ship" checked="">
                            </div>
                            <span class="radio-label-primary">Giao hàng tận nơi</span>
                            <span class="radio-accessory content-box-emphasis">
                              0₫
                            </span>
                          </label>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <div id="section-payment-method" class="section">
                  <div class="section-header">
                    <h2 class="section-title">Phương thức thanh toán</h2>
                  </div>
                  <div class="section-content">
                    <div class="content-box">


                      <div class="radio-wrapper content-box-row">
                        <label class="radio-label" for="payment_method_id_485706">
                          <div class="radio-input">
                            <input id="payment_method_id_485706" class="input-radio" name="payment_method" type="radio" value="COD" checked="">
                          </div>
                          <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                        </label>
                      </div>


                      <div class="radio-wrapper content-box-row">
                        <label class="radio-label" for="payment_method_id_485708">
                          <div class="radio-input">
                            <input id="payment_method_id_485708" class="input-radio" name="payment_method" type="radio" value="bank">
                          </div>
                          <span class="radio-label-primary">Chuyển khoản qua ngân hàng</span>
                        </label>
                      </div>



                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="step-footer">
                <button type="submit" class="step-footer-continue-btn btn">
                  <span class="btn-content">Hoàn tất đơn hàng</span>
                  <i class="btn-spinner icon icon-button-spinner"></i>
                </button>
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
</form>
</body>

</html>

<script>
  $('#customer_shipping_province').change(function () {
    $.get('/getdistrict?name=' + $(this).val(), function (res) {
      $('#customer_shipping_district').html(res);
    })
  })
  $('#customer_shipping_district').change(function () {
    $.get('/getward?name=' + $(this).val(), function (res) {
      $('#customer_shipping_ward').html(res);
    })
  })
</script>