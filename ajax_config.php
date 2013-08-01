<?php
    // mode (josn)
    $error_mode = "json";
    
    // libraries & acl
    require_once "common.php";
    global $USER;
    
    // query
    $q = (isset($_REQUEST["q"])) ? $_REQUEST["q"] : "";
    
    // decide what to do
    switch ($q) {
        case "save":
            $result = array("status" => "false");
            if (isset($_REQUEST["config_data"]) AND is_array($_REQUEST["config_data"]) AND count($_REQUEST["config_data"]) > 0) {
                // serialize and encode config data
                $config_data = base64_encode(serialize((object) $_REQUEST["config_data"]));
                // update config
                if ($opts = $DB->get_record('block_gismo_user_options', array('user'=>$USER->id))) {
                    $opts->configdata = $config_data;
                    $check = $DB->update_record('block_gismo_user_options', $opts);
                } else {
                    $opts = new stdClass;
                    $opts->user = $USER->id;
                    $opts->configdata = $config_data;
                    $check = $DB->insert_record('block_gismo_user_options', $opts);
                }
                if ($check !== false) {
                    $result["status"] = "true";    
                }    
            }
            break;
        default:
            break;    
    }
    
    // send response
    echo json_encode($result);   
?>
