<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <title>Objednávka autodílů</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <h1>Objednávka</h1>

    <?php if (isset($_GET['success'])) { ?>
        <div class="success-message">
            ✅ Objednávka byla úspěšně odeslána!
        </div>
        <script>
            setTimeout(() => {
                document.querySelector('.success-message').style.opacity = '0';
            }, 3000);
        </script>
    <?php } ?>

    <form class="box" action="submit_order.php" method="POST">
        <label>Jméno:</label><br>
        <input type="text" name="name" required><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br>

        <label>Telefon:</label><br>
        <input type="text" name="phone" required><br>

        <H3>Vyberte autodíly:</H3><br>


        <div class="autodily-blok">
            <div class="dily-row">
                <div class="nazev-dilu">
                    <input type="checkbox" name="dil[]" value="Brzdové destičky">
                    <span><i class="fas fa-car-crash"></i> Brzdové destičky</span>
                </div>
                <input type="number" name="brzdy_pocet[]" min="1" max="100" value="0">
            </div>

            <div class="dily-row">
                <div class="nazev-dilu">
                    <input type="checkbox" name="dil[]" value="Spojková sada">
                    <span><i class="fas fa-cogs"></i> Spojková sada</span>
                </div>
                <input type="number" name="brzdy_pocet[]" min="1" max="100" value="0">
            </div>

            <div class="dily-row">
                <div class="nazev-dilu">
                    <input type="checkbox" name="dil[]" value="Motorový olej">
                    <span><i class="fas fa-oil-can"></i> Motorový olej</span>
                </div>
                <input type="number" name="brzdy_pocet[]" min="1" max="100" value="0">
            </div>

            <div class="dily-row">
                <div class="nazev-dilu">
                    <input type="checkbox" name="dil[]" value="Brzdová kapalina">
                    <span><i class="fas fa-tint"></i> Brzdová kapalina</span>
                </div>
                <input type="number" name="brzdy_pocet[]" min="1" max="100" value="0">
            </div>
        </div>
        <H2>Datum doručení:</H2><br>
        <input class="kalendar" type="date" name="pickup_date" required><br><br>

        <button class="puls-button">Odeslat objednávku</button>
    </form>
</body>


<script>
    if (window.location.search.includes('success=1')) {
        // Zobraz zprávu (pokud ji máš)
        // setTimeout smaže parametr po 2 vteřinách
        setTimeout(() => {
            const url = new URL(window.location.href);
            url.searchParams.delete('success');
            window.history.replaceState({}, document.title, url.pathname);
        }, 2000);
    }
</script>

</html>