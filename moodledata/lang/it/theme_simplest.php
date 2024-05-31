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
 * Strings for component 'theme_simplest', language 'it', version '4.1'.
 *
 * @package     theme_simplest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundimage'] = 'Immagine di sfondo';
$string['backgroundimage_desc'] = 'L\'immagine da visualizzare come sfondo del sito. L\'immagine di sfondo che carichi qui sovrascriverà l\'immagine di sfondo nei file preimpostati del tema.';
$string['brandcolor'] = 'Colore del marchio';
$string['brandcolor_desc'] = 'Il colore d\'accento.';
$string['change_style'] = 'Cambia lo stile del tema';
$string['choosereadme'] = 'Il tema Simplest è un tema figlio del Classic.';
$string['configtitle'] = 'Più semplice';
$string['disableinspirationalquotes'] = 'Disabilita il blocco delle virgolette';
$string['disableinspirationalquotesdesc'] = 'Selezionando questa casella si disabiliterà il blocco delle virgolette';
$string['enddate'] = 'Data di fine';
$string['enddate_desc'] = 'Data in cui lo stile verrà disabilitato.';
$string['errordate'] = 'Data sbagliata. Devi inserire la data secondo il formato AAAA-MM-GG es. 2022-03-17.';
$string['errormonth'] = 'Numero di giorni sbagliato. Questo mese dell\'anno {$a->year} ha solo {$a->days} giorni.';
$string['generalsettings'] = 'Impostazioni generali';
$string['inspirationalquotes'] = 'Citazioni ispiratrici';
$string['inspirationalquotesdef'] = 'un computer meriterebbe di essere definito intelligente se potesse ingannare un essere umano facendogli credere di essere un essere umano|it|Alan Turing
Una riluttanza ad ammettere la possibilità che l’umanità possa avere dei rivali
potere intellettuale. Ciò avviene tanto tra gli intellettuali quanto tra gli intellettuali
altri: hanno più da perdere.|it|Alan Turing"
Il ragionamento matematico può essere considerato piuttosto schematicamente come l\'esercizio di una combinazione di due capacità, che possiamo chiamare intuizione e ingegno|it|Alan Turing
Giovanotto, in matematica non si capiscono le cose. Ci si abitua e basta|it|John von neumann
L\'idea alla base dei computer digitali può essere spiegata dicendo che queste macchine sono destinate a eseguire qualsiasi operazione che potrebbe essere eseguita da un computer umano.|it|Alan Turing
Non ho tanta paura dell\'intelligenza artificiale quanto della stupidità naturale.|en|joel de rosnay
i computer saranno in grado di leggere a livello umano entro il 2029 e inizieranno anche ad avere caratteristiche umane diverse,|it|Raymond Kurzweil
l\'intelligenza artificiale è molto più pericolosa delle armi nucleari.|it|Elon Musk
I computer supereranno gli esseri umani grazie all\'intelligenza artificiale entro i prossimi 100 anni|it|Stephen Hawking
Il successo nella creazione dell\'intelligenza artificiale sarebbe l\'evento più grande della storia umana. Sfortunatamente, potrebbe anche essere l\'ultimo, a meno che non impariamo a evitare i rischi.|it|Stephen Hawking
Immagino un mondo in cui l\'intelligenza artificiale ci farà lavorare in modo più produttivo, vivere più a lungo e avere un\'energia più pulita.|it|Fei - Fei Li';
$string['inspirationalquotesdesc'] = 'Ogni virgoletta deve essere su una nuova riga.<br>
Cerca di ottenere preventivi non troppo lunghi!
<br>Inoltre, puoi aggiungere dopo il segno "<strong>|</strong>" i tag che estendono la citazione in modo che venga visualizzata in una lingua e in un autore della citazione specifici.
<br> Esempio:
<br><div style="border:solid 1px #DEDEDE; background:#f8f9fa;color:#222222;padding:4px;"><pre>
<br>Prima citazione.<strong>|</strong>it<strong></</strong>Joel de Rosnay
<br>Prima citazione in polacco.<strong>|</strong>pl<strong>|</strong>Joel de Rosnay
<br>Seconda citazione, nessun autore.<strong></</strong>it
<br>Citazione per tutte le lingue.<strong>||</strong>Joel de Rosnay</pre></div>
<br> La piattaforma supporta le lingue: <strong> {$a} </strong>';
$string['inspirationalquotesduration'] = 'Durata quiestes';
$string['inspirationalquotesdurationdesc'] = 'Durata virgolette visibili.';
$string['inspirationalquotessettings'] = 'Impostazioni delle citazioni ispiratrici';
$string['limitedbydate'] = 'Abilita stile limitato per data';
$string['limitedbydate_desc'] = 'Abilita lo stile indicato nella data specificata. Trascorso questo tempo, ritorna allo stile predefinito';
$string['madeby'] = 'Realizzato da';
$string['navbardark'] = 'Utilizza una barra di navigazione in stile scuro';
$string['navbardark_desc'] = 'Scambia i colori del testo e dello sfondo per la barra di navigazione nella parte superiore della pagina tra scuro e chiaro.';
$string['othersettings'] = 'Altre impostazioni';
$string['pluginname'] = 'Più semplice';
$string['preset'] = 'Tema preimpostato';
$string['preset:christmas'] = 'Natale';
$string['preset:default'] = 'Predefinito';
$string['preset:easter'] = 'Pasqua';
$string['preset:mourning'] = 'Lutto';
$string['preset:spring'] = 'Primavera';
$string['preset:valentinesday'] = 'San Valentino';
$string['preset_desc'] = 'Scegli un preset per cambiare radicalmente l\'aspetto del tema.';
$string['presettemporary'] = 'Stile temporaneo';
$string['presettemporary_desc'] = 'Selezionare lo stile da impostare nel periodo di tempo specificato.';
$string['privacy:metadata'] = 'Il tema Simplest non memorizza alcun dato personale.';
$string['rawscss'] = 'SCSS grezzo';
$string['rawscss_desc'] = 'Utilizza questo campo per fornire il codice SCSS o CSS che verrà inserito alla fine del foglio di stile.';
$string['rawscsspre'] = 'SCSS iniziale non elaborato';
$string['rawscsspre_desc'] = 'In questo campo puoi fornire il codice SCSS di inizializzazione, verrà iniettato prima di tutto il resto. Nella maggior parte dei casi utilizzerai questa impostazione per definire le variabili.';
$string['redir'] = 'Reindirizzamento al corso';
$string['redir_desc'] = 'Reindirizzamento immediato al corso se l\'utente è iscritto a un solo corso.';
$string['region-side-post'] = 'Destro';
$string['region-side-pre'] = 'Sinistra';
$string['settingsother'] = 'Altre impostazioni:';
$string['settingspresettemporary'] = 'Impostazioni temporanee preimpostate:';
$string['simpleusermenu'] = 'Semplificazione del menu utente';
$string['simpleusermenu_desc'] = 'Nasconde la dashboard e il collegamento al profilo. Aggiunge un collegamento per modificare la password.';
$string['startdate'] = 'Data d\'inizio';
$string['startdate_desc'] = 'Data in cui lo stile sarà abilitato.';
