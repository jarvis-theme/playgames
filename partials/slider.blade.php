<div class="row">
  <div id="slider">
    <ul class="bxslider">
      @foreach (slideshow() as $val)
      <li>
        {{HTML::image(slide_image_url($val->gambar), 'slide banner',array('class'=>'slide_gbr'))}}
      </li>
      @endforeach
    </ul>
  </div>
</div>
<!-- end row slider -->