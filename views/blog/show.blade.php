<div class="row">
    <div id="content">
        <div class="tab-title-top">
            <h1>Categories</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
                 <div class="left-sidebar">
                    <ul id="category"> 
                        @foreach(list_blog_category() as $kat)
                        <li>
                            <a href="{{blog_category_url($kat)}}">{{$kat->nama}} </a>
                        </li>
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
                    @foreach(recentBlog(null,5) as $artikel)
                        <div class="product">
                            <div class="tips-post">
                                <h3><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 20)}}</a></h3>
                                <p>{{short_description($artikel->isi, 46)}}<a href="{{blog_url($artikel)}}" class="read-more">Read More</a></p>
                                <span class="date">{{date("F d, Y", strtotime($artikel->created_at))}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(count(vertical_banner()) > 0)
                <div class="banner-left">
                    @foreach(vertical_banner() as $banners)
                        <a href="{{URL::to($banners->url)}}">
                            {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'270','height'=>'386'))}}
                        </a>
                    @endforeach
                </div>
                @endif
                {{ Theme::partial('subscribe') }}
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="single-typical">
                        <div class="tabs-title-typical">
                            <h1>Detail Blog</h1>
                        </div>
                        <div class="tabs-description">
                            <article class="col-lg-12" style="margin-bottom:10px">
                                <hr>
                                <h3>{{$detailblog->judul}}</h3>
                                <p>
                                    <small><i class="fa fa-calendar"></i> {{waktuTgl($detailblog->created_at)}}</small>&nbsp;&nbsp;
                                    <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a></span>
                                </p>
                                {{sosialShare(blog_url($detailblog))}}
                                <br>
                                <p>{{$detailblog->isi}}</p>
                            </article>
                            <hr>
                            <div class="navigate comments clearfix">
                                @if(isset($prev))
                                    <div class="pull-left"><a href="{{$prev->slug}}">&larr; Sebelumnya</a></div>
                                @else
                                    <div class="pull-right"></div>
                                @endif
                                @if(isset($next))
                                    <div class="pull-right">
                                    <a style="float: right;" href="{{$next->slug}}">Selanjutnya &rarr;</a>
                                    </div>
                                @else
                                    <div class="pull-right"></div>
                                @endif
                            </div>
                            <hr>
                            <div>
                                {{$fbscript}}
                                {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>