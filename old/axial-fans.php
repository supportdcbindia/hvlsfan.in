<?php include("header.php"); ?>
<div class="bannerSec">
    <div class="bannerSecImg">
        <img src="img/product/axial-fans/axial-fans.webp" alt="" class="DeskNone">
        <img src="img/ProMobBanner/axial-fans-mob.webp" alt="" class="MoNone">

    </div>
</div>
<div class="OurProductDetailsMain">
    <div class="ProTabingWrapper">
        <div class="ProTabingSec">
            <div class="tabingWrapper">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description-tab-pane" role="tab" aria-controls="Description-tab-pane" aria-selected="true">Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-Application-tab" data-bs-toggle="tab" href="#Key-Application-tab-pane" role="tab" aria-controls="Application-tab-pane" aria-selected="false">Application</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-Dimensions-tab" data-bs-toggle="tab" href="#Key-Dimensions-tab-pane" role="tab" aria-controls="Dimensions-tab-pane" aria-selected="false">Dimensions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-TechnicalSpecification-tab" data-bs-toggle="tab" href="#Key-TechnicalSpecification-tab-pane" role="tab" aria-controls="TechnicalSpecification-tab-pane" aria-selected="false">Technical Specification</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Description-tab-pane" role="tabpanel" aria-labelledby="Description-tab">
                        <section class="OurProductDetailsSec ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="OurProductDetailsContent">
                                            <div class="aboutSecTitle">
                                                <h2 class="secTitle">Axial Fans (Smoke Spill Fans)</h2>
                                                <div class="desc">
                                                    <p>Smoke Spill fans, manufactured by Marut Air, a leading Axial Fans Manufacturer in India, are crucial components of smoke exhaust systems in commercial buildings, shopping malls, hospitals, and other large structures. Strategically positioned at ramp openings, these fans efficiently extract smoke and expel it into the environment, ensuring the safety and well-being of occupants during emergencies.</p>
                                                    <p>Our direct-driven, high-performance Axial Flow Fans are engineered for efficient ventilation systems. Available in a wide range of sizes from 315 to 1600 mm diameter, they cater to diverse volumetric flow requirements. The field-adjustable blade pitch allows for optimal system adaptability.</p>
                                                    <p>Designed for both indoor and outdoor applications, our fans offer versatile installation options, including ducted and non-ducted systems. The robust casing ensures durability and longevity.</p>
                                                    <p>Marut Air’s commitment to energy efficiency and noise reduction ensures that our fans deliver superior performance while minimizing operational costs.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="workSec SupplierSec bg-grey ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="workImg">
                                            <img src="./img/product/axial-fans/axial-fans-img.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="workContent">
                                            <div class="aboutSecTitle mb-5">
                                                <h2 class="secTitle">Features</h2>
                                                <ul>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Dual use: For daily ventilation and smoke extraction in case of fire. Symmetrical Aero-Dynamic adjustable blades for maximum efficiency.
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Motors IP55 insulation class H (smoke extract)
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Motors IP55 insulation class F (CO-exhaust), according to EN
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> 60034-5/IEC 85
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Casing manufactured from galvanized steel or mild steel (as per requirement).
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Conforming to EN 12101-3 (300 °C for 120 mins/2hrs)
                                                    </li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Fan size from 315 to 1600 mm diameter.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="Key-Application-tab-pane" role="tabpanel" aria-labelledby="Key-Application-tab">
                        <section class="applicationSec bg-white ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Application </h2>
                                </div>
                                <div class="applicationGrid">
                                    <?php
                                    $nb_elem_per_page = 100;
                                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                    $data = glob("img/product/axial-fans/Application/*.*");
                                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                                    ?>
                                    <?php
                                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                                    ?>
                                        <div class="applicationItem">
                                            <div class="applicationImage">
                                                <img src="<?php echo $p; ?>" alt="">
                                            </div>
                                            <div class="applicationContent">
                                                <h5>
                                                    <?php
                                                    echo str_replace(
                                                        ["img/product/axial-fans/Application/", ".jpg", ".png", ".webp", "-"],
                                                        ["", "", "", "", " "],
                                                        $p
                                                    );
                                                    ?>

                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                </dv>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="Key-Dimensions-tab-pane" role="tabpanel" aria-labelledby="Key-Dimensions-tab">
                        <section class="MountingDetailsSec bg-white ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Dimensions </h2>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="MountingDetailsImg">
                                            <img src="img/product/axial-fans/Dimensions/axial-fans.webp" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="Key-TechnicalSpecification-tab-pane" role="tabpanel" aria-labelledby="Key-TechnicalSpecification-tab">
                        <section class="TechnicalSec ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Technical Data </h2>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <tbody>
                                            <tr>
                                                <th>Model</th>
                                                <th>Wheel Diameter</th>
                                                <th>A</th>
                                                <th>B</th>
                                                <th>Motor Framesize</th>
                                                <th>Model</th>
                                                <th>Wheel Diameter</th>
                                                <th>A</th>
                                                <th>B</th>
                                                <th>Moter Framesize</th>
                                            </tr>
                                            <tr>
                                                <td>MAF-315</td>
                                                <td>315</td>
                                                <td>390</td>
                                                <td>340</td>
                                                <td>70-80</td>
                                                <td rowspan="5">MAF-1120</td>
                                                <td rowspan="5">1120</td>
                                                <td rowspan="5">1238</td>
                                                <td>570</td>
                                                <td>132M</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-355</td>
                                                <td>355</td>
                                                <td>430</td>
                                                <td>340</td>
                                                <td>71-80</td>
                                                <td>700</td>
                                                <td>160L</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-400</td>
                                                <td>400</td>
                                                <td>475</td>
                                                <td>375</td>
                                                <td>90S</td>
                                                <td>760</td>
                                                <td>180L</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MAF-450</td>
                                                <td rowspan="2">450</td>
                                                <td rowspan="2">525</td>
                                                <td>340</td>
                                                <td>71/80</td>
                                                <td>800</td>
                                                <td>200L</td>
                                            </tr>
                                            <tr>
                                                <td>400</td>
                                                <td>90S/90L</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-500</td>
                                                <td>500</td>
                                                <td>591</td>
                                                <td>400</td>
                                                <td>90S/90L</td>
                                                <td rowspan="3">MAF-1250</td>
                                                <td rowspan="3">1250</td>
                                                <td rowspan="3">1370</td>
                                                <td>700</td>
                                                <td>160L</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-560</td>
                                                <td>560</td>
                                                <td>652</td>
                                                <td>400</td>
                                                <td>90S/90L</td>
                                                <td>760</td>
                                                <td>180L</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-630</td>
                                                <td>630</td>
                                                <td>724</td>
                                                <td>465</td>
                                                <td>112M</td>
                                                <td>800</td>
                                                <td>180L</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-710</td>
                                                <td>710</td>
                                                <td>804</td>
                                                <td>465</td>
                                                <td>112M</td>
                                                <td rowspan="3">MAF-1400</td>
                                                <td rowspan="3">1400</td>
                                                <td rowspan="3">1520</td>
                                                <td>800</td>
                                                <td>180L</td>
                                            </tr>
                                            <tr>
                                                <td>MAF-800</td>
                                                <td>800</td>
                                                <td>895</td>
                                                <td>465</td>
                                                <td>112M</td>
                                                <td>800</td>
                                                <td>200L</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>530</td>
                                                <td>1325</td>
                                                <td>960</td>
                                                <td>250L</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MAF-900</td>
                                                <td rowspan="2">900</td>
                                                <td rowspan="2">995</td>
                                                <td>570</td>
                                                <td>132M</td>
                                                <td rowspan="4">MAF-1600</td>
                                                <td rowspan="4">1600</td>
                                                <td rowspan="4">1750</td>
                                                <td>800</td>
                                                <td>200L</td>
                                            </tr>
                                            <tr>
                                                <td>660</td>
                                                <td>160M</td>
                                                <td>960</td>
                                                <td>250L</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MAF-1000</td>
                                                <td rowspan="2">1000</td>
                                                <td rowspan="2">1118</td>
                                                <td>570</td>
                                                <td>132M</td>
                                                <td>800</td>
                                                <td>200M</td>
                                            </tr>
                                            <tr>
                                                <td>700</td>
                                                <td>160M</td>
                                                <td>1220</td>
                                                <td>315M</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>