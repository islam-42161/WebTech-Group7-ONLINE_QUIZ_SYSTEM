<?php

//Setting default values of variables
$USERNAME=$EMAIL=$FIRST_NAME=$LAST_NAME=$GENDER=$CONTACT_INFO=$PASSWORD=$CONFIRM_PASSOWORD="";






// admin


if(isset($_POST['AdminSubmit'])){
    $ADMINCRED="";
    $WARNING=false;
    $USERNAME = $_POST['username'];
    $EMAIL = $_POST['email'];
    $FIRST_NAME = $_POST['firstname'];
    $LAST_NAME= $_POST['lastname'];
    if(isset($_POST['gender'])){

        $GENDER = $_POST['gender'];
    }
    else{
        $WARNING = true;
    }
    $CONTACT_INFO = $_POST['phone'];
    $PASSWORD = $_POST['password'];
    $CONFIRM_PASSWORD = $_POST['confirmpassword'];

    //echo "<br/> User type is: " . $USER_TYPE_SELECTED."<br/>";

    //username
    if(strlen($USERNAME)>4){

        echo "<br/> Username: ".$USERNAME."<br/>";
    }
    else{
        echo "<br/> Username has to be at least 4 characters ❌<br/>";
        $WARNING = true;
    }


    //email
    if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        echo $EMAIL." is a valid email address<br/>";
      } else {
        echo $EMAIL." is not a valid email address ❌<br/>";
        $WARNING = true;
      }


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $PASSWORD);
    $lowercase = preg_match('@[a-z]@', $PASSWORD);
    $number    = preg_match('@[0-9]@', $PASSWORD);
    $specialChars = preg_match('@[^\w]@', $PASSWORD);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($PASSWORD) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.❌<br/>';
        $WARNING = true;
    }else{
        echo 'Strong password: ' . $PASSWORD.'<br/>';
    }

    if($PASSWORD == $CONFIRM_PASSWORD){
        echo "<br/> Password ==  Confirm Password: ".$CONFIRM_PASSWORD."<br/>";
    }
    else{
        echo "<br/>Password does not match: ".$PASSWORD.",".$CONFIRM_PASSWORD."❌<br/>";
        $WARNING = true;
    }
    //first name
    if(strlen($FIRST_NAME)>0){

        echo "<br/> First name: ".$FIRST_NAME."<br/>";
    }
    else{
        echo "<br/> First name field should not be empty ❌<br/>";
        $WARNING = true;
    }
    //last name
    if(strlen($LAST_NAME)>0){
        echo "<br/> Last Name: ".$LAST_NAME."<br/>";
    }
    else{
        echo "<br/> Last name field should not be empty ❌<br/>";
        $WARNING = true;

    }
    //contact info
    if(strlen($CONTACT_INFO)>=11){

        echo "<br/> Contact no.: ".$CONTACT_INFO."<br/>";
    }
    else{
        echo "<br/> Contact info has to be equal or more than 11 characters ❌<br/>";
        $WARNING = true;

    }
    //gender
    if(strlen($GENDER)>0){

        echo "<br/> Gender: ".$GENDER."<br/>";
    }
    else{
        echo "<br/> No gender selected ❌<br/>";
        $WARNING = true;
    }

    //admin cred
    if(strlen($ADMINCRED)>5 && $ADMINCRED == 'admin123'){

        echo "<br/> User is an admin <br/>";
    }
    else{
        echo "<br/> Wrong admin credential. <br/>";
        $WARNING = true;
    }

    if(!$WARNING){
        echo "<h1>all data ok ✅</h1>";

        $JSON_ARRAY = 
            array(
                "username" => $USERNAME,
                "email" => $EMAIL,
                "firstname" => $FIRST_NAME,
                "lastname" => $LAST_NAME,
                "gender" => $GENDER,
                "phone" => $CONTACT_INFO,
                "password" => $PASSWORD,
                "admincred" => $ADMINCRED
            );
        

        
        createNewTeacher($JSON_ARRAY);
    }


    else{
        echo "<h1>Error! ❌</h1>";
    }
}










