<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        // Display a dynamic greeting based on the time of day
        date_default_timezone_set('Europe/London'); // Set timezone to London
        $hour = date('H');
        if ($hour < 12) {
            echo "Good Morning | SmartThings Ltd.";
        } elseif ($hour < 18) {
            echo "Good Afternoon | SmartThings Ltd.";
        } else {
            echo "Good Evening | SmartThings Ltd.";
        }
        ?>
    </title>
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fce4ec; /* Light pink background */
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f8bbd0; /* Pink shade */
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .intro {
            text-align: center;
            padding: 20px;
        }

        .intro p {
            font-size: 1.2em;
            color: #555;
        }

        .projects-section {
            background-color: #f3e5f5; /* Light purple for contrast */
            padding: 40px 20px;
            text-align: center;
        }

        .projects-section h2 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #6a1b9a; /* Purple for headings */
        }

        .map {
            margin: 0 auto;
            width: 80%;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>SmartThings Ltd.</h1>
        <p>Your Smart City IoT Partner</p>
    </header>

    <!-- Introduction Section -->
    <section class="intro">
        <p>Welcome to SmartThings Ltd. Today is 
            <?php
            // Display the current date
            echo date('l, F j, Y');
            ?>.
        </p>
        <p>We deliver innovative smart city IoT solutions to public sector clients in the UK, helping cities become more efficient, sustainable, and connected.</p>
    </section>

    <!-- Projects Section with Leaflet Map -->
    <section class="projects-section">
        <h2>Our Demonstrator Projects in Milton Keynes</h2>
        
        <?php
        // Array to store project data
        $projects = [
            ['name' => 'Bouverie House', 'lat' => 52.0406, 'lon' => -0.7554, 'description' => 'IoT Energy Efficiency Project'],
            ['name' => 'Smart Traffic Management', 'lat' => 52.0386, 'lon' => -0.7825, 'description' => 'Traffic control and congestion management'],
            ['name' => 'Public Safety Monitoring', 'lat' => 52.0452, 'lon' => -0.7436, 'description' => 'IoT-based safety monitoring']
        ];
        ?>

        <!-- Leaflet Map -->
        <div id="map" class="map"></div>

        <script>
            // Initialize Leaflet Map
            var map = L.map('map').setView([52.0406, -0.7594], 13); // Milton Keynes center

            // Set up the OpenStreetMap layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add markers dynamically from PHP
            <?php
            foreach ($projects as $project) {
                echo "L.marker([{$project['lat']}, {$project['lon']}]).addTo(map)
                          .bindPopup('{$project['name']} - {$project['description']}');";
            }
            ?>
        </script>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 SmartThings Ltd. | Innovating Cities Together</p>
    </footer>

</body>
</html>
