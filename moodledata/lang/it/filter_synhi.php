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
 * Strings for component 'filter_synhi', language 'it', version '4.1'.
 *
 * @package     filter_synhi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['codeexample'] = 'Codice';
$string['codeexampledesc'] = 'Codice da utilizzare nell\'esempio';
$string['engine'] = 'Motore';
$string['enginedesc'] = 'Il motore da utilizzare .  \'<a href="https://github.com/EnlighterJS/EnlighterJS" target="_blank">EnlighterJS</a> - Mozilla Public License 2.0 (MPL-2.0)\' o \'<a href="https://github.com/syntaxhighlighter/syntaxhighlighter" target="_blank">SyntaxHighlighter</a> - Licenza MIT\'.';
$string['enlighterinformation'] = 'Inserire il codice all\'interno del tag \'pre\' o del tag \'code\'. L\'enlighter proverà a identificare il linguaggio, ma è anche possibile specificarlo direttamente usando l\'attributo \'data-enlighter-language\' del tag, inserendo il linguaggio come valore (es. \'data-enlighter-language="java"\').
Di seguito sono elencati i linguaggi supportati (tra parentesi il testo identificativo del linguaggio):<br><ul><li>Assembly (assembly, asm)</li><li>AVR Assembly (avrassembly, avrasm)</li><li>C/C++ (c,cpp, c++)</li><li>C# (csharp)</li><li>CSS (css)</li><li>Cython (cython)</li><li>CordPro (cordpro)</li><li>diff (diff)</li><li>Dockerfile (docker, dockerfile)</li><li>Generic (generic, standard) - default highlighting scheme</li><li>Groovy (groovy)</li><li>Go (go, golang)</li><li>HTML (html)</li><li>Ini (ini, conf)</li><li>Java (java)</li><li>Javascript (js, javascript, jquery, mootools, ext.js)</li><li>JSON (json)</li><li>Kotlin (kotlin)</li><li>LESS (less)</li><li>LUA (lua), Markdown (gfm, md, markdown)</li><li>Matlab/Octave (octave, matlab)</li><li>NSIS (nsis)</li><li>PHP (php)</li><li>Powerhsell (powershell)</li><li>Prolog (prolog)</li><li>Python (py, python)</li><li>PureBasic (purebasic, pb)</li><li>RAW (raw) - raw code without highlighting with EnlighterJS container styles!</li><li>Ruby (ruby)</li><li>Rust (rust)</li><li>SCSS (scss, sass)</li><li>Shellscript (shell, bash)</li><li>SQL (sql)</li><li>Squirrel (squirrel)</li><li>Swift (swift)</li><li>Typescript (typescript)</li><li>VHDL (vhdl)</li><li>VisualBasic (visualbasic, vb)</li><li>Verilog (verilog)</li><li>XML (xml)</li><li>YAML (yaml)</li></ul>';
$string['enlighterjs'] = 'EnlighterJS';
$string['enlighterjsstyle'] = 'Stile EnlighterJS';
$string['filtername'] = 'SynHi';
$string['generalinformation'] = 'I simboli \'<\' e \'>\' possono avere problemi con il tag \'pre\', quindi vanno cambiati rispettivamente nel codice con \'<i>(amphersand)</i>lt\' e \'<i>(amphersand)</i>gt;\'. Nota: per <i>(amphersand)</i> si intende \'&\'.';
$string['informationheading'] = 'Informazioni';
$string['informationheadingdesc'] = 'Informazioni sul filtro';
$string['privacy:nop'] = 'Il filtro SynHi memorizza le impostazioni che riguardano la propria configurazione. Nessuna di queste informazioni riguardano uno specifico utente. Si rimanda alla vostra responsabilità di non inserire dati utente all\'interno dei campi di testo libero. Il salvataggio delle impostazioni è tracciato dal sistema di log di Moodle, che è fuori dal controllo del filtro, quindi verificare le informazioni di privacy del sistema di logging.
Per favore esaminare bene il codice per essere sicuro che questo rispetti le leggi vigenti sulla privacy.';
$string['styledesc'] = 'Scegliere lo stile da utilizzare.';
$string['syntaxhighlighter'] = 'SyntaxHighlighter';
$string['syntaxhighlighterexample'] = 'Esempio';
$string['syntaxhighlighterexampledesc'] = 'dall\'impostazione \'codeexample\'';
$string['syntaxhighlighterinformation'] = 'Per utilizzare SyntaxHighlighter, delimitare il codice col tag \'pre\' e aggiungere class="brush: alias" dove \'alias\' è uno dei valori che seguono (tra parentesi):<br><ul><li>ActionScript3 (as3, actionscript3)</li><li>Bash/shell (bash, shell)</li><li>ColdFusion (cf, coldfusion)</li><li>C# (c-sharp, csharp)</li><li>C++ (cpp, c)</li><li>CSS (css)</li><li>Delphi (delphi, pas, pascal)</li><li>Diff (diff, patch)</li><li>Erlang (erl, erlang)</li><li>Groovy (groovy)</li><li>JavaScript (js, jscript, javascript)</li><li>Java (java)</li><li>JavaFX (jfx, javafx)</li><li>Perl (perl, pl)</li><li>PHP (php)</li><li>Plain Text (plain, text)</li><li>PowerShell (ps, powershell)</li><li>Python (py, python)</li><li>Ruby (rails, ror, ruby)</li><li>Scala (scala)</li><li>SQL (sql)</li><li>Visual Basic (vb, vbnet)</li><li>XML (xml, xhtml, xslt, html, xhtml)</li></ul>';
$string['syntaxhighlighterstyle'] = 'Stile SyntaxHighlighter';
