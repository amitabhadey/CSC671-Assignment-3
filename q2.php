<?php
include 'header.php';
?>


  <div class="container">

      <table class="responsive-table">
        <h3>Students Table</h3>

        <thead>
          <tr>
            <th scope="col" style="text-align:center">ID</th>
          </tr>
        </thead>
        <tbody>

            <?php
            include 'database.php';
            $sql = "SELECT transcripts.id FROM transcripts INNER JOIN courses ON courses.Cno = transcripts.cNo WHERE courses.title = 'AI'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"];
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>

        </tbody>
      </table>


    </body>
</html>
