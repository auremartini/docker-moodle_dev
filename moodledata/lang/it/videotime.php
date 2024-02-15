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
 * Strings for component 'videotime', language 'it', version '4.1'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Nome';
$string['activity_name_help'] = 'Nome visualizzato nel corso per questa attività di Video Time';
$string['activitystatus'] = 'Stato completamento attività';
$string['advancedsettings'] = 'Impostazioni avanzate';
$string['advancedsettings_help'] = 'Seleziona tutti gli elementi da visualizzare come avanzati';
$string['albums'] = 'Album';
$string['api_not_authenticated'] = 'API di Vimeo non autenticata';
$string['api_not_configured'] = 'API di Vimeo non configurata';
$string['apply'] = 'Conferma';
$string['authenticate_vimeo'] = 'E\' richiesta l\'autenticazione su Vimeo';
$string['authenticate_vimeo_success'] = 'Autenticazione su Vimeo riuscita. Ora puoi utilizzare le funzionalità che si basano sulle API di Vimeo.';
$string['authenticated'] = 'Autenticazione avvenuta con successo';
$string['averageviewtime'] = 'Tempo medio di visualizzazione';
$string['browsevideos'] = 'Sfoglia i video';
$string['choose_video'] = 'Scegli il video';
$string['choose_video_confirm'] = 'Conferma la scelta del video';
$string['cleanupalbumsandtags'] = 'Ripulire gli Album e i Tag';
$string['client_id'] = 'Codice Cliente (Client ID) di Vimeo';
$string['client_id_help'] = 'Il Codice Cliente viene generato quando si crea una "App" nell\'account Vimeo.
Avviare la procedura dall\'indirizzo https://developer.vimeo.com/apps/new';
$string['client_secret'] = 'Codice Segreto (Client Secret) Vimeo.';
$string['client_secret_help'] = 'Il Codice Segreto viene generato quando si crea una "App" nell\'account Vimeo. Avviare la procedurandare dall\'indirizzo https://developer.vimeo.com/apps/new';
$string['columns'] = 'Colonne';
$string['columns_help'] = 'Scegli la larghezza del video quando viene visualizzato in modalità anteprima. Il numero di colonne indica quanti video possono essere visualizzati in una riga.';
$string['completed'] = 'Completato';
$string['completion_hide_detail'] = 'Nascondi i dettagli del completamento';
$string['completion_on_finish'] = 'Completamento al raggiungimento della fine del video';
$string['completion_on_percent'] = 'Completamento in base alla percentuale di visualizzazione';
$string['completion_on_percent_value'] = 'Completamento in base al valore percentuale di visualizzazione';
$string['completion_on_view'] = 'Completamento in base al tempo di visualizzazione';
$string['completion_on_view_seconds'] = 'Completamento in base al tempo di visualizzazione (secondi)';
$string['completiondetail:_on_finish'] = 'Termina la visualizzazione del video';
$string['completiondetail:_on_percent'] = 'Termina la visualizzazione al {$a} %';
$string['completiondetail:_on_view_time'] = 'Visualizzato per il seguente periodo:  {$a}';
$string['configure_vimeo_first'] = 'Configurare una  App di Vimeo prima di eseguire l\'autenticazione.';
$string['configure_vimeo_help'] = '<ol><li>Naviga col browser all\'indirizzo <a href="https://developer.vimeo.com/apps/new">https://developer.vimeo.com/apps/new</a> e autenticati con il tuo account di Vimeo</li>
<li>Inserisci il nome e la descrizione della tua APP. Esempio: Repository delle API per Video Time</li>
<li>Controlla che l\'impostazione "No. L\'unico account Vimeo che potrà avere accesso alla APP è la mia utenza Vimeo" sia spuntata</li>
<li>Accetta i Termini di servizio di Vimeo e fai clic su "Crea la App"</li>
<li>A questo punto sei entrato nella tua App</li>
<li>Fai click su "Modifica Impostazioni"</li>
<li>Inserisci la descrizione della App che verrà visualizzata agli amministratori che si autenticano su Vimeo</li>
<li>Inserisci l\'indirizzo della App (URL) che deve essere impostato a:  <b>{$a->redirect_url}</b></li>
<li>Fai click su "Aggiorna (Update)"</li>
<li>Aggiungi l\'indirizzo di richiamata (callback URL) che deve essere impostato a: <b>{$a->redirect_url}</b></li>
<li>Prendi nota del Codice Identificativo del Cliente (Client Identifier - in alto nella pagina) e del Codice Segreto del Cliente (Client Secret - Manage App Secrets)</li>
<li>Inserisci il Codice Identificativo del Cliente ed il Codice Segreto del Cliente  <a href="{$a->configure_url}">qui</a></li></ol>';
$string['confirmation'] = 'Conferma';
$string['create_vimeo_app'] = 'Crea una App di Vimeo';
$string['currentwatchtime'] = 'Tempo di visualizzazione attuale';
$string['datasource:videotime_sessions_data_source'] = 'Sessioni Video Time';
$string['datasource:videotime_stats_data_source'] = 'Statistiche Video Time';
$string['default'] = 'Default';
$string['deletesessiondata'] = 'Elimina i dati della sessione';
$string['discover_videos'] = 'Trova i video di Vimeo';
$string['discovering_videos'] = 'Trovati {$a->count} video';
$string['display_options'] = 'Opzioni display';
$string['done'] = 'Fatto';
$string['duration'] = 'Durata';
$string['embed_options'] = 'Opzioni embed';
$string['embed_options_defaults'] = 'Opzioni embed di default';
$string['embeds'] = 'Incorpora';
$string['estimated_request_time'] = 'Tempo stimato rimanente';
$string['firstsession'] = 'Prima sessione';
$string['force'] = 'Forza le impostazioni';
$string['force_help'] = 'Se selezionato questo valore sovrascriverà le impostazioni dell\'istanza.';
$string['generalsettings'] = 'Impostazioni generali';
$string['goback'] = 'Indietro';
$string['gradeitemnotcreatedyet'] = 'Non esiste un elemento del registro dei voti per questa attività. Seleziona <b>Imposta voto uguale alla percentuale di visualizzazione</b>,  salva e modifica nuovamente questa attività per impostare la categoria del voto e il voto di sufficienza.';
$string['hideshow'] = 'Nascondi/Visualizza';
$string['incomplete'] = 'Visione non completata';
$string['insert_video_metadata'] = 'Inserisci i metadata dal video (le impostazioni dell\'attività possono essere sovrascritte)';
$string['invalid_session_state'] = 'Stato non valido della sessione.';
$string['label_mode'] = 'Modalità etichetta';
$string['lastsession'] = 'Ultima sessione';
$string['mode'] = 'Modalità';
$string['mode_help'] = '<b>Modalità normale</b>: viene visualizzato un link standard all\'attività, nessuna informazione agggiuntiva nella pagina del corso.<br>
<b>Modalità etichetta</b>: il video viene incorporato nella pagina del corso, in modo simile all\'attività Etichetta.<br>
<b>Modalità anteprima video</b>: visualizza la miniatura del video nella pagina del corso che si collega all\'attività (solo per Video Time Repository).';
$string['modulename'] = 'Video Time';
$string['modulename_help'] = 'L\'attività Video Time Pro consente all\'insegnante di:
<ul>
    <li>incorporare facilmente video da Vimeo, semplicemente aggiungendo l\'URL</li>
    <li>aggiungere contenuti sopra e sotto il video player</li>
    <li>monitorare il tempo di visualizzazione dell\'utente utilizzando il completamento dell\'attività</li>
    <li>ottenere informazioni dettagliate sul tempo di visualizzazione di ciascun utente</li>
    <li>impostare le opzioni di incorporamento predefinite per il plugin</li>
    <li>sovrascrivere le opzioni di incorporamento a livello globale.</li>
</ul>

Miglioriamo costantemente il plugin, quindi rimani sempre aggiornato con le nuove versioni. Puoi vedere su cosa stiamo lavorando e aggiungere richieste di funzionalità nella nostra roadmap pubblica su <a href="https://bdecent.de/products/videotimepro/roadmap">https://bdecent.de/products/videotimepro/ tabella di marcia</a>.

Attendiamo i vostri commenti.';
$string['modulenameplural'] = 'Istanze di Video Time';
$string['more'] = 'Altro';
$string['needs_authentication'] = 'E\' necessario autenticarsi nuovamente';
$string['next_activity'] = 'Attività successiva';
$string['next_activity_auto'] = 'Passa automaticamente all\'attività successiva';
$string['next_activity_auto_help'] = 'Carica automaticamente l\'attività successiva quando lo studente/studentessa ha completato la visione del video';
$string['next_activity_button'] = 'Abilita il pulsante Attività Successiva';
$string['next_activity_button_help'] = 'Visualizza un pulsante sopra il video per velocizzare il collegamento all\'attività successiva che l\'utente dovrebbe completare.';
$string['next_activity_in_course'] = 'Impostazione predefinita: Attività successiva nel corso';
$string['nocompletioncriteriaset'] = 'I criteri di completamento non sono impostati. Selezionare i criteri.';
$string['normal_mode'] = 'Modalità Normale';
$string['not_authenticated'] = 'Non autenticato';
$string['of'] = 'di';
$string['option_autoplay'] = 'Autoplay';
$string['option_autoplay_help'] = 'Avvia automaticamente la riproduzione del video. Tieni presente che questa funzionalità potrebbe non funzionare su alcuni dispositivi o browser che la bloccano.';
$string['option_byline'] = 'Byline';
$string['option_byline_help'] = 'Visualizza la byline nel video.';
$string['option_color'] = 'Colore';
$string['option_color_help'] = 'Specificare il colore dei controlli video. I colori possono essere sovrascritti dalle impostazioni embed del video.';
$string['option_forced'] = 'L\'opzione {$a->option} è impostata a: {$a->value}';
$string['option_height'] = 'Altezza';
$string['option_height_help'] = 'Altezza esatta del video.  La altezza più ampia disponibile del video viene utilizzata come impostazione predefinita.';
$string['option_maxheight'] = 'Altezza Massima';
$string['option_maxheight_help'] = 'Impostazione dell\'altezza; in ogni caso il video non supererà le dimensioni native.';
$string['option_maxwidth'] = 'Larghezza massima';
$string['option_maxwidth_help'] = 'Massima larghezza; in ogni caso il video non supererà le dimensioni native.';
$string['option_muted'] = 'Audio disattivato';
$string['option_muted_help'] = 'Disattiva l\'audio di questo video al caricamento; impostazione necessaria per la riproduzione automatica in alcuni browser.';
$string['option_playsinline'] = 'Riproduci video in linea';
$string['option_playsinline_help'] = 'Riproduci video in linea (inline) su dispositivi mobili, per passare automaticamente a schermo intero durante la riproduzione, imposta questo parametro a "false".';
$string['option_portrait'] = 'Orientamento video Ritratto (Portrait)';
$string['option_portrait_help'] = 'Mostra il video Ritratto (Portrait)';
$string['option_preventfastforwarding'] = 'Impedisci l\'utilizzo del tasto Avanti Veloce';
$string['option_responsive'] = 'Responsive';
$string['option_responsive_help'] = 'Se impostato, il video player sarà responsive e si adatterà alla pagina o alle dimensioni dello schermo.';
$string['option_speed'] = 'Velocità';
$string['option_speed_help'] = 'Mostra i controlli della velocità di riproduzione video nel menù delle preferenze e abilita l\'API relativa (disponibile per gli account PRO e Business).';
$string['option_title'] = 'Titolo';
$string['option_title_help'] = 'Visualizza il titolo sul video';
$string['option_transparent'] = 'Trasparente';
$string['option_transparent_help'] = 'Il player responsive e lo sfondo trasparente sono abilitati per impostazione predefinita, per disabilitare imposta questo parametro a "false".';
$string['option_width'] = 'Larghezza';
$string['option_width_help'] = 'Larghezza esatta del video.  La larghezza più ampia disponibile del video viene utilizzata come impostazione predefinita.';
$string['percentageofvideofinished'] = 'Percentuale di video visionata';
$string['pluginadministration'] = 'Amministrazione di Video Time';
$string['pluginname'] = 'Video Time';
$string['preventfastforwarding'] = 'Impedisci l\'utilizzo del tasto Avanti Veloce';
$string['preventfastforwarding_help'] = 'Impedisci l\'utilizzo del tasto Avanti Veloce o saltare in avanti nel video';
$string['preventfastforwardingmessage'] = 'Hai visionato soltanto il {$a->percent}% del video, continua la visione per proseguire';
$string['preview_mode'] = 'Modalità anteprima immagine';
$string['preview_picture'] = 'Anteprima immagine';
$string['preview_picture_help'] = 'Immagine visualizzata dell\'utente';
$string['preview_picture_linked'] = 'Immagine di anteprima collegata';
$string['preview_picture_url'] = 'URL dell\'immagine di anteprima';
$string['privacy:metadata'] = 'Il modulo di attività Video Time non memorizza alcun dato personale.';
$string['process_videos'] = 'Elaborazione dei video';
$string['process_videos_help'] = 'I video verranno elaborati tramite attività pianificata. Per account Vimeo di grandi dimensioni, potrebbe essere necessario del tempo per elaborare completamente tutti i video.';
$string['pull_from_vimeo'] = 'Estrai i metadati da Vimeo';
$string['pull_from_vimeo_invalid_videoid'] = 'Impossibile determinare l\'ID VIDEO. Assicurati di aver inserito un URL su Vimeo (Esempio: https://vimeo.com/635473456)';
$string['pull_from_vimeo_loading'] = 'Estrazione dei metadati da Vimeo...';
$string['pull_from_vimeo_success'] = 'I metadati sono stati estratti con successo da Vimeo. Alcune delle impostazioni dell\'attività sono state sovrascritte.';
$string['rate_limit'] = 'Numero massimo di richieste utente al minuto per le API Vimeo';
$string['refreshpage'] = 'Aggiorna la pagina per visualizzare l\'attività duplicata';
$string['results'] = 'Risultati';
$string['resume_playback'] = 'Riprendi la riproduzione';
$string['resume_playback_help'] = 'Riprendi automaticamente il video quando l\'utente torna all\'attività. La riproduzione inizia da dove l\'utente ha interrotto.';
$string['run_discovery_task'] = 'Lancia la procedura "Trova i video di Vimeo" per iniziare a estrarre i tuoi video. Altrimenti puoi aspettare che la procedura venga eseguita automaticamente.';
$string['search:activity'] = 'Informazioni sull\'attività Video Time';
$string['search_help'] = 'Ricerca di nome, descrizione, album, tag, ....';
$string['seconds'] = 'Secondi';
$string['session_not_found'] = 'Sessione utente non trovata.';
$string['set_client_id_and_secret'] = 'Impostazione del Codice Cliente (Client ID) e del Codice Segreto (Secret)';
$string['settings'] = 'Impostazioni di Video Time';
$string['setup_repository'] = 'Impostazione del Repository';
$string['show_description'] = 'Mostra la descrizione';
$string['show_description_in_player'] = 'Visualizza la descrizione sopra il player';
$string['show_description_in_player_help'] = 'Visualizza la descrizione sopra il player quando l\'attività viene visualizzata';
$string['show_duration'] = 'Mostra la durata';
$string['show_tags'] = 'Mostra i tag';
$string['show_title'] = 'Mostra il titolo';
$string['show_viewed_duration'] = 'Mostra il periodo di visualizzazione';
$string['showdescription'] = 'Display';
$string['showdescription_help'] = 'La descrizione viene visualizzata sopra il video e può essere visualizzata nella pagina del corso.';
$string['showing'] = 'In visualizzazione';
$string['state'] = 'Stato';
$string['state_finished'] = 'Completato';
$string['state_help'] = 'L\'utente ha completato la visione del video?';
$string['state_incomplete'] = 'Visione non completata';
$string['status'] = 'Status';
$string['store_pictures'] = 'Memorizza le miniature';
$string['store_pictures_help'] = 'Se abilitato, le miniature di Vimeo verranno archiviate localmente. In caso contrario le immagini verranno caricate esternamente da Vimeo.';
$string['subplugintype_videotimeplugin'] = 'Plugin di Video Time';
$string['subplugintype_videotimeplugin_plural'] = 'Plugin di Video Time';
$string['tablealias_vt'] = 'Video Time';
$string['taskscheduled'] = 'Attività pianificata per la prossima esecuzione di cron';
$string['timestarted'] = 'Data di partenza';
$string['todo'] = 'TODO (da fare)';
$string['totaluniquevisitors'] = 'Totale visitatori unici';
$string['totalvideotime'] = 'Tempo totale del video: {$a->time}';
$string['totalviews'] = 'Visualizzazioni totali';
$string['totara_video_discovery_help'] = '<p>Puoi eseguire manualmente il comando da interfaccia CLI:</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\discover_videos</b></p>
<p>Altrimenti devi attendere fino all\'avvio periodico del processo.</p>
<p>E\' anche possibile estrarre manualmente le informazioni dall\'album con il comando  (in questo caso la procedura parte immediatamente):</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\update_albums</b></p>';
$string['update_albums'] = 'Aggiormamento degli album dei video';
$string['upgrade_vimeo_account'] = 'NB: considera la possibilità di eseguire un upgrade del tuo account Vimeo. Le tue impostazioni sul numero massimo di richieste utente al minuto sono troppo basse.';
$string['use'] = 'Utilizza';
$string['video_description'] = 'Note';
$string['video_description_help'] = 'Le note sono visualizzate sotto il video.';
$string['videocreated'] = 'Video creati';
$string['videos_discovered'] = 'Video trovati';
$string['videos_processed'] = 'Video elaborati';
$string['videotime:addinstance'] = 'Aggiungi un nuovo modulo Video Time';
$string['videotime:view'] = 'Visualizza il video Video Time';
$string['videotime:view_report'] = 'Visualizza il report (solo versione Pro)';
$string['videotimelink'] = 'Collegamento';
$string['videotimeurl'] = 'URL (indirizzo web)';
$string['view_report'] = 'Visualizza il report';
$string['viewpercentgrade'] = 'Imposta il voto uguale alla percentuale di visualizzazione del video.';
$string['viewpercentgrade_help'] = 'Crea un elemento di valutazione per questo video. Lo studente/studentessa riceverà un voto pari alla percentuale di visualizzazione del video.';
$string['views'] = 'Visualizzazioni';
$string['views_help'] = 'Numero di volte che l\'attività è stata visualizzata';
$string['vimeo_overview'] = 'Panoramica e configurazione';
$string['vimeo_url'] = 'URL Vimeo';
$string['vimeo_url_help'] = 'URL completa del video Vimeo';
$string['vimeo_url_invalid'] = 'URL di Vimeo non valida. Copia l\'indirizzo direttamente dal browser web';
$string['vimeo_url_missing'] = 'URL Vimeo non impostata';
$string['vimeo_video_not_found'] = 'Il video non esiste nel database.';
$string['vimeo_video_not_processed'] = 'Il video non è ancora stato elaborato. Riprova più tardi.';
$string['watch_percent'] = 'Percentuale di visualizzazione';
$string['watch_percent_help'] = 'Il momento più avanti nel tempo visionato nel video.';
$string['watch_time'] = 'Tempo di visualizzazione';
$string['watch_time_help'] = 'Tempo di visualizzazione del video in totale (in blocchi di 5s)';
$string['with_play_button'] = 'con il tasto PLAY';
