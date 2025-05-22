<!DOCTYPE html>
<html lang="en">

<?php  include '../components/global/head.php' ?>

<body class="hero-cards">

    <?php  include '../components/global/variables.php' ?>
    <?php  include '../components/global/navigationbar.php' ?>

    <?php foreach($varcards as $card): ?>
        <div class="card">
            <div class="card-header"><?php  echo $card['name'] ?></div>
            <div class="card-image-container">
                <img class="card-image" src="<?php  echo $card['card_dir'] ?>" alt="<?php  echo $card['card_alt'] ?>">
            </div>
            <div class="card-description"><?php  echo $card['description'] ?></div>
            <div class="additional-info">
                <p>HP: <?php  echo $card['additionalInfo']['health'] ?></p>
                <p>Role: <?php  echo $card['additionalInfo']['role'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <?php  include '../components/global/footer.php' ?>

</body>

</html>