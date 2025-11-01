<?php include("header.php"); ?>
<div class="MainInnerPageSec Gallery-Sec">
    <div class="breadCrumsWrapper">
        <div class="container">
            <div class="breadCrums justify-content-center pb-0">
                <div class="Title mb-0">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="OurProductDetailsMain">
        <div class="ProTabingWrapper">
            <div class="ProTabingSec GalleryGridWrapper">
                <div class="tabingWrapper">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="exhaust-fans-tab" data-bs-toggle="tab" href="#exhaust-fans-tab-pane" role="tab" aria-controls="exhaust-fans-tab-pane" aria-selected="true">Exhaust Fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hvls-fans-tab" data-bs-toggle="tab" href="#hvls-fans-tab-pane" role="tab" aria-controls="hvls-fans-tab-pane" aria-selected="false">HVLS Fans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="industrial-coolers-tab" data-bs-toggle="tab" href="#industrial-coolers-tab-pane" role="tab" aria-controls="industrial-coolers-tab" aria-selected="false">Industrial Coolers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-fans-tab" data-bs-toggle="tab" href="#mobile-fans-tab-pane" role="tab" aria-controls="mobile-fans-tab" aria-selected="false">Mobile Fans</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="exhaust-fans-tab-pane" role="tabpanel" aria-labelledby="exhaust-fans-tab">
                            <section class="OurProductDetailsSec ptb-100">
                                <div class="container">
                                    <div class="GalleryGrid">
                                        <?php
                                        $data = glob("img/gallery/exhaust-fans/*.*");

                                        foreach ($data as $c) {
                                        ?>
                                            <div class="GalleryItem">
                                                <a href="<?php echo $c; ?>" class="fancybox">
                                                    <img class="w-100 gallery-img" src="<?php echo $c; ?>" />
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="hvls-fans-tab-pane" role="tabpanel" aria-labelledby="hvls-fans-tab">
                            <section class="OurProductDetailsSec ptb-100">
                                <div class="container">
                                    <div class="GalleryGrid">
                                        <?php
                                        $data = glob("img/gallery/hvls-fans/*.*");

                                        foreach ($data as $c) {
                                        ?>
                                            <div class="GalleryItem">
                                                <a href="<?php echo $c; ?>" class="fancybox">
                                                    <img class="w-100 gallery-img" src="<?php echo $c; ?>" />
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="industrial-coolers-tab-pane" role="tabpanel" aria-labelledby="industrial-coolers-tab">
                            <section class="OurProductDetailsSec ptb-100">
                                <div class="container">
                                    <div class="GalleryGrid">
                                        <?php
                                        $data = glob("img/gallery/industrial-cooler/*.*");

                                        foreach ($data as $c) {
                                        ?>
                                            <div class="GalleryItem">
                                                <a href="<?php echo $c; ?>" class="fancybox">
                                                    <img class="w-100 gallery-img" src="<?php echo $c; ?>" />
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="mobile-fans-tab-pane" role="tabpanel" aria-labelledby="mobile-fans-tab">
                            <section class="OurProductDetailsSec ptb-100">
                                <div class="container">
                                    <div class="GalleryGrid">
                                        <?php
                                        $data = glob("img/gallery/mobile-fans/*.*");

                                        foreach ($data as $c) {
                                        ?>
                                            <div class="GalleryItem">
                                                <a href="<?php echo $c; ?>" class="fancybox">
                                                    <img class="w-100 gallery-img" src="<?php echo $c; ?>" />
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>