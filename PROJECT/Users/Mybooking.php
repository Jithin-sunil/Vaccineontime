<?php

include('../Assets/connection/connection.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Booking</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #ece9e6, #ffffff);
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h3 {
      margin: 20px 0;
      font-size: 1.5rem;
      color: #333;
      text-align: center;
      font-weight: 600;
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 20px;
    }

    .booking-table {
      width: 100%;
      min-width: 800px;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .booking-table thead {
      background-color: #008b8b;
      color: #fff;
    }

    .booking-table th, .booking-table td {
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .booking-table th {
      font-weight: bold;
    }

    .booking-table tr {
      transition: background-color 0.3s ease;
    }

    .booking-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .booking-table tr:hover {
      background-color: #e7f3ff;
    }

    .booking-table td a {
      color: #007bff;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .booking-table td a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Your Booking Details</h3>
    <div class="table-responsive">
      <table class="booking-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>Date</th>
            <th>Slot Number</th>
            <th>Slot Time</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sel = "SELECT * FROM tbl_booking b 
                  INNER JOIN tbl_hospitalvaccine h ON h.hospitalvaccine_id = b.hospitalvaccine_id 
                  INNER JOIN tbl_slot s ON b.slot_id = s.slot_id 
                  WHERE b.user_id = '".$_SESSION['uid']."' AND booking_status > 0";
          $res = $con->query($sel);
          $i = 0;
          while ($row = $res->fetch_assoc()) {
              $i++;
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['booking_date']; ?></td>
                <td><?php echo $row['booking_slot']; ?></td>
                <td><?php echo $row['slot_from'] . ' - ' . $row['slot_to']; ?></td>
                <td>
                  <?php
                  if ($row['booking_status'] == 1) {
                      echo "Payment Pending";
                  } else if ($row['booking_status'] == 2) {
                      echo "Payment Completed";
                      ?>
                      <a href="PostComplaint.php?PCID=<?php echo $row['center_id']; ?>">Complaint</a>
                      <?php
                  }
                  ?>
                </td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php 
 include('footer.php');
  ?>
</body>
</html>
