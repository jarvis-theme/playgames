<div class="row">
    <div id="content">
        <div class="tab-title-top">
            <h1>Detail Product</h1>
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
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="detail-product">
                        <form action="#" id="addorder">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="zoom-caption">
                                        <img id="imgZoom" src="{{product_image_url($produk->gambar1)}}" data-zoom-image="{{product_image_url($produk->gambar1)}}">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-7">
                                    <div class="tabs-caption">
                                        <h2>Screenshoot</h2>
                                        <div id="product_detail">
                                            <ul class="caption-thumbnail">
                                                @if($produk->gambar1 != '')
                                                    <li>
                                                        <a href="{{product_image_url($produk->gambar1)}}" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar1)}}" data-zoom-image="{{product_image_url($produk->gambar1)}}">
                                                        <img id="img-thumbnail" src="{{product_image_url($produk->gambar1,'medium')}}" width="100"></a>
                                                    </li>
                                                @endif
                                                @if($produk->gambar2 != '')
                                                    <li>
                                                        <a href="{{product_image_url($produk->gambar2)}}" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar2)}}" data-zoom-image="{{product_image_url($produk->gambar2)}}">
                                                        <img id="img-thumbnail" src="{{product_image_url($produk->gambar2,'medium')}}" width="100"></a>
                                                    </li>
                                                @endif
                                                @if($produk->gambar3 != '')
                                                    <li>
                                                        <a href="#" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar3)}}" data-zoom-image="{{product_image_url($produk->gambar3)}}">
                                                        <img id="img-thumbnail" src="{{product_image_url($produk->gambar3,'medium')}}" width="100"></a>
                                                    </li>
                                                @endif
                                                @if($produk->gambar4 != '')
                                                    <li>
                                                        <a href="#" class="elevatezoom-gallery thumbnail-img" data-update="" data-image="{{product_image_url($produk->gambar4)}}" data-zoom-image="{{product_image_url($produk->gambar4)}}">
                                                        <img id="img-thumbnail" src="{{product_image_url($produk->gambar4,'medium')}}" width="100"></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="tab-quantity">
                                            @if($opsiproduk->count() > 0)
                                                <h3>Opsi :</h3>
                                                <div class="select-style">
                                                  <select>
                                                    <option value="">-- Pilih Opsi --</option>
                                                    @foreach ($opsiproduk as $key => $opsi)
                                                     <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-quantity">
                                            <h3>Quantity :</h3>
                                            <button type='submit' class='qtyminus' field='qty' /><i class="fa fa-caret-left"></i></button>
                                            <input type='text' name='qty' value='0' class='qty' />
                                            <button type='button' value='+' class='qtyplus' field='qty' /><i class="fa fa-caret-right"></i></button>
                                        </div>
                                        <div class="avalaible-text">
                                            @if($produk->stok > 0)
                                                <span>
                                                    <i class="ceklist fa fa-check"></i>
                                                </span>
                                                <span>Avalaible Stok, <span class="text-color">{{$produk->stok}} item</span></span>
                                            @else
                                                <span class="text-color">Out of stock</span>
                                            @endif
                                        </div>
                                        <div class="sosmed">
                                            {{sosialShare(product_url($produk))}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-product">
                                <h1>{{$produk->nama}}</h1>
                                <div id="harga">
                                    @if(!empty($produk->hargaCoret))
                                    <h2><strike>{{price($produk->hargaCoret)}}</strike></h2>&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endif
                                    <h2>{{price($produk->hargaJual)}}</h2>
                                </div>
                            </div>
                            <div class="tabs-option-category">
                                <ul class="tabs">
                                    <li class="tab-link current" data-tab="tab-1">Deskripsi Produk</li>
                                    <li class="tab-link" data-tab="tab-2">Preview</li>
                                </ul>
                                <div id="tab-1" class="tab-content current">
                                    {{$produk->deskripsi}}
                                </div>
                                <div id="tab-2" class="tab-content">
                                    <p>{{pluginTrustklik()}}</p>
                                </div>
                            </div>
                            <div class="tabs-checkout">
                                <div class="col-xs-12 col-sm-9">
                                    @foreach(list_banks() as $value)
                                    <img src="{{bank_logo($value)}}" style="margin-bottom: 10px;">
                                    @endforeach
                                    @foreach(list_payments() as $pay)
                                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                                        <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" style="margin-bottom: 10px;" />
                                        @endif
                                    @endforeach
                                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                    <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" style="margin-bottom: 10px;" />
                                    @endif
                                </div>
                                <div class="tab-btn"> 
                                    <button class="baddtocart btn-checkout chart" type="submit"><img src="{{url(dirTemaToko().'playgames/assets/img/checkout.png')}}">ADD TO CHART</button>
                                </div>
                            </div>
                        </form>
                        @if(count(other_product($produk)) > 0)
                        <div class="related-post">
                            <div class="row">
                                @foreach(other_product($produk) as $relproduk)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="post">
                                        @if(is_outstok($relproduk))
                                            <div class="item-icon"><span class="label label-default">KOSONG</span></div>
                                        @else
                                            @if(is_terlaris($relproduk))
                                            <div class="item-icon"><span class="label label-danger">HOT ITEM</span></div>
                                            @elseif(is_produkbaru($relproduk))
                                            <div class="item-icon"><span class="label label-info">BARU</span></div>
                                            @endif
                                        @endif
                                        <a href="{{product_url($relproduk)}}">
                                            <img src="{{product_image_url($relproduk->gambar1)}}">
                                        </a>
                                        <h2>{{shortDescription($relproduk->nama,22)}}</h2>
                                        <h3><strong>{{price($relproduk->hargaJual)}}</strong></h3>
                                        <a href="{{product_url($relproduk)}}" class="add-chart">Lihat</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>