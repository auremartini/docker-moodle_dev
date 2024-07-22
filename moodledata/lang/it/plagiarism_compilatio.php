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
 * Strings for component 'plagiarism_compilatio', language 'it', version '4.1'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_report'] = 'Accesso al report';
$string['account_expire_soon_title'] = 'Fine dell\'abbonamento Compilatio.net';
$string['activate_compilatio'] = 'Attiva Compilatio';
$string['activate_submissiondraft'] = 'Per consentire agli studenti di analizzare le loro bozze, è necessario abilitare l\'opzione <b>{$a}</b> nella sezione';
$string['activated'] = 'Consentire il rilevamento di testi sospetti con Compilatio';
$string['activities_statistics'] = 'Statistiche per attività';
$string['activity'] = 'Attività';
$string['admin_account_expire_content'] = 'L\' abbonamento terminerà alla fine del mese corrente. Se il contratto non scade alla fine del mese, un nuovo abbonamento sarà automaticamente impostato dai nostri servizi. Quando ciò avverrà, questo messaggio scomparirà. Per ulteriori informazioni, puoi contattare il nostro reparto vendite o supporto a support@compilatio.net.';
$string['admin_disabled_reports'] = 'L\'amministratore non consente agli insegnanti di visualizzare i rapporti di analisi agli studenti.';
$string['admin_goto_helpcenter'] = 'Accedi al centro di assistenza Compilatio per visualizzare agli articoli relativi alla gestione del plugin Moodle.';
$string['ai_included_in_subscription'] = 'rilevamento di testo generato dall&apos;IA</li></ul>';
$string['ai_not_included_in_subscription'] = 'L\'abbonamento non include il rilevamento del testo AI.';
$string['ai_score_not_included'] = 'non incluso nell\'abbonamento';
$string['aiscore'] = 'Testo generato dall&apos;IA';
$string['aiscore_percentage'] = 'Percentuale di testo potenzialmente scritto dall&apos;IA';
$string['allow_analyses_auto'] = 'Possibilità di avviare direttamente le analisi';
$string['allow_analyses_auto_help'] = 'I docenti potranno attivare il lancio automatico dell\'analisi dei documenti su un\'attività (cioè subito dopo la loro consegna).<br>
Si noti che in questo caso:
<ul>
    <li>Il numero di scansioni effettuate dalla sua istituzione potrebbe essere significativamente più alto.</li>
    <li>I documenti consegnati per primi non vengono confrontati con i documenti degli consegnati in seguito.</li>
</ul>
Per confrontare tutti i documenti di un compito, è necessario utilizzare l\'analisi "programmata", scegliendo una data successiva alla scadenza dell\'invio.';
$string['allow_search_tab'] = 'Strumento di ricerca per identificare l\'autore di un documento.';
$string['allow_search_tab_help'] = 'Lo strumento di ricerca tpermette di cercare il nome e il cognome di uno studente in base a un identificatore di documento visibile nei report di analisi tra tutti i documenti presenti sulla tua piattaforma.';
$string['allow_student_analyses'] = 'Possibilità di consentire l\'analisi degli studenti sulle bozze.';
$string['allow_student_analyses_help'] = 'Questa opzione consentirà ai docenti di attivare su un\'attività l\'analisi da parte degli studenti dei loro documenti presentati in modalità bozza con Compilatio Magister, prima della presentazione finale al docente.';
$string['allow_teachers_to_show_reports'] = 'Visualizza i report di somiglianza agli studenti';
$string['analysed_docs'] = '{$a} documenti analizzati';
$string['analysing'] = 'Documento in corso di analisi';
$string['analysing_docs'] = '{$a} documento/i in analisi';
$string['analysis'] = 'Inizio analisi';
$string['analysis_auto'] = 'Inizio analisi';
$string['analysis_auto_help'] = '<p>Ha tre opzioni:
    <ul>
        <li><strong>Manuale:</strong> L\'analisi dei documenti deve essere attivata manualmente con il pulsante "Analizza" di ciascun documento o con il pulsante "Analizza tutti i documenti".
        <li><strong>Schedulata: </strong> Tutti i documenti vengono analizzati all\'ora/data selezionata.</li>
        <li><strong>Diretto: </strong> Ogni documento viene analizzato non appena lo studente lo invia. I documenti dell\'attività non verranno confrontati tra loro.</li>
    </ul>
    Per avere tutti i documenti confrontati tra loro durante le analisi, attenda che tutti i lavori siano inviati dagli studenti e poi attivi le analisi.</p>';
$string['analysis_completed'] = 'Analisi terminata: {$a}% di similitudini';
$string['analysis_date'] = 'Data dell\'analisi (solo analisi programmate)';
$string['analysis_help'] = '<p>Ha due opzioni:
    <ul>
        <li><strong>Manuale:</strong> L\'analisi dei documenti deve essere attivata manualmente con il pulsante "Analizza" di ciascun documento o con il pulsante "Analizza tutti i documenti".
        <li><strong>Schedulata: </strong> Tutti i documenti vengono analizzati all\'ora/data selezionata.</li>
    </ul>
    Per confrontare tutti i documenti tra loro durante le analisi, attenda che tutti i lavori siano stati inviati dagli studenti, quindi attivi le analisi.</p>';
