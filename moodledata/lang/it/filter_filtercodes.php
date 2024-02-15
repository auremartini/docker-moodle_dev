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
 * Strings for component 'filter_filtercodes', language 'it', version '4.1'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentmissing'] = '<h1>Contenuto mancante.</h1><p>Per favore informa l\'amministratore della piattaforma.</p>';
$string['disabled_customnav_description'] = '<strong>Note sul supporto alla navigazione personalizzata</strong> - Per abilitare il supporto di FilterCodes nella navigazione personalizzata del sito Moodle, potresti dover personalizzare il tuo tema o il codice di Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus">Informazioni su come abilitare il supporto FilterCodes per la navigazione personalizzata</a>.';
$string['enable_customnav'] = 'Supporto navigazione personalizzata';
$string['enable_customnav_description'] = '<strong>Sperimentale</strong>: Abilita il support dei tag FilterCode tags nel menù di navigazione personalizzata di Moodle.
Nota: Si conosce la compatibilità con i temi Clean e Boost solo da Moodle 3.2 a 3.4. Non usare nella pagina Impostazioni dei temi Moodle.';
$string['enable_scrape'] = 'Supporta tag scrape';
$string['enable_scrape_description'] = 'Abilita i tag scrape';
$string['escapebraces'] = 'Escape dei tag';
$string['escapebraces_desc'] = 'Quando questa opzione è abilitata, sarai in grado di visualizzare i tag FilterCode senza che questi siano interpretati da questo filtro inserendoli tra [ parentesi quadre ]. Questo può essere molto utile nella creazione della documentazione dei FilterCodes per i docenti e i creatori di corsi del tuo sito Moodle.<br><br>Esempio: [{fullname}] non mostrerà il nome completo dell\'utente ma mostrerà invece il tag {fullname} senza parentesi quadre.';
$string['filtername'] = 'Filter Codes';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Present!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Sono qui!">
    </div>
</form>';
$string['formcontactus'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Il tuo nome <strong class="required">(obbligatorio)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimo 3 lettere/spazi." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Indirizzo email <strong class="required">(obbligatorio)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60"
                    required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Oggeto <strong class="required">(obbligatorio)</strong></label>
            <input id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimo 5 caratteri." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Messaggio <strong class="required">(obbligatorio)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Minimo 5 caratteri." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Invia">
    </div>
</form>';
$string['formcourserequest'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf new-course-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Il tuo nome <strong class="required">(obbligatorio)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimo 3 lettere/spazi." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Indirizzo email <strong class="required">(obbligatorio)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="new_course_name" id="new_course_namelabel" class="d-block">Nome proposto per il corso <strong class="required">(obbligatorio)</strong></label>
            <input id="new_course_name" name="new_course_name" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimo 5 caratteri." required="required">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descrizione del corso <strong class="required">(obbligatorio)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Minimo 5 caratteri." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Invia richiesta per questo corso">
    </div>
</form>';
$string['formquickquestion'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Oggetto <strong class="required">(obbligatorio)</strong></label>
            <input class="block" id="subject" name="subject" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimo 5 caratteri." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Messaggio <strong class="required">(obbligatorio)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Minimo 5 caratteri." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Invia">
    </div>
</form>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="name" id="namelabel" class="d-block">Il tuo nome <strong class="required">(obbligatorio)</strong></label>
            <input id="name" name="name" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimo 3 lettere/spazi." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="email" id="emaillabel" class="d-block">Indirizzo email <strong class="required">(obbligatorio)</strong></label>
            <input id="email" name="email" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="subject" id="subjectlabel" class="d-block">Oggetto <strong class="required">(obbligatorio)</strong></label>
            <select id="subject" name="subject" required="required">
                <option label="Seleziona una voce"></option>
                <option>Non riesco a cambiare la password</option>
                <option>Non riesco ad autenticarmi</option>
                <option value="Suggestion">Ho un suggerimento</option>
                <option value="Error message">Sto ottenendo un messaggio di errore</option>
                <option value="System error">Qualcosa non sta funzionando come dovrebbe</option>
                <option value="Course">Sto avendo difficoltà ad accedere ad un corso o ad un contenuto</option>
                <option value="Other reason">Altro (per favore specifica)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="specific_subject" id="specifylabel" class="d-block">Specifico l\'oggetto o il noem del corso&nbsp;<strong class="required">(obbligatorio)</strong></label>
            <input type="text" id="specific_subject" name="specific_subject" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">Specifica l\'indirizzo URL</label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Descrizione e passaggi per riprodurre il problema&nbsp;<strong class="required">(obbligatorio)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Minimo 5 caratteri." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Invia richiesta di aiuto">
    </div>
</form>';
$string['pluginname'] = 'Filter Codes';
$string['privacy:metadata'] = 'Il plugin "Filter Codes" non memorizza dati personali.';
$string['sizeb'] = 'B';
$string['sizeeb'] = 'EB';
$string['sizegb'] = 'GB';
$string['sizekb'] = 'KB';
$string['sizemb'] = 'MB';
$string['sizetb'] = 'TB';
$string['sizeyb'] = 'YB';
$string['sizezb'] = 'ZB';
