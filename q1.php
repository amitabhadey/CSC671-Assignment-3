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
            $sql = "SELECT id, name, dept FROM students WHERE dept='CS'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
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


    </body>
</html>
