<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <header>
        <h1>Snack 1</h1>
    </header>

    <?php 
    $matches = [
        [
           'Lakers',
           'Golden State',
           rand(70, 130),
           rand(70, 130)
        ],
        [
           'Chicago Bulls',
           'Boston Celtics',
           rand(70, 130),
           rand(70, 130)
        ],
        [
           'Cleveland Cavaliers',
           'Detriot Pistons',
           rand(70, 130),
           rand(70, 130)
        ],
    ];
    ?>

    <main>
        <?php 
        for ($i = 0; $i < count($matches); $i++) { ?>
            <div>
                <?php echo $matches[$i][0]; ?> - <?php echo $matches[$i][1]; ?> | <?php echo $matches[$i][2]; ?>-<?php echo $matches[$i][3]; ?> 
            </div>
        <?php } ?>
    </main>
    
</body>
</html>