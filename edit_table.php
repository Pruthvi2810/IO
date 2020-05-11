<!DOCTYPE html>
<html>
<?php 
           require 'css/head.php';
     ?>
<body>
	<div class="head">Update Details</div>
	<hr><marquee><right>"Please Enter true & Latest Infromation"</marquee><hr>
		 <?php
		include 'dbconn.php';
		$id=$_REQUEST['id'];
        $sql="select * from upsc where id=$id";
        $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res)>0) 
			{    
			while($row = mysqli_fetch_assoc($res)) 
				{
			?>
<form action="process.php?action=update&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
	<center><table>
		<tr>
			<th>
		<label><h2>Name:</h2></label><input type="Text" name="name" value="<?php echo $row['name']?>"><br><br>
	<label><h2>FullName:</label></h2><input type="Text" name="fname" value="<?php echo $row['f_name']?>"><br><br>
	<label><h2>Members/countries:</h2></label><input type="Text" name="members" value="<?php echo $row['members']?>"><br><br>
		<label><h2>Headquater:</h2></label><input type="Text" name="hq" value="<?php echo $row['hq']?>"><br>
</th>
<th>
	
		<label><h2>Chairman/Head/General Scretary:</h2></label><input type="Text" name="c_name" value="<?php echo $row['head']?>"><br><br>
		<label><h2>Aim,Motto,Work:</h2></label><input type="Text" name="work" value="<?php echo $row['aim']?>"><br><br>
		<label><h2>Establish:</h2></label><input type="Text" name="est" value="<?php echo $row['establish']?>"><br><br>
		<label><h2>Parent/child Organizations/
similar participation:</h2></label><input type="Text" name="parent" value="<?php echo $row['parent_o']?>"><br><br>
	</th></tr>
	<tr>
	<th>
	
		<label><h2>india's Partcipation:</h2></label><input type="Text" name="ip" value="<?php echo $row['india_p']?>"><br><br>
		<label><h2>Any projects,initative done/
continue in india?:</h2></label><input type="Text" name="project" value="<?php echo $row['project']?>"><br><br>
		<label><h2>Last Summit/summit
in india(city)/year:</h2></label><input type="Text" name="summit" value="<?php echo $row['summit']?>"><br><br>
		<label><h2>Worldwide project:</h2></label><input type="Text" name="wp" value="<?php echo $row['wp']?>"><br><br>
	</th>
	<th>
	
		<label><h2>Other Details 1:</h2></label><input type="Text" name="o1" value="<?php echo $row['other1']?>"><br><br>
		<label><h2>Other Details 1:</h2></label><input type="Text" name="o2" value="<?php echo $row['other2']?>"><br><br>
		<label><h2>Other Details 1:</h2></label><input type="Text" name="o3" value="<?php echo $row['other3']?>"><br><br>
	</th></tr></table></center>
	<? php ?>
	<br>
	<br>
	<center>
	<input type="submit" value="Update">
	<input type="reset" value="Reset">
</center>
</form>
<?php 
 }
    }
    ?>
<div class="head"><marquee><right>Thanks For Visit</marquee></div>
</body>
</html>