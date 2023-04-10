<html>
<body>
    
<?php $pi=3.14?>
radius is <?php echo $_GET["radius"]; ?><br>
구의 체적: <?php echo $_GET["radius"]*$_GET["radius"]*$_GET["radius"]*$pi*4/3; ?>
</body>
</html>