<?php
/* One of the things that fasicnated me with PHP back in the day (And how I was drawn to programming in general) was to understand how
Online Forums (BBS) worked behind the "scenes". Here I am 15 years later, writing a (very basic) Forum Index
layout code snippet in PHP */
$dsn = 'mysql:dbname=forum;host=127.0.0.1';
$user = "root";
$pass = "";
$con = new PDO($dsn, $user, $pass);

$query1 = $con->prepare("SELECT * FROM categories");
$query1->execute();
?>

<table>
  <?php while($row = $query1->fetch(PDO::FETCH_ASSOC)){
    $cat_id = $row['id'];
    $cat_name = $row['name'];
    echo "<tr>";
    echo "<th>$cat_name</th>";
    echo "<th>Posts</th>";
    echo "<th>Threads</th>";
    echo "</tr>";
    $query2 = $con->prepare("SELECT * FROM forum WHERE cat_id = :catid");
    $query2->bindParam(":catid", $cat_id);
    $query2->execute();
            while($row = $query2->fetch(PDO::FETCH_ASSOC)){
                $f_name = $row['name'];
                echo "<tr>";
                echo "<td>$f_name</td>";
                echo "<td>0</td>";
                echo "<td>0</td>";
                echo "</tr>";
            }
}
?>
</table>
