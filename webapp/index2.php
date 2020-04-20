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

*/
require_once ('header.php');

$outData = getData ("select * from menu order by hits");



?>
  
    <div class="container">
     
    
      <h3 class="demo-panel-title"></h3>

      <div class="row">
        <div class="col-xs-3">
	       <a href="ss7.php" class="btn btn-block btn-lg btn-warning"><i class="fa  fa-angle-double-down fa-5x"></i>&nbsp;
	       SS7 Decoder</a>
        </div>
        <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-plug fa-5x"></i>&nbsp;Ping/TraceRoute</a>
        </div>
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Port Check</a>
        </div>
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Coming Soon</a>
        </div>
      </div> <!-- /row -->
      <br>

      <div class="row">
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Coming Soon</a>
        </div>
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Coming Soon</a>
        </div>
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Coming Soon</a>
        </div>
         <div class="col-xs-3">
          <a href="#fakelink" class="btn btn-block btn-lg btn-warning"><i class="fa fa-pied-piper-alt fa-5x"></i>&nbsp;Coming Soon</a>
        </div>
      </div> <!-- /row -->

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
