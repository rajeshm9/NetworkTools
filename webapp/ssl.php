<?php

require_once ('header.php');
require_once ('ss7_func.php');

?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h6 class="demo-panel-title">SSL Information</h6>

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
			    $url = "http://".$_REQUEST['hostname'];
			    
			    $orignal_parse = parse_url($url, PHP_URL_HOST);
			    $get = stream_context_create(array("ssl" => array("capture_peer_cert" => TRUE)));
			    $read = stream_socket_client("ssl://".$orignal_parse.":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $get);
			    $cert = stream_context_get_params($read);
			    $certinfo = openssl_x509_parse($cert['options']['ssl']['peer_certificate']);
			    $i = 0;
			     //print_r ($certinfo);
			      $str = '<table class="table table-bordered">
			      <tr>
			      <td colspan="2"><b>Name</b></td>
			      <td >'.$certinfo['name'].'</td>
			      </tr>
			       <tr>
			      <td colspan="2"><b>Issuer</b></td>
			      <td >'.implode(" , ", $certinfo['issuer']).'</td>
			      </tr>
			      
			       <tr>
			      <td colspan="2"><b>Subject</b></td>
			      <td >'.implode(" , ", $certinfo['subject']).'</td>
			      </tr>
			     
			       <tr>
			      <td colspan="2"><b>Validity</b></td>
			      <td >'.date('jS \of F Y h:i:s A', $certinfo['validFrom_time_t']) .' <b>To</b> '.date('jS \of F Y h:i:s A',$certinfo['validTo_time_t']).'</td>
			      </tr>
			      
			      
			      
			      
			      </table>';
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
