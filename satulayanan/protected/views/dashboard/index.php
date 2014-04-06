<div>
	<!--sidebar-->
	<div class="col-xs-2" id="sidebar">
		<ul class="nav nav-pills nav-stacked">
	      <li class="active btnMenu"><a href="#">Overview</a></li>
	      <li class="btnMenu" id="akun"><a href="javascript:void(0)">Akun dan aktivitas</a></li>
	      <li class="btnMenu"><a href="javascript:void(0)">Statistik</a></li>
	      <li class="btnMenu" id="layPil"><a href="javascript:void(0)">Layanan pilihan</a></li>
	      <li class="btnMenu"><a href="javascript:void(0)">Kategori</a></li>
	      <li class="btnMenu"><a href="javascript:void(0)">Penyelenggara</a></li>
	      <li class="btnMenu"><a href="javascript:void(0)">Layanan</a></li>
	      <li class="btnMenu" id="layDa"><a href="javascript:void(0)">Layanan Daerah</a></li>
	      <li class="btnMenu" id="profil"><a href="javascript:void(0)">Profil akun</a></li>
	      <li class="btnMenu" id="form"><a href="javascript:void(0)">Pendaftaran dan usulan</a></li>
	    </ul>
	</div><!--end sidebar-->

	<!--akun dan aktivitas-->
	<div class="col-xs-8 col-xs-offset-2 konten" id="akunDiv">
		<h1 class="page-header">Akun dan aktivitas</h1>
		<button class="btn btn-primary">Tambah akun</button>
		<table class="table table-hover" style="margin-top:15px;">
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Jenis Akun</th>
				<th>Aktivitas terakhir</th>
				<th>Hapus</th>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="#">admin</a></td>
				<td>admin</td>
				<td>update layanan</td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="#">zawwaf</a></td>
				<td>admin</td>
				<td>hapus layanan</td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
			<tr>
				<td>3</td>
				<td><a href="#">kemendag</a></td>
				<td>pengelola</td>
				<td>tambah layanan</td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
		</table>
	</div><!--end main-->
	<!-- update detail akun -->
	<div class="col-xs-8 col-xs-offset-2 konten" id="detAkunDiv">
		<h1 class="page-header">Detail akun</h1>
		<form role="form">
			<div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" class="form-control" value="zawwaf">
		  </div>
			<div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input type="text" class="form-control" value="Fawwaz Afifanto">
		  </div>
			<div class="form-group">
		    <label for="exampleInputEmail1">Jenis Akun</label>
		    <select class="form-control">
		    	<option>Admin</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">fawwazafifanto@gmail.com</label>
		    <input type="email" class="form-control" value="lorem">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Password</label>
		    <input type="password" class="form-control" value="kumistebal">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Telepon</label>
		    <input type="text" class="form-control" value="087884688463">
		  </div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div><!--end main-->

	<!--layanan pilihan-->
	<div class="col-xs-8 col-xs-offset-2 konten" id="layPilDiv">
		<h1 class="page-header">Layanan Pilihan</h1>
		<table class="table table-hover" style="margin-top:15px;">
			<tr>
				<th>No</th>
				<th>Layanan</th>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="#">Pembuatan KTP</a></td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="#">Pembuatan SIM</a></td>
			</tr>
			<tr>
				<td>3</td>
				<td><a href="#">Pembuatan KK</a></td>
			</tr>
		</table>
	</div><!--end main-->
	<!-- update detail layanan pilihan -->
	<div class="col-xs-8 col-xs-offset-2 konten" id="detLayPilDiv">
		<h1 class="page-header">Detail Layanan Pilihan</h1>
		<form role="form">
			<div class="form-group">
		    <label for="exampleInputEmail1">Layanan</label>
		    <select class="form-control">
		    	<option>Pembuatan KTP</option>
		    </select>
		  </div>
			<div class="form-group">
			    <label for="exampleInputFile">Gambar</label>
			    <input type="file" id="exampleInputFile">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div><!--end main-->

	<!--layanan daerah-->
	<div class="col-xs-8 col-xs-offset-2 konten" id="layDaDiv">
		<h1 class="page-header">Layanan Daerah</h1>
		<button class="btn btn-primary">Tambah layanan daerah</button>
		<table class="table table-hover" style="margin-top:15px;">
			<tr>
				<th>No</th>
				<th>Layanan</th>
				<th>Hapus</th>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="#">Pembuatan KTP</a></td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="#">Pembuatan SIM</a></td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
			<tr>
				<td>3</td>
				<td><a href="#">Pembuatan KK</a></td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
			<tr>
				<td>4</td>
				<td><a href="#">Pembuatan IMB</a></td>
				<td><button class="btn btn-danger">Hapus</button></td>
			</tr>
		</table>
	</div><!--end main-->
	<!-- update detail layanan daerah -->
	<div class="col-xs-8 col-xs-offset-2 konten" id="detLayDaDiv">
		<h1 class="page-header">Detail Layanan Pilihan</h1>
		<form role="form">
			<div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input type="text" class="form-control" value="Pembuatan SIM">
		  </div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div><!--end main-->

	<!--form-->
	<div class="col-xs-8 col-xs-offset-2 konten" id="formDiv">
		<h1 class="page-header">Pendaftaran dan Usulan</h1>
		<table class="table table-hover" style="margin-top:15px;">
			<tr>
				<th>No</th>
				<th>IDForm</th>
				<th>Jenis Form</th>
				<th>Nama</th>
				<th>Waktu</th>
				<th>Ceklis</th>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="#">F101</a></td>
				<td>pendaftaran</td>
				<td>FD2 Community</td>
				<td>01-01-14 10:12</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td>2</td>
				<td><a href="#">F103</a></td>
				<td>usulan</td>
				<td>Satrio Gumilar</td>
				<td>06-01-14 15:25</td>
				<td><input type="checkbox"></td>
			</tr>
			<tr>
				<td>3</td>
				<td><a href="#">F104</a></td>
				<td>usulan</td>
				<td>Aldi Reinaldi</td>
				<td>19-01-14 01:53</td>
				<td><input type="checkbox"></td>
			</tr>
		</table>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div><!--end main-->
	<!-- update detail form -->
	<div class="col-xs-8 col-xs-offset-2 konten" id="detFormDiv">
		<h1 class="page-header">Detail Pendaftaran</h1>
		<h4>Nama</h4>
		<p>FD2 Community</p>
		<h4>Email</h4>
		<p>fd2c@gmail.com</p>
		<h4>Profil Pengelola Layanan</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum lacus non dapibus pharetra. Quisque sodales mauris vitae augue eleifend, vel malesuada diam sodales.</p>
		<h4>Deskripsi Layanan</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum lacus non dapibus pharetra. Quisque sodales mauris vitae augue eleifend, vel malesuada diam sodales.</p>
		<button class="btn btn-default">Kembali</button>
	</div><!--end main-->

	<!-- update modul layanan -->
	<div class="col-xs-8 col-xs-offset-2 konten">
		<h1 class="page-header">Akun</h1>
		<button class="btn btn-default pull-left">Ubah akun</button>
		<button class="btn btn-success" style="margin-left:15px;">Lihat laman</button>
		<form role="form">
			<div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" value="lorem">
		  </div>
			<div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" value="lorem">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Password</label>
		    <input type="password" class="form-control" id="exampleInputEmail1" value="lorem">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" value="lorem">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Telepon</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" value="lorem">
		  </div>
			<button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
	</div><!--end main-->

	<!-- profil -->
	<div class="col-xs-8 col-xs-offset-2 konten" id="profilDiv">
		<h1 class="page-header">Profil</h1>
		<button class="btn btn-default pull-left">Ubah profil</button>
		<button class="btn btn-success" style="margin-left:15px;">Lihat laman</button>
		<form style="margin-top:15px;">
			<div class="form-group">
			    <label for="exampleInputFile">Gambar/Logo</label>
			    <input type="file" id="exampleInputFile">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" rows="3" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				</textarea>
			</div>
  			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" rows="5" disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div><!--end main-->
</div><!-- end container -->

<script type="text/javascript">
	$(document).ready(function(){
		//active color button
		$('ul.nav.nav-pills li a').click(function() {           
	    $(this).parent().addClass('active').siblings().removeClass('active');      
		});

		//activating dashboard
		$('.btnMenu').click(function(){
			$('.konten').css('display','none');
			$('#'+this.id+'Div').fadeIn();
		});	
	});	
		
</script>