$string['analysis_started'] = '{$a} analisi richieste';
$string['analysistype'] = 'Inizio analisi';
$string['analysistype_auto'] = 'Diretto';
$string['analysistype_auto_help'] = 'Sono disponibili tre opzioni:
<ul>
<li><strong>Manuale:</strong> L\'analisi dei documenti deve essere avviata manualmente con il pulsante "Analizza" di ciascun documento o con il pulsante "Analizza tutti i documenti".</li>
<li><strong>Pianificato: </strong> Tutti i documenti vengono analizzati alla data/ora selezionata.</li>
<li><strong>Diretto: </strong> Ciascun documento viene analizzato non appena lo studente lo invia. I documenti nell\'attività non saranno confrontati tra loro.</li>
</ul>
Per avere tutti i documenti confrontati durante le analisi, attendere che tutti i lavori siano inviati dagli studenti e quindi avviare le analisi.';
$string['analysistype_help'] = 'Sono disponibili tre opzioni:
<ul>
<li><strong>Manuale:</strong> L\'analisi dei documenti deve essere avviata manualmente con il pulsante "Analizza" di ciascun documento o con il pulsante "Analizza tutti i documenti".</li>
<li><strong>Pianificato: </strong> Tutti i documenti vengono analizzati alla data/ora selezionata.</li>
</ul>
Per confrontare tutti i documenti durante le analisi, attendere che tutti i lavori siano inviati dagli studenti e quindi avviare le analisi.';
$string['analysistype_manual'] = 'Manuale';
$string['analysistype_prog'] = 'In programma';
$string['analyze'] = 'Analizzare';
$string['analyzing'] = 'Analisi';
$string['api_key_not_tested'] = 'La chiave API non è stata verificata perché la connessione a Compilatio non è riuscita.';
$string['api_key_not_valid'] = 'La chiave API non è valida. È specifica per la piattaforma utilizzata. Puoi ottenerne una contattando (ent@compilatio.net).';
$string['api_key_valid'] = 'La chiave API registrata è valida';
$string['apiconfiguration'] = 'Configurazione API';
$string['apikey'] = 'Chiave API';
$string['apikey_help'] = 'Codice personale fornito da Compilatio per accedere all\'API';
$string['assign_statistics'] = 'Statistiche dei compiti';
$string['auto_diagnosis_title'] = 'Auto-diagnosi';
$string['average'] = 'Media';
$string['average_similarities'] = 'In questa attività, il rapporto medio di somiglianza è pari a {$a}%.';
$string['badqualityanalysis'] = 'Sono stati riscontrati dei problemi durante l\'analisi del documento. È possibile che alcune fonti non siano state identificate o che il risultato sia incompleto.';
$string['btn_analysing'] = 'Analisi in corso';
$string['btn_error_analysis_failed'] = 'Analisi non andata a buon fine';
$string['btn_error_not_found'] = 'Documento non trovato';
$string['btn_error_sending_failed'] = 'Invio non andato a on fine';
$string['btn_error_too_large'] = 'File troppo grande';
$string['btn_error_too_long'] = 'Documento troppo lungo';
$string['btn_error_too_short'] = 'Documento troppo corto';
$string['btn_error_unsupported'] = 'File non supportato';
$string['btn_planned'] = 'Analisi prevista';
$string['btn_queue'] = 'In coda';
$string['btn_sent'] = 'Analizzare';
$string['btn_unsent'] = 'Inviare';
$string['certificate'] = 'Certificato di analisi';
$string['compi_student_analyses'] = 'Consenti agli studenti di analizzare i loro documenti';
$string['compi_student_analyses_help'] = 'Consente agli studenti di analizzare le loro bozze con Compilatio Magister, prima della presentazione finale all\'insegnante.';
$string['compilatio'] = 'Plug-in di rilevamento plagio Compilatio';
$string['compilatio:enable'] = 'Attivare/disattivare Compilatio all\'interno di un\'attività';
$string['compilatio:resetfile'] = 'Caricare nuovamente il documento all\'interno di Compilatio dopo un errore';
$string['compilatio:triggeranalysis'] = 'Avviare analisi manualmente';
$string['compilatio:viewreport'] = 'Consultare il report completo dopo l\'analisi Compilatio';
$string['compilatio_author'] = 'Il docuemnto {$a->idcourt} nell’attività <b>{$a->modulename}</b> appartiene a <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_depositor'] = 'Il documento nell\'attività <b>{$a->modulename}</b> è stato inviato dall\'utente Moodle <b>{$a->lastname} {$a->firstname}</b>.';
$string['compilatio_display_student_report'] = 'Gli studenti possono visualizzare le analisi';
$string['compilatio_display_student_report_help'] = 'L\'analisi di un documento presenta i passaggi simili alle fonti rilevate e la loro percentuale di similitudine';
$string['compilatio_display_student_score'] = 'Visualizza la percentuale di similitudine aglii studenti';
$string['compilatio_display_student_score_help'] = 'La percentuale di similitudine indica la quantità di testo nel documento che è stato rilevato all\'interno di altri documenti';
$string['compilatio_help_assign'] = 'Ottenere aiuto per il plug-in Compilatio';
$string['compilatio_iddocument'] = 'Identificatore del documento';
$string['compilatio_search'] = 'Cerca';
$string['compilatio_search_help'] = 'Puoi trovare il depositante di un documento recuperando l\'identificatore del documento dalle fonti del rapporto di analisi.';
$string['compilatio_search_notfound'] = 'Non è stato trovato nessun documento con questo identificatore tra i documenti caricati sulla piattaforma Moodle.';
$string['compilatio_search_tab'] = 'Trova il depositante di un documento.';
$string['compilatio_studentemail'] = 'Invia email allo studente';
$string['compilatio_studentemail_help'] = 'Consente di inviare email allo studente a valle dell\'analisi di un documento per avvisarlo che è disponibile l\'analisi.';
$string['compilatioapi'] = 'Indirizzo API Compilatio';
$string['compilatioapi_help'] = 'L\'indirizzo delle API Compilatio';
$string['compilatiodate'] = 'Data di attivazione';
$string['compilatiodate_help'] = 'Clicca su "Abilita" se si desidera che questa configurazione API sia attivata automaticamente in una data desiderata. Lasciare la data in bianco se si desidera attivarla subito.';
$string['compilatiodefaults'] = 'Valori di default per Compilatio';
$string['compilatioenableplugin'] = 'Attivare Compilatio per {$a}';
$string['compilatioexplain'] = 'Per maggiori informazioni su questo plug-in, visita: <a href="http://www.compilatio.net/it/" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'Chiave API';
$string['compilatiopassword_help'] = 'Codice personale fornito da Compilatio per accedere alle API';
$string['context'] = 'Contesto';
$string['cron_check'] = 'Il plugin delle attività pianificate "send_files" è stato eseguito per l\'ultima volta il {$a}.';
$string['cron_check_never_called'] = 'Il plugin delle attività pianificate "send_files" non è mai stato eseguito dall\'attivazione del plugin. Potrebbe essere configurato in modo errato sul tuo server.';
$string['cron_check_not_ok'] = 'Il plugin delle attività pianificate "send_files" non è stato eseguito nell\'ultima ora.';
$string['cron_frequency'] = 'Sembra sia eseguito ogni {$a} minuti.';
$string['cron_recommandation'] = 'Per i compiti pianificati del plugin Compilatio, consigliamo di utilizzare un ritardo inferiore a 15 minuti tra ogni esecuzione.';
$string['defaultindexing'] = 'Aggiungere documenti nel database dei documenti';
$string['defaultindexing_help'] = 'Sì: aggiungere documenti nel database dei documenti. Questi documenti saranno utilizzati come materiale di confronto per analisi future.
    No: i documenti non vengono aggiunti al database dei documenti e non saranno utilizzati per i confronti.';
