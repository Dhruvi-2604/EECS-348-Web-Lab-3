<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table</title>
</head>
<body>
  <h2>Generate Multiplication Table</h2>
  <form method="GET">
    Rows: <input type="number" name="rows" required><br>
    Columns: <input type="number" name="cols" required><br>
    <input type="submit" value="Generate">
  </form>

  <?php
  if (isset($_GET['rows']) && isset($_GET['cols'])) {
    $rows = intval($_GET['rows']);
    $cols = intval($_GET['cols']);

    echo "<table border='1' cellpadding='5'>";
    for ($i = 1; $i <= $rows; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $cols; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>
</body>
</html>
