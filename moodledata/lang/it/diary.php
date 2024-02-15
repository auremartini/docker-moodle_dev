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
 * Strings for component 'diary', language 'it', version '4.1'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Accesso negato';
$string['addtofeedback'] = 'Aggiungi al feedback';
$string['alias'] = 'Parola chiave';
$string['aliases'] = 'Parole chiave';
$string['aliases_help'] = 'Ogni annotazione del diario può essere associata ad una lista di keywords (o alias).

Inserisci ogni parola chiave su una nuova riga (non separata da virgole).';
$string['alwaysopen'] = 'Sempre aperto';
$string['alwaysshowdescription'] = 'Visualizza sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disabilitato, la descrizione del diario sarà visibile agli studenti solo alla data "Open time".';
$string['and'] = 'e';
$string['attachment'] = 'Allegato';
$string['attachment_help'] = 'È possibile allegare a un\'annotazione del diario uno o più file falcoltativi.';
$string['autorating'] = 'Valutazione automatica';
$string['autorating_descr'] = 'Se abilitata, la valutazione di un\'annotazione verrà calcolata automaticamente in base alle impostazioni dei conteggi Min/Max.';
$string['autorating_help'] = 'Questa impostazione, insieme ai conteggi Min/Max, definisce le impostazioni predefinite per l\'autovalutazione in tutti i nuovi diari.';
$string['autorating_title'] = 'Abilita la valutazione automatica';
$string['autoratingbelowmaxitemdetails'] = 'La valutazione automatica richiede {$a->one} o più {$a->two} con una possibile penalità del {$a->three}% per ogni uno mancante.<br>Hai {$a->four}. Devi trovare {$a->five}. La possibile penalità è di {$a->six} punti.';
$string['autoratingitempenaltymath'] = 'Il calcolo della penalità per la valutazione automatica dell\'oggetto è  (max({$a->one} - {$a->two}, 0)) * {$a->three} =  {$a->four}.<br> Note: il max previene i numeri negativi causati dall\'avere più del necessario.';
$string['autoratingitempercentset'] = 'Impostazione in percentuale della valutazione automatica: {$a}%';
$string['autoratingovermaxitemdetails'] = 'Il limite massimo per la valutazione automatica è di {$a->one} {$a->two}  con una possibile penalità di {$a->three}% per ogni extra.<br>Hai {$a->four}, che è  {$a->five} di troppo. La possibile penalità è di {$a->six} punti.';
$string['availabilityhdr'] = 'Disponibilità';
$string['avgsylperword'] = 'Sillabe medie per parola {$a}';
$string['avgwordlenchar'] = 'Lunghezza media delle parole {$a} caratteri';
$string['avgwordpara'] = 'Parole medie per paragrafo {$a}';
$string['blankentry'] = 'Annotazione vuota';
$string['calendarend'] = '{$a} chiude';
$string['calendarstart'] = '{$a} apre';
$string['cancel'] = 'Annulla trasferimento';
$string['chars'] = 'Caratteri';
$string['charspersentence'] = 'Caratteri per frase';
$string['clearfeedback'] = 'Cancella feedback';
$string['commonerrorpercentset'] = 'Percentuale di errori comuni {$a}%';
$string['commonerrors'] = 'Errori comuni';
$string['commonerrors_help'] = 'Gli errori comuni sono definiti nel "Glossario degli errori" associato a questa domanda.';
$string['configdateformat'] = 'Questo definisce come le date vengono mostrate nei rapporti del diario. Il valore predefinito, "M d, Y G:i" è il mese, il giorno, l\'anno e l\'ora in formato 24 ore. Fare riferimento a Date nel manuale PHP per ulteriori esempi e costanti di data predefinite.';
$string['created'] = 'Creato {$a->one} giorni e {$a->two} ore fa.';
$string['crontask'] = 'Elaborazione in background del modulo Diario';
$string['csvexport'] = 'Esporta in .csv';
$string['currententry'] = 'Annotazioni attuali del diario:';
$string['currpotrating'] = 'La tua attuale valutazione potenziale è: {$a->one} punti, o {$a->two}%.';
$string['dateformat'] = 'Formato di default della data';
$string['daysavailable'] = 'Giorni di disponibilità';
$string['daysavailable_help'] = 'Se si utilizza il formato settimanale, è possibile impostare il numero di giorni di apertura del diario.';
$string['deadline'] = 'Giorni di apertura';
$string['details'] = 'Dettagli:';
$string['detectcommonerror'] = 'Rilevati almeno {$a->one}, {$a->two} Sono: {$a->three}
<br>Se consentito, dovresti correggere e inviare nuovamente.';
$string['diary:addentries'] = 'Aggiungi annotazioni';
$string['diary:addinstance'] = 'Aggiungi istanze del diario';
$string['diary:manageentries'] = 'Gestisci le annotazioni';
$string['diary:rate'] = 'Vota le annotazioni';
$string['diaryclosetime'] = 'Orario di chiusura';
$string['diaryclosetime_help'] = 'Se abilitato, puoi impostare una data in cui il diario deve essere chiuso e non più aperto per l\'uso.';
$string['diarydescription'] = 'Descrizione del diario';
$string['diaryentrydate'] = 'Imposta la data per questa annotazione';
$string['diaryid'] = 'diaryid per trasferirlo su';
$string['diarymail'] = 'Gentile {$a->user},
{$a->teacher} ha pubblicato alcuni feedback sull\'annotazione del tuo diario per \'{$a->diary}\'.

