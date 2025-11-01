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
                                                    <p>The FRP Exhaust Fan by Marut Air stands out as a robust solution for industrial air ventilation needs. Engineered with high efficiency, it swiftly eliminates hot air, fumes, and odors, ensuring a safer and more pleasant working atmosphere. Crafted from durable, corrosion-resistant FRP materials, this fan is ideal for challenging industrial environments. Its aerodynamic blade design maximizes airflow while promoting energy efficiency. Easy to install and maintain, it proves cost-effective and dependable for various industries including factories, warehouses, and workshops. Contact us now to inquire about the industrial exhaust fan price.</p>
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
                                                    <p>Benefits of Using Fiberglass Reinforced Plastic (FRP) FRP fans play a crucial role in keeping the air in industrial environments clean and safe for workers. Here is a look at the main benefits of using FRP fans:</p>
                                                    <p><b>Corrosion resistance</b>: FRP fans combine glass fibers and thermoset polymers to produce a higher level of corrosion resistance than present in the individual materials. These fans are comparable to stainless steel fans in terms of resisting chemically corrosive air and perform even better at handling air that is corrosive to certain alloys.</p>
                                                    <p><b>Cost-effectiveness</b>: Compared to stainless steel and exotic metal fans, FRP fans are an effective and affordable alternative. Coupled with the long life of fiberglass, these fans are a worthy long-term investment.</p>
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
                                        <p>Air coolers are highly effective in adding humidity to the air, making them ideal for dry climates and enhancing workplace comfort. Humid air helps alleviate issues such as dry skin, allergies, respiratory problems, and static electricity. In addition to these benefits, combining air coolers with Fiberglass Exhaust Fans ensures optimal air circulation and ventilation. These solutions can be applied across various industries, including manufacturing, warehouses, and workshops.</p>
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
                                        <p>Founded in 2016, our mission has been to deliver the most effective ventilation solutions in a cost-efficient manner. Our team consists of designers, developers, and engineers who create customized solutions tailored to the specific needs of each building.</p>
                                        <p>Marut Air stands out as a leading FRP exhaust fan manufacturer and supplier in India due to its commitment to quality, innovation, and customer satisfaction. We offer highly durable, corrosion-resistant fans that ensure optimal performance in various industrial settings. Our state-of-the-art manufacturing processes, coupled with a skilled team of designers and engineers, allow us to deliver customized solutions tailored to client needs. Competitive pricing and exceptional after-sales support further solidify our position in the market.</p>
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