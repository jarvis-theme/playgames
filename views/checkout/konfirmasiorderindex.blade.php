@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>
</div>
@endif

<div class="row">
	<div id="content">
		<div class="tab-title-top">
			<h1>Konfirmasi Order</h1>
		</div>

		<div class="register-page">
			<div class="contact-form">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
					<input style="float:left;" type="text" class="form-control" placeholder=" Kode Order" name='kodeorder' required>
					<button type="submit" style="margin-left:10px;" class="btn btn-success"><span> Cari Kode</span></button>
				{{Form::close()}}
			</div>
		</div>