$string['defaults_desc'] = 'I parametri seguenti sono utilizzati come valori di default nelle attività di Moodle dove è integrato Compilatio';
$string['defaultupdated'] = 'I valori di default sono stati aggiornati';
$string['detailed'] = 'Rapporto dettagliato';
$string['detailed_error_analysis_failed'] = 'L\'analisi di questi documenti non ha funzionato correttamente. È possibile ripristinare questi documenti.';
$string['detailed_error_not_found'] = 'Questi documenti non sono stati trovati. Contattare l\'amministratore di Moodle. Errore: documento non trovato per questa chiave API.';
$string['detailed_error_sending_failed'] = 'Non è stato possibile inviare questi documenti a Compilatio. È possibile inviare nuovamente questi documenti.';
$string['detailed_error_too_large'] = 'Questi documenti non hanno potuto essere analizzati da Compilatio perché troppo grandi (dimensione massima: {$a} MB).';
$string['detailed_error_too_long'] = 'Questi documenti non hanno potuto essere analizzati da Compilatio perché contenevano troppe parole (dimensione massima: {$a} parole).';
$string['detailed_error_too_short'] = 'Questi documenti non hanno potuto essere analizzati da Compilatio perché non contenevano abbastanza parole (dimensione minima: {$a} parole).';
$string['detailed_error_unsupported'] = 'Questi documenti non hanno potuto essere analizzati da Compilatio perché il loro formato non è supportato.';
$string['disable_ssl_verification'] = 'Ignora la verifica del certificato SSL.';
$string['disable_ssl_verification_help'] = 'Abilitare l\'opzione in caso di problemi di verifica dei certificati SSL o se si verificano errori nell\'invio di file a Compilatio.';
$string['disclaimer_data'] = 'Attivando Compilatio, accetti che delle informazioni riguardanti la configurazione della piattaforma Moodle saranno raccolti in modo da facilitare il supporto tecnico e la manutenzione del servizio.';
$string['display_notifications'] = 'Visualizza le notifiche';
$string['display_settings_frame'] = 'Impostazioni di visualizzazione dei punteggi';
$string['display_stats'] = 'Visualizza le statistiche su questa attività';
$string['display_stats_per_student'] = 'Visualizzare le statistiche per studente su questa attività';
$string['document_deleting'] = 'Eliminazione dei documenti';
$string['document_sent'] = '{$a} documenti inviati.';
$string['documents_analyzed'] = 'Sono stati analizzati {$a->countAnalyzed} documenti su {$a->documentsCount}.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documenti tra {$a->greenThreshold}% e {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documenti superiori a {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documenti inferiori {$a->greenThreshold}%';
$string['documents_analyzing'] = '{$a} documenti in corso di analisi';
$string['documents_failed'] = 'Documenti dove l\'analisi non ha funzionato correttamente: {$a}.';
$string['documents_in_queue'] = '{$a} documenti in attesa di analisi';
$string['documents_notfound'] = 'Documenti che non sono stati trovati: {$a}.';
$string['documents_number'] = 'Documenti analizzati';
$string['download_report_failed'] = 'Si è verificato un errore durante il download del rapporto di analisi.';
$string['element_included_in_subscription'] = 'La tua sottoscrizione include: <ul><li>rilevamento di similitudine</li><li>rilevamento di testi alterati';
$string['enable_activities_title'] = 'Abilita la compilazione per le attività';
$string['enable_analyses_auto'] = 'Possibilità di avviare direttamente le analisi';
$string['enable_analyses_auto_help'] = 'Questa opzione permetterà agli insegnanti di attivare il lancio automatico dell\'analisi dei documenti su un\'attività (cioè immediatamente dopo che sono stati inviati).<br>
Tieni presente che in questo caso:

<ul>
    <li>Il numero di scansioni eseguite dalla tua istituzione potrebbe essere significativamente più alto.</li>
    <li>I documenti dei primi mittenti non vengono confrontati con quelli degli ultimi depositanti.</li>
