<!DOCTYPE html>
<html>
<head>
    <title>Gym Equipments/Machine</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gym Equipments/Machine</h1>
            <p>Select a muscle group to see recommended equipment</p>
        </header>

        <div class="muscle-grid">
            <?php
            $muscles = [
                "Chest" => "chest",
                "Back" => "back",
                "Legs" => "legs",
                "Shoulders" => "shoulders",
                "Arms" => "arms",
                "Core" => "core"
            ];
            foreach ($muscles as $name => $value) {
                echo '<div class="muscle-card">';
                echo '<a href="/page/equipment.php?muscle=' . $value . '">';
                echo '<h3>'.$name.'</h3>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
