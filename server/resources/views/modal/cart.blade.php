<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel">Bạn có {{Cart::count()}} sản phẩm trong giỏ hàng.</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span class="hrv-close-modal"></span>
    </button>
  </div>
  <form action="/cart" method="post" id="cartform" style="display: block;">
    <div class="modal-body">
      <table style="width:100%;" id="cart-table">
        <tbody>
          <tr>
            <th></th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá tiền</th>
            <th></th>
          </tr>
          <tr class="line-item original">
            <td class="item-image"></td>
            <td class="item-title">
              <a></a>
            </td>
            <td class="item-quantity"></td>
            <td class="item-price"></td>
            <td class="item-delete text-center"></td>
          </tr>
          @foreach (Cart::content() as $cart)
          <tr class="line-item">
            <td class="item-image">
              <img src="{{$cart->options->image}}">
            </td>
            <td class="item-title">
              <a href="/chitietsanpham/{{$cart->id}}">{{$cart->name}}
              </a>
            </td>
            <td>
              <input id="quantity1" name="updates[]" min="1" type="number" value="{{$cart->qty}}" class="">
            </td>
            <td class="item-price">{{number_format($cart->price)}}₫</td>
            <td class="item-delete text-center">
              <a onclick="removeCart({{$cart->rowId}})">
                <i class="fa fa-times"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-sm-6">
          <div class="modal-note">
            <textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="total-price-modal">
            Tổng cộng :
            <span class="item-total">{{Cart::subtotal()}}₫</span>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top:10px;">
        <div class="col-lg-6">
          <div class="comeback">
            <a href="/">
              <i class="fa fa-caret-left mr10"></i>Tiếp tục mua hàng
            </a>
          </div>
        </div>
        <div class="col-lg-6 text-right">
          <div class="buttons btn-modal-cart">
            <button type="submit" class="button-default" id="checkout" name="checkout">
              Đặt hàng
              <i class="fa fa-caret-right"></i>
            </button>
          </div>

          <div class="buttons btn-modal-cart">
            <button type="submit" class="button-default" id="update-cart-modal" name="">
              <i class="fa fa-caret-left"></i>
              Cập nhật
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
