<div>
  <h2>All Customers</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Fullname</th>
        <th class="text-center">Email</th>
        <th class="text-center">Username</th>
        <th class="text-center">User Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once "connection.php";
      $sql = "SELECT * FROM users WHERE user_type = 'a'";
      $result = $con->query($sql);
      $count = 1;
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row["fullname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
          </tr>
      <?php
          $count++;
        }
      }
      ?>
    </tbody>
  </table>
</div>