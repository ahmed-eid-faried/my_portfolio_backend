<?php

include "../../connect.php";
$services_id = filterRequest("services_id"); 
$imageold = imageUpload("../../upload/home_detials","imageold");
 deleteData("services", " services_id = $services_id ");
