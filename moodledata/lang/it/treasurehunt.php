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
 * Strings for component 'treasurehunt', language 'it', version '4.1'.
 *
 * @package     treasurehunt
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytoend'] = 'Prima devi completare l\'attività selezionata';
$string['activitytoend_help'] = 'L\'attività selezionata deve essere completata prima che venga visualizzato il corrente indizio.
Per far visualizzare le attività del corso nell\'elenco, occorre abilitare il completamento dell\'attività nella configurazione di Moodle, nel corso e nell\'attività stessa.';
$string['activitytoendovercome'] = 'Attività \'<strong>{$a}</strong>\' superata';
$string['activitytoendwarning'] = 'Devi prima completare l\'attività per risolvere';
$string['actnotavailableyet'] = 'L\'attività non è ancora disponibile';
$string['add'] = 'Aggiungi';
$string['addingroad'] = 'Aggiungi percorso';
$string['addingstage'] = 'Aggiungi tappa';
$string['addroad_tour'] = 'Aggiungi uno o più percorsi che gli studenti dovranno seguire';
$string['addsimplequestion'] = 'Aggiungi una domanda semplice';
$string['addsimplequestion_help'] = 'Aggiungi una domanda semplice prima di visualizzare l\'indizio della tappa';
$string['addstage_tour'] = 'Ogni percorso deve avere due o più tappe. Ogni tappa fornisce un indizio per trovare la tappa successiva.';
$string['aerialmap'] = 'Mappa';
$string['aerialview'] = 'Aerea';
$string['allowattemptsfromdate'] = 'Consenti tentativi da';
$string['allowattemptsfromdate_help'] = 'Se abilitato, gli studenti non saranno in grado di giocare prima di questa data.
Se disabilitato, gli studenti potranno iniziare a giocare subito.';
$string['alwaysshowdescription'] = 'Visualizza sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disabilitato, la descrizione della Caccia al tesoro qui sopra diventerà visibile agli studenti alla data "Consenti tentativo da".';
$string['answerwarning'] = 'Prima devi rispondere alla domanda';
$string['areyousure'] = 'Sei sicuro?';
$string['attempt'] = 'Tentativo';
$string['attempthistory'] = 'Cronologia tentativi di {$a}';
$string['attemptsdeleted'] = 'I tentativi della Caccia al tesoro sono stati eliminati';
$string['autolocate_tour'] = 'Visualizzare la <b>propria posizione attuale</b>.<br> (autorizzare l\'uso della "posizione" quando richiesto)';
$string['availability'] = 'Disponibilità';
$string['availableplayerstyles'] = 'Stili disponibili della schermata di gioco.';
$string['back'] = 'Indietro';
$string['backtocourse'] = 'Torna al corso';
$string['baselayers'] = 'Livelli di base';
$string['basemaps'] = 'Mappe di base';
$string['bigbutton_play_tour'] = 'Questo è il tuo migliore amico.<br>Un clic e ti verranno mostrate <b>sfide</b> o preziosi <b>suggerimenti</b>.';
$string['browsemode'] = 'Naviga';
$string['cancel'] = 'Elimina';
$string['changecamera'] = 'Cambia fotocamera';
$string['changetogroupmode'] = 'La modalità di gioco è stata modificata in gioco di gruppo';
$string['changetoindividualmode'] = 'La modalità di gioco è stata modificata in gioco individuale';
$string['changetoplaywithmove'] = 'La modalità di gioco è cambiata in gioco dinamico';
$string['changetoplaywithoutmoving'] = 'La modalità di gioco è stata modificata in gioco statico';
$string['cleartreasurehunt'] = 'Resetta la Caccia al tesoro';
$string['cleartreasurehunt_done'] = 'L\'attività è stata ripristinata. Tutte le attività dei partecipanti sono state eliminate.';
$string['cleartreasurehuntconfirm'] = 'Attenzione a questa azione. Continuando, tutte le attività registrate verranno eliminate. Di solito, questa azione è necessaria solo se è necessario modificare il numero di strade o tappe ma l\'attività è bloccata perché qualcuno ha iniziato a giocare.';
$string['clue'] = 'Indizio';
$string['completionfinish'] = 'Richiede di concludere il percorso.';
$string['completionfinish_help'] = 'Completata quando l\'utente avrà superato tutte le tappe di un percorso.';
$string['configintro'] = 'I valori impostati definiscono i default utilizzati nelle impostazioni quando si crea una nuova caccia al tesoro.';
$string['configmaximumgrade'] = 'Il punteggio predefinito sul quale il punteggio della caccia al tesoro viene calcolato proporzionalmente.';
$string['confirm'] = 'Conferma';
$string['confirmdeletestage'] = 'La tappa è stata rimossa con successo';
$string['continue'] = 'Continua';
$string['correctanswer'] = 'Risposta corretta.';
$string['customlayername'] = 'Titolo del livello';
$string['customlayername_help'] = 'Se si utilizza un livello personalizzato, è necessario un titolo da far visualizzare nelle mappe o dai propri utenti. Se il titolo è vuoto, il livello personalizzato è completamente disabilitato.';
$string['customlayertype'] = 'Tipo di livello';
$string['customlayertype_help'] = 'Il livello può essere l\'unico visibile sullo sfondo o può essere sovrapposto alle mappe di base standard.';
$string['customlayerwms'] = 'Servizio WMS';
$string['customlayerwms_help'] = 'Utilizzare una mappa di livello da un servizio WMS OGC. (Ad esempio, EUNIS Forest Ecosystems WMS può essere configurato da: WMS:  <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['custommapbaselayer'] = 'L\'immagine viene visualizzata come un\'opzione ADDIZIONALE di sfondo della mappa';
$string['custommapimageerror'] = 'Impossibile caricare l\'immagine personalizzata. Controllare le impostazioni dell\'attività.';
$string['custommapimagefile'] = 'Immagine personalizzata della mappa';
$string['custommapimagefile_help'] = 'Caricare un\'immagine con una risoluzione sufficiente e riempire i prossimi 4 campi con le coordinate di proiezione sul terreno';
$string['custommapmaxlat'] = 'Latitudine nord';
$string['custommapmaxlat_help'] = 'Latitudine nord dell\'immagine. Utilizzare "." come decimale. Inferiore a 85 gradi e maggiore di latitudine sud.';
$string['custommapmaxlon'] = 'Longitudine est';
$string['custommapmaxlon_help'] = 'Latitudine est dell\'immagine. Utilizzare "." come decimale.  Minore di 180 gradi e maggiore di latitudine ovest.';
$string['custommapminlat'] = 'Latitudine sud';
$string['custommapminlat_help'] = 'Latitudine sud dell\'immagine. Utilizzare "." come decimale. Maggiore di -85 gradi e inferiore alla latitudine nord.';
$string['custommapminlon'] = 'Longitudine ovest';
$string['custommapminlon_help'] = 'Longitudine ovest dell\'immagine. Utilizzare "." come decimale. Maggiore di -180 gradi e inferiore alla longitudine est.';
$string['custommapnongeographic'] = 'L\'immagine non è geografica';
$string['custommaponlybaselayer'] = 'L\'immagine viene visualizzata come UNICA opzione di background della mappa';
$string['custommapoverlaylayer'] = 'L\'immagine è sovrapposta alla mappa standard';
$string['custommapping'] = 'Mappa personalizzata';
$string['customwmsparams'] = 'Parametri WMS';
$string['customwmsparams_help'] = 'Questi parametri definiscono l\'aspetto della mappa. Il formato segue i seguenti formati: "LAYERS=background,streets;STYLES=blue,default" (Per esempio, il WMS EUNIS Forest Ecosystems può essere configurato con: WMS: <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['cutoffdate'] = 'Data limite';
$string['cutoffdate_help'] = 'Se impostata, la caccia al tesoro non accetterà tentativi successivi a questa data senza proroga.';
$string['cutoffdatefromdatevalidation'] = 'La data limite deve essere successiva alla data di inizio delle consegne.';
$string['defaultplayerstyle'] = 'Stile predefinito della schermata di gioco';
$string['discoveredlocation'] = 'Posizione individuata';
$string['donetutorial'] = 'Fine';
$string['drawmode'] = 'Disegna';
$string['editactivity_help'] = 'E\' possibile trovare un tutorial step-by-step sulla creazione di attività di caccia al tesoro in <a href="http://juacas.github.io/moodle-mod_treasurehunt/create_activity.html"> questa pagina.</a>';
$string['editend_tour'] = 'Divertiti a creare giochi entusiasmanti per gli studenti!';
$string['editingroad'] = 'Modifica percorso';
$string['editingstage'] = 'Modifica tappa';
$string['editingtreasurehunt'] = 'Modifica caccia al tesoro';
$string['edition'] = 'Pannello di edizione';
$string['edition_help'] = 'Per abilitare la creazione della geometria e i pulsanti nel pannello di edizione, è necessario selezionare la tappa che si desidera modificare';
$string['editmode'] = 'Modifica';
$string['editroad'] = 'Modifica percorso';
$string['editstage'] = 'Modifica tappa';
$string['edittreasurehunt'] = 'Cambia percorsi e tappe';
$string['errcorrectanswers'] = 'Devi selezionare una risposta corretta';
$string['errcorrectsetanswerblank'] = 'La risposta corretta è impostata, ma la risposta è vuota';
$string['erremptystage'] = 'Tutte le tappe devono avere almeno una geometria affinché il percorso sia valido';
$string['errnocorrectanswers'] = 'Ci deve essere una sola risposta corretta';
$string['errnumeric'] = 'Inserire un numero decimale valido';
$string['error'] = 'Errore';
$string['errpenalizationexceed'] = 'La penalità non può essere maggiore di 100';
$string['errpenalizationfall'] = 'La penalità non può essere minore di 0';
$string['errsendinganswer'] = 'Il percorso è stato aggiornato durante l\'invio della risposta, riprova.';
$string['errsendinglocation'] = 'Il percorso è stato aggiornato durante l\'invio della localizzazione, riprova.';
$string['errvalidroad'] = 'Ci devono essere almeno due tappe che hanno almeno una geometria affinché il percorso sia valida';
$string['eventattemptsubmitted'] = 'Tentativo inviato';
$string['eventattemptsucceded'] = 'Tappa superata';
$string['eventhuntsucceded'] = 'Caccia al tesoro completata con successo';
$string['eventplayerentered'] = 'Il giocatore ha iniziato';
$string['eventroadcreated'] = 'Percorso creato';
$string['eventroaddeleted'] = 'Percorso eliminato';
$string['eventroadupdated'] = 'Percorso aggiornato';
$string['eventstagecreated'] = 'Tappa creata';
$string['eventstagedeleted'] = 'Tappa eliminata';
$string['eventstageupdated'] = 'Tappa aggiornata';
$string['exit'] = 'Torna al corso';
$string['failedlocation'] = 'Posizione errata';
$string['faillocation'] = 'Non è il posto giusto';
$string['findplace'] = 'Trova un luogo';
$string['gamemode'] = 'Modalità di gioco';
$string['gamemodeinfo'] = 'Modalità gioco: {$a}';
$string['gameupdatetime'] = 'Tempo di aggiornamento del gioco';
$string['gameupdatetime_help'] = 'Intervallo di tempo, in secondi, tra l\'aggiornamento di un utente e un altro.
Maggiore è l\'intervallo, minori saranno le richieste di aggiornamento, ma trascorrerà più tempo per la segnalazione di una eventuale variazione.
Deve essere maggiore di 0 secondi, ma il tempo sarà impostato di default.';
$string['geolocation_needed'] = 'Per giocare a questo gioco è necessaria la tua geolocalizzazione.
<p> Per attivarlo vai sul tuo browser Impostazioni-> Impostazioni sito-> Posizione e rimuovi la disabilitazione per questo sito.
<p> Ricarica questa pagina e rispondi "SÌ" quando il browser ti chiede se desideri condividere la tua posizione.
<p> Per utilizzare il GPS per localizzare questo dispositivo durante la Caccia al tesoro, è necessario accedere al server tramite URL HTTPS sicuri.
In altri casi, è possibile utilizzare solo la modalità "Gioca senza muoverti" e i giocatori devono indicare manualmente ogni fase sulla mappa.
Si prega di contattare l\'amministratore se non è possibile risolvere questo problema.';
$string['geolocation_needed_title'] = 'Per utilizzare questa applicazione è necessaria la geolocalizzazione';
$string['grade_explaination_fromabsolutetime'] = '{$a->rawscore}-{$a->penalization}%: Hai terminato la caccia a {$a->yourtime}. Il miglior tempo è stato {$a->besttime}. Hai una penalità di {$a->penalization}% a causa di {$a->nolocationsfailed} posti sbagliati, e {$a->noanswersfailed} risposte sbagliate.';
$string['grade_explaination_fromposition'] = '{$a->rawscore}-{$a->penalization}%: Hai scoperto {$a->nosuccessfulstages} tappe nella posizione {$a->position}. Hai una penalità di {$a->penalization}% a causa di {$a->nolocationsfailed} posti sbagliati, e {$a->noanswersfailed} risposte sbagliate.';
$string['grade_explaination_fromstages'] = '{$a->rawscore}-{$a->penalization}%: Hai scoperto {$a->nosuccessfulstages} su {$a->nostages} tappe. Hai una penalità di {$a->penalization}% a causa di {$a->nolocationsfailed} posti sbagliati, e {$a->noanswersfailed} risposte sbagliate.';
$string['grade_explaination_fromtime'] = '$a->rawscore}-{$a->penalization}%: Avevi bisogno di {$a->yourtime} per completare la caccia. Il miglior tempo è stato {$a->besttime}. Hai una penalità di {$a->penalization}% a causa di {$a->nolocationsfailed} posti sbagliati, e {$a->noanswersfailed} risposte sbagliate.';
$string['grade_explaination_temporary'] = 'Caccia non finita, è stato ottenuto il 50% del punteggio dalle tappe: {$a->rawscore}-{$a->penalization}%: Hai scoperto {$a->nosuccessfulstages} su {$a->nostages} tappe. Hai una penalità di {$a->penalization}% a causa di {$a->nolocationsfailed} posti sbagliati, e {$a->noanswersfailed} risposte sbagliate.';
$string['gradefromabsolutetime'] = 'Punteggio per la durata della caccia';
$string['gradefromposition'] = 'Punteggio per la posizione';
$string['gradefromstages'] = 'Punteggio per le tappe';
$string['gradefromtime'] = 'Punteggio per il tempo di conclusione della caccia';
$string['grademethod'] = 'Metodo di valutazione';
$string['grademethod_help'] = '<P><B> Voto per le tappe </B> <P>
<UL>
<P> Ogni giocatore (o squadra) ottiene punti proporzionalmente per numero di tappe risolte, 100% quando una strada è completamente risolta e 0% quando nessuna tappa è stata risolta. </UL>

