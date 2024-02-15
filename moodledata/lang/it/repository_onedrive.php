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
 * Strings for component 'repository_onedrive', language 'it', version '4.1'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Accesso';
$string['both'] = 'Interni ed esterni';
$string['cachedef_folder'] = 'ID dei file OneDrive dell\'account di sistema';
$string['configplugin'] = 'Configurazione plugin OneDrive';
$string['confirmimportskydrive'] = 'Sei sicuro di importare tutti i file dal repository Microsoft SkyDrive al repository Microsoft OneDrive? Il repository Microsoft OneDrive deve essere configurato e funzionante affinché i file importati continuino a funzionare come prima. Attenzione: l\'azione non può essere annullata.';
$string['defaultreturntype'] = 'Tipo restituito di default';
$string['external'] = 'Esterni (solo i collegamenti memorizzati in Moodle)';
$string['fileoptions'] = 'È possibile configurare il tipo ed il default dei file restituiti. Da notare che saranno a aggiornati i collegamenti a file esterni in modo che il proprietario diventi l\'account di sistema Moodle.';
$string['importskydrivefiles'] = 'Importa file dal repository Microsoft SkyDrive';
$string['internal'] = 'Interno (file memorizzati in Moodle)';
$string['issuer'] = 'Servizio Oauth 2';
$string['issuer_help'] = 'Selezionare il servizio OAuth 2 configurato per parlare con l\'API di OneDrive. Se il servizio non esiste ancora, è necessario crearlo.';
$string['mysitenotfound'] = 'Non ti sei mai autenticato su OneDrive. Devi autenticarti almeno una volta prima di utilizzarlo con Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Collegamento alla configurazione dei servizi OAuth 2">Configurazione servizi OAuth 2</a>';
$string['onedrive:view'] = 'Visualizzare repository OneDrive';
$string['owner'] = 'Proprietario: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = '';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Query di ricerca testo per l\'utente del repository Microsoft OneDrive.';
$string['removetempaccesstask'] = 'Rimozione accesso temporaneo in scrittura ai link sotto controllo';
$string['searchfor'] = 'Cerca {$a}';
$string['servicenotenabled'] = 'Accesso non configurato.';
$string['skydrivefilesimported'] = 'Tutti i file sono stati importati dal repository SkyDrive';
$string['skydrivefilesnotimported'] = 'Non tutti i file sono stati importati dal repository SkyDrive';
$string['supportedreturntypes'] = 'File supportati';
