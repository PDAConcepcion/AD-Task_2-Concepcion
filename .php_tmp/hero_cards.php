<!DOCTYPE html>
<html lang="en">

<?php  include '../components/global/head.php' ?>

<body class="hero-cards">

    <?php  include '../components/global/variables.php' ?>
    <?php  include '../components/global/navigationbar.php' ?>
    <?php  include '../utils/filepath.php' ?>

    <section class="card-container">
        <div class="card-box">
            <?php foreach($varcards as $card): ?>
                <div class="card" id="<?php echo $card['card_ID']; ?>">
                    <div class="card-header"><?php  echo $card["name"]; ?></div>
                    <div class="card-image-container">
                        <img class="card-image" src="<?php echo getCardImagePath($card["card_dir"]); ?>" alt="<?php echo $card['card_alt']; ?>">
                    </div>
                    <div class="card-description"><?php  echo $card['description']; ?></div>
                    <div class="additional-info">
                        <p class="hp">HP: <?php  echo $card['additionalInfo']['health']; ?></p>
                        <p class="role">Role: <?php  echo $card['additionalInfo']['role']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php  include '../components/global/footer.php' ?>

</body>

</html>