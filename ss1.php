<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "testdb";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "connected successfully";
 $sid=$_GET['sid'];
 $sname=$_GET['sname'];
 $sdept=$_GET['sdept'];
 $res = mysqli_query($conn,"insert into student
  values('$sid','$sname','$sdept')");
$res1=mysqli_query($conn,"select * from student");
print "<center><table cellspacing=2 cellpadding=3 border=1>";
print "<tr><th>slno</th><th>stdid</th><th>stu Name</th><th>studdept</th>";
print "</tr>";
$i=1;
while($row = mysqli_fetch_array($res1))
{
print "<tr><td>$i</td><td>$row[0]</td><td>$row[1]</td>";
print "<td>$row[2]</td></tr>";
$i++;
}


   $conn -> close();
    
?>