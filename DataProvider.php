<?php
class DataProvider
{
public static function ExecuteQuery($sql)
{
$connection = mysqli_connect("localhost","root","","qltnta");
mysqli_query($connection,"set names 'utf8'");
$result = mysqli_query($connection,$sql);
mysqli_close($connection);
return $result;
}
}
?>