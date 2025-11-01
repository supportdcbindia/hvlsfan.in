<?php include("header.php"); ?>

<div class="MainInnerPageSec">
    <div class="breadCrumsWrapper">
        <div class="container">
            <div class="breadCrums justify-content-center pb-0">
                <div class="Title text-center mb-0">
                    <h2>Streamlining <br> success stories</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="MainOurClientSec">
        <section class="OurClientSec pb-100">
            <div class="container">
                <div class="OurClientGrid">
                    <?php
                    $nb_elem_per_page = 100;
                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                    $data = glob("img/clients/*.*");
                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                    ?>
                    <?php
                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                    ?>
                        <div class="OurClientItem">
                            <div class="OurClientImage">
                                <img src="<?php echo $p; ?>" alt="">
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </section>
    </div>
</div>
<?php include("footer.php"); ?>