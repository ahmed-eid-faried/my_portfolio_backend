<?php

include "../connect.php";

$cm_name = filterRequest("cm_name");
$cm_address = filterRequest("cm_address");
$cm_number = filterRequest("cm_number");
$cm_subject = filterRequest("cm_subject");
$cm_message = filterRequest("cm_message");

$data = array(
    "cm_name" => $cm_name,
    "cm_address" => $cm_address,
    "cm_number" => $cm_number,
    "cm_subject" => $cm_subject,
    "cm_message" => $cm_message,
);

insertData("contact_message", $data);
 