</ul>
Per confrontare tutti i documenti di un compito, è necessario utilizzare l\'analisi "programmata", scegliendo una data dopo la scadenza della consegna.';
$string['enable_javascript'] = 'E\' necessario attivare JavaScript per usufruire di tutte le funzionalità del plug-in Compilatio.<br/> <a href="http://www.enable-javascript.com/it/"
target="_blank"> istruzioni su come abilitare JavaScript nel browser utilizzato</a>.';
$string['enable_mod_assign'] = 'Assegnazioni';
$string['enable_mod_forum'] = 'Forum';
$string['enable_mod_quiz'] = 'Quiz';
$string['enable_mod_workshop'] = 'Laboratori';
$string['enable_search_tab'] = 'Strumento di ricerca per identificare l\'autore di un documento.';
$string['enable_search_tab_help'] = 'Lo strumento di ricerca consente di cercare il nome e il cognome di uno studente in base a un identificatore di documento visibile nei rapporti di analisi tra tutti i documenti presenti sulla vostra piattaforma.';
$string['enable_show_reports'] = 'Possibilità di mostrare i rapporti di analisi agli studenti';
$string['enable_student_analyses'] = 'Possibilità di consentire l\'analisi delle bozze da parte degli studenti.';
$string['enable_student_analyses_help'] = 'Questa opzione consente agli insegnanti di attivare su un\'attività l\'analisi da parte degli studenti dei loro documenti presentati in modalità bozza con Compilatio Magister, prima dell\'invio definitivo al docente.';
$string['enabledandworking'] = 'Il plug-in Compilatio è attivo e funzionale.';
$string['error'] = 'Errore';
$string['errors'] = 'Errori';
$string['excluded_from_score'] = 'Escluso dal punteggio:';
$string['export_csv'] = 'Esporti i dati di questa attività in un file CSV.';
$string['export_csv_per_student'] = 'Esportazione dei risultati di questo studente in un file CSV';
$string['export_global_csv'] = 'Clicca per esportare i dati in formato CSV';
$string['export_raw_csv'] = 'Clicca per esportare i dati grezzi in formato CSV';
$string['extraction_in_progress'] = 'estrazione del documento in corso, si prega di riprovare più tardi';
$string['failed'] = 'L\'analisi di questo documento non ha funzionato correttamente.';
$string['failedanalysis'] = 'Compilatio non è riuscita ad analizzare il vostro documento:';
$string['failedanalysis_files'] = 'L\'analisi dei seguenti documenti non ha funzionato correttamente. È possibile resettare questi documenti e rilanciare l\'analisi:';
$string['file'] = 'File';
$string['filename'] = 'Nome del file';
$string['filereset'] = 'Un documento è stato azzerato per ri-caricamento su Compilatio';
$string['firstname'] = 'Nome';
$string['formapikey'] = 'Chiave API';
$string['formcheck'] = 'Verifica';
$string['formdelete'] = 'Eliminare';
$string['formenabled'] = 'Abilitato';
$string['formstartdate'] = 'Data di attivazione';
$string['formurl'] = 'URL delle API';
$string['get_scores'] = 'Recupera i punteggi di plagio da Compilatio';
$string['global_statistics'] = 'Statistiche globali';
$string['global_statistics_description'] = 'Tutti i dati dei documenti inviati a Compilatio.';
$string['globalscore'] = 'Totale';
$string['goto_compilatio_service_status'] = 'Visualizza lo stato dei servizi di Compilatio.';
$string['goto_helpcenter'] = 'Clicca sul punto di domanda per aprire una nuova finestra e collegarti al centro di assistenza Compilatio.';
$string['green_threshold'] = 'Verde fino a';
$string['help_compilatio_format_content'] = 'Compilatio gestisce la maggior parte dei formati utilizzati nei processori di testo e su Internet. I seguenti formati sono supportati:';
$string['helpcenter'] = 'Accedi al Centro di assistenza di Compilatio per l\'utilizzo del plugin Compilatio in Moodle.';
$string['helpcenter_error'] = 'Non è stato possibile connetterti automaticamente al Centro assistenza. Si prega di riprovare più tardi o di andarci direttamente utilizzando il seguente link:';
$string['hide_area'] = 'Nascondi le informazioni Compilatio';
$string['immediately'] = 'Immediatamente';
$string['include_percentage_in_suspect_text'] = 'Includere nella percentuale di testi sospetti visualizzati:';
$string['indexed_document'] = 'Documento aggiunto al database dei documenti della tua istituzione. Il suo contenuto potrebbe essere utilizzato per rilevare similitudini con altri documenti.';
$string['indexing_state'] = 'Aggiungi i documenti nel Database dei documenti';
$string['indexing_state_help'] = 'Sì: aggiunga i documenti nel database dei documenti. Questi documenti saranno utilizzati come materiale di confronto per le analisi future.
No: i documenti non vengono aggiunti al database dei documenti e non saranno utilizzati per i confronti.';
$string['info_cm_activated'] = 'I documenti inviati in questa attività vengono caricati sull\'account Compilatio {$a}.<br>Tutti gli insegnanti iscritti a questo corso possono utilizzare Compilatio su questa attività.';
$string['info_cm_activation'] = 'Attivando Compilatio su questa attività, i documenti inviati verranno caricati sul tuo account Compilatio {$a}.<br>Tutti gli insegnanti iscritti a questo corso potranno utilizzare Compilatio su questa attività.';
$string['information_settings'] = 'Informazioni';
$string['keep_docs_indexed'] = 'Conserva i documenti nella biblioteca di riferimento';
$string['keep_docs_indexed_help'] = 'Durante l\'eliminazione o reset di un corso,  oppure durante l’eliminazione di un\'attività, è possibile scegliere di eliminare definitivamente i documenti inviati a Compilatio o di conservarli nella biblioteca di riferimento (solo il testo sarà conservato e verrà utilizzato come materiale di confronto per le prossime analisi).';
$string['lastname'] = 'Cognome';
$string['loading'] = 'Caricamento in corso, si prega di attendere...';
$string['manual_analysis'] = 'L\'analisi di questo documento deve essere avviata manualmente';
$string['manual_send_confirmation'] = '{$a} documenti inviati a Compilatio';
$string['max_attempts_reach_files'] = 'I seguenti  file non sono stati analizzati da Compilatio. Sono state avviate troppe analisi e non è possibile avviarle di nuovo:';
$string['max_file_size'] = 'I file non devono superare <strong>{$a} MB</strong>.';
$string['max_file_size_allowed'] = 'Dimensione massima dei documenti : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Massimo';
$string['migration_apikey'] = 'Inserisca la nuova chiave API v5';
$string['migration_btn'] = 'Avviare l\'aggiornamento dei dati memorizzati in Moodle';
$string['migration_completed'] = 'Aggiornamento completato:';
$string['migration_failed_doc'] = 'non è stato possibile aggiornare il documento, è possibile riprovare ad aggiornare questi documenti al termine della migrazione.';
$string['migration_form_title'] = 'Avviare l\'aggiornamento dei dati memorizzati in Moodle, per completare la migrazione dalla v4 alla v5.';
$string['migration_info'] = 'Compilatio sta implementando una nuova piattaforma tecnica v5 per tutti i suoi clienti.
    Quando le verrà richiesto dal team tecnico, dovrà eseguire un\'azione per completare questa migrazione.';
