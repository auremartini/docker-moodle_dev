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
 * Strings for component 'webexactivity', language 'it', version '4.1'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Ulteriori impostazioni del meeting';
$string['allchat'] = 'I partecipanti possono chattare con gli altri partecipanti';
$string['apipassword'] = 'Password dell\'Amministratore di WebEx';
$string['apipassword_help'] = 'La password di un utente amministratore associato al tuo sito.';
$string['apisettings'] = 'Impostazioni delle API';
$string['apiusername'] = 'Username dell\'Amministratore di WebEx';
$string['apiusername_help'] = 'Lo username di un utente amministratore associato al sito. Dovrebbe essere un utente dedicato a Moodle per ragioni di sicurezza.';
$string['availabilityendtime'] = 'Durata massima della Disponibilità estesa';
$string['badpassword'] = 'Lo username e la password WebEx sono errati.';
$string['badpasswordexception'] = 'La password WebEx non è corretta e non può essere aggiornata.';
$string['calpublish'] = 'Pubblica meeting nel calendario';
$string['calpublish_help'] = 'Pubblica il meeting nel calendario Moodle dei corsi e visualizzalo nella dashboard dell\'utente. La disponibilità estesa non sarà pubblicata.';
$string['confirmrecordingdelete'] = 'Sei sicuro di eliminare la registrazione <b>{$a->name}</b>, della durata di {$a->time}? Ciò non sarà reversibile.';
$string['confirmrecordingsdelete'] = 'Sei sicuro di eliminare le registrazioni selezionate? Ciò non sarà reversibile.';
$string['connectionexception'] = 'Si è verificato un errore durante la connessione: {$a->error}';
$string['curlsetupexception'] = 'Si è verificato un errore durante l\'impostazione di curl.';
$string['defaultmeetingtype'] = 'Tipologia di default dei meeting';
$string['defaultmeetingtype_help'] = 'La tipologia di meeting preselezionata durante la creazione di un nuovo meeting.';
$string['deletelink'] = '<a href="{$a->url}">Cancella</a>';
$string['deletetime'] = 'Tempo di eliminazione';
$string['deletionin'] = '<div>{$a->time} fino alla eliinazione.</div>';
$string['deletionsoon'] = '<div>Sarà eliminato a breve.</div>';
$string['description'] = 'Descrizione';
$string['directlinks'] = 'Link diretti';
$string['directlinkstext'] = '<p>Questi links consentono l\'accesso diretto alle registrazioni sul server Moodle. L\'accesso ad esse non richiede l\'autenticazione, e non è tracciato.</p><br />
Streaming: <a target="_blank" href="{$a->streamurl}" alt="Link allo streaming">{$a->streamurl}</a><br />
Download: <a target="_blank" href="{$a->fileurl}" alt="Link al download">{$a->fileurl}</a><br />';
$string['duration'] = 'Durata prevista';
$string['duration_help'] = 'La durata prevista del meeting. Si tratta di una mera informazione e non incide sulla durata reale del meeting.';
$string['enablecallin'] = 'Attiva le chiamate telefoniche';
$string['enablecallin_help'] = 'Attiva il supporto alle chiamate telefoniche per i meeting appena creati. Non abilitare se il supporto alle chiamate telefoniche non è incluso nel proprio abbonamento.';
$string['entermeeting'] = 'Accedi al meeting';
$string['error_'] = '';
$string['error_HM_AccessDenied'] = 'L\'accesso è stato negato per ospitere questo meeting.';
$string['error_JM_InvalidMeetingKey'] = 'Chiave errata WebEx, non puoi partecipare a questo meeting.';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'Chiave errata WebEx, non puoi partecipare a questo meeting.';
$string['error_JM_MeetingLocked'] = 'Questo meeting è bloccato e non puoi parteciparvi.';
$string['error_JM_MeetingNotInProgress'] = 'Il meeting in questo momento non è in corso. Potrebbe non essere ancora iniziato, oppure già concluso.';
$string['error_LI_AccessDenied'] = 'L\'utente non può accedere a WebEx.';
$string['error_LI_AccountLocked'] = 'L\'account utente WebEx è bloccato.';
$string['error_LI_AutoLoginDisabled'] = 'I login automatici sono disabilitati per questo utente';
$string['error_LI_InvalidSessionTicket'] = 'Il ticket di sessione non è valido. Per favore ritenta.';
$string['error_LI_InvalidTicket'] = 'Il ticket di login non è valido. Per favore ritenta.';
$string['error_unknown'] = 'Si è verificato un errore sconosciuto.';
$string['errordeletingrecording'] = 'Errore durante l\'eliminazione della registrazione';
$string['event_meeting_ended'] = 'Terminato meeting';
$string['event_meeting_hosted'] = 'Ospitato meeting';
$string['event_meeting_joined'] = 'Partecipato meeting';
$string['event_meeting_started'] = 'Iniziato meeting';
$string['event_recording_created'] = 'Creata registrazione';
$string['event_recording_deleted'] = 'Eliminata registrazione';
$string['event_recording_downloaded'] = 'Scaricata registrazione';
$string['event_recording_undeleted'] = 'Ripristinata registrazione';
$string['event_recording_viewed'] = 'Visualizzata registrazione';
$string['externallinktext'] = '<p>Questo link è per i partecipanti che non sono iscritti a questo corso. Gli studenti del corso non necessitano di conoscere questo link, in quanto essi possono semplicemente cliccare sul link Partecipa al meeting sulla pagina precedente. Questo link deve essere distribuito con cautela - chiunque con questo link potrà accedere al meeting. Per invitare altri partecipanti, copia il seguente link e inviaglielo. In caso di meeting pubblico, questo link può essere pubblicato su un sito web.</p>';
$string['externalpassword'] = 'I partecipanti dovranno conoscere la password del meeting: <b>{$a}</b>';
$string['getexternallink'] = '<a href="{$a->url}">Ottieni un link per i partecipanti esterni</a>';
$string['host'] = 'Ospita';
$string['hostmeetinglink'] = '<a href="{$a->url}">Ospita il Meeting</a>';
$string['hostschedulingexception'] = 'L\'utente non può programmare un meeting da ospitare.';
$string['inprogress'] = 'In progressione';
$string['invalidtype'] = 'Tipologia non valida';
$string['joinmeetinglink'] = '<a href="{$a->url}">Partecipa al Meeting</a>';
$string['longavailability'] = 'Disponibilità estesa';
$string['longavailability_help'] = 'Impostando questa opzione lascerai il meeting disponibile ad ospitare fino alla durata massima della Disponibilità estesa. Consente la riusabilità dei meetning per cose come l\'orario di ufficio.';
$string['manageallrecordings'] = 'Gestisci tutte le registrazioni WebEx';
$string['manageallrecordings_help'] = 'Gestisci tutte le registrazioni del server WebEx, non solo quelle associate ad un\'attività Moodle.';
$string['meetingclosegrace'] = 'Periodo di grazia del Meeting';
$string['meetingclosegrace_help'] = 'Il numero di minuti dopo l\'ora di inizio più la durata dopo la quale la riunione sarà considerata completa.';
$string['meetingpassword'] = 'Password del Meeting';
$string['meetingpast'] = 'Questo meeting è terminato.';
$string['meetingsettings'] = 'Impostazioni del meeting';
$string['meetingtemplate'] = 'Template di WebEx';
$string['meetingtemplate_help'] = 'Nome del template che hai impostato sul tuo account WebEx per questa tipologia di meeting. Lascia vuoto per utilizzare le impostazioni predefinite. Nota: l\'indicazione di un nome di template non esistente impedisce la creazione di sessioni di questa tipologia di meeting.';
$string['meetingtype'] = 'Tipologia di Meeting';
$string['meetingtypes'] = 'Tipologie di Meeting';
$string['meetingtypes_desc'] = 'Queste solo le tipologie di WebEx meeting supportate da questo modulo. Per ogni tipologia, puoi selezionare se è "Disponibile" (hai una licenza per essa in WebEx, e vuoi poterla utilizzare in Moodle), e se vuoi che sia "Disponibile per tutti gli utenti" . Le tipologie "Disponibile", ma non "Disponibile per tutti gli utenti" saranno selezionabili solo da persone con l\'autorizzazione mod/webexactivity:allavailabletypes. "Password del meeting richiesta" serve a comunicare al plugin se WebEx richiede una password. Utilizza "Genera password richieste" di seguito per consentire a un utente di non fornire una password.';
$string['meetingupcoming'] = 'Questo meeting non è ancora disponibile per la partecipazione.';
$string['modulename'] = 'WebEx Meeting';
$string['modulename_help'] = 'L\'attività WebEx Meeting consente ai docenti di programmare meetings attraverso il sistema di conferenza via web denominato WebEx*.

