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
 * Strings for component 'local_staticpage', language 'it', version '4.1'.
 *
 * @package     local_staticpage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Forza Apache mod_rewrite';
$string['apacherewrite_desc'] = 'Usare pagine statiche solo con un URL pulito, riscritto da Apache mod_rewrite. Leggi il file README per i dettagli.';
$string['checkavailability'] = 'Verifica disponibilità';
$string['checkavailability_desc'] = 'Definisci se Moodle deve verificare la disponibilità di file statici nell\'elenco delle pagine statiche o meno.';
$string['checkavailabilityconnecttimeout'] = 'Timeout connessione';
$string['checkavailabilityconnecttimeout_desc'] = 'Configurare il tempo massimo di attesa (in secondi) della connessione durante il controllo di disponibilità. Usa 0 per impostare un tempo illimitato.';
$string['checkavailabilityno'] = 'No, non verificare la disponibilità';
$string['checkavailabilityresponsedisabled'] = 'Non controllato';
$string['checkavailabilityresponseerror'] = 'Non disponibile - Errore';
$string['checkavailabilityresponsefail'] = 'Non disponibile - Non-2xx';
$string['checkavailabilityresponsesuccess'] = 'Disponibile';
$string['checkavailabilitytimeout'] = 'Timeout';
$string['checkavailabilitytimeout_desc'] = 'Definisci il tempo massimo (in secondi) per consentire l\'esecuzione delle funzioni cURL durante il controllo di disponibilità. Usa 0 per impostare un tempo illimitato.';
$string['checkavailabilityyes'] = 'Sì, verifica disponibilità';
$string['cleanhtml'] = 'Pulisci codice HTML';
$string['cleanhtml_desc'] = 'Definisci se il codice HTML delle pagine statiche deve essere pulito ((e quindi rimuovere i tag speciali come <iframe>
Leggi il file README per i dettagli.';
$string['cleanhtmlno'] = 'No, non pulire il codice HTML';
$string['cleanhtmlyes'] = 'Sì, pulisci il codice HTML';
$string['documentheadingsource'] = 'Origine dei dati dell\'intestazione del documento';
$string['documentheadingsource_desc'] = 'L\'origine dati dell\'intestazione del documento delle pagine statiche';
$string['documents'] = 'Documenti';
$string['documents_desc'] = 'I file .html con il codice HTML delle pagine statiche.
Leggere il file README per i dettagli.';
$string['documenttitlesource'] = 'Origine dei dati del titolo del documento';
$string['documenttitlesource_desc'] = 'L\'origine dei dati del titolo del documento delle pagine statiche (utilizzato nella barra del titolo del browser)';
$string['documenttitlesourceh1'] = 'Primo tag h1 nel codice HTML (in genere si trova poco dopo l\'apertura del tag body)';
$string['documenttitlesourcehead'] = 'Primo tag del titolo nel codice HTML (generalmente situato all\'interno del tag head)';
$string['forcelogin'] = 'Forza il login';
$string['forcelogin_desc'] = 'Rendi disponibili le pagine statiche solo agli utenti che hanno effettuato l\'accesso o anche ai visitatori non registrati. Questo comportamento può essere impostato specificamente per le pagine statiche o può essere impostato in modo da rispettare l\'impostazione "forcelogin" globale di Moodle. Leggi il file README per i dettagli.';
$string['forceloginglobal'] = 'Rispettare l\'impostazione globale $ CFG-> forcelogin';
$string['pagenotfound'] = 'Pagina non trovata';
$string['pluginname'] = 'Pagine statiche';
$string['privacy:metadata'] = 'Il plug-in delle pagine statiche offre funzionalità estese agli amministratori di Moodle, ma non memorizza alcun dato personale.';
$string['processcontent'] = 'Contenuto da elaborare';
$string['processfilters'] = 'Filtri da elaborare';
$string['processfilters_desc'] = 'Definire se i filtri di Moodle (in particolare il filtro multilingua) devono essere elaborati quando si rende disponibile il contenuto della pagina statica. Leggi il file README per i dettagli.';
$string['processfiltersno'] = 'No, non elaborare i filtri';
$string['processfiltersyes'] = 'Sì, elabora i filtri';
$string['settingspagelist'] = 'Elenco delle pagine statiche';
$string['settingspagelistentryfilename'] = 'È stato trovato il seguente file di documento: <br /> <strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'Dal nome del file del documento, Moodle ha derivato il seguente nome di pagina: <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritedisabled'] = 'La pagina statica dovrebbe essere disponibile al seguente URL pulito, ma non è verificata perché la verifica della disponibilità è disabilitata: <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewriteerror'] = 'La pagina statica dovrebbe essere disponibile al seguente URL pulito, ma in realtà un browser non sarà in grado di scaricarla e visualizzarla a causa di un errore di connessione o potrebbe rispondere più lentamente rispetto alla configurazione del tempo  checkavailabilitytimeout (forse c\'è qualcosa di sbagliato nel tuo server web o nella configurazione "mod_rewrite".
(Leggi il file README per i dettagli):
<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'La pagina statica dovrebbe essere disponibile al seguente URL pulito, ma in realtà un browser non sarà in grado di scaricarla e visualizzarla a causa di un codice di stato HTTP non 2xx (forse c\'è qualcosa di sbagliato nel tuo server web o nella configurazione mod_rewrite. Leggi il file README per i dettagli): <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'La pagina statica è disponibile e può essere collegata al seguente URL pulito: <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarddisabled'] = 'La pagina statica dovrebbe essere disponibile al seguente URL standard, ma non viene controllata poiché la verifica della disponibilità è disabilitata: <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarderror'] = 'La pagina statica dovrebbe essere disponibile al seguente URL standard, ma in realtà un browser non sarà in grado di scaricarla e visualizzarla a causa di un errore di connessione o potrebbe rispondere più lentamente rispetto al tempo alla configurazione del tempo di checkavailabilitytimeout (forse c\'è qualcosa di sbagliato nella configurazione del tuo server web. Leggi il file README file per i dettagli): <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'La pagina statica dovrebbe essere disponibile al seguente URL standard, ma in realtà un browser non sarà in grado di scaricarla e visualizzarla a causa di un codice di stato HTTP non 2xx (forse c\'è qualcosa di sbagliato nella configurazione del tuo server web. Leggi il file README per i dettagli): <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'La pagina statica è disponibile e può essere collegata al seguente URL standard: <br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Questo elenco mostra tutte le pagine statiche che sono state caricate nell\'area <a href="{$a}">pagine del documento delle pagine statiche</a> e loro URL';
$string['settingspagelistnofiles'] = 'Non ci sono file .html nell\'area <a href="{$a}">area documenti delle pagine statiche</a>, quindi non ci sono pagine statiche da mostrare. Leggi il file README per i dettagli.';
$string['upgrade_notice_2016020307'] = '<strong>AVVISO DI AGGIORNAMENTO:</strong> I file delle pagine statiche sono stati spostati nella nuova area file all\'interno di Moodle.
Ora puoi eliminare la directory dei documenti legacy {$a}.
Per ulteriori istruzioni sull\'aggiornamento, soprattutto se si stanno utilizzando le funzionalità multilingua di questo plugin, consultare il file README.';
