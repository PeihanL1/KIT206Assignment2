<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMIS-ClassPage</title>
    <link href="Studentpage.css" rel="stylesheet"/>
</head>
<body>
    <h1 class = "gmisTitle">GMIS</h1>
    <div class="nav" style="float: left"  >
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a href="ClassMainPage.php">CLASS</a></li>
            <li><a href="GroupMainPage.php">GROUP</a></li>
            <li><a href="MeetingMainPage.php">MEETING</a></li>
        </ul>
    </div>

    <div class="border">
        <p class="title">My Class</p>

        <?php
	    include_once("DBConn.php");
	    include_once("Classes.php");

    	    $sql= "select * from class";

	    $result=$mysqli->query($sql);

	    $arr= array();
	    while($row = $result->fetch_array(MYSQLI_ASSOC)){
	      $arr[$row['class_id']]= new Classes($row['class_id'], $row['group_id'], $row['day'], $row['start'], $row['end'], $row['room']);
	    }
	
	    foreach ($arr as $class_id => $class)
	    {
	        echo '<div class="coursediv"><p class="textContent">KIT-'.$class->class_id.'</p><p class="textContent">Software design and development</p><button>-></button></div>';
	    }
        ?>
    </div>
</body>
