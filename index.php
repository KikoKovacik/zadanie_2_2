<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domov</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="slides-container">
            <div class="slide fade">
                <img src="img/banner1.jpg">
                <div class="slide-text">Prvý nadpis</div>
            </div>
            <div class="slide fade">
                <img src="img/banner2.jpg">
                <div class="slide-text">Druhý nadpis</div>
            </div>
            <div class="slide fade">
                <img src="img/banner3.jpg">
                <div class="slide-text">Tretí nadpis</div>
            </div>
            <a id="prev" class="prev">❮</a>
            <a id="next" class="next">❯</a>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-100 text-center">
                    <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-50">
                    <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
                </div>
                <div class="col-50">
                    <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut...</p>
                    <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do...</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>