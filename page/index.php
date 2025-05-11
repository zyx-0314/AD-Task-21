<?php
// Define all equipment data
$equipment_data = [
    'chest' => [
        'Dumbbells',
        'Chest Press Machine',
        'Pec Deck Machine'
    ],
    'back' => [
        'Pull-up Bar',
        'Lat Pulldown Machine',
        'Seated Row Machine'
    ],
    'legs' => [
        'Squat Rack',
        'Leg Press Machine',
        'Leg Curl Machine'
    ],
    'shoulders' => [
        'Shoulder Press Machine',
        'Lateral Raise Machine',
        'Face Pull Machine'
    ],
    'arms' => [
        'Preacher Curl Bench',
        'Triceps Rope Attachment',
        'EZ Curl Bar'
    ],
    'core' => [
        'Ab Bench',
        'Cable Machine',
        'Hanging Leg Raise Station'
    ]
];

// Get and validate muscle parameter
$muscle = $_GET['muscle'] ?? '';
$muscle = strtolower(trim($muscle));

if (!array_key_exists($muscle, $equipment_data)) {
    $muscle = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recommended Equipment</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Recommended Equipment</h1>
            <a href="index.php" class="back-button">← Back to Muscle Groups</a>
        </header>

        <div class="equipment-list">
            <?php if ($muscle): ?>
                <h2><?php echo ucfirst($muscle); ?> Equipment</h2>
                <ul>
                    <?php foreach ($equipment_data[$muscle] as $item): ?>
                        <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No muscle group selected or invalid selection.</p>
                <p>Please go back and select a valid muscle group.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>