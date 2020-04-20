<?php

require_once ('common.php');

$data = getData ("select * from  blog order by hits");


?>
<div class="col-sm-3">
	      
		  <h3 class="footer-title">Blog</h3>
		  <ul>
		  
		  <?php
		    $str = '';
		   foreach ($data as $v)
		   
		   {
		      $str .=' <li><a href="blogc.php?id='.$v['id'].'">'.$v['blog_text'].'</a></li>';
		   }
		   echo $str;
		  ?>
		   
		   
		  </ul>
		      
	</div>
