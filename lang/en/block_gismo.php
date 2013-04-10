<?php
//GISMO EN language file
// block title
$string['pluginname'] = 'Gismo';
$string['gismo'] = 'MOCLOG - Gismo';
$string['gismo_report_launch'] = 'Reporting Tool';

// capabilities
$string['gismo:track-user'] = 'Gismo Student';
$string['gismo:track-teacher'] = 'Gismo Teacher';

// help
$string['gismo_help'] = "<p>Gismo works on those courses that meet the following requirements:</p><ul><li>there is at least one student enrolled in the course</li><li>there is at least one instance of one of the following modules:<ul><li>Resources (URLs, Files, Folders, Pages or Books)</li><li>Assignments</li><li>Chats</li><li>Forums</li><li>Glossaries</li><li>Quizzes</li><li>Wikis</li></ul></li></ul>";

// General
$string['page_title'] = "Gismo - ";
$string['file'] = 'File';
$string['options'] = 'Options';
$string['save'] = 'Export chart as image';
$string['print'] = 'Print';
$string['exit'] = 'Exit';
$string['help'] = 'Help';
$string['home'] = 'Gismo home';
$string['close'] = 'Close';

$string['users'] = 'users'; //************
$string['groups'] = 'Groups';
$string['not_in_a_grouping'] = 'Not in a Grouping';
$string['teachers'] = 'teachers'; //************

// Students
$string['students'] = 'Students';
$string['student_accesses'] = 'Accesses by students';
$string['student_accesses_chart_title'] = 'Students: accesses by students';
$string['student_accesses_overview'] = 'Accesses overview';
$string['student_accesses_overview_chart_title'] = 'Students: accesses overview';
$string['student_resources_overview'] = 'Accesses overview on resources';
$string['student_resources_overview_chart_title'] = 'Students: accesses overview on resources';
$string['student_resources_details_chart_title'] = 'Students: student details on resources';
$string['student_books_overview'] = 'Accesses overview on books';
$string['student_books_overview_chart_title'] = 'Students: accesses overview on books';
$string['student_books_details_chart_title'] = 'Students: student details on books';

// Resources
$string['resources'] = 'Resources';
$string['detail_resources'] = 'Details on resources';
$string['resources_students_overview'] = 'Resources - Students overview';
$string['resources_students_overview_chart_title'] = 'Resources: students overview';
$string['resources_access_overview'] = 'Resources - Accesses overview';
$string['resources_access_overview_chart_title'] = 'Resources: accesses overview';
$string['resources_access_detail_chart_title'] = 'Resources: resource details on students'; //**************

// Books
$string['books_students_overview'] = 'Books - Students overview';
$string['books_students_overview_chart_title'] = 'Books: students overview';
$string['books_access_overview'] = 'Books - Accesses overview';
$string['books_access_overview_chart_title'] = 'Books: accesses overview';
$string['books'] = 'Books';

// Activities
$string['activities'] = 'Activities';
$string['assignments'] = 'Assignments';
$string['assignments_chart_title'] = 'Activities: assignments overview';
$string['chats'] = 'Chats';

$string['chats_over_time'] = 'Chats over time'; //************

$string['chats_chart_title'] = 'Activities: chats overview';
$string['chats_ud_chart_title'] = 'Activities: student details on chats';
$string['chats_over_time_chart_title'] = 'Activities: contributions to chats over time';
$string['forums'] = 'Forums';

$string['forums_over_time'] = 'Forums over time'; //************

$string['forums_chart_title'] = 'Activities: forums overview';
$string['forums_ud_chart_title'] = 'Activities: student details on forums';
$string['forums_over_time_chart_title'] = 'Activities: contributions to forums over time';

$string['glossaries'] = 'Glossaries';

$string['glossaries_over_time'] = 'Glossaries over time'; //************

$string['glossaries_chart_title'] = 'Activities: glossaries overview';
$string['glossaries_ud_chart_title'] = 'Activities: student details on glossaries';
$string['glossaries_over_time_chart_title'] = 'Activities: contributions to glossaries over time';

$string['quizzes'] = 'Quizzes';
$string['quizzes_chart_title'] = 'Activities: quizzes overview';

