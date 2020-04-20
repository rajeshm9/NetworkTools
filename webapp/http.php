<?php
require_once ('header.php');
require_once ('ss7_func.php');



?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h6 class="demo-panel-title">Http Header Information</h6>

		  <form method="post" action="">
		  <div class="row demo-row">
		    <div class="form-group">
			  
			  <div class="col-xs-5">
			      <div class="form-group">
				<input type="text"  name="hostname" value="" required placeholder="Enter Domain Name" class="form-control" />
			      </div>
			  </div>
			  <div class="col-xs-3">
			      <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Submit</button>
			  </div>
		    </div>
		  </div> <!-- /row -->
		  </form>
		<div class="row demo-row">
		      
		      <?php
			
			if (isset ($_REQUEST['hostname']) && isset ($_REQUEST['submit']))
			{
			    $i = 0;
			    $body = file_get_contents("http://".$_REQUEST['hostname']);
			    //print_r ($body);
			    //print_r ($http_response_header);
			    foreach ($http_response_header as $v)
			    {
			        if ($i % 2 == 0 ) $t="row-even";
				else		    $t="row-odd";
				if (preg_match('/Server/', $v))
				{
				    $v = "<b>$v</b>";
				}
				echo   commonOutput ($v, $t);
				$i++;
			    }
			    
			}  
			

  
		    
		      ?>	    
		</div>
	</div>	
	<?php include ('blog.php'); ?>
    </div>


     

    </div> <!-- /container -->

     <?php footer (); ?>
  </body>
</html>
