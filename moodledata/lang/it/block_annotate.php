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
 * Strings for component 'block_annotate', language 'it', version '4.1'.
 *
 * @package     block_annotate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_default_msg'] = 'Individuale (Predefinito). Può essere modificato nella configurazione.';
$string['access_set_to_msg'] = 'L\'accesso al documento in Annotate è impostato su:';
$string['access_shareuser_msg'] = 'Proprietario del documento:';
$string['access_shareuser_msg_dft'] = 'Non ancora impostato. Utilizzare la configurazione.';
$string['annotate:accessannotate'] = 'Accedere ad Annotate';
$string['annotate:addinstance'] = 'Aggiungere blocco Annotate';
$string['annotate:myaddinstance'] = 'Aggiungere il blocco Annotate alla mia home page';
$string['annotate_api_key_lbl'] = 'Chiave API dell\'utente';
$string['annotate_api_key_msg'] = 'La chiave API key si trova in fondo  alla pagina delle impostazioni quando si accede ad Annotate come utente con accesso API';
$string['annotate_api_user_lbl'] = 'Email utente API';
$string['annotate_api_user_msg'] = 'Email utente Annotate con accesso API.';
$string['annotate_header_config'] = 'Impostazioni server Annotate';
$string['annotate_header_description'] = 'Consente di possono inserire i parametri necessari alla connessione al server Annotate';
$string['annotate_moodleId_lbl'] = 'Identificativo dell\'installazione Moodle';
$string['annotate_moodleId_msg'] = 'Al fine di separare gli spazi di lavoro sull\'installazione locale di Moodle';
$string['annotate_server_uri_default'] = 'http://localhost/annotate';
$string['annotate_server_uri_lbl'] = 'URI del server Annotate';
$string['annotate_server_uri_msg'] = 'Da impostare sul server Annotate. Al fine di effettuare i test, se possiedi una installazione predefinita di Annotate sullo stesso server Moodle, puoi inserire "http://localhost/annotate". Se entrambi i server si trovano sulla stessa rete locale, puoi utilizzare i rispettivi indirizzi IP locali, purché gli stessi siano configurati per riconoscere il proprio indirizzo.';
$string['annotate_wsuser_token_lbl'] = 'Token dell\'utente dei web service';
$string['annotate_wsuser_token_msg'] = 'Deve essere creato uno specifico utente dei web service Moodle per consentier ad Annotate di recuperare file dal server Moodle. Per maggiori informzioni: https://moodle.org/plugins/block_annotate';
$string['config_access_label'] = 'Accesso';
$string['config_access_label_help'] = 'Con accesso "Individuale" si intende che ogni utente avrà una istanza indipendente per ogni risorsa a cui accederà e che le annotazioni saranno private, a meno che l\'utente non condivida esplicitamente il documento in Annotate. Con "Gruppo" si intende che ci sarà una copia per tutto il gruppo indicato come proprietario dall\'utente specificato sotto. Gli studenti potranno inserire annotazioni private, ma anche annotazioni condivise, che saranno visibili agli altri utenti.';
$string['config_group_access'] = 'Gruppo';
$string['config_header_label'] = 'Opzioni di condivisione del documento';
$string['config_individual_access'] = 'Individuale';
$string['config_shareuser_label'] = 'Proprietario del documento (solo per l\'opzione Gruppo)';
$string['config_shareuser_label_help'] = 'Per l\'accesso di tipo "Gruppo", deve essere inserito l\'indirizzo email dell\'utente proprietario del documento in Annotate. Generalmente viene impostato quello dell\'insegnante del corso.';
$string['enter_email_msg'] = 'Inserire l\'indirizzo email';
$string['invalid_email_msg'] = 'L\'indirizzo email non è valido';
$string['pluginname'] = 'Annotate';
$string['transfer_error'] = 'Errore';
$string['transfer_error_msg'] = 'Si è verificato un errore durante il trasferimento da Annotate del documento da visualizzare. Per risolvere il problema contattare l\'amministratore del server.';
