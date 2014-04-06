<?php
  $baseUrl = Yii::app()->baseUrl;
  $cs = Yii::app()->getClientScript();
  $cs->registerCssFile($baseUrl.'/css/penyelenggara.css');
?>

<div class="row">
	<!--1st col-->
	<div class="col-xs-4">
		<div class="colTitle"><h3>Penyelenggara</h3></div>
		<div class="row menuKolom">
			<ul class="nav nav-pills nav-stacked">
				<?php
				foreach ($penyelenggara as $row) {
				?>
				<li><a id="<?=$row->Nama?>" href="javascript:void(0)" class="btnPylgr"><?=$row->Nama?></a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div><!-- end 1st col-->

	<!--2nd col-->
	<div class="col-xs-4 kolModul">
		<div class="colTitle"><h3>Modul Layanan</h3></div>
		<div class="row menuKolom">
			<ul class="nav nav-pills nav-stacked" id="ulModul">
				<!-- AJAX HERE -->
			</ul>
		</div>
	</div><!-- end 2nd col-->

	<!--3rd col-->
	<div class="col-xs-4 kolDaerah">
		<div class="colTitle"><h3>Daerah</h3></div>
		<div class="row menuKolom">
			<ul class="nav nav-pills nav-stacked">
				<li><a href="javascript:void(0)">Jakarta</a></li>
				<li><a href="javascript:void(0)">Depok</a></li>
				<li><a href="javascript:void(0)">Bandung</a></li>
				<li><a href="javascript:void(0)">Surabaya</a></li>
				<li><a href="javascript:void(0)">Solo</a></li>
			</ul>
		</div>
	</div><!-- end 3rd col-->
</div><!-- end row container -->

<script type="text/javascript">
	$(document).ready(function(){
		//active color button
		$('ul.nav.nav-pills li a').click(function() {           
	    $(this).parent().addClass('active').siblings().removeClass('active');      
		});	

		//2nd col animate
		$('.btnPylgr').click(function(){
			var idPenyelenggara = this.id;
			/*
			$.getJSON("index.php?r=main/ajaxCol2&key="+idPenyelenggara,function(result){
				$.each(result, function(i, row){
					$("#ulModul").html(row + " ");
				});
		    });
			*/

			$.ajax({
				type:"GET",
				contentType: "application/json",
				url:"index.php?r=main/ajaxCol2&key="+idPenyelenggara,
				success:function(result){
		      		$("#ulModul").html(result);
		      	}
		    });

			$('.kolDaerah').css('display','none');
			$('.kolModul').css('display','none');
			$('.kolModul').fadeIn();
		});

		//3rd col animate
		$('.btnModul').click(function(){
			$('.kolDaerah').css('display','none');
			$('.kolDaerah').fadeIn();
		});



	});
</script>

			
