<?php
include('../Assets/connection/connection.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Content=$_POST["txt_content"];
	if($id==""){
	$insqry="insert into tbl_feedback(feedback_content)values('".$Content."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="feedback.php";
	</script>
    <?php
	}
}
else{
		$updQry="update tbl_feedback set feedback_content='".$Content."' where feedback_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated");
	window.location="feedback.php";
	</script>
    <?php
	}
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_feedback where feedback_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="feedback.php";
				</script>
                <?php
	}
}
$feedbackcontent="";
$feedbackid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_feedback where feedback_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$feedbackcontent=$datEdit['feedback_content'];
	$feedbackid=$datEdit['feedback_id'];	
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
      <td>Content</td>
      <td><label for="txt_content"></label>
       <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $feedbackid ?>"/>
      <textarea name="txt_content" id="txt_content" cols="45" rows="5" value="<?php echo $feedbackcontent ?>"></textarea></td>
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
      <td>#</td>
      <td>Content</td>
      <td>Action</td>
    </tr>
    <?php
	$i=0;
	$sel="select * from tbl_feedback";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		?>
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['feedback_content']?></td>
      <td><a href="feedback.php?delID=<?php echo $data['feedback_id']?>">Delete</a> || <a href="feedback.php?eid=<?php echo $data['feedback_id'] ?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>