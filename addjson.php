<?php 
// $sql="select * from Posts limit 20"; 

$response = array();
$posts = array();
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)) { 
  $title=$row['title']; 
  $url=$row['url']; 

  $posts[] = array('title'=> $title, 'url'=> $url);
} 

$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);


?> 
