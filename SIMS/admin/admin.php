<?
include '/opt/lampp/htdocs/session.php';
include '/opt/lampp/htdocs/check.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
		
		<title>Administrators</title><meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Alok Mishra" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<link rel="stylesheet" title="Normal" type="text/css" media="screen" href="./styles/screen.css" /></head>

	<body>
		<div id="main">
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
			<div id="menu">
				<ul>
					<li class="selected"><a href="admin.php">Home</a></li>
                                        <li><a href="acads.php">Academics</a></li>
					<li><a href="att_edit.php">Attendance</a></li>
                                        <li><a href="table_edit.php">Time-Table</a></li>
					<li><a href="subject.php">Subjects</a></li>
                                        <li><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
					<h2><u>Welcome to the Administrator Area</u></h2><h3>Please use the above links to edit any data for the current ongoing semester.</h3><br /></div>
				<div class="article">
					<h3><a href="/admin/semester_begin.php">New Semester</a></h3>
					<p><b><FONT COLOR="red">Use
this section to start the process of beginning a a new semester and
initialisation of the new system.<br>(Please keep all the relevant data
ready before clicking here).</FONT></b> </p>
				</div>
			</div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>
