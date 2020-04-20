<?php
require_once ('header.php');

require_once ('ss7_func.php');

if (isset($_POST['data']))
{
  $pkt = $_POST['data'];
}
else
{
  $pkt ='c3b586a0010981030f1b0c1292001104881008010017070c129200110488100801005008be6281bb4804041a59786b1a2818060700118605010101a00d600ba1090607040000010032016c8196a1819302010102010030818a80015b8209849088107801450002830984138810780145000485010a8a09841388100801001000bb0580038090a39c010c9f320874001227406659f8bf33028000bf342202011780081000000000000000810891881008010050f8a309800774f0200036070dbf35038301119f360532635200009f370891881008010050f89f39080261116151254542';
}
?>

  
    <div class="container">
     

    
      <h3 class="demo-panel-title"></h3>

      <form method="post" action="">	
      <div class="row demo-row">
       <div class="form-group">
	      
              <textarea rows="4" class="form-control" name="data" placeholder="Enter Packet Hexdump"><?php echo $pkt ?></textarea>
              <label for="radio4a" class="radio" >
                <input type="radio" checked="" name="pktype" required="" id="radio4a" value="1" data-toggle="radio" name="optionsRadios" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                 MTP3 Packet&nbsp;&nbsp;
                 <span class="text-info">Packet Starting From Service Indicator [3 SCCP,5 ISUP]</span>
                </div>
              </label>
              
           
              
              <label for="radio4b" class="radio">
                <input type="radio" required=""  name="pktype" id="radio4b" value="2" data-toggle="radio" name="optionsRadios" class="custom-radio"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                SCCP Packets&nbsp;&nbsp;
                <span class="text-info">Packet From Dialogic SCCP Layer Src,Dst 0x33</span>
                
              </label>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </div>
      </div> <!-- /row -->
      </form>
    <div class="row demo-row">
      
	  <?php
	  	    
	    switch ($_POST['pktype'])
	    {
		case MTP:
		
			file_put_contents(OUT_FILE,str2hextext($_POST['data']));
			system(DECODE_FILE);
	//		echo nl2br(file_get_contents($decode_file));
			$data=file(DECODE_FILE);
	//		print_r($data);
			for($i=0 ; $i<count($data);$i++)
			{
			      if ($i % 2 == 0 ) $t="row-even";
			      else		    $t="row-odd";
			      echo '<div class="row row-buffer '.$t.'" style="padding-bottom:1px;font-size:14px;margin-left:72px;">
				  <div class="col-xs-8">';
				echo $data[$i].'</div></div>';
			}
	    }
	  
	  ?>
	  
	  
	  
	  
	 
    </div>



        <div class="col-xs-8">
         <!-- <video class="video-js" preload="auto" poster="docs/assets/img/video/poster.jpg" data-setup="{}">
            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4" type="video/mp4">
            <source src="http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm" type="video/webm">
          </video>-->
        </div> <!-- /video -->
      </div>


        <div class="col-xs-9">
        
        </div>

        <div class="col-xs-3">
         
        </div>
      </div> <!-- /download area -->

    </div> <!-- /container -->

    <footer>
     
    </footer>

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>
