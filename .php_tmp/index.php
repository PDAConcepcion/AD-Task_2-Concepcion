<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./page/assets/css/style.css">
</head>
<body>
    <div class="card" id="c1">
        <?php
            $name = "EMMA FROST";
            $description = "Emma Frost, also known as the White Queen, She is a mutant with the ability to turn her body into diamond form, providing her with immense strength and durability.";
            $additionalInfo = "HP: 550 | Role: Vanguard";
        ?>
        <div class="card-header"><?php echo $name; ?></div>
        <div class="card-image-container">
            <img class="card-image" src="/page/assets/img/Emma Frost.png" alt="Emma Frost">
        </div>
        <div class="inner-box"><?php echo $additionalInfo; ?></div>
        <div class="card-description"><?php echo $description; ?></div>
    </div>

    <div class="Button">
        <button class="button" onclick="location.href='page/page2.php';">Next Card</button>
    </div>
</body>
</html>