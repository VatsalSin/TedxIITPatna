<?php ob_start();

session_start();
//Including all necesary files
include('db.php');
include('utility.php');

/** Pass a parameter with f and set value to it
 * Set f=register_user, to perform registration
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['f'])){
        if($_POST['f']=='register_user'){
            user_registration();
        }elseif($_POST['f']=='login_user'){
            login_user();
        }elseif($_POST['f']=='checkin_checkout'){
            checkin_checkout();
        }elseif($_POST['f']=='user_profile'){
            profile();
        }elseif($_POST['f']=='logout_user'){
            logout_user();
        }elseif($_POST['f']=="resend_activation_link"){
            resendActivationLink();
        }
    }
}

/** -----------------Jot down all the required functions ----------------------- */
//Cleans the string from unwanted html symbols
function clean($string){
	return htmlentities($string);
}

//Attaching the qr code generator
function generateQRCode($anweshaid,$first_name,$last_name){
	include("qrCodeGenerator/qrlib.php");
	QRcode::png($anweshaid."/".$first_name."/".$last_name,"../assets/qrcodes/".$anweshaid.".png","H","10","10");
}

function user_registration(){
    $message=[];
    $errors=[];
	$min=3;
    $max=20;
    $response=array();

    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Taking out the data from the post request
        $first_name=clean($_POST['first_name']);
        $last_name=clean($_POST['last_name']);
        $phone=clean($_POST['phone']);
        $college=clean($_POST['college']);
        $email=clean($_POST['email']);
        $password=clean($_POST['password']);
        $confirm_password=clean($_POST['confirm_password']);
        $gender=$_POST['gender'];
        $referral_id = trim(clean($_POST['referral_id']));

        if(strlen($first_name)<$min){
	 		$errors[]="Your first name cannot be less than {$min}";
	 	}

	 	if(strlen($phone)<10){
	 		$errors[]="Your phone number cannot be less than 10 digits.";
	 	}

	 	if(strlen($last_name)>$max){
	 		$errors[]="Your last name cannot be more than {$max}";
	 	}

	 	if(strlen($first_name)>$max){
	 		$errors[]="Your first name cannot be more than {$max}";
	 	}

	 	if(strlen($phone)!=10){
	 		$errors[]="Your phone number should have than 10 digits.";
	 	}

	 	if(strlen($email)<$min){
	 		$errors[]="Your email cannot be less than {$min}";
		 }

		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if(!preg_match($regex,$email)){
			$errors[]="Enter valid email address.";
		}

	 	if($password!==$confirm_password){
	 		$errors[]="Your password fields didn't match";
		 }

		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);

		if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
			$errors[]="Your password must be at least 8 character length. Must contain at least one capital letter, 1 number, 1 small letter.";
		}

		 if(strlen($referral_id)!=8){
			 $referral_id ="ANW2000";
		 }

	 	if(email_exists($email)){
	 		$errors[]="Email already taken";
		 }

		 if(phone_exists($phone)){
			 $errors[]="Phone number already taken";
		 }
        //After check perform the task.
        if(!empty($errors)){
            $response['status']=400;
            $response['message']=$errors;
            echo json_encode($response);
        }else{
            $first_name=escape($first_name);
            $last_name=escape($last_name);
            $phone=escape($phone);
            $college=escape($college);
            $email=escape($email);
            $password=escape($password);
            $referral_id = escape($referral_id);

            $password=md5($password);
            $anweshaid=getanweshaid();
            $validation_code=md5(mt_rand(10001,99999).microtime());
            generateQRCode($anweshaid,$first_name,$last_name);
            $qrcode="https://anwesha.info/backend/user/assets/qrcodes/".$anweshaid.".png";

            //Composing the email
            $subject="Activate anwesha Account";
            $msg="<p>
                Thank you for creating anwesha Account. Please click the link below to activate your account. <br/>
                
                 <a href='https://anwesha.info/backend/user/activate.php?email=$email&code=$validation_code'>https://anwesha.info/backend/user/activate.php?email=$email&code=$validation_code</a>
                <br/>Note: You can login once you have activated your account
                </p>
            ";
            $header="From: noreply@yourwebsite.com";

            if(send_email($email,$subject,$msg,$header)){
                if(!refrral_id_exist($referral_id)){
                    $referral_id="ANW2000";
                }
                update_referral_points($referral_id);
            
                $sql="INSERT INTO users(first_name,last_name,phone,college,email,password,validation_code,active,anweshaid,qrcode,gender) ";
                $sql.=" VALUES('$first_name','$last_name','$phone','$college','$email','$password','$validation_code','0','$anweshaid','".$qrcode."','$gender')";
                $result=query($sql);
                confirm($result);

                //Setting the JSON ready for sending the response
                $message[]="Successfully created the account";
                // $message['validation_code']=$validation_code;

                $response['status']=200;
                $response['message']=$message;
                echo json_encode($response);
            }else{
                $response['status']=400;
                $errors[]="Failed to send the email for verification";
                $response['message']=$errors;
                echo json_encode($response);
            }
        }//After check else part closing
    }//Post check closing
}//User registration closing