$string['migration_inprogress'] = 'L\'aggiornamento è in corso è può richiedere diverse ore <small>(è possibile uscire da questa pagina durante l\'aggiornamento)</small>.';
$string['migration_np'] = 'È possibile utilizzare il plugin Compilatio anche se la migrazione non è terminata.';
$string['migration_restart'] = 'Riprova';
$string['migration_success_doc'] = 'i documenti sono stati aggiornati';
$string['migration_task'] = 'Aggiornare i documenti dalla v4 alla v5';
$string['migration_title'] = 'Migrazione da v4 a v5';
$string['migration_toupdate_doc'] = 'documenti da aggiornare';
$string['minimum'] = 'Minimo';
$string['news_analysis_perturbated'] = 'Analisi Compilatio.net con piccoli disguidi';
$string['news_incident'] = 'Incidente Compilatio.net';
$string['news_maintenance'] = 'Manutenzione Compilatio.net';
$string['news_update'] = 'Aggiornamento Compilatio.net';
$string['next_student'] = 'Prossimo studente';
$string['no_document_analysed'] = 'Nessun documento analizzato';
$string['no_document_available_for_analysis'] = 'Nessun documento disponibile per le analisi';
$string['no_document_to_display'] = 'Nessun documento da visualizzare';
$string['no_documents_available'] = 'Non sono disponibili documenti da analizzare in questa attività.';
$string['no_notification'] = 'Nessuna notifica';
$string['no_statistics_yet'] = 'Non sono ancora stati analizzati documenti.';
$string['no_students_finished_quiz'] = 'Nessuno studente ha completato il quiz';
$string['not_analysed'] = 'non analizzato';
$string['not_analyzed'] = 'Non è stato possibile analizzare i seguenti documenti:';
$string['not_analyzed_extracting'] = 'I seguenti documenti non possono essere analizzati perché sono in fase di estrazione, riprovare più tardi';
$string['not_analyzed_toolong'] = '{$a} documenti non sono stati analizzati perché contengono troppe parole.';
$string['not_analyzed_tooshort'] = 'I documenti {$a} non sono stati analizzati perché non contengono abbastanza parole.';
$string['not_analyzed_unextractable'] = 'I documenti {$a} non sono stati analizzati perché non è stato possibile estrarre il loro contenuto.';
$string['not_analyzed_unsupported'] = '{$a} documenti non sono stati analizzati perché il loro formato non è supportato.';
$string['not_indexed_document'] = 'Documento non aggiunto al database dei documenti della vostra istituzione. Il suo contenuto non sarà utilizzato per individuare le somiglianze con altri documenti.';
$string['not_sent'] = 'Non è stato possibile inviare i seguenti documenti:';
$string['notfound'] = 'Questo documento non è stato trovato. Per favore contattare l\'amministratore di Moodle. Errore: documento non trovato per questa chiave API.';
$string['notifications'] = 'Notifiche';
$string['numeric_threshold'] = 'La soglia deve essere un numero.';
$string['open'] = 'Aperto';
$string['orange_threshold'] = 'Arancione fino a';
$string['other_analysis_options'] = 'Altre opzioni di analisi';
$string['owner_file'] = 'RGPD e proprietà dei testi';
$string['owner_file_school'] = 'L\'organizzazione è proprietaria degli elaborati';
$string['owner_file_school_details'] = 'In caso di richiesta di cancellazione dei dati personali di un allievo, il contenuto dei suoi elaborati sarà disponibile per un confronto futuro con eventuali nuovi testi. Al termine del contratto con Compilatio, tutti i dati personali del vostro stabilimento – compresi gli elaborati caricati sul sito – saranno cancellati entro i termini contrattuali.';
$string['owner_file_student'] = 'L\'allievo è l\'unico proprietario dei suoi elaborati';
$string['owner_file_student_details'] = 'In caso di richiesta di cancellazione dei dati personali di uno studente, i suoi elaborati saranno cancellati dalla piattaforma Moodle e dalla biblioteca di riferimento di Compilatio. Gli elaborati non saranno più disponibili per un confronto con nuovi documenti.';
$string['pending'] = 'Il documento è in attesa di essere inviato a Compilatio';
$string['pending_status'] = 'In attesa';
$string['planned'] = 'Pianificato';
$string['plugin_disabled'] = 'Il plug-in non è attivo.';
$string['plugin_disabled_assign'] = 'Il plug-in non è attivo per i compiti.';
$string['plugin_disabled_forum'] = 'Il plug-in non è attivo per i forum.';
$string['plugin_disabled_quiz'] = 'Il plugin non è abilitato per i Quiz.';
$string['plugin_disabled_workshop'] = 'Il plug-in non è attivo per i workshop.';
$string['plugin_enabled'] = 'Il plug-in è attivo per la piattaforma Moodle';
$string['plugin_enabled_assign'] = 'Il plug-in è attivo per i compiti';
$string['plugin_enabled_forum'] = 'Il plug-in è attivo per i forum';
$string['plugin_enabled_quiz'] = 'Il plugin è abilitato per i Quiz.';
$string['plugin_enabled_workshop'] = 'Il plug-in è attivo per i laboratori';
$string['pluginname'] = 'Plug-in Compilatio per il rilevamento plagio';
$string['previous_student'] = 'Studente precedente';
$string['previouslysubmitted'] = 'Inviato in precedenza come';
$string['privacy:metadata:core_files'] = 'File caricati o creati da un campo di input';
$string['privacy:metadata:core_plagiarism'] = 'Questo plugin è chiamato dal sottosistema di prevenzione plagio di Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Informazioni sui documenti nel database Compilatio';
$string['privacy:metadata:external_compilatio_document:authors'] = 'Nome, cognome ed e-mail dell\'utente Moodle (o dei membri del gruppo) che ha inviato il file.';
$string['privacy:metadata:external_compilatio_document:depositor'] = 'Nome, cognome ed e-mail dell\'utente Moodle che ha inviato il file.';
$string['privacy:metadata:external_compilatio_document:filename'] = 'Nome del documento inviato';
$string['privacy:metadata:external_compilatio_user'] = 'Informazioni sul docente che ha creato un modulo del corso con Compilatio';
$string['privacy:metadata:external_compilatio_user:email'] = 'Email del docente';
$string['privacy:metadata:external_compilatio_user:firstname'] = 'Nome del docente';
$string['privacy:metadata:external_compilatio_user:lastname'] = 'Cognome del docente';
$string['privacy:metadata:external_compilatio_user:username'] = 'Email dell\'insegnante';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Informazioni sui file inviati a Compilatio nel database dei plugin';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'Nome (eventualmente generato automaticamente) del documento inviato';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'L\'identificante dell\'utente Moodle che ha effettuato l’invio del documento';
$string['privacy:metadata:plagiarism_compilatio_user'] = 'Informazioni sul docente che ha creato un modulo del corso con Compilatio';
$string['privacy:metadata:plagiarism_compilatio_user:compilatioid'] = 'ID Compilatio del docente';
$string['privacy:metadata:plagiarism_compilatio_user:userid'] = 'ID Moodle dell\'insegnante';
$string['processing_doc'] = 'Il documento è in corso di analisi da parte di Compilatio';
$string['programmed_analysis_future'] = 'I documenti verranno analizzati da Compilatio il {$a}.';
$string['programmed_analysis_past'] = 'I documenti sono stati inviati  a Compilatio per l\'analisi il {$a}.';
$string['progress'] = 'Progressi';
$string['queue'] = 'Coda';
$string['queued'] = 'Il documento è in attesa di analisi e a breve sarà analizzato da Compilatio';
$string['queuing_docs'] = '{$a} documento/i in attesa di analisi';
$string['quiz_help'] = 'Saranno analizzate solo le domande di tipo saggio la cui risposta contenga almeno {$a} parole.';
$string['read_only_apikey'] = 'La chiave API di sola lettura non consente di caricare o analizzare documenti.';
$string['red_threshold'] = 'Rosso oltre';
$string['redirect_report_failed'] = 'Si è verificato un errore durante il recupero del rapporto di analisi. Riprovare più tardi o contattare l\'assistenza (support@compilatio.net) se il problema persiste.';
$string['report'] = 'report';
$string['reporttype'] = 'Rapporto disponibile per gli studenti';
$string['reporttype_help'] = '<p>Esistono 2 opzioni possibili:</p>
<ul>
    <li><strong>Certificato di analisi:</strong> Lo studente avrà accesso al certificato di analisi del suo documento.</li>
    <li><strong>Rapporto dettagliato:</strong> Lo studente avrà accesso alla versione PDF del rapporto.</li>
