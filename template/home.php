<?php
/**
 * GISMO block
 *
 * @package    block_gismo
 * @copyright  eLab Christian Milani
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
    // libraries & acl
    require_once "common.php";
    $bookid = get_config('moodle', 'block_gismo_additionalhelp');
?>
<div id="app_content">
    <div id="left_menu">
        <div id="lm_header" class="ct_header">
            <!-- Users / Resources / Assignments / Quizzes menu -->
            <img class="image_link" id="close_control" src="images/close.png" alt="<?php print_string('hide_menu', 'block_gismo'); ?>" title="<?php print_string('hide_menu', 'block_gismo'); ?>" style="float: right; margin: 0; padding: 0;" onclick="javascript:g.lm.hide();" />
            <img class="image_link" id="left_menu_info" src="images/left_menu_info.gif" alt="<?php print_string('show_details', 'block_gismo'); ?>" title="<?php print_string('show_details', 'block_gismo'); ?>" style="float: right; margin-right: 15px;"  onclick="javascript:g.lm.show_info();" />
        </div>
        <div id="lm_content"><!-- Users / Resources / Assignments / Quizzes lists --></div>
    </div>
    <div id="chart">
        <div id="ch_header" class="ct_header">
            <img class="image_link" id="open_control" src="images/open.png" alt="<?php print_string('show_menu', 'block_gismo'); ?>" title="<?php print_string('show_menu', 'block_gismo'); ?>" style="float: left; margin: 0; padding: 0; margin-right: 5px; display: none;" onclick="javascript:g.lm.show();" />
            <div id="course_name">
            </div>
            <div id="title"><!-- Chart title --></div>
        </div>
        <div id="ch_content">
            <div id="error_message">
                <div id="title"></div>
                <p id="message"></p>
            </div>
            <div id="processing">
                <div id="p_img"><img src="images/processing.gif" alt="<?php print_string('homepage_processing_data', 'block_gismo'); ?>" /></div>
                <p id="p_message"><?php print_string('homepage_processing_data_wait', 'block_gismo'); ?></p>
            </div>
            <div id="plot_container">
                <div id="plot">
                    <!-- Chart -->
                </div>
            </div>
            <div id="welcome_page">
                <h1 align="center">Welcome to LearnTrak</h1>
                <table id="charts_list" cellspacing="0" cellpadding="5" align="center" width="840">
                    <tr>
                        <td class="home-image"><img width="200" height="100" src="images/home/students-accesses-overview_thumb.png" /></td>
                        <td>LearnTrak is a graphical interactive student monitoring and tracking system tool that extracts tracking data from this Learn course, and generates useful graphical representations that can be explored by course instructors to examine various aspects of student engagement. The LearnTrak block is only visible to the instructors of the course.</td>
                        <td class="home-image"><img width="200" height="100" src="images/home/activities-assignments-quizzes_thumb.png" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="help">
                            <?php
                                if (!empty($bookid)) {
                                    require_once($CFG->dirroot.'/mod/book/locallib.php');
                                    $cm = get_coursemodule_from_id('book', $bookid, 0, false, MUST_EXIST);
                                    $book = $DB->get_record('book', array('id'=>$cm->instance), '*', MUST_EXIST);
                                    $context = context_module::instance($cm->id);
                                    $chapters = book_preload_chapters($book);
                                    echo "<h2>How can LearnTrak support your teaching?</h2>";
                                    $toc = book_get_toc($chapters, $chapter, $book, $cm, false);
                                    $toc = str_replace('href="view.php', 'target="_blank" href="'.$CFG->wwwroot.'/mod/book/view.php', $toc);
                                    echo $toc;
                                }
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="home-image" valign="bottom"><img width="200" height="100" src="images/home/students-accesses_thumb.png" /></td>
                        <td class="help" style="width:auto;">
                            <h2>LearnTrak Help Topics</h2>
                            <ul class="contents" style="margin-bottom:0;">
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#overview">Overview</a></li>
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#options">Options</a></li>
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#saving">Saving displayed information</a></li>
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#students-accesses">Students</a>
                                    <ul>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#students-accesses">Accesses by students</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#students-accesses-overview">Accesses overview</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#students-accesses-overview-resources">Accesses overview on resources or books</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#student-details-resources">Student details on resources or books</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#groups">Groups and Groupings of students</a></li>
                                    </ul>
                                </li>
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#resources-students-overview">Resources</a>
                                    <ul>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#resources-students-overview">Students overview of resources or books</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#resources-accesses-overview">Accesses overview of resources or books</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#resources-details-students">Resource details on students</a></li>
                                    </ul>
                                </li>
                                <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#activities">Activities</a>
                                    <ul>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#activities-assignments-quizzes">Assignments or Quizzes overview</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#activities-forums-accesses-overview">Forums, glossaries or wikis overview</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#activities-forums-details-students">Student details on forums, glossaries or wikis</a></li>
                                        <li><a href="?q=help&srv_data=<?php echo $srv_data_encoded;?>#activities-forums-student-overview">Forums, glossaries or wikis contributions over time</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="help" style="display: none;">
    <?php require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "help.php"); ?>
</div>
<div id="why" style="display: none;">
    <?php
        if (!empty($bookid)) {
            require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "why.php");
        }
    ?>
</div>