$string['wikis'] = 'Wikis';

$string['wikis_over_time'] = 'Wikis over time'; //************

$string['wikis_chart_title'] = 'Activities: wikis overview';
$string['wikis_ud_chart_title'] = 'Activities: student details on wikis';
$string['wikis_over_time_chart_title'] = 'Activities: contributions to wikis over time';

// Help
$string['help'] = 'Help';
$string['help_docs'] = 'Short overview';
$string['tutorial'] = 'Tutorial';
$string['about'] = 'About Gismo';

$string['date'] = 'Date';
$string['from'] = 'From';
$string['to'] = 'To';

$string['show'] = 'Show'; //************
$string['list'] = 'list'; //************

$string['menu_hide'] = 'Hide menu'; //************
$string['menu_show'] = 'Show menu'; //************
$string['detail_show'] = 'Show details'; //************

$string['items'] = 'ITEMS'; //************
$string['details'] = 'Details'; //************
$string['info_title'] = 'GISMO - Lists'; //************
$string['info_text'] = '<p>To customize the chart you can select/unselect items from enabled menus.</p>";
        message += "<p>Instructions</p>";
        message += "<ul style=\'list-style-position: inside;\'>";
        message += "<li>Main Checkbox: select/unselect all list items.</li>";
        message += "<li>Item Click: select/unselect the clicked item.</li>";
        message += "<li>Item Alt+Click: select only the clicked item</li>";
        message += "<li><img src=\'images/eye.png\'> show item details</li>";
        message += "</ul>'; //************


// Errors
$string['err_course_not_set'] = 'Course id is not set!';
$string['err_block_instance_id_not_set'] = 'Block instance id is not set!';
$string['err_authentication'] = 'You are not authenticated. It is possible that the moodle session has expired.<br /><br /><a href="">Login</a>';
$string['err_access_denied'] = 'You are not authorized to perform this action.';
$string['err_srv_data_not_set'] = 'One or more required parameters are missing!';
$string['err_missing_parameters'] = 'One or more required parameters are missing!';
$string['err_missing_course_students'] = 'Cannot extract course students!';
$string['gismo:view'] = "GISMO - Authorization failed";


//OTHERS
$string['welcome'] = "Welcome to GISMO v. 3.0.1Beta2";
$string['processing_wait'] = "Processing data, please wait!";

//Graphs labels
$string['accesses'] = "Accesses";
$string['timeline'] = "Timeline";
$string['actions_on'] = "Actions on ";
$string['nr_submissions'] = "Number of submissions";



//OPTIONS
$string['option_intro'] = 'This section let you customize specific applications options.';
$string['option_general_settings'] = 'General settings';
$string['option_include_hidden_items'] = 'Include hidden items';
$string['option_chart_settings'] = 'Chart settings';
$string['option_base_color'] = 'Base color';
$string['option_red'] = 'Red';
$string['option_green'] = 'Green';
$string['option_blue'] = 'Blue';
$string['option_g2r'] = 'Green to Red';
$string['option_axes_label_max_length'] = 'Axes label max length (characters)';
$string['option_axes_label_max_offset'] = 'Axes label max offset (characters)';
$string['option_number_of_colors'] = 'Number of colors (matrix charts)';
$string['option_other_settings'] = 'Other settings';
$string['option_window_resize_delay_seconds'] = 'Window resize delay (seconds)';
$string['save'] = 'Save';
$string['cancel'] = 'Cancel';


$string['export_chart_as_image'] = 'GISMO - Export chart as image';
$string['no_chart_at_the_moment'] = 'There isn\'t any chart at the moment!';


$string['about_gismo'] = 'About GISMO';
$string['intro_information_about_gismo'] = 'Information about this release is reported below:';  
$string['gismo_version'] = 'Version ';
$string['release_date'] = 'Release date ';
$string['authors'] = 'Authors ';
$string['contact_us']= 'Please feel free to contact authors for questions or for reporting bugs at the following addresses: ';
$string['close'] = 'Close';
$string['confirm_exiting'] = 'Do you really want to exit Gismo?';




?>
