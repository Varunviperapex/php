<?php
$file_name = $_FILES['user_file']['name'];
$file_source = $_FILES['user_file']['tmp_name'];
$file_name = $_FILES['user_file'] ['size'];
$file_target_location = "upload/".$file_name;

$file_upload_status = move_uploaded_file($file_source,$file_target_location);

if($file_upload_status == true)
{
	echo "Congratulations. FIle Uploaded to: $file_target_location";
}
else
{
	echo "Sorry. File Uploading failed!";
	print_r(error_get_last());
}
?>