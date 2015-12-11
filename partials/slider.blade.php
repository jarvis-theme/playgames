<div class="row">
	<div id="slider">
		<ul class="bxslider">
			@foreach (slideshow() as $val)
			<li>
                <a href="{{$val->text=='' ? '#' : $val->text}}">
					{{HTML::image(slide_image_url($val->gambar), 'slide banner',array('class'=>'slide_gbr'))}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>