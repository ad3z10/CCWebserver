<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartThings Ltd. - Today's Date</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fce4ec; /* Light pink background */
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #f8bbd0; /* Pink shade */
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .content {
            padding: 50px;
        }

        .content h2 {
            font-size: 2em;
            color: #6a1b9a; /* Purple */
        }

        footer {
            background-color: #f8bbd0;
            text-align: center;
            color: white;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>SmartThings Ltd.</h1>
        <p>Your Smart City IoT Partner</p>
    </header>

    <!-- Main Content Section -->
    <div class="content">
        <h2>Today's Date</h2>
        <p>
            <?php
                // Display the current date in a human-readable format
                echo date('l, F j, Y');
            ?>
        </p>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 SmartThings Ltd. | Innovating Cities Together</p>
    </footer>

</body>
</html>
