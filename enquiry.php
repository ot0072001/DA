<?php
include ("sys.php");
$Academy="selected";
 $pageTitle="Enquiry";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once("head.php");?>
<script type="text/javascript" src="jquery.validate.pack.js"></script>
            <script type="text/javascript">
			$().ready(function() {
				$("#enquiryForm").validate({
					rules: {
						firstname: {
							required: true	
						}
						,lastname: {
							required: true	
						}
						,email: {
							required: true
							,email: true
						}
						,enquiry: {
							required: true
						}
						,phone: {
							required: true
						}
						,phonetype: {
							required: true
						}
						,contactby: {
							required: true
						}
						,contacttime: {
							required: true
						}
						,hearabout: {
							required: true
						}
						,recaptcha_response_field: {
							required: true
						}
						
					}
					,messages: {
						firstname: {
							required: "Please enter your First name"
						}
						,lastname: {
							required: "Please enter your Last name"
						}
						,email: "Please enter a valid Email Address"
						,enquiry: {
							required: "Please enter an Enquiry"
						}
						,phone: {
							required: "Please enter a Phone number"
						}
						,phonetype: {
							required: "Select Phone Type"
						}
						,contactby: {
							required: "Please select a contact method"
						}
						,contacttime: {
							required: "Please select a Preferred contact time"
						}
						,hearabout: {
							required: "Please select How did you hear about us"
						}
						,recaptcha_response_field: {
							required: "Please enter the two words displayed"
						}
					}					
				});
			});
			</script>
<?php/*
		function check_firstname(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$firstname = $_POST['firstname'];
				if(trim($firstname,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please enter your firstname</td></tr>';
				}
			
			}
			return $errMsg;
			
		}
		
		function check_lastname(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$lastname = $_POST['lastname'];
				if(trim($lastname,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please enter your lastname</td></tr>';
				}
			
			}
			return $errMsg;
			
		}
		
		function check_email(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$email = $_POST['email'];
				if(trim($email,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please Enter your Email Address</td></tr>';
				}
				else if(!preg_match("\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b", $email))
				{
					$errMsg = '<tr><td></td><td class="errMsg">Please enter your valid Email Address</td></tr>';;
				}
			}
			return $errMsg;
			
		}
		
		function check_enquiry(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$enquiry = $_POST['enquiry'];
				if(trim($enquiry,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please enter your Enquiry</td></tr>';
				}
			}
			return $errMsg;
			
		}
		
		function check_phone(){
			$errMsg = '<td></td>';
			if(isset($_POST['submit'])){
				$phone = $_POST['phone'];
				if(trim($phone,' ') == ''){
					$errMsg = 'Please enter a Phone Number';
				}
		
			}
			return $errMsg;
			
		}
		
		function check_phonetype(){
			$errMsg = '<td></td>';
			if(isset($_POST['submit'])){
				$phonetype = $_POST['phonetype'];
				if(trim($phonetype,' ') == ''){
					$errMsg = 'Select phone Type';
				}
			}
			return $errMsg;
			
		}
		
		function check_contactby(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$contactby = $_POST['contactby'];
				if(trim($contactby,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please select a contact method</td></tr>';
				}
			}
			return $errMsg;
			
		}
		
		function check_contactime(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$contacttime = $_POST['contacttime'];
				if(trim($contacttime,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please select a preferred contact time</td></tr>';
				}
			}
			return $errMsg;
			
		}
		function check_hearabout(){
			$errMsg = '';
			if(isset($_POST['submit'])){
				$hearabout = $_POST['hearabout'];
				if(trim($hearabout,' ') == ''){
					$errMsg = '<tr><td></td><td class="errMsg">Please select How did your hear about us</td></tr>';
				}
			}
			return $errMsg;
			
		}
	
*/?>
</head>
<body id="enquiryBody">
<div id="container">
	<div id="subContainer">
		<div id="header">
			<?php include "nav.php"; ?>
		</div><!-- end #header -->

		<div id="mainContent">
			<div id="headImg"></div>
			<div id="subContent">
				<div class="subContainer">
				<div class="sidebar">
				</div>
				<div class="rightContent">
					<div class="title">
						Enquiry Form
					</div>
					<div class="form">
					
					 <form name="enquiryForm" id="enquiryForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="dsform">
                            <tbody>
                                <tr>
                                    <td width="160" class="flabel">First name</td>
                                    <td><input name="firstname" type="text" id="firstname" value="" size="32" maxlength="255" /></td>
                              </tr>
                                <tr>
                                    <td class="flabel">Last name</td>
                                    <td><input name="lastname" type="text" id="lastname" value="" size="32" maxlength="255" /></td>
                                </tr>
                                <tr>
                                    <td class="flabel">Email address</td>
                                    <td><input name="email" type="text" id="email" value="" size="32" maxlength="255" /></td>

                                </tr>
                                <tr>
                                    <td class="flabel_verTop">Enquiry</td>
                                    <td><textarea name="enquiry" cols="40" rows="6" id="enquiry"></textarea></td>
                                </tr>
                                <tr>
                                    <td class="flabel">Contact number</td>

                                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td style="padding:0 10px 0 0; margin:0;"><input name="phone" type="text" id="phone" value="" size="30" maxlength="255" /></td>
                                        <td style="padding:0; margin:0;">
                                        <select name="phonetype" id="phonetype">
                                        <option value="">- Select -</option>
                                        <option value="Home" >Home</option><option value="Work" >Work</option><option value="Mobile" >Mobile</option>                                        </select>

                                        </td>
                                      </tr>

                                    </table></td>
                                </tr>
                                <tr>
                                    <td class="flabel">Please contact me by</td>
                                    <td>
                                    <select name="contactby" id="contactby">

                                    <option value="">- Select -</option>
                                    <option value="Email" >Email</option><option value="Phone" >Phone</option><option value="Both" >Both</option>                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="flabel">Preferred contact time</td>

                                    <td>
                                    <select name="contacttime" id="contacttime">
                                    <option value="">- Select -</option>
                                    <option value="8am-12pm" >8am-12pm</option><option value="12pm-5pm" >12pm-5pm</option><option value="5pm ¨C 7pm" >5pm-7pm</option>                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td class="flabel">How did you hear about us?</td>
                                  <td>
                                  	<select name="hearabout" id="hearabout">
                                    <option value="">- Select -</option>
                                    <option value="Print Advertising" >Print Advertising</option><option value="Friend" >Friend</option><option value="Radio" >Radio</option><option value="Website" >Website</option><option value="Google" >Google</option><option value="Other" >Other</option>                                    </select>

                                  </td>
                                </tr>
                                <!--<tr>
                                  <td>&nbsp;</td>
                                  <td>
                                  <script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6LdicgYAAAAAAKqMWfg6pLOMXTXyDv7TFvIby5ZN"></script>

	<noscript>
  		<iframe src="http://api.recaptcha.net/noscript?k=6LdicgYAAAAAAKqMWfg6pLOMXTXyDv7TFvIby5ZN" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>                                  </td>

                                </tr>-->
                                <tr>
                                  <td>&nbsp;</td>
                                  <td align="right"><input type="image" src = "pic/enquiry/submit.gif" style="border:none;" value="submit" name="submit" /></td>
                                </tr>
                            </tbody>
                        </table>
                         </form>

					
					
					
					</div>
				</div>
				<div class="endDistance">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>