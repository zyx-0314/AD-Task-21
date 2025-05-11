<!DOCTYPE html>
<html>
<head>
    <title>Equipment Recommendations</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Recommended Equipment</h1>
            <a href="index.php" class="back-button">← Back to Muscle Groups</a>
        </header>

        <div class="equipment-list">
            <?php
            $muscle = isset($_GET['muscle']) ? $_GET['muscle'] : '';

            if (empty($muscle)) {
                echo '<p>No muscle group selected. Please go back and select one.</p>';
                echo '<p><a href="index.php">Back to Muscle Groups</a></p>';
                exit; // Stop further execution
            }

            $equipment = [
                "chest" => ["Bench Press", "Dumbbells", "Chest Press Machine", "Pec Deck"],
                "back" => ["Pull-up Bar", "Lat Pulldown", "Seated Row", "Deadlift Platform"],
                "legs" => ["Squat Rack", "Leg Press", "Leg Curl Machine", "Calf Raise"],
                "arms" => ["Preacher Curl Bench", "Triceps Rope", "EZ Curl Bar", "Dip Station"],
                "shoulders" => ["Shoulder Press", "Lateral Raise", "Face Pull", "Shrug Bar"],
                "abs" => ["Ab Bench", "Cable Machine", "Roman Chair", "Hanging Leg Raise"]
            ];

            if (array_key_exists($muscle, $equipment)) {
                echo '<h2>'.ucfirst($muscle).' Equipment</h2>';
                echo '<ul>';
                foreach ($equipment[$muscle] as $item) {
                    echo '<li>'.$item.'</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Invalid muscle selection</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>