<?php $page_on="Submit Testimonial"?>
<?php include 'header.php'?>
<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="breadcromb-left sc-content">
                    <h3>
                        Refer A Friend
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-details-wrapper">
    <div class="container">
        <div class="service-details-tabs">
            <div class="">
                <div id="menu1" class="tab-pane fade active in">
                    <div class="row">
                        <div class="tabs-content-right sc-content sub-testimonial-sec-cls">
                            <div class="col-md-12">
                                <form action="ref-submit.php" method="POST" name="frm_req" id="frm_req_id">
                                    <div class="form-group">
                                        <input class="form-control" name="fname" id="fname" type="text"
                                            placeholder="First Name" required />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="textfield2" id="textfield2" type="text"
                                            placeholder="Last Name" required />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="textfield3" id="textfield3" type="email"
                                            placeholder="E-mail Address" required />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="textfield4" id="textfield4" type="text"
                                            placeholder="Phone Number" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="textfield5" id="textfield5" cols="62"
                                            rows="2" placeholder="Message" required></textarea>
                                    </div>
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
                                            St Joseph Manor will not contact you or share your contact information with
                                            anyone.
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
                if (result === "Refer a Friend Request Has Been Submitted") {
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