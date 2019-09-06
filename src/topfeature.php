<section id="topFeature">
    <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature">
                    <span class="fa fa-flask"></span>
                    <h3>Emergency Care</h3>
                    <p>In cases of Emergency this is the right place you are looking providing fast test reports and
                        catering to our patients need.</p>
                    <div class="readmore_area">
                        <a data-hover="Read More" href="#"><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature opening-hours">
                    <span class="fa fa-clock-o"></span>
                    <h3>Opening Hours</h3>
                    <p>Open All seven days of the week.</p>
                    <ul class="opening-table">
                        <li>
                            <span>Monday - Friday</span>
                            <div class="value">8.00 - 16.00</div>
                        </li>
                        <li>
                            <span>Saturday</span>
                            <div class="value">9.30 - 15.30</div>
                        </li>
                        <li>
                            <span>Sunday</span>
                            <div class="value">9.30 - 17.00</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="single-top-feature">
                    <span class="fa fa-hospital-o"></span>
                    <h3>Appointment</h3>
                    <p>Now booking an appointment is just a click away so just click on the button below and start
                        booking appointments straight away.</p>
                    <div class="readmore_area">
                        <a data-hover="Appoinment" data-target="#myModal" data-toggle="modal" href="#">
                            <span>Appoinment</span>
                        </a>
                    </div>
                    <!-- start modal window -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog"
                         tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="appointment-area">
                                        <form class="appointment-form" action="appoint.php" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Appointment Date <span
                                                            class="required">*</span>
                                                    </label>
                                                    <input type="Date" class="wp-form-control wpcf7-text"
                                                           placeholder="mm/dd/yy" name="appdate1"
                                                           min="<?= date("Y-m-d"); ?>"
                                                           max="<?= date("Y-m+1-d"); ?>" required>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Appointment Time <span
                                                            class="required">*</span>
                                                    </label>
                                                    <input type="Time" class="wp-form-control wpcf7-text"
                                                           placeholder="hh:mm" name="apptime1" required>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Select Test <span
                                                            class="required">*</span>
                                                    </label>
                                                    <?php $sql = mysqli_query($con, "SELECT * FROM test"); ?>
                                                    <select class="wp-form-control wpcf7-select" name="test" required>
                                                        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                                                            <option
                                                                val="<?= $row['test_name']; ?>"><?= $row['test_name']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="wpcf7-submit button--itzel" type="submit"><i
                                                    class="button__icon fa fa-share"></i><span>Book Appointment</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Doctor Appoinment Details</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="appointment-area">
                                        <form class="appointment-form" action="appointdoc.php" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Appointment Date <span
                                                            class="required">*</span>
                                                    </label>
                                                    <input type="date" class="wp-form-control wpcf7-text"
                                                           placeholder="dd/mm/yy" name="appdate"
                                                           min="<?= date("Y-m-d"); ?>"
                                                           max="<?= date("Y-m+1-d"); ?>" required>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Appointment Time <span
                                                            class="required">*</span>
                                                    </label>
                                                    <input type="Time" class="wp-form-control wpcf7-text"
                                                           placeholder="hh:mm" name="apptime" required>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="control-label">Select Doctor <span
                                                            class="required">*</span>
                                                    </label>
                                                    <?php $sql1 = mysqli_query($con, "SELECT * FROM doctor"); ?>
                                                    <select class="wp-form-control wpcf7-select" name="docname"
                                                            required>
                                                        <?php while ($row1 = mysqli_fetch_array($sql1)) { ?>
                                                            <option
                                                                val="<?= $row1['Name'] ?>"><?= $row1['Name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="wpcf7-submit button--itzel" type="submit"><i
                                                    class="button__icon fa fa-share"></i><span>Book Appointment</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>
        <!-- End Single Top Feature -->
    </div>
</section>