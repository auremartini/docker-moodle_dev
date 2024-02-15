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
 * Strings for component 'local_reminders', language 'it', version '4.1'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfnoupcomingactivities'] = 'Nessuna prossima attività in questo corso.';
$string['activityconfupcomingactivities'] = 'Prossime attività';
$string['activityconfupcomingactivitiesdesc'] = 'Non verranno inviati promemoria per le attività non contrassegnate.';
$string['activityignoreincompletes'] = 'Non inviare promemoria una volta completato:';
$string['activityignoreincompletesdetails'] = 'Evita l\'invio di promemoria se l\'attività è stata completata dall\'utente <strong>prima</strong> della fine dell\'attività.';
$string['activityremindersboth'] = 'Sia per le aperture sia per le chiusure';
$string['activityremindersonlyclosings'] = 'Solo per chiusura attività';
$string['activityremindersonlyopenings'] = 'Solo per aperture di attività';
$string['admintreelabel'] = 'Promemoria';
$string['calendareventcreatedprefix'] = 'AGGIUNTO';
$string['calendareventoverdueprefix'] = 'SCADUTO';
$string['calendareventremovedprefix'] = 'RIMOSSO';
$string['calendareventupdatedprefix'] = 'AGGIORNATO';
$string['caleventchangedheading'] = 'Promemoria delle modifiche degli eventi del calendario';
$string['caleventchangedheadingdetails'] = 'Queste impostazioni verranno verificate <strong>prima</strong> di considerare il tipo di evento individuale.';
$string['categoryheading'] = 'Promemoria evento categoria di corsi';
$string['categorynosendforended'] = 'Nessun promemoria per i Corsi Completati:';
$string['categorynosendforendeddescription'] = 'Se selezionato, i promemoria non verranno inviati per i corsi completati.';
$string['contentdescription'] = 'Descrizione';
$string['contenttypeactivity'] = 'Attività';
$string['contenttypecategory'] = 'Categoria';
$string['contenttypecourse'] = 'Corso';
$string['contenttypegroup'] = 'Gruppo';
$string['contenttypelocation'] = 'Dove';
$string['contenttypeuser'] = 'Utente';
$string['contentwhen'] = 'Quando';
$string['courseheading'] = 'Promemoria degli eventi del corso';
$string['days1'] = '1 Giorno';
$string['days3'] = '3 Giorni';
$string['days7'] = '7 Giorni';
$string['dueheading'] = 'Promemoria degli eventi delle attività';
$string['enabled'] = 'Abilitato';
$string['enabledaddedevents'] = 'Invia alla creazione dell\'evento:';
$string['enabledaddedeventsdescription'] = 'Indica se inviare promemoria quando viene creato un evento nel calendario.';
$string['enabledchangedevents'] = 'Invia all\'aggiornamento dell\'evento:';
$string['enabledchangedeventsdescription'] = 'Indica se inviare promemoria quando un evento del calendario viene aggiornato.';
$string['enableddescription'] = 'Abilita/disabilita il plugin Promemoria';
$string['enabledforcalevents'] = 'Abilita per eventi di modifica del calendario:';
$string['enabledforcaleventsdescription'] = 'Abilita l\'invio di promemoria per questo tipo quando un evento del calendario viene creato, eliminato o aggiornato.';
$string['enabledoverdue'] = 'Abilitato per eventi in ritardo';
$string['enabledremovedevents'] = 'Invia quando l\'evento viene rimosso:';
$string['enabledremovedeventsdescription'] = 'Indica se inviare promemoria quando viene rimosso un evento del calendario.';
$string['explaincategoryheading'] = 'Impostazioni promemoria per eventi di categoria di corso.';
$string['explaincourseheading'] = 'Impostazioni promemoria per eventi del corso. Questi eventi provengono da un corso.';
$string['explaindueheading'] = 'Impostazioni promemoria per eventi di attività. Questi eventi provengono da attività / moduli all\'interno di un corso.';
$string['explaingroupheading'] = 'Impostazioni promemoria per eventi di gruppo. Questi eventi sono validi solo per un gruppo specifico.';
$string['explaingroupshowname'] = 'Indica se il nome del gruppo deve essere incluso o meno nel messaggio inviato.';
$string['explainrolesallowedfor'] = 'Scegli quali utenti con i ruoli precedenti possono ricevere promemoria.';
$string['explainsendactivityreminders'] = 'Indica in quale stato dell\'attività devono essere inviati i promemoria.';
$string['explainsiteheading'] = 'Impostazioni promemoria per eventi del sito. Questi eventi sono rilevanti per tutti gli utenti del sito.';
$string['explainuserheading'] = 'Impostazioni promemoria per eventi utente. Questi eventi sono individuali per ogni utente.';
$string['filterevents'] = 'Filtra gli eventi del calendario:';
$string['filtereventsdescription'] = 'Quali eventi del calendario devono essere filtrati ed invio promemoria per loro.';
$string['filtereventsonlyhidden'] = 'Solo eventi nascosti nel calendario';
$string['filtereventsonlyvisible'] = 'Solo eventi visibili nel calendario';
$string['filtereventssendall'] = 'Tutti gli eventi';
$string['groupheading'] = 'Promemoria per eventi di gruppo';
$string['groupshowname'] = 'Mostra il nome del gruppo nel messaggio:';
$string['messageprovider:reminders_course'] = 'Notifiche promemoria per eventi del Corso';
$string['messageprovider:reminders_coursecategory'] = 'Notifiche di promemoria per eventi di Categoria del Corso';
$string['messageprovider:reminders_due'] = 'Notifiche di promemoria per eventi di Attività';
$string['messageprovider:reminders_group'] = 'Notifiche di promemoria per eventi di Gruppo';
$string['messageprovider:reminders_site'] = 'Notifiche di promemoria per eventi del Sito';
$string['messageprovider:reminders_user'] = 'Notifiche di promemoria per eventi Utente';
$string['messagetitleprefix'] = 'Prefisso Titolo Messaggio:';
$string['messagetitleprefixdescription'] = 'Questo testo verrà inserito come prefisso (tra parentesi quadre) al titolo di ogni messaggio di promemoria inviato.';
$string['overdueactivityreminders'] = 'Promemoria Attività in Ritardo:';
$string['overdueactivityremindersdescription'] = 'Se selezionato, i promemoria verranno inviati agli utenti che sono in ritardo per l\'attività.';
$string['overduemessage'] = 'Questa attività è in ritardo!';
$string['pluginname'] = 'Promemoria Evento';
$string['reminderdaysahead'] = 'Invia prima:';
$string['reminderdaysaheadcustom'] = 'Pianificazione personalizzata:';
$string['reminderdaysaheadcustomdetails'] = 'Inoltre, specifica la pianificazione desiderata per inviare promemoria in anticipo per un evento.';
$string['reminderdaysaheadschedule'] = 'Pianifica';
$string['reminderfrom'] = 'Promemoria da';
$string['reminderstask'] = 'Promemoria Locali';
$string['reminderstaskclean'] = 'Pulisci i registri dei Promemoria Locali';
$string['rolesallowedfor'] = 'Ruoli consentiti:';
$string['sendactivityreminders'] = 'Promemoria Attività:';
$string['sendas'] = 'Invia come:';
$string['sendasadmin'] = 'Come amministratore del sito';
$string['sendasdescription'] = 'Specificare a chi devono essere inviate queste e-mail di promemoria.';
$string['sendasnamedescription'] = 'Specificare il nome utente visualizzato per le e-mail di promemoria quando vengono inviate come utente NoReply.';
$string['sendasnametitle'] = 'Nome No Reply';
$string['sendasnoreply'] = 'Indirizzo No Reply';
$string['showmodnameintitle'] = 'Mostra il nome del Modulo nell\'oggetto dell\'email';
$string['showmodnameintitledesc'] = 'Se selezionato, il nome del modulo corrispondente verrà aggiunto all\'oggetto dell\'e-mail di promemoria.';
$string['siteheading'] = 'Promemoria Eventi del Sito';
$string['taskreminder'] = 'Attività Promemoria';
$string['titlesubjectprefix'] = 'Promemoria';
$string['userheading'] = 'Promemoria Eventi Utente';