</ul>';
$string['reset'] = 'Reimposta';
$string['reset_docs_in_error'] = 'Azzeramento dei documenti per errore';
$string['reset_docs_in_error_in_progress'] = 'Azzeramento dei documenti in errore in corso';
$string['reset_failed_document'] = 'Reset dei documenti a causa di un errore';
$string['reset_failed_document_in_progress'] = 'È in corso il reset dei documento a causa di un errore';
$string['reset_failed_document_title'] = 'Reset dei documenti a causa di un errore:';
$string['response_type'] = 'Tipo di risposta';
$string['results'] = 'Risultati';
$string['results_by_student'] = 'Risultati per studente';
$string['saved_config_failed'] = '<strong>La combinazione chiave API - indirizzo inserito non è valida. Compilatio è disabilitato, si prega di riprovare.<br/>
La pagina <a href="autodiagnosis.php">di auto-diagnosi</a> può aiutarti a configurare questo plugin.</strong><br/>
Errore:';
$string['savedconfigsuccess'] = 'I parametri sono stati salvati correttamente';
$string['score'] = 'Punteggio';
$string['score_settings_info'] = 'L\'aggiornamento dei punteggi riguarderà tutti i documenti analizzati nell\'assegnazione,<br> compresi quelli modificati individualmente.';
$string['see_all_notifications'] = 'Visualizza tutte le notifiche';
$string['select_a_student'] = 'Selezionare uno studente';
$string['send_all_documents'] = 'Inviare tutti i documenti';
$string['send_documents_in_progress'] = 'Invio di documenti in corso';
$string['send_files'] = 'Carica i file su Compilatio.net per il rilevamento del plagio';
$string['short_error_analysis_failed'] = 'analisi fallite.';
$string['short_error_not_found'] = 'documenti non trovati.';
$string['short_error_sending_failed'] = 'l\'invio non è riuscito.';
$string['short_error_too_large'] = 'documenti troppo grandi.';
$string['short_error_too_long'] = 'documenti troppo lunghi.';
$string['short_error_too_short'] = 'documenti troppo corti.';
$string['short_error_unsupported'] = 'documenti non supportati.';
$string['showstudentreport'] = 'Mostrare il rapporto di analisi allo studente';
$string['showstudentreport_help'] = 'Il rapporto di analisi fornisce una ripartizione delle parti dell\'elaborato che sono state plagiate e la posizione delle fonti rilevate.';
$string['showstudentscore'] = 'Mostra il punteggio dei testi sospetti allo studente';
$string['showstudentscore_help'] = 'Il punteggio dei testi sospetti è la percentuale di invii potenzialmente non autentici.';
$string['showwhenclosed'] = 'L\'attività chiude';
$string['similarities'] = 'Testi sospetti';
$string['similarities_disclaimer'] = 'È possibile analizzare i testi sospetti nei documenti di questa attività con <a href=\'http://www.compilatio.net/it\' target=\'_blank\'>Compilatio</a>.<br/>
    Attenzione: i testi sospetti rilevati durante l\'analisi non significano necessariamente plagio. Il rapporto di analisi aiuta a identificare se i testi sospetti corrispondono a una citazione adeguata o a un plagio.';
