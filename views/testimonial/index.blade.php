@if(Session::has('msg'))
    <div class="success" id='message' style='display:none'>
    	<p>Terima kasih, testimonial anda sudah terkirim.</p>
    </div>
@endif
@if($errors->all())
    <div class="error" id='message' style='display:none'>
    	Terjadi kesalahan dalam menyimpan data.<br>
    	<ul>
        	@foreach($errors->all() as $message)
        		<li>{{ $message }}</li>
        	@endforeach
    	</ul>
    </div>
@endif

<!-- =============================================================================================== -->

<!-- Page title -->
<div class="row">
    <div id="content">
        <div class="tab-title-top">
            <h1>Categories
                <div class="sortby">
                    <span>Sort by :</span>
                    <button class="btn"><i class="fa fa-th"></i></button>
                    <button class="btn"><i class="fa fa-bars"></i></button>
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
                                    <a href={{category_url($menu)}}>{{$menu->nama}}<i class="vnavright fa fa-caret-right"></i></a>
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
                 {{ Theme::partial('subscribe') }}
                <!-- end banner -->
               
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div id="single-typical">
                        <div class="tabs-title-typical">
                            <h1>Testimonial</h1>
                        </div>
                        @foreach (list_testimonial() as $items)  
                            <blockquote>
                                <h4>{{$items->nama}}</h4>
                                    <p class="quote">
                                        {{$items->isi}}
                                    </p>
                            </blockquote>
                        @endforeach
                        <br>
                        <div class="row">
                            <div class="col-md-10">
                                <!-- Pagination -->
                            {{$testimonial->links()}}
                            </div>
                        </div>
                        <div class="respond col-md-6">
                            <h3 style="margin-top: 1px;margin-bottom: 20px;">Buat Testimonial</h3>
                            <form method="post" action="{{URL::to('testimoni')}}" role="form">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" name="nama" required id="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Testimonial</label>
                                    <textarea name="testimonial" required class="form-control" rows="3" placeholder="Enter Massage"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Kirim Testimonial</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>