// guest

if(isset($_POST['GuestSubmit'])){
    
    $WARNING=false;
    $USERNAME = $_POST['username'];
    $EMAIL = $_POST['email'];
    $FIRST_NAME = $_POST['firstname'];
    $LAST_NAME= $_POST['lastname'];
    if(isset($_POST['gender'])){

        $GENDER = $_POST['gender'];
    }
    else{
        $WARNING = true;
    }
    $CONTACT_INFO = $_POST['phone'];
    $PASSWORD = $_POST['password'];
    $CONFIRM_PASSWORD = $_POST['confirmpassword'];

    //echo "<br/> User type is: " . $USER_TYPE_SELECTED."<br/>";

    //username
    if(strlen($USERNAME)>4){

        echo "<br/> Username: ".$USERNAME."<br/>";
    }
    else{
        echo "<br/> Username has to be at least 4 characters ❌<br/>";
        $WARNING = true;
    }


    //email
    if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        echo $EMAIL." is a valid email address<br/>";
      } else {
        echo $EMAIL." is not a valid email address ❌<br/>";
        $WARNING = true;
      }


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $PASSWORD);
    $lowercase = preg_match('@[a-z]@', $PASSWORD);
    $number    = preg_match('@[0-9]@', $PASSWORD);
    $specialChars = preg_match('@[^\w]@', $PASSWORD);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($PASSWORD) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.❌<br/>';
        $WARNING = true;
    }else{
        echo 'Strong password: ' . $PASSWORD.'<br/>';
    }

    if($PASSWORD == $CONFIRM_PASSWORD){
        echo "<br/> Password ==  Confirm Password: ".$CONFIRM_PASSWORD."<br/>";
    }
    else{
        echo "<br/>Password does not match: ".$PASSWORD.",".$CONFIRM_PASSWORD."❌<br/>";
        $WARNING = true;
    }
    //first name
    if(strlen($FIRST_NAME)>0){

        echo "<br/> First name: ".$FIRST_NAME."<br/>";
    }
    else{
        echo "<br/> First name field should not be empty ❌<br/>";
        $WARNING = true;
    }
    //last name
    if(strlen($LAST_NAME)>0){
        echo "<br/> Last Name: ".$LAST_NAME."<br/>";
    }
    else{
        echo "<br/> Last name field should not be empty ❌<br/>";
        $WARNING = true;

    }
    //contact info
    if(strlen($CONTACT_INFO)>=11){

        echo "<br/> Contact no.: ".$CONTACT_INFO."<br/>";
    }
    else{
        echo "<br/> Contact info has to be equal or more than 11 characters ❌<br/>";
        $WARNING = true;

    }
    //gender
    if(strlen($GENDER)>0){

        echo "<br/> Gender: ".$GENDER."<br/>";
    }
    else{
        echo "<br/> No gender selected ❌<br/>";
        $WARNING = true;
    }

    
    if(!$WARNING){
        echo "<h1>all data ok ✅</h1>";

        $JSON_ARRAY = 
            array(
                "username" => $USERNAME,
                "email" => $EMAIL,
                "firstname" => $FIRST_NAME,
                "lastname" => $LAST_NAME,
                "gender" => $GENDER,
                "phone" => $CONTACT_INFO,
                "password" => $PASSWORD,
            );
        

        
        createNewGuest($JSON_ARRAY);
    }


    else{
        echo "<h1>Error! ❌</h1>";
    }
}


// when user is teacher

