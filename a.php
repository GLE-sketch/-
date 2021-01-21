<?php 



   $key = "abc";
   $data = "hello world";
   $send = hash('md5',$data.$key);
   $url = "http://b.2006.com/b.php?data={$data}&send={$send}";
   $str = file_get_contents($url);  
   echo $str;

   

 
 


 

 
?>