Puoi vederlo in allegato alla voce del tuo diario:

    {$a->url}';
$string['diarymailhtml'] = 'Gentile {$a->user},
{$a->teacher}  ha pubblicato alcuni feedback sull\'annotazione del tuo diario per \'<i>{$a->diary}</i>\'.<br /><br />
Puoi vederlo aggiunto alla tua <a href="{$a->url}">annotazione del diario</a>.';
$string['diaryname'] = 'Nome del diario';
$string['diaryopentime'] = 'Ora di apertura';
$string['diaryopentime_help'] = 'Se abilitato, puoi impostare una data per l\'apertura all\'uso del diario .';
$string['editall'] = 'Modifica tutte le annotazioni';
$string['editall_help'] = 'Se abilitato, gli utenti possono modificare qualsiasi annotazione.';
$string['editdates'] = 'Modifica le date di ingresso';
$string['editdates_help'] = 'Se abilitato, gli utenti possono modificare la data di qualsiasi annotazione.';
$string['editingended'] = 'Il periodo di modifica è terminato';
$string['editingends'] = 'Il periodo di modifica termina';
$string['editthisentry'] = 'Modifica questa annotazione';
$string['edittopoflist'] = 'Modifica in cima alla lista';
$string['enableautorating'] = 'Abilita valutazione automatica';
$string['enableautorating_help'] = 'Abilita o disabilita le valutazioni automatiche';
$string['enablestats'] = 'Abilita le statistiche';
$string['enablestats_descr'] = 'Se abilitato, verranno mostrate le statistiche per ogni annotazione.';
$string['enablestats_help'] = 'Abilita o disabilita la visualizzazione delle statistiche per ogni annotazione.';
$string['enablestats_title'] = 'Abilita le statistiche';
$string['entries'] = 'Annotazioni';
$string['entry'] = 'Annotazione';
$string['entrybgc'] = 'Colore di sfondo per l\'inserimento nel diario/feedback';
$string['entrybgc_colour'] = '#93FC84';
$string['entrybgc_descr'] = 'Questo imposta il colore di sfondo di un\'annotazione/feedback del diario.';
$string['entrybgc_help'] = 'Questo imposta il colore di sfondo generale di ogni annotazione del diario e feedback.';
$string['entrybgc_title'] = 'Colore di sfondo per le annotazioni/feedback';
$string['entrycomment'] = 'Inserisci un commento';
$string['entrytextbgc'] = 'Colore di sfondo del testo del diario';
$string['entrytextbgc_colour'] = '#EEFC84';
$string['entrytextbgc_descr'] = 'Questo imposta il colore di sfondo del testo in un\'annotazione';
$string['entrytextbgc_help'] = 'Questo imposta il colore di sfondo del testo in un\'annotazione.';
$string['entrytextbgc_title'] = 'Colore di sfondo del testo del diario';
$string['errorbehavior'] = 'Errore di corrispondenza del comportamento';
$string['errorbehavior_help'] = 'Queste impostazioni perfezionano il comportamento di corrispondenza per le voci nel Glossario degli errori comuni.';
$string['errorcmid'] = 'Glossario degli errori';
$string['errorcmid_help'] = 'Scegli il Glossario che contiene un elenco di errori comuni. Ogni volta che viene rilevato uno degli errori nella risposta del saggio, la penalità specificata verrà sottratta dalla valutazione dello studente per questo articolo.';
$string['errorpercent'] = 'Penalità per errore';
$string['errorpercent_help'] = 'Seleziona la percentuale della valutazione totale che deve essere sottratta per ogni errore che si trova nella risposta.';
$string['eventdiarycreated'] = 'Creazione diario';
$string['eventdiarydeleted'] = 'Eliminazione diario';
$string['eventdiaryviewed'] = 'Visualizzazione diari';
$string['eventdownloadentriess'] = 'Scaricamento annotazioni';
$string['evententriesviewed'] = 'Visualizzazione annotazioni';
$string['evententrycreated'] = 'Creazione annotazione';
$string['evententryupdated'] = 'Aggiornamento annotazione';
$string['eventfeedbackupdated'] = 'Aggiornamento feedback';
$string['eventinvalidentryattempt'] = 'Tentativo non valido di inserimento nel diario';
$string['eventxfrentries'] = 'Trasferimento da Journal a Diario';
$string['exportfilename'] = 'entries.csv';
$string['exportfilenamep1'] = 'All_Site';
$string['exportfilenamep2'] = '_Diary_Entries_Exported_On_';
$string['feedbackupdated'] = 'Feedback aggiornato per {$a} voci';
$string['files'] = 'File';
$string['firstentry'] = 'Prima annotazione:';
$string['fkgrade'] = 'FK Livello';
$string['fkgrade_help'] = 'Il livello di classe Flesch Kincaid indica il numero di anni di istruzione generalmente richiesti per comprendere questo testo. Cerca di puntare a un livello inferiore a 10.';
$string['fogindex'] = 'Fog Index';
$string['fogindex_help'] = 'Il Gunning fog index è una misura di leggibilità. Si calcola utilizzando la seguente formula.

 ((words per sentence) + (long words per sentence)) x 0.4

