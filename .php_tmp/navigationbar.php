<header>
    <div class="nav-container">
        <nav>
            <div class="logo-container">
                <a href="/index.php">
                    <img class="navbar-logo" src="/page/assets/img/marvel_rivals_logo.png" alt=""Marvel Rivals Logo">
                </a>
            </div>
            <ul>
                <?php foreach ($navLinks as $name => $url): ?>
                <li><a href="<?php  echo $url; ?>"><?php echo $name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>