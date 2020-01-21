<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/stylee.css">

  
</head>

<body>

     <div class="container">
            <div class="navigation">
                <ol>
                    <li><a href="#"  data-ref="name">Name</a></li>
                    <li><a href="#"  data-ref="uname">Username</a></li>
                    <li><a href="#"  data-ref="email">Email</a></li>
                    <li><a href="#"   data-ref="viewpswd">Password</a></li>
                    <li><a href="#"  data-ref="phone">Phone</a></li>
                </ol>
            </div>
            <form id="sign-form" class="sign-form" action="signup1.php" method="POST">
                <ol class="questions">
                    <li>
                        <span><label for="name">Hi, What is your Name?</label></span>
						<input class="active" id="name" name="name" type="text" placeholder="Enter your full name" autofocus/>
                    </li>
                    <li>
				        <span><label for="uname">& what shall we call you?</label></span>
                        <input id="uname" name="uid" type="text" placeholder="Enter a username" autofocus/>
					</li>
                    <li>
				        <span><label for="email">Enter you email</label></span>
                        <input id="email" name="email" type="text" placeholder="Email"  autofocus/>
					</li>
                    <li>
                        <span><label for="password">Choose a password</label></span>
                        <input id="viewpswd" name="pwd" type="text" placeholder="this your password"/>
                        <input id="password" name="pwd" type="password" placeholder="make sure you dont forget" autofocus/>
                        <span id="show-pwd" class="view"></span>
					</li>
                    <li>
                        <span><label for="phone">Enter your phone number</label></span>
                            <select name="countryCode" class="country"  >
                                <option data-countryCode="GB" value="91">(+91) INDIA </option>
                                <option data-countryCode="GB" value="44">(+44) UK </option>
                                <option data-countryCode="US" value="1">(+1) USA </option>
                                <optgroup label="Other countries">
                                   <option data-countryCode="DZ" value="213"> (+213)Algeria</option>
                                   <option data-countryCode="AD" value="376"> (+376) Andorra</option>
                                   <option data-countryCode="AO" value="244">(+244) Angola </option>
                                   <option data-countryCode="AI" value="1264"> (+1264) Anguilla</option>
                                   <option data-countryCode="AG" value="1268">(+1268) Antigua &amp; Barbuda </option>
                                   <option data-countryCode="AR" value="54">(+54) Argentina </option>
                                   <option data-countryCode="AM" value="374"> (+374) Armenia</option>
                                   <option data-countryCode="AW" value="297">(+297) Aruba </option>
                                   <option data-countryCode="AU" value="61"> (+61) Australia</option>
                                   <option data-countryCode="AT" value="43">(+43) Austria </option>
                                   <option data-countryCode="AZ" value="994"> (+994) Azerbaijan</option>
                                   <option data-countryCode="BS" value="1242">(+1242)Bahamas </option>
                                </optgroup>
                            </select>
                            <input id="phone" name="num" type="text" autofocus/>
                    </li>
                    <li><p style="margin-top: 45px;font-size: 32pt;float:right">
                      <button type="submit" name="submit" class="signupbtn">Sign Up</button>  </li>
                
                    
                </ol>
                <div id="next-page" alt="Kiwi standing on oval"></div>
                <div class="error-message"></div>
                
            </form>
        <h1 id="wf" style="opacity:0;width: 600px; margin-top:1.1em;display:none; margin-bottom:1em">Thank you</h1>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
