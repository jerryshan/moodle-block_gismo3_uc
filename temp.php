<?php

require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . "../../config.php";
global $DB;

  $course = $DB->get_record("course", array("id" => 8));
   
    
    // get users
    $context = get_context_instance(CONTEXT_COURSE, $course->id);
    
    echo $context->id;
  
    $users = get_users_by_capability($context, "block/gismo:track-user");
  
    var_dump($users);