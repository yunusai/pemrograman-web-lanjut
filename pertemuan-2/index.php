<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <?php
        $p = 5;
        $l = 10;

    echo $p * $l;
    
function faktorial($x){
    $angka=1;
    $faktorial=1;
    while ($angka<=$x){
        $faktorial=$faktorial*$angka;
        $angka=$angka+1;
    }
    return $faktorial;
}?>
<form method="post">
    <input type="number" name="faktorial" required>
    <button type="submit" name ="hitung">Hitung</button>
</form>
<?php
if(isset($_POST['hitung'])){
    $x=$_POST['faktorial'];
    echo 'Hasil faktorial dari '.$x.' adalah '.faktorial($x);
}
?>

<br>
<br>
<br>

<form method="post" action="<?php echo$_SERVER["PHP_SELF"];?>">
bilangan:<input type="text" name="bil">
<br>
<br>
<input type="submit" name="submit" value="submit">
</form>
<?php
$tampil="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $bil=$_POST["bil"];
}
if($bil%2==0){
    echo "$bil adalah Bilangan Genap";

}else{
    echo"$bil adalah Bilangan Ganjil";
}
?>
</body>
</html>