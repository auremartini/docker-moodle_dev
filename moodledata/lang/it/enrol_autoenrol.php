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
 * Strings for component 'enrol_autoenrol', language 'it', version '4.1'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Iscrivi sempre';
$string['alwaysenrol_help'] = 'Impostando a Si, il plugin iscriverà gli utenti al corso anche se sono già iscritti tramite un altro metodo di iscrizione.';
$string['auto'] = 'Auto';
$string['auto_desc'] = 'Il gruppo è stato creato automaticamente dal plugin " Iscrizioni automatiche". Verrà eliminato se rimuovi dal corso il metodo "Iscrizioni automatiche" tramite il quale è stato creato.';
$string['autoenrol:config'] = 'Configurare iscrizioni automatiche';
$string['autoenrol:hideshowinstance'] = 'Abilitare e disabilitare le istanze autoenrol';
$string['autoenrol:manage'] = 'Gestire gli utenti iscritti automaticamente';
$string['autoenrol:method'] = 'Impostare iscrizione utenti al login';
$string['autoenrol:unenrol'] = 'Disiscrivere utenti iscritti tramite Iscrizioni automatiche';
$string['autoenrol:unenrolself'] = 'Disiscriversi spontaneamente quando è prevista l\'iscrizione all\'accesso';
$string['autounenrolaction'] = 'Azione alla disicrizione automatica';
$string['autounenrolaction_help'] = 'Seleziona l\'azione che deve essere compiuta quando la regola del filtro utente non è più soddisfatta. Si prega di notare che alcuni dati relativi all\'attività dell\'utente nel corso vengono eliminati durante la disicrizione dal corso.';
$string['availabilityplugins'] = 'Abilita plugin "Condizioni per l\'accesso"';
$string['availabilityplugins_help'] = 'Seleziona quali plugin di tipo "Condizioni per l\'accesso" che potranno essere usati nei filtri utente. Usa Ctrl+click o Cmd+click per la selezione multipla.';
$string['cannotenrol'] = 'Non ti è permesso iscriverti a questo corso con autoenrol.';
$string['checksync'] = 'Controllo per la sincronizzazione di {$a} utenti';
$string['config'] = 'Configurazione';
$string['confirmbulkdeleteenrolment'] = 'Sei sicuro di eliminare le iscrizioni di questi utenti?';
$string['countlimit'] = 'Numero massimo di iscrizioni';
$string['countlimit_help'] = 'il numero massimo di iscrizioni può essere limitato ad un dato valore, impedendo nuove iscrizioni una volta raggiunto il valore impostato. L\'impostazione predefinita a 0 significa nessun valore massimo di iscrizioni.';
$string['customwelcomemessage'] = 'Messaggio di benvenuto personalizzato';
$string['customwelcomemessage_help'] = 'E\' possibile inserire un messaggio personalizzato di benvenuto, sia in formato testo semplice sia in formato Moodle, dove includere tag HTML e tag multilingua.

E\' anche possibile utilizzare i seguenti segnaposto:

* Titolo del corso {$a->coursename}
* Link al profilo dell\'utente {$a->profileurl}
* Email dell\'utente {$a->email}
* Nome dell\'utente {$a->fullname}';
$string['defaultrole'] = 'Ruolo assegnato di default';
$string['defaultrole_desc'] = 'Scegli il ruolo di default da da assegnare agli utenti che si iscirvono tramite il metodo Iscrizioni automatiche';
$string['deleteselectedusers'] = 'Elimina iscrizioni degli utenti selezionati';
$string['editselectedusers'] = 'Modifica iscrizioni degli utenti selezionati';
$string['emptyfield'] = 'Nessun {$a}';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddate_help'] = 'Gli utenti potranno iscriversi solo entro la data impostata.';
$string['enrolme'] = 'Iscrivimi';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_desc'] = 'La durata di default dell\'iscrizione. Impostarla a zero per una durata di default dell\'iscrizione senza limite.';
$string['enrolperiod_help'] = 'La durata di default dell\'iscrizione, a partire dalla data di iscrizione dell\'utente. Disabilitare l\'impostazione per una durata di default dell\'iscrizione senza limite.';
$string['enrolstartdate'] = 'Data di inizio';
$string['enrolstartdate_help'] = 'Consente l\'iscrizione degli utenti solo a partire dalla data impostata.';
$string['expiredaction'] = 'Azione alla scadenza dell\'iscrizione';
$string['expiredaction_help'] = 'L\'azione da compiere quando scade l\'iscrizione di un partecipante. Da notare che alcuni dati verranno eliminati per effetto della disiscrizione.';
$string['expirymessageenrolledbody'] = 'Gentile {$a->user},

