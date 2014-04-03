<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Satu Layanan</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php  
      $baseUrl = Yii::app()->baseUrl; 
      $cs = Yii::app()->getClientScript();
      $cs->registerCssFile($baseUrl.'/css/bootstrap.css');
      $cs->registerCssFile($baseUrl.'/css/main.css');
      $cs->registerScriptFile($baseUrl.'/js/bootstrap.js');
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row navbar" id="topBar">
      <div class="container">
        <div class="row navbar-default">
          <!--logo-->
          <div class="col-xs-3" style="position:absolute;">
            <a href="#"><img src="<?=$baseUrl?>/images/main/logo.png" style="max-width:100%;"></a>
          </div>

          <!--nav-->
          <div class="col-xs-9 col-xs-offset-3">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Penyelenggara</a></li>
              <li id="headKategoriBtn"><a href="#">Kategori<b class="caret"></b></a></li>
              <li><a href="#" data-toggle="modal" data-target="#modalLogin">Log In</a></li>
            </ul>
          </div>

          <!-- Bar Kategori -->
          <div id="headKategoriDiv" class="col-xs-9 pull-right">
            <!-- DATA KATEGORI UMUM -->
            <a href="#" class="headKategoriItem pull-right"><span class="label label-default">Transportasi</span></a>
            <a href="#" class="headKategoriItem pull-right"><span class="label label-default">Wisata</span></a>
            <a href="#" class="headKategoriItem pull-right"><span class="label label-default">Usaha</span></a>
            <a href="#" class="headKategoriItem pull-right"><span class="label label-default">Jaminan Sosial</span></a>
            <a href="#" class="headKategoriItem pull-right"><span class="label label-default">Hukum</span></a>
          </div>
        </div>
      </div><!--end container nav-->
    </div><!-- end topbar -->
    
    <!-- modal login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel" data-toggle="modal" data-target="#">Log In</h4>
          </div>

          <!--form-->
          <form class="form-horizontal" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div>
            </div><!-- tutup body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div> <!-- tutup modal -->

    <!-- main container -->
    <div class="container">

      <!-- kotak search -->
      <div class="row" id="searchRow">
        <div class="col-xs-5" id="searchBox">
          <form class="form-horizontal" role="form" action="#" method="post">
            <div class="right-inner-addon ">
              <span class="glyphicon glyphicon-search" id="searchIcon"></span>
              <input type="text" class="form-control" placeholder="cari layanan ...">
            </div>
          </form>
        </div>
      </div>
    


<?php echo $content; ?>



<!--footer-->

    </div><!-- end of container -->
    <div class="row" id="footer">
      <div class="container">
        <div class="col-xs-4">
          <a href="http://www.opengovindonesia.org/"><img src="<?=$baseUrl?>/images/main/footer-ogi.png" style="max-width:100%;"></a>
        </div>
        <div class="col-xs-6 col-xs-offset-2 text-right">
          <address class="text-right">
            <a href="#"><abbr title="tentang Satu Layanan">Tentang SatuLayanan</abbr></a><br>
            <br>
            <strong>Open Government Indonesia</strong><br>
            <span class="glyphicon glyphicon-home"></span>  Jln Veteran III Nomor 2, Jakarta Pusat 10110<br>
            <span class="glyphicon glyphicon-earphone"></span>  (123) 456-7890
          </address>
        </div>
      </div>
    </div><!-- end of footer -->

    
  </body>
</html>  