<?php

extract($_POST);
session_start(); 
include("dbconnect.php");

$uname=$_SESSION['uname'];
$id=$_SESSION['id'];

$bid=$_REQUEST['bid'];
$act=$_REQUEST['act'];


$qrys1="select * from  compreg where id='$bid'";
$result = $conn->query($qrys1);
$row1 = $result->fetch_assoc();
$name2=$row1['compname'];
$contact2=$row1['phno'];
$address=$row1['address'];


if($act=="OK")
{

$update="update invite_request set status=1 where id='$bid'";
if ($conn->query($update) === TRUE)  
{
?>					
<script language="javascript">
alert("Request  Accepted  Success");
window.location.href="company_view_invite.php";
</script>
<?php
}
else
{   
?>					
<script language="javascript">
alert("Failed");
</script>
<?php
}
}
?>