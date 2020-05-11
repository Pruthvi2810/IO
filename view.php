<html>
<head>
     <title>International organization List</title>
		<style>
			table, th, td 
			{
				border: 1px solid black;
				border-collapse: collapse;
			}
			th, td 
			{
				padding: 5px;
				text-align: center; 
				column-span: 2;   
			}
		</style>
</head>
<body>
	<center><h1><u>International organization List</u></h1></center>
		<table border="2">
			<tr>
				<th>Name</th>
                <th>Full Name</th>
                <th>Members/<br>countries<br></th>
                    <th>Headquater</th>
                    <th>Chairman/Head</th>
                    <th>Aims,Work,motto</th>
                    <th>Establish</th>
                    <th>Parent/child Organizations/<br>similar participation</th>
                    <th>india's Partcipation</th>
                    <th>Any projects,initative done/<br>continue in india?</th>
                    <th>Last Summit/summit<br> in india(city)/year</th>
                    <th>Worldwide project</th>
                    <th>Other Details 1</th>
                    <th>Other Details 2</th>
                    <th>Other Details 3</th>
					<th colspan="2">Action</th>
            </tr>
				<?php
					include 'dbconn.php';
					$sql="select * from upsc";
					$rs=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($rs)){
				?>
		<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['f_name'];?></td>
			<td><?php echo $row['members'];?></td>
			<td><?php echo $row['hq'];?></td>
			<td><?php echo $row['head'];?></td>
			<td><?php echo $row['aim'];?></td>
			<td><?php echo $row['establish'];?></td>
			<td><?php echo $row['parent_o'];?></td>
			<td><?php echo $row['india_p'];?></td>
			<td><?php echo $row['project'];?></td>
			<td><?php echo $row['summit'];?></td>
			<td><?php echo $row['wp'];?></td>
			<td><?php echo $row['other1'];?></td>
			<td><?php echo $row['other2'];?></td>
			<td><?php echo $row['other3'];?></td>
			<td><a href="edit_table.php?do1=edit&id=<?php echo $row['id']; ?>">Edit</a></td>
			<td><a href="process.php?do2=del&id=<?php echo $row['id']; ?>">Delete</a></td>
		</tr>
					<?php } ?>
               
     </table>
</body>
</html>