 @extends('layout.master')
 @section('content')
<section id="content" class="clearfix container">
  <div class="row">
    <div id="cart" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <!-- Begin empty cart -->

      <div class="row">
        <div id="layout-page" class="col-md-12 col-sm-12 col-xs-12">
          <span class="header-page clearfix">
            <h1>Giỏ hàng</h1>
          </span>
          <form action="/cart" method="post" id="cartformpage">
            <table>
              <thead>
                <tr>
                  <th class="image">&nbsp;</th>
                  <th class="item">Tên sản phẩm</th>
                  <th class="qty">Số lượng</th>
                  <th class="price">Giá tiền</th>
                  <th class="remove">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach (Cart::content() as $cart)
                  <tr>
                  <td class="image">
                    <div class="product_image">
                      <a href="/chitietsanpham/{{$cart->id}}">
                        <img src="{{$cart->options->image}}" alt="{{$cart->name}}">

                      </a>
                    </div>
                  </td>
                  <td class="item">
                      <a href="/chitietsanpham/{{$cart->id}}">
                      {{$cart->name}}
                    </a>
                  </td>
                  <td class="qty">
                    <input type="number" size="4" name="updates[]" min="1" id="updates_1025311300" value="{{$cart->qty}}" onfocus="this.select();" class="tc item-quantity">
                  </td>
                  <td class="price">{{number_format($cart->price)}}₫</td>
                  <td class="remove">
                    <a href="/cart/delete/{{$cart->rowId}}" class="cart">Xóa</a>
                  </td>
                </tr>
                @endforeach
                <tr class="summary">
                    <td class="image">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="text-center"><b>Tổng cộng:</b></td>
                    <td class="price">
                      <span class="total">
                        <strong>{{Cart::subtotal()}}₫</strong>
                      </span>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                

              </tbody>
            </table>
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 inner-left inner-right">
                <div class="checkout-buttons clearfix">
                  <label for="note">Ghi chú </label>
                  <textarea id="note" name="note" rows="8" cols="50"></textarea>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 cart-buttons inner-right inner-left">
                <div class="buttons clearfix">
                  <button type="submit" id="checkout" class="button-default" name="checkout" value="">Thanh toán</button>
                  <button type="submit" id="update-cart" class="button-default" name="update" value="">Cập nhật</button>
                </div>
              </div>
              <div class="col-md-12 col-sm-12  col-xs-12 continue-shop">

                <a href="/collections/all">
                  <i class="fa fa-reply"></i> Tiếp tục mua hàng</a>
              </div>

            </div>
          </form>
        </div>
      </div>



      <!-- End cart -->

    </div>


  </div>
</section>
@stop