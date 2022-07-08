<!DOCTYPE html>
<html>
<head>
	<title>Teacher Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: black;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sis");
	?>
</head>
<body style="background-color: powderblue;">
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open till 31st December 2022...Plz edit your information, if wrong.</marquee></span>
	<div id="left_side">
		<br><br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show teacher" value="Show Teachers">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
						<h4><b><u>Enter Student's details</u></b></h4><br>
					  <form action="" method="post">
					  &nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					  <input type="submit" name="search_by_roll_no_for_search" value="Search">
					  </form><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
							<table>
								<tr>
									<td>
										<b>Roll No:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['roll_no']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Name:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['name']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Father's Name:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['father_name']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Class:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['class']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Mobile:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['mobile']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Email:</b>
									</td>
									<td>
										<input type="text" value="<?php echo $row['email']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Password:</b>
									</td>
									<td>
										<input type="password" value="<?php echo $row['password']?>" disabled>
									</td>
								</tr>
								<tr>
									<td>
										<b>Remark:</b>
									</td>
									<td>
										<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
									</td>
								</tr>
							</table>
						</center>
						<?php
					}
				}
			?>
		<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5>Teacher's Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Courses</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run))
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>
