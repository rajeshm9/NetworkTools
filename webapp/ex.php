
<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);
//var_dump($movies);

foreach ($movies->packet->proto as $proto)
{
  //echo "<br>Field Count ".count($proto)."<br>";
  echo "<b>".$proto['showname']."</b>";
  
  //if ($proto['name'] == 'mtp3')
    parse_field($proto);
  echo "<br>";	
}

function parse_field($data)
{
  foreach ($data->field as $f )
  {
    
    echo "<br>&nbsp;&nbsp;".$f['showname']."&nbsp;&nbsp;<span class='text-info'>".$f['value']."</span>";
    if (count($f)!=0)
    {
      
      //echo "<br>&nbsp;&nbsp;".$f['show']."&nbsp;&nbsp;<span class='text-info'>".$f['value']."</span>";
      parse_field($f);
      
    }
  }
}


//iptable -A  -t nat 
?>
