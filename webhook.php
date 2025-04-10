<?php

  $webhook_url = 'https://discord.com/api/webhooks/1359607042607677582/L7ia77egxuqABGk0Gm0H0VkDQiWb1Q60CWuDnlZnl7zkak_NH_HlK__PXYMiY1dtcl2q';

  $msg = [ "content" => "*****Link test*****",
  "embeds" => [
    [
      "title" => "Link test",
      "description" => "This is a test link",
      "url" => "http://storm.thsite.top",
      "color" => 16777215,
      "image" => [
        "url" => "http://storm.thsite.top/logo.png",
        "height" => 100,
        "width" => 100
      ],
      
    ]
  
]];


  $headers = array('Content-Type: application/json'); 

  $ch = curl_init();
  curl_setopt( $ch,CURLOPT_URL, $webhook_url );
  curl_setopt( $ch,CURLOPT_POST, true );
  curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
  curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $msg ) );
  $response = curl_exec( $ch );
  curl_close( $ch );


?>