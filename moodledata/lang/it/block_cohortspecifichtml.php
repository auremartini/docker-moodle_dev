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
 * Strings for component 'block_cohortspecifichtml', language 'it', version '4.1'.
 *
 * @package     block_cohortspecifichtml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Visualizza ai gruppi globali';
$string['cohortselection_help'] = 'Questo blocco sarà visibile solamente ai membri di almeno uno dei gruppi globali selezionati. Questo significa che, ad esempio, se hai selezionato due gruppi globali e un utente è membro di uno dei due, il blocco sarà visibile. È equivalente a un operatore OR.';
$string['cohortspecifichtml:addinstance'] = 'Aggiungere un nuovo blocco Testo (per gruppi globali)';
$string['cohortspecifichtml:myaddinstance'] = 'Aggiungere un nuovo blocco Testo (per gruppi globali) alla Dashboard';
$string['cohortspecifichtml:viewalways'] = 'Visualizzare sempre il blocco';
$string['invertcohortselection'] = 'Inverti la selezione (nascondi il blocco per i gruppi globali selezionati)';
$string['invertcohortselection_help'] = 'Con questa impostazione puoi invertire la tua selezione. Questo significa che il blocco non sarà visualizzato ai membri dei gruppi globali selezionati ma a tutti gli altri.<br/>
Esempi: <ul> <li>Se un utente appartiene ad almeno un gruppo globale di quelli selezionati il blocco non sarà visualizzato, anche se è membro di un gruppo globale non selezionato.</li>
<li>Se non hai selezionato nessun gruppo globale e inverti la selezione, il blocco sarà visibile a <strong>tutti</strong> gli utenti.</li></ul>';
$string['newhtmlcohortblock'] = 'Nuovo Testo (per gruppi globali)';
$string['nocohorts'] = 'Non ci sono gruppi globali definiti. Senza di essi <strong>il blocco non sarà visibile</strong> a nessuno, anche sei hai inserito del contenuto.<br/>
I gruppi globali possono essere gestiti nell\'<a href="{$a->url}">amministrazione del sito</a>.';
$string['notvisibletoall'] = '<br/>Questo blocco è <strong>nascosto</strong> ad <strong>ogni</strong> utente.';
$string['notvisibletocohorts'] = '<br/><strong>Non</strong> visibile ai gruppi globali:';
$string['pluginname'] = 'Testo (per gruppi globali)';
$string['privacy:metadata:block'] = 'Il blocco Testo (per gruppi globali) memorizza tutti i dati all\'interno del sottosistema del blocco.';
$string['resetcohortselection'] = 'Resetta selezione';
$string['resetcohortselection_help'] = 'Se hai abilitato e salvato questa impostazione, la selezione che hai fatto sarà resettata. Questo significa che nessun gruppo globale sarà selezionato.<br/>
Se apri nuovamente la configurazione del blocco dopo aver resettato, questa impostazione non mostrata perché non ci sarà nulla da cancellare.';
$string['unrestricted'] = 'Senza restrizioni';
$string['visibletoall'] = '<br/>Questo blocco è <strong>visibile</strong> a <strong>tutti</strong> gli utenti.';
$string['visibletocohorts'] = '<br/>Visibile <strong>solo</strong> ai gruppi globali:';
