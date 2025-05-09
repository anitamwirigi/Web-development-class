<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Class</title>
</head>

<body>
	<?php
        echo "anita";
        echo "<br>";
        echo "PHP Class";
        echo "<br>";
        echo "MWIRIGI";
        echo "<br>";
        echo "<h2>This is a heading</h2>";
        echo "<br>";
        // PHP CLOSES HERE
        $name    = "Anita";
        $day     = "Friday";
        $_module = "PHP course";
        echo "<br>";
        $string  = "text";
        
        $integer = 1;

        $float   = 19.5;
        var_dump($float);
        echo "<br>";
        $boolean = true;

        $array   = ['html', 'php', 'javascript', 'css'];

        $Null    = null;
        echo "<br>";
        $object = ["name" => "Deepak", "age" => 21, "marks" => 75];
        var_dump($object);
        echo "<br>";

        //GLOBAL SCOPE
        $course = "PHP";
        echo $course;

                     //LOCAL SCOPE
        $number = 7; //OUTSIDE A FUNCTION
        function myTest()
        {
            static $x = 5; //INSIDE A FUNCTION
            global $number;
            echo "<p>Variable x inside function is : $x</p> ";
            echo "<br>";
            echo "<p>Variable x inside function is : $number</p> ";

        }
        myTest();
                   //PREDEFINED VARIABLES
        $GLOBALS;  //Acces Global Variables Inside Functions
        $_SERVER;  //Get server & Request Information
        $_GET;     //Capture Data from URL Query Parameters
        $_POST;    //Capture Data from an HTML Form
        $_REQUEST; //Works With Both GET & POST
        $_FILES;   //Handle File Upload
        $_COOKIE;  //Store & Recieve Cookies
                   // $_SESSION; //Store Data Across Pages
        $_ENV;     // Access Enviroment Variables

        $MODULE = "PHP learning";
        function showSite()
        {
            echo $GLOBALS['MODULE']; //Access globasal variable
        }
        showSite();
        echo "<br>";
        echo "<br>";

        echo $_SERVER['PHP_SELF']; //current file name
        echo "<br>";
        echo "<br>";

        echo $_SERVER['SERVER_NAME']; //domain name
        echo "<br>";
        echo "<br>";

        echo $_SERVER['DOCUMENT_ROOT']; //OUR FILE PATH
    ?>
</body>

</html>
