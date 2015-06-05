@if(Session::has('errorlogin'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email atau password anda salah.</p>
    </div>
@endif
@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}!!!
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
    <p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
    <p>{{Session::get('error')}}</p>
</div>  
@endif

<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4 pull-right">
            {{ Theme::partial('subscribe') }}
            <br>
        </div>
        <div id="center_column" class="col-lg-4 col-xs-12 col-sm-4">
            <h2>Lupa Password</h2><hr><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Email">
                <span class="input-group-btn">
                    <button class="btn btn-green" type="button">Reset Password</button>
                </span>
            </div><br><br>
        </div>
        <div id="center_column" class="col-lg-4 col-md-offset-1">
            <h2>Pelanggan Baru</h2><hr><br>
            <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member.</p>
            <div class="input-group">
                <span class="input-group-btn">
                    <a href="{{URL::to('member/create')}}" class="btn btn-red">Daftar</a>
                </span>
            </div>
        </div>
    </div>
</div>