@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}
    </div>
@endif
@if(Session::has('success'))
    <div class="success" id='message' style='display:none'>
        <p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif  

<div class="row">
<div id="content">
<div class="tab-title-top">
    <h1>Login Member</h1>
</div>

<div class="login-page">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-6 mg">
            <h2>Forget Password</h2>
            <br>
            {{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2">Password Baru</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" placeholder="Password Baru" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword2" class="col-sm-2">Konfirmasi Password Baru</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password Baru" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Update Password</button>
                    </div>
                </div>
            {{Form::close()}}
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-5">
            @if(count(vertical_banner()) > 0)
                <div class="banner-left">
                    @foreach(vertical_banner() as $banners)
                        <a href="{{url($banners->url)}}">
                            {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'386','class'=>'bn'))}}
                        </a>
                    @endforeach
                </div>
            @endif
        </di>
    </div>
</div>