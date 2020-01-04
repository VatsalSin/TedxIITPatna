<?php
include('./init.php');

if($_SERVER['REQUEST_METHOD']=="POST"){

    $errors=array();
    $response=array();

    // Execute 
    $eventid=clean($_POST["eventid"]);
    $celestaid=clean($_POST["celestaid"]);
    $access_token=clean($_POST["access_token"]);
    $member1=trim(clean($_POST["member1"]));
    $member2=trim(clean($_POST["member2"]));
    $member3=trim(clean($_POST["member3"]));
    $member4=trim(clean($_POST["member4"]));
    $member5=trim(clean($_POST["member5"]));
    $team_name=trim(clean($_POST['team_name']));
    $members=array();
    array_push($members,$celestaid);
    if(!empty($member1))
        array_push($members,$member1);
    if(!empty($member2))
        array_push($members,$member2);
    if(!empty($member3))
        array_push($members,$member3);
    if(!empty($member4))
        array_push($members,$member4);
    if(!empty($member5))
        array_push($members,$member5);

    if(verifyCaptain($celestaid,$access_token)){

        if(!isTeamEventExist($eventid)){
            $errors[]="Event doesn't exist.";
            $response['status']=404;
        }else{

            $sql10 = "SELECT ev_registrations, ev_name FROM events WHERE ev_id='$eventid'";
            $result10=query($sql10);
            $row10=fetch_array($result10);
            $ev_name=$row10['ev_name'];
            $regis=json_decode($row10['ev_registrations']);
            foreach($members as $memb){
                if(!validCelestaId($memb)){
                    $errors[]="$memb celesta id is incorrect or account is not active. Please entry correct details and try again.";
                    $response['status']=405;
                }
                if(idAlreadyRegistered($memb,$regis)){
                    $errors[]="$memb have Already registered for this event.";
                    $response['status']=302;
                }
            }
        }

        if(!empty($errors)){

            $response['message']=$errors;
            // echo json_encode($response);
        }else{
            /** Fetch details of all the members */
            $mem_emails=array();
            $mem_name=array();
            $mem_phone=array();
            foreach($members as $mem){
                $sql="SELECT first_name, last_name, phone, email from users WHERE celestaid='$mem'";
                $result=query($sql);
                $row=fetch_array($result);
                $name=$row['first_name']." ".$row['last_name'];
                $email=$row['email'];
                $phone=$row['phone'];
                
                array_push($mem_emails,$email);
                array_push($mem_name,$name);
                array_push($mem_phone,$phone);
            }

            /**  Things to be implemented
             * 1. Enter the data into the ev_registrations column of events table.
             * 2. Update the event registration in the user table corresponding to that user
             * 3. Update the data in the present users table events_registered column
             */

            // Updating the data into the events table.
            $reg=array();
            $reg["cap_celestaid"]=$members[0];
            $reg["cap_name"]=$mem_name[0];
            $reg["cap_phone"]=$mem_phone[0];
            $reg["cap_email"]=$mem_emails[0];
            $reg["team_name"]=$team_name;

            if(!empty($member1)){
                $reg['mem1_celestaid']=$members[1];
                $reg['mem1_name']=$mem_name[1];
                $reg['mem1_email']=$mem_emails[1];
                $reg['mem1_phone']=$mem_phone[1];
            }

            if(!empty($member2)){
                $reg['mem2_celestaid']=$members[2];
                $reg['mem2_name']=$mem_name[2];
                $reg['mem2_email']=$mem_emails[2];
                $reg['mem2_phone']=$mem_phone[2];
            }

            if(!empty($member3)){
                $reg['mem3_celestaid']=$members[3];
                $reg['mem3_name']=$mem_name[3];
                $reg['mem3_email']=$mem_emails[3];
                $reg['mem3_phone']=$mem_phone[3];
            }

            if(!empty($member4)){
                $reg['mem4_celestaid']=$members[4];
                $reg['mem4_name']=$mem_name[4];
                $reg['mem4_email']=$mem_emails[4];
                $reg['mem4_phone']=$mem_phone[4];
            }

            if(!empty($member5)){
                $reg['mem5_celestaid']=$members[5];
                $reg['mem5_name']=$mem_name[5];
                $reg['mem5_email']=$mem_emails[5];
                $reg['mem5_phone']=$mem_phone[5];
            }

            $reg['amount']=0;
            $reg["time"]=date('Y-m-d H:i:s');
            $regis[]=$reg;
            $regis=json_encode($regis);
            $sql2="UPDATE events SET ev_registrations='$regis' WHERE ev_id='$eventid'";
            $result2=query($sql2);

            // Updating the data into the user table.
            foreach($members as $mem){
                $sql = "SELECT events_registered from users WHERE celestaid='$mem'";
                $result=query($sql);
                $row=fetch_array($result);
                $ev_registered=json_decode($row["events_registered"]);
                $add_event=array();
                $add_event["cap_name"]=$mem_name[0];
                $add_event["team_name"]=$team_name;
                $add_event["ev_name"]=$ev_name;
                $add_event["ev_id"]=$eventid;
                $add_event["amount"]=0;
                $ev_registered[]=$add_event;
                $ev_registered=json_encode($ev_registered);
                $sql3="UPDATE users SET events_registered='$ev_registered' WHERE celestaid='$mem'";
                $result3=query($sql3);
            }

            $subject="Celesta2k19 Events Registration";

            $header="From: noreply@yourwebsite.com";
            $count=0;
            foreach($members as $mem){
                $msg="<p>
                Hi $mem_name[$count], you have successfully registered for $ev_name. Team captain is $mem_name[0] <br/>
                    Your Celesta Id is: $mem <br/>
                    Thank you for registering the events. Keep visiting the website to stay updated.
                ";
                $email=$mem_emails[$count];
                $count+=1;
                send_email($email,$subject,$msg,$header);
            }

            $response['status']=202;
            $errors[]="Successfully registered your team.";
        }

    }else{
        $response['status']=401;
        $errors[]="Captain Unauthorized.";
    }
    $response['message']=$errors;
    echo json_encode($response);
}

