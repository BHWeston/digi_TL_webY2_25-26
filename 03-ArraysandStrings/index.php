<?php
    // echo("Hello");

    // // Create me a variable which contains a decimal value, output this to the screen with a concatendated message:
    // $dDecimal = 2.75;

    // echo("This is the value I entered".$dDecimal);
    // echo("<br/>");

    // // This is another echo:
    // echo("This is echo #1 $dDecimal");
    // echo("<br/>");

    // // This is another echo:
    // echo('This is echo #2 $dDecimal');


    // Create an indexed array of the following: Apple, Bananas, Cherries:
    $aFruits = ["Apple", "Bananas", "Cherries"];
    // echo($aFruits[0]);
    
    // foreach(array as value) { output }
    foreach($aFruits as $x) {
        echo("$x <br/>");
    }

    // Associative Array:
    $person = [
        "name" => "Barry",
        "age" => 41,
        "city" => "Bristol"
    ];

    echo("The name of the person entered is " .$person["name"]);
    // Remove the dot from the above
    echo("This is the name of the person entered $person[name]");

    // Multi-dimensional:
    $teachers = [
        ["name" => "Jon", "marks" => [85,12,65]],
        ["name" => "Barry", "marks" =>[45,23,11]]
    ];
    echo("<br/><br/>");
    echo($teachers[0]["name"]);
    echo($teachers[0]["marks"]);
    // Echo marks of Jon:

    // Echo our second marks of Barry:
?>