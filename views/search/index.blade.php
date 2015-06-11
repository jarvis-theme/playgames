<div class="row">
    <div id="content">
        <div class="tab-title-top">
            <h1>Categories</h1>
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
                </div><!-- end left section -->
                 {{ Theme::partial('subscribe') }}
                <!-- end banner -->
                
        </div>
        <div class="col-sm-9">
            <div class="row">
                @if($jumlahCari != 0)
                    @if(count($hasilpro) > 0)
                        <div id="single-categories">
                            @foreach($hasilpro as $listproduk)
                            <div class="list col-md-3 col-sm-6 col-xs-12">
                                <div class="post-category">
                                {{HTML::image(product_image_url($listproduk->gambar1))}}
                                <div class="tab-title">
                                    <h2>{{short_description($listproduk->nama,22)}}</h2>
                                    <h3><strong>{{price($listproduk->hargaJual)}}</strong></h3>
                                    <a href="{{product_url($listproduk)}}" class="add-chart">Lihat</a>
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{$hasilpro->links()}}
                    @endif
                    @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                        <div id="single-typical">
                            <div class="tabs-title-typical">
                                <h1>Blog</h1>
                            </div>
                            <div class="tabs-description">
                                @foreach($hasilhal as $blog)
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
                                @foreach($hasilblog as $blog_result)  
                                    <article class="col-lg-12" style="margin-bottom:10px">
                                        <h3 style="margin-bottom: 3px;">
                                            <strong><a href="{{blog_url($blog_result)}}">{{$blog_result->judul}}</a></strong>
                                        </h3>
                                        <p style="margin-bottom: 15px;">
                                            <small><i class="fa fa-calendar"></i> {{waktuTgl($blog_result->updated_at)}}</small>&nbsp;&nbsp;
                                            <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blog_result->kategori)}}">{{@$blog_result->kategori->nama}}</a></span>
                                        </p>
                                        <p>
                                            {{short_description($blog_result->isi,300)}}<br>
                                            <a href="{{blog_url($blog_result)}}" class="theme">Baca Selengkapnya →</a>
                                        </p>
                                        <hr>
                                    </article>
                                @endforeach 
                            </div>
                    </div>
            </div>
                    @endif
                 @else
                    <article class="text-center">
                        <i>Hasil pencarian tidak ditemukan</i>
                    </article>
                @endif
            </div>
        </div>
    </div>