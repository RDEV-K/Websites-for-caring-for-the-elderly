<script type="text/javascript">
function call_frm_sub() {
    if (document.call_frm.firstname.value == "" || document.getElementById('firstname').value == "First Name") {
        document.call_frm.firstname.focus();
        alert("Please enter the first name");
        return false;
    } else if (document.call_frm.lastname.value == "" || document.getElementById('lastname').value == "Last Name") {
        document.call_frm.lastname.focus();
        alert("Please enter the last name");
        return false;
    } else if (document.call_frm.phone1.value == "" || document.getElementById('phone1').value == "111") {
        document.call_frm.phone1.focus();
        alert("Please enter the phone number");
        return false;
    } else if (document.call_frm.phone2.value == "" || document.getElementById('phone2').value == "111") {
        document.call_frm.phone2.focus();
        alert("Please enter the phone number");
        return false;
    } else if (document.call_frm.phone3.value == "" || document.getElementById('phone3').value == "1111") {
        document.call_frm.phone3.focus();
        alert("Please enter the phone number");
        return false;
    } else {
        document.call_frm.submit();
    }
}

function blank_val(id) {
    if (document.getElementById('firstname').value == "First Name" && id == "firstname") {
        document.getElementById('firstname').value = "";
    }
    if (document.getElementById('lastname').value == "Last Name" && id == "lastname") {
        document.getElementById('lastname').value = "";
    }
    if (document.getElementById('phone1').value == "111" && id == "phone1") {
        document.getElementById('phone1').value = "";
    }
    if (document.getElementById('phone2').value == "111" && id == "phone2") {
        document.getElementById('phone2').value = "";
    }
    if (document.getElementById('phone3').value == "1111" && id == "phone3") {
        document.getElementById('phone3').value = "";
    }
}
</script>
<form class="form-bg-c-cls" action="sjm_call_send.php" name="call_frm" method="post">
    <!-- <img src="images/we-can-call-you.jpg" alt="We Can Call You" title="We Can Call You" width="174" height="19" /> -->
    <h2 class="text-center clr-blk-c-cls">
        <b>We Can Call You</b>
    </h2>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" placeholder="First Name" name="firstname" type="text" id="firstname"
                    onclick="blank_val('firstname');" value="First Name" />
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" placeholder="Last Name" name="lastname" type="text" id="lastname"
                    value="Last Name" onclick="blank_val('lastname');" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input class="form-control" placeholder="111" name="phone1" type="text" id="phone1"
                    onclick="blank_val('phone1');" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input class="form-control" placeholder="111" name="phone2" type="text" id="phone2"
                    onclick="blank_val('phone2');" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input class="form-control" placeholder="111" name="phone3" type="text" id="phone3"
                    onclick="blank_val('phone3');" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <select class="form-control" name="time_frm" id="time_frm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <select class="form-control" name="time_frm1" id="time_frm1">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <select class="form-control" name="time_to" id="time_to">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <select class="form-control" name="time_to1" id="time_to1">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <img width="50%" src="securimage/securimage_show.php?sid=<?php echo md5(time()) ?>" name="siimage"
                    id="siimage" />
                <a tabindex="-1" href="#" title="Refresh Image"
                    onClick="document.getElementById('siimage').src = 'securimage/securimage_show.php?sid=' + Math.random(); return false">
                    <img src="securimage/images/refresh.gif" alt="Reload Image" onClick="this.blur()" />
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="codee" type="text" size="8" value="Enter above code">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="form-group">
                <a href="#" class="call-btn-c-cls" onClick="return call_frm_sub();">
                    <!-- <img src="images/call-me.jpg" alt="(313)-882-3800" title="(313)-882-3800" width="115" height="32" border="0" /> -->
                    CALL ME
                </a>
            </div>
        </div>
    </div>
    <!-- <div style="clear: both"></div> -->



</form>