<!DOCTYPE>
<html>
    <head>
        <title>CSS Registration Form</title>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
        <script type="text/javascript">
            function validate(){
                var userValue = document.getElementById("user").value;
                var mailValue = document.getElementById("mail").value;
                var atPos = mailValue.indexOf("@");
                var dotPos = mailValue.lastIndexOf(".");
                var passValue = document.getElementById("pass").value;
                var checkName = /^[a-z A-Z]*$/;
                var checkPhone = /^[0-9]*$/;

                if(userValue.length<3 || userValue.length>12){
                    alert("Length of Username should be between 3 and 12");
                    document.getElementById("user").focus();
                    return false;
                }

                else if (atPos<1 || dotPos<atPos+2 || dotPos+2>=mailValue.length){
                    alert ("Format of e-mail id is not correct");
                    document.getElementById("mail").focus();
                    return false;
                }

                else if(passValue.length<8 || passValue.length>16){
                    alert ("Length of password should be between 8 to 16");
                    document.getElementById("pass").focus();
                    return false;
                }

                else if(document.getElementById("conf_pass").value != document.getElementById("pass").value){
                    alert ("Password don't match");
                    document.getElementById("conf_pass").focus();
                    return false;
                }

                else if (!checkName.test(document.getElementById("name").value)){
                    alert ("Name should only contain Alphabets");
                    document.getElementById("name").focus();
                    return false;
                }

                else if (!checkPhone.test(document.getElementById("phone").value)){
                    alert ("Phone should only contain numbers");
                    document.getElementById("phone").focus();
                    return false;
                }
            }
        </script>
    </head>

    <body>    
        <form method="post" class="register" action="registration.php" onsubmit="return validate()">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend style="margin-left: 19px">Account Details
                </legend>
                <p>
                    <label>
                    </label>
                    <input type="text" required placeholder="Username" id="user" name="username" style="margin: 0 20px 15px -30px" />
                    <label>
                    </label>
                    <input type="email" id="mail" placeholder="E - Mail" name="email" required />
                </p>
                <p>
                    <label>
                    </label>
                    <input type="password" id="pass" placeholder="Password" name="password" required style="margin: 0 20px 15px -30px"/>
                    <label>
                    </label>
                    <input type="password" id="conf_pass" placeholder="Confirm Password" required />
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend style="margin-left: -15px">Personal Details
                </legend>
                <p>
                    <label>
                    </label>
                    <input type="text" id="name" class="long" placeholder="Name" name="person_name" required style="margin-bottom: 15px" />
                </p>
                <p>
                    <label>
                    </label>
                    <input type="text" id="phone" maxlength="10" placeholder="Phone" name="person_phone" required style="margin-bottom: 15px"/>
                </p>
                <p>
                    <label class="optional">
                    </label>
                    <input type="text" class="long" placeholder="Address" name="address" required style="margin-bottom: 15px; margin-left: -6px"/>
                </p>
                <p>
                    <label>
                    </label>
                    <input type="text" class="long" placeholder="City" name="city" required style="margin-bottom: 15px"/>
                </p>
                <p>
                    <label>
                    </label>
                    <select required>
                        <option value="" selected="disabled">Country
                        </option>
                        <option value="1">United States
                        </option>
                    </select>
                </p>

            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <select required style="margin-bottom: 15px;"">
                        <option value="" selected="disabled">(Select gender)</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </p>
                <p>
                    <label>
                    </label>
                    <select class="date" required style="margin-right: 20px;">
                        <option value="" selected="disabled">Day
                        </option>
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select class="month" required="">
                        <option value="" selected="disabled">Month
                        </option>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" type="text" size="4" maxlength="4" placeholder="Year" required style="margin-left: 20px;" />
                </p>
                <p>
                    <label>
                    </label>
                    
                </p>
                <p>
                    <label>
                    </label>
                </p>
                <div class="infobox"><h4>Terms and Condition</h4>
                    <p><label><input type="checkbox" value="" required />By clicking Sign Up, you agree to our <u><a href="" style="color: blue"> Terms </a></u> and that you have read our <u><a href="" style="color: blue"> Data Use Policy</a></u>, including our <a href="" style="color: blue">Cookie Use</a>.</label></p>
                </div>
            </fieldset>
            <fieldset class="row4" style="margin-top: 10px">
                <legend style="margin-left: 19px">Extra Services
                </legend>
                <p class="agreement" style="margin-left: 33px">
                    <label><input type="checkbox" value=""/>
                    I want to receive personalized offers by your site</label>
                </p>
                <p class="agreement" style="margin-left: 33px">
                    <label><input type="checkbox" value=""/>
                    Allow partners to send me personalized offers and related services</label>
                </p>
            </fieldset>
            <div><button type="submit" class="button" style="margin-left: 10px; margin-top: 25px">Sign Up &raquo;</button>
            <span style="float: right; margin-top: 25px">Already have an account? <br><u><a href="file:///C:/Users/Rohan%20Kanoo/Documents/HTML/Rohan/E-Post%20Project/login/index_login.html" style="color: blue">Sign in</a></u></span></div>
        </form>
    </body>
</html>





