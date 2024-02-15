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
 * Strings for component 'local_mailtest', language 'it', version '4.1'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Visualizza il log delle comunicazioni con il server di posta anche in assenzadi errori.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['errorcommunications'] = 'Moodle non ha potuto comunicare con il server di posta.</p><p><strong>Raccomandazione:</strong></p><p>Inizia controllando le tue <a href="{$a}" target="_blank">impostazioni mail SMTP</a> di Moodle.</p><p>Se sembrano corrette, controlla le impostazioni del server SMTP Server e/o le impostazioni del firewall per assicurarti che siano configurate per accettare connessioni SMTP dal web server Moodle e dal\'indirizzo email no-reply. Per ulteriore assistenza, consulta la sezione FAQ nella documentazione.';
$string['errorsend'] = 'Non è stato possibile consegnare Il messaggio email di test.</p><p><strong>Raccomandazione:</strong></p><p>Controlla la <a href="{$a}" target="blank">configurazione Email</a> di Moodle. Per ulteriore assistenza, consulta la sezione FAQ nella documentazione.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Indirizzo email mittente';
$string['heading'] = 'Test configurazione email';
$string['message'] = '<p>Questo è un messaggio di prova. Si prega di ignorarlo.</p>
<p>Se hai ricevuto questa email, significa che hai configurato correttamente le impostazioni email del sito Moodle.</p>
<hr><p><strong>Informazioni aggiuntive sull\'Utente</strong></p>
<ul>
<li><strong>Stato della registrazione :</strong> {$a->regstatus}</li>
<li><strong>Lingua preferita :</strong> {$a->lang}</li>
<li><strong>Browser web dell\'utente :</strong> {$a->browser}</li>
<li><strong>Messaggio inviato da :</strong> {$a->referer}</li>
<li><strong>Versione Moodle :</strong> {$a->release}</li>
<li><strong>Indirizzo IP dell\'utente :</strong> {$a->ip}</li>
</ul>';
$string['notregistered'] = 'Non registrato o non collegato.';
$string['phpmethod'] = 'Metodo di default del PHP';
$string['pluginname'] = 'Test eMail';
$string['pluginname_help'] = 'Test eMail verificherà le impostazioni email del sito inviando un messaggio e-mail di prova all\'indirizzo indicato. Utilizzabile solamente dagli amministratori del sito.';
$string['primaryadminemail'] = 'Email dell\'amministratore primario';
$string['recipientisrequired'] = 'Devi indicare l\'indirizzo email del destinatario.';
$string['registered'] = 'Utente registrato ({$a}).';
$string['sendmethod'] = 'Metodo di invio email';
$string['sendtest'] = 'Invia un messaggio di test';
$string['sentmail'] = 'Moodle ha consegnato correttamente il messaggio di test al server di posta SMTP.';
$string['sentmailphp'] = 'Il messaggio di test di Moodle è stato accettato correttamente da PHP Mail.';
$string['smtpmethod'] = 'SMTP hosts: {$a}';
$string['toemail'] = 'Indirizzo email destinatario';
$string['youremail'] = 'Il tuo indirizzo email';
