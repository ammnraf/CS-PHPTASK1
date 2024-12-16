<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Door Navigation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url('images/grass.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 50px;
        }
        .door {
            display: inline-block;
            padding: 20px 40px;
            margin: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .door:hover {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background on hover */
        }
        img {
            height: 500px; /* Adjust as needed */
            width: 250px;
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Choose a Door</h1>
    <p>Click on a door to explore what lies behind it.</p>

    <?php
    $doors = ['door1.html', 'door2.html', 'door3.html'];

    foreach ($doors as $door) {
        echo "<a href=\"$door\" class=\"door\">";
        echo "<img src=\"images/door.jpg\" alt=\"Door Icon\">";
        echo "</a>";
    }
    ?>
</body>
</html>
