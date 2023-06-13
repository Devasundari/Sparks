<!DOCTYPE html>
<html>
<head>
  <title>View All Customers</title>
  <link rel="stylesheet" href="vac.css">
</head>
<body>
  <h2>View All Customers</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>MailId</th>
      <th>Details</th>
    </tr>
    <?php
      // Retrieve customer data from the database and display it in the table
      $connection = mysqli_connect("localhost","root", "", "banking_system_db");
      $query = "SELECT * FROM customers";
      $result = mysqli_query($connection, $query);
      
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['MailId']."</td>";
        echo "<td><a href='view_customer.php?id=".$row['Id']."'>View</a></td>";
        echo "</tr>";
      }
      
      mysqli_close($connection);
    ?>
  </table>
</body>
</html>
