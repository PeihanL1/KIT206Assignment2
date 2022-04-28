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
    <div class= "header">

    </div>
    <h1 class = "gmisTitle">GMIS Center</h1>

    <div class="nav" style="float: left"  >
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a href="ClassMainPage.php">CLASS</a></li>
            <li><a href="GroupMainPage.php">GROUP</a></li>
            <li><a href="MeetingMainPage.php">MEETING</a></li>
        </ul>
    </div>
    <?php
	include_once("DBConn.php");
	include_once("Group.php");

	$sql= "select * from studentGroup";

	$result=$mysqli->query($sql);

	$arr= array();
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
	  $arr[$row['group_id']]= new Group($row['group_id'], $row['group_name']);
	}
	
	$user=$arr[1];//first id from database group table
	$user2=$arr[2];//second id from database group table
    ?>

    <div class = "rightBlock">
        <img src="" alt="">
        
        <div class = "border">
            <div>
                <h2>My Group</h2>
      
            </div>
            <div>
                <div class = "border1">
                <div class="leftdiv">
		    <?php
                    	echo '<p>GroupID:'.$user->group_id.'</p><br/><p>UnitName:'.$user->group_name.'</p>';
		    ?>
                    <br/>
                    <p>Location:N12_B18</p>
                    <br/>
                    <p>Assignment content:system design</p>
                </div>
                </div>
                <div class = "border2">
                <div class="leftdiv">
                    <?php
                    	echo '<p>GroupID:'.$user2->group_id.'</p><br/><p>UnitName:'.$user2->group_name.'</p>';
		    ?>
                    <br/>
                    <p>Location:N12_B18</p>
                    <br/>
                    <p>Assignment content:system design</p>
                </div>
                </div>
            </div>
            <div>
            <div class = "border3">
                <div class="add" >
                    <?php
                    echo  '<a href="Edit_group.php"><img src="Group_ADD.png" width="50px" height="50px"/></a>';
                    ?>
                </div>
            </div>
        
    </div>
</body>
</html>