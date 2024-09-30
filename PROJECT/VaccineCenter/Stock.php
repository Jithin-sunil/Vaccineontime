<?php
include('../Assets/connection/connection.php');
if(isset($_POST["btn_submit"]))
{
	$Stock=$_POST["txt_stockno"];
	$insqry="insert into tbl_stock(stock_quantity,stock_date,hospitalvaccine_id)values('".$Stock."',curdate(),'".$_GET['HVID']."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Stock.php";
	</script>
    <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_stock where stock_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Hospitalvaccine.php";
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
<form name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Stock</td>
      <td><label for="txt_stockno"></label>
      <input type="text" name="txt_stockno" id="txt_stockno"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit">
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>Sl No</td>
      <td>Stock/Quantity</td>
      <td>Date</td>
      <td>Action</td>
    </tr>
    <?php
	$i=0;
$sel="select * from tbl_stock where hospitalvaccine_id='".$_GET['HVID']."'";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		
		?>
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['stock_quantity']?></td>
      <td><?php echo $data['stock_date']?></td>
      <td><a href="Stock.php?delID=<?php echo $data['stock_id']?>">Delete</a>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>