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
 * Strings for component 'local_hide_inactive_courses', language 'it', version '4.1'.
 *
 * @package     local_hide_inactive_courses
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email_content_default'] = 'Gentile {RECIPIENT},

il corso \'{COURSE}\' è stato nascosto perché è da molto tempo che non vi sono accessi da parte degli utenti. Per maggiori informazioni, contattare l\'help desk.';
$string['email_content_desc'] = 'Contenuto dell\'email';
$string['email_onoff_desc'] = 'Invio di avvisi email';
$string['email_onoff_subdesc'] = 'Imposta l’invio di avvisi email ai docenti del corso quando il corso viene nascosto automaticamente';
$string['email_subject_default'] = '{COURSE} è stato nascosto automaticamente per mancanza di attività degli utenti';
$string['email_subject_desc'] = 'Oggetto dell\'email';
$string['event_course_auto_hidden'] = 'Corso nascosto automaticamente';
$string['hide_courses_task'] = 'Nascondi i corsi non attivi';
$string['limit_desc'] = 'Tempo limite di accesso';
$string['limit_subdesc'] = 'Il tempo che deve trascorrere dall\'ultimo accesso prima di considerare non attivo un corso';
$string['pluginname'] = 'Nascondi corsi non attivi';
