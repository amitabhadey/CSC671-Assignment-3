<?php
include 'header.php';
?>


  <div class="container">

      <table class="responsive-table">
        <h3>Transcripts Table</h3>

        <thead>
          <tr>
            <th scope="col" style="text-align:center">Course Number</th>
            <th scope="col" style="text-align:center">Title</th>
          </tr>
        </thead>
        <tbody>

            <?php
            include 'database.php';
            $sql = "SELECT transcripts.cNo, courses.title
                    FROM transcripts
                    INNER JOIN students
                    ON students.id = transcripts.id
                    INNER JOIN courses
                    ON courses.cNo = transcripts.cNo
                    WHERE students.name = 'Cindy' AND
                    (transcripts.grade = 'A' OR transcripts.grade = 'B')";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["cNo"] . "</td><td>" . $row["title"] . "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>

        </tbody>
      </table>


    </body>
</html>
