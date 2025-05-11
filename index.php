<!DOCTYPE html>
<html>
<head>
    <title>Gym Equipment Guide</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gym Equipment Guide</h1>
            <p>Select a muscle group to see recommended equipment</p>
        </header>

        <div class="muscle-grid">
            <?php
            $muscles = [
                "Chest" => "chest",
                "Back" => "back",
                "Legs" => "legs",
                "Core" => "core",
                "Shoulders" => "shoulders",
                "Abs" => "abs"
            ];

            foreach ($muscles as $name => $value) {
                echo '<div class="muscle-card">';
                echo '<a href="equipment.php?muscle='.$value.'">';
                echo '<h3>'.$name.'</h3>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>