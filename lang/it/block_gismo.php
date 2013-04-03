<?php
//GISMO IT language file
// block title
$string['pluginname'] = 'Gismo';
$string['gismo'] = 'MOCLOG - Gismo';
$string['gismo_report_launch'] = 'Reporting Tool';


// capabilities
$string['gismo:track-user'] = 'Gismo Studenti';
$string['gismo:track-teacher'] = 'Gismo Docenti';

// help
$string['gismo_help'] = "<p>Gismo works on those courses that meet the following requirements:</p><ul><li>there is at least one student enrolled to the course</li><li>there is at least one instance of one of the following modules:<ul><li>Resources</li><li>Assignments</li><li>Quizzes</li></ul></li></ul>";

// General
$string['page_title'] = "Gismo - ";
$string['file'] = 'File';
$string['options'] = 'Opzioni';
$string['save'] = 'Esporta il grafico come immagine';
$string['print'] = 'Stampa';
$string['exit'] = 'Esci';
$string['help'] = 'Aiuto';
$string['home'] = 'Pagina principale';
$string['close'] = 'Chiudi';

$string['users'] = 'utenti'; //************
$string['teachers'] = 'docenti'; //************

// Students
$string['students'] = 'Studenti';
$string['student_accesses'] = 'Accessi degli Studenti';
$string['student_accesses_chart_title'] = 'Studenti: Accessi degli studenti';
$string['student_accesses_overview'] = 'Panoramica degli Accessi';
$string['student_accesses_overview_chart_title'] = 'Studenti: Panoramica degli Accessi';
$string['student_resources_overview'] = 'Panoramica degli Accessi alle Risorse';
$string['student_resources_overview_chart_title'] = 'Studenti: Panoramica degli Accessi alle Risorse';
$string['student_resources_details_chart_title'] = 'Studenti: Dettagli degli Accessi alle Risorse';

// Resources
$string['resources'] = 'Risorse';
$string['detail_resources'] = 'Dettaglio sulle Risorse';
$string['resources_students_overview'] = 'Panoramica degli Studenti';
$string['resources_students_overview_chart_title'] = 'Risorse: Panoramica degli Studenti';
$string['resources_access_overview'] = 'Panoramica degli Accessi';
$string['resources_access_overview_chart_title'] = 'Risorse: Panoramica degli Accessi';
$string['resources_access_detail_chart_title'] = 'Risorse: Dettaglio sulle Risorse per Studente'; //**************

// Activities
$string['activities'] = 'Attivit&agrave;';
$string['assignments'] = 'Compiti';
$string['assignments_chart_title'] = 'Attivit&agrave;: Panoramica dei Compiti';
$string['chats'] = 'Chats';
$string['chats_chart_title'] = 'Attivit&agrave;: Panoramica delle Chats';
$string['chats_ud_chart_title'] = 'Attivit&agrave;: Dettagli degli Studenti sulle Chats';
$string['chats_over_time_chart_title'] = 'Attivit&agrave;: Contributi alle Chats nel tempo';
$string['forums'] = 'Forum';

$string['forums_over_time'] = 'Forum nel tempo'; //************

$string['forums_chart_title'] = 'Attivit&agrave;: Panoramica dei Forum';
$string['forums_ud_chart_title'] = 'Attivit&agrave;: Dettagli degli Studenti sui Forum';
$string['forums_over_time_chart_title'] = 'Attivit&agrave;: Contributi ai Forum nel tempo';

$string['quizzes'] = 'Quiz';
$string['quizzes_chart_title'] = 'Attivit&agrave;: Panoramica dei Questionari';

$string['wikis'] = 'Wiki';

$string['wikis_over_time'] = 'Wiki nel tempo'; //************

$string['wikis_chart_title'] = 'Attivit&agrave;: Panoramica dei Wiki';
$string['wikis_ud_chart_title'] = 'Attivit&agrave;: Dettagli degli Studenti sui Wiki';
$string['wikis_over_time_chart_title'] = 'Attivit&agrave; : Contributi ai Wiki nel tempo';

// Help
$string['help'] = 'Aiuto';
$string['tutorial'] = 'Tutorial';
$string['help_docs'] = 'Breve panoramica';
$string['about'] = 'Su Gismo';

$string['date'] = 'Data';
$string['from'] = 'Da';
$string['to'] = 'A';

