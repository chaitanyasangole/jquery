<?php
	if(isset($_POST))
	{
		if(!$con=mysqli_connect("localhost","root",""))
		{
			$msg=mysqli_connect_error();
			echo $msg;
			die("not connnected");
		}
		mysqli_select_db($con,"csyiiapp")or die("could not connect to the database");
		if(isset($_POST['email']))
		{
		$sql="select * from student where email='".$_POST['email']."'";
		if($res=mysqli_query($con,$sql))
		{
			//echo $sql;
			$row=mysqli_fetch_array($res);
			if(count($row))
			{
			$email=$row['email'];
			//echo "record found<br>Email=".$email;
			echo "success";
			}
			else
			{
			echo "not";
			}
		}
		else
		{
			echo $sql;
			echo "record not found".mysqli_error($con);
		}
		}
		if(isset($_POST['username']))
		{
		$sql1="select * from student where name='".$_POST['username']."'";
		if($res1=mysqli_query($con,$sql1))
		{
			//echo $sql;
			$row1=mysqli_fetch_array($res1);
			if(count($row1))
			{
			//$email=$row['username'];
			//echo "record found<br>Email=".$email;
			echo "success";
			}
			else
			{
			echo "not";
			}
		}
		else
		{
			echo $sql;
			echo "record not found".mysqli_error($con);
		}
		}
		mysqli_close($con);
	}
	else
	{
		echo "Request not get";
	}
?>