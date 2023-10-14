<?php
include "../../connect.php";

$pl_id = filterRequest("pl_id");
$pl_title = filterRequest("pl_title");
$pl_body = filterRequest("pl_body");
$pl_googleplay = filterRequest("pl_googleplay");
$pl_appstore = filterRequest("pl_appstore");
$pl_github = filterRequest("pl_github");
$pl_doc = filterRequest("pl_doc");

$pl_image = imageUpload("../../upload/projects_list", "file");
$imageold = filterRequest("imageold");

if ($pl_image == "empty") {
    $data = array(
        "pl_title" => $pl_title,
        "pl_body" => $pl_body,
        "pl_googleplay" => $pl_googleplay,
        "pl_appstore" => $pl_appstore,
        "pl_github" => $pl_github,
        "pl_doc" => $pl_doc
    );
} else {
    deleteFile("../../upload/projects_list", $imageold);
    $data = array(
        "pl_title" => $pl_title,
        "pl_body" => $pl_body,
        "pl_googleplay" => $pl_googleplay,
        "pl_appstore" => $pl_appstore,
        "pl_github" => $pl_github,
        "pl_doc" => $pl_doc,
        "pl_image" => $pl_image
    );
}
try {
    updateData("projects_list", $data, "pl_id = $pl_id");
} catch (Exception $e) {
     echo 'Caught exception: ', $e->getMessage(), "\n";}

?>
