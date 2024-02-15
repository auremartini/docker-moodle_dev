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
 * Strings for component 'auth_outage', language 'it', version '4.1'.
 *
 * @package     auth_outage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Quando l\'elenco degli IP consentiti è vuoto non bloccheremo nessuno. È possibile aggiungere il proprio indirizzo IP (<i>{$a->ip}</i>) e bloccare tutti gli altri IP';
$string['allowedipshasmyip'] = 'Il tuo IP (<i>{$a->ip}</i>) è presente nell\'elenco e non verrai bloccata/o durante un\'interruzione.';
$string['allowedipshasntmyip'] = 'Il tuo IP (<i>{$a->ip}</i>) non è nell\'elenco e verrai bloccata/o durante un\'interruzione.';
$string['allowedipsnoconfig'] = 'Il file config.php non ha l\'impostazione aggiuntiva per consentire il blocco tramite IP.<br />Per maggiori informazioni, consultare il file <a href="https://github.com/catalyst/moodle-auth_outage#installation" target="_blank">README.md</a>.';
$string['auth_outagedescription'] = 'Plugin aggiuntivo che avvisa gli utenti di un\'interruzione futura e impedisce loro di accedere una volta che questa è iniziata.';
$string['autostart'] = 'Avviare automaticamente la modalità manutenzione.';
$string['autostart_help'] = 'Se è selezionato, all\'inizio previsto dell\'interruzione si attiverà automaticamente la modalità di manutenzione di Moodle..';
$string['builtinallowediplist'] = 'Elenco IP consentiti';
$string['builtinallowediplist_desc'] = 'Un secondo elenco di IP consentiti che rende più facile avere alcuni IP forzati in config.php e altri modificabili nell\'interfaccia utente.';
$string['clicreateexamples'] = 'Creare un\'interruzione tra 10 secondi\\n\\n> php create.php -s=10';
$string['clicreatehelp'] = 'Crea una nuova interruzione.';
$string['clicreateparamautostart'] = 'deve essere Y o N. Stabilisce se l\'interruzione attiverà automaticamente la modalità di manutenzione.';
$string['clicreateparamblock'] = 'blocchi fino all\'avvio dell\'interruzione.';
$string['clicreateparamclone'] = 'clonare un\'altra interruzione, tranne che per l\'orario di inizio.';
$string['clicreateparamdescription'] = 'Descrizione del guasto';
$string['clicreateparamduration'] = 'descrizione dell\'interruzione.';
$string['clicreateparamhelp'] = 'Visualizza i parametri di aiuto';
$string['clicreateparamonlyid'] = 'fornisce solo il nuovo id dell\'interruzione, utile per gli script.';
$string['clicreateparamstart'] = 'tra quanti secondi deve iniziare l\'interruzione o tempo unix per iniziare l\'interruzione. Richiesto.';
$string['clicreateparamtitle'] = 'titolo dell\'interruzione.';
$string['clicreateparamwarn'] = 'quanti secondi prima inizierà a visualizzare un avviso.';
$string['clierrorinvalidvalue'] = 'Invalid value for parameter: {$a->param}';
$string['clierrorinvalidvalueemptystring'] = 'Valore non valido per il parametro: {$a->param}';
$string['clierrorinvalidvaluenegativenumber'] = 'Il parametro --{$a->param} deve essere un numero positivo.';
$string['clierrorinvalidvaluenotbool'] = 'Il parametro --{$a->param} deve essere impostato su Y o N';
$string['clierrorinvalidvaluenotid'] = 'Il parametro --{$a->param} deve essere un numero id';
$string['clierrorinvalidvaluenotnumber'] = 'Il parametro --{$a->param} deve essere un numero';
$string['clierrorinvalidvaluenotstring'] = 'Il parametro  --{$a->param} deve essere una stringa';
$string['clierrormissingparamaters'] = 'È necessario specificare l\'ora di inizio; per ulteriori informazioni, utilizzare --help.';
$string['clierroroutagechanged'] = 'L\'interruzione è stata modificata durante l\'attesa.';
$string['clierroroutageended'] = 'L\'interruzione è già terminata.';
$string['clierroroutagenotfound'] = 'Interruzione non trovata.';
$string['clifinishhelp'] = 'Termina un\'interruzione in corso.';
$string['clifinishnotongoing'] = 'L\'interruzione non è in corso.';
$string['clifinishparamactive'] = 'termina l\'interruzione attiva.';
$string['clifinishparamhelp'] = 'mostra i parametri di aiuto.';
$string['clifinishparamoutageid'] = 'l\'id dell\'interruzione da terminare.';
$string['cliinmaintenancemode'] = 'La modalità di manutenzione di Moodle è attiva. Usare "php admin/cli/maintenance.php --disable" per disattivarla prima che l\'interruzione termini.';
$string['clioutagecreated'] = 'Interruzione creata, id: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'È necessario utilizzare il parametro --outageid=# o --active, ma non entrambi.';
$string['cliwaitforithelp'] = 'Attende fino all\'inizio di un\'interruzione.';
$string['cliwaitforitoutagestarted'] = 'L\'interruzione è iniziata!';
$string['cliwaitforitoutagestartingin'] = 'L\'interruzione è iniziata!';
$string['cliwaitforitparamactive'] = 'L\'interruzione inizia tra {$a->countdown}.';
$string['cliwaitforitparamhelp'] = 'mostra i parametri di aiuto.';
$string['cliwaitforitparamoutageid'] = 'l\'id dell\'interruzione per a';
$string['cliwaitforitparamsleep'] = 'l\'id dell\'interruzione per attenderne l\'avvio.';
$string['cliwaitforitparamverbose'] = 'Abilita la modalitÀ dettagliata';
$string['clone'] = 'Duplica';
$string['configurationdisabled'] = 'l plugin di autenticazione "Outage" è disattivato. Abilitarlo nell\'amministrazione del sito e riprovare.';
$string['configurationinaccessiblewwwroot'] = 'Impossibile accedere a <b>{$a->wwwroot}</b> dal server, la creazione di interruzioni potrebbe fallire.';
$string['configurationwarning'] = 'Il plugin Outage non è configurato correttamente; per ulteriori informazioni, consultare <a href="https://github.com/catalyst/moodle-auth_outage/blob/master/README.md#installation" target="_blank">README.md</a>.';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Descrizione';
$string['defaultdescriptiondescription'] = 'Messaggio di avviso predefinito per le interruzioni. Utilizzare i segnaposto {{start}} e {{stop}} come richiesto.';
$string['defaultdescriptionvalue'] = 'È in corso una manutenzione programmata da {{inizio}} a {{arresto}} e il nostro sistema non sarà disponibile durante questo periodo.';
$string['defaultlayoutcss'] = 'Layout CSS';
$string['defaultlayoutcssdescription'] = 'Questo codice CSS può essere utilizzato per sovrascrivere il CSS della barra di avviso di interruzione.';
$string['defaultoutageautostart'] = 'Avvio automatico dell\'interruzione';
$string['defaultoutageautostartdescription'] = 'Se l\'interruzione deve attivare automaticamente la modalità di manutenzione una volta iniziata, bloccando l\'intero sito.';
$string['defaultoutageduration'] = 'Durata dell\'interruzione';
$string['defaultoutagedurationdescription'] = 'Durata predefinita (in minuti) di un\'interruzione.';
$string['defaulttime'] = 'Tempo predefinito';
$string['defaulttimedescription'] = 'L\'orario predefinito per la prossima interruzione, espresso in linguaggio naturale.
linguaggio naturale, ad esempio "giovedì prossimo alle 19:00". Vedi <a target=_blank href="https://www.php.net/manual/en/datetime.formats.php#datetime.formats.relative">PHP relative dates</a>';
$string['defaulttitle'] = 'Titolo';
$string['defaulttitledescription'] = 'Titolo predefinito per le interruzioni. Utilizzare i segnaposto {{start}} e {{stop}} come richiesto.';
$string['defaulttitlevalue'] = 'Sistema disattivato da {{avvio}} per {{durata}}.';
$string['defaultwarningduration'] = 'Durata dell\'avviso';
$string['defaultwarningdurationdescription'] = 'Tempo di preavviso predefinito (in minuti) per le interruzioni.';
$string['description'] = 'Descrizione pubblica';
$string['description_help'] = 'Una descrizione completa dell\'interruzione, visibile pubblicamente da tutti gli utenti.';
$string['finish'] = 'Terminare';
$string['info15secondsbefore'] = '15 secondi prima';
$string['infoendofoutage'] = 'fine dell\'interruzione';
$string['infofrom'] = 'Da:';
$string['infohidewarning'] = 'nessuna barra di avviso';
$string['infopagestaticgenerated'] = 'Questo avviso è stato generato in data {$a->ora}.';
$string['infostart'] = 'Inizia';
$string['infostartofwarning'] = 'inizio dell\'avviso';
$string['infostaticpage'] = 'pagina statica';
$string['infountil'] = 'Fino a:';
$string['ips_combine'] = 'Gli IP elencati sopra saranno combinati con quelli elencati sotto.';
$string['logformaintmodeconfig'] = 'Aggiornare la configurazione della modalità di manutenzione.';
$string['logformaintmodeconfigcomplete'] = 'Aggiornamento della configurazione della modalità di manutenzione completato.';
$string['menumanage'] = 'Gestire le interruzioni';
$string['menusettings'] = 'Impostazioni';
$string['messageoutagebackonline'] = 'Siamo di nuovo online!';
$string['messageoutagebackonlinedescription'] = 'È possibile riprendere la navigazione in modo sicuro.';
$string['messageoutageongoing'] = 'Torna online a {$a->stop}.';
$string['messageoutagewarning'] = 'Interruzione in {{countdown}}';
$string['na'] = 'n/d';
$string['notfound'] = 'Non sono state rilevate interruzioni.';
$string['outage:viewinfo'] = 'Visualizza le informazioni sull\'interruzione';
$string['outageclone'] = 'Clona l\'interruzione';
$string['outageclonecrumb'] = 'Duplica';
$string['outagecreate'] = 'Creare un\'interruzione';
$string['outagecreatecrumb'] = 'Crea';
$string['outagedelete'] = 'Cancellare l\'interruzione';
$string['outagedeletewarning'] = 'Stai per cancellare definitivamente l\'interruzione qui sotto. Questa operazione non può essere annullata.';
$string['outageduration'] = 'Durata dell\'interruzione';
$string['outageduration_help'] = 'Quanto dura l\'interruzione dopo l\'inizio.';
$string['outagedurationerrorinvalid'] = 'La durata dell\'interruzione deve essere positiva.';
$string['outageedit'] = 'Modifica l\'interruzione';
$string['outageeditcrumb'] = 'Modifica';
$string['outagefinish'] = 'Terminare l\'interruzione';
$string['outagefinishwarning'] = 'L\'interruzione sta per essere segnalata come terminata. Il sistema tornerà immediatamente online.';
$string['outageslistfuture'] = 'Interruzioni programmate';
$string['outageslistpast'] = 'Cronologia delle interruzioni';
$string['pluginname'] = 'Gestore delle interruzioni';
$string['privacy:no_data_reason'] = 'Il plugin di autenticazione Outage non memorizza alcun dato personale.';
$string['removeselectors'] = 'Rimuovi i selettori';
$string['removeselectorsdescription'] = 'Selettori CSS da rimuovere durante il rendering di una pagina statica di manutenzione a tema. Un selettore per riga.';
$string['settingssectiondefaults'] = 'Parametri di interruzione predefiniti';
$string['settingssectiondefaultsdescription'] = 'Configurare i valori predefiniti utilizzati per la creazione di nuove interruzioni.';
$string['settingssectionplugin'] = 'Configurazione del plugin';
$string['settingssectionplugindescription'] = 'Impostazioni generali del plugin di gestione delle interruzioni.';
$string['starttime'] = 'Data e orario di inizio';
$string['starttime_help'] = 'Data e ora di inizio dell\'interruzione, che impedisce l\'accesso generale al sistema.';
$string['tableheaderduration'] = 'Durata';
$string['tableheaderdurationactual'] = 'Durata effettiva';
$string['tableheaderdurationplanned'] = 'Durata prevista';
$string['tableheaderstartedtime'] = 'Iniziata il';
$string['tableheaderstarttime'] = 'Inizia il';
$string['tableheadertitle'] = 'Titolo';
$string['tableheaderwarnbefore'] = 'Avvisa prima';
$string['tablestarttimefutureformat'] = '{$a->absolute}<br />In {$a->relative}';
$string['tablestarttimepastformat'] = '{$a->absolute}<br />{$a->relative} fa';
$string['taskupdatestaticpage'] = 'Aggiornamento della pagina statica dell\'interruzione';
$string['textplaceholdershint'] = 'È possibile utilizzare {{start}}, {{stop}} e {{duration}} come segnaposto nel titolo e nella descrizione.';
$string['title'] = 'Titolo';
$string['title_help'] = 'Un titolo breve per questa interruzione. Verrà visualizzato sulla barra degli avvisi e sul calendario.';
$string['titleerrorinvalid'] = 'Il titolo non può essere lasciato in bianco.';
$string['titleerrortoolong'] = 'Il titolo non può contenere più di {$a} caratteri.';
$string['warningduration'] = 'Durata dell\'avviso';
$string['warningduration_help'] = 'Quanto tempo prima dell\'inizio dell\'interruzione deve essere visualizzato l\'avviso.';
$string['warningdurationerrorinvalid'] = 'La durata dell\'avviso deve essere positiva.';
$string['warningreenablemaintenancemode'] = 'Si noti che il salvataggio di questa interruzione riattiverà la modalità di manutenzione.<br />Se si desidera evitare questa situazione, deselezionare "Avvio automatico della modalità di manutenzione".';