if(isset($_POST['TeacherSubmit'])){
    $GROUPNAME="";
    $WARNING=false;
    $USERNAME = $_POST['username'];
    $EMAIL = $_POST['email'];
    $FIRST_NAME = $_POST['firstname'];
    $LAST_NAME= $_POST['lastname'];
    //EXTRA FOR TEACHER
    $GROUPNAME = $_POST['teachergroupname'];
    $MAXSTUDNUMBER = $_POST['maxstudent'];
    $DYNAMICGROUP = $_POST['dynamicgroup'];
    if(isset($_POST['gender'])){

        $GENDER = $_POST['gender'];
    }
    else{
        $WARNING = true;
    }
    $CONTACT_INFO = $_POST['phone'];
    $PASSWORD = $_POST['password'];
    $CONFIRM_PASSWORD = $_POST['confirmpassword'];

    //echo "<br/> User type is: " . $USER_TYPE_SELECTED."<br/>";

    //username
    if(strlen($USERNAME)>4){

        echo "<br/> Username: ".$USERNAME."<br/>";
    }
    else{
        echo "<br/> Username has to be at least 4 characters ❌<br/>";
        $WARNING = true;
    }


    //email
    if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        echo $EMAIL." is a valid email address<br/>";
      } else {
        echo $EMAIL." is not a valid email address ❌<br/>";
        $WARNING = true;
      }


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $PASSWORD);
    $lowercase = preg_match('@[a-z]@', $PASSWORD);
    $number    = preg_match('@[0-9]@', $PASSWORD);
    $specialChars = preg_match('@[^\w]@', $PASSWORD);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($PASSWORD) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.❌<br/>';
        $WARNING = true;
    }else{
        echo 'Strong password: ' . $PASSWORD.'<br/>';
    }

    if($PASSWORD == $CONFIRM_PASSWORD){
        echo "<br/> Password ==  Confirm Password: ".$CONFIRM_PASSWORD."<br/>";
    }
    else{
        echo "<br/>Password does not match: ".$PASSWORD.",".$CONFIRM_PASSWORD."❌<br/>";
        $WARNING = true;
    }
    //first name
    if(strlen($FIRST_NAME)>0){

        echo "<br/> First name: ".$FIRST_NAME."<br/>";
    }
    else{
        echo "<br/> First name field should not be empty ❌<br/>";
        $WARNING = true;
    }
    //last name
    if(strlen($LAST_NAME)>0){
        echo "<br/> Last Name: ".$LAST_NAME."<br/>";
    }
    else{
        echo "<br/> Last name field should not be empty ❌<br/>";
        $WARNING = true;

    }
    //contact info
    if(strlen($CONTACT_INFO)>=11){

        echo "<br/> Contact no.: ".$CONTACT_INFO."<br/>";
    }
    else{
        echo "<br/> Contact info has to be equal or more than 11 characters ❌<br/>";
        $WARNING = true;

    }
    //gender
    if(strlen($GENDER)>0){

        echo "<br/> Gender: ".$GENDER."<br/>";
    }
    else{
        echo "<br/> No gender selected ❌<br/>";
        $WARNING = true;
    }

    //group name
    if(strlen($GROUPNAME)>5){

        echo "<br/> Group name: ".$GROUPNAME."<br/>";
    }
    else{
        echo "<br/> No group created(Group name has to contain more than 5 chars) ❌<br/>";
        $WARNING = true;
    }

    // maximum student number
    if(isset($_POST['maxstudent']) && $_POST['maxstudent']>0){
        echo("Number of maximum group members(if not dynamic): $MAXSTUDNUMBER");
    }
    else{
        echo "<br/> Select valid number of maximum group members.❌<br/>";
        $WARNING = true;
    }

    // is dynamic?
    echo("Dynamic group: $MAXSTUDNUMBER");

    if(!$WARNING){
        echo "<h1>all data ok ✅</h1>";

        $JSON_ARRAY = 
            array(
                "username" => $USERNAME,
                "email" => $EMAIL,
                "firstname" => $FIRST_NAME,
                "lastname" => $LAST_NAME,
                "gender" => $GENDER,
                "phone" => $CONTACT_INFO,
                "password" => $PASSWORD,
                "groupname" => $GROUPNAME,
                "maxstudent" => $MAXSTUDNUMBER,
                "isdynamic" => $DYNAMICGROUP
            );
        

        
        createNewTeacher($JSON_ARRAY);
    }


    else{
        echo "<h1>Error! ❌</h1>";
    }
}

