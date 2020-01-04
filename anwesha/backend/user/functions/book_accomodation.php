<?php
    include('./init.php');
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $response=array();
        $message=array();
        // Extract datas
        $anweshaid=escape($_POST["anweshaid"]);
        $access_token=escape($_POST["access_token"]);
        $no_of_days=1;
        $day1=0;
        $day2=0;
        $day3=0;

        $user_data=userInfo($anweshaid);

        if($user_data==false){
            $response['status']=404;
            $message[]="Anwesha Id does not exist";
        }else{
            if($user_data['access_token']!=$access_token){
                $response['status']=401;
                $message[]="Unauthorized access";
            }else{
                if(userExistsInAccommodation($anweshaid)){
                    $response['status']=208;
                    $message[]="Anwesha Id has already booked accommodation";
                }else{
                    if(isset($_POST['day1'])){
                        $day1=1;
                    }elseif(isset($_POST['day2'])){
                        $day2=1;
                    }elseif(isset($_POST['day3'])){
                        $day3=1;
                    }elseif(isset($_POST['all_day'])){
                        $day1=1;
                        $day2=1;
                        $day3=1;
                        $no_of_days=3;
                    }elseif(isset($_POST['day1_day2'])){
                        $day1=1;
                        $day2=1;
                        $no_of_days=2;
                    }elseif(isset($_POST['day2_day3'])){
                        $day3=1;
                        $day2=1;
                        $no_of_days=2;
                    }
                    $date=escape(date('Y-m-d H:i:s'));
                    $name=$user_data['first_name']." ".$user_data['last_name'];
                    $phone=$user_data['phone'];
                    $gender=$user_data['gender'];
                    $qrcode=$user_data['qrcode'];
                    $email=$user_data['email'];

                    $sql="INSERT INTO accommodation(anweshaid,names,phone,gender,booking_date,no_of_days,day1,day2,day3,email) VALUES('$anweshaid','$name','$phone','$gender','$date','$no_of_days','$day1','$day2','$day3','$email')";
                    $result=query($sql);
                    confirm($result);

                    $mssg="<p> Hi $name, you have successfully booked your accommodation for $no_of_days days.<br>
                        Your anweshaid is:$anweshaid<br>
                        <a href='$qrcode'><img src='$qrcode' alt='Your qr code should be shown here.' style='height:400px;width:400px'/></a>
                    </p>";
                    $subject="Anwesha2k20 Accommodation Booking";
                    $headers="From: anwesha2k20iitp@gmail.com";
                    send_email($email,$subject,$mssg,$headers);
                    $response['status']=202;
                    $message[]="Successfully booked your accommodation for $no_of_days days.";
                }
            }
        }
        $response['message']=$message;
        // print_r(json_encode($response));
        echo json_encode($response);
    }

    // Function to get user info
    function userInfo($anweshaid){
        $sql="SELECT access_token, gender, first_name, last_name, phone,email, qrcode FROM users where anweshaid='$anweshaid'";
        $result=query($sql);
        confirm($result);
        if(row_count($result)==1){
            return fetch_array($result);
        }else{
            return false;
        }
    }

    // TO check if a user is present in user table or not
    function userExistsInAccommodation($anweshaid){
        $sql="SELECT id from accommodation WHERE anweshaid='$anweshaid'";
        $result=query($sql);
        confirm($result);
        if(row_count($result)==1){
            return true;
        }else{
            return false;
        }
    }