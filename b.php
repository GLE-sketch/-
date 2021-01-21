<?php 
    
  //接受页面

  $key = "abc";
  $data = $_GET['data'];
  $str = hash('md5',$data.$key);
  $send = ($_GET['send']);
  //验证签名
  if($send == $str){
      $response = [
          'error' => 0,
          'smg' => '签名通过',
      ];
      die(json_encode($response,JSON_UNESCAPED_UNICODE));
  }else {
    $response = [
        'error' => 0,
        'smg' => '签名未通过',
    ];
    die(json_encode($response,JSON_UNESCAPED_UNICODE));
  }



  
    




?>