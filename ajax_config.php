<?php

/**
 * GISMO block
 *
 * @package    block_gismo
 * @copyright  eLab Christian Milani
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
    // mode (josn)
    $error_mode = "json";

    // libraries & acl
    require_once "common.php";
    global $USER;

    // query
//$q = optional_param('q', '', PARAM_TEXT);
$config_data = optional_param_array('config_data',array(),PARAM_INT);
    // decide what to do
    switch ($q) {
        case "save":
            $result = array("status" => "false");
        if (isset($config_data ) AND is_array($config_data ) AND count($config_data ) > 0) {
                // serialize and encode config data
            $config_data_encode = base64_encode(serialize((object) $config_data ));
                // update config
                if ($opts = $DB->get_record('block_gismo_user_options', array('user'=>$USER->id))) {
                    $opts->configdata = $config_data_encode;
                    $check = $DB->update_record('block_gismo_user_options', $opts);
                } else {
                    $opts = new stdClass;
                    $opts->user = $USER->id;
                    $opts->configdata = $config_data_encode;
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
