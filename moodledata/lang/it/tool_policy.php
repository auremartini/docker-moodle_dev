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
 * Strings for component 'tool_policy', language 'it', version '4.1'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Sono consapevole di aver ricevuto la richiesta di dare il consenso nelle veci degli utenti di cui sopra.';
$string['acceptancenote'] = 'Commenti';
$string['acceptancepolicies'] = 'Politiche';
$string['acceptancessavedsucessfully'] = 'I consensi sono stati salvati correttamente.';
$string['acceptancestatusaccepted'] = 'Consenso dato';
$string['acceptancestatusacceptedbehalf'] = 'Consenso dato nelle veci di un utente';
$string['acceptancestatusdeclined'] = 'Consenso negato';
$string['acceptancestatusdeclinedbehalf'] = 'Consenso negato nelle veci di un utente';
$string['acceptancestatusoverall'] = 'Consensi';
$string['acceptancestatuspartial'] = 'Consenso dato parzialmente';
$string['acceptancestatuspending'] = 'In attesa';
$string['acceptanceusers'] = 'Utenti';
$string['actions'] = 'Azioni';
$string['activate'] = 'Imposta lo stato su "Attiva"';
$string['activateconfirm'] = '<p>Stai per attivare la politica <em>\'{$a->name}\'</em> e rendere corrente la versione <em>\'{$a->revision}\'</em>.</p><p>Per utilizzare il sito, tutti gli utenti dovranno dare il consenso alla nuova versione della politica.</p>';
$string['activateconfirmyes'] = 'Attiva';
$string['activating'] = 'Attivazione della politica';
$string['agreepolicies'] = 'Per favore dai il consenso alle seguenti politiche';
$string['backtoprevious'] = 'Pagina precedente';
$string['backtotop'] = 'Torna all\'inizio';
$string['cachedef_policy_optional'] = 'Cache della configurazione facoltativa/obbligatoria delle versioni della politca';
$string['consentbulk'] = 'Consenso';
$string['consentpagetitle'] = 'Consenso';
$string['contactdpo'] = 'Se hai domande sulle politiche, per favore contatta il responsabile del trattamento dei dati.';
$string['dataproc'] = 'Elaborazione di dati personali';
$string['declineacknowledgement'] = 'Sono consapevole di aver ricevuto la richiesta di negare il consenso nelle veci degli utenti di cui sopra.';
$string['declinethepolicy'] = 'Nega il consenso dell\'utente';
$string['deleteconfirm'] = '<p>Sei sicuro di eliminare la politica <em>\'{$a->name}\'</em>?</p><p>L\'operazione non potrà essere annullata.</p>';
$string['deleting'] = 'Eliminazione versione';
$string['editingpolicydocument'] = 'Modifica politica';
$string['errorpolicyversioncompulsory'] = 'Non è possibile negare il consenso a politiche obbligatorie.';
$string['errorpolicyversionnotfound'] = 'Non esiste una versione della politica con questo identificativo.';
$string['errorsaveasdraft'] = 'Le modifiche minori non possono essere salvate in bozza';
$string['errorusercantviewpolicyversion'] = 'L\'utente non può accedere a questa versione delle politica.';
$string['event_acceptance_created'] = 'Creazione accordo politiche utente';
$string['event_acceptance_updated'] = 'Aggiornamento accordo politiche utente';
$string['filtercapabilityno'] = 'Autorizzazione: Non può dare consenso';
$string['filtercapabilityyes'] = 'Autorizzazione: Può dare consenso';
$string['filterplaceholder'] = 'Cerca una parola o seleziona un filtro';
$string['filterpolicy'] = 'Politica: {$a}';
$string['filterrevision'] = 'Versione: {$a}';
$string['filterrevisionstatus'] = 'Versione: {$a->name} ({$a->status})';
$string['filterrole'] = 'Ruolo: {$a}';
$string['filters'] = 'Filtri';
$string['filterstatusdeclined'] = 'Stato: consenso negato';
$string['filterstatuspending'] = 'Stato. in atetsa';
$string['filterstatusyes'] = 'Stato: consenso dato';
$string['guestconsent:continue'] = 'Prosegui';
$string['guestconsentmessage'] = 'Se prosegui nella navigazione del sito, ne accetti le politiche:';
$string['iagree'] = 'Do il consenso alla politica {$a}';
$string['iagreetothepolicy'] = 'Dai il consenso';
$string['idontagree'] = 'No grazie, nego il consenso alla politica {$a}';
$string['inactivate'] = 'Imposta lo stato su "Disattivata"';
$string['inactivating'] = 'Disattivazione della politica';
$string['inactivatingconfirm'] = '<p>Stai per disattivare la versione <em>\'{$a->revision}\'</em> della politica <em>\'{$a->name}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Disattiva';
$string['invalidversionid'] = 'Non esiste una politica con questo identificativo.';
$string['irevokethepolicy'] = 'Revoca il consenso dell\'utente';
$string['listactivepolicies'] = 'Elenco delle politiche attive';
$string['managepolicies'] = 'Gestione politiche';
$string['minorchange'] = 'Modifica minore';
$string['minorchangeinfo'] = 'Le modifiche minori che non alterano la sostanza della politica e dei termini e condizioni. Gli utenti non dovranno ridare il proprio consenso.';
$string['movedown'] = 'Sposta in basso';
$string['moveup'] = 'Sposta in alto';
$string['mustagreetocontinue'] = 'Prima di proseguire devi dare il consenso alle politiche.';
$string['newpolicy'] = 'Nuova politica';
$string['newversion'] = 'Nuova versione';
$string['noactivepolicies'] = 'Non sono presenti politiche che abbiano una versione attiva.';
$string['nofiltersapplied'] = 'Nessun filtro applicato';
$string['nopermissiontoagreedocs'] = 'Manca l\'autorizzazione per dare il consenso alle politiche';
$string['nopermissiontoagreedocs_desc'] = 'Siamo spiacenti, non hai l\'autorizzazione per dare il consenso alle politiche.<br />Non potrai utilizzare il sito finché non saranno state accettate le seguenti politiche:';
$string['nopermissiontoagreedocsbehalf'] = 'Manca l\'autorizzazione per dare il consenso alle politiche nelle veci di questo utente';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Siamo spiacenti, non hai l\'autorizzazione per dare il consenso alle seguenti politiche nelle veci di {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Per ulteriore assistenza:';
$string['nopermissiontoviewpolicyversion'] = 'Non sei autorizzato a visualizzare questa versione delle politica.';
$string['nopolicies'] = 'Non sono presenti versioni attive delle politiche per gli utenti registrati.';
$string['pluginname'] = 'Politiche';
$string['policiesagreements'] = 'Politiche e consensi';
$string['policy:accept'] = 'Dare il consenso alle politiche';
$string['policy:acceptbehalf'] = 'Dare il consenso alle politiche nelle veci di un altro';
$string['policy:managedocs'] = 'Gestire politiche';
$string['policy:viewacceptances'] = 'Visualizzare report consensi utente';
$string['policydocaudience'] = 'Consenso dell\'utente';
$string['policydocaudience0'] = 'Tutti gli utenti';
$string['policydocaudience1'] = 'Utenti autenticati';
$string['policydocaudience2'] = 'Ospiti';
$string['policydoccontent'] = 'Testo della politica';
$string['policydochdrpolicy'] = 'Politica';
$string['policydochdrversion'] = 'Versione del documento';
$string['policydocname'] = 'Nome';
$string['policydocoptional'] = 'Consenso facoltativo';
$string['policydocoptionalno'] = 'Obbligatria';
$string['policydocoptionalyes'] = 'Facoltativa';
$string['policydocrevision'] = 'Versione';
$string['policydocsummary'] = 'Riassunto';
$string['policydocsummary_help'] = 'Un riassunto delle politica, possibilmente redatto in forma semplificata e comprensibile.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Politiche del sito';
$string['policydoctype1'] = 'Politiche di privacy';
$string['policydoctype2'] = 'Politiche di terze parti';
$string['policydoctype99'] = 'Altre politiche';
$string['policydocuments'] = 'Documenti delle politiche';
$string['policynamedversion'] = 'Politica {$a->name} (version {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Visualizza la politica prima delle altre';
$string['policyversionacceptedinbehalf'] = 'Il consenso a questa politica è stata data nelle tue veci da un altro utente.';
$string['policyversionacceptedinotherlang'] = 'Il consenso a questa versione delle politica è stato dato in una lingua differente.';
$string['previousversions'] = '{$a} versioni precedenti';
$string['privacy:metadata:acceptances'] = 'Informazioni sui consensi dati dagli utenti.';
$string['privacy:metadata:acceptances:lang'] = 'Lingua visualizzata al momento del consenso.';
$string['privacy:metadata:acceptances:note'] = 'Commenti dell\'utente che ha dato il consenso alla politica nelle veci di un altro utente.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Versione della politica per la quale è stato dato il consenso.';
$string['privacy:metadata:acceptances:status'] = 'Stato del consenso.';
$string['privacy:metadata:acceptances:timecreated'] = 'Orario del consenso dato dall\'utente.';
$string['privacy:metadata:acceptances:timemodified'] = 'Data ed ora di modifica del consenso dell\'utente.';
$string['privacy:metadata:acceptances:userid'] = 'ID dell\'utente che ha dato il consenso.';
$string['privacy:metadata:acceptances:usermodified'] = 'Utente che ha dato il consenso alla politica nelle veci di un altro utente.';
$string['privacy:metadata:subsystem:corefiles'] = 'Lo strumento Politiche memorizza i file contenuti nel testo e nel riassunto della politica.';
$string['privacy:metadata:versions'] = 'Informazioni sulla versione della politica.';
$string['privacy:metadata:versions:archived'] = 'Stato della politica (attivata o disattivata)';
$string['privacy:metadata:versions:audience'] = 'Tipologia degli utenti che devono dare il proprio consenso.';
$string['privacy:metadata:versions:content'] = 'Contenuto della versione della politica.';
$string['privacy:metadata:versions:contentformat'] = 'Formato del campo contenuto della versione.';
$string['privacy:metadata:versions:name'] = 'Nome della politica.';
$string['privacy:metadata:versions:policyid'] = 'Politica alla quale la versione è associata.';
$string['privacy:metadata:versions:revision'] = 'Nome della revisione della versione della politica.';
$string['privacy:metadata:versions:summary'] = 'Riassunto della versione della politica.';
$string['privacy:metadata:versions:summaryformat'] = 'Formato del campo Riassunto';
$string['privacy:metadata:versions:timecreated'] = 'Orario di creazione della versione della politica.';
$string['privacy:metadata:versions:timemodified'] = 'Orario di aggiornamento della politica.';
$string['privacy:metadata:versions:type'] = 'Tipo di politica.';
$string['privacy:metadata:versions:usermodified'] = 'Utente che ha modificato la politica.';
$string['privacysettings'] = 'Impostazioni privacy';
$string['readpolicy'] = 'Per favore leggi la nostra {$a}';
$string['refertofullpolicytext'] = 'Se vuoi puoi rivedere il testo completo della politica cliccando sul link:  {$a}';
$string['response'] = 'Risposta';
$string['responseby'] = 'Utente che ha risposto';
$string['responseon'] = 'Data';
$string['revokeacknowledgement'] = 'Dichiaro di aver ricevuto richiesta di revoca del consenso per conto dell\'utente indicato sopra.';
$string['save'] = 'Salva';
$string['saveasdraft'] = 'Salva in bozza';
$string['selectpolicyandversion'] = 'Utilizza i filtri soprastanti per selezionare la politica e/o la versione';
$string['selectuser'] = 'Seleziona utente {$a}';
$string['selectusersforconsent'] = 'Seleziona l\'utente in vece del quale dare il consenso';
$string['settodraft'] = 'Crea "Bozza"';
$string['status'] = 'Stato politica';
$string['status0'] = 'Bozza';
$string['status1'] = 'Attiva';
$string['status2'] = 'Disattivata';
$string['statusformtitleaccept'] = 'Politiche accettate';
$string['statusformtitledecline'] = 'Politiche rifuitate';
$string['statusformtitlerevoke'] = 'Politica di revoca';
$string['statusinfo'] = 'Una politica attiva dovrà ricevere il consenso sia dai nuovi utenti sia dagli utenti esistenti, questi ultimi alla prossima autenticazione.';
$string['steppolicies'] = 'Politica {$a->numpolicy} di {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Accetto';
$string['useracceptanceactionacceptone'] = 'Accetto {$a}';
$string['useracceptanceactionacceptpending'] = 'Accetta politiche in attesa';
$string['useracceptanceactiondecline'] = 'Nega consenso';
$string['useracceptanceactiondeclineone'] = 'Nega consenso a {$a}';
$string['useracceptanceactiondeclinepending'] = 'Nega consenso alle politiche in attesa';
$string['useracceptanceactiondetails'] = 'Dettagli';
$string['useracceptanceactionrevoke'] = 'Revoca';
$string['useracceptanceactionrevokeall'] = 'Revoca consenso alle politiche';
$string['useracceptanceactionrevokeone'] = 'Revoca consenso a {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} su {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/D';
$string['useracceptances'] = 'Consensi utente';
$string['userpolicysettings'] = 'Politiche';
$string['usersaccepted'] = 'Consensi';
$string['viewarchived'] = 'Visualizza versioni precedenti';
$string['viewconsentpageforuser'] = 'Visualizzazione della pagina nelle veci di {$a}';
