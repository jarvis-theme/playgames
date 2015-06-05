<div class="row">
<div id="content">
<div class="tab-title-top">
    <h1>Categories</h1>
</div>
<div class="row">
    <div class="col-sm-3">
         <div class="left-sidebar">
                    <ul id="category">
                        @foreach(category_menu() as $key=>$menu)
                            @if($menu->parent=='0')
                                <li>
                                    <a href={{category_url($menu)}}>{{$menu->nama}}
                                     @if($menu->anak->count()!=0)
                                        <i class="vnavright fa fa-caret-right"></i>
                                    @endif
                                    </a>
                                    @if($menu->anak->count()!=0)
                                        <ul id="submenu-left">
                                            @foreach($menu->anak as $key => $submenu)
                                                <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
          <!-- end left-sidebar-->
        <div class="left-section">
            <div class="header-left-section">
                <h1>New Produk</h1>
            </div>
            <div class="product">
                <ul id="tab-product-new">
                    @foreach(new_product() as $newproduk )
                    <li>
                        <div class="product-new">
                            <a href="{{product_url($newproduk)}}">{{HTML::image(product_image_url($newproduk->gambar1))}}</a>
                            <div class="tab-product-name">
                                <h3 class="product-name"><a href="{{product_url($newproduk)}}">{{short_description($newproduk->nama,12)}}</a></h3>
                            </div>
                            <div class="tab-price">
                                <h3 class="price">{{price($newproduk->hargaJual)}}</h3>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a href="{{url('produk')}}" class="link-more-product">View More</a>
            </div>
        </div><!-- end left section -->
        <div class="left-section">
            <div class="header-left-section">
                <h1>Artikel</h1>
            </div>
            @foreach(list_blog(5) as $artikel)
                <div class="product">
                    <div class="tips-post">
                        <h3><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 20)}}</a></h3>
                        <p>{{short_description($artikel->isi, 46)}}<a href="{{blog_url($artikel)}}" class="read-more">Read More</a></p>
                        <span class="date">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                    </div>
                </div>
            @endforeach
        </div><!-- end left section -->
        <div class="banner-left">
            @foreach(vertical_banner() as $banners)
                <a href="{{URL::to($banners->url)}}">
                {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'386'))}}
                </a>
            @endforeach
        </div>
        <!-- end banner -->
         {{ Theme::partial('subscribe') }}

    </div>
    <div class="col-sm-9">
        <div class="row">
            <div id="single-typical">
                <div class="tabs-title-typical">
                    <h1>Blog</h1>
                </div>
                <div class="tabs-description">
                    @if(count(list_blog(5,@$blog_category)) > 0)
                        @foreach(list_blog(5,@$blog_category) as $blog)
                            <article class="col-lg-12" style="margin-bottom:10px">
                                <hr>
                                <h3>{{$blog->judul}}</h3>
                                <p>
                                <small><i class="fa fa-calendar"></i> {{waktuTgl($blog->updated_at)}}</small>&nbsp;&nbsp;
                                <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blog->kategori)}}">{{@$blog->kategori->nama}}</a></span>
                                </p>
                                <p>
                                {{shortDescription($blog->isi,300)}}<br>
                                <a href="{{blog_url($blog)}}" class="theme">Baca Selengkapnya →</a>
                                </p>
                            </article>
                        @endforeach
                        <div class="pagination">
                            {{list_blog(5,@$blog_category)->links()}}
                        </div>
                    @else
                        <article style="font-style:italic; text-align:center;">
                            <small>Blog tidak ditemukan.</small>
                        </article>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>