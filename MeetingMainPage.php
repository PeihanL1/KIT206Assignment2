<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMIS-MeetingPage</title>
    <link href="meetingPage.css" rel="stylesheet"/>
</head>
<body>
    <h1 class = "gmisTitle">GMIS</h1>
    <?php
	include_once("DBConn.php");
	include_once("Meeting.php");

	$sql= "select * from meeting";

	$result=$mysqli->query($sql);

	$arr= array();
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
	  $arr[$row['meeting_id']]= new Meeting($row['meeting_id'], $row['group_id'], $row['day'], $row['start'], $row['end'], $row['room']);
	}
	
	$user=$arr[3];//first id from database meeting table
	$user2=$arr[4];//second id from database meeting table
	$user3=$arr[6];//third id from database meeting table
    ?>

    <div class="nav" style="float: left"  >
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a href="ClassMainPage.php">CLASS</a></li>
            <li><a href="GroupMainPage.php">GROUP</a></li>
            <li><a href="MeetingMainPage.php">MEETING</a></li>
        </ul>
    </div>
    <div class="border">
        <p class="title">My Meeting</p>
        <div class="date">
            <p class="schedule">This week 4/1~4/7</p>
        </div>
        <div class="coursediv">
	    <?php
		echo '<p class="textContent">'.$user->day.' '.$user->start.'~'.$user->end.'</p><p class="textContent">ID:'.$user->meeting_id.' Group '.$user->group_id.'</p><p class="textContent">Location: '.$user->room.'</p>';
            ?>
            <button>-></button>
        </div>
        <div class="coursediv">
            <?php
		echo '<p class="textContent">'.$user2->day.' '.$user2->start.'~'.$user2->end.'</p><p class="textContent">ID:'.$user2->meeting_id.' Group '.$user2->group_id.'</p><p class="textContent">Location: '.$user2->room.'</p>';
            ?>
            <button>-></button>
        </div>
        <div class="date">
            <p class="schedule">Next week 4/8~4/14</p>
        </div>
        <div class="coursediv"> 
            <?php
		echo '<p class="textContent">'.$user3->day.' '.$user3->start.'~'.$user3->end.'</p><p class="textContent">ID:'.$user3->meeting_id.' Group '.$user3->group_id.'</p><p class="textContent">Location: '.$user3->room.'</p>';
            ?>
            <button>-></button>
        </div>
    </div>
</body>