// when user is student
if(isset($_POST['StudentSubmit'])){
    $REGISTERUNDER="";
    $WARNING=false;
    $USERNAME = $_POST['username'];
    $EMAIL = $_POST['email'];
    $FIRST_NAME = $_POST['firstname'];
    $LAST_NAME= $_POST['lastname'];
    $REGISTERUNDER = $_POST['registerunder'];
    if(isset($_POST['gender'])){

        $GENDER = $_POST['gender'];
    }
    else{
        $WARNING = true;
    }
    $CONTACT_INFO = $_POST['phone'];
    $PASSWORD = $_POST['password'];
    $CONFIRM_PASSWORD = $_POST['confirmpassword'];

    //echo "<br/> User type is: " . $USER_TYPE_SELECTED."<br/>";

    //username
    if(strlen($USERNAME)>4){

        echo "<br/> Username: ".$USERNAME."<br/>";
    }
    else{
        echo "<br/> Username has to be at least 4 characters ❌<br/>";
        $WARNING = true;
    }


    //email
    if (filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        echo $EMAIL." is a valid email address<br/>";
      } else {
        echo $EMAIL." is not a valid email address ❌<br/>";
        $WARNING = true;
      }


    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $PASSWORD);
    $lowercase = preg_match('@[a-z]@', $PASSWORD);
    $number    = preg_match('@[0-9]@', $PASSWORD);
    $specialChars = preg_match('@[^\w]@', $PASSWORD);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($PASSWORD) < 8) {
        echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.❌<br/>';
        $WARNING = true;
    }else{
        echo 'Strong password: ' . $PASSWORD.'<br/>';
    }

    if($PASSWORD == $CONFIRM_PASSWORD){
        echo "<br/> Password ==  Confirm Password: ".$CONFIRM_PASSWORD."<br/>";
    }
    else{
        echo "<br/>Password does not match: ".$PASSWORD.",".$CONFIRM_PASSWORD."❌<br/>";
        $WARNING = true;
    }
    //first name
    if(strlen($FIRST_NAME)>0){

        echo "<br/> First name: ".$FIRST_NAME."<br/>";
    }
    else{
        echo "<br/> First name field should not be empty ❌<br/>";
        $WARNING = true;
    }
    //last name
    if(strlen($LAST_NAME)>0){
        echo "<br/> Last Name: ".$LAST_NAME."<br/>";
    }
    else{
        echo "<br/> Last name field should not be empty ❌<br/>";
        $WARNING = true;

    }
    //contact info
    if(strlen($CONTACT_INFO)>=11){

        echo "<br/> Contact no.: ".$CONTACT_INFO."<br/>";
    }
    else{
        echo "<br/> Contact info has to be equal or more than 11 characters ❌<br/>";
        $WARNING = true;

    }
    //gender
    if(strlen($GENDER)>0){

        echo "<br/> Gender: ".$GENDER."<br/>";
    }
    else{
        echo "<br/> No gender selected ❌<br/>";
        $WARNING = true;
    }

    //group name
    if(strlen($REGISTERUNDER)>5){

        echo "<br/> Group name: ".$REGISTERUNDER."<br/>";
    }
    else{
        echo "<br/> No group added(Group name has to contain more than 5 chars)/found ❌<br/>";
        $WARNING = true;
    }


    if(!$WARNING){
        echo "<h1>all data ok ✅</h1>";

        $JSON_ARRAY = 
            array(
                "username" => $USERNAME,
                "email" => $EMAIL,
                "firstname" => $FIRST_NAME,
                "lastname" => $LAST_NAME,
                "gender" => $GENDER,
                "phone" => $CONTACT_INFO,
                "password" => $PASSWORD,
                "registerunder" => $REGISTERUNDER,
            );
        

        
        createNewStudent($JSON_ARRAY);
    }


    else{
        echo "<h1>Error! ❌</h1>";
    }
}




