<div class="row">
    <div id="content">
        <div class="tab-title-top">
            <h1>Categories
                <div class="sortby">
                    <span>Sort by :</span>
                    <button class="btn grid_product"><i class="fa fa-th"></i></button>
                    <button class="btn list_product"><i class="fa fa-bars"></i></button>
                </div>
            </h1>
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
                        <div id="single-categories">
                            @foreach(list_product(null, @$category) as $listproduk)
                                <div class="list col-md-3 col-sm-6 col-xs-12">
                                    <div class="post-category">
                                        {{HTML::image(product_image_url($listproduk->gambar1))}}
                                        <div class="tab-title">
                                            <h2>{{short_description($listproduk->nama,22)}}</h2>
                                            <h3><strong>{{price($listproduk->hargaJual)}}</strong></h3>
                                            <a href="{{product_url($listproduk)}}" class="add-chart">Add to Chart</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            
                        </div>
                        {{list_product(16)->links()}}
                    </div>
                </div>
            </div>