<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="banner">
            <div class="container text-white">
                <h1>Kontakt</h1>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-100 text-center">
                    <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui.</em></strong></p>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-50">
                    <h3>Máte otázky?</h3>
                    <p>Incididunt mollit quis eiusmod tempor voluptate duis eu enim amet excepteur cupidatat magna velit.</p>
                    <p>Velit id ad laborum velit commodo.</p>
                </div>
                <div class="col-50 text-right">
                    <h3>Napíšte nám</h3>
                    <form id="contact" action="thankyou.php">
                        <input type="text" placeholder="Vaše meno" id="meno" required><br>
                        <input type="email" placeholder="Váš email" id="email" required><br>
                        <textarea placeholder="Vaša správa" id="sprava"></textarea><br>
                        <input type="checkbox" required> <label>Súhlasím so spracovaním osobných údajov.</label><br>
                        <input type="submit" value="Odoslať">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="js/menu.js"></script>
</body>
</html>