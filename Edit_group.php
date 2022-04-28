
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
    <title>GMIS Edit group</title>

    <h1 class = "gmisTitle">GMIS Center</h1>

    <div class="nav" style="float: left"  >
        <ul>
            <li><a href="mainpage.php">HOME</a></li>
            <li><a href="#">CLASS</a></li>
            <li><a href="#">GROUP</a></li>
            <li><a href="MeetingMainPage.php">MEETING</a></li>
        </ul>
    </div>
    <div class = "whitebg" >
        <div class="titlee" style="border:10px">
        <h2>Edit Group Details</h2>
        </div>
        <div class="editg_form">

            <form method="post">
                <table>
                    <tr>
                        <td>GroupID</td>
                        <td><input type="text" id="group_id" name="group_id"></td>
                    </tr>

                    <tr>
                        <td>Group name</td>
                        <td><input type="text" id="group_name" name="group_name"></td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" style="width: 80px; height: 50px;margin-top: 20px;margin-left: 80px " onclick="location.href = ''">SAVE</button>
                        </td>
                    </tr>

                </table>
            </form>

        </div>
    </div>
</body>
</html>