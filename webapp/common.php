<?php
require_once('config.php');

function connectDB ()
{
	
        $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
        if (!$link)
        {
	
                 die('Could not connect: ' . mysql_error());
        }
        mysql_select_db(DB_NAME, $link);
        return $link;
}

function exeQuery ($query, $f = true)
{
        $link = connectDB ();
        $result = mysql_query ($query);
        //echo $query;
        if ($result)
        {
                if ($f) // insert return last insert id
                    return mysql_insert_id();
                return true;
        }
        else
        {
                printf ("MYSQL_ERR:" .mysql_error ());
                return false;
        }
}

function getData ($query)
{
        global $menuData;
        
        return $menuData;
        
        /*$link = connectDB ();
        $result = mysql_query($query);
        if ($result)
        {
                $rows = mysql_num_rows ( $result );
                if ($rows > 0 )
                {
                        while ($row = mysql_fetch_array ($result, MYSQL_ASSOC))
                        {
                                $data [] =$row;
                        }
			mysql_free_result($result);
                        return $data;
                }
                else
                        return NULL;
        }
        else
        {
		printf ("MYSQL_ERR:" .mysql_error ());
                return NULL;
        }
        */
}

function wrapText($text)
{
  $t =  wordwrap($text, 5, " ", true);
  
  return $t;
}


function hexbin($hex) {
    $bin = decbin(hexdec($hex));
    return $bin;
}

function binhex($bin) {
    $hex = dechex(bindec($bin));
    return $hex;
} 

function hex_str($hex){
	global $length;
	//$string[]='';
	//echo strlen($hex);

    for ($i=0; $i < strlen($hex)-1; $i+=2){
        $string[]=hexdec($hex[$i].$hex[$i+1]);
	$length++;
    }
    return $string;
}

function hex2str($hex)
{
	for($i=0;$i<count($hex);$i++)
	{
		$string.=sprintf("%02x",$hex[$i]);
	}	
	return $string;
}
function break_str($str,$num)
{

	$retStr='';
	for($i=0;$i<strlen($str);$i++)
	{
		if((($i%$num)==0) && $i>0)
			$retStr.="<br>";
		$retStr.=$str[$i];
	}
	return $retStr;
}
function str2hextext($str)
{
//	echo $str."\n";
	$retStr='0000  ';
	for($i=0;$i<strlen($str);$i++)
	{
		if($i%32==0 && $i>0)
		{
			if($i>32)
				$j=$j+16;
			else
				$j=16;
			$retStr.=sprintf("\n%04x ",$j);
		}
		if($i%2==0 && $i>0)
			$retStr.=' ';
		
		$retStr.=$str[$i];
	}
	return $retStr."\n";
}

function validateId ($id )
{
  if (!filter_var($id, FILTER_VALIDATE_INT) === false) 
      return $id;
  else
      return false;
}

function commonOutput ($str, $oe)
{
			    				
	return '<div class="row row-buffer '.$oe.'" style="padding-bottom:1px;font-size:14px;margin-left:0px;">
		<div class="col-xs-8">'.$str.'</div></div>';			
}

function runProcess ($cmd )
{
      ob_implicit_flush(true);ob_end_flush();
	
      $descriptorspec = array(
	0 => array("pipe", "r"),   // stdin is a pipe that the child will read from
	1 => array("pipe", "w"),   // stdout is a pipe that the child will write to
	2 => array("pipe", "w")    // stderr is a pipe that the child will write to
      );
      flush();
      $cmd = escapeshellcmd($cmd);
      //echo $cmd;
      $process = proc_open($cmd, $descriptorspec, $pipes, realpath('./'), array());
      $i = 0;
      if (is_resource($process)) {
	  while ($s = fgets($pipes[1])) {
				      
	      if ($i % 2 == 0 ) $t="row-even";
		else		    $t="row-odd";
	      echo   commonOutput ($s, $t);
	      
	      flush();
	      $i++;
	  }
      }
}      

function footer ()
{
     echo  '<footer>
     
    </footer>

    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>';
}

function validateHost ($ipAddr)
{
    $ValidIpAddressRegex = "^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$";
    $ValidHostnameRegex = "^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])$";

    if (preg_match('/'.$ValidIpAddressRegex.'/', $ipAddr))
    {
        return true;
    }
    if (preg_match('/'.$ValidHostnameRegex.'/', $ipAddr))
    {
        return true;
    }
    return false;
    
}

?>
