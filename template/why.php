<?php
    // libraries & acl
    require_once "common.php";
?>

<div class="inner help">
    <h1 align="center">How can LearnTrak support your teaching?</h1>
    <?php
        require_once($CFG->dirroot.'/mod/book/locallib.php');
        $cm = get_coursemodule_from_id('book', 112405, 0, false, MUST_EXIST);
        $book = $DB->get_record('book', array('id'=>$cm->instance), '*', MUST_EXIST);
        $context = context_module::instance($cm->id);
        $chapters = book_preload_chapters($book);
        $keys = array_keys($chapters);
        $chapter = $DB->get_record('book_chapters', array('id' => $keys[0], 'bookid' => $book->id));
        $chaptertext = file_rewrite_pluginfile_urls($chapter->content, 'pluginfile.php', $context->id, 'mod_book', 'chapter', $chapter->id);
        echo format_text($chaptertext, $chapter->contentformat, array('noclean'=>true, 'context'=>$context));
        echo "<h2>Contents</h2>";
        array_shift($chapters);
        $toc = book_get_toc($chapters, $chapter, $book, $cm, false);
        $toc = str_replace('href="view.php', 'target="_blank" href="'.$CFG->wwwroot.'/mod/book/view.php', $toc);
        echo $toc;
    ?>
    
</div>