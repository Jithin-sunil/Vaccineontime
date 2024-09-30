<?php
session_start();
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Title=$_POST["txt_title"];
	$Content=$_POST["txt_complaint"];
	if($id==""){
	$insqry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,center_id)values('".$Title."','".$Content."',curdate(),'".$_SESSION['cid']."')";
     if($con->query($insqry))
	{
	echo"inserted";
	header("loaction:PostComplaint.php");
	}
	}
	else{
		$updQry="update tbl_complaint set complaint_title='".$Title."',complaint_content='".$Content."' where complaint_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated")
	window.location="PostComplaint.php"
	</script>
    <?php
	}
	}
}


if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_complaint where complaint_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="PostComplaint.php";
				</script>
                <?php
	}
}
$cpname="";
$cpcontent="";
$cpid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_complaint where complaint_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$cpname=$datEdit['complaint_title'];
	$cpcontent=$datEdit['complaint_content'];
	$cpid=$datEdit['complaint_id'];	
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
  <table width="222" border="1">
    <tr>
      <td width="155">Title</td>
      <td width="51"><label for="txt_title"></label>
      <input type="text" name="txt_title" id="txt_title" value="<?php echo $cpname ?>"/></td>
      </td><input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $cpid ?>"/>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txt_complaint"></label>
      <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"><?php echo $cpcontent?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
 <table width="200" border="1">
    <tr>
      <td>SLNo</td>
      <td>Date</td>
      <td>Title</td>
      <td>Content</td>
      <td>Center</td>
      <td>Reply</td>
      <td>Action</td>
    </tr>
    <tr>
         <?php
	$i=0;
	$sel="select * from tbl_complaint c inner join tbl_center h on c.center_id=h.center_id where c.center_id='".$_SESSION["cid"]."' and user_id=''";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		
		?>
   <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['complaint_date']?></td>
      <td><?php echo $data['complaint_title']?></td>
      <td><?php echo $data['complaint_content']?></td>
      <td><?php echo $data['center_name']?></td>
      <td><?php echo $data['complaint_reply']?></td>
      <td><a href="PostComplaint.php?delID=<?php echo $data['complaint_id']?>">Delete</a> || <a href="PostComplaint.php?eid=<?php echo $data['complaint_id']?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</body>
</html>
<?php
include('Footer.php');
?>