<?php

define ('MTP', 1);
define ('SCCP',2); 
define ('OUT_FILE', '/tmp/out.txt');
define ('DECODE_FILE', '/tmp/decode.txt');
define ('DECODE_BIN', './test');




function _7to8($str)
{
	$cmd="./7to8 '$str'";
	echo '<tr><td>'.strlen($str).'</td></tr>';
	//echo '<tr><td>'.$cmd.'</td></tr>';
	$read=shell_exec($cmd);
	echo '<tr><td>'.$read.'</td></tr>';
	echo '<tr><td>'.strlen($read).'</td></tr>';
	
	
}

function _8to7($str)
{
	$cmd="./8to7 '$str'";
	//echo '<tr><td>'.$cmd.'</td></tr>';
	echo '<tr><td>'.strlen($str).'</td></tr>';
	$read=shell_exec($cmd);
	echo '<tr><td>'.$read.'</td></tr>';
	echo '<tr><td>'.strlen($read).'</td></tr>';
}


function make_sccp2mtp_packet($str)
{	
	//8356c3da100901
	$mtp[0]=0x83;
	$mtp[1]=0x56;
	$mtp[2]=0xc3;
	$mtp[3]=0xda;
	$mtp[4]=0x10;
	$mtp[5]=0x09;   //SCCP Message Type  
	$mtp[6]=0x01;   //Protocol Class,Message Handling 
	$mtp[7]=0x03;	//pointer to called party
	$mtp[8]=0x00;	//Pointer to calling party
	$mtp[9]=0x00;   //Pointer to tcap data
	$j=10;

	global $length;
	$string=hex_str($str);
	
	for($i=1;$i<$length;$i++)
	{
		switch($string[$i])
		{

			case 0x05:	//Called Party
//				echo "<br>CALLED PARTY ".$string[$i+1];
				$mtp[8]=$string[$i+1]+3;
				for($k=0;$k<$string[$i+1]+1;$k++)
				{
					$mtp[$j++]=$string[$k+$i+1];
				}				
				$i+=$string[$i+1]+1;
				break;
			case 0x04:	//Calling Party
//				echo "<br>CALLING PARTY ".$string[$i+1];
				$mtp[9]=$string[$i+1]+$mtp[8];
				for($k=0;$k<$string[$i+1]+1;$k++)
				{
					$mtp[$j++]=$string[$k+$i+1];
				}	
				$i+=$string[$i+1]+1;
				break;
			case 0x06:	//Data 
//				echo "<br>TCAP DATA ".$string[$i+1];
				for($k=0;$k<$string[$i+1]+1;$k++)
				{
					$mtp[$j++]=$string[$k+$i+1];
				}	
				$i+=$string[$i+1]+1;
		}
	}
	//echo implode("",$mtp);
	//return $mtp;
	//array_walk($mtp, 'test_print');
	return hex2str($mtp);
}



?>
