<?php


<?php
$servername="localhost";
$username = "";
$password= "";
$dbname = "contral base";




$conn= mysqli_connect($servername,$username,$password,$dbname);



$sql2="SELECT Id,Right,Left,Backward,Forward,Stop FROM base";

$query =mysqli_query($conn,$sql2);
while ($fetch =mysqli_fetch_assoc ($query))
{
echo "".$fetch['Id'] .<br>;
echo "".$fetch['Right'] .<br>;
echo "".$fetch['Left'] .<br>;
echo "".$fetch['Backward'] .<br>;
echo "".$fetch['Forward'] .<br>;
echo "".$fetch['Stop'] .<br>;






}









mysqli_close($conn);










?>
