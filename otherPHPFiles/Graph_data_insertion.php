<?php
// data insertion into the database
// likes and dislikes per day 

global $wpdb;
 $days = array('1', '2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30');
    $likes = array('100','110','120','130','140','150','160','170','180','190','200','210','220','230','240','250','260','270','280','290','300','300','320','320','320','320','320','320','330','340');
     $dislikes = array('50','60','70','80','90','90','90','90','90','100','110','110','110','110','120','120','130','130','130','130','130','140','140','140','140','140','140','140','150','160');
    foreach( $days as $value=> $day ){
$result=$wpdb->insert(
          "wp_graph_data",
          array(
           
          "days" => $day,
              "likes" => $likes[$value],
              "dislikes" =>  $dislikes[$value]
            
          )

);
}