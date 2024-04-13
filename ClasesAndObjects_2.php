<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases an objects</title>
</head>
<body>
    <?php
        class Rectangle {
            //variables
            public $height;
            public $width;
            // methods
            public function set_height($height) {
            echo $this->height = $height;
            }
            public function set_width($width) {
            echo $this->width = $width;
            }
        }

        //create new object
        $HEIGHT = new Rectangle();
        //print data 
        $HEIGHT->set_height("189 sm");
        echo "<br/>";
        $HEIGHT->set_width("250 sm");

    ?>
    
</body>
</html>