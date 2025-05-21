<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../page/assets/css/style.css"> 
</head>
<body>
    <div class="card" id="c2">
        <?php
            $name = "PSYLOCKE";
            $description = "Psylocke, also known as Elizabeth Braddock, She is known for her skill with a psionic blade and her transformation into a Japanese ninja-like character after a body swap.";
            $additionalInfo = "HP: 250 | Role: Duelist";
        ?>
        <div class="card-header"><?php echo $name; ?></div>
        <div class="card-image-container">
            <img class="card-image" src="../page/assets/img/Psylocke.png" alt="Psylocke">
        </div>
        <div class="inner-box"><?php echo $additionalInfo; ?></div>
        <div class="card-description"><?php echo $description; ?></div>
    </div>

    <div class="Button">
        <button class="button" onclick="location.href='../index.php';">Previous Card</button>
    </div>
</body>
</html>