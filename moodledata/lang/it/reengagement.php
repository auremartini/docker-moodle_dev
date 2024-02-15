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
 * Strings for component 'reengagement', language 'it', version '4.1'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'L\'attività è stata contrassegnata come completata';
$string['afterdelay'] = 'Dopo un periodo';
$string['areyousure'] = 'Sei sicuro di effettuare lamodifica?';
$string['completeattimex'] = 'L\'attività sarà completata il {$a}';
$string['completion'] = 'Completamento';
$string['completiondatesupdated'] = 'Date di completamento aggiornate.';
$string['completiontime'] = 'Data di completamento';
$string['completionwillturnon'] = 'Da notare che aggiungendo l\'attività al corso sarà abilitato il completamento attività.';
$string['crontask'] = 'Ricoinvolgimento';
$string['cronwarning'] = 'L\'elaborazione pianificata del Ricoinvolgimento non è stata eseguita per più di 60 minuti - Il Cron deve essere configurato per permettere che Ricoinvolgimento funzioni correttamente.';
$string['days'] = 'Giorni';
$string['duration'] = 'Durata';
$string['duration_help'] = '<p>La durata del ricoinvolgimento è il periodo di tempo che intercorre tra quando l\'utente inizia l\'attività e quando questa è terminata.
La durata del ricoinvolgimento è specificata come lunghezza del periodo (es. Settimane) e il numero dei periodi (es. 7).</p>

