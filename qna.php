<?php include 'header.php'; ?>
<main>
    <section class="banner">
        <div class="container text-white"><h1>Q&A</h1></div>
    </section>
    <section class="container">
        <?php include 'otazky.php'; ?>
        <?php for ($i = 0; $i < count($otazky); $i++) { ?>
            <div class="accordion">
                <div class="question"><?php echo $otazky[$i]; ?></div>
                <div class="answer"><?php echo $odpovede[$i]; ?></div>
            </div>
        <?php } ?>
    </section>
</main>
<?php include 'footer.php'; ?>
<script src="js/accordion.js"></script>