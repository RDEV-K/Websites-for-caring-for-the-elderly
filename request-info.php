<?php $page_on="Request Info"?>
<?php include 'header.php'?>
<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="breadcromb-left sc-content">
                    <h3>
                        Request Info
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
                        <div class="col-sm-12">
                            <div class="col-sm-7 service-left-img sc-content">
                                <img alt="" src="app-assets/img/employment_1.jpg">
                            </div>
                            <div class="col-sm-5">
                                <p>
                                    Thank you for you interest in St. Joseph Manor.
                                </p>
                                <p>
                                    Get more information about St. Joseph Manor HFA.
                                </p>
                                <p>
                                    Please fill out the form below and click "Submit". We will get back to you as soon
                                    as possible.
                                </p>
                                <p>
                                    In the message box please include you Street Address, City, State and Zip Code.
                                </p>
                                <p>
                                    List if you are interested in a Suite (Bed Room, Bath and Living Room)
                                    or
                                    Studio (Bed Room and Bath)
                                </p>
                                <p>
                                    Please make sure that you include the date you would like to move in as well.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tabs-content-right sc-content">

                            <div class="col-sm-12">
                                <p>
                                    <b>
                                        General Information
                                    </b>
                                </p>
                            </div>
                            <form action="request-info-sub.php" method="POST" name="frm_req" id="frm_req_id">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestDateDay" id="RequestDateDay"
                                            placeholder="Date" type="text" onfocus="(this.type='date')" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestFirstName" id="RequestFirstName"
                                            type="text" placeholder="First Name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestLastName" id="RequestLastName"
                                            type="text" placeholder="Last Name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestEmail" id="RequestEmail" type="email"
                                            placeholder="E-mail Address" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestPhone" id="RequestPhone" type="text"
                                            placeholder="Phone Number" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestRelationToResident"
                                            id="RequestRelationToResident" type="text"
                                            placeholder="Relation To Resident" required />
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="RequestAddress" id="RequestAddress"
                                            cols="62" rows="2" placeholder="Address" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestCity" id="RequestCity" type="text"
                                            placeholder="City" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestState" id="RequestState" type="text"
                                            placeholder="State" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestZipcode" id="RequestZipcode"
                                            type="text" placeholder="Zip Code" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestTourDateDay" id="RequestTourDateDay"
                                            placeholder="Tour Date" type="text" onfocus="(this.type='date')"
                                            onblur="(this.type='text')" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestTimeOfTourHour"
                                            id="RequestTimeOfTourHour" placeholder="Time of Tour" type="text"
                                            onfocus="(this.type='time')" required />
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <p>
                                        <b>
                                            Request Response
                                        </b>
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>
                                                <label>
                                                    <input type="checkbox" id="RequestCallBack" name="RequestCallBack">
                                                    Call Back
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <label>
                                                    <input id="RequestConfirmTourSchedule"
                                                        name="RequestConfirmTourSchedule" type="checkbox"> Confirm Tour
                                                    Schedule
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <label>
                                                    <input id="RequestMailInformation" name="RequestMailInformation"
                                                        type="checkbox"> Mail Information
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <p>
                                        <b>
                                            Resident Information
                                        </b>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentName" id="RequestResidentName"
                                            type="text" placeholder="Name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentDateOfBirthDay"
                                            id="RequestResidentDateOfBirthDay" placeholder="Date of Birth" type="text"
                                            onfocus="(this.type='date')" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentAge" id="RequestResidentAge"
                                            type="text" placeholder="Age" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentAddress"
                                            id="RequestResidentAddress" type="text" placeholder="Address" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentCity" id="RequestResidentCity"
                                            type="text" placeholder="City" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentState"
                                            id="RequestResidentState" type="text" placeholder="State" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentZipcode"
                                            id="RequestResidentZipcode" type="text" placeholder="Zip Code" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestResidentPhone"
                                            id="RequestResidentPhone" type="text" placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestMonthlyIncome"
                                            id="RequestMonthlyIncome" type="text" placeholder="Monthly Income"
                                            required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="RequestVeteran" id="RequestVeteran"
                                            type="text" placeholder="Veteran" required />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control" name="RequestResidentLives" minYear="1912"
                                            maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentLives"
                                            required>
                                            <option value="">Resident Lives</option>
                                            <option value="0">Family</option>
                                            <option value="1">Facility</option>
                                            <option value="2">Hospital</option>
                                            <option value="3">Independent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control" name="RequestResidentHas" minYear="1912"
                                            maxYear="2022" dateFormat="DMY" twoDigitDay="1" id="RequestResidentHas"
                                            required>
                                            <option value="">Resident Has</option>
                                            <option value="0">Medicare</option>
                                            <option value="1">Medicaid</option>
                                            <option value="2">Other Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <p>
                                            <b>
                                                Needs assistance with
                                            </b>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestMedication"
                                                            id="RequestMedication" />
                                                        Medication
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestBathing"
                                                            id="RequestBathing" />
                                                        Bathing
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestMeals" id="RequestMeals" />
                                                        Meals
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestTransefering"
                                                            id="RequestTransefering" />
                                                        Transferring
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestContinent"
                                                            id="RequestContinent" />
                                                        Continent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestIncontinent"
                                                            id="RequestIncontinent" />
                                                        Incontinent
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestTransefering" minYear="1912"
                                                            maxYear="2022" dateFormat="DMY" twoDigitDay="1" value="1"
                                                            id="RequestTransefering" /> Transferring
                                                    </label>
                                                </div>
                                            </div> -->
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestWalker"
                                                            id="RequestWalker" />
                                                        Walker
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestCane" id="RequestCane" />
                                                        Cane
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestWheelChair"
                                                            id="RequestWheelChair" />
                                                        Wheel Chair
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestDressing"
                                                            id="RequestDressing" />
                                                        Dressing
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestDiabetic"
                                                            id="RequestDiabetic" />
                                                        Diabetic
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestInsulinDependent"
                                                            id="RequestInsulinDependent" />
                                                        Insulin Dependent
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="General Health Info"
                                            name="RequestGenralHealthInfo" cols="30" rows="6"
                                            id="RequestGenralHealthInfo" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <p>
                                            <b>
                                                How did you hear about us
                                            </b>
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestInternetSearch"
                                                            id="RequestInternetSearch" />
                                                        Internet Search
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestFriend"
                                                            id="RequestFriend" />
                                                        Friend
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestPrint" id="RequestPrint" />
                                                        Print
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="RequestOther" id="RequestOther" />
                                                        Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
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
                if (result === "Request Info Has Been Submitted") {
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