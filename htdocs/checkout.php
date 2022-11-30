<?php
    include_once 'insertdata-cart.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css" type="text/css">
    <title>Papa Potato - Payment</title>

    <!--<script type="text/javascript">
        window.onbeforeunload = function () {
        return 'Are you really want to perform the action?';
        }
    </script>-->

</head>

<body>
<div class="nav_container">
    <nav>
        <div class="left_menu">
        <ul class="menu">                
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="Shop.html">Shop</a></li>
            <li><a href="Promotions.html">Promotions</a></li>
        </ul>
        </div>

        <div class="logo_menu">
            <a href="index.html" class="logo" id="logobutton"><img src="vectorlogo.svg" height="80"  alt="logo"></a>
        </div>

        <div class="right_menu">
        <ul class="menu"> 
            <li><a href="Cart.html"><img src="shoppingcart.png" height = "30" alt="cart"></a></li>
            <li><a href="ContactUs.html" id="contactUsbutton">Contact Us</a></li> 
        </ul>
        </div>

    </nav>
</div>

<main>
    <div class="heading">
        <h1>Payment</h1>
    </div>

    <div class="main_content">
        <div class="col-1">
            <div class="left_content">
                <p>Contact Information</p>
                <form action ="insertdata-checkout.php" method="post">
                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for = "Fname">First Name</label>
                        </div>    
 
                        <div class="display">
                            <input type = "text" id="Fname" name="user_Fname" maxlength="30" class="user_input" required>
                        </div>
                        

                        <div class="display">
                            <label for = "Lname">Last Name</label>
                        </div>    
    
                        <div class="display" style="width: 28%;">
                            <input type = "text" id="Lname" name="user_Lname" maxlength="20" class="user_input" required>
                        </div>
                    </div>
 
                    <div class="form">
                        <div class="user_contact" style="width: 18%;">
                            <label for="phone">Phone No.</label>
                        </div>
 
                        <div  class="user_contact" style="width: 10%;">        
                            <p>+60</p>
                            &nbsp;
                        </div>
 
                        <div  class="user_contact" style="width: 54.5%;">
                            <input type="number" id="phone" name="phone_num" class="user_input" required>
                        </div>
                        
                    </div>
 
                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for="email">Email
                        </div>
 
                        <div class="display" style="width: 74%;">
                            <input type="email" id="email" name="email" maxlength="30" class="user_input" required>
                        </div>
                        </label>
                    </div>

                    <p>Address</p>
 
                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for="unit_no">Unit No.</label>
                        </div>
    
                        <div class="display">
                            <input type="number" id="unit_no" name="unit_num" maxlength="5" class="user_input" required>
                        </div>
                    </div>
 
                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for="street1">Street 1</label>
                        </div>
            
                        <div class="display" style="width: 74%;">
                            <input type="text" id="street1" name="street1" maxlength="30" class="user_input" required>
                        </div>
                    </div>

                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for="street1">Street 2</label>
                        </div>
            
                        <div class="display" style="width: 74%;">
                            <input type="text" id="street2" name="street2" maxlength="30" class="user_input" required>
                        </div>
                    </div>

                    <div class="form">
                        <div class="display" style="width: 18%;">
                            <label for="postcode">Postcode</label>
                        </div>
            
                        <div class="display" style="width: 15%;">
                            <input type="number" id="postcode" name="postcode" maxlength="5" class="user_input" required>
                        </div>
                        
                        <div class="display" style="width: 10%;">
                            <label for="state">State </label>
                        </div>
                
                        <div class="display" style="width: 15%;">
                            <select id="state" name="state" class="user_input" required>
                                <option value="" style="display: none;">Choose State</option>
                                <option value="Johor">Johor</option>
                                <option value="Kedah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Melacca">Melacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                        </div>
                       

                        
                        <div class="display" style="width: 15%;">
                            <label for="country">Country</label>
                        </div>
                    
                        <div class="display" style="width: 15%;">
                            <p>Malaysia</p>
                            &nbsp;
                        </div>
                    </div>

                    <p>Shipping Method</p>

                    <div style="display: flex;">
                        <div class="form">
                            <input type="radio" id="shipping1" name="shipping" value="0.00" checked="checked">
                            <label for="shipping1">GedEx</label><br>
                            <input type="radio" id="shipping2" name="shipping" value="15.00">
                            <label for="shipping2">Postlaju</label><br>
                            <input type="radio" id="shipping3" name="shipping" value="15.00">
                            <label for="shipping3">Lalamove</label>
                        </div>

                        <div class="shippingfee">
                            Free<br>
                            RM10.00<br>
                            RM15.00
                        </div>
                    </div>

                    <p>Payment Method</p>
                    <div class="payment_method">
                        <input type="radio" name="payment" id="GroupName1" value="Cash On Delivery" checked="checked" onclick="ShowRadioButtonDiv('GroupName')"/>
                        <label for="GroupName1">Cash On Delivery</label>
                        <input type="radio" name="payment" id="GroupName2" value="TNG eWallet" onclick="ShowRadioButtonDiv('GroupName')"/>
                        <label for="GroupName2" style="width: 30%;">TNG eWallet</label>
                        <input type="radio" name="payment" id="GroupName3" value="Debit / Credit Card" onclick="ShowRadioButtonDiv('GroupName')"/>
                        <label for="GroupName3">Debit / Credit Card</label>
                    </div>

                    <div id="GroupName1Div" style="display:none;"> </div>

                    <div id="GroupName2Div" style="display:none;"> 
                        <div class="form">
                            <div class="display" style="width: 30%;">
                                <label for ="TNG">Phone Number</label>
                            </div>

                            <div  class="user_contact" style="width: 10%;">        
                                <p>+60</p>
                                &nbsp;
                            </div>

                            <div class="display">
                                <input type="number" id="TNGphone_num" name="TNGphone_num" value="TNGphone_num" class="user_input">
                            </div>
                        </div>

                        <div class="form">
                            <div class="display" style="width: 30%;">
                                <label for="TNG">6 Digits Code</label>
                            </div>

                            <div class="display">
                                <input type="number" id="TNG_code" name="TNG_code" value="code" class="user_input">
                            </div>
                        </div>
                    </div>

                    <div id="GroupName3Div" style="display:none;">
                        <div class="form">
                            <div class="display" style="width: 25%;">
                                <label for="cardname">Name on Card</label>
                            </div>

                            <div class="display" style="width: 67%;">
                                <input type="text" id="cardname" name="cardname" maxlength="30" class="user_input">
                            </div>
                        </div>

                        <div class="form">
                            <div class="display" style="width: 18%;">
                            <label for="card_no">Card No.</label>
                            </div>

                            <div class="display" style="width: 74%;">
                                <input type="number" id="card_no" name="card_num" maxlength="17" class="user_input">
                            </div>    
                        </div>


                        <div class="card">
                            <label for="cardtype" style="width: 60%;">Card Type</label>

                            <div class="cardtype">
                                <input type="radio" id="card1" name="card" value="visa">
                                <label for="card1"> 
                                    <img src="visa.png" alt="Visa" width="60%">
                                </label>

                                <input type="radio" id="card2" name="card" value="mastercard">
                                <label for="card2">
                                    <img src="mastercard.png" alt="MasterCard" width="60%">
                                </label>

                                <input type="radio" id="card3" name="card" value="americanexpress">
                                <label for="card3">
                                    <img src="americanexpress.png" alt="American Express" width="63%">
                                </label>
                            </div>
                        </div>

                        <div class="form">
                            <div class="display" style="width: 22%;">
                                <label for="expiry">Expiry Date</label>
                            </div>

                            <div class="display" style="width: 20%;">
                                <select id="expiry" name="expiry_month" class="field" style="margin: 5px;">
                                <option value="" style="display: none;">MM</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                </select>
                            </div>

                            <div class="display" style="width: 25%;">
                                <select id="expiry" name="expiry_year" class="field" style="margin: 5px;">
                                    <option value="" style="display: none;">YY</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>

                        <div class="form">
                            <div class="display" style="width: 10%;">
                                <label for="cvv">CVV</label>
                            </div>

                            <div class="display" style="width: 20%;">
                                <input type="number" id="cvv" name="cvv" maxlength="6" class="user_input">
                            </div>   
                        </div>

                        <div class="form">
                            <div class="display" style="width: 10%;">
                                <label for="cart_id">Cart ID</label>
                            </div>

                            
                        </div>
                    </div>

                


                    <div class="paybutton">
                        <input type="submit" value="Pay">
                    </div>
                </form>
            </div>
        </div>


        <div class="col-1">
            <div class="right_content">

                <hr style="color: #FFB001;">

                <div class="total_price">
                    <div  style="width: 80%;">
                        <h4>Subtotal</h4>
                        <h4>Shipping Fee</h4>
                        <h2>Total</h2>
                    </div>

                    <div>
                        <h4></h4>
                        <h4></h4>
                        <h2></h2>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
 
  
   
  
