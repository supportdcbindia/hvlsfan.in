<?php include("header.php"); ?>
<div class="MainInnerPageSec">
    <div class="breadCrumsWrapper">
        <div class="container">
            <div class="breadCrums justify-content-center pb-0">
                <div class="Title mb-0">
                    <h2>Careers</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="CareersFormPage">
        <div class="container">
            <div class="CareersFormWrapper">
                <form class="form-horizontal form7" action="career-action.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    <!-- Form Name -->
                    <!-- Text input-->
                    <div class="form-group has-feedback">

                        <input name="name" id="name" type="text" placeholder="Name" class="form-control">


                    </div>
                    <div class="form-group has-feedback">

                        <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">


                    </div>
                    <div class="form-group has-feedback">

                        <input name="city" id="city" type="text" placeholder="City" class="form-control">


                    </div>
                    <div class="form-group has-feedback">

                        <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15" minlength="10" class="form-control number21">


                    </div>
                    <div class="levv_inn form-group has-feedback">
                        <div class="fileUploadWrapper">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa fa-cloud-upload iclass"></i>Upload Resume
                            </label>
                            <input id="file-upload" class="form-control" name="userFile" type="file">
                        </div>
                    </div>
                    <div class="form-group has-feedback class-feedback">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <select class="form-control" name="type" id="type" style="color:#000;">
                                    <option value="" selected="">Select Position</option>
                                    <option>Sales Engineer</option>
                                    <option>Assistant Sales Manager</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <div class="CaptchaGrid">
                            <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">
                            <img src="captcha.php" style="float:left;margin-top: 5px;margin-bottom: 15px;">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input style="color: #FFF !important; width: 100%;" class="submit" name="submit" type="submit" value="SUBMIT">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>