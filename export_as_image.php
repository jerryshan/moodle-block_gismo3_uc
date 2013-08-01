<?php
    // data
    $img_mime = "image/png";
    $img_data = (isset($_POST["data"])) ? base64_decode($_POST["data"]) : "";
    $chart_id = "";
    if (isset($_POST["chart_id"])) {
        $pieces = explode("-", $_POST["chart_id"]);
        if (is_array($pieces) AND count($pieces) > 0) {
            foreach ($pieces as $p) {
                $chart_id .= ucfirst( str_replace(array(" ", ".", "_", "\\", "/"), array(""), trim($p)) );
            }
        }
    }
    $course_shortname =  (isset($_POST['course_shortname'])) ? str_replace(array(" ", ".", "\\", "/"), array("_"), trim($_POST['course_shortname'])) . '-' : "";
    
    // send headers
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT\n");
    header("Content-type: " . $img_mime . ";\n");
    header("Content-Disposition: attachment; filename=\"LearnTrak-" . $course_shortname . $chart_id . ".png\";\n");
    
    // send output
    echo $img_data;
?>