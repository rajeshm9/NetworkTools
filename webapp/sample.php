<?php
require_once ('common.php');
require_once ('header.php');

$data = getData("select * from  sample_packets");

?>

  
    <div class="container">
     
	<div class="row">
	  <div class="col-sm-9">
    
	<h3 class="demo-panel-title"></h3>

	<?php
	$i = 0;
	foreach ($data as $v )
	{
	  if ($i++ % 2 == 0 ) $t="row-even";
	  else		    $t="row-odd";
	  echo '<div class="row row-buffer '.$t.'" style="padding-bottom:1px">
	<div class="col-xs-2">'.$v['short_desc'].'</div><div class="col-xs-8">'.wrapText($v['hexdump']).'</div>
        <div class="col-xs-2"><a href="ss7.php?sample='.$v['id'].'&pktype='.$v['pktype'].'" class="btn  btn-block btn-primary"><i class="fa  fa-angle-double-down fa-1x"></i>&nbsp;Decode</a></div>
       </div>';
	  
	}
	

       ?>
       
         
        </div>
        <?php include ('blog.php'); ?>
        </div>
        
           
     

    </div> <!-- /container -->

    <?php footer (); ?>
  </body>
</html>
