<?php
require_once ('header.php');
require_once ('ss7_func.php');

?>

  
    <div class="container">
       <div class="row">
	  <div class="col-sm-9">
	    
		  <h6 class="demo-panel-title"><?php echo $headerInfo ?></h6>

		  <form method="post" action="">
		  <div class="row demo-row">
		    <div class="form-group">
			  
			  <div class="col-xs-10">
			      <div class="form-group">
				<textarea class="form-control" name="data"></textarea>
			      </div>
			  </div>
			  
			  <div class="col-xs-5">
			     <label class="radio">
            <input type="radio" data-toggle="radio" value="1" name="type" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
           Encoding
          </label>
          
		       <label class="radio">
            <input type="radio" data-toggle="radio" value="2"  name="type" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
            Decoding
          </label>
			  </div>
			  <div class="col-xs-3">
			      <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Submit</button>
			  </div>
		    </div>
		  </div> <!-- /row -->
		  </form>
		<div class="row demo-row">
		  
		      <?php
		    
			if (isset ($_REQUEST['data']) && isset ($_REQUEST['submit']))
			{
			
			    
			
				      
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
