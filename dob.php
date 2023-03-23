<?php 
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
 

 
$date = '2002-11-13'; //วันเกิด รูปแบบ ปี เดือน วัน
$currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน
$name = "ทศพล นิลเพชร";
$number = 644259008;
$saka = "วิศวกรรมซอฟต์แวร์";

 
echo 'ชื่อ นาย ' .$name  ;
echo '<hr>';
echo 'วันเกิด ' .$date  ;
echo '<hr>';
echo 'รหัสประจัวตัว '.$number ;
echo '<hr>';
echo 'สาขา '.$saka ;
echo '<hr>';
 
$diff = abs(strtotime($currentDate) - strtotime($date));
 
$years = floor($diff / (365*60*60*24));

echo 'นาย '.$name;

printf(" มีอายุ %d ปี\n", $years,);
echo '<hr>';
echo ' ศึกษาอยู่ชั้น ';


if ($years <= "12") {
  echo "ประถม";
} elseif ($years <= "18") {
  echo "มัธยม";
} else {
  echo "มหาลัย";
}




 
 
//https://stackoverflow.com/questions/676824/how-to-calculate-the-difference-between-two-dates-using-php
?>