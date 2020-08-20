<html>
	<head>
		<title>Registration Form</title>
	</head>
	<?php include 'store.php' ?>
	<body style='background:url(bggg.jpg); background-repeat:no-repeat; background-size:cover;'>
		<br>
		<br>
		<form  action='#' method='POST' enctype='multipart/form-data' onsubmit='vald()' style='background:teal; width:600px; height:550px; padding:30px; margin-left:350px;'> 
			<center>
			<br>
			<legend ><b><font size="5">Register Here For Cultural Fest 2019</font></b></legend>
			<br>
			<br>
			<br>
			<table  border="0" width=500 style='margin-left:130px;'>
				
				
				<tr>
					<td><b>Name :<br><br></b></td>
					<td><input type="text" name='name' id='name' required><br><br></td>
				</tr>
				
				<tr>
					<td><b>Address :<br><br></b></td>
					<td><textarea name='add' id='add'></textarea><br><br></td>
				</tr>
				
				<tr>
					<td><b>Year:<br><br></b></td>
					<td>
						<select name='year' id='year'>
							<option value=""></option>
							<option value="fy">First Year</option>
							<option value="sy">Second Year</option>
							<option value="ty">Third Year</option>
							<option value="foy">Forth Year</option>						
						</select>
						<br><br></td>
				</tr>
				<tr>
					<td><b>Email :<br><br></b></td>
					<td><input type="text" name='email' id='email'><br><br></td>
				</tr>
				<tr>
					<td><b>Phone Number :<br><br></b></td>
					<td><input type="text" name='number' id='number'><br><br></td>
				</tr>
				<tr>
					<td><b>Gender :<br><br></b></td>
					<td>
					<input type="radio" name="gender" value='female' id='gender'>Female
						<input type="radio" name="gender" value='male' id='gender'>Male<br><br></td>
				</tr>
				<tr>
					<td><b>Events :<br><br></b></td>
					<td><input type="checkbox" name="event" id='event' value="Singing">Singing
						<input type="checkbox" name="event" id='event' value="Dancing">Dancing
						<input type="checkbox" name="event" id='event' value="Drama">Drama
						<br><br></td>
				</tr>
				
				<tr>
					<td><b>Attach ID :<br><br></b></td>
					<td><input type="file" name='file' id='file'><br><br></td>
				</tr>
				
				
				
			</table>
			<br>
			<br>
				<input type="Submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset" >
		
			</center>
		</form>
		<div id='sucessfull' style='height:300px; width:400px; color:white; background:black; visibility:hidden; display:none;'>
		</div>
		<center><button style='height:50px; width:130px; background:crimson; border:none; font-size:20px;'><a href='home.html' style='text-decoration:none; color:white;'>Home Page</a></button></center>
		<br>
	</body>
</html>
<script type='text/javascript'>
function vald()
{
	
	var n = document.getElementById('name').value
	var a = document.getElementById('add').value
	var y = document.getElementById('year').value
	
	var e = document.getElementById('email').value
	var atposition=e.indexOf("@");  
	var dotposition=e.lastIndexOf(".");
	
	
	var pn = document.getElementById('number').value
	var g = document.getElementById('gender').value
	var ev = document.getElementById('event').value
	var f = document.getElementById('file').value
	
	if(n=='' || n==null || a=='' || a==null || y=='' || y==null || e=='' || e==null || pn=='' 
	|| pn==null || g=='' || g==null || ev=='' || ev==null || f=='' || f==null )
	{
		alert('Please fill all the fields');
	}
	else if(isNaN(n)==false)
	{
		alert('Please enter only alphabets');
	}
	else if(n.length<6 || n.length>15)
	{
		alert('Name should have 6 to 15 characters');
	}
	else if(isNaN(pn)==true)
	{
		alert('Please enter only digits');
	}
	else if(pn.length<10 || pn.length>10)
	{
		alert('Please enter only 10 digit cantact number');
	}
	else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=e.length)
	{  
	  alert("Please enter a valid e-mail address with \n @ and . "); 
		//alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);
	  return false;  
	}
	/*else
	{
		alert('Successfully registered !!!');
		//document.getElementById('sucessfull').innerHTML='style="display:block; visibility:visible;"';
	}*/
}

</script>