Cerca di puntare a un livello inferiore a 10. Per maggiori informazioni vedi:<https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['format'] = 'Formato';
$string['freadingease'] = 'Facilità di lettura di Flesch';
$string['freadingease_help'] = 'Facilità di lettura Flesch: i punteggi più alti indicano che il tuo testo è più facile da leggere mentre i punteggi più bassi indicano che il tuo testo è più difficile da leggere. Cerca di puntare a una facilità di lettura superiore a 60.';
$string['generalerror'] = 'C\'e \'stato un errore.';
$string['generalerrorinsert'] = 'Impossibile inserire una nuova annotazione nel diario.';
$string['generalerrorupdate'] = 'Impossibile aggiornare il tuo diario.';
$string['gradeingradebook'] = 'Voto attuale nel registro dei voti';
$string['highestgradeentry'] = 'Annotazioni più votate:';
$string['incorrectcourseid'] = 'L\'ID del corso non è corretto';
$string['incorrectmodule'] = 'L\'ID del modulo del corso non era corretto';
$string['invalidaccess'] = 'Accesso non valido';
$string['invalidaccessexp'] = 'Non hai l\'autorizzazione per visualizzare la pagina a cui hai tentato di accedere! Il tentativo è stato registrato!';
$string['invalidtimechange'] = 'È stato rilevato un tentativo non valido di modificare l\'ora di creazione di questa voce.';
$string['invalidtimechangenewtime'] = 'L\'ora modificata è stata: {$a->one}.';
$string['invalidtimechangeoriginal'] = 'L\'ora originale era:  {$a->one}.';
$string['invalidtimeresettime'] = 'L\'ora è stata reimpostata sull\'ora originale di: {$a->one}.';
$string['journalid'] = 'journalid da cui trasferire';
$string['journalmissing'] = 'Al momento, non ci sono attività Journal in questo corso.';
$string['journaltodiaryxfrdid'] = '<br>Questo è un elenco di ogni attività del diario in questo corso.<br><b> ID</b> | corso | Nome del diario<br>';
$string['journaltodiaryxfrjid'] = 'Questo è un elenco di ogni attività del Journal in questo corso.<br><b> ID</b> | corso | Nome del giornale<br>';
$string['lastnameasc'] = 'Cognome crescente:';
$string['lastnamedesc'] = 'Cognome decrescente:';
$string['latestmodifiedentry'] = 'Voci modificate più di recente:';
$string['lexicaldensity'] = 'Densità lessicale';
$string['lexicaldensity_help'] = 'La densità lessicale è una percentuale calcolata utilizzando la seguente formula.

 100 x (numero di parole univoche) / (numero totale di parole)