$string['show'] = 'Mostra lista : '; //************
$string['list'] = ''; //************

$string['menu_hide'] = 'Nascondi menu'; //************
$string['menu_show'] = 'Mostra menu'; //************
$string['detail_show'] = 'Mostra dettagli'; //************

$string['items'] = 'OGGETTI'; //************
$string['details'] = 'Dettagli'; //************
$string['info_title'] = 'GISMO - Liste'; //************
$string['info_text'] = '<p>Per personalizzare i grafici puoi selezionare/deselezionare degli oggetti dai menu attivi.</p>";
        message += "<p>Instruzioni</p>";
        message += "<ul style=\'list-style-position: inside;\'>";
        message += "<li>Checkbox principale: selezionare/deselezionare tutti gli oggetti.</li>";
        message += "<li>Pressione su un Oggetto: selezionare/deselezionare lo specifico oggetto.</li>";
        message += "<li>Pressione di Alt+Click su un Oggetto: selezionare soltanto lo specifico oggetto.</li>";
        message += "<li><img src=\'images/eye.png\'> mostra la lista degli oggetti.</li>";
        message += "</ul>'; //************

// Errors
$string['err_course_not_set'] = 'L\'identificativo del corso non e\' stato impostato!';
$string['err_block_instance_id_not_set'] = 'L\'identificativo dell\'istanza del blocco non e\' stata impostato!';
$string['err_authentication'] = 'Non sei autorizzato. E\' possibile che la sessione di Moodle sia scaduta.<br /><br /><a href="">Connettiti</a>';
$string['err_access_denied'] = 'Non sei autorizzato a svolgere questa azione.';
$string['err_srv_data_not_set'] = 'Uno o piu\' dei parametri richiesti non risulta impostato!';
$string['err_missing_parameters'] = 'Uno o piu\' dei parametri richiesti e\' mancante!';
$string['err_missing_course_students'] = 'Non riesco ad estrarre gli studenti del corso!';
$string['gismo:view'] = "GISMO - Autorizzazione fallita";


//OTHERS
$string['welcome'] = "Benvenuti a GISMO v. 3.0.1 Beta 2";
$string['processing_wait'] = "Calcolando i dati, per favore attendere!";

//Graphs labels

$string['accesses'] = "Accessi";
$string['timeline'] = "Barra dei Tempi";
$string['actions_on'] = "Azioni su ";
$string['nr_submissions'] = "Numero degli invii";



//OPTIONS
$string['option_intro'] = 'Questa sezione vi permette di configurare le opzioni specifiche dell\'applicazione.';
$string['option_general_settings'] = 'Impostazioni generali';
$string['option_include_hidden_items'] = 'Includere elementi nascosti';
$string['option_chart_settings'] = 'Settaggi dei grafici';
$string['option_base_color'] = 'Colore di base';
$string['option_red'] = 'Rosso';
$string['option_green'] = 'Verde';
$string['option_blue'] = 'Blu';
$string['option_axes_label_max_length'] = 'Max lunghezza etichetta assi (caratteri)';
$string['option_axes_label_max_offset'] = 'Max spostamento etichetta assi (caratteri)';
$string['option_number_of_colors'] = 'Numero di sfumature (grafici a matrice)';
$string['option_other_settings'] = 'Altre impostazioni';
$string['option_window_resize_delay_seconds'] = 'Ritardo del <i>resize</i> della finestra (secondi)';
$string['save'] = 'Salva';
$string['cancel'] = 'Annulla';


$string['export_chart_as_image'] = 'GISMO - Esporta grafico come immagine';
$string['no_chart_at_the_moment'] = 'Non ci sono grafici caricati al momento!';


$string['about_gismo'] = 'Informazioni su GISMO';
$string['intro_information_about_gismo'] = 'Informazioni circa la versione correntemente installata sono riportate di seguito:'; 
$string['gismo_version'] = 'Versione ';
$string['release_date'] = 'Data di rilascio ';
$string['authors'] = 'Autori ';
$string['contact_us']= 'Per domande o per segnalare errori, contattate pure gli autori ai seguenti indirizzi: ';
$string['close'] = 'Chiudi';
$string['confirm_exiting'] = 'Sei sicuro di voler uscire da Gismo?';




?>
