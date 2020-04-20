<?php
require_once ('header.php');
require_once ('ss7_func.php');



?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h3 class="demo-panel-title"></h3>

		  <form method="post" action="">
		  <div class="row demo-row">
		    <div class="form-group">
			  
			  <div class="col-xs-5">
			      <div class="form-group">
				<input type="text"  name="hostname" value="" required placeholder="IP address or Host name" class="form-control" />
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
		    
			
require_once "Net/Whois.php";

$server = "whois.networksolutions.com";
$query  = "spicegsp.com";     // get information about
        
		     $whois = new Net_Whois;
$data = $whois->query($query, $server);
echo nl2br($data);
		    
	?>	    
		</div>
	</div>	
	<?php include ('blog.php'); ?>
    </div>


     

    </div> <!-- /container -->

     <?php footer (); ?>
  </body>
</html>
