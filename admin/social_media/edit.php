<?php
include "../../connect.php";
$sm_id = filterRequest("sm_id");
$sm_facebook = filterRequest("sm_facebook");
$sm_whatsapp = filterRequest("sm_whatsapp");
$sm_github = filterRequest("sm_github");
$sm_linkedin = filterRequest("sm_linkedin");
$sm_email = filterRequest("sm_email");
$sm_twitter = filterRequest("sm_twitter");
$sm_cv = filterRequest("sm_cv");
$sm_instagram = filterRequest("sm_instagram");
       $data = array(
        "sm_facebook" => $sm_facebook,
        "sm_whatsapp" => $sm_whatsapp,
        "sm_github" => $sm_github,
        "sm_linkedin" => $sm_linkedin,
        "sm_email" => $sm_email,
        "sm_twitter" => $sm_twitter,
        "sm_cv" => $sm_cv,
        "sm_instagram" => $sm_instagram); 
updateData("social_media", $data, " sm_id = $sm_id ");
