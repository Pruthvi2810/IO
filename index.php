<!DOCTYPE html>
<html>
     <?php 

           require 'css/head.php';
		

     ?>
<body>
	<div class="head">International Organization</div>
	<hr><marquee><right>"Please Enter true & Latest Infromation"</marquee><hr>
<form action="process.php?do=reg" method="post" enctype="multipart/form-data">
	<center><table>
		<tr>
			<th>
		<label><h2>Name:</h2></label><input type="Text" name="name" class="txt_name"><br><br>
	<label><h2>FullName:</label></h2><input type="Text" name="fname" class="txt_fn"><br><br>
	<label><h2>Members/countries:</h2></label><input type="Text" name="members" class="txt_mem"><br><br>
		<label><h2>Headquater:</h2></label><input type="Text" name="hq" class="txt_hq"><br>
</th>
<th>
	
		<label><h2>Chairman/Head/General Scretary:</h2></label><input type="Text" name="c_name" class="txt_name"><br><br>
		<label><h2>Aim,Motto,Work:</h2></label><input type="Text" name="work" class="txt_mem"><br><br>
		<label><h2>Establish:</h2></label><input type="Text" name="est" class="txt_name"><br><br>
		<label><h2>Parent/child Organizations/
similar participation:</h2></label><input type="Text" name="parent" class="txt_mem"><br><br>
	</th></tr>
	<tr>
	<th>
	
		<label><h2>india's Partcipation:</h2></label><input type="Text" name="ip" class="txt_mem"><br><br>
		<label><h2>Any projects,initative done/
continue in india?:</h2></label><input type="Text" name="project" class="txt_mem"><br><br>
		<label><h2>Last Summit/summit
in india(city)/year:</h2></label><input type="Text" name="summit" class="txt_mem"><br><br>
		<label><h2>Worldwide project:</h2></label><input type="Text" name="wp" class="txt_mem"><br><br>
	</th>
	<th>
	
		<label><h2>Other Details 1:</h2></label><input type="Text" name="o1" class="txt_mem"><br><br>
		<label><h2>Other Details 2:</h2></label><input type="Text" name="o2" class="txt_mem"><br><br>
		<label><h2>Other Details 3:</h2></label><input type="Text" name="o3" class="txt_mem"><br><br>
	</th></tr></table></center>
	<br>
	<br>
	<center>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
</center>
</form>
<div class="head"><marquee><right>Thanks For Visit</marquee></div>
</body>
</html>