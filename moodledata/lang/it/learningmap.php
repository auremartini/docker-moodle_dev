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
 * Strings for component 'learningmap', language 'it', version '4.1'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Impostazioni avanzate';
$string['allowedfilters'] = 'Filtri consentiti per l\'uso con mod_learningmap';
$string['allowedfilters_desc'] = 'Elenco separato da virgole senza prefisso filter_';
$string['backgroundfile'] = 'Immagine di sfondo';
$string['backgroundfile_help'] = 'Questo file verrà utilizzato come sfondo per la mappa.';
$string['backlink'] = 'A "{$a->name}"';
$string['cachedef_backlinks'] = 'Questa cache memorizza le informazioni sulla presenza di un link di ritorno alla mappa di apprendimento da mostrare nella pagina del modulo del corso.';
$string['completion_with_all_places'] = 'Per il completamento è necessario raggiungere tutti i luoghi';
$string['completion_with_all_targets'] = 'Per il completamento è necessario raggiungere tutti i luoghi di destinazione';
$string['completion_with_one_target'] = 'Per il completamento è necessario raggiungere un luogo di destinazione';
$string['completiondetail:all_places'] = 'Raggiungere tutti i luoghi';
$string['completiondetail:all_targets'] = 'Raggiungere tutti i luoghi di destinazione';
$string['completiondetail:one_target'] = 'Raggiungere un luogo di destinazione';
$string['completiondisabled'] = 'Il monitoraggio del completamento è disattivato nelle impostazioni del corso. Senza il monitoraggio del completamento questo plugin non funziona.';
$string['completiontype'] = 'Tipo di completamento';
$string['editorhelp'] = 'Come utilizzare l\'editor';
$string['editplace'] = 'Modificare il luogo';
$string['freetype_required'] = 'L\'estensione FreeType a GD è necessaria per eseguire mod_learningmap.';
$string['groupmode'] = 'Modalità gruppo';
$string['groupmode_help'] = 'Quando la modalità gruppo è attiva, è sufficiente che un membro del gruppo abbia completato un\'attività per avere a disposizione i luoghi collegati.';
$string['hiddenactivitywarning'] = 'Questa attività è nascosta e non è accessibile agli studenti.';
$string['hidepaths'] = 'Nascondere i percorsi';
$string['hidepaths_help'] = 'Questa opzione nasconde i percorsi nella vista studente, ma rimane funzionale alla costruzione delle dipendenze tra le attività.';
$string['hidestroke'] = 'Nascondere la linea di contorno per i luoghi';
$string['hidestroke_help'] = 'Questa opzione nasconde la linea di contorno per i luoghi.';
$string['hover'] = 'Animazione per i luoghi';
$string['hover_help'] = 'Questa opzione aggiunge un\'animazione ai luoghi quando vengono sfiorati dal cursore.';
$string['intro'] = 'Mappa di apprendimento';
$string['intro_help'] = '<ul><li><b>Aggiungere nuovo luogo:</b> Doppio click sullo sfondo</li>
<li><b>Aggiungere un percorso:</b> Singolo click su due luoghi</li>
<li><b>Rimuovere un luogo / percorso:</b> Doppio click su di esso</li>
<li><b>Modificare le proprietà di un luogo:</b> Click destro su di esso</li></ul>';
$string['learningmap'] = 'Mappa di apprendimento';
$string['learningmap:addinstance'] = 'Aggiungere una nuova mappa di apprendimento';
$string['learningmap:view'] = 'Visualizzare una mappa';
$string['loading'] = 'Learningmap sta caricando...';
$string['modulename'] = 'Mappa di apprendimento';
$string['modulename_help'] = 'Il modulo learningmap permette di strutturare le attività di un corso come luoghi su una mappa, collegati da percorsi. Alcuni luoghi sono luoghi di partenza e vengono mostrati fin dall\'inizio. Altri luoghi e percorsi vengono mostrati quando le attività dei luoghi collegati vengono completate.';
$string['modulenameplural'] = 'Mappe di apprendimento';
$string['name'] = 'Nome della mappa di apprendimento';
$string['name_help'] = 'Il nome della mappa di apprendimento viene visualizzato solo se l\'opzione "Mostra la mappa nella pagina del corso" non è selezionata.';
$string['nocompletion'] = 'Nessun completamento con gli elementi della mappa';
$string['nocompletionenabled'] = 'Non disponibile perché il completamento non è abilitato';
$string['ownprogress'] = 'I miei progressi';
$string['paths'] = 'Percorsi';
$string['places'] = 'Luoghi';
$string['pluginadministration'] = 'Amministrazione della mappa di apprendimento';
$string['pluginname'] = 'Mappa di apprendimento';
$string['pulse'] = 'Animazione intermittente per i luoghi non visitati';
$string['pulse_help'] = 'Questa opzione aggiunge un\'animazione ai luoghi non visitati per evidenziarli.';
$string['showall'] = 'Mostra tutti i percorsi e i luoghi';
$string['showall_help'] = 'Questa opzione mostra tutti i percorsi e i luoghi della mappa fin dall\'inizio. I luoghi e i percorsi non ancora raggiungibili sono oscurati.';
$string['showbacklink'] = 'Mostrare i link di ritorno nelle pagine dei moduli dei corsi';
$string['showbacklink_help'] = 'Questa opzione mostra un link "Torna alla mappa di apprendimento" su ogni pagina del modulo del corso che appartiene alla mappa.';
$string['showdescription'] = 'Mostra la mappa sulla pagina del corso';
$string['showdescription_help'] = 'Se è selezionata, la mappa di apprendimento sarà visualizzata nella pagina del corso (come un\'etichetta). In caso contrario, ci sarà un link e la mappa sarà visualizzata in una pagina separata.';
$string['showtext'] = 'Mostra i nomi delle attività';
$string['showtext_help'] = 'Questa opzione mostra i nomi delle attività come testo accanto ai luoghi. Il testo può essere trascinato e viene aggiornato automaticamente quando il nome dell\'attività cambia.';
$string['showwaygone'] = 'Evidenziare il percorso';
$string['showwaygone_help'] = 'Questa opzione evidenzia il modo in cui il partecipante ha percorso la mappa (nell\'ordine dei tempi di completamento).';
$string['slicemode'] = 'Rivela la mappa con i luoghi';
$string['slicemode_help'] = 'Questa opzione rivela progressivamente la mappa quando nuovi luoghi diventano raggiungibili. Le parti nascoste della mappa sono coperte dalla nebbia. La nebbia si dissolverà completamente non appena tutti i luoghi saranno raggiungibili.';
$string['startingplace'] = 'Luogo di partenza';
$string['svgcode'] = 'Codice SVG';
$string['targetplace'] = 'Luogo di destinazione';
$string['usecasehelp'] = 'Come utilizzare le mappe di apprendimento';
$string['usecaselink'] = 'Link a una pagina che spiega l\'utilizzo della mappa di apprendimento (in tedesco)';
$string['usecheckmark'] = 'Segno di spunta per i luoghi visitati';
$string['usecheckmark_help'] = 'Questa opzione mostra anche un segno di spunta nei luoghi visitati.';
$string['visited'] = 'Visitato';
