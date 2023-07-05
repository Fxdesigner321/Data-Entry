<?php

error_reporting(0);
/* First of all we have to check if the form is submitted via the POST method */

if(isset($_POST['submit'])){
    /* If the form is submitted we are gonna create a new associative array to hold the value we will store */
    $new_message = array(
        "Name" => $_POST['Name'],
        "Color_Code" => $_POST['Color_Code'],
        "Circle_Icon" => $_POST['Circle_Icon'],
        "Triangle_Icon" => $_POST['Triangle_Icon']
    );

    /* before storing the new_message[] array, we have to check if this is the first record.
    we are doing this by checking the filesize of our json file */
    if(filesize("message.json")== 0){
        // If this is the first record, we creating an array inside the 
        // Json file to hold our message.
        $first_record = array($new_message);
        /* The only purpose of this step is a create an array inside the json file to hold our message,
        You will see in a sec */

        // i'll assing the record to a genertic variable for later use.
        $data_to_save = $first_record;
    }else{
        /* If this is not the first record, and there are message stored in the file, we have to pull all those
        old message so we can add the new one.
        Ans also we have to decode the data we fetch */
        $old_records = json_decode(file_get_contents("message.json"));

        // Now  we can add to that array our new message.
        array_push($old_records, $new_message);

        // and i'll assign the record to our genertic variable.
        $data_to_save = $old_records;
    }

    /* Now our last step is to store the data to the message.json file */
    if(!file_put_contents("message.json", json_encode($data_to_save), LOCK_EX)){
    // If something went wrong, we are showing an error message.
    $error ="Error storing message, please try again";
    }else{
        $success = "Message is stored successfully";
    }
}

if(isset($_POST['submit1'])){
    /* If the form is submitted we are gonna create a new associative array to hold the value we will store */
    $new_region = array(
        "ID" => $_POST['ID'],
        "RColor_Code" => $_POST['RColor_Code'],
        "Geocode" => $_POST['Geocode']
    );

    /* before storing the new_message[] array, we have to check if this is the first record.
    we are doing this by checking the filesize of our json file */
    if(filesize("region.json")== 0){
        // If this is the first record, we creating an array inside the 
        // Json file to hold our message.
        $first_record = array($new_region);
        /* The only purpose of this step is a create an array inside the json file to hold our message,
        You will see in a sec */

        // i'll assing the record to a genertic variable for later use.
        $data_to_save = $first_record;
    }else{
        /* If this is not the first record, and there are message stored in the file, we have to pull all those
        old message so we can add the new one.
        Ans also we have to decode the data we fetch */
        $old_records = json_decode(file_get_contents("region.json"));

        // Now  we can add to that array our new message.
        array_push($old_records, $new_region);

        // and i'll assign the record to our genertic variable.
        $data_to_save = $old_records;
    }

    /* Now our last step is to store the data to the message.json file */
    if(!file_put_contents("region.json", json_encode($data_to_save), LOCK_EX)){
    // If something went wrong, we are showing an error message.
    $error ="Error storing message, please try again";
    }else{
        $success = "Message is stored successfully";
    }
}
?>