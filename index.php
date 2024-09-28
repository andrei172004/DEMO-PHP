<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $week = "sunday";
    switch($week){
        case "monday";
        echo "Weekdays";
        break;
        case "tuesday";
        echo "Weekdays";
        break;
        case "wednesday";
        echo "Weekdays";
        break;
        case "thursday";
        echo "Weekdays";
        break;
        case "friday";
        echo "Weekdays";
        break;
        case "saturday";
        echo "Weekends";
        break;
        case "sunday";
        echo "Weekends";
        break;

        default:
            echo "not valid date";
            break;
    }
    
    
    ?>
</body>
</html>