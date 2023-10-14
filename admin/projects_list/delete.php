<?php

include "../../connect.php";
$pl_id = filterRequest("pl_id"); 
$imageold = imageUpload("../../upload/projects_list","imageold");
 deleteData("projects_list", " pl_id = $pl_id ");
