<!DOCTYPE html>
<html>
<head>
    <title>Gym Equipment Guide</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gym Equipment Guide</h1>
            <p>Select a muscle group to see recommended equipment</p>
        </header>

        <div class="muscle-grid">
            <?php
            // Declarations - muscle groups
            $muscles = [
                "Chest" => "chest",
                "Back" => "back",
                "Legs" => "legs",
                "Arms" => "arms",
                "Shoulders" => "shoulders",
                "Abs" => "abs"
            ];

            // Looping - display muscle options
            foreach ($muscles as $name => $value) {
                echo '<div class="muscle-card">';
                echo '<a href="equipment.php?muscle='.$value.'">';
                echo '<div class="muscle-icon">'.strtoupper(substr($name, 0, 1)).'</div>';
                echo '<h3>'.$name.'</h3>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>