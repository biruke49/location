
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Select File</td>
<td><input type="file" name="f1"></td>
</tr>
<tr>
<td><input type="submit" name="submit1" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>

<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"places");
if(isset($_POST["submit1"]))
{
$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
mysqli_query($conn,"insert into houses (Image_1) values('$image')");
}


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($conn,"select * from houses where HID='21'");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_1'] ).'" height="200" width="200"/>';
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_2'] ).'" height="200" width="200"/>';
     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_3'] ).'" height="200" width="200"/>';
      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_4'] ).'" height="200" width="200"/>';
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_5'] ).'" height="200" width="200"/>';
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image_6'] ).'" height="200" width="200"/>';
    
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   echo "</td>";
   
   
   
   }
   echo "</tr>";
   
   echo "</table>";
  

}





?>




</body>
</html>
