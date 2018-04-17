
@extends('layout.master')

@section('content')
    
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 custom-create" id="layout-page">
        <span class="header-contact header-page clearfix">
            <h1>Đăng nhập</h1>
        </span>

        <div id="customer-login">
            <div id="login" class="userbox">
                <div class="accounttype">
                    <h2 class="title"></h2>
                </div>
                <form accept-charset="UTF-8" action="/register" id="customer_login" method="post">
                    {{csrf_field()}}
                    <div id="last_name" class="clearfix large_form">
                      <label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                      <input required="" type="text" value="" name="firstname" placeholder="Họ" id="last_name" class="text" size="30">
                    </div>
                    <div id="last_name" class="clearfix large_form">
                      <label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                      <input required="" type="text" value="" name="lastname" placeholder="Tên" id="last_name" class="text" size="30">
                    </div>
                    <div id="phone" class="clearfix large_form">
                      <label for="phone" class="label icon-field"><i class="icon-login icon-phone "></i></label>
                      <input required="" type="text" value="" name="phone" placeholder="Số điện thoại" id="last_name" class="text" size="30">
                    </div>
                    <div id="address" class="clearfix large_form">
                      <label for="address" class="label icon-field"><i class="icon-login icon-adress "></i></label>
                      <input required="" type="text" value="" name="address" placeholder="Địa chỉ" id="last_name" class="text" size="30">
                    </div>
                    <div class="clearfix large_form">
                        <label for="customer_email" class="icon-field">
                            <i class="icon-login icon-envelope "></i>
                        </label>
                        <input required="" type="email" value="" name="email" id="customer_email" placeholder="Email" class="text">
                    </div>


                    <div class="clearfix large_form">
                        <label for="customer_password" class="icon-field">
                            <i class="icon-login icon-shield"></i>
                        </label>
                        <input required="" type="password" value="" name="password" id="customer_password" placeholder="Mật khẩu" class="text"
                            size="16">
                    </div>


                    <div class="action_bottom">
                        <input class="btn btn-signin" type="submit" value="Đăng Ký">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function showRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'block';
            document.getElementById('login').style.display = 'none';
        }

        function hideRecoverPasswordForm() {
            document.getElementById('recover-password').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        }

        if (window.location.hash == '#recover') { showRecoverPasswordForm() }
    </script>

</div>
@stop