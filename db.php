<?php

$server = "hanoman";
$user   = "nolt5333_db_npuser";
$pass   = "jkl;fdsa";
$dbname = "nolt5333_db_np";

// echo "Halo dunia";
Try
{
    $conn = new PDO ("mysql:host=$server;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Berhasil Konek Ke Database!";
}
    catch(PDOException $error)
{
    echo $error->getMessage();
}

?>
