<?php

include "../../connect.php";
$sm_id = filterRequest("sm_id"); 
 deleteData("social_media", " sm_id = $sm_id ");
