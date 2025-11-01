<?php include("header.php"); ?>

<div class="bannerSec">
    <div class="bannerSecImg">
        <img src="img/product/frp-exhaust-fan/frp-exhaust-fan.webp" alt="" class="DeskNone">
        <img src="img/ProMobBanner/frp-exhaust-fan-mob.webp" alt="" class="MoNone">
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
                        <a class="nav-link" id="Key-IndustryLeaders-tab" data-bs-toggle="tab" href="#Key-IndustryLeaders-tab-pane" role="tab" aria-controls="Key-IndustryLeaders-tab-pane" aria-selected="false">Clients</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-Application-tab" data-bs-toggle="tab" href="#Key-Application-tab-pane" role="tab" aria-controls="Application-tab-pane" aria-selected="false">Application</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-TechnicalSpecification-tab" data-bs-toggle="tab" href="#Key-TechnicalSpecification-tab-pane" role="tab" aria-controls="TechnicalSpecification-tab-pane" aria-selected="false">Technical Specification</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-Certifications-tab" data-bs-toggle="tab" href="#Key-Certifications-tab-pane" role="tab" aria-controls="Certifications-tab-pane" aria-selected="false">Certifications</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="Key-Installation-tab" data-bs-toggle="tab" href="#Key-Installation-tab-pane" role="tab" aria-controls="Installation-tab-pane" aria-selected="false">Installation</a>
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
                                                <h2 class="secTitle">FRP Exhaust Fan</h2>
                                                <div class="desc">
                                                    <p>Marut Air’s FRP Exhaust Fan is engineered for tough, corrosive environments where reliable ventilation is critical. Built with fiberglass-reinforced plastic, it resists moisture, chemicals, and rust while delivering high airflow to remove heat, fumes, and odors. The aerodynamic blade design enhances efficiency, helping reduce energy use without compromising performance. Easy to install and simple to maintain, it’s a dependable choice for factories, warehouses, workshops, and process areas. Contact our team for current industrial exhaust fan pricing and a configuration matched to your site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="workSec bg-grey ptb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="workImg">
                                            <img src="img/product/frp-exhaust-fan/EXHAUST-FANS1.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="workContent">
                                            <div class="aboutSecTitle mb-5">
                                                <h2 class="secTitle">Benefits of Using Fiberglass Reinforced Plastic</h2>
                                                <div class="desc">
                                                    <p>FRP (Fiberglass Reinforced Plastic) fans help maintain cleaner, safer air in demanding industrial settings by combining strong extraction with robust material performance.</p>
                                                    <p><b>Corrosion resistance</b>: FRP’s composite structure—glass fibers in a thermoset resin—offers excellent resistance to moisture and many corrosive gases and vapors. In specific chemical atmospheres, FRP outperforms common metals and avoids the pitting and rusting that can shorten equipment life.</p>
                                                    <p><b>Cost-effectiveness</b>: Compared with stainless or exotic alloys, FRP provides a lighter, more economical alternative with long service life and low maintenance. The result is a lower total cost of ownership for continuous-duty ventilation systems.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="Key-IndustryLeaders-tab-pane" role="tabpanel" aria-labelledby="Key-IndustryLeaders-tab">
                        <section class="clientSec ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-10 mb-40 fadeLeft">
                                    <h2 class="secTitle">Clients</h2>
                                </div>
                                <div class="OurClientGrid">
                                    <?php
                                    $nb_elem_per_page = 100;
                                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                    $data = glob("img/product/frp-exhaust-fan/clients/*.*");
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

                    <div class="tab-pane fade" id="Key-Application-tab-pane" role="tabpanel" aria-labelledby="Key-Application-tab">
                        <section class="applicationSec bg-white ptb-100">
                            <div class="container">
                                <div class="col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Application of Fiberglass Exhaust Fans</h2>
                                    <div class="desc">
                                        <p>FRP exhaust fans are well suited to facilities that face humidity, chemical vapors, or saline air. They can be paired with evaporative air coolers in dry climates to improve comfort while maintaining air changes. Typical applications include manufacturing halls, warehouses, workshops, food processing, chemical storage, wastewater areas, and other zones where corrosion resistance and consistent ventilation are essential.</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="Key-TechnicalSpecification-tab-pane" role="tabpanel" aria-labelledby="Key-TechnicalSpecification-tab">
                        <section class="TechnicalSec ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Technical Configuration for Marut Air FRP Exhaust Fan </h2>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <tbody>
                                            <tr>
                                                <th width='50%'>Model</th>
                                                <th>MEX-1060</th>
                                            </tr>
                                            <tr>
                                                <td>Diameter blades (mm)</td>
                                                <td>850</td>
                                            </tr>
                                            <tr>
                                                <td>Blades rotational speed (r / m * in)</td>
                                                <td>520</td>
                                            </tr>
                                            <tr>
                                                <td>Air flow (m<sup>3</sup>/h)</td>
                                                <td>32000</td>
                                            </tr>
                                            <tr>
                                                <td>Noise (decibels)</td>
                                                <td>&gt;55</td>
                                            </tr>
                                            <tr>
                                                <td>Import power (W)</td>
                                                <td>550</td>
                                            </tr>
                                            <tr>
                                                <td>Rated Voltage (V)</td>
                                                <td>380</td>
                                            </tr>
                                            <tr>
                                                <td>Heightx Widthx Thickness (mm X mm X mm)</td>
                                                <td>1060 * 1060 * 550</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                    </div>

                    <div class="tab-pane fade" id="Key-Certifications-tab-pane" role="tabpanel" aria-labelledby="Key-Certifications-tab">
                        <section class="CertificationsSec bg-white ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Our Certifications </h2>
                                </div>

                                <div class="CertificationsGrid">
                                    <?php
                                    $nb_elem_per_page = 100;
                                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                    $data = glob("img/product/frp-exhaust-fan/Certifications/*.*");
                                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                                    ?>
                                    <?php
                                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                                    ?>

                                        <div class="CertificationsItem">
                                            <div class="CertificationsImage">
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

                    <div class="tab-pane fade" id="Key-Installation-tab-pane" role="tabpanel" aria-labelledby="Key-Installation-tab">
                        <section class="InstallationSec ptb-100">
                            <div class="container">
                                <div class="col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">What Makes Us The Top FRP Exhaust Fan manufacturer and Supplier in India </h2>
                                    <div class="desc">
                                        <p>Since 2016, we’ve focused on delivering effective, cost-efficient ventilation tailored to each building’s layout and process needs. Our multidisciplinary team—designers, developers, and engineers—configures solutions that fit your airflow targets, utilities, and safety guidelines.</p>
                                        <p>Marut Air is recognized for dependable FRP exhaust fans that combine corrosion-resistant materials, precise manufacturing, and thorough quality checks. We offer site-specific customization, competitive pricing, responsive lead times, and attentive after-sales support—helping facilities across India achieve reliable, low-maintenance ventilation.</p>
                                    </div>
                                </div>

                                <div class="InstallationGrid">


                                    <?php
                                    $nb_elem_per_page = 100;
                                    $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
                                    $data = glob("img/product/frp-exhaust-fan/Supplier/*.*");
                                    $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
                                    ?>
                                    <?php
                                    foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
                                    ?>
                                        <div class="InstallationItem">
                                            <div class="InstallationImage">
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
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
