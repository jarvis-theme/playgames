<br>
  <div class="row">
     @foreach(horizontal_banner() as $banners)
          <div class="adv-full">
            <a href="{{URL::to($banners->url)}}">
          {{HTML::image(banner_image_url($banners->gambar),'banner',array('class'=>'img-responsive banner'))}}</a>
          </div>
    @endforeach
  </div>

  </div>
  <!-- end conten div -->
  <div id="footer">
    <div class="row">
      <div class="tab-links">
        <div class="link">
          <div class="title-hashtag">
            <h2>Main Menu</h2>
          </div>
          <ul>
            @foreach(main_menu()->link as $key=>$link)
            <li><a href="{{menu_url($link)}}"># {{$link->nama}}</a></li>
            @endforeach
          </ul>
        </div>
        @foreach($tautan as $key=>$menu)
          @if($key == '1')
        <div class="link">
          <div class="title-point">
            <h2>{{$menu->nama}}</h2>
          </div>
          <ul>
             @foreach($quickLink as $link_menu)
                @if($menu->id == $link_menu->tautanId)
                <li>@if($link_menu->halaman == '2')
                    @if($link_menu->linkTo == 'halaman/about-us')
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @else
                    <i class="fa fa-circle"></i><a href='{{url("halaman/".strtolower($link_menu->linkTo))}}'> {{$link_menu->nama}}</a>
                    @endif
                    @elseif($link_menu->halaman == '2')
                    <i class="fa fa-circle"></i><a href='{{url("blog/".strtolower($link_menu->linkTo))}}'> {{$link_menu->nama}}</a>

                    @elseif($link_menu->url == '1')
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @else
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @endif
                  </li>
                @endif
            @endforeach
          </ul>
        </div>
          @endif
        @endforeach

      @foreach($tautan as $key=>$menu)
          @if($key == '2')
        <div class="link">
          <div class="title-point">
            <h2>{{$menu->nama}}</h2>
          </div>
          <ul>
             @foreach($quickLink as $link_menu)
                @if($menu->id == $link_menu->tautanId)
                <li>@if($link_menu->halaman == '2')
                    @if($link_menu->linkTo == 'halaman/about-us')
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @else
                    <i class="fa fa-circle"></i><a href='{{url("halaman/".strtolower($link_menu->linkTo))}}'> {{$link_menu->nama}}</a>
                    @endif
                    @elseif($link_menu->halaman == '2')
                    <i class="fa fa-circle"></i><a href='{{url("blog/".strtolower($link_menu->linkTo))}}'> {{$link_menu->nama}}</a>

                    @elseif($link_menu->url == '1')
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @else
                    <i class="fa fa-circle"></i><a href="{{url(strtolower($link_menu->linkTo))}}"> {{$link_menu->nama}}</a>
                    @endif
                  </li>
                @endif
            @endforeach
          </ul>
        </div>
          @endif
        @endforeach


        <div class="link">
          <div class="title-point">
            <h2>contact</h2>
          </div>
          <ul>
            @if(!empty($kontak->email))
            <li><i class="fa fa-circle"></i> <a href="#"> {{$kontak->email}}</a></li>
            @endif
            @if(!empty($kontak->telepon))
            <li><i class="fa fa-circle"></i> <a href="#"> {{$kontak->telepon}}</a></li>
            @endif
            @if(!empty($kontak->hp))
            <li><i class="fa fa-circle"></i> <a href="#"> {{$kontak->hp}}</a></li>
            @endif
            @if(!empty($kontak->bb))
            <li><i class="fa fa-circle"></i> <a href="#"> {{$kontak->bb}}</a></li>
            @endif
            @if(!empty($kontak->ym))
            <li><i class="fa fa-circle"></i> <a href="#"> {{$kontak->ym}}</a></li>
            @endif
          </ul>
        </div>
        <div class="link">
          <div class="title-point">
            <h2>Alamat</h2>
          </div>
          <ul>
            @if(!empty($kontak->nama))
            <li><a href="#"> {{$kontak->nama}}</a></li>
            @endif
             @if(!empty($kontak->alamat))
            <li> <a href="#"> {{$kontak->alamat}}</a></li>
            @endif           
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="copyright">
        <p class="left-company">
          &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="title-copyright" href="http://jarvis-store.com"> Jarvis Store</a>
        </p>
      </div>
      <div class="social-media">
        <span>Social Media</span>
          @if(!empty($kontak->fb))
          <a href="{{url($kontak->fb)}}">
            <div class="icon">
              <i class="fa fa-facebook"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->tw))
          <a href="{{url($kontak->tw)}}">
            <div class="icon">
              <i class="fa fa-twitter"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->gp))
          <a href="{{url($kontak->gp)}}">
            <div class="icon">
              <i class="fa fa-google-plus"></i>
            </div>
          </a>
          @endif
          @if(!empty($kontak->pt))
          <a href="{{url($kontak->pt)}}">
            <div class="icon">
              <i class="fa fa-pinterest"></i>
            </div>
          </a>
          @endif
           @if(!empty($kontak->tl))
          <a href="{{url($kontak->tl)}}">
            <div class="icon">
              <i class="fa fa-tumblr"></i>
            </div>
          </a>
          @endif


      </div>
    </div>
  </div>

</div>
<!-- end row content post -->