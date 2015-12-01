<?php

/**
 * GISMO block
 *
 * @package    block_gismo
 * @copyright  eLab Christian Milani
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// This file keeps track of upgrades to
// the moodle_gismo
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installtion to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the functions defined in lib/ddllib.php

function xmldb_block_gismo_upgrade($oldversion = 0) {
    global $CFG, $DB;

    // db manager
    // $dbman = $DB->get_manager();
    // STUFFS HERE

    if ($oldversion <= 2013101501) {
        // Shift from legacy log store to standard log store.
        $lastexport = $DB->get_record('block_gismo_config', array('name' => 'last_export_max_log_id'));
        if (!empty($lastexport->value)) {
            $legacy = $DB->get_record('log', array('id' => $lastexport->value));
            $standard = $DB->get_records('logstore_standard_log', array('timecreated'=>$legacy->time), 'id DESC', 'id', 0, 1);
            if ($standard) {
                $standard = reset($standard);
                $lastexport->value = $standard->id;
                $DB->update_record('block_gismo_config', $lastexport);
            }
        }

        upgrade_block_savepoint(true, 2013101501, 'gismo');
    }
    return true;
}