<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php $msg=$_POST['post'];
$to='omansharedbloodbank@gmail.com';
subject='post from a hosptal';
$number=$_POST['Password'];

if ($number==1738)
{
mail ($to,$subject,$msg);
echo 'Your post will be added';
}
else 
{
echo'wrong password';
}
 ?>

</body>

</html>
