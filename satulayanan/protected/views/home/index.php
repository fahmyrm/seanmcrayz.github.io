    <?php
      $baseUrl = Yii::app()->baseUrl;
      $cs = Yii::app()->getClientScript();
      $cs->registerCssFile($baseUrl.'/css/home.css');
    ?>

    <!-- konten -->
      <div class="row" id="mainDiv">

        <div class="row">
          <!-- kolom 1 -->
          <!-- JANGAN LUPA SAMAIN HREF -->
          <div class="col-xs-9">
            <h2>Top Layanan</h2>
            <div class="row">

              <div class="col-xs-4">
                <div class="thumbnail topItem">
                  <a href="#"><img src="<?=$baseUrl?>/images/main/akun.png" width="300" height="200"></a>
                  <div class="caption">
                    <a href="#"><h4>Thumbnail label</h4></a>
                    <p>sath sath sath sath sath sath sath sath sath sath sath sath </p>
                    </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="thumbnail topItem">
                  <a href="#"><img src="<?=$baseUrl?>/images/main/akun.png" width="300" height="200"></a>
                  <div class="caption">
                    <a href="#"><h4>Thumbnail label</h4></a>
                    <p>sath sath sath sath sath sath sath sath sath sath sath sath </p>
                    </div>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="thumbnail topItem">
                  <a href="#"><img src="<?=$baseUrl?>/images/main/akun.png" width="300" height="200"></a>
                  <div class="caption">
                    <a href="#"><h4>Thumbnail label</h4></a>
                    <p>sath sath sath sath sath sath sath sath sathdwdfe ddwdwdwdw dwdw</p>
                    </div>
                </div>
              </div>

            </div><!-- end row top layanan -->
          </div><!-- end col-xs top layanan-->

          <!-- kolom 2 -->
          <div class="col-xs-3">
            <h2>Layanan Terkini</h2>
            <div class="media">
              <div class="pull-left">
                <a href="#"><img class="media-object" src="<?=$baseUrl?>/images/main/akun.png" height="48" width="48" alt="..."></a>
              </div>
              <div class="media-body">
                <a href=""><h4 class="media-heading">Media heading</h4></a>
                sath sath sath
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <a href="#"><img class="media-object" src="<?=$baseUrl?>/images/main/akun.png" height="48" width="48" alt="..."></a>
              </div>
              <div class="media-body">
                <a href=""><h4 class="media-heading">Media heading</h4></a>
                sath sath sath
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <a href="#"><img class="media-object" src="<?=$baseUrl?>/images/main/akun.png" height="48" width="48" alt="..."></a>
              </div>
              <div class="media-body">
                <a href=""><h4 class="media-heading">Media heading</h4></a>
                sath sath sath
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <a href="#"><img class="media-object" src="<?=$baseUrl?>/images/main/akun.png" height="48" width="48" alt="..."></a>
              </div>
              <div class="media-body">
                <a href=""><h4 class="media-heading">Media heading</h4></a>
                sath sath sath
              </div>
            </div>
            <div class="media">
              <div class="pull-left">
                <a href="#"><img class="media-object" src="<?=$baseUrl?>/images/main/akun.png" height="48" width="48" alt="..."></a>
              </div>
              <div class="media-body">
                <a href=""><h4 class="media-heading">Media heading</h4></a>
                sath sath sath
              </div>
            </div>
          </div>
        </div><!-- end top row -->

          
        <div class="row" style="margin-top:15px;">
          <!--form 1-->
          <div class="col-xs-6">
            <h4>Tidak menemukan layanan yang anda cari?</h4>
            <p>Usulkan kepada kami tentang layanan yang sedang anda cari</p>
            
            <!-- modal -->
            <p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalForm1">
                Klik Disini 
              </button>
            </p>
            <div class="modal fade" id="modalForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Form usulan modul layanan</h4>
                  </div>

                  <!--form-->
                  <form class="form-horizontal" role="form">
                    <div class="modal-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Usulan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Usulan">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Deskirpsi Usulan"></textarea>
                          </div>
                        </div>
                    </div><!-- tutup body -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> <!-- tutup modal -->
          </div><!-- end form 1 -->

          <!--form 2-->
          <div class="col-xs-6">
            <h4>Ingin menjadi pengelola layanan publik?</h4>
            <p>Daftarkan komunitas anda kepada kami untuk membantu masyarakat Indonesia dalam memberi informasi pelayanan publik</p>
            
            <!-- modal -->
            <p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalForm2">
                Klik Disini 
              </button>
            </p>
            <div class="modal fade" id="modalForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Form pendaftaran pengelola</h4>
                  </div>

                    <!--form-->
                    <form class="form-horizontal" role="form">
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Nama">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Profil</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Profil"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Deskripsi</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Deskirpsi Usulan"></textarea>
                          </div>
                        </div>
                      </div><!-- tutup body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Kirim</button>
                      </div>
                    </form>

                  
                </div>
              </div>
            </div> <!-- tutup modal -->

          </div><!-- end form 2 -->
        </div><!-- end row form -->

      </div> <!-- end home content -->