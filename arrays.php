<?php 
$danie1 = array ( 0=> array (
   "img"=>"10.png",
   "name"=>"zupa",
   "date"=>"2022-03-16", 
),
1 => array (
 "img"=>"15.png",
 "name"=>"pasta",
 "date"=>"2022-03-16",   
),
2 => array (
"img"=>"25.png",
"name"=>"salatka",
"date"=>"2022-03-17",  
),
3=> array (
    "img"=>"20.png",
    "name"=>"kotlet",
    "date"=>"2022-03-18",   
),   

);
foreach ($danie1 as $i){
    echo $i["name"];
    echo '<img src="'. $i["img"].'"/>';
    echo $i["date"];
}
?>