<?php
$meno      = $_POST['meno']      ?? '';
$email     = $_POST['email']     ?? '';
$krajina   = $_POST['krajina']   ?? '';
$tema      = $_POST['tema']      ?? '';
$sprava    = $_POST['sprava']    ?? '';
$newsletter = isset($_POST['newsletter']) ? 'Áno' : 'Nie';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Správa odoslaná – Cristiano Ronaldo projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="top-navigation">
        <div class="nav-logo">
            <span class="cr7-logo">CR7</span>
            <span class="site-name">Cristiano Ronaldo</span>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Domov</a></li>
            <li><a href="career.html">Klubová kariéra</a></li>
            <li><a href="skills.html">Schopnosti</a></li>
            <li><a href="records.html">Rekordy</a></li>
            <li><a href="contact.html">Kontakt</a></li>
        </ul>
    </nav>

    <main class="result-main">
        <div class="container">
            <section class="result-box">
                <div class="result-icon">✅</div>
                <h1>Správa bola odoslaná</h1>
                <p class="result-message">
                    Ďakujeme, <?php echo htmlspecialchars($meno ?: 'fanúšik'); ?>.
                    Tvoja správa bola úspešne odoslaná a bude spracovaná čo najskôr.
                </p>

                <h2>Rekapitulácia údajov</h2>
                <ul class="result-list">
                    <li><strong>Meno:</strong> <?php echo htmlspecialchars($meno); ?></li>
                    <li><strong>E‑mail:</strong> <?php echo htmlspecialchars($email); ?></li>
                    <li><strong>Krajina:</strong> <?php echo htmlspecialchars($krajina); ?></li>
                    <li><strong>Téma:</strong> <?php echo htmlspecialchars($tema); ?></li>
                    <li><strong>Newsletter:</strong> <?php echo $newsletter; ?></li>
                </ul>

                <h3>Tvoja správa</h3>
                <p class="result-message-text">
                    <?php echo nl2br(htmlspecialchars($sprava)); ?>
                </p>

                <div class="result-actions">
                    <a href="contact.html" class="btn btn-secondary">Poslať ďalšiu správu</a>
                    <a href="index.html" class="btn btn-primary">Späť na domov</a>
                </div>
            </section>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p class="footer-text">© 2026 CR7 History Project – Správa odoslaná.</p>
        </div>
    </footer>
</body>
</html>
