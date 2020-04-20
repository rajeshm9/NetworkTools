<?php
require_once ('header.php');
require_once ('ss7_func.php');


if (isset ($_REQUEST['id']))
{
    if (validateId($_REQUEST['id']) )
    {
	$outData =getData ("select * from blog where id = '".$_REQUEST['id']."' limit 1");
	$content = $outData[0]['blog_content'];
	$header  = $outData[0]['blog_text'];
    }
}


?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h6 class="demo-panel-title"><?php echo $header ?></h6>
  
		 <?php echo $content ?>
		 
	</div>	
	<?php include ('blog.php'); ?>
    </div>


     

    </div> <!-- /container -->

     <?php footer (); ?>
  </body>
</html>
