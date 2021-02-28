
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp - Supercoin-Trade.com</title>
<link rel="icon" href="{{ asset('templates/old/styles/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('templates/old/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="{{ asset('templates/old/styles/animate.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('templates/old/styles/custom.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('templates/old/styles/hover.css') }}" rel='stylesheet' type='text/css'>
    <!--<script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="{{ asset('templates/old/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('templates/old/styles/setting2.js') }}" type='text/javascript'></script>
    <script src="{{ asset('templates/old/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/old/styles/wow.js') }}"></script>
    <script src="{{ asset('templates/old/styles/wow.min.js') }}"></script>
    
    <style>
        select.inpts{
            color: #fff;
            width: 100%;
            height: 40px;
            background: rgb(15,22,71);
            background: -moz-linear-gradient(top, rgba(15,22,71,1) 14%, rgba(8,13,56,1) 96%, rgba(8,13,56,1) 96%);
            background: -webkit-linear-gradient(top, rgba(15,22,71,1) 14%,rgba(8,13,56,1) 96%,rgba(8,13,56,1) 96%);
            background: linear-gradient(to bottom, rgba(15,22,71,1) 14%,rgba(8,13,56,1) 96%,rgba(8,13,56,1) 96%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f1647', endColorstr='#080d38',GradientType=0 );
            border: 2px solid rgb(15,22,71);
            padding: 0 20px;
            border-radius: 40px;
            font-size: 15px;
        }

        select.inpts:focus{
            outline: none;
        }

        option{
            color: #333;
        }

        input:focus{
            outline: none;
        }
        .help-block{
            font-weight: normal;
            font-size: 1.2rem;
            margin: 0;
            text-align: center;
            padding: 0;
        }

    </style>
</head>
<body>
<div id="google_translate_element"></div>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="https://coinrexi.com/translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
<div class="wrapper">
	 	<div class="bannaerwrapsub">

            <div class="logowrap">

                <div class="content">
                    <div class="logo" style="width: 233px"><a href="index.html"><img src="{{ asset('templates/old/images/glofxlogo.png') }}" style="width: 100%;" alt="" /></a></div>
                    <div class="navigation flipInX wow">
                        @include('partials.nav')
                    </div>
                    <div class="loginwrap flipInX wow">
                        <ul>
                            <li class="login hvr-float-shadow"><a href="{{ route('login') }}">login</a></li>
                <li class="signup hvr-float-shadow"><a href="{{ route('register') }}">signup</a></li>
                        </ul>
                    </div>

                </div>

            </div>
	<marquee direction="left"><div class="payments"><img src="{{ asset('templates/Old/styles/images/payments.png') }}" alt=""/></div></marquee>

	<div class="loginpage">
      <div class="content">


          <div class="bannerwrap insideheaders">
              <div class="bannerleft">
                  <h1 class="fadeInLeft wow">
                      <div class="loginwrappers">

                          <div class="loginheads">Register New Account</div>
                          <div class="form-container login">
                              <form action="{{ route('register') }}" method="POST">
                                @csrf
                                        <div class="form-group @error('name') has-error @enderror">
                                          <input type='text' id='name' name='name' value="{{ old('name') }}" class='inpts' placeholder="Your Full Name">
                                            <span class="help-block">@error('name') {{ $message }} @enderror</span>
                                        </div>
                                      
                                        <div class="form-group @error('username') has-error @enderror">
                                          <input type='text' id='username' name='username' value="{{ old('username') }}" class='inpts' placeholder="Your Username">
                                          <span class="help-block">@error('username') {{ $message }} @enderror</span>
                                        </div>
                                     
                                        <div class="form-group @error('password') has-error @enderror">
                                          <input type='password' id='password' name='password' value='' class='inpts' placeholder="Define Password">
                                          <span class="help-block">@error('password') {{ $message }} @enderror</span>
                                        </div>
                                      
                                        <div class="form-group">
                                          <input type='password' id='password_confirmation' name='password_confirmation' class='inpts'  placeholder="Confirm Password">
                                        </div>
                                     
                                          <input type='text' class='inpts' name="btc_wallet" id="btc-address" value="{{ old('btc_wallet') }}" placeholder="Your Bitcoin Wallet Address"></td>
                                          <span class="help-block">@error('btc_wallet') {{ $message }} @enderror</span>
                                      
                                        <div class="form-group @error('email') has-error @enderror">
                                          <input type='email' id='email' name='email' value="" class=inpts size=30 placeholder="Your E-mail Address">
                                          <span class="help-block">@error('email') {{ $message }} @enderror</span>
                                        </div>
                                      
                                         
                                            <div class="form-group @error('country') has-error @enderror">
                                              <select class="inpts" id="country" name="country" style="padding-top: 0;">
                                                    <option value="">Select Your Country</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                             <span class="help-block">@error('country') {{ $message }} @enderror</span>
                                            </div>
                                                <div class="text-center"><label class="d-block text-center" for="agree" style="color: #fff; font-size: 1.2rem;"><input type=checkbox id="agree" name="agree"> I agree with</label> </div>
                                                <div class="text-center">
                                                    <a href="{{ route('our_rules_agreement') }}" style="font-size: 1.5rem;">Terms and conditions</a>
                                                    <span class="help-block">@error('agree') {{ $message }} @enderror</span>
                                                    <input type="submit" value="submit" name="submit" class=sbmt></td>
                                                </div>
                                         
                                       
                              </form>
                          </div>
                          <div class="loginaction"><h4>Do you already have an account? </h4><a href="{{ route('login') }}" class="signup">Login Here</a></div>
                      </div>
              </div>
          </div>
      </div>
  </div>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fa3ea7d613f1c78e60855a2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


      <div class="content">

          <div class="footerwrap">

              <div class="footerbottom">
                  <div class="content">


                      <div class="copyright">&copy; Copyright 2017-{{ date('Y') }}. supercoin-trade  All Rights Reserved</div>
                      <div class="footerlinks">

                          <ul>
                                <li><a href="{{ route('home') }}">HOME</a></li>
                                <li><a href="{{ route('about_us') }}">ABOUT US</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('about_us') }}">News</a></li>
                                <li><a href="{{ route('support') }}">SUPPORT</a></li>
                                <li><a href="{{ route('our_rules_agreement') }}">TERMS</a></li>
                                <li><a href="{{ route('refferal_program') }}">AFFILIATES</a></li>
                          </ul>

                      </div>



                  </div>
              </div>
          </div>


<!--          <div id="myBtn" title="Go to top" class="" style="display: block;">-->
<!--              <iframe src="https://growth-finance.co/unicorn-trade.html" width="250px" height="250px" frameBorder="0" scrolling="no">-->
<!--              </iframe>-->
<!--          </div>-->
  </div>
  </div>
<style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        border-color:none;
        outline: none;
        background-color: transparent;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

</style>
</body>
</html>