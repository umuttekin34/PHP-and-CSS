<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="test.css">
		<title></title>
	</head>
	<body>
        <?php
            $cars = array(array("Ford",20, 18),
                         array("BMW", 55, 42),
                         array("Mercedes", 1, 10),
                         array("Lamborghini", 8, 62),
                         array("Toyota", 100, 25));
        
        echo"<table border='1'>";
        for($i=0;$i<4;$i++){
            if($i%2==0){
                echo"<tr class='true'>";
            }
            else{
                 echo"<tr class='false'>";
            }
              for($j=0;$j<3;$j++){
                  echo"<td>".$cars[$i][$j]."</td>";
              }
            echo"</tr>";
        }
        echo"</table>";
        ?>
	</body>
</html>