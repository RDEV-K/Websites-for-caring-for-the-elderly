<?php $page_on="Contact Us"?>
<?php include 'header.php'?>
<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="breadcromb-left sc-content">
                    <h3>
                        Contact Us
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-details-wrapper" style="padding: 70px 0 30px 0;">
    <div class="container">
        <div class="service-details-tabs">
            <div class="">
                <div id="menu1" class="tab-pane fade active in">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-7 service-left-img sc-content">
                                <img alt="" src="app-assets/img/employment_1.jpg">
                            </div>
                            <div class="col-sm-5">
                                <?php include 'adv-page.php'?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-content-right sc-content">
                            <div class="col-md-4">
                                <p>
                                    St. Joseph Manor is a extravagant, residential
                                    Assisted Living community located on Cadieux by I-94. We invite you
                                    to come tour our facility and see the wonderful things we offer to
                                    our residents.
                                </p>

                                <p>
                                    <b>Address:</b>
                                    <br>
                                    St. Joseph Manor
                                    <br />
                                    4800 Cadieux
                                    <br />
                                    Detroit, Michigan 48224
                                </p>
                                <p>
                                    <b>Phone:</b><a href="tel:313-882-3800"><b>313-882-3800</b></a>
                                </p>
                                <p>
                                    <b>Fax:</b><a href="tel:313-882-5940"><b>313-882-5940</b></a>
                                </p>
                                <p>
                                    <b>E-mail: </b><a href="mailto:info@stjosephmanor.com"
                                        class="text"><b>info@stjosephmanor.com</b></a>
                                </p>
                                <p>
                                    <b>Website:</b> <a href="http://www.stjosephmanor.com"
                                        class="text"><b>www.stjosephmanor.com</b></a>
                                </p>
                            </div>
                            <div class="col-md-8">
                                <form action="contact-request.php" method="POST" name="frm_req" id="frm_req_id">
                                    <div class="form-group">
                                        <!-- <label for="fname">
                                            *First name (required):
                                        </label> -->
                                        <input class="form-control" name="fname" id="fname" type="text"
                                            placeholder="First Name" required />
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="textfield">
                                            *&nbsp;Last name (required):
                                        </label> -->
                                        <input class="form-control" name="textfield2" id="textfield2" type="text"
                                            placeholder="Last Name" required />
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="textfield">
                                            *&nbsp;E-mail address (required):
                                        </label> -->
                                        <input class="form-control" name="textfield3" id="textfield3" type="email"
                                            placeholder="E-mail Address" required />
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="textfield">
                                            * Phone number
                                            (required):
                                        </label> -->
                                        <input class="form-control" name="textfield4" id="textfield4" type="text"
                                            placeholder="Phone Number" required />
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="textfield">
                                            *&nbsp;Message (required):
                                        </label> -->
                                        <textarea class="form-control" name="textfield5" id="textfield5" cols="62"
                                            rows="2" placeholder="Message" required></textarea>
                                    </div>
                                    <!-- <p>
                                        Please enter
                                        the numbers and alphabets as you see them.
                                    </p> -->
                                    <!-- <div class="form-group"> -->
                                    <!-- <label for="textfield">
                                            *&nbsp;First name (required)6:
                                        </label> -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group text-center">
                                                <img width="50%"
                                                    src="securimage/securimage_show.php?sid=<?php echo md5(time()) ?>"
                                                    name="siimage" id="siimage" style="width: 130px;" />
                                                <a tabindex="-1" href="#" title="Refresh Image"
                                                    onClick="document.getElementById('siimage').src = 'securimage/securimage_show.php?sid=' + Math.random(); return false">
                                                    <img src="securimage/images/refresh.gif" alt="Reload Image"
                                                        onClick="this.blur()" style="width: 30px;" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" name="codee" type="text"
                                                    placeholder="Enter Code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="contact-sb-btn-cls" type="submit">
                                                SUBMIT
                                            </button>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                    <div id="result-sb"></div>
                                    <p class="text-center">
                                        <b>
                                            By submitting this form,
                                            you permit St Joseph Manor to contact you in
                                            future.
                                        </b>
                                    </p>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container-fluid"> -->
<h2 class="text-center">
    <b> Location/Map</b>
</h2>
<br>
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.052496256356!2d-82.93045328516601!3d42.40532714023531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d5e75d64ccb5%3A0x2ce497f139412b4d!2s4800%20Cadieux%20Rd%2C%20Detroit%2C%20MI%2048224%2C%20USA!5e0!3m2!1sen!2s!4v1608276584541!5m2!1sen!2s"
    width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
    tabindex="0"></iframe>
<!-- </div> -->
<?php include 'footer.php'?>
<script>
$(function() {
    var form = $('#frm_req_id');
    form.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(),
            success: function(result) {
                if (result === "Contact Request Submitted") {
                    $('#result-sb').html(`<p class="form-success-cls">${result}</p>`);
                    $('#frm_req_id')[0].reset();
                } else {
                    $('#result-sb').html(`<p class="form-error-cls">${result}</p>`);
                }
                setTimeout(() => {
                    $('#result-sb').empty();
                }, 4000)
            },
            error: function(errr) {
                $('#result-sb').html(`<p class="form-error-cls">${errr}</p>`);
                setTimeout(() => {
                    $('#result-sb').empty();
                }, 4000)
            }
        });
    });
})
</script>
</body>

</html>