// Resend Activation Link
function resendActivationLink(){
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$email=escape($_POST['email']); // Email id of the user
		$sql="SELECT active,id, validation_code,anweshaid FROM users WHERE email='$email'";
		$result=query($sql);
		confirm($result);

		$response=array();
		$message=array();

		if(row_count($result)==1){
			$row=fetch_array($result);
			$active=$row['active'];

			if($active==1){
				$message[]="Account already activated.";
				$response['status']=208;
			}else{
				$anweshaid=$row['anweshaid'];
				$validation_code=md5($anweshaid.microtime());
				$sql1="UPDATE users SET validation_code='$validation_code' WHERE email='$email'";
				$result1=query($sql1);
				confirm($result1);
				$activation_link="https://anwesha.info/backend/user/activate.php?email=$email&code=$validation_code";

				if(isUserCA($email)){
					$sql2="UPDATE ca_users SET validation_code='$validation_code' where email='$email'";
					$result2=query($sql2);
					$activation_link="https://anwesha.info/backend/user/activate.php?email=$email&code=$validation_code&ca=campus_ambassador_anwesha2k19";
				}

				$subject="Re-Activation Link";
				$msg="<p>
				Please click the link below to activate your anwesha account and login.<br/>
					<a href='$activation_link'>$activation_link</a>
					</p>
				";
				$header="From: noreply@yourwebsite.com";
				send_email($email,$subject,$msg,$header);
				$message[]="Successfully resend the verification link";
				$response['status']=200;
			}
		}else{
			$message[]="Email not found.";
			$response['status']=404;
		}

		$response['message']=$message;
		echo json_encode($response);
	}
}

//Login function
function login_user(){
    $response=array();
    $errors=array();
    $message=array();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $anweshaid=$_POST['anweshaid'];
        $password=$_POST['password'];
        $password=md5($password);

        $sql="SELECT * FROM users WHERE anweshaid='$anweshaid' AND password='$password'";
        $result=query($sql);

        if(row_count($result)==1){
            $row=fetch_array($result);
            $active=$row['active'];

            if($active!=1){
                $errors[]="Your account is not activated. Please activate your account to login.";
                $response['status']=403;//Login failed
                $response['message']=$errors;
                echo json_encode($response);
            }else{
                if(empty($row['access_token'])){
                    $access_token=$anweshaid.$password.microtime();
                    $access_token=md5($access_token);

                    $sql1="UPDATE users SET access_token='$access_token' WHERE anweshaid='$anweshaid'";
                    $result1 = query($sql1);
                }else{
                    $access_token=$row['access_token'];
                }

                $first_name=$row['first_name'];
                $qrcode=$row['qrcode'];
                $anweshaid=$row['anweshaid'];
    
                $response['status']=202;//Login validated
                $response['message']=$message;
                $response['anweshaid']=$anweshaid;
                $response['access_token']=$access_token;
                $response['first_name']=$first_name;
                $response['qrcode']=$qrcode;
                echo json_encode($response);
            }//Else part of active
            
        }else{
            $errors[]="Invalid credentials.";
            $response['status']=403;//Login failed
            $response['message']=$errors;
            echo json_encode($response);
        }
    }
}

// Function to logout
function logout_user(){
    $anweshaid=$_POST['anweshaid'];
    $access_token=$_POST['access_token'];
    $response=array();
    $errors=array();

    $sql="SELECT id, access_token FROM users WHERE anweshaid='$anweshaid' AND access_token='$access_token'";
    $result=query($sql);

    if(row_count($result)==1){
        $sql1= "UPDATE users SET access_token='' WHERE anweshaid='$anweshaid'";
        $result1=query($sql1);

        $response['status']=202;
        $errors[]="Successfully logged out.";
    }else{
        $response['status']=401;
        $errors[]="Invalid authentication.";
    }
    $response['message']=$errors;
    echo json_encode($response);
}

// Function to get profile details
function profile(){

    $response=array();
    $errors=array();
    $message=array();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $anweshaid=$_POST['anweshaid'];
        $access_token= $_POST['access_token'];

        $sql="SELECT * FROM users WHERE anweshaid='$anweshaid' AND access_token='$access_token'";
        $result=query($sql);

        if(row_count($result)==1){
            $row=fetch_array($result);

            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $email=$row['email'];
            $qrcode=$row['qrcode'];
            $anweshaid=$row['anweshaid'];
            $events_registered=$row['events_registered'];
            $events_participated=$row['events_participated'];
            $phone=$row['phone'];

            $response['status']=202;// Profile access validated
            $message['anweshaid']=$anweshaid;
            $message['first_name']=$first_name;
            $message['last_name']=$last_name;
            $message['email']=$email;
            $message['phone']=$phone;
            $message['qrcode']=$qrcode;
            $message['events_registered']=$events_registered;
            $message['events_participated']=$events_participated;
            $message['access_token']=$access_token;
            $message['amount_paid']=$row['amount_paid'];
            $response['profile']=$message;

            $sql1="SELECT ev_id, ev_amount FROM events";
            $result1=query($sql1);
            $events=array();
            if ($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) {
                    $event=array();
                    $event['ev_id']=$row1['ev_id'];
                    $event['ev_amount']=$row1['ev_amount'];
                    $events[]=$event;
                }
            }
            $response['events']=$events;
            echo json_encode($response);

        }else{
            $errors[]="Invalid access token. Unauthorized to access the data.";
            $response['status']=403;// Unauthorized access
            $response['message']=$errors;
            echo json_encode($response);
        }
    }

}