function createNewStudent($USER_DATA) {

    // read old user datas
    $json = file_get_contents('../Files/user_students.json');
    $old_jsons = json_decode($json, true);
    //print_r($old_jsons);
    //add new user;
    //echo $result;
    //echo ($USER_DATA["username"]);

    $same_username = false;
    foreach ($old_jsons as $person) {
        if(in_array($USER_DATA["username"],$person)){
            $same_username = true;
            break;
        }
    }

    if($same_username){
        echo "<br/> Username already exists! try a new one!<br/>";
    }
    else{
        array_push($old_jsons,$USER_DATA);
        $result = json_encode($old_jsons,JSON_PRETTY_PRINT);
    
        if(file_put_contents("../Files/user_students.json",$result)){
            echo "<br/>Successfully added user<br/>";
            header("Location: LandingPage.php");
        }
        else{
            echo "<br/>Failed creating new user ❌.<br/>";
        }
    }

  } 
function createNewGuest($USER_DATA) {

    // read old user datas
    $json = file_get_contents('../Files/user_guests.json');
    $old_jsons = json_decode($json, true);
    //print_r($old_jsons);
    //add new user;
    //echo $result;
    //echo ($USER_DATA["username"]);

    $same_username = false;
    foreach ($old_jsons as $person) {
        if(in_array($USER_DATA["username"],$person)){
            $same_username = true;
            break;
        }
    }

    if($same_username){
        echo "<br/> Username already exists! try a new one!<br/>";
    }
    else{
        array_push($old_jsons,$USER_DATA);
        $result = json_encode($old_jsons,JSON_PRETTY_PRINT);
    
        if(file_put_contents("../Files/user_guests.json",$result)){
            echo "<br/>Successfully added user<br/>";
            header("Location: LandingPage.php");
        }
        else{
            echo "<br/>Failed creating new user ❌.<br/>";
        }
    }

  } 

function createNewTeacher($USER_DATA){
    // read old user datas
    $json = file_get_contents('../Files/user_teachers.json');
    $old_jsons = json_decode($json, true);
    //print_r($old_jsons);
    //add new user;
    //echo $result;
    //echo ($USER_DATA["username"]);

    $same_username = false;
    foreach ($old_jsons as $person) {
        if(in_array($USER_DATA["username"],$person)){
            $same_username = true;
            break;
        }
    }

    if($same_username){
        echo "<br/> Username already exists! try a new one!<br/>";
    }
    else{
        array_push($old_jsons,$USER_DATA);
        $result = json_encode($old_jsons,JSON_PRETTY_PRINT);
    
        if(file_put_contents("../Files/user_teachers.json",$result)){
            echo "<br/>Successfully added user<br/>";
            header("Location: LandingPage.php");
        }
        else{
            echo "<br/>Failed creating new user ❌.<br/>";
        }
    }

  }
function createNewAdmin($USER_DATA){
    // read old user datas
    $json = file_get_contents('../Files/user_admins.json');
    $old_jsons = json_decode($json, true);
    //print_r($old_jsons);
    //add new user;
    //echo $result;
    //echo ($USER_DATA["username"]);

    $same_username = false;
    foreach ($old_jsons as $person) {
        if(in_array($USER_DATA["username"],$person)){
            $same_username = true;
            break;
        }
    }

    if($same_username){
        echo "<br/> Username already exists! try a new one!<br/>";
    }
    else{
        array_push($old_jsons,$USER_DATA);
        $result = json_encode($old_jsons,JSON_PRETTY_PRINT);
    
        if(file_put_contents("../Files/user_admins.json",$result)){
            echo "<br/>Successfully added user<br/>";
            header("Location: LandingPage.php");
        }
        else{
            echo "<br/>Failed creating new user ❌.<br/>";
        }
    }

  }




?>