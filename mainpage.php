<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMIS</title>
    <link href="mainstyle.css" rel="stylesheet"/>
</head>
<body>
    <h1 class = "gmisTitle">GMIS Center</h1>
    <?php
	include_once("DBConn.php");
	include_once("Student.php");

	$sql= "select * from student";

	$result=$mysqli->query($sql);

	$arr= array();
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
	  $arr[$row['student_id']]= new Student($row['student_id'], $row['given_name'], $row['family_name'], $row['group_id'], $row['title'], $row['campus'], $row['phone'], $row['email'], $row['photo'], $row['category']);
	}
	
	$user=$arr[123464];//first id from database
    ?>


    <div class="nav" style="float: left"  >
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a href="ClassMainPage.php">CLASS</a></li>
            <li><a href="GroupMainPage.php">GROUP</a></li>
            <li><a href="MeetingMainPage.php">MEETING</a></li>
        </ul>
    </div>
    <?php
	echo "<h1 class='greeting'>Welcome ".$user->given_name."!</h1>";
    ?>
    <div class="titleDetails">
        <img class = "userp"src="user.jpeg"/>
        <div class="">
	    <?php
		echo "<p class = 'displayName'>".$user->given_name."</p>";
		echo "<p class = 'displayID'>".$user->student_id."</p>";
    	    ?>
        </div> 
    </div>

    <div class = "rightBlock">
        <img src="" alt="">
        
        

        
        <div class = "border">
            <div>
                <div class="leftdiv">
                    <p>Given Name</p>
		    <?php
			echo "<span>".$user->given_name."</span>";
		    ?>
                </div>
                <div class="rightdiv">
                    <p>Student ID</p>
                    <?php
			echo "<span>".$user->student_id."</span>";
		    ?>
                </div>
            </div>
            <div>
                <div class="leftdiv">
                    <p>Family Name</p>
                    <?php
			echo "<span>".$user->family_name."</span>";
		    ?>
                </div>
                <div class="rightdiv">
                    <p>Category</p>
		    <?php
			echo "<span>".$user->category."</span>";
		    ?>
                </div>
            </div>
            <div>
                <div class="leftdiv">
                    <p>Email</p>
		    <?php
			echo "<span>".$user->email."</span>";
		    ?>
                </div>
                <div class="rightdiv">
                    <p>Campus</p>
		    <?php
			echo "<span>".$user->campus."</span>";
		    ?>

                </div>
            </div>
            <div>
                <div class="leftdiv">
                    <p>Title</p>
		    <?php
			echo "<span>".$user->title."</span>";
		    ?>

                </div>
                <div class="rightdiv">
                </div>
            </div>
            <div class="mbutton" >
        	<button type="button" onclick="location.href = 'addDetail.php'">Add Detail</button>
    	    </div>
            <div class="clearfix"></div>
           

        </div>
        
    </div>
</body>
</html>