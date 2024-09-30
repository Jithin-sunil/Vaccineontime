<?php
session_start();
include('../Assets/connection/connection.php');
?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
</head>

<body>

  <table width="200" border="1">
    <tr>
      <td>SLNo</td>
      <td>Date</td>
      <td>Slot Number</td>
      <td>Slot Time</td>
      <td>User</td>
    </tr>
    <?php
    $i = 0;
    $sel = "select * from tbl_booking b inner join tbl_slot s on s.slot_id= b.slot_id inner join tbl_center c on s.center_id=c.center_id inner join tbl_newuser u on b.user_id=u.user_id  where c.center_id='" . $_SESSION['cid'] . "' and booking_status>0";
    $row = $con->query($sel);
    while ($data = $row->fetch_assoc()) {
      $i++;
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $data['booking_date'] ?></td>
        <td><?php echo $data['booking_slot'] ?></td>
        <td><?php echo $data['slot_from'] ?> - <?php echo $data['slot_to'] ?></td>
        <td><?php echo $data['user_name'] ?></td>
        <td><?php
        if ($data['booking_status'] == 1) {

          echo "Payment Pending";
        } else if ($data['booking_status'] == 2) {
          echo "Payment Completed";
          ?>

            <?php
        }
        ?>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
</body>

</html>