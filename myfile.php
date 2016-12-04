<html>
    <head>
        <title>PHP Testing Ground</title>
    </head>
    <body>
        <?php
        	$name = $_POST["name"]; //$_POST is to get variables passed from HTTP Post method, $_GET gets variables from the url
        	echo "Hello, " . $name;
        ?>
    </body>
</html>