<P><B> Voto per la durata della caccia </B> <P>
<UL>
<P> Il cacciatore che finisce il percorso in meno tempo vince la caccia e ottiene il tempo migliore.
Il tempo viene calcolato dal momento in cui viene sbloccata la fase iniziale del percorso.
Ciò significa che i partecipanti possono giocare in momenti diversi.
Il voto viene calcolato interpolando il tempo di conclusione al 50% del tempo di fine della caccia e 100% il miglior tempo di conclusione. I giocatori che non hanno finito la caccia ricevono un voto inferiore a 50, calcolato solo in base al numero di tappe risolte. </UL>

<P><B> Voto per il tempo di completamento </B> <P>
<UL>
<P> Il cacciatore che finisce per primo è il vincitore della caccia.
Si presume che tutti i cacciatori giochino contemporaneamente.
Il voto viene calcolato interpolando il tempo di conclusione al 50% del tempo di fine della caccia
e 100% il miglior tempo di conclusione. I giocatori che non hanno finito la caccia ricevono un voto inferiore a 50 calcolato solo in base al numero di tappe risolte. </UL>

<P> <B> Voto per la posizione </B><P>
<UL>
<P> Il punteggio viene calcolato interpolando la posizione nella classifica, attribuendo il 100% del punteggio a primo giocatore e il 50% all\'ultimo giocatore.
I giocatori che non hanno terminato la caccia ricevono un voto inferiore al 50% calcolato solo per il numero di tappe risolte. </UL>';
$string['grademethodinfo'] = 'Metodo di valutazione: {$a->type}. Penalità per la localizzazione: {$a->gradepenlocation}%. Penalità per la risposta: {$a->gradepenanswer}%';
$string['gradepenanswer'] = 'Penalità per aver sbagliato una risposta';
$string['gradepenlocation'] = 'Penalità per aver fallito nella localizzazione';
$string['gradepenlocation_help'] = 'La penalizzazione è espressa in % del voto.
Ad esempio, se la penalizzazione è 5.4, un giocatore che ha fatto 3 errori, penalizzerà il suo voto del 16,2%, cioè, riceverà l\'83,8% del voto calcolato dal resto dei criteri.';
$string['gradesdeleted'] = 'Punteggi della caccia al tesoro eliminati';
$string['gradingsummary'] = 'Riepilogo dei voti';
$string['group'] = 'Gruppo';
$string['groupactivityovercome'] = 'Attività terminata con successo da {$a->user} per la tappa {$a->position} in data: {$a->date}';
$string['groupid'] = 'Gruppo assegnato al percorso';
$string['groupid_help'] = 'Gli utenti di questo gruppo vengono assegnati a questo percorso all\'avvio del gioco.
Se c\'è solo un percorso e l\'opzione selezionata è "nessuno", tutti i partecipanti all\'attività giocheranno in questo.';
$string['groupingid'] = 'Raggruppamento assegnato al percorso';
$string['groupingid_help'] = 'I gruppi in questo raggruppamento sono assegnati a questo percorso quando inizia il gioco';
$string['groupinvalidroad'] = '{$a} ha assegnato un percorso non valido';
$string['grouplocationfailed'] = 'Localizzazione sbagliata da {$a->user} sulla tappa {$a->position} nella data: {$a->date}';
$string['grouplocationovercome'] = 'Localizzazione esatta da {$a->user} sulla tappa {$a->position} nella data: {$a->date}';
$string['groupmode'] = 'Gli studenti giocano in gruppo';
$string['groupmode_help'] = 'Se abilitato, gli studenti saranno divisi in gruppi in base alla configurazione dei gruppi nel corso.
Un gioco di gruppo sarà condiviso tra i membri del gruppo e vedranno i cambiamenti nel gioco.';
$string['groupmultipleroads'] = '{$a} ha più di un percorso assegnato.';
$string['groupquestionfailed'] = 'Risposta sbagliata da {$a->user} alla domanda della tappa {$a->position} in data: {$a->date}';
$string['groupquestionovercome'] = 'Risposta corretta di {$a->user} alla domanda della tappa {$a->position} in data: {$a->date}';
$string['groups'] = 'Gruppi';
$string['groupstageovercome'] = 'Tappa {$a->position} superata da {$a->user} in data: {$a->date}';
$string['hello'] = 'Ciao';
$string['history'] = 'Cronologia';
$string['huntcompleted'] = 'Hai già completato questa caccia al tesoro';
$string['incorrectanswer'] = 'Risposta sbagliata.';
$string['info'] = 'Info';
$string['infovalidatelocation'] = 'Convalida la localizzazione di questa tappa';
$string['invalidassignedroad'] = 'La strada assegnata non è stata convalidata';
$string['invalroadid'] = 'La strada non è stata validata';
$string['lastsuccessfulstage_tour'] = 'In questo pannello puoi scoprire quale è stata la tua ultima tappa superata con successo, tua o del tuo gruppo.';
$string['layers'] = 'Layer';
$string['loading'] = 'Caricamento';
$string['lockedaclue'] = 'Devi eseguire l\'attività \'<strong>{$a}</strong>\' per sbloccare questo indizio';
$string['lockedaqclue'] = 'Devi eseguire l\'attività \'<strong>{$a}</strong>\' e rispondere correttamente alla seguente domanda per sbloccare questo indizio';
$string['lockedclue'] = 'Indizio bloccato';
$string['lockedqclue'] = 'Devi rispondere correttamente alla seguente domanda per sbloccare questo indizio';
$string['locktimeediting'] = 'Modifica del tempo di blocco';
$string['locktimeediting_help'] = 'Tempo in secondi per il quale un utente può modificare un\'istanza senza rinnovare il blocco.
Maggiore è il tempo, minori richieste verranno fatte, ma più tempo è bloccato, più sarà bloccata la pagina di modifica una volta che lo studente ha terminato.
Deve essere superiore a 5 secondi, ma il tempo sarà impostato di default.';
$string['map_tour'] = 'In questa mappa puoi gestire tutti i componenti di un divertente gioco geolocalizzato!';
$string['mapplay_tour'] = 'In questa mappa puoi vedere tutti i tentativi di questo gioco geolocalizzato! I passaggi successivi sono contrassegnati con <img src = "pix / success_mark.png" width = "28" /> e tappe fallite con <img src = "pix / failure_mark.png" width = "28" />';
$string['mapplaymobile_tour'] = 'The <b>map</b> shows you all your attempts!<br>Successful ones: <img src="{$a->successurl}" width="28"/><br>Failed ones: <img src="{$a->failureurl}" width="28"/>';
$string['mapview'] = 'Visualizzazione della mappa';
$string['modify'] = 'Modifica';
$string['modulename'] = 'Caccia al tesoro';
$string['modulename_help'] = 'Questo modulo verrà utilizzato per eseguire una geolocalizzazione delle attività.
Caccia al tesoro outdoor, indoor e mappa virtuale con geolocalizzazione e codici QR.
Questo modulo per Moodle consente di organizzare giochi all\'aperto con i tuoi studenti.
Caccia al tesoro è un\'applicazione di gioco basata su browser (non è necessario installare alcuna app) e un editor geografico per codificare le fasi del gioco.
Il gioco può essere configurato con una serie di opzioni che rendono il modulo molto flessibile e utile in molte situazioni: individuale / di squadra,
spostamento / desktop-marcatura, punteggio da tempo, posizione, completamento, ecc.
<p> <b> <a href = "https://juacas.github.io/moodle-mod_treasurehunt/index.html"> Ulteriori informazioni e tutorial passo-passo in questa presentazione online </a> </ b> </p>';
$string['modulenameplural'] = 'Cacce al tesoro';
$string['movingplay'] = 'Gioco in movimento';
$string['multiplegroupingsplay'] = 'Il tuo gruppo è stato assegnato a più di un percorso, quindi non puoi giocare a questa attività.';
$string['multiplegroupsplay'] = 'Sei stato assegnato a più di un percorso, quindi non puoi giocare a questa attività.';
$string['multiplegroupssameroadplay'] = 'Appartieni a più di un gruppo assegnato allo stesso percorso, quindi non puoi giocare a questa attività.';
$string['multipleteamsplay'] = 'Membro di più di un gruppo, quindi non è possibile svolgere l\'attività.';
$string['mustanswerquestion'] = 'Devi rispondere correttamente alla domanda prima di continuare';
$string['mustcompleteactivity'] = 'È necessario superare l\'attività da completare prima di continuare';
$string['mustcompleteboth'] = 'Devi rispondere correttamente alla domanda e superare l\'attività da completare prima di continuare';
$string['nextcamera'] = 'Cambia fotocamera';
$string['nextstep'] = 'Successivo';
$string['noanswerselected'] = 'Selezionare una risposta';
$string['noattempts'] = 'Non hai effettuato alcun tentativo';
$string['noexsitsstage'] = 'Non c\'è un numero di tappe {$a} nel database. Ricarica la pagina';
$string['nogroupassigned'] = 'Nessun gruppo assegnato a questo percorso';
$string['nogroupingplay'] = 'Non puoi giocare perché non c\'è un percorso assegnato al gruppo.';
$string['nogroupplay'] = 'Non puoi giocare perché non hai percorsi assegnati.';
$string['nogrouproad'] = '{$a} non ha percorsi assegnati.';
$string['nomarks'] = 'Prima segna sulla mappa il punto desiderato. Posiziona il <img src="pix/my_location.png" width="28"/>';
$string['nomarksmobile'] = 'Per prima cosa segnare sulla mappa il punto desiderato.';
$string['noresults'] = 'Nessun risultato trovato';
$string['noroads'] = 'Nessuna percorso è stato ancora aggiunto';
$string['notchangeorderstage'] = 'Non è possibile modificare l\'ordine delle tappe dopo che sono stati effettuati dei tentativi sul percorso';
$string['notcreatestage'] = 'Sono stati già effettuati dei tentativi in questo percorso, non è possibile aggiungere altre tappe';
$string['notdeletestage'] = 'Sono stati già effettuati dei tentativi in questo percorso, non è possibile eliminare tappe';
$string['noteam'] = 'Non è un membro del gruppo';
$string['notreasurehunts'] = 'Non ci sono cacce al tesoro in questo corso';
$string['nouserassigned'] = 'Nessun utente assegnato a questo percorso';
$string['nouserattempts'] = '{$a} non ha effettuato alcun tentativo';
$string['nouserroad'] = '{$a} non ha percorsi assegnati.';
$string['nousersprogress'] = 'Nessun utente/gruppo ha fatto progressi su questo percorso.';
$string['outoftime'] = 'Fuori tempo';
$string['overcomefirststage'] = 'Per scoprire la prima tappa dovresti iniziare dall\'area contrassegnata sulla mappa';
$string['overlaylayers'] = 'Livelli di sovrapposizione';
$string['pegmanlabel'] = 'Guardati intorno su StreetView';
$string['play'] = 'Gioca';
$string['playend_tour'] = '<span style="font-size: 1.5em; font-weight: bold">Divertiti a scoprire il tesoro con i tuoi amici!';
$string['playerbootstrap'] = 'Bootstrap';
$string['playerclassic'] = 'Classico';
$string['playerfancy'] = 'Fanzy';
$string['playerhelp_tour'] = 'Questo tour può essere rivisto quando vuoi.';
$string['playerstyle'] = 'Stile della schermata di gioco';
$string['playerstyle_help'] = 'Ci sono diversi stili della schermata di gioco che i docenti possono scegliere';
$string['playstagewithoutmoving'] = 'Scoprire le tappe senza muoversi';
$string['playstagewithoutmoving_help'] = 'Se questa opzione è abilitata, gli studenti possono scoprire questa tappa senza spostarsi in alcun luogo.
Per fare ciò, ogni volta che lo studente fa un semplice click sulla mappa viene creato un segno, che cancella i precedenti se ce ne sono, indicando l\'ultimo punto desiderato. Al termine della tappa, il gioco passerà al valore predefinito nelle impostazioni dell\'attività.';
$string['playstagewithqr'] = 'Scopri la tappa leggendo il codice QR';
$string['playstagewithqr_help'] = 'Se questa opzione è valorizzata, gli studenti possono scoprire la tappa eseguendo la scansione di un codice QR disponibile in quella posizione.';
$string['playwithoutmoving'] = 'Gioca senza muoverti';
$string['playwithoutmoving_help'] = 'Se questa opzione è abilitata, gli studenti possono giocare dai loro computer senza spostarsi nei posti della mappa. Per fare ciò, ogni volta che lo studente fa un semplice click sulla mappa viene creato un segno, che elimina gli eventuali segni precedenti, se ce ne sono, indicando l\'ultimo punto desiderato.';
$string['pluginadministration'] = 'Amministrazione caccia al tesoro';
$string['pluginname'] = 'Caccia al tesoro';
$string['prevstep'] = 'Precedente';
$string['privacy:metadata_treasurehunt_attempts'] = 'La caccia al tesoro memorizza il tipo, l\'ora e il luogo dei tentativi, dei successi e degli insuccessi degli utenti durante l\'attività';
$string['privacy:metadata_treasurehunt_attempts_groupid'] = 'Il gruppo in cui l\'utente ha svolto l\'attività.';
$string['privacy:metadata_treasurehunt_attempts_stageid'] = 'ID della tappa che l\'utente stava cercando di risolvere.';
$string['privacy:metadata_treasurehunt_attempts_timecreated'] = 'L\'ora in cui l\'utente ha effettuato un tentativo.';
$string['privacy:metadata_treasurehunt_attempts_userid'] = 'L\'ID dell\'utente che ha effettuato un tentativo.';
$string['privacy:metadata_treasurehunt_track'] = 'La caccia al tesoro memorizza la sequenza di posizioni seguite da un utente durante l\'attività.';
$string['privacy:metadata_treasurehunt_track_location'] = 'La posizione dell\'utente in un determinato momento.';
$string['privacy:metadata_treasurehunt_track_timestamp'] = 'L\'ora in cui l\'utente viene tracciato.';
$string['privacy:metadata_treasurehunt_track_treasurehuntid'] = 'L\'ID della caccia al tesoro con cui sta giocando l\'utente.';
$string['privacy:metadata_treasurehunt_track_userid'] = 'L\'ID dell\'utente tracciato.';
$string['qrreaded'] = 'Codice QR letto:';
$string['question'] = 'Domanda';
$string['remove'] = 'Rimuovi';
$string['remove_tour'] = 'È possibile eliminare parti delle geometrie delle posizioni. Basta selezionare un poligono e premere questo pulsante.';
$string['removealltreasurehuntattempts'] = 'Elimina tutti i tentativi della caccia al tesoro';
$string['removedactivitytoend'] = 'L\'attività da completare è stata rimossa';
$string['removedquestion'] = 'La domanda è stata rimossa';
$string['removeroadwarning'] = 'Se rimuovi il percorso, tutte le tappe associate verranno rimosse e non sarà più possibile recuperarle';
$string['removewarning'] = 'Se lo rimuovi, non è possibile recuperarlo';
$string['restrictionsdiscoverstage'] = 'Restrizioni per scoprire la tappa';
$string['reviewofplay'] = 'Revisione del gioco';
$string['road'] = 'Percorso';
$string['roadended'] = 'Questo percorso è stato completato. Complimenti! Hai concluso la caccia al tesoro. Puoi verificare la tua cronologia sulla mappa.';
$string['roadmap'] = 'Percorso';
$string['roadname'] = 'Nome del percorso';
$string['roads_tour'] = 'In questa area troverai i diversi percorsi del tuo gioco. Selezionane uno per modificare le tappe.';
$string['roadview'] = 'Percorso';
$string['save'] = 'Salva';
$string['save_tour'] = 'Dopo aver disegnato le posizioni, non dimenticare di salvare le modifiche.';
$string['saveemptyridle'] = 'Tutte le fasi modificate devono avere la geometria prima del salvataggio';
$string['savewarning'] = 'Non hai salvato le modifiche';
$string['scanQR_generatebutton'] = 'Genera un codice QR';
$string['scanQR_scanbutton'] = 'Scansiona codice QR';
$string['search'] = 'Ricerca';
$string['searching'] = 'Ricerca';
$string['searchlocation'] = 'Ricerca posizione';
$string['searchlocation_tour'] = 'Con questa area di ricerca puoi trovare rapidamente la strada';
$string['send'] = 'Invia';
$string['sendlocationcontent'] = 'Questa azione non può essere annullata.';
$string['sendlocationtitle'] = 'Sei sicuro di voler inviare questa posizione?';
$string['showboard'] = 'Mostrare i progressi degli altri studenti';
$string['showboard_help'] = 'Se abilitato, i progressi degli altri studenti saranno mostrati nella pagina delle attività.';
$string['showclue'] = 'Mostra indizi';
$string['skiptutorial'] = 'Abbandona';
$string['stage'] = 'Tappa';
$string['stageclue'] = 'Indizio per scoprire la prossima tappa';
$string['stageclue_help'] = 'Qui va descritto l\'indizio per raggiungere la prossima posizione.
Nel caso sia l\'ultima tappa, occorre lasciare un messaggio di feedback che indica che la caccia al tesoro è finita.';
$string['stagename'] = 'Nome della tappa';
$string['stageovercome'] = 'Tappa superata';
$string['stages'] = 'Tappe';
$string['stages_tour'] = 'Nell\'area troverai le tappe del percorso selezionato. Seleziona ogni tappa per ingrandire la posizione delle tappe nella mappa.';
$string['start'] = 'Inizia';
$string['startfromhere'] = 'Puoi iniziare da qui';
$string['state'] = 'Stato';
$string['successlocation'] = 'E\' il posto giusto!';
$string['timeago'] = '{$a->shortduration} fa';
$string['timeagolong'] = '{$a->shortduration} fa ({$a->date})';
$string['timeat'] = 'il {$a->date}';
$string['timeexceeded'] = 'Hai superato il limite di tempo per l\'attività. Questa schermata serve solo per rivedere il gioco';
$string['timetocome'] = 'in {$a->shortduration}';
$string['timetocomelong'] = 'in {$a->shortduration} ({$a->date})';
$string['totalprogress'] = 'Progressi totali';
$string['totaltime'] = 'Tempo totale';
$string['trackusers'] = 'Traccia le traiettorie';
$string['trackusers_help'] = 'Registra i percorsi realizzati dagli utenti. Possono essere visualizzati nella schermata "Visualizzatore tracciamento". <br/>
Le posizioni dell\'utente vengono registrate tra i tentativi di convalida (con ogni richiesta di sondaggio). <br/>
Se l\'utente ha il GPS disabilitato, l\'unica posizione che può segnalare è quella dei codici QR scansionati. <br/>
Se questa opzione è <b> disabilitata </b>, le uniche posizioni registrate sono quelle dei tentativi di convalida.';
$string['trackviewer'] = 'Monitoraggio del tracciamento';
$string['trackviewerrefreshtracks'] = 'Aggiorna il tracciamento ogni {$a} secondi.';
$string['treasurehunt'] = 'Caccia al tesoro';
$string['treasurehunt:addinstance'] = 'Aggiungi una nuova caccia al tesoro';
$string['treasurehunt:addroad'] = 'Aggiungi percorso';
$string['treasurehunt:addstage'] = 'Aggiungi tappa';
$string['treasurehunt:editroad'] = 'Modifica percorso';
$string['treasurehunt:editstage'] = 'Modifica tappa';
$string['treasurehunt:managetreasure'] = 'Gestire caccia al tesoro';
$string['treasurehunt:managetreasurehunt'] = 'Gestire caccia al tesoro';
$string['treasurehunt:play'] = 'Gioca';
$string['treasurehunt:view'] = 'Visualizza caccia al tesoro';
$string['treasurehunt:viewusershistoricalattempts'] = 'Visualizza la cronologia dei tentativi degli utenti';
$string['treasurehuntclosed'] = 'Questa caccia al tesoro è stata chiusa il {$a}';
$string['treasurehuntcloses'] = 'La caccia al tesoro chiude';
$string['treasurehuntcloseson'] = 'Questa caccia al tesoro chiuderà il {$a}';
$string['treasurehuntislocked'] = '{$a} sta modificando questa caccia al tesoro in questo momento. Prova a modificarlo tra pochi minuti.';
$string['treasurehuntname'] = 'Nome della caccia al tesoro';
$string['treasurehuntnotavailable'] = 'La caccia al tesoro non sarà disponibile fino il {$a}';
$string['treasurehuntopenedon'] = 'Questa caccia al tesoro è stata aperta il {$a}';
$string['treasurehuntopens'] = 'La caccia al tesoro apre';
$string['updates'] = 'Aggiornamenti';
$string['updatetimes'] = 'Tempi di aggiornamento';
$string['user'] = 'Utente';
$string['useractivityovercome'] = 'Attività da completare completata con successo per la tappa {$a->position} in data: {$a->date}';
$string['userattempthistory'] = 'Elenco dei tentativi di {$a}';
$string['userinvalidroad'] = '{$a} ha assegnato un percorso non valido.';
$string['userlocationfailed'] = 'Posizione della tappa {$a->position} non corretta in data: {$a->date}';
$string['userlocationovercome'] = 'Posizione della tappa {$a->position} corretta in data: {$a->date}';
$string['usermultipleroads'] = '{$a} ha più di un percorso assegnato.';
$string['usermultiplesameroad'] = '{$a} appartiene a più di un gruppo assegnato allo stesso percorso.';
$string['userprogress'] = 'Progressi dell\'utente aggiornati con successo';
$string['userquestionfailed'] = 'Risposta sbagliata alla domanda della tappa {$a->position} in data: {$a->date}';
$string['userquestionovercome'] = 'Risposta corretta alla domanda della tappa {$a->position} in data: {$a->date}';
$string['usersprogress'] = 'Avanzamento degli utenti';
$string['usersprogress_help'] = 'Indica il progresso delle tappe di ogni studente / gruppo in base ai colori:
<P>Il colore<B> verde </B> indica che la tappa è stata superata senza errori.</P>
<P>Il colore<B> giallo </B> indica che la tappa è stato superata con errori. </P>
<P> Il colore <B> rosso </B> indica che la tappa non è stata superata e che sono stati effettuati errori. </ P>
<P> Il colore <B> grigio </B> indica che la tappa non è stata superata e che non sono stati effettuati errori. </P>';
$string['userstageovercome'] = 'Tappa {$a->position} superata alla data: {$a->date}';
$string['validatelocation'] = 'Convalida posizione';
$string['validatelocation_tour'] = 'Quando sei sicuro della posizione di una tappa, devi inviare la tua posizione per verificare se sia corretta.';
$string['validateqr'] = 'Scansiona QR';
$string['warmatchanswer'] = 'La risposta non corrisponde alla domanda';
$string['warnqrscanner'] = '<table><tr><td> Questa Caccia al tesoro include {$a} tappe con codici QR. Assicurati che il tuo dispositivo possa scansionare i codici dal browser web. Una vista della tua webcam dovrebbe apparire qui sotto. Prova a leggere qualsiasi codice QR come questo.</td><td> <a href="pix/qr.png">
 <img src="pix/qr.png" align="top" width="100"></a></td></tr></table>';
