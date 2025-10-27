<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    # Declarando una variable en PHP
    $language = "PHP"
    ?>
    <!-- Manera 1: Embebiendo PHP sobre un TAG de HTML -->
    <h1>I love <?= $language ?>🐘</h1>
    <!-- Manera 2: Embebiendo HTML sobre un TAG de PHP -->
    <?= "<h1>I love $language" . "🐘</h1>" ?>
</body>

</html>