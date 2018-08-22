<?php
    session_start();
    $username=$_SESSION["username"];
	echo '<div class="details">'.'You are logged in as '.'<a href="#">'.$username.' '.'</a>'.'<a href="delete_session.php">(Log out) </a></div>';
?>
<html>
    <head>
        <script src="js/jquery.min.js"></script>
        <script src="common.js"></script>
        <title>dashboard</title>
        <style>
            .details{
            float: right;
            padding: 0px;
            margin: 1px;
            }
            body {
            padding: 0 2em;
            font-family: Montserrat, sans-serif;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            color: #444;
            background: #eee;
            }
            h1 {
            font-weight: normal;
            letter-spacing: -1px;
            color: #34495E;
            }
        </style>
    </head>
    <body>
        <h1>Dashboard</h1>
        <button class="details" onclick="location.href = 'list_instructors.php';">List Instructors</button>
        <button class="details" onclick="location.href = 'course_catalog.php';">Course Catalog</button>
        <button class="details" onclick="location.href = 'current_courses.php';">Current Courses</button>
        <button class="details" onclick="location.href = 'list_students.php';">List Students</button>
        <button class="details" onclick="location.href = 'All_probation.php';">List Of Probation Students</button>
        <form action="transcripts.php" method="post">
            <br>
            <h3>Transcripts of a student </h3>
            <br>
            <b>Student ID :<b> <input type="text" name="ID">
            <br>	
            <b>SEMESTER :<b> <input type="number" min="1" max="8" step="1" name="sem">
            <input type="submit" value="submit" name="submit">
        </form>
        <br>
        <br>
        <br>
        <form action="probation.php" method="post">
            <h3>Probation list of a semester </h3>
            <br>
            <b>SEMESTER :<b> <input type="number" min="1" max="8" step="1" name="sem">
            <input type="submit" value="submit" name="submit">
        </form>
        <br>
        <br>
        <br>
        <form action="add_course.php" method="post">
            <h3>Add a course into course catalogue</h3>
            <br>
            <b>Course ID :<b> <input type="text" name="Course_ID">
            <br>
            <b>Course name :<b> <input type="text" name="Title">
            <br>
            <b>Department Name :<b> <input type="text" name="Dept_name">
            <br>
            <b>Credits :<b> <input type="number" name="Credits">
            <br>
            <b>L-T-P :<b> <input type="text" name="LTP">
            <br>
            <b>prerequisite1 :<b> <input type="text" name="prerequisite1">	
            <input type="submit" value="submit" name="submit">
        </form>
        <br>
        <br>
        <br>
        <form action="delete_course.php" method="post">
            <h3>Delete a course from course catalogue</h3>
            <br>
            <b>Course ID :<b> <input type="text" name="Course_ID">
            <br>
            <b>Course name :<b> <input type="text" name="Title">
            <br>
            <b>Department Name :<b> <input type="text" name="Dept_name">
            <br>
            <b>Credits :<b> <input type="number" name="Credits">
            <br>
            <b>L-T-P :<b> <input type="text" name="LTP">
            <br>
            <b>prerequisite1 :<b> <input type="text" name="prerequisite1">	
            <input type="submit" value="submit" name="submit">
        </form>
        <br>
        <br>
        <br>
        <br>        
	</body>
</html>