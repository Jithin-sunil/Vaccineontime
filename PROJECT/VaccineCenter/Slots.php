<?php
session_start();
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$Slot_From=$_POST["txt_slotfrom"];
	$Slot_To=$_POST["txt_slotto"];
	$Count=$_POST["txt_count"];
	$insqry="insert into tbl_slot(slot_from,slot_to,slot_count,center_id)values('".$Slot_From."','".$Slot_To."','".$Count."','".$_SESSION['cid']."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Slots.php";
	</script>
    <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_slot where slot_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Slots.php";
				</script>
                <?php
	}
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Slot From</td>
      <td><label for="txt_slotfrom2"></label>
      <input type="time" name="txt_slotfrom" id="txt_slotfrom2" /></td>
    </tr>
    <tr>
      <td>Slot To</td>
      <td><label for="txt_slotto"></label>
      <input type="time" name="txt_slotto" id="txt_slotto" /></td>
    </tr>
    <tr>
      <td>Count</td>
      <td><label for="txt_count"></label>
      <input type="text" name="txt_count" id="txt_count" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>SLNo</td>
      <td>From</td>
      <td>To</td>
      <td>Count</td>
      <td>Action</td>
    </tr>
    <?php
	$i=0;
	$sel="select * from tbl_slot";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		
		?>
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['slot_from']?></td>
      <td><?php echo $data['slot_to']?></td>
      <td><?php echo $data['slot_count']?></td>
      <td><a href="Slots.php?delID=<?php echo $data['slot_id']?>">Delete</a>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
include('Footer.php');
?>