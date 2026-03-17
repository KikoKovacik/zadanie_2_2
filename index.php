<?php include 'header.php'; ?>

<main>
    <section class="container">
        <h1>Domov</h1> <!-- Hlavný nadpis iba pod headerom -->
    </section>

    <section class="slides-container">
        <div class="slide fade">
            <img src="img/banner1.jpg" alt="Banner 1">
            <div class="slide-text">Prvý nadpis</div>
        </div>
        <div class="slide fade">
            <img src="img/banner2.jpg" alt="Banner 2">
            <div class="slide-text">Druhý nadpis</div>
        </div>
        <div class="slide fade">
            <img src="img/banner3.jpg" alt="Banner 3">
            <div class="slide-text">Tretí nadpis</div>
        </div>

        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <p><strong><em>Elit culpa id mollit irure sit...</em></strong></p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-50">
                <h2>Mollit cupidatat velit quis...</h2>
            </div>
            <div class="col-50">
                <p>Nulla dolore sit esse pariatur culpa...</p>
                <p>Incididunt pariatur ipsum in culpa sit...</p>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>