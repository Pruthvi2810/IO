<?php
include 'dbconn.php';
if(isset($_GET["do"])=="reg")
{
	$id=$_POST["id"];
	$name=$_POST["name"];
	$fname=$_POST["fname"];
	$members=$_POST["members"];
	$hq=$_POST["hq"];
	$cname=$_POST["c_name"];
	$work=$_POST["work"];
	$est=$_POST["est"];
	$parent=$_POST["parent"];
	$ip=$_POST["ip"];
	$project=$_POST["project"];
	$summit=$_POST["summit"];
	$wp=$_POST["wp"];
	$o1=$_POST["o1"];
	$o2=$_POST["o2"];
	$o3=$_POST["o3"];

	$sql ="insert into upsc(name,f_name,members,hq,head,aim,establish,parent_o,india_p,project,summit,wp,other1,other2,other3)values('$name','$fname','$members','$hq','$cname','$work','$est','$parent','$ip','$project','$summit','$wp','$o1','$o2','$o3')";
	$rs =  mysqli_query($conn,$sql);

	if($rs)
	{
			echo "successfully Inserted";
			header('location:view.php');
	}
		else
		{
			echo "failed";
		}
}
if(isset($_GET['action'])=='update' && $_REQUEST['id']!='')
{
	$id=$_REQUEST['id'];
	$name=$_POST["name"];
	$fname=$_POST["fname"];
	$members=$_POST["members"];
	$hq=$_POST["hq"];
	$cname=$_POST["c_name"];
	$work=$_POST["work"];
	$est=$_POST["est"];
	$parent=$_POST["parent"];
	$ip=$_POST["ip"];
	$project=$_POST["project"];
	$summit=$_POST["summit"];
	$wp=$_POST["wp"];
	$o1=$_POST["o1"];
	$o2=$_POST["o2"];
	$o3=$_POST["o3"];
	$sql="update upsc set name='$name',f_name='$fname',members='$members',hq='$hq',head='$cname',aim='$work',establish='$est',parent_o='$parent',india_p='$ip',project='$project',summit='$summit',wp='$wp',other1='$o1',other2='$o2',other3='$o3' where id='$id'";
	$res=mysqli_query($conn,$sql);
	if($res)
		{
			header('location:view.php?action=updated&action=success');die;
		}
}
if(isset($_GET["do2"])=="del" && $_REQUEST['id']!='')
	{
		$id=$_REQUEST['id'];
		$sql="delete from upsc where id='$id'";
		$res=mysqli_query($conn,$sql);
			if($res)
				{
					header('location:view.php?action=deleted&action=success');
				}
			else
				{
					echo " Unsucessfull!!!";
				}
	}
?>