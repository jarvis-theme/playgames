<div class="row">
  <div class="col-sm-12">
    <div id="sign-up">
      @if( is_login() )
      <div class="account">
        <a href="{{url::to('member')}}"><img src="{{url(dirTemaToko().'jarvisgames/assets/img/login.png')}}"></a>
      </div>
      <div class="login">
        <ul>
          <li><a href="{{url::to('logout')}}">Logout </a></li>
        </ul>
      </div>
      @else
      <div class="account">
        <img src="{{url(dirTemaToko().'jarvisgames/assets/img/login.png')}}">
      </div>
      <div class="login">
        <ul>
          <li><a href="{{url::to('member')}}">Login |</a></li>
          <li><a href="{{url::to('member/create')}}"> Sign up </a></li>
        </ul>
      </div>
      @endif
    </div>
  </div>
</div> 
<!-- end row signup -->

<div class="row">
  <div id="header">
    <div class="col-sm-6">
      <div class="logo">
        <a href="{{url('home')}}">
          {{HTML::image(logo_image_url(), 'jarvisgames')}}
        </a>
      </div>
    </div>
    <div class="col-sm-4 col-sm-offset-2">
      {{shopping_cart()}}
    </div>
  </div>
</div>
<!-- end row header -->

<div class="row">
  <div id="menus">
    <button id="btn-slide" class="btn-hamburger"><i class="fa fa-bars"></i></button>
    <ul id="menus-top-section">
      @foreach(main_menu()->link as $key=>$link)
      <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
      @endforeach

      <li class="search">
        <button class="btn-form">
          <img src="{{url(dirTemaToko().'jarvisgames/assets/img/zoom.png')}}">
        </button>
      </li>
    </ul>
    <form action="{{url('search')}}" method="post" class="form-search">
      <input type="text" name="search" class="text-search" placeholder="Search" required>
      <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
    </form>
 
</div>
</div>
<!-- end row menus -->