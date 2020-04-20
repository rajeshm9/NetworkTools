<?php
require_once ('header.php');
require_once ('ss7_func.php');


if (isset ($_REQUEST['sample']))
{
    if (validateId($_REQUEST['sample']) && validateId($_REQUEST['pktype']))
    {
	$outData =getData ("select hexdump from sample_packets where id = '".$_REQUEST['sample']."' limit 1");
	$pkt = $outData[0]['hexdump'];
	
    }
}
else if (isset($_POST['data']))
{
  $pkt = $_POST['data'];
}
else
{
  $pkt ='c3b586a0010981030f1b0c1292001104881008010017070c129200110488100801005008be6281bb4804041a59786b1a2818060700118605010101a00d600ba1090607040000010032016c8196a1819302010102010030818a80015b8209849088107801450002830984138810780145000485010a8a09841388100801001000bb0580038090a39c010c9f320874001227406659f8bf33028000bf342202011780081000000000000000810891881008010050f8a309800774f0200036070dbf35038301119f360532635200009f370891881008010050f89f39080261116151254542';
}
?>

  
    <div class="container">
    
      <div class="row">
	  <div class="col-sm-9">
    
		<h6 class="demo-panel-title">SS7 MTP3 Packets Decoder</h6>

		  <div class="row demo-row">
		    <form method="post" action="">
		    <div class="form-group">
	      
		      <textarea rows="4" class="form-control" name="data" placeholder="Enter Packet Hexdump"><?php echo $pkt ?></textarea>
			<label for="radio4a" class="radio" >
			  <input type="radio" checked="" name="pktype" required="" id="radio4a" value="1" data-toggle="radio" name="optionsRadios" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
			  MTP3 Packet&nbsp;&nbsp;
			  <span class="text-info">Packet Starting From Service Indicator [3 SCCP,5 ISUP]</span>
			 
			</label>
			
		    
			
			<label for="radio4b" class="radio">
			  <input type="radio" required=""  name="pktype" id="radio4b" value="2" data-toggle="radio" name="optionsRadios" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
			  SCCP Packets&nbsp;&nbsp;
			  <span class="text-info">Packet From Dialogic SCCP Layer Src,Dst 0x33</span>
			  
			</label>
	      <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
	    </div> <!-- form -group -->
	    </form>
	  </div> <!-- /row -->
      
	  <div class="row demo-row">
	    
		<?php
			  
		  switch ($_REQUEST['pktype'])
		  {
		      case MTP:
		      
			      file_put_contents(OUT_FILE,str2hextext($_POST['data']));
			      //$out = system(DECODE_FILE);
			      exec (DECODE_BIN, $out);
			      //print_r ($out);
	      //		echo nl2br(file_get_contents($decode_file));
			      $data=file(DECODE_FILE);
	      //		print_r($data);
			      for($i=13 ; $i<count($data);$i++)
			      {
				    if ($i % 2 == 0 ) $t="row-even";
				    else		    $t="row-odd";
				    echo 			      commonOutput ($data[$i], $t);	
			      }
		  }
		
		?>
		
	  </div>
    </div> <!-- col-8 -->
      <?php include ('blog.php'); ?>
    </div> <!-- grid Row -->
   

	
    </div> <!-- /container -->

    <?php footer (); ?>
  </body>
</html>
