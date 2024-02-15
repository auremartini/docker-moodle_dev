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
 * Strings for component 'quizaccess_proctoring', language 'it', version '4.1'.
 *
 * @package     quizaccess_proctoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Azioni';
$string['camhtml'] = '<div class="camera"> <video id="video">Nessun flusso video disponibile.</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="La cattura dello schermo apparirà in questa casella."/>';
$string['dateverified'] = 'Data e ora';
$string['eprotroringreports'] = 'Report di convalida dell\'identità di:';
$string['eprotroringreportsdesc'] = 'Il report fornisce tutte le immagini degli studenti scattate durante l\'esame, consentendo di convalidare la loro identità, come l\'immagine del profilo e le foto della webcam.';
$string['event:screenshotcreated'] = 'È stato catturato un nuovo screenshot';
$string['event:screenshotupdated'] = 'Lo screenshot è stato aggiornato';
$string['event:takescreenshot'] = 'Screenshot cattutrato';
$string['name'] = 'Nome studente';
$string['notpermissionreport'] = 'I report di convalida dell\'identità sono disabilitati.';
$string['notrequired'] = 'non richiesto';
$string['openwebcam'] = 'Consenti alla webcam di continuare';
$string['picturesreport'] = 'Visualizza il proctoring report';
$string['picturesusedreport'] = 'Immagini catturate durante il quiz.';
$string['pluginname'] = 'Proctoring';
$string['privacy:core_files'] = 'QuizAccess Proctoring immagini della webcam';
$string['privacy:metadata'] = 'Non condividiamo alcun dato personale con terze parti.';
$string['privacy:metadata:core_files'] = 'Quiz Access memorizza le immagini degli utenti che sono state scattate dalla webcam durante il tentativo di quiz.';
$string['privacy:metadata:courseid'] = 'L\'ID del corso che utilizza il proctoring.';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Moodle Quiz accedi alla tabella dei log di Proctoring che memorizza l\'immagine dell\'utente.';
$string['privacy:metadata:quizid'] = 'L\'ID del quiz che utilizza il proctoring.';
$string['privacy:metadata:status'] = 'Lo stato del proctoring.';
$string['privacy:metadata:webcampicture'] = 'Il nome dell\'immagine che è stata scattata dal proctoring.';
$string['privacy:quizaccess_proctoring_logs'] = 'I registri del proctoring';
$string['proctoring:getcamshots'] = 'Il proctoring cattura le imagini dalla webcam';
$string['proctoring:sendcamshot'] = 'Il proctoring invia le imagini dalla webcam';
$string['proctoring:viewreport'] = 'Visualizza il report del Proctoring';
$string['proctoringheader'] = '<strong>Per continuare con questo tentativo di quiz devi aprire la tua webcam e alcune delle tue foto saranno prese in modo casuale durante il quiz.</strong>';
$string['proctoringlabel'] = 'Sono d\'accordo con il processo di convalida.';
$string['proctoringrequired'] = 'Convalida dell\'identità con la webcam';
$string['proctoringrequired_help'] = 'Se abiliti questa opzione, gli studenti non saranno in grado di avviare un tentativo fino a quando non avranno selezionato una casella di controllo a conferma di essere a conoscenza della politica sulla webcam.';
$string['proctoringrequiredoption'] = 'deve essere riconosciuto prima di iniziare un tentativo';
$string['proctoringstatement'] = 'Questo esame richiede un processo di convalida della webcam. Devi consentire la webcam e durante il quiz verranno scattate alcune immagini casuali <br /> (Consenti al browser web di accedere alla videocamera).';
$string['quizaccess_proctoring'] = 'Quizaccess Proctoring';
$string['setting:camshotdelay'] = 'Il ritardo tra le riprese in cam';
$string['setting:camshotdelay_desc'] = 'Il valore inserito sarà il ritardo in secondi tra ogni camshot';
$string['setting:camshotwidth'] = 'La larghezza dell\'immagine camshot';
$string['setting:camshotwidth_desc'] = 'Il valore inserito sarà la larghezza del camshot. L\'immagine verrà ridimensionata a quello';
$string['setting:proctoringreconfigureproctoring'] = 'Auto-configura Proctoring';
$string['setting:proctoringreconfigureproctoring_desc'] = 'Se abilitato, gli utenti che accedono al quiz scattano foto dalla webcam';
$string['status'] = 'Stato di convalida';
$string['timemodified'] = 'Ultima Modifica';
$string['webcampicture'] = 'Immagini acquisite';
$string['youmustagree'] = 'Devi accettare di convalidare la tua identità prima di continuare.';
