<html>
<title>NUKIM</title>
<head>
    <meta charset="UTF-8">
    <h1><center>&lt;資管系系烤報名表單確認&gt;</center><h1>
    <hr>
</head>
<body background="https://png.pngtree.com/thumb_back/fh260/background/20210430/pngtree-old-paper-scene-image_695015.jpg">
<h2><center>下列是你所填寫的資料</center></h2>
<?php
if(isset($_POST["name"]))
{
    $name=$_POST["name"];
    echo '<div style="font-size: 20px;">名字:'.$name.'</div>';
    echo "<br>";
}
if(isset($_POST["studnum"]))
{
    $studnum=$_POST["studnum"];
    echo '<div style="font-size: 20px;">學號:'.$studnum.'</div>';
    echo "<br>";
}
if(isset($_POST["volunteer1"]))
{
    $volunteer1=$_POST["volunteer1"];
    echo '<div style="font-size: 20px;">是否參加:'.$volunteer1.'</div>';
    echo "<br>";
}
if(isset($_POST["volunteer2"]))
{
    $volunteer2=$_POST["volunteer2"];
    echo '<div style="font-size: 20px;">是否喝酒:'.$volunteer2.'</div>';
    echo "<br>";
}
echo'<div style="font-size: 24px; text-align: center;"><strong>感謝填寫此表單</strong></div>';
echo '<button onclick="location.href=\'A1103315_PHP_HW2.php\'">資料有誤，重新填寫</button>';
echo "<br>";
?>
<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delicious-ribeye-steak-and-bacon-wrapped-shrimp-on-royalty-free-image-1629794551.jpg"width="400"height="300">
<img src="https://png.pngtree.com/thumb_back/fh260/background/20201020/pngtree-cute-bunny-thanks-background-image_425101.jpg">
</body>
</html>
