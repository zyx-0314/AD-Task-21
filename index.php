<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Planner - Select Muscle Group</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Workout Planner</h1>
        <h2>Select Your Muscle Group</h2>
        
        <form action="page/workout.php" method="post">
            <div class="muscle-group">
                <?php
                $muscleGroups = array(
                    "Chest" => "chest",
                    "Back" => "back",
                    "Legs" => "legs",
                    "Arms" => "arms",
                    "Shoulders" => "shoulders",
                    "Core" => "core"
                );
                
                foreach ($muscleGroups as $name => $value) {
                    echo '<button type="submit" name="muscle_group" value="' . $value . '" class="muscle-option">' . $name . '</button>';
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>