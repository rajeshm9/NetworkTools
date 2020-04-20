<?php
require_once ('header.php');
require_once ('ss7_func.php');



?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h6 class="demo-panel-title">DNS Records Information</h6>

		  <form method="post" action="">
		  <div class="row demo-row">
		    <div class="form-group">
			  
			  <div class="col-xs-5">
			      <div class="form-group">
				<input type="text"  name="hostname" value=""  required placeholder="Enter Domain Name" class="form-control" />
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
			
			    
			
			    $outData = dns_get_record($_REQUEST['hostname']);
			    
			    $str = '<table class="table table-bordered">
				    <thead>
				      <tr>
					<th>Host</th>
					<th>Class</th>
					<th>TTL</th>
					<th>Type</th>
					<th>IP</th>
					<th>Pri</th>
					<th>Target</th>
				      </tr>
				    </thead>
				    <tbody>';
				foreach ($outData as $v )
				{
				  $str .='<tr>
					  <td>'.$v['host'].'</td>
					  <td>'.$v['class'].'</td>
					  <td>'.$v['ttl'].'</td>
					  <td>'.$v['type'].'</td>
					  <td>'.$v['ip'].'</td>
					  <td>'.$v['pri'].'</td>
					  <td>'.$v['target'].'</td>
					  </tr>';
				}
			        $str .='</tbody></table>';
			        echo $str;
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
