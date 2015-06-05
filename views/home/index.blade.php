
<!-- end row banner top -->
<div class="row">
  <div id="content">
    <div class="tab-title-top">
      <h1>All Produk
        <div class="sortby">
          <span>Sort by :</span>
          <button class="btn grid"><i class="fa fa-th"></i></button>
          <button class="btn list"><i class="fa fa-bars"></i></button>
        </div>
      </h1>
    </div>
    <div class="tab-title-category first-category">
      <h3>New Produk</h3>
    </div>
    <div class="tab-post">
      @foreach(new_product() as $newproduk )
        <div class="post">
          {{HTML::image(product_image_url($newproduk->gambar1))}}
          <div class="tab-title">
            <h2>{{short_description($newproduk->nama,22)}}</h2>
            <h3><strong>{{price($newproduk->hargaJual)}}</strong></h3>
            <a href="{{product_url($newproduk)}}" class="add-chart">Add to Chart</a>
          </div>
        </div>
      @endforeach
    </div>
    
    <div class="tab-title-category second-category">
      <h3>Home Produk</h3>
    </div>
    <div class="tab-post">
      @foreach(home_product() as $homeproduk)
      <div class="post">
        {{HTML::image(product_image_url($homeproduk->gambar1))}}
        <div class="tab-title">
          <h2>{{short_description($homeproduk->nama,22)}}</h2>
          <h3><strong>{{price($homeproduk->hargaJual)}}</h3>
          <a href="{{product_url($homeproduk)}}" class="add-chart">Add to Chart</a>
        </div>
      </div>
      @endforeach
    </div>

    <div class="tab-title-category third-category">
      <h3>lis Produk</h3>
    </div>
    <div class="tab-post">
      @foreach(list_product(8) as $listproduk)
      <div class="post">
         {{HTML::image(product_image_url($listproduk->gambar1))}}
        <div class="tab-title">
          <h2>{{short_description($listproduk->nama,22)}}</h2>
          <h3><strong>{{price($listproduk->hargaJual)}}</strong></h3>
          <a href="{{product_url($listproduk)}}" class="add-chart">Add to Chart</a>
        </div>
      </div>
      @endforeach
    </div>

    

