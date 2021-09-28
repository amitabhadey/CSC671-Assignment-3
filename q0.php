<?php
include 'header.php';
?>
      <div class="container">
         <table class="responsive-table">
            <h3>Students Table</h3>
            <thead>
               <tr>
                  <th scope="col" style="text-align:center">ID</th>
                  <th scope="col" style="text-align:center">Name</th>
                  <th scope="col" style="text-align:center">Department</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  include 'database.php';

                  $sql = "SELECT id, name, dept FROM students";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
                  . $row["dept"]. "</td></tr>";
                  }
                  echo "</table>";
                  } else { echo "0 results"; }
                  $conn->close();
                  ?>
            </tbody>
         </table>
         <table class="responsive-table">
            <h3>Courses Table</h3>
            <thead>
               <tr>
                  <th scope="col" style="text-align:center">Course Number</th>
                  <th scope="col" style="text-align:center">Title</th>
                  <th scope="col" style="text-align:center">Credits</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  include 'database.php';

                  $sql = "SELECT cNo, title, credits FROM courses";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["cNo"]. "</td><td>" . $row["title"] . "</td><td>"
                  . $row["credits"]. "</td></tr>";
                  }
                  echo "</table>";
                  } else { echo "0 results"; }
                  $conn->close();
                  ?>
            </tbody>
         </table>
         <table class="responsive-table">
            <h3>Transcripts Table</h3>
            <thead>
               <tr>
                  <th scope="col" style="text-align:center">Student ID</th>
                  <th scope="col" style="text-align:center">Course Number</th>
                  <th scope="col" style="text-align:center">Grade</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  include 'database.php';

                  $sql = "SELECT id, cNo, grade FROM transcripts";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["id"]. "</td><td>" . $row["cNo"] . "</td><td>"
                  . $row["grade"]. "</td></tr>";
                  }
                  echo "</table>";
                  } else { echo "0 results"; }
                  $conn->close();
                  ?>
            </tbody>
         </table>
      </div>
      <?php
         if(isset($_POST['Q0'])){
             echo "Hello Everyone!";
         }

         ?>
   </body>
</html>
