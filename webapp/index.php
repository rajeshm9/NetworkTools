<?php

/*
textname, icon, link , hits
link, icon,hits, textname,

INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('SS7 MTP3/SCCP Decoder', 'fa-angle-double-down', 'ss7.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Port Check', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
INSERT INTO `itool`.`menu` (`textname`, `icon`, `link`, `hits`) VALUES ('Ping', 'fa-plug', 'ping.php', '0');
primary,default,success,warning,inverse,info
*/


require_once ('header.php');

$outData = getData ("select * from menu order by hits desc");

?>
  
    <div class="container">
     
     <div class="row">
	  <div class="col-sm-9">  
    
      <h6 class="demo-panel-title"></h6>
  
      <?php
      
      $str = '<div class="row" style="padding-bottom:10px">';
      for ($cnt = 1 ; $cnt <= count($outData) ; $cnt++ )
      {
        $color='success';
        if ($cnt % 2 == 0 ) $color ='warning'; 
        $str .= ' <div class="col-xs-3">
		  <a href="'.$outData[$cnt-1]['link'].'" class="btn btn-block btn-'.$color.'"><i class="fa  '.$outData[$cnt-1]['icon'].' fa-1x"></i>&nbsp;
		  '.$outData[$cnt-1]['textname'].'</a>
		    </div>';
          if ($cnt % 4 == 0  )   {      $str .='</div><div class="row">';   } 
         
          
      }
      
      echo $str.'</div>';
      
      ?>
      </div>
      
      <?php include ('blog.php'); ?>
      
      </div>
      
     

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
