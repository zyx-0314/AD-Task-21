<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Workout Plan</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <?php
        $selectedMuscleGroup = isset($_POST['muscle_group']) ? $_POST['muscle_group'] : 'chest';

        $chestWorkout = array(
            "Bench Press" => "4 sets of 8-12 reps",
            "Incline Dumbbell Press" => "3 sets of 10-12 reps",
            "Chest Fly" => "3 sets of 12-15 reps",
            "Push-ups" => "2 sets to failure"
        );
        
        $backWorkout = array(
            "Pull-ups" => "4 sets to failure",
            "Bent-over Rows" => "3 sets of 8-12 reps",
            "Lat Pulldown" => "3 sets of 10-12 reps",
            "Deadlifts" => "2 sets of 6-8 reps"
        );
        
        $legsWorkout = array(
            "Squats" => "4 sets of 8-12 reps",
            "Lunges" => "3 sets of 10 reps per leg",
            "Leg Press" => "3 sets of 10-12 reps",
            "Calf Raises" => "3 sets of 15-20 reps"
        );
        
        $armsWorkout = array(
            "Bicep Curls" => "3 sets of 10-12 reps",
            "Tricep Dips" => "3 sets to failure",
            "Hammer Curls" => "3 sets of 10-12 reps",
            "Skull Crushers" => "3 sets of 10-12 reps"
        );
        
        $shouldersWorkout = array(
            "Overhead Press" => "4 sets of 8-12 reps",
            "Lateral Raises" => "3 sets of 12-15 reps",
            "Front Raises" => "3 sets of 12-15 reps",
            "Shrugs" => "3 sets of 12-15 reps"
        );
        
        $coreWorkout = array(
            "Plank" => "3 sets of 60 seconds",
            "Russian Twists" => "3 sets of 20 reps",
            "Leg Raises" => "3 sets of 12-15 reps",
            "Crunches" => "3 sets of 15-20 reps"
        );
        
        if ($selectedMuscleGroup == "chest") {
            $workout = $chestWorkout;
            $groupName = "Chest";
        } elseif ($selectedMuscleGroup == "back") {
            $workout = $backWorkout;
            $groupName = "Back";
        } elseif ($selectedMuscleGroup == "legs") {
            $workout = $legsWorkout;
            $groupName = "Legs";
        } elseif ($selectedMuscleGroup == "arms") {
            $workout = $armsWorkout;
            $groupName = "Arms";
        } elseif ($selectedMuscleGroup == "shoulders") {
            $workout = $shouldersWorkout;
            $groupName = "Shoulders";
        } else {
            $workout = $coreWorkout;
            $groupName = "Core";
        }
        ?>
        
        <h1>Your <?php echo $groupName; ?> Workout</h1>
        <p>Here is the workout for <?php echo $groupName; ?>:</p>
        
        <div class="workout-list">
            <?php
            foreach ($workout as $exercise => $sets) {
                echo '<div class="exercise">';
                echo '<span class="exercise-name">' . $exercise . '</span>';
                echo '<span class="exercise-sets">' . $sets . '</span>';
                echo '</div>';
            }
            ?>
        </div>
        
        <a href="../index.php" class="back-btn">Choose Another Muscle Group</a>
    </div>
</body>
</html>