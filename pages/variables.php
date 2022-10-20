<html>
<head>
</head>
<body>
  <?php
    $givenname = "Mostafa";
    $age = 30;

    echo $givenname. ' is '.$age.' years old.';

    echo "<p>The variables in PHP is case-sensitive means 'givenname', 'Givenname' and 'givenName' are different values.</p></br>";
    $Givenname = "Hanna";
    $givenName = "April";
    $givenname = "Sana";

    echo "<p>The values for the different varaibles of '$Givenname', '$givenName', '$givenname: '</p>";
    echo $Givenname. "</br>";
    echo $givenName. "</br>";
    echo $givenname. "</br>";

    echo "<p> PHP is a loosely typed language, the value of the variable will change the variable data type to the type of value assigned.</br>";

    $firstval = "TAFESA";
    $secondval = 10;
    $temp = $firstval;
    $firstval = $secondval;
    $firstval += 5;
    $secondval = $temp . "- Adelaide City Campus";
    
    echo '$firstval is ' .$firstval;
    echo '</br>$secondval is ' .$secondval. '</br>';

    define("MYTAFE",'TAFESA - TTG Campus');
    const TAX_RATE = 20.5;

    echo '<p>the tax rate is: </p>'.TAX_RATE;

    const TAX_RATE = 3;

    echo '<p>the second value for the constant TAX_RATE is: </p>'.$TAX_RATE;
    echo 'the error sign is due to have 2 values for one constant.'
    
  ?>
</body>
</html>