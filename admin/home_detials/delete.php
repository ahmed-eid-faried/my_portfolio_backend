<?php

include "../../connect.php";
$hd_id = filterRequest("hd_id"); 
$imageold = imageUpload("../../upload/home_detials","imageold");
 deleteData("home_detials", " hd_id = $hd_id ");
