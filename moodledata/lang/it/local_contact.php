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
 * Strings for component 'local_contact', language 'it', version '4.1'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurazione plugin';
$string['confirmationemail'] = '<p>Gentile [fromname],</p>
<p>Ti ringraziamo per averci contattato. Se necessario, ti contatteremo al più presto.</p>
<p>Cordiali saluti,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Ti ringraziamo per averci contattato. Se necessario, ti ricontatteremo al più presto.';
$string['confirmationpage'] = 'Stato';
$string['confirmationsent'] = 'Ti è stata inviata un email al tuo indirizzo {$a}.';
$string['defaultsubject'] = 'Nuovo messaggio';
$string['duplicateemailaddresses'] = 'Ci sono più utenti con lo stesso indirizzo email.';
$string['errorsending'] = 'Si è verificato un errore durante l\'invio del messaggio. Si prega di riprovare più tardi.';
$string['errorsendingtitle'] = 'L\'Invio messaggio email non è andato a buon fine';
$string['extrainfo'] = '<hr>
<p><strong>Informazioni aggiuntive sull\'utente</strong></p>
<ul>
    <li><strong>Utente del sito:</strong> [userstatus]</li>
    <li><strong>Lingua preferita:</strong> [lang]</li>
    <li><strong>Indirizzo IP di provenienza:</strong> [userip]</li>
    <li><strong>Browser web:</strong> [http_user_agent]</li>
    <li><strong>Modulo web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'email';
$string['field-message'] = 'messaggio';
$string['field-name'] = 'nome';
$string['field-subject'] = 'oggetto';
$string['forbidden'] = 'Vietato';
$string['globalhelp'] = 'Il modulo contatti è un plugin per Moodle che permette al sito di elaborare informazioni inviate tramite moduli HTML, inviandole all\'indirizzo email di supporto del sito.';
$string['lockedout'] = 'BLOCCATO';
$string['loginrequired'] = 'Autenticazione richiesta';
$string['loginrequired_description'] = 'Solo agli utenti autenticati possono inviare richieste di  contatto. Gli ospiti non sono considerati autenticati.';
$string['norecaptcha'] = 'Nessun ReCAPTCHA';
$string['norecaptcha_description'] = 'Non usare ReCAPTCHA sui moduli elaborati con Contact form.';
$string['noreplyto'] = 'No reply-to';
$string['noreplyto_description'] = 'Alcuni server SMTP rifiutano le email se i campi from e noreply-to nell\'intestazione sono diversi. Abilita questa opzione per assicurarti che il campo di mancata risposta corrisponda all\'indirizzo del mittente anziché all\'indirizzo e-mail del mittente.';
$string['nosubjectsitename'] = 'Nessun nome del sito nel campo dell\'oggetto dell\'e-mail';
$string['nosubjectsitename_description'] = 'Abilita per non anteporre all\'oggetto dell\'email [nome sito]. Non influisce sull\'impostazione di Moodle <strong>Testo del prefisso oggetto dell\'email</strong>.';
$string['notconfirmed'] = 'NON CONFERMATO';
$string['pluginname'] = 'Modulo contatti';
$string['privacy:metadata'] = 'Il plug-in Contact Form non memorizza nessun dato personale.';
$string['recapchainfo'] = 'Utilizzo di ReCAPTCHA';
$string['recapchainfo_description'] = 'ReCAPTCHA è attualmente abilitato in Moodle. <strong>Devi</strong>:<br>
<ul>
   <li>Assicurati che il tag {recaptcha} sia incluso in tutti i moduli elaborati da Contact Form per Moodle.</li>
   <li>Assicurati che il <a href="https://moodle.org/plugins/filter_filtercodes">plug-in FilterCodes</a> sia installato e abilitato.</li>
</ul>';
$string['recipient_list'] = 'Elenco dei destinatari disponibili';
$string['recipient_list_description'] = 'È possibile configurare un elenco di potenziali destinatari qui, ognuno dei quali può essere utilizzato in un Contact Form per specificare il destinatario dell\'e-mail utilizzando un campo di testo nascosto o in un elenco a discesa selezionato per consentire agli utenti di selezionare il destinatario senza divulgare l\'effettivo indirizzo e-mail del destinatario . Se l\'elenco è vuoto, le e-mail verranno inviate all\'indirizzo e-mail di Moodle, o all\'indirizzo e-mail di supporto o all\'amministratore principale di Moodle.
Ogni riga deve essere composta da un alias/etichetta di testo univoco, un unico indirizzo e-mail e un nome, ciascuno separato da caratteri pipe (|). Per esempio:
<pre>
supporto tecnico|support@example.com|Joe Fixit
webmaster|admin@example.com|Sig. Moodle
elettrico|nikola.tesla@example.com|Nikola
storia|charles.darwin@example.com|Mr. Darwin
legge|issac.newton@example.com|Isaac Newton
matematica|galileo.galilei@example.com|Galileo
inglese|mark.twain@example.com|Mark Twain
fisica|albert.einstein@example.com|Albert
scienza|thomas.edison@example.com|Mr. Edison
filosofia|aristotele@example.com|Aristotele
</pre>';
$string['senderaddress'] = 'Mittente personalizzato';
$string['senderaddress_description'] = 'Le e-mail verranno inviate da questo indirizzo e-mail. Se questo campo è vuoto, le e-mail verranno inviate dall\'indirizzo e-mail no-reply.';
