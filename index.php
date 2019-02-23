<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<?php
echo"ฟังก์ชั่นที่1 ฟังก์ชั่นที่เกี่ยวกับการตั้งค่าวันที่"."<br>"; 
/*ฟังก์ชั่นที่1
 เป็นฟังก์ชั่นที่เกี่ยวกับการตั้งค่าวันที่
 ตัวอย่าง */
$date = new DateTime();
$date->setDate(2001, 2, 28);
echo $date->format('Y-m-d') . "<br>";
$date->setDate(2001, 2, 29);
echo $date->format('Y-m-d') . "<br>";
$date->setDate(2001, 14, 3);
echo $date->format('Y-m-d') . "<br>";
?>

<?php
    echo "ฟังก์ชั่นที่2 ฟังก์ชั่นที่เกี่ยวกับการหาค่าเลขยกกำลัง Pow" . "<br>";
        /*  ฟังก์ชัน Pow
            ฟังก์ชันนี้จะใช้ในการหาค่าเลขยกกำลัง
            */
         echo "result = ". pow (8,2)."<br>"; // 64
         echo "result = ". pow (18,3)."<br>"; // 5832
?>

<?php
     echo "ฟังก์ชั่นที่3 ฟังก์ชั่นที่เกี่ยวกับการนำค่าที่มากที่สุดใน array ออกมาแสดงผล" . "<br>";
    echo max(100, 300, 500, 600, 700)."<br />"; // 700
    echo max(array(200, 400, 500))."<br />"; // 500
    //ฟังก์ชัน max() เป็นคำสั่งที่จะนำค่ามากที่สุดออกมา แสดงผล
?>
<?php
    echo "ฟังก์ชั่นที่4 ฟังก์ชั่นที่เกี่ยวกับการนำค่าที่น้อยที่สุดใน array ออกมาแสดงผล" . "<br>";
    echo min(200, 300, 100, 600, 700)."<br />"; // 100
    echo min(array(200, 400, 500))."<br />"; // 200
    //ฟังก์ชัน min() เป็นคำสั่งที่จะนำค่าน้อยที่สุดออกมา แสดงผล
?>
<?php
    echo "ฟังก์ชั่นที่5 ฟังก์ชั่นที่เกี่ยวกับการหาค่าลอการิทึมฐาน 10" . "<br>";
    echo log10(50)."<br>";
?>
</body>
</html>