<?php

//$_POST ['nama'] = "Sri Mulya";

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
*/



//perulangan

/*
$no = 10;
for ($i=0; $i<=$no; $i++) {
    $n $i + 1;
    echo $nama."<br/>";
}
*/


/*
$no = 10;
$i = 0;

while ($i < $no) {
        $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/


/*
$no = 10;
$i = 0;

do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/


//Pemanggilan Array

/*$data = array('Gilgamesh', 'Ishtar', Enkidu', 'Scathach', 'Arcueid', 'Emiya');


$i = 0;
while ($i<count($data)) {
    echo $data[$i]."<br/>";
    $i++;
}
*/

/*Pemanggilan suatu value
echo $data[5];
*/

/*Pemanggilan seluruh value array
foreach($data as $value) {
    echo $value."<br/>";
}
*/



//Percabangan

/*
if ($nama == "Putu") {
    echo $nama." adalah orab Bali";
} else if($nama == "Budi") {
    echo $nama." berasal dari pulau Jawa";
} else {
    echo $nama." darimana ya?";
}
*/


/*
switch ($nama) {
    case "Putu";
        $pesan = $nama." adalah orang Bali";
    break;
    case "Budi";
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    default:
        $pesan = $nama." darimana ya?";
}
echo $pesan;
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Ditha":
                    $pesan = $_POST['nama']." adalah mahasiswa di UBM";
                break;
                case "Meivi":
                    $pesan = $_POST['nama']." adalah mahasiswa di UNIMA";
                break;
                default:
                    $pesan = $_POST['nama']." Kuliah dimana?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah.";
        }
    ?>

</body>
</html>