</main>

<footer>
    <div class="wrapper">
        <div class="grid_footer1">
            <div class="grid_items">
                <img src="vectorlogo.svg" height="105"  alt="logo">
            </div>
            <div class="grid_items">
                <h3>Email:</h3>
                    <p>contact@papapotato.my</p>
            </div>
            <div class="grid_items">
                <h3>Hotline:</h3>
                    <p>1700-82-0311</p>
            </div>
        </div>

        <div  class="grid_footer2">
                <div class="copyright">
                        <p>&#169; Copyright 2021. All rights reserved by Papa Potato Sdn Bhd.</p>
                </div>

                <div class="icons">
                    <ul class="socialmediaicons">    
                        <li><img src="facebook.png" height="30"  alt="icon"></li>
                        <li><img src="instagram.png" height="30"  alt="icon"></li>
                        <li><img src="twitter.png" height="30"  alt="icon"></li>
                        <li><img src="linkedin.png" height="30"  alt="icon"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    function ShowRadioButtonDiv (GroupName) {
    for (x=1;x<=3;x++) {
        CheckThisButton = GroupName + x;
        ThisDiv = GroupName + x +'Div';
    if (document.getElementById(CheckThisButton).checked) {
        document.getElementById(ThisDiv).style.display = "block";
        }
    else {
        document.getElementById(ThisDiv).style.display = "none";
        }
    }
    return false;
}
</script>

</body>
</html>
