<?php
  $baseUrl = Yii::app()->baseUrl;
  $cs = Yii::app()->getClientScript();
  $cs->registerCssFile($baseUrl.'/css/layanan.css');
?>

<div class="row">
	<ol class="breadcrumb" id="divBreadcrumb">
	  <li><a href="#">Depan</a></li>
	  <li><a href="#">Penyelenggara</a></li>
	  <li class="active">Layanan</li>
	</ol>

	<!-- main content -->
	<div class="col-xs-9" id="layananMain">
		<div class="row">
			<div class="col-xs-12">
				<h2>Judul Layanan</h2>
				<a href=""><h3>Pengelola Layanan</h3></a>
				<br>
				<h4>Syarat</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed velit arcu, fringilla at viverra eget, consequat ut felis.</p>
				<br>
				<h4>Deskripsi</h4>
				<p>Cras accumsan turpis nec iaculis dictum. Nunc leo dui, ultrices ac risus et, luctus ultrices leo. Phasellus diam leo, sagittis in nibh egestas, tincidunt blandit dolor. Proin sodales ultrices mauris, ut varius turpis molestie quis. Maecenas mollis congue justo, ac venenatis est. Pellentesque vitae lectus vel mauris blandit dignissim quis at metus.</p>
				<br>
				<h4>Biaya</h4>
				<p>Rp. 10.000</p>
				<br>
				<h4>Waktu Pengerjaan</h4>
				<p>2 Jam</p>
			</div>
			
		</div>
	</div><!-- end main content-->

	<!-- side bar -->
	<div class="col-xs-3">
		<ul class="nav" id="layananList">
		  <li><a href="#">Syarat</a></li>
		  <li><a href="#">Deskripsi</a></li>
		  <li><a href="#">Biaya</a></li>
		  <li><a href="#">Waktu pengerjaan</a></li>
		  <li><a href="#">Komentar</a></li>
		</ul>
	</div><!-- end side bar-->

	<!-- comment area -->
	<div class="col-xs-9" id="layananComment">
		<div class="bs-example">
	    <div class="media">
	      <a class="pull-left" href="#">
	        <img class="media-object" src="assets/main/akun.png" style="width: 64px; height: 64px;">
	      </a>
	      <div class="media-body">
	        <h4 class="media-heading">Pengunjung</h4>
	        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	      </div>
	    </div>
	    <div class="media">
	      <a class="pull-left" href="#">
	        <img class="media-object" src="assets/main/akun.png" style="width: 64px; height: 64px;">
	      </a>
	      <div class="media-body">
	        <h4 class="media-heading">Pengunjung</h4>
	        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	        <div class="media">
	          <a class="pull-left" href="#">
	            <img class="media-object" src="assets/main/akun.png" style="width: 64px; height: 64px;">
	          </a>
	          <div class="media-body">
	            <h4 class="media-heading">Pengelola Layanan</h4>
	            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	          </div>
	        </div>
	      </div>
	    </div>

	    <form role="form" id="layananMasukan">
	    	<div class="form-group">
		    	<label>Komentar Anda</label>
		    	<textarea class="form-control" rows="3"></textarea>
		    </div>
	    </form>
	  </div><!-- end bx-example-->
	</div><!--end comment-->
</div><!-- end row container -->

<script type="text/javascript">
	$('#layananList').affix({
		offset: { top: 210, bottom: 150 }
	});
</script>