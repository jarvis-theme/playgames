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
                        @foreach(list_category() as $side_menu)
                            @if($side_menu->parent == '0')
                            <li>
                                <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}
                                @if($side_menu->anak->count() != 0)
                                <i class="vnavright fa fa-caret-right"></i>
                                @endif
                                </a>

                                @if($side_menu->anak->count() != 0)
                                <ul id="submenu-left">
                                    @foreach($side_menu->anak as $submenu)
                                        @if($submenu->parent == $side_menu->id)
                                        <li>
                                            <a href="{{category_url($submenu)}}" style="background-color:transparent">{{$submenu->nama}}</a>
                                            @if($submenu->anak->count() != 0)
                                            <ul id="submenu-left">
                                                @foreach($submenu->anak as $submenu2)
                                                @if($submenu2->parent == $submenu->id)
                                                <li>
                                                    <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                    @if(count(new_product()) > 0)
                    <div class="left-section">
                        <div class="header-left-section">
                            <h1>New Produk</h1>
                        </div>
                        <div class="product">
                            <ul id="tab-product-new">
                                @foreach(new_product() as $newproduk )
                                <li>
                                    <div class="product-new">
                                        <a href="{{product_url($newproduk)}}">
                                            {{HTML::image(product_image_url($newproduk->gambar1))}}
                                        </a>
                                        <div class="tab-product-name">
                                            <h3 class="product-name">
                                                <a href="{{product_url($newproduk)}}">
                                                    {{short_description($newproduk->nama,55)}}
                                                </a>
                                            </h3>
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
                    </div>
                    @endif
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
                    </div>
                    <div class="left-section list-collection">
                        <h5 class="col-xs-12 col-sm-12">Koleksi</h5>
                        @foreach (list_koleksi() as $kol)
                        <div class="side-collection">
                            <div class="col-xs-4 col-sm-4">
                                <a href="{{koleksi_url($kol)}}">
                                    {{ HTML::image(koleksi_image_url($kol->gambar,'thumb'),$kol->nama, array('class' => 'img-responsive','width'=>'80','height'=>'80' ))}}
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <a href="{{koleksi_url($kol)}}">{{$kol->nama}}</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                    </div>
                    @if(count(vertical_banner()) > 0)
                    <div class="banner-left">
                        @foreach(vertical_banner() as $banners)
                            <a href="{{url($banners->url)}}">
                                {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'386'))}}
                            </a>
                        @endforeach
                    </div>
                    @endif
                    {{ Theme::partial('subscribe') }}
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        @if(count(list_product(null, @$category, @$collection)) > 0)
                        <div id="single-categories">
                            @foreach(list_product(null, @$category, @$collection) as $listproduk)
                            <div class="list col-md-3 col-sm-6 col-xs-12">
                                <div class="post-category">
                                    @if(is_outstok($listproduk))
                                        <div class="item-icon"><span class="label label-default">KOSONG</span></div>
                                    @else
                                        @if(is_terlaris($listproduk))
                                        <div class="item-icon"><span class="label label-danger">HOT ITEM</span></div>
                                        @elseif(is_produkbaru($listproduk))
                                        <div class="item-icon"><span class="label label-info">BARU</span></div>
                                        @endif
                                    @endif
                                    <a href="{{product_url($listproduk)}}">
                                        {{HTML::image(product_image_url($listproduk->gambar1),'',array("id"=>"gbr"))}}
                                    </a>
                                    
                                    
                                    <!-- <div class="col-xs-6" id="desc-produk" style="display:none;">
                                        {{$listproduk->deskripsi}}
                                    </div> -->
                                    
                                    <div class="tab-title">
                                        <h2>{{short_description($listproduk->nama,20)}}</h2>
                                        @if(!empty($listproduk->hargaCoret))
                                        <h2><strike>{{price($listproduk->hargaCoret)}}</strike></h2>
                                        @endif
                                        <h2 class="price"><strong>{{price($listproduk->hargaJual)}}</strong></h2>
                                        <a href="{{product_url($listproduk)}}" class="add-chart">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{list_product(null, @$category, @$collection)->links()}}
                        @else
                        <article class="text-center">
                            <i>Produk tidak ditemukan</i>
                        </article>
                        @endif
                    </div>
                </div>
            </div>