<p>Questo esempio indica che, da quando l\'utente inizia il ricoinvolgimento, dovrebbe terminarlo in 7 settimane.</p>';
$string['emailcontent'] = 'Contenuto della notifica (Utente)';
$string['emailcontent_help'] = 'Quando il modulo invia una notifica agli utenti, prenderà il contenuto della notifica da questo campo.';
$string['emailcontentdefaultvalue'] = 'Questa è una notifica di promemoria dal corso %courseshortname%.';
$string['emailcontentmanager'] = 'Contenuto della notifica (Responsabile)';
$string['emailcontentmanager_help'] = 'Quando il modulo invia una notifica ad un responsabile dell\'utente, prenderà il contenuto della notifica da questo campo.';
$string['emailcontentmanagerdefaultvalue'] = 'Questa è una notifica di promemoria dal corso %courseshortname%, riguardante l\\\'utente %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Contenuto della notifica (Terze parti)';
$string['emailcontentthirdparty_help'] = 'Quando il modulo invia una notifica ad na terza parte, prenderà il contenuto della notifica da questo campo.';
$string['emailcontentthirdpartydefaultvalue'] = 'Questa è una notifica di promemoria dal corso %courseshortname%, riguardante l\'utente %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Posticipo della notifica';
$string['emaildelay_help'] = 'L\'impostazione controlla la durata dell\'attesa quando il modulo è impostato per inviare notifiche agli utenti "Dopo un periodo", .';
$string['emailrecipient'] = 'Destinatari della notifica';
$string['emailrecipient_help'] = 'Quando una notifica deve essere inviata per suggerire all\'utente un ricoinvolgimento nel corso, questa impostazione controlla se la notifica è inviata all\'utente, al suo responsabile, o ad entrambi.';
$string['emailsubject'] = 'Oggetto della notifica (Utente)';
$string['emailsubject_help'] = 'Quando il modulo invia una notifica ad un utente, prende l\'oggetto della notifica da questo campo.';
$string['emailsubjectmanager'] = 'Oggetto della notifica (Responsabile)';
$string['emailsubjectmanager_help'] = 'Quando il modulo invia una notifica ad un responsabile dell\'utente, prende l\'oggetto della notifica da questo campo.';
$string['emailsubjectthirdparty'] = 'Oggetto della notifica (Terze parti)';
$string['emailsubjectthirdparty_help'] = 'Quando il modulo invia notifica ad una terza parte, prende l\'oggetto della notifica da questo campo.';
$string['emailtime'] = 'Orario della notifica';
$string['emailuser'] = 'Utente della notifica';
$string['emailuser_help'] = 'Quando l\'attività dovrebbe inviare una notifica all\'utente: <ul>
<li>Mai: Non notificare gli utenti.</li>
<li>Al completamento del ricoinvolgimento: Invia una notifica all\'utente quando l\'attività di ricoinvolgimento è completata.</li>
<li>Promemoria completamento attività: Invia una notifi ca all\'utente con un tempo prestabilito dopo che ha iniziato il modulo.</li>
</ul>';
$string['frequencytoohigh'] = 'Il numero massimo di promemoria che è stato prestabilito per il periodo di attesa è {$a}.';
$string['hours'] = 'Ore';
$string['introdefaultvalue'] = 'Questa è un\'attività di ricoinvolgimento. Il suo scopo è di imporre un intervallo di tempo tra le attività che lo precedono e quelle che lo seguono.';
$string['messageprovider:mod_reengagement'] = 'Notifiche di ricoinvolgimento';
$string['minutes'] = 'Minuti';
$string['modulename'] = 'Ricoinvolgimento';
$string['modulenameplural'] = 'Ricoinvolgimenti';
$string['mustenablecompletionavailability'] = 'Per usare l\'attività Ricoinvolgimento, il tracciamento del completamento e le condizioni di accesso devono essere abilitate.';
$string['never'] = 'Mai';
$string['newcompletiontime'] = 'Nuovo orario di completamento';
$string['nochange'] = 'Nessuna modifica';
$string['nochangenoaccess'] = 'Nessuna modifica (l\'utente non ha effettuato l\'accesso al corso)';
$string['noemailattimex'] = 'Il messaggio predisposto per {$a} non sarà inviato perché l\'attività monitorata è stata completata';
$string['nosuppresstarget'] = 'Nessuna attività da monitorare selezionata';
$string['oncompletion'] = 'Al completamento del ricoinvolgimento';
$string['periodtoolow'] = 'L\'intervallo di tempo è troppo breve - deve essere almeno 5 minuti.';
$string['pluginname'] = 'Ricoinvolgimento';
$string['privacy:metadata:completiontime'] = 'Quando questo modulo sarà completato';
$string['privacy:metadata:emailsent'] = 'La notifica è stata inviata';
$string['privacy:metadata:emailtime'] = 'Quando questo utente deve essere notificato';
$string['privacy:metadata:reengagement'] = 'ID Ricoinvolgimento';
$string['privacy:metadata:reengagement_inprogress'] = 'Attività di ricoinvolgilmento in corso';
$string['privacy:metadata:userid'] = 'L\'Id utente relativo a questo elemento';
$string['receiveemailattimex'] = 'Il messaggio sarà inviato il {$a}.';
$string['receiveemailattimexunless'] = 'Il messaggio sarà inviato il {$a}, a meno che non si completi l\'attività indicata.';
$string['reengagement'] = 'ricoinvolgimento';
$string['reengagement:addinstance'] = 'Aggiungere attività riconvolgimento';
$string['reengagement:bulkactions'] = 'Eseguire operazioni in massa sul ricoinvolgimento';
$string['reengagement:editreengagementduration'] = 'Modificare la durata del ricoinvolgimento';
$string['reengagement:startreengagement'] = 'Iniziare ricoinvolgimento';
$string['reengagementduration'] = 'Durata del ricoinvolgimento';
$string['reengagementfieldset'] = 'Dettagli del ricoinvolgimento';
$string['reengagementintro'] = 'Introduzione del ricoinvolgimento';
$string['reengagementname'] = 'Nome del ricoinvolgimento';
$string['reengagementsinprogress'] = 'Ricoinvolgimento in corso';
$string['remindercount'] = 'Numero di promemoria';
$string['remindercount_help'] = 'Numero di email di promemoria da inviare se l\'attività non è stata completata entro il tempo prestabilito. Ci sono alcuni valori limite che si possono usare<ul>
<li>meno di 24 ore - limite di 2 promemoria.</li>
<li>meno di 5 giorni - limite di 10 promemoria.</li>
<li>meno di 15 giorni - limite of 26 promemoria.</li>
<li>oltre 15 giorni - limite massimo di 40 promemoria.</li></ul>';
$string['resetbyenrolment'] = 'Dalla data di iscrizione e una durata di: {$a}';
$string['resetbyfirstaccess'] = 'Dal primo accesso al corso e una durata di: {$a}';
$string['resetbyspecificdate'] = 'Da una data specifica';
$string['resetcompletion'] = 'Resetta la data di completamento';
$string['search:activity'] = 'Ricoinvolgimento - informazione dell\'attività';
$string['specifydate'] = 'Imposta la data di completamento a:';
$string['suppressemail'] = 'Inibisci notifiche se l\'attività monitorata è completata';
$string['suppressemail_help'] = 'Questa opzione permette di bloccare l\'invio di notifiche agli utenti quando un\'attività monitorata è completata.';
$string['suppresstarget'] = 'Attività monitorata';
$string['suppresstarget_help'] = 'Usa il menù a tendina per scegliere l\'attività di cui dovrebbe essere verificato il completamento prima di inviare l\'email di promemoria.';
$string['thirdpartyemails'] = 'Destinatari terze parti';
$string['thirdpartyemails_help'] = 'Una lista separata da virgola di indirizzi email di terze parti che devono ricevere notifiche quando vengono inviate all\'utente.';
$string['userandmanager'] = 'Utente e Responsabile';
$string['weeks'] = 'Settimane';
$string['withselectedusers'] = 'Con gli utenti selezionati...';
$string['withselectedusers_help'] = '* Invia messaggio - Per inviare un messaggio ad uno o più partecipanti
* Reimposta la data di completamento in base all\'accesso al corso - Per correggere la data di completamento in base al primo accesso al corso.';