Pertanto, un saggio in cui vengono ripetute molte parole ha una bassa densità lessicale, mentre un saggio con molte parole uniche ha un\'alta densità lessicale.';
$string['longwords'] = 'Parole lunghe uniche';
$string['longwords_help'] = 'Le parole lunghe sono parole che hanno tre o più sillabe. Si noti che l\'algoritmo per determinare il numero di sillabe fornisce solo risultati approssimativi.';
$string['longwordspersentence'] = 'Parole lunghe per frase';
$string['lowestgradeentry'] = 'Annotazioni con il punteggio più basso:';
$string['mailed'] = 'Spedito';
$string['mailsubject'] = 'Feedback sul diario';
$string['max'] = 'max';
$string['maxcharacterlimit'] = 'Numero massimo di caratteri';
$string['maxcharacterlimit_desc'] = 'Nota: questa voce può utilizzare un <strong>massimo di {$a} caratteri.</strong>';
$string['maxcharacterlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare meno caratteri rispetto al numero massimo elencato.';
$string['maxparagraphlimit'] = 'Numero massimo dei paragrafi';
$string['maxparagraphlimit_desc'] = 'Nota: questa voce può utilizzare un <strong>massimo di {$a} paragrafi.</strong>';
$string['maxparagraphlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare un numero di paragrafi inferiore al numero massimo indicato.';
$string['maxpossrating'] = 'La valutazione massima possibile per questa voce è di {$a} punti.';
$string['maxsentencelimit'] = 'Numero massimo delle frasi';
$string['maxsentencelimit_desc'] = 'Nota: questa voce può utilizzare un <strong>massimo di {$a} frasi.</strong>';
$string['maxsentencelimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare un numero di frasi inferiore al numero massimo indicato.';
$string['maxwordlimit'] = 'Numero massimo di parole';
$string['maxwordlimit_desc'] = 'Nota: questa voce può utilizzare un <strong>massimo di {$a} parole.</strong>';
$string['maxwordlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare un numero di parole inferiore al numero massimo elencato.';
$string['mediumwords'] = 'Parole medie uniche';
$string['mediumwords_help'] = 'Le parole medie sono parole che hanno due sillabe. Si noti che l\'algoritmo per determinare il numero di sillabe fornisce solo risultati approssimativi.';
$string['min'] = 'min';
$string['mincharacterlimit'] = 'Numero minimo di caratteri';
$string['mincharacterlimit_desc'] = 'Nota: questa voce deve utilizzare un <strong>minimo di {$a} caratteri.</strong>';
$string['mincharacterlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare più caratteri del numero minimo indicato.';
$string['minmaxcharpercent'] = 'Penalità caratteri per errore di conteggio Min/Max';
$string['minmaxcharpercent_help'] = 'Seleziona la percentuale della valutazione totale che deve essere sottratta per ogni errore di conteggio dei caratteri Min/Max.';
$string['minmaxhdr'] = 'Min/Max conteggi';
$string['minmaxhdr_help'] = 'Queste impostazioni definiscono le impostazioni predefinite per il conteggio minimo e massimo di caratteri e parole in tutti i nuovi diari.';
$string['minmaxparapercent'] = 'Penalità di paragrafo per errore di conteggio Min/Max';
$string['minmaxparapercent_help'] = 'Selezionare la percentuale della valutazione totale che deve essere sottratta per ogni errore di conteggio dei paragrafi Min/Max.';
$string['minmaxpercent'] = '';
$string['minmaxpercent_help'] = '';
$string['minmaxsentpercent'] = '';
$string['minmaxsentpercent_help'] = '';
$string['minmaxwordpercent'] = '';
$string['minmaxwordpercent_help'] = 'Selezionare la percentuale della valutazione totale che deve essere sottratta per ogni errore di conteggio delle parole minimo/massimo.';
$string['minparagraphlimit'] = 'Numero minimo di paragrafi';
$string['minparagraphlimit_desc'] = 'Nota: questa voce deve utilizzare un <strong>minimo di {$a} paragrafi.</strong>';
$string['minparagraphlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare più paragrafi del numero minimo indicato.';
$string['minsentencelimit'] = 'Numero minimo di frasi';
$string['minsentencelimit_desc'] = 'Nota: questa voce deve utilizzare un <strong>minimo di {$a} frasi.</strong>';
$string['minsentencelimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare più frasi del numero minimo indicato.';
$string['minwordlimit'] = 'Numero minimo di parole';
$string['minwordlimit_desc'] = 'Nota: questa voce deve utilizzare un <strong>minimo di {$a} parole.</strong>';
$string['minwordlimit_help'] = 'Se viene inserito un numero, l\'utente deve utilizzare più parole del numero minimo indicato.';
$string['missing'] = 'Mancante';
$string['modulename'] = 'Diario';
$string['modulename_help'] = 'L\'attività del diario consente agli insegnanti di ottenere il feedback degli studenti
 in un periodo di tempo.';
$string['modulenameplural'] = 'Diari';
$string['needsgrading'] = 'Questa voce non è stata ancora valutata o valutata.';
$string['needsregrade'] = 'Questa voce è cambiata da quando è stato assegnato un feedback o una valutazione.';
$string['newdiaryentries'] = 'Nuove annotazioni di diario';
$string['nextentry'] = 'Prossima annotazione';
$string['nodeadline'] = 'Sempre aperto';
$string['noentriesmanagers'] = 'Non ci sono docenti';
$string['noentry'] = 'Nessuna annotazione';
$string['noratinggiven'] = 'Nessuna valutazione data';
$string['notextdetected'] = '<b>Nessun testo rilevato!</b>';
$string['notopenuntil'] = 'Questo diario non sarà aperto fino a';
$string['notstarted'] = 'Non hai ancora iniziato questo diario';
$string['numwordscln'] = '';
$string['numwordsnew'] = 'Nuovo calcolo: {$a->one} parole di testo grezzo che utilizzano {$a->two}  caratteri, in {$a->three} frasi, in {$a->four} paragrafi.';
$string['numwordsraw'] = '{$a->one} parole di testo grezzo che utilizzano  {$a->two} caratteri, inclusi {$a->three} spazi.';
$string['numwordsstd'] = '{$a->one} usando parole standardizzate {$a->two} caratteri, inclusi {$a->three} spazi.';
$string['outof'] = 'su {$a} annotazioni.';
$string['overallrating'] = 'Valutazione complessiva';
$string['pagesize'] = 'Annotazioni per pagina';
$string['paragraphs'] = 'Paragrafi';
$string['percentofentryrating'] = '{$a}% della valutazione dell\'ingresso.';
$string['phrasecasesensitiveno'] = 'La corrispondenza non fa distinzione tra maiuscole e minuscole.';
$string['phrasecasesensitiveyes'] = 'La corrispondenza fa distinzione tra maiuscole e minuscole.';
$string['phrasefullmatchno'] = 'Abbina parole intere o parziali.';
$string['phrasefullmatchyes'] = 'Abbina solo parole intere.';
$string['phraseignorebreaksno'] = 'Riconosci le interruzioni di riga.';
$string['phraseignorebreaksyes'] = 'Ignora le interruzioni di riga.';
$string['pluginadministration'] = 'Amministrazione del modulo Diario';
$string['pluginname'] = 'Diario';
$string['popoverhelp'] = 'clicca per informazioni';
$string['potautoratingerrpen'] = 'Potenziale penalità per errore di Autorating: {$a->one}% o {$a->two} punti fuori.';
$string['potcommerrpen'] = 'Potenziale penalità per errore comune: {$a->one} * {$a->two} = {$a->three}% o {$a->four} punti fuori.';
$string['present'] = 'Regalo';
$string['previousentry'] = 'Annotazione precedente';
$string['rate'] = 'Valutazione';
$string['rating'] = 'Valutazione per questa annotazione';
$string['reload'] = 'Ricarica e mostra dall\'annotazione di diario corrente a quella più vecchia';
$string['removeentries'] = 'Rimuovi tutte le annotazioni';
$string['removemessages'] = 'Rimuovi tutte le annotazioni del diario';
$string['reportsingle'] = 'Ottieni tutte le annotazioni del diario per questo utente.';
$string['reportsingleallentries'] = 'Tutte le annotazioni del diario per questo utente.';
$string['returnto'] = 'Ritorna a {$a}';
$string['returntoreport'] = 'Torna alla pagina del report per - {$a}';
$string['saveallfeedback'] = 'Salva tutti i miei feedback';
$string['savesettings'] = 'Salva le impostazioni';
$string['search'] = 'Cerca';
$string['search:activity'] = 'Diario - informazioni sull\'attività';
$string['search:entry'] = 'Diario - annotazioni';
$string['search:entrycomment'] = 'Diario - commento sull\'annotazioni';
$string['selectentry'] = 'Selezionare la voce per la marcatura';
$string['sentences'] = 'Frasi';
$string['sentencesperparagraph'] = 'Frasi per paragrafo';
$string['shortwords'] = 'Parole brevi uniche';
$string['shortwords_help'] = 'Le parole brevi sono parole che hanno una sola sillaba. Si noti che l\'algoritmo per determinare il numero di sillabe fornisce solo risultati approssimativi.';
$string['shownone'] = 'Mostra nessuno';
$string['showoverview'] = 'Mostra la panoramica dei diari sul mio moodle';
$string['showrecentactivity'] = 'Mostra attività recente';
$string['showstudentsonly'] = 'Mostra solo gli studenti';
$string['showteacherandstudents'] = 'Mostra docenti e studenti';
$string['showteachersonly'] = 'Mostra solo i docenti';
$string['showtextstats'] = 'Mostra le statistiche di testo?';
$string['showtextstats_help'] = 'Se questa opzione è abilitata, verranno mostrate le statistiche sul testo.';
$string['showtostudentsonly'] = 'Sì, mostra solo agli studenti';
$string['showtoteachersandstudents'] = 'Sì, mostra a docenti e studenti';
$string['showtoteachersonly'] = 'Sì, mostra solo ai docenti';
$string['sortcurrententry'] = 'Dalla annotazione corrente del diario alla prima.';
$string['sortfirstentry'] = 'Dalla prima annotazione del diario all\'ultima.';
$string['sorthighestentry'] = 'Dall\'annotazione del diario con il punteggio più alto a quella con il punteggio più basso.';
$string['sortlastentry'] = 'Dall\'ultima annotazione modificata del diario a quella più vecchia.';
$string['sortlowestentry'] = 'Dall\'annotazione del diario con il punteggio più basso a quello più alto.';
$string['sortoptions'] = 'Opzioni di ordinamento:';
$string['sortorder'] = 'L\'ordinamento è:';
$string['startnewentry'] = 'Inizia una nuova voce';
$string['startoredit'] = 'Inizia una nuova annotazione o modifica quella di oggi';
$string['statshdr'] = 'Statistiche testuali';
$string['statshdr_help'] = 'Queste impostazioni definiscono le impostazioni predefinite per le statistiche in tutti i nuovi diari.';
$string['teacher'] = 'Docente';
$string['text'] = 'Testo';
$string['textstatitems'] = 'Elementi statistici';
$string['timecreated'] = 'Orario creato';
$string['timemarked'] = 'Orario segnato';
$string['timemodified'] = 'Orario modificato';
$string['toolbar'] = 'Barra degli strumenti:';
$string['totalsyllables'] = 'Sillabe totali {$a}';
$string['transfer'] = 'Trasferisci le annotazioni';
$string['transferwemail'] = 'Trasferisci e invia una mail. <b>Predefinito: non inviare e-mail</b>';
$string['transferwfb'] = 'Trasferisci e includi feedback in merito al trasferimento. <b>Predefinito: non includere feedback</b>';
$string['transferwfbmsg'] = '';
$string['transferwoe'] = 'Trasferimento senza e-mail';
$string['uniquewords'] = 'Parole uniche';
$string['userid'] = 'id utente';
$string['usertoolbar'] = 'Barra degli strumenti utente:';
$string['viewalldiaries'] = 'Visualizza tutti i diari dei corsi';
$string['viewallentries'] = 'Visualizza {$a} annotazioni di diario';
$string['viewentries'] = 'Visualizza annotazioni';
$string['words'] = 'Parole';
$string['wordspersentence'] = 'Parole per frase';
$string['xfrresults'] = 'Sono state elaborate {$a->one} voci e {$a->two} trasferite.';
