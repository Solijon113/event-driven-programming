    <?php
      include('../config/database.php');

    $value = $_POST['search'];

   $sql = "SELECT * FROM t_bookings WHERE (u_first_name LIKE '%$value%' OR u_last_name LIKE '%$value%')";
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
           ?>
           <tr>
                <td style="text-align: center;">
                    <?= $row ['u_first_name'] ?> <?= $row['u_last_name'] ?>
                </td>
                <td style="text-align: center;">
                    <?= $row ['u_cottage_type'] ?>
                </td>
                <td style="text-align: center;">
                    <?= $row ['u_contact'] ?>
                </td>
                <td style="text-align: center;">
                    <?= $row ['u_email'] ?>
                </td>
                <td style="text-align: center;">
                    <?= $row ['u_date_to_use'] ?>
                </td>

                <td class="d-grid">
                <button type="button"
                 class="btn btn-sm btn-block btn-success" 
                 data-bs-toggle="modal" 
                 data-bs-target="#view-details">
                        View
                </button>
                </td>
           </tr>
           <?php
       }
   } else {
       echo "0 results";
   }
   $conn->close();