<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_catalogue', language 'it', version '4.1'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'Informazioni sul corso';
$string['aboutthisprogram'] = 'Informazioni sul programma';
$string['all'] = 'Tutto';
$string['aria:courseactions'] = 'Azioni del corso';
$string['cataloguesettings'] = 'Impostazioni de I miei programmi e del catalogo dei corsi';
$string['certifications'] = 'Certificazioni';
$string['certificationstatuscertified'] = 'La certificazione \'<strong>{$a->name}</strong>\' è completata';
$string['certificationstatuscertifiedwithdate'] = 'La certificazione \'<strong>{$a->name}</strong>\' è completata. Scadrà il \'<strong>{$a->date}</strong>\'';
$string['certificationstatusexpired'] = 'La certificazione \'<strong>{$a->name}</strong>\' è scaduta il expired on {$a->date}';
$string['certificationstatusopen'] = 'La certificazione \'<strong>{$a->name}</strong>\' non ha data limite';
$string['certificationstatusopenwithdate'] = 'Completare questo programma entro il \'<strong>{$a->date}</strong>\' per ottenere la certificazione \'<strong>{$a->name}</strong>\'';
$string['certificationstatusoverdue'] = 'La certificazione \'<strong>{$a->name}</strong>\'  doveva essere ottenuta entro il \'<strong>{$a->date}</strong>\'';
$string['complete'] = 'Completato';
$string['completeatleast'] = 'Completare almeno {$a}';
$string['coursecoverhelp'] = 'Il corso fa parte del programma \'{$a}\'';
$string['coursecoverhelpmultiprogram'] = 'Il corso fa parte di alcuni programmi';
$string['coursecoverhelptext'] = '<ul><li>Questo è un corso che fa parte di un programma più ampio</li><li>Ulteriori corsi potrano essere visibili una volta completato questo corso.</li></ul>';
$string['coursedisplayduelimit'] = 'Visualizza i giorni rimanenti per i corsi';
$string['coursedisplayduelimit_desc'] = 'Numero di giorni a partire dai quali gli utenti visualizzeranno un piccolo promemoria (X giorni rimanenti) accanto al titolo del corso. Ad esempio, se impostato a 14, il promemoria sarà visibile nei 14 giorni che precedono la data di conclusione del corso. Nel caso di molte date di conclusione diverse, il sistema valuterà quale è la successiva più vicina. Impostare a 0 per disabilitare questa funzionalità.';
$string['coursefiles'] = 'File del corso';
$string['courseimage_help'] = 'L\'immagine del corso.';
$string['coursenotavailable'] = 'Corso non disponibile';
$string['courses'] = 'Corsi';
$string['dates'] = 'Date';
$string['datesduedate'] = 'Data limite';
$string['datesenddate'] = 'Data di fine';
$string['datesstartdate'] = 'Data di inizio';
$string['daysleft'] = '{$a} giorni restanti';
$string['defaultsortorder'] = 'Ordinamento di default';
$string['displaycourseinfomodal'] = 'Visualizza informazioni sul corso in finestra modale';
$string['displayforeverybody'] = 'Visualizzabile da tutti';
$string['displayfornotadmin'] = 'Visualizzabile solo da utenti non amministratori';
$string['displayforstudentsandguests'] = 'Visualizzabile dagli ospiti e dagli studenti';
$string['displaynever'] = 'Non visualizzare';
$string['displayprogramcoverpage'] = 'Visualizza la pagina di copertina del programma';
$string['dontshowagain'] = 'Non visualizzare più';
$string['duedate'] = 'Ordina per data di conclusione';
$string['duedateinfo'] = 'Da fare entro 1 giorno';
$string['duedateinfodays'] = 'Da fare entro {$a} giorni';
$string['duedatex'] = '<strong>Data limite:</strong> {$a}';
$string['enddatex'] = '<strong>Data di fine:</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'Non sei autorizzato a visualizzare la pagina di copertina del programma';
$string['errornopermissionviewprogram'] = 'Non sei autorizzato a visualizzare il programma';
$string['hiddenfromlearners'] = 'Nascosto  ai partecipanti';
$string['incomplete'] = 'Non completato';
$string['information'] = 'Informazioni';
$string['iunderstand'] = 'Ho capito';
$string['lastaccess'] = 'Ordina per ultimo accesso';
$string['moreinfo'] = 'Ulteriori informazioni';
$string['mycourses'] = 'La mia formazione';
$string['name'] = 'Ordina per nome';
$string['notavailableunless'] = 'Non disponibile finché non sarà disponibile \'<strong>{$a}</strong>\'';
$string['notavailableuntil'] = 'Non disponibile finché \'{$a}\' non sarà completato';
$string['notnow'] = 'Non adesso';
$string['notset'] = 'Non impostato';
$string['overdue'] = 'In ritardo';
$string['pluginname'] = 'Catalogo della formazione';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = 'Stato di contrazione della sezione "Corsi acceduti di recente"';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'Visualizzazione della pagina di copertina del programma';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'Filtraggio di programmi/corsi per tutto/corsi/programmi/completati/non completati';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'Tipo di ordinamento di programmi/corsi per nome/data limite/Ultimo accesso';
$string['privacy:metadata:showprogramcoverhelp'] = 'Visibilità della pagina di copertina del programma';
$string['privacy:programcoverhelphidden'] = 'Pagina di copertina del programma nascosta';
$string['privacy:request:preference:set'] = 'Valore dell\'impostazione \'{$a->name}\' impostata a \'{$a->value}\'';
$string['proceedtocourse'] = 'Vai al contenuto del corso';
$string['proceedtoprogram'] = 'Vai al contenuto del programma';
$string['program'] = 'Programma';
$string['programdisplayduelimit'] = 'Visualizza gironi rimanenti antecedenti la data limite del programma';
$string['programdisplayduelimit_desc'] = 'Numero di giorni a partire dai quali gli utenti visualizzeranno un piccolo promemoria (X giorni rimanenti) accanto al titolo del programma. Ad esempio, se impostato a 14, il promemoria sarà visibile nei 14 giorni che precedono la data limite del programma. Impostare a 0 per disabilitare questa funzionalità.';
$string['programempty'] = 'Il programma non contiene corsi';
$string['programhelpimage'] = 'Immagine di aiuto del programma';
$string['programhelptext'] = '<ul><li>I programmi possono contenere più corsi</li><li>Completare i corsi per completare il programma</li></ul>';
$string['programhelptitle'] = 'Che cos\'è un programma?';
$string['programimage_help'] = 'L\'immagine del programma.';
$string['programlink'] = 'Visualizza "{$a}" dettagli';
$string['programlinksingle'] = 'Visualizza dettagli del programma';
$string['programs'] = 'Programmi';
$string['programstructure'] = 'Struttura del programma';
$string['progress'] = '{$a}% completato';
$string['progresscompleted'] = '{$a->completed} su {$a->total} completati';
$string['recentlyaccessedcourses'] = 'Corsi acceduti di recente';
$string['restricted'] = 'Non disponibile finché  \'<strong>{$a}</strong>\' non sarà completato';
$string['searchplaceholder'] = 'Cerca corsi o prgrammi';
$string['selectenrolmentmethod'] = 'Seleziona un metodo di iscfizione';
$string['showcataloguecoursecategory'] = 'Visualizza categorie di corsi nelle schede dei corsi';
$string['showcataloguecoursecategory_desc'] = 'La categoria di corsi sarà visibile in ogni scheda del corso presenti nella "Dashboard", ne "I miei corsi" e in alcuni blocchi.';
$string['showcoursedates'] = 'Visualizza le date dei corsi nella finestra modale';
$string['showcoursedates_desc'] = 'Le date del corso saranno visibili nella finestra modale del corso e nella scheda delle informazioni sul corso.';
$string['showmore'] = 'Visualizza altri {$a}...';
$string['startcourse'] = 'Inizia il corso';
$string['startdatex'] = '<strong>Data di inizio:</strong> {$a}';
$string['todo'] = 'Da fare:';
$string['trainers'] = 'Trainer';
$string['xcourses'] = '{$a} corsi';
