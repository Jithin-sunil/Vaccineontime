<?php
include('../Assets/connection/connection.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Document Title</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* Same styles as before */
  </style>
 
  
</head>

<body>
  <div class="container">
    <h3>Book a Slot</h3>
    <form id="form1" name="form1" method="post">
      <table>
        <tr>
          <td>For Date</td>
          <td>
            <input type="date" name="txt_date" id="txt_date" min="<?php echo date('Y-m-d')?>" required />
          </td>
        </tr>
        <tr>
          <td>Slot</td>
          <td>
            <select name="sel_slot" id="sel_slot">
              <option>--SELECT--</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Amount</td>
          <td>
            <?php
            $selat = "SELECT * FROM tbl_hospitalvaccine WHERE hospitalvaccine_id='" . $_GET['hid'] . "'";
            $row = $con->query($selat);
            $data = $row->fetch_assoc();
            $amount = $data['hospitalvaccine_amount']; 
            ?>
            <input type="text" name="txt_amt" value="<?php echo $amount ?>" readonly>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div align="center">
              <input type="submit" name="btn_book" id="btn_book" value="Book" />
            </div>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
    $(document).ready(function(){
      $('#txt_date').change(function(){
        var selectedDate = $(this).val();
        var hospitalVaccineId = '<?php echo $_GET["hid"]; ?>'; // Passing hospitalvaccine_id through GET
        if(selectedDate != "") {
          $.ajax({
            url: '../Assets/AjaxPages/Slot.php', // PHP file to process the slot availability
            method: 'POST',
            data: {fordate: selectedDate, hid: hospitalVaccineId},
            success: function(data){
              $('#sel_slot').html(data); // Update the slot dropdown with available slots
            }
          });
        } else {
          $('#sel_slot').html('<option>--SELECT--</option>'); // Reset if no date is selected
        }
      });
    });
  </script>
  
<?php
include('footer.php');
?> -
