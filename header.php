<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>DB Assignment 3 | Amitabha Dey</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="queries">
         <a href="index.php" class="btn btn-dark btn-lg active" role="button" style="margin-top:50px; text-align:center;">Home</a>
      </div>
      <h2>CSC 671 Assignment 3 - Amitabha Dey</h2>
      <div class="queries">
         <a href="q0.php" class="btn btn-success btn-lg active" role="button" style="margin-bottom:10px;">Display all tables - Students, Courses, Transcripts</a>
         <a href="q1.php" class="btn btn-success btn-lg active" role="button" style="margin-bottom:10px;">List all students (ids and names) in CS department</a>
         <a href="q2.php" class="btn btn-success btn-lg active" role="button" style="margin-bottom:10px;">List the IDs of students who have taken AI</a>
         <a href="q3.php" class="btn btn-success btn-lg active" role="button" style="margin-bottom:20px;">List all courses (cNos and titles) "Cindy" has taken,and passed with a grade of "A" or "B"</a>
         <form action="header.php" method="get">
            Enter Course Title: <input type="text" name="title">
            <input type="submit" value="Execute Q4">
         </form>
         <?php
            if(isset($_GET["title"])){

                $coursetitle = $_GET["title"];

                #echo $coursetitle;

                include 'database.php';

                echo "<table class='responsive-table'>";
                echo "<h3 style='margin-top:50px';>Coursewise Students Table</h3>";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope='col' style='text-align:center'>Student Name</th>";
                echo "<th scope='col' style='text-align:center'>Grade</th>";
                echo "</tr>";
                echo "</thead>";

                $sql = "SELECT s.name, t.grade
                FROM transcripts as t, students as s
                WHERE t.id = s.id AND t.cNo IN (SELECT cNo
                                          FROM courses
                                          WHERE title = '$coursetitle')";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {


                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["grade"] . "</td></tr>";
                }
                echo "</table>";
                } else { echo "0 results"; }
                $conn->close();
            }
            ?>
      </div>