function validCelestaId($celestaid){
    $sql="SELECT id FROM users WHERE celestaid='$celestaid' and active=1";
    $result=query($sql);
    if(row_count($result)==1){
        return true;
    }else{
        return false;
    }
}

function verifyCaptain($celestaid,$access_token){
    $sql="SELECT id FROM users WHERE celestaid='$celestaid' AND access_token='$access_token'";
    $result=query($sql);
    if(row_count($result)==1){
        return true;
    }else{
        return false;
    }
}

function isTeamEventExist($eventid){
    $sql="SELECT id from events where ev_id='$eventid' AND is_team_event=1";
    $result=query($sql);
    if(row_count($result)==1){
        return true;
    }else{
        return false;
    }
}

function idAlreadyRegistered($celestaid,$regis){
    $flag=1;
    if($regis == NULL)
        return false;
    foreach($regis as $reg){
        $value=array();
        $value[]=$reg ->cap_celestaid;
        if(isset($reg ->mem1_celestaid))
            $value[]=$reg ->mem1_celestaid;
        if(isset($reg ->mem2_celestaid))
            $value[]=$reg ->mem2_celestaid;
        if(isset($reg ->mem3_celestaid))
            $value[]=$reg ->mem3_celestaid;
        if(isset($reg ->mem4_celestaid))
            $value[]=$reg ->mem4_celestaid;
        if(isset($reg ->mem5_celestaid))
            $value[]=$reg ->mem5_celestaid;
        foreach($value as $id){
            if($id==$celestaid){
                $flag=0;
                break;
            }
        }
    }
    if($flag==0){
        return true;
    }
    else{
        return false;
    }
}