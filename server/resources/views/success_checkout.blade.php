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

                      @foreach ($order->details as $cart)
                      <tr class="product" data-product-id="1013105108" data-variant-id="1025311112">
                        <td class="product-image">
                          <div class="product-thumbnail">
                            <div class="product-thumbnail-wrapper">
                              <img class="product-thumbnail-image" alt="Đồng hồ nữ Sanda v2 - dây đỏ mặt đen" src="{{$cart->product->image}}" />
                            </div>
                            <span class="product-thumbnail-quantity" aria-hidden="true">{{$cart->total}}</span>
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
                            {{$order->total}}₫
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
                            {{$order->total}}₫
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

          </div>
          <div class="main-content">


            <div>
              <div class="section">
                <div class="section-header os-header">

                  <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-width="2" class="hanging-icon checkmark">
                    <path class="checkmark_circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path>
                    <path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path>
                  </svg>

                  <div class="os-header-heading">
                    <h2 class="os-header-title">

                      Đặt hàng thành công

                    </h2>
                    <span class="os-order-number">
                      Mã đơn hàng {{$order->id}}
                    </span>

                    <span class="os-description">
                      Cám ơn bạn đã mua hàng!
                    </span>

                  </div>
                </div>
              </div>

              <div class="thank-you-additional-content">
                <!-- Google Code for Successful checkout Page -->
              </div>

              <div class="section thank-you-checkout-info">
                <div class="section-content">
                  <div class="content-box">
                    <div class="content-box-row content-box-row-padding content-box-row-no-border">
                      <h2>Thông tin đơn hàng</h2>
                    </div>
                    <div class="content-box-row content-box-row-padding">
                      <div class="section-content">
                        <div class="section-content-column">

                          <h3>Thông tin giao hàng</h3>
                          <p>
                            Tên Khác hàng :
                            <br>Số điện thoại : {{$order->phone}}
                            <br>Email : {{$order->email}}
                            <br>Địa chỉ : {{$order->address}}
                            <br>
                          </p>
                          <h3>Phương thức thanh toán</h3>
                          <p>
                            Thanh toán khi giao hàng (COD)
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="step-footer">

                <a href="/" class="step-footer-continue-btn btn">
                  <span class="btn-content">Tiếp tục mua hàng</span>
                </a>

                <p class="step-footer-info">
                  <i class="icon icon-os-question"></i>
                  <span>


                    Cần hỗ trợ?
                    <a href="mailto:happylivepro@gmail.com">Liên hệ chúng tôi</a>
                  </span>
                </p>
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