$string['warnqrscannererror'] = 'Questa caccia al tesoro include {$a} livelli con codici QR.
Sembra che il tuo dispositivo non possa utilizzare la fotocamera con questa applicazione. Concedi le autorizzazioni per accedere alla videocamera.
Se non riesci ad attivare la fotocamera, questo dispositivo potrebbe non essere adatto per giocare alla caccia al tesoro.';
$string['warnqrscannersuccess'] = 'Questa Caccia al tesoro include {$a} tappe con codici QR.
Sembra che tu abbia superato un test QR con questo dispositivo.';
$string['warnunsecuregeolocation'] = 'La geolocalizzazione potrebbe non funzionare nel tuo server. Si tratta di un <b> GRAVE errore di configurazione errata </b>del tuo
server. La geolocalizzazione è vietata per i server non protetti che utilizzano HTTP anziché HTTPS. Per utilizzare il GPS per individuare gli studenti durante la caccia al tesoro, è necessario accedere al server tramite URL HTTPS sicuri. In altri casi, solo la modalità "Gioca senza muoverti" può essere utilizzata e i giocatori devono indicare manualmente ogni tappa sulla mappa.
Si prega di contattare l\'amministratore.
(Riferimenti <a  href="https://www.chromestatus.com/feature/5636088701911040"> Chrome</a>,<a href = "https://blog.mozilla.org/security/2015/04/30/deprecating-non-secure-http/ ">Firefox</a>)';
$string['warnusersgroup'] = 'I seguenti utenti appartengono a più di un gruppo: {$a}, non possono quindi giocare.';
$string['warnusersgrouping'] = 'I seguenti gruppi appartengono a più di un raggruppamento: {$a}, non possono quindi giocare.';
$string['warnusersoutside'] = 'I seguenti utenti non appartengono ad alcun gruppo/raggruppamento: {$a},non possono quindi giocare all\'attività.';
$string['welcome_edit_tour'] = 'Benvenuti nella pagina di creazione di Caccia al tesoro.';
$string['welcome_play_tour'] = '<span style="font-size: 1.5rem; font-weight: bold">Benvenuto alla caccia al tesoro!</span><br>Questa mappa e gli indizi saranno la tua guida.';
