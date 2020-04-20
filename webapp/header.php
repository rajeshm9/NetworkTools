<?php


require_once ('common.php');

function active_link ($cur_link)
{
   $cur_page = basename($_SERVER['PHP_SELF'],".php");
   if ($cur_page == $cur_link) return 'class="active"';
   else return '';
}

$outData = getData ("select * from menu order by hits desc");
$pageName  =  basename($_SERVER['PHP_SELF']);

foreach ($outData as $v)
{
  if ($v['link'] == $pageName)
  {
      $headerInfo = $v['textname'];
  }
}
//exeQuery("update menu set hits=hits+1 where link ='".basename($_SERVER['PHP_SELF'])."'");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content=""/>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <!--<link href="docs/assets/css/demo.css" rel="stylesheet">-->

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <style>
      body {
        
        padding-top: 70px;
      }
    </style>
  
    <div role="navigation" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a href="index.php" class="navbar-brand">Network Tools</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo active_link('index'); ?> ><a href="index.php"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a></li>
           
            <li class="dropdown" <?php echo active_link('tools'); ?> >
              <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-wrench fa-spin"></i>&nbsp;Tools <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php
		  $str = '';
		  foreach ($outData as $data)
		  {
		      $str .= '<li><a href="'.$data['link'].'">'.$data['textname'].'</a></li>';
		  }
                
		  echo  $str;
                ?>
              </ul>
            </li>
            <li <?php echo active_link('sample'); ?> ><a href="sample.php"><i class="fa fa-tty"></i>&nbsp;
Sample Packets</a></li>
            <li <?php echo active_link('docs'); ?> ><a href="docs.php"><i class="fa fa-book"></i>&nbsp;Docs</a></li>
            <li <?php echo active_link('contact'); ?> ><a href="contact.php"><i class="fa fa-cab"></i>&nbsp;Contact</a></li>
            <li><a href="#">Your IP: <i class="fa fa-bookmark"></i>&nbsp;<?php echo $_SERVER['REMOTE_ADDR'] ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-facebook-square"></i>&nbsp;Like Us</a></li>
             
          </ul>
        </div>
      </div>
    </div>
    
    
    
<?php


?>
