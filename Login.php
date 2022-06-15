<?php
$isPost=false;
$username="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	//echo "button clicked";
}

$radio="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["gender"]!="")
		$radio=$_POST["gender"];
	//echo "button clicked";
}
?>
<div >
    <center><img src="loan.png" height=200 width=1300  ></center>
    <br>
   <center> <h1 style="color:rgb(70,60,180)">Welcome Banker</center>
   <center><p style="color:rgb(70,60,120)">Welcome to agri assistance. You can help farmers to take loan and monitor the transactions. please fill your informations properly</center>
   
</div>
<center>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $radio=="")
 echo "<span style='color:red;'>Select one</span>";
?>
<br><br>
Position:<input type="radio" name="position" value="Branch manager">Branch manager
<input type="radio" name="position" value="cashier">Cashier
<input type="radio" name="position" value=" employee">Employee
<?php
if($isPost==true && $radio=="")
 echo "<span style='color:red;'>Select one</span>";
?>
<br><br>
Duties you want to do:<input type="checkbox" name="skills[]" value="Field visit">Field visit
<input type="checkbox" name="skills[]" value="Account varification ">Account varification
<input type="checkbox" name="skills[]" value="Surveys and financial report">Surveys and financial report
<br><br>
Bank:<select name="bnk">
<option value="UCB Bank">UCB Bank</option>
<option value="islami bank">islami bank</option>
<option value="Dhaka bank">Dhaka bank</option>
</select><br><br>
Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>
<input type="submit" value="Click" name="btnClick">
</form>
</center>