Quando aggiungi un\'attività WebEx Meeting, stabilisci la data e l\'ora della conferenza, oltre a vari altri parametri opzionali (come la durata prevista, una descrizione, etc). I partecipanti (studenti iscritti) possono quindi accedere al WebEx meeting cliccando sul link "partecipa al meeting" presente tra le attività in Moodle (i docenti vedranno un link che dice "ospita il meeting"). Se il meeting è registrato, gli studenti potranno vedere le registrazioni dopo che il meeting sarà terminato.

* WebEx è un sistema di conferenza via web che consente la collaborazione sincrona tra studenti e docenti. Esso trasmette in tempo reale l\'audio e il video, ed include strumenti come la lavagna, la chat e la condivisione del desktop.';
$string['modulenameplural'] = 'WebEx Meetings';
$string['page_managerecordings'] = 'Gestisci le Registrazioni';
$string['page_manageusers'] = 'Gestisci gli Utenti';
$string['pluginadministration'] = 'Amministrazione del Meeting WebEx';
$string['pluginname'] = 'WebEx Meeting';
$string['pluginnamepural'] = 'WebEx Meetings';
$string['prefix'] = 'Prefisso del Nome Utente';
$string['prefix_help'] = 'Questa stringa sarà prefissata a tutti i nomi utente creati da questo modulo.';
$string['privacy:metadata:email'] = 'L\'indirizzo email dell\'utente che accede a Webex';
$string['privacy:metadata:firstname'] = 'Il nome dell\'utente che accede a Webex';
$string['privacy:metadata:lastname'] = 'Il cognome dell\'utente che accede a Webex';
$string['privacy:metadata:timecreated'] = 'L\'orario in cui una registrazione è stata creata';
$string['privacy:metadata:timemodified'] = 'L\'orario in cui una registrazione è stata modificata nel database';
$string['privacy:metadata:username'] = 'L\'username dell\'utente che ospita il meeting';
$string['privacy:metadata:webexactivity'] = 'Istanza del meeting Webex';
$string['privacy:metadata:webexactivity:hostwebexid'] = 'L\'id utente Webex dell\'utente che ospita il meeting';
$string['privacy:metadata:webexactivity:password'] = 'La password del meeting';
$string['privacy:metadata:webexactivity_recording'] = 'Registrazione Webex';
$string['privacy:metadata:webexactivity_recording:hostid'] = 'Username dell\'ospite della registrazione';
$string['privacy:metadata:webexactivity_user'] = 'Utenti Webex';
$string['privacy:metadata:webexactivity_user:webexid'] = 'Username Webex';
$string['privacy:metadata:webexactivity_user:webexuserid'] = 'Id utente Webex dell\'utente Webex';
$string['privacy:metadata:webexhost'] = 'Informazioni dell\'ospite Webex';
$string['privacy:metadata:webexparticipant'] = 'Informazioni del partecipante Webex';
$string['privacy:metadata:webexpassword'] = 'La password Webex usata per negoziare al posto dell\'utente. Usata soltanto sui siti con vecchie istallazioni di questo plugin.';
$string['recordingfileurl'] = 'Scarica';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = 'Nome della registrazione';
$string['recordings'] = 'Registrazioni';
$string['recordingsettings'] = 'Impostazioni delle Registrazioni';
$string['recordingstreamurl'] = 'Riproduci';
$string['recordingtrashtime'] = 'Tempo di cancellazione delle registrazioni';
$string['recordingtrashtime_help'] = 'Il numero di ore in cui una registrazione viene preservata prima di essere definitivamente cancellata.';
$string['requiremeetingpassword'] = 'Richiedi le password del meeting';
$string['requiremeetingpassword_help'] = 'Obbliga un utente a fornire una password per il meeting. Se non impostato, e la tipologia di meeting è settata per richiedere una password sopra, verrà generata casualmente una password.';
$string['search:activity'] = 'WebEx Meeting - informazioni sull\'attività';
$string['selectnone'] = 'Deseleziona tutto';
$string['settings'] = 'Impostazioni di WebEx Meeting';
$string['sitename'] = 'Nome del Sito';
$string['sitename_help'] = 'La parte di url posizionata prima di .webex.com. Se la url del tuo sito è "https://esempio.webex.com", devi inserire "esempio" qui.';
$string['startssoon'] = 'Inizano a breve';
$string['starttime'] = 'Orario di inizio';
$string['stream'] = 'Stream';
$string['studentdownload'] = 'Consenti agli studenti di scaricare le registrazioni';
$string['studentdownload_help'] = 'Consente agli studenti di accedere al link per scaricare le registrazioni del meeting.';
$string['studentvisible'] = 'Visibile agli studenti';
$string['task_deleterecordings'] = 'Elimina definitivamente le registrazioni';
$string['task_updateallrecordings'] = 'Aggiorna tutte le registrazioni';
$string['task_updatemediumrecordings'] = 'Aggiorna le registrazioni terminate da un medio periodo';
$string['task_updateopensessions'] = 'Aggiorna le sessioni aperte';
$string['task_updaterecentrecordings'] = 'Aggiorna le registrazioni terminate recentemente';
$string['typeforall'] = 'Disponibile a tutti gli utenti';
$string['typeinstalled'] = 'Disponibile';
$string['typemeetingcenter'] = 'Meeting Center';
$string['typemeetingcenter_desc'] = '';
$string['typepwreq'] = 'Password del meeting richiesta';
$string['typetrainingcenter'] = 'Training Center';
$string['typetrainingcenter_desc'] = '';
$string['undeletelink'] = '<a href="{$a->url}">Ripristina</a>';
$string['unknownhostwebexidexception'] = 'L\'Host ID di WebEx non esiste';
$string['usereditauto'] = 'Il tuo utente WebEx è gestito internamente e non può essere modificato.';
$string['usereditbad'] = 'Non saresti dovuto arrivare su questa pagina.';
$string['usereditunabletoload'] = 'Impossibile caricare il tuo utente da WebEx.';
$string['userexistsexplanation'] = 'Il tuo indirizzo email ({$a->email}) è già utilizzato dall\'utente WebEx <b>{$a->username}</b>. Perfavore inserisci la tua password WebEx.';
$string['webexactivity:addinstance'] = 'Aggiungi un nuovo Meeting WebEx';
$string['webexactivity:allavailabletypes'] = 'Crea meetings di tutte le tiplogie installate';
$string['webexactivity:hostmeeting'] = 'Ospita e gestisci un Meeting WebEx';
$string['webexactivity:reports'] = 'Utilizza i rapporti WebEx';
$string['webexactivity:view'] = 'Visualizza un Meeting WebEx';
$string['webexactivityname'] = 'Nome del Meeting';
$string['webexid'] = 'WebEx ID';
$string['webexrecordings'] = 'Registrazioni WebEx';
$string['webexusercollision'] = 'Collisione con un utente WebEx già esistente.';
$string['webexxmlexception'] = 'Si è verificato un errore in WebEx processando XML: {$a->errorcode} {$a->error}';
