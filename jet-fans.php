<?php include("header.php"); ?>
<div class="bannerSec">
    <div class="bannerSecImg">
        <img src="img/product/jet-fans/jet-fans.webp" alt="" class="DeskNone">
        <img src="img/ProMobBanner/jet-fans-mob.webp" alt="" class="MoNone">
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
                                                <h2 class="secTitle">Jet Fans</h2>
                                                <div class="desc">
                                                    <p>Jet fans are a proven pollution-control and ventilation solution that induce airflow toward a common exhaust point using directional thrust. Widely adopted in parking garages worldwide, they are a cost-effective alternative to traditional, fully ducted systems.</p>
                                                    <p>Because jet fans do not require extensive ductwork, they reduce material and installation costs, free up headroom, simplify coordination, and improve service access and maintenance.</p>
                                                    <p>For reliable, high-efficiency jet fans in India, choose Marut Air—a leading manufacturer of jet fan systems.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 mt-40">
                                        <div class="OurProductDetailsContent">
                                            <div class="aboutSecTitle">
                                                <h2 class="secTitle">Redefining Air Circulation with Marut Air</h2>
                                                <div class="desc">
                                                    <p>Marut Air’s jet fans optimize airflow for cleaner, safer enclosed spaces. As a leading Jet Fans Manufacturer in India, we design for high thrust with low sound levels, streamlined installation, and dependable life-cycle performance. Contact us to explore the best configuration for your project.</p>
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
                                            <img src="./img/product/jet-fans/description.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="workContent">
                                            <div class="aboutSecTitle mb-5">
                                                <h2 class="secTitle">Features</h2>
                                                <ul>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Dual use: daily ventilation and smoke extraction in case of fire (300&nbsp;°C / 120&nbsp;min).</li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Symmetrical aerodynamic blades for high thrust with low sound.</li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Motors IP55; insulation Class H (smoke extract) / Class F (CO-exhaust) per EN&nbsp;60034-5 / IEC&nbsp;85.</li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Galvanized steel casing.</li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Conforms to EN&nbsp;12101-3 (300&nbsp;°C for 120&nbsp;min / 2&nbsp;hrs).</li>
                                                    <li><b><i class="fa-regular fa-chevrons-right"></i></b> Fan sizes: 315, 355, 400&nbsp;mm diameter.</li>
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
                                    $data = glob("img/product/jet-fans/application/*.*");
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
                                                        ["img/product/jet-fans/application/", ".jpg", ".png", ".webp", "-"],
                                                        ["", "", "", "", " "],
                                                        $p
                                                    );
                                                    ?>
                                                </h5>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="Key-Dimensions-tab-pane" role="tabpanel" aria-labelledby="Key-Dimensions-tab">
                        <section class="MountingDetailsSec bg-white ptb-100">
                            <div class="container">
                                <div class="hm-productslider-top col-lg-12 mb-40 fadeLeft">
                                    <h2 class="secTitle">Dimensions </h2>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="MountingDetailsImg">
                                            <img src="img/product/jet-fans/Dimension/jet-fans-1.webp" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="MountingDetailsImg">
                                            <img src="img/product/jet-fans/Dimension/jet-fans-2.webp" alt="">
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
                                                <th>Jet Fan Model</th>
                                                <th>Mode</th>
                                                <th>Air Volume</th>
                                                <th>Thrust</th>
                                                <th>Noise Level</th>
                                                <th>Motor</th>
                                                <th>Motor Pole</th>
                                                <th>Motor Protection</th>
                                                <th>Phase</th>
                                                <th>Insulation</th>
                                                <th>Weight (Kg)</th>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>CMH</td>
                                                <td>N</td>
                                                <td>dB(A) @ 3m</td>
                                                <td>(kW)</td>
                                                <td>Nos.</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>Kg</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MJT-315UD</td>
                                                <td>Normal</td>
                                                <td>2325</td>
                                                <td>6.5</td>
                                                <td>50</td>
                                                <td>0.18</td>
                                                <td>4</td>
                                                <td rowspan="2">IP55</td>
                                                <td rowspan="2">3</td>
                                                <td rowspan="2">H</td>
                                                <td rowspan="2">60</td>
                                            </tr>
                                            <tr>
                                                <td>Fire</td>
                                                <td>4650</td>
                                                <td>25</td>
                                                <td>64</td>
                                                <td>0.75</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MJT-355UD</td>
                                                <td>Normal</td>
                                                <td>3500</td>
                                                <td>11</td>
                                                <td>52</td>
                                                <td>0.37</td>
                                                <td>4</td>
                                                <td rowspan="2">IP55</td>
                                                <td rowspan="2">3</td>
                                                <td rowspan="2">H</td>
                                                <td rowspan="2">75</td>
                                            </tr>
                                            <tr>
                                                <td>Fire</td>
                                                <td>7000</td>
                                                <td>45</td>
                                                <td>65</td>
                                                <td>1.50</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MJT-400UD</td>
                                                <td>Normal</td>
                                                <td>5250</td>
                                                <td>20</td>
                                                <td>54</td>
                                                <td>0.40</td>
                                                <td>4</td>
                                                <td rowspan="2">IP55</td>
                                                <td rowspan="2">3</td>
                                                <td rowspan="2">H</td>
                                                <td rowspan="2">90</td>
                                            </tr>
                                            <tr>
                                                <td>Fire</td>
                                                <td>10500</td>
                                                <td>80</td>
                                                <td>68</td>
                                                <td>2.20</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">MJT-450UD</td>
                                                <td>Normal</td>
                                                <td>6750</td>
                                                <td>26</td>
                                                <td>55</td>
                                                <td>0.55</td>
                                                <td>4</td>
                                                <td rowspan="2">IP55</td>
                                                <td rowspan="2">3</td>
                                                <td rowspan="2">H</td>
                                                <td rowspan="2">100</td>
                                            </tr>
                                            <tr>
                                                <td>Fire</td>
                                                <td>13500</td>
                                                <td>104</td>
                                                <td>69</td>
                                                <td>3.70</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                        <section class="TechnicalSec bg-grey ptb-100">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <tbody>
                                            <tr>
                                                <th>Model</th>
                                                <th>A</th>
                                                <th>B</th>
                                                <th>C</th>
                                                <th>D</th>
                                                <th>E</th>
                                                <th>F</th>
                                                <th>G</th>
                                                <th>H</th>
                                                <th>I</th>
                                            </tr>
                                            <tr>
                                                <td>MJT-315</td>
                                                <td>320</td>
                                                <td>420</td>
                                                <td>340</td>
                                                <td>290</td>
                                                <td>630</td>
                                                <td>1600</td>
                                                <td>270</td>
                                                <td>320</td>
                                                <td>214</td>
                                            </tr>
                                            <tr>
                                                <td>MJT-355</td>
                                                <td>360</td>
                                                <td>460</td>
                                                <td>400</td>
                                                <td>350</td>
                                                <td>700</td>
                                                <td>1800</td>
                                                <td>300</td>
                                                <td>350</td>
                                                <td>234</td>
                                            </tr>
                                            <tr>
                                                <td>MJT-400</td>
                                                <td>405</td>
                                                <td>505</td>
                                                <td>440</td>
                                                <td>390</td>
                                                <td>800</td>
                                                <td>2040</td>
                                                <td>330</td>
                                                <td>380</td>
                                                <td>256</td>
                                            </tr>
                                            <tr>
                                                <td>MJT-450</td>
                                                <td>455</td>
                                                <td>555</td>
                                                <td>470</td>
                                                <td>420</td>
                                                <td>900</td>
                                                <td>2270</td>
                                                <td>350</td>
                                                <td>400</td>
                                                <td>262</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                        <section class="TechnicalSec ptb-100">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">Distance From Nozzle (m)</th>
                                                <th>4</th>
                                                <th>8</th>
                                                <th>12</th>
                                                <th>16</th>
                                                <th>20</th>
                                                <th>24</th>
                                                <th>28</th>
                                                <th>32</th>
                                                <th>36</th>
                                                <th>40</th>
                                                <th>44</th>
                                                <th>50</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Flow Width (m)</td>
                                                <td>1.6</td>
                                                <td>3.3</td>
                                                <td>4.9</td>
                                                <td>6.7</td>
                                                <td>8.4</td>
                                                <td>10.0</td>
                                                <td>11.8</td>
                                                <td>13.5</td>
                                                <td>15.2</td>
                                                <td>17.0</td>
                                                <td>18.5</td>
                                                <td>20.8</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">Center Line Velocity (m/s)</td>
                                                <td>MJT-355</td>
                                                <td>4.4</td>
                                                <td>2.4</td>
                                                <td>1.6</td>
                                                <td>1.4</td>
                                                <td>1.2</td>
                                                <td>1.0</td>
                                                <td>0.5</td>
                                                <td>0.25</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>MJT-400</td>
                                                <td>5.3</td>
                                                <td>2.9</td>
                                                <td>2.0</td>
                                                <td>1.5</td>
                                                <td>1.2</td>
                                                <td>1.0</td>
                                                <td>0.9</td>
                                                <td>0.65</td>
                                                <td>0.45</td>
                                                <td>0.26</td>
                                                <td>0.12</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>MJT-450</td>
                                                <td>6.5</td>
                                                <td>4.5</td>
                                                <td>3.0</td>
                                                <td>2.4</td>
                                                <td>2.0</td>
                                                <td>1.8</td>
                                                <td>1.4</td>
                                                <td>1.2</td>
                                                <td>1.0</td>
                                                <td>0.8</td>
                                                <td>0.6</td>
                                                <td>0.2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                    </div> <!-- /tab-pane Technical -->
                </div> <!-- /tab-content -->
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
