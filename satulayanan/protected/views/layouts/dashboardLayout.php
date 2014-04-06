<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Satu Layanan</title>

    <?php  
      $baseUrl = Yii::app()->baseUrl; 
      $cs = Yii::app()->getClientScript();
      $cs->registerCssFile($baseUrl.'/css/bootstrap.css');
      $cs->registerCssFile($baseUrl.'/css/dashboard.css');
      $cs->registerScriptFile("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js");
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
    <div class="navbar navbar-default" id="topBar">
      <div class="col-xs-12">
        <ul class="nav navbar-nav">
          <li><a class="navbar-brand" href="#">SatuLayanan</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right:0 !important;">
          <li><p class="navbar-text">Hi, <strong>Fawwaz Afifanto</strong></p></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </div>
    </div><!-- end topbar -->
    
    <?php echo $content; ?>
          
<!--footer-->
  </body>
</html>
          

      