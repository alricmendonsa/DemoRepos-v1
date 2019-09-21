<html><head><title>Get Users</title></head>
<body>

<?php

$conn=@mysql_connect("localhost", "userName", "password") or die("Could not connect");

$rs = @mysql_select_db("my_database", $conn) or die("Could not select database");
 
$sql="select * from users";
 
$rs=mysql_query($sql,$conn) or die("Could not execute query");

$list = "<table>";
$list.="<tr><th>First Name</th>";
$list.="<th>Last Name</th>";
$list.="<th>User Name</th>";
$list.="<th>Password</th></tr>";

while($row= mysql_fetch_array($rs) )
{
   $list .= "<tr>";
   $list .= "<td>".$row["first_name"]."</td>";
   $list .= "<td>".$row["last_name"]."</td>";
   $list .= "<td>".$row["user_name"]."</td>";
   $list .= "<td>".$row["password"]."</td>";
   $list .= "</tr>";
}
$list .= "</table>";
echo($list);

?>
</body></html>