<?php

$access_token = 'poBMExkh/h7Uh9fUxXFWji2T08Fq9QkkQ12uk+8eydd16mP2MD4UUbeYhV1chN9j0xz24f+YgW6Qao7tpuD+sXN+338YB6/WBAbMyOG7RryYIH33L70ONYaRqqPY2ujBPbIVKKrJfFpXReVXnV5V3gdB04t89/1O/w1cDnyilFU=';

$post_data['messages'][] = array(
  'type' => 'text',
  'text' => 'てすとめっせーじ'
);

$ch = curl_init('https://api.line.me/v2/bot/message/reply');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json; charser=UTF-8',
  'Authorization: Bearer ' . $access_token
));

$result = curl_exec($ch);
curl_close($ch);

?>