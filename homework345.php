<html>
<body>
    
<?php $pi=3.14?>
radius is <?php echo $_GET["radius"]; ?><br>
height is <?php echo $_GET["height"]; ?><br>
원통의 체적: <?php echo $_GET["radius"]*$_GET["radius"]*$_GET["height"]*$pi; ?>
</body>
</html>