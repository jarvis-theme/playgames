<div class="row">
	<div id="slider">
		<ul class="bxslider">
			@foreach (slideshow() as $val)
			<li>
				@if($val->text == '')
                <a href="#">
                @else
                <a href="{{filter_link_url($val->text)}}" target="_blank">
                @endif
					{{HTML::image(slide_image_url($val->gambar), 'slide banner',array('class'=>'slide_gbr'))}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>