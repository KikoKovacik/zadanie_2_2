<?php include 'header.php'; ?>
<main>
    <section class="banner">
        <div class="container text-white"><h1>Portfólio</h1></div>
    </section>
    <section class="container">
        <?php
        $projekty = [
            "Web stránka 1", "Web stránka 2", "Web stránka 3", "Web stránka 4",
            "Web stránka 5", "Web stránka 6", "Web stránka 7", "Web stránka 8"
        ];
        foreach(array_chunk($projekty, 4) as $riadok) {
            echo '<div class="row">';
            foreach($riadok as $index => $projekt) {
                $id = array_search($projekt, $projekty)+1;
                echo '<div class="col-25 portfolio text-white text-center" id="portfolio-'.$id.'">'.$projekt.'</div>';
            }
            echo '</div>';
        }
        ?>
    </section>
</main>
<?php include 'footer.php'; ?>