$string['similarity_percent'] = '% di testi sospetti';
$string['simscore'] = 'Similitudini';
$string['simscore_percentage'] = 'Percentuale di similitudini';
$string['start_all_analysis'] = 'Analizza tutti i documenti';
$string['start_analysis_in_progress'] = 'Lancio delle analisi';
$string['start_analysis_title'] = 'Avvio manuale dell\'analisi';
$string['start_selected_files_analysis'] = 'Analizzare i documenti selezionati';
$string['start_selected_questions_analysis'] = 'Analizzare le domande selezionate';
$string['startallcompilatioanalysis'] = 'Analizza tutti i documenti';
$string['startanalysis'] = 'Avvia analisi';
$string['statistics_title'] = 'Statistiche';
$string['stats_avg'] = 'Media';
$string['stats_error_unknown'] = 'errori sconosciuti';
$string['stats_errors'] = 'Errori';
$string['stats_failed'] = 'Analisi fallite';
$string['stats_max'] = 'Massimo';
$string['stats_min'] = 'Minimo';
$string['stats_notfound'] = 'File non trovato';
$string['stats_score'] = 'Percentuale di testi sospetti';
$string['stats_threshold'] = 'Numero di documenti per soglia';
$string['stats_toolong'] = 'Il file contiene troppe parole';
$string['stats_tooshort'] = 'Il file non contiene abbastanza parole';
$string['stats_unextractable'] = 'Il contenuto del file non può essere estratto';
$string['stats_unsupported'] = 'Formato di file non supportato';
$string['student'] = 'Studente';
$string['student_analyse'] = 'L\'analisi può essere avviata dallo studente';
$string['student_analyze'] = 'Analisi degli studenti';
$string['student_help'] = 'Puoi analizzare la tua bozza con Compilatio Magister, per misurare le similitudini nel testo dei tuoi file.<br/>
I contenuti della tua bozza non verranno utilizzati da Compilatio come materiale di confronto per analisi future.<br/>
Tuttavia, il tuo insegnante avrà accesso a questo rapporto di analisi.';
$string['student_start_analyze'] = 'L\'analisi può essere iniziata dallo studente';
$string['studentanalyses'] = 'Consentire agli studenti di analizzare i loro documenti';
$string['studentanalyses_help'] = 'Questo permette agli studenti di analizzare le loro bozze con Compilatio Magister, prima della consegna finale al docente.';
$string['studentdisclosuredefault'] = 'Tutti i file caricati qui saranno sottoposti al servizio di rilevamento di testi sospetti Compilatio';
$string['studentemailcontent'] = 'Il documento che caricato in {$a->modulename} in {$a->coursename} è stato analizzato dal software di rilevamento del plagio Compilatio {$a->modulelink}';
$string['studentemailsubject'] = 'Il documento è stato analizzato da Compilatio';
$string['students_disclosure'] = 'Divulga agli studenti';
$string['students_disclosure_help'] = 'Il testo sarà visibile a tutti gli studenti sulla pagina di upload del documento.';
$string['subscription'] = '<b>Informazioni sull\'abbonamento:</b>';
$string['subscription_analysis_count'] = 'Documenti analizzati: {$a->usage} di {$a->value}';
$string['subscription_analysis_page_count'] = 'Pagine analizzate: {$a->usage} di {$a->value}';
$string['subscription_end'] = 'Data di fine inclusa:';
$string['subscription_start'] = 'Data di inizio:';
$string['suspect_words/total_words'] = 'Parole sospette / Parole totali';
$string['suspect_words_quiz_on_total'] = 'Parole sospette / <br>Parole totali';
$string['tabs_title_help'] = 'Aiuto';
$string['tabs_title_notifications'] = 'Notifiche';
$string['tabs_title_stats'] = 'Statistiche';
$string['teacher'] = 'Docente';
$string['teacher_features_title'] = 'Funzioni abilitate per gli insegnanti';
$string['terms_of_service_info'] = '<a href=\'{$a}\'>Termini di servizio</a> di Compilatio';
$string['text'] = 'Testo';
$string['thresholds_description'] = 'Indicare la soglia che si desidera utilizzare per facilitare la ricerca del rapporto di analisi (% di testi sospetti):';
$string['thresholds_settings'] = 'Personalizzazione delle soglie per la percentuale di similitudini:';
$string['timesubmitted'] = 'Inviato a Compilatio il';
$string['title_analysing'] = 'Compilatio sta analizzando questo file.';
$string['title_error_analysis_failed'] = 'L\'analisi di questo documento non è stata eseguita correttamente.';
$string['title_error_not_found'] = 'Questo documento non è stato trovato. Si prega di contattare l\'amministratore di Moodle. Errore: documento non trovato per questa chiave API.';
$string['title_error_sending_failed'] = 'Si è verificato un errore nel tentativo di inviare questo file a Compilatio';
$string['title_error_too_large'] = 'Questo file è troppo grande per essere elaborato da Compilatio. Dimensione massima: {$a} MB';
$string['title_error_too_long'] = 'Questo documento contiene troppe parole per essere analizzato. Dimensione massima: {$a} parole';
$string['title_error_too_short'] = 'Questo documento non contiene abbastanza parole per essere elaborato da Compilatio. Dimensione minima: {$a} parole';
$string['title_error_unsupported'] = 'Questo tipo di file non è supportato da Compilatio';
$string['title_planned'] = 'Questo file verrà elaborato su {$a}';
$string['title_queue'] = 'Il documento è ora in coda e sarà analizzato a breve da Compilatio';
$string['title_score'] = 'Analisi completata: {$a}% di testi sospetti.';
$string['title_score_teacher'] = 'Se nel rapporto sono state ignorate alcune fonti, fare clic qui per aggiornare il punteggio.';
$string['title_sent'] = 'Inizio analisi';
$string['title_unsent'] = 'Inviare il documento a Compilatio';
$string['toolarge'] = 'Il documento è troppo esteso per essere analizzato da Compilatio. Grandezza massima : {$a->Mo} MB';
$string['toolong'] = 'Questo documento contiene troppe parole per essere analizzato. Dimensione massima: {$a} parole';
$string['toolong_files'] = 'I seguenti file non possono essere analizzati da Compilatio perché contengono troppe parole (dimensione massima: {$a} parole):';
$string['tooltip_detailed_scores'] = '% di testi sospetti, tra cui:';
$string['tooshort'] = 'Questo documento non contiene abbastanza parole per essere elaborato da Compilatio. Dimensione minima: {$a} parole';
$string['tooshort_files'] = 'I seguenti file non possono essere analizzati da Compilatio perché non contengono abbastanza parole (Dimensione minima: {$a} parole):';
$string['total'] = 'Totale';
$string['trigger_analyses'] = 'Avvia le analisi di Compilatio.';
$string['unextractable'] = 'Non è stato possibile estrarre il contenuto di questo documento';
$string['unextractable_files'] = 'I seguenti file non possono essere analizzati da Compilatio perché il loro contenuto non può essere estratto:';
$string['unextractablefile'] = 'Il testo del documento non può essere estratto.';
$string['unknownlang'] = 'Attenzione, la lingua di alcuni passaggi di questo documento non è stata riconosciuta.';
$string['unknownwarning'] = 'Si è verificato un errore durante l\'invio del documento a Compilatio';
$string['unmeasured'] = 'non misurato';
$string['unsent_docs'] = 'Questa attività contiene documenti non presentati a Compilatio.';
$string['unsent_documents'] = 'Documenti non inviati';
$string['unsent_documents_content'] = 'Questa attività contiene documenti non presentati a Compilatio.';
$string['unsupported'] = 'Documento non supportato';
$string['unsupported_files'] = 'Non è stato possibile analizzare i seguenti documenti con Compiltio.net perché il loro formato non è supportato:';
$string['unsupportedfiletype'] = 'Questo tipo di documento non è supportato da Compilatio';
$string['update_in_progress'] = 'Aggiornamento informazioni';
$string['update_meta'] = 'Eseguire le operazioni programmate di Compilatio';
$string['updatecompilatioresults'] = 'Aggiorna le informazioni';
$string['updated_analysis'] = 'I risultati dell\'analisi Compilatio sono stati aggiornati';
$string['use_compilatio'] = 'Consenti il rilevamento delle similitudini con Compilatio';
$string['utlscore'] = 'Lingue non riconosciute';
$string['utlscore_percentage'] = 'Percentuale di tipi di lingue non riconosciute';
$string['waitingforanalysis'] = 'Questo file sarà processato su {$a}';
$string['webservice_not_ok'] = 'Non è stato possibile contattare il web service. È possibile che il firewall blocchi la connessione.';
$string['webservice_ok'] = 'Il server è in grado di contattare il webservice';
$string['webservice_unreachable'] = 'Compilatio non è attualmente disponibile. Ci scusiamo per l\'inconveniente.';
$string['webservice_unreachable_content'] = 'Il servizio Compilatio.net è attualmente non disponibile. Ci scusiamo per l\'interruzione momentanea';
$string['webservice_unreachable_title'] = 'Compilatio.net non è disponibile.';
$string['word'] = 'parole';
$string['word_limits'] = 'Per poter essere analizzato, un testo deve avere tra {$a->min} e {$a->max} parole.';
$string['wrong_apikey_type'] = 'La chiave API inserita non è valida, se hai recentemente aggiornato la versione del tuo plugin Compilatio, contatta il supporto (support@compilatio.net) per ottenere una nuova chiave.';