ti informiamo che la tua iscrizione al corso \\\'{$a->course}\\\' scadrà il {$a->timeend}.

Se hai bisogno di assistenza, per favore contatta {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notifica scadenza iscrizione automatica';
$string['expirymessageenrollerbody'] = 'L\'iscrizione automatica al corso \\\'{$a->course}\\\'  scadrà entro {$a->threshold} per i seguenti utenti:

{$a->users}

Per prorogare l\'iscrizione, recati su {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notifica scadenza iscrizione automatica';
$string['expirynotifyall'] = 'Sia ai partecipanti sia il docente';
$string['expirynotifyenroller'] = 'Solo il docente';
$string['filter'] = 'Consenti solamente';
$string['filtering'] = 'Filtro di accesso utenti';
$string['g_auth'] = 'Metodo di autenticazione';
$string['g_dept'] = 'Dipartimento';
$string['g_email'] = 'Indirizzo email';
$string['g_inst'] = 'Istituzione';
$string['g_lang'] = 'Lingua';
$string['g_none'] = 'Seleziona...';
$string['general'] = 'Generale';
$string['groupname'] = 'Nome del gruppo';
$string['groupname_help'] = 'Quando scegli di raggruppare usando il Filtro degli utenti, verrà creato un solo gruppo e questo sarà il nome del gruppo.';
$string['groupon'] = 'Raggruppa per';
$string['groupon_help'] = 'AutoEnrol può aggiungere automaticamente gli utenti a un gruppo quando vengono iscritti basandosi su uno di questi campi del profilo utente.';
$string['instancename'] = 'Etichetta personalizzata';
$string['instancename_help'] = 'Puoi aggiungere un\'etichetta personalizzata per rendere più chiaro cosa fa questo metodo di iscrizione. Questa opzione è più utile quando ci sono più istanze di AutoEnrol in un corso.';
$string['loginenrol'] = 'Permetti le iscrizioni al login';
$string['loginenrol_desc'] = 'Permettere l\'iscrizione al login può rallentare le prestazioni del tuo sito. Come alternativa puoi utilizzare l\'elaborazione pianificata per tutti i corsi o il comando CLI per il singolo corso.';
$string['longtimenosee'] = 'Disiscrivi utenti non attivi dopo';
$string['longtimenosee_help'] = 'Consente di disiscrivere automaticamente quegli utenti che non abbiano svolto attività per il numero di giorni impostato.';
$string['m_confirmation'] = 'Conferma nella pagina di iscrizione';
$string['m_course'] = 'Accedono al corso';
$string['m_site'] = 'Effettuano login al sito';
$string['maxenrolled'] = 'Numero max. di iscrizioni';
$string['maxenrolled_help'] = 'Il numero massimo di utenti che potranno iscriversi al corso. Usare 0 per non avere limiti.';
$string['messageprovider:expiry_notification'] = 'Notifiche di scadenza iscrizioni automatiche';
$string['method'] = 'Iscrivere gli utenti quando';
$string['method_help'] = 'Puoi modificare questa impostazione per modificare il funzionamento del plugin in modo che gli utenti vengano iscritti al corso al login invece di aspettare che accedano al corso. Questo è utile per i corsi che devono essere visibili nella lista "Miei corsi" di default.';
$string['newenrols'] = 'Consenti nuove iscrizioni';
$string['newenrols_desc'] = 'Di default gli utenti possono iscriversi ai corsi automaticamente';
$string['newenrols_help'] = 'L\'impostazione stabilisce se un utente può iscriversi automaticamente al corso.';
$string['nogroupon'] = 'Non creare gruppi';
$string['pluginname'] = 'Auto Enrol';
$string['pluginname_desc'] = 'Il plugin di iscrizione automatica fornisce la possibilità agli utenti autenticati di essere autorizzati automaticamente per l\'accesso e l\'iscrizione in un corso. Questo è simile a permettere l\'accesso agli ospiti ma gli studenti saranno iscritti e quindi potranno partecipare ai forum e alle attività del corso.';
$string['pluginnotenabled'] = 'Plugin Autoenrol non abilitato';
$string['privacy:metadata:core_group'] = 'Il plugin Autoenrol può creare nuovi gruppi o utilizzare quelli esistenti e aggiungere i partecipanti che soddisfano il filtro utenti.';
$string['removegroups'] = 'Elimina gruppi';
$string['removegroups_desc'] = 'Quando una istanza di iscrizione è eliminata, deve provare a rimuovere i gruppi che ha creato?';
$string['role'] = 'Ruolo assegnato di default';
$string['selfunenrol'] = 'Abilita la disiscrizione spontanea';
$string['selfunenrol_desc'] = 'Di default, nelle nuove istanze di Autoenrol, consente agli utenti di disiscriversi.';
$string['selfunenrol_help'] = 'Quando è impostato a Si, gli utenti possono disiscriversi da soli.';
$string['sendcoursewelcomemessage'] = 'Invia messaggio di benvenuto al corso';
$string['sendcoursewelcomemessage_help'] = 'Gli utenti che vengono iscritti automaticamente in un corso riceveranno per email un messaggio di benvenuto. Se il messaggio verrà inviato dai contatti del corso (di default il docente), il nome dell\'utente nell\'email coinciderà con il primo utente al quale è stato assegnato il ruolo.';
$string['sendexpirynotificationstask'] = 'Invio notifiche scadenza delle iscrizioni automatiche';
$string['softmatch'] = 'Corrispondenza parziale';
$string['status'] = 'Abilita iscrizione automatica';
$string['status_desc'] = 'Abilita il metodo di iscrizione automatica ai corsi.';
$string['status_help'] = 'Abilitando questa impostazione e disabilitando "Consenti nuove iscrizioni", potranno accedere al corso solamente gli utenti che si sono già iscritti automaticamente. Disabilitando l\'impostazione, saranno disabilitate le iscrizioni con questo metodo, le iscrizioni automatiche esistenti saranno sospese e non saranno consentite nuove iscrizioni.';
$string['syncenrolmentstask'] = 'Sincronizzazione iscrizioni automatiche';
$string['syncexpirationstask'] = 'Controllo scadenza iscrizioni automatiche';
$string['unenrolselfconfirm'] = 'Sei certo di volerti disiscrivere dal corso "{$a}"? Puoi accedere nuovamente al corso per essere reiscritto ma informazioni come le valutazioni e la consegna dei compiti potrebbero essere perse.';
$string['unenrolusers'] = 'Disiscrivi utenti';
$string['userfilter'] = 'Filtro utenti';
$string['userfilter_help'] = 'Quando è impostato, AutoEnrol iscriverà solo gli utenti che soddisfano le regole.';
$string['warning'] = 'Attenzione!';
$string['warning_message'] = 'Aggiungendo questo metodo di iscrizione al corso, ogni utente registrato potrà accederci. Installa questo plugin soltanto se vuoi l\'accesso libero al tuo corso per gli utenti che si autenticheranno.';
$string['welcomemessage'] = 'Messaggio di benvenuto';
$string['welcometocourse'] = 'Benvenuto a {$a}';
