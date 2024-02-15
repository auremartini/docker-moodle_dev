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
 * Strings for component 'tool_wp', language 'it', version '4.1'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'Su questo ile';
$string['activitycompletion'] = 'Completamento attività';
$string['allcohorts'] = 'Tutti i gruppi globali';
$string['allcohorts_help'] = 'Tutti i gruppi globali gestibili da questo utente';
$string['alldata'] = 'Tutti i dati';
$string['allsystemcohorts'] = 'Tutti i gruppi globali a livello di sito';
$string['cantlocatefileindraftarea'] = 'Non è possibile trovare il file nell\'area draft dell\'utente';
$string['certificates'] = 'Certificati';
$string['certificatetemplates'] = 'Modelli di certificato';
$string['certificatetemplates_help'] = 'Include modelli di certificato, pagine ed elementi. I certificati rilasciati non saranno inclusi.';
$string['certificatetemplatesdetails'] = 'Dettagli del modello di certificato';
$string['change'] = 'Cambia';
$string['cleanupexpiredimportsexports'] = 'Pulizia esportazioni ed importazioni scadute';
$string['codechanged'] = 'La data di rilascio è stata cambiata da \'{$a->from}\' a \'{$a->to}\'';
$string['cohortdetails'] = 'Dettagli gruppo globale';
$string['cohortdetails_help'] = 'Dettagli gruppo globale per ciascuna istanza selezionata';
$string['cohortdetailswithmembers'] = 'Dettagli gruppo globale inclusi i membri';
$string['cohortdetailswithmembers_help'] = 'Dettagli gruppo globale incluse e informazioni di appartenenza. Gli utenti non sono inclusi.';
$string['cohortmembers'] = 'Membri del gruppo globale';
$string['cohortmembers_help'] = 'Saranno incluse solamente le informazioni di appartenenza al gruppo globale, senza gli utenti.';
$string['confighideparentlang'] = 'Nascondi i pack genitore di Workplace';
$string['confighideparentlangdesc'] = 'Il genitore del language pack di Workplace non sarà visualizzato nel menù delle lingue. Ad esempio, se è installato \'Italiano per Workplace (it_wp)\', non sarà visualizzato \'Italiano (it)\'.';
$string['confirmdeleteexport'] = 'Sei sicuro di eliminare questa esportazione?';
$string['confirmdeleteimport'] = 'Sei sicuro di eliminare questa importazione?';
$string['confirmprevbutton'] = 'Uscire dal sito? Le modifica apportare non saranno salvate.';
$string['confirmprocess'] = 'Cliccando su "Prosegui", il processo sarà avviato a breve, Sarà inviata una notifica non appena avrà completato.';
$string['conflictidnumber'] = 'Aggiungi un suffisso numerico al codice identificativo del gruppo globale';
$string['conflicts'] = 'Conflitti';
$string['conflictshortname'] = 'Aggiungi un suffisso numerico al titolo abbreviato del corso';
$string['content'] = 'Contenuto';
$string['copiedtoclipboard'] = 'Testo copiato nella clipboard';
$string['copytoclipboard'] = 'Copia nella clipboard';
$string['coursecontentbackup'] = 'Consenti backup del contenuto dei corsi';
$string['coursecontentbackupdesc'] = 'L\'impostazione specifica se gli utenti che possono effettuare backup dei corso possono includere il contenuto nelle esportazioni. Se non impostata, solamente gli utenti con il privilegio di modificare la configurazione del sito potranno esportare il contenuto dei corsi. Lasciando l\'impostazione disabilitata, si ridurranno le dimensioni dei file esportati.';
$string['coursereset'] = 'Reset corso per singoli utenti';
$string['coursesadmintab'] = 'Formazione';
$string['createdby'] = 'Creato da';
$string['csvcolumn'] = 'Colonne CSV';
$string['csvdefaultvalue'] = 'Valore di defaulr';
$string['csvfieldsmapping'] = 'Mappatura campi';
$string['csvmappingnotspecified'] = 'Non specificato';
$string['csvwpcolumn'] = 'Moodle Workplace';
$string['descriptionformat'] = 'Formato della descrizione';
$string['descriptionformatdefault'] = 'Formato di default della descrizione';
$string['doexport'] = 'Esporta';
$string['doimport'] = 'Importazione';
$string['doyouagreelicense'] = 'Hai letto e firmato la licenza di Moodle Workplace™?';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = 'Rilascio certificati';
$string['entitycertificateissueuser'] = 'Rilascio certificato: {$a}';
$string['entitycoursereset'] = 'Reset dati del corso';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'Non è possibile eliminare l’esportazione';
$string['errorcantdeleteimport'] = 'Non è possibile eliminare l’importazione';
$string['errorcohortsameidnumber'] = 'Grippi globali con lo stesso codice identificativo esistono già';
$string['errorcouldnotallocatecohort'] = 'Non è stato possibile assegnare l\'utente \'{$a->originaluserfullname}\' al gruppo globale \'{$a->name}\'';
$string['errorcouldnotimportissue'] = 'Non è stato possibile importare il certificato rilasciato di \'{$a}\'';
$string['errorcoursesdonotexist'] = 'Alcuni corsi non esistono';
$string['errorcoursessameshortname'] = 'Corsi con lo stesso titolo abbreviato esistono già';
$string['errorcustomfielddoesnotexist'] = 'Il campo personalizzato non esiste, non è possibile importare i dati \'{$a}\'';
$string['errorcustomfieldnotfound'] = 'Non è stata trovata l\'istanza del campo personalzzato';
$string['errorcustomfieldnotfounddetail'] = 'Non è stato trovato il campo personalizzato \'{$a}\'';
$string['errornegativenumber'] = 'È necessario inserire un numero non negativo';
$string['eventcoursemodulereset'] = 'Reset modulo corso per l\'utente';
$string['eventcoursereset'] = 'Reset corso per l\'utente';
$string['eventexportcreated'] = 'Creazione esportazione';
$string['eventexportdeleted'] = 'Eliminazione esportazione';
$string['eventexportupdated'] = 'Aggiornamento esportazione';
$string['eventimportcreated'] = 'Creazione importazione';
$string['eventimportdeleted'] = 'Eliminazione importazione';
$string['eventimportupdated'] = 'Aggiornamento importazione';
$string['export_content'] = 'Dettagli del modello di certificato';
$string['export_content_help'] = 'Modelli di certificato, pagine ed elementi,';
$string['export_issued'] = 'Certificati rilasciati';
$string['export_issued_help'] = 'Certificati rilasciati agli utenti, Non include copie degli utenti.';
$string['exportcoursecategoriescontent'] = 'Dettagli della categoria di corso';
$string['exportcoursecategoriescontent_help'] = 'Include i dettagli della categoria di corsi, Non include le assegnazioni di ruolo delle categorie e i filtri,';
$string['exportcoursecontent'] = 'Struttura del corso';
$string['exportcoursecontent_help'] = 'Include tutto ciò che appartiene al corso fatta eccezione per il contenuto.

Il file esportato conterrà le impostazioni di default di questo sito relativi ai backup standard dei corsi. Non saranno inclusi dati utenti.';
$string['exported'] = 'Esportato';
$string['exporter'] = 'Esportatore';
$string['exportercreatefrom'] = 'Crea esportazione da';
$string['exportercreatefrom_help'] = 'Consente di scegliere se esportare elementi dall\'intero sito oppure sono quelli associati al tenant corrente';
$string['exportercreatefromcurrenttenant'] = 'Tenant attuale';
$string['exporterdesc'] = 'Certificati rilasciati e modelli';
$string['exporterdescription'] = 'Corsi senza dati utente, utilizzando la configurazione dei default dei backup dei corsi';
$string['exporterdescriptioncategories'] = 'Categorie di corso e sotto categorie';
$string['exporterdescriptioncohorts'] = 'Gruppi globali, inclusi i membri senza dati utente';
$string['exporternotavailable'] = 'L\'esportatore \'{$a}\' non è disponibile';
$string['exporternotfound'] = 'Non è stato possibile trovare l\'esportatore \'{$a}\'';
$string['exporterrequirestenant'] = 'L\'esportatore \'{$a}\' richiede un tenant';
$string['exportersettingsinvalid'] = 'Le impostazioni dell\'esportatore non sono in un formato JSON valido';
$string['exportersettingsvalidationfailed'] = 'La validazione delle impostazioni dell\'esportatore non è andata a buon fine: {$a}';
$string['exportersunavailable'] = 'Non ci sono esportatori disponibili all\'uso';
$string['exportgeneralsettings'] = 'Impostazioni generali';
$string['exportgeneralsettingsdesc'] = 'Selezionare l\'esportatore da utilizzare. Nel passo successivo sarà possibile restringere la selezione e specificare quali elementi esportare.';
$string['exportimport'] = 'Migrazione';
$string['exportimportconflictsuffix'] = 'Aggiungi suffisso numerico al campo \'{$a}\'';
$string['exportimportentityunavailable'] = '{$a} (Non disponibile)';
$string['exportimporterrorentityexists'] = 'Un\'istanza con lo stesso  \'{$a}\' è già esistente';
$string['exportimportfieldchanged'] = 'Il campo è stato cambiato da \'{$a->from}\' a \'{$a->to}\'';
$string['exportimportsettings'] = 'Impostazioni migrazione';
$string['exportimportsitecontent'] = 'Contenuto: corsi, categorie, programmi e certificazioni';
$string['exportimportsitedescription'] = 'l\'intero contenuto del sito inclusi tutti i tenant e i relativi elementi. I backup dei corsi includeranno tutti i contenuti e gli utenti, fatta eccezione per i log';
$string['exportimportsiteerror'] = 'Non è stato possibile importare il sito';
$string['exportimportsitesame'] = 'Non è possibile importare le esportazioni generate nello stesso sito';
$string['exportimportsitesuccess'] = 'Sito importato';
$string['exportimportstatuscompleted'] = 'Completata correttamente';
$string['exportimportstatuscreated'] = 'Non pronta';
$string['exportimportstatuserror'] = 'Errore';
$string['exportimportstatusinprogress'] = 'In svolgimento';
$string['exportimportstatusscheduled'] = 'Pianificata';
$string['exportimportuserfieldserror'] = 'Non è stato possibile importare il campo del profilo utente \'{$a}\'';
$string['exportimportusersall'] = 'Seleziona tutti gli utenti';
$string['exportimportusersdescription'] = 'Utenti del sito e del tenant';
$string['exportimportuserserror'] = 'Non è stato possibile creare l\'utente \'{$a}\'';
$string['exportimportuserslanguseselected'] = 'Utilizza lingua selezionata';
$string['exportimportusersmanual'] = 'Seleziona manualmente utenti...';
$string['exportimportusersmissinglangerror'] = 'La lingua dell\'utente non è presente nel sistema';
$string['exportimportusersmissinglangerrorlog'] = 'La lingua dell\'utente \'{$a->lang}\' non è presente nel sistema';
$string['exportimportusersmnetconflict'] = 'I valori host MNet differiscono';
$string['exportimportusersmnetmatchlocal'] = 'Aggiorna con il valore del sito';
$string['exportimportusersmnetuseexisting'] = 'Importa il valore esistene';
$string['exportimportuserspicture'] = 'Immagine utente';
$string['exportimportusersprofile'] = 'Profili utente';
$string['exportimportuserssuccess'] = 'Creato utente \'{$a}\'';
$string['exportimportuserssuspended'] = 'Includi utenti sospesi';
$string['exportimportuserstenant'] = 'Seleziona tutti gli utenti di \'{$a}\'';
$string['exportnotfound'] = 'Esportazione non trovata';
$string['exportnotfoundornotready'] = 'Esportazione non trovata o non pronta per l\'importazione';
$string['exportnotready'] = 'Esportazione non pronta per l\'importazione';
$string['exportoptions'] = 'Opzoni';
$string['exportoptionsdesc'] = 'Indicare gli elementi da esportare selezionandoli';
$string['exportreview'] = 'Revisione';
$string['exportreviewdesc'] = 'Controllare che tutto sia corretto prima dell\'esportazione del file,';
$string['exports'] = 'Esportazioni';
$string['exportselectallreports'] = 'Esporta tutti i report personalizzati';
$string['exportselectlimitreports'] = 'Esporta specifici report personalizzati...';
$string['exportstatus'] = 'Stato';
$string['filecontent'] = 'Contenuto del file';
$string['grade'] = 'Valutazione';
$string['idnumberchanged'] = 'Il codice identificativo è stato cambiato da \'{$a->from}\' a \'{$a->to}\'';
$string['import_content'] = 'Dettagli del modello di certificato';
$string['import_content_help'] = 'Modelli di certificato, pagine ed elementi.';
$string['import_issued'] = 'Certificati rialsciati';
$string['import_issued_help'] = 'I certificati rilasciati agli utenti';
$string['importallselectedcategory'] = 'Importa tutto nella categoria selezionata';
$string['importallsystemcontext'] = 'Importa tutto nel contesto di sistema';
$string['importchoosetenant'] = 'Seleziona tenant';
$string['importconflictcreatecourse'] = 'Crea corso vuoto';
$string['importconflictcreatecourseincategory'] = 'Crea corso vuoto nella categoria \'{$a}\'';
$string['importconflictincategory'] = 'nella categoria';
$string['importconflictinstances'] = 'Istanze ({$a}):';
$string['importconflicts'] = 'Conflitti';
$string['importconflictsdesc'] = 'Risolvere i conflitti, se necessario';
$string['importconflictskip'] = 'Non importare';
$string['importcoursecontent'] = 'Backup dei corsi senza dati utente';
$string['importcoursecontent_help'] = 'Importa backup dei corsi per ciascuna istanza selezionata';
$string['importdestination'] = 'Destinazione';
$string['imported'] = 'Importato';
$string['importeitherexportidorfile'] = 'E\' necessario specificare l\'export id o il file, ma non entrambi.';
$string['importer'] = 'Importatore';
$string['importernotfound'] = 'L’importatore {$a} non è stato trovato oppure non è disponibile';
$string['importerrequired'] = 'Sono disponibili più di un importatore, è necessario selezionare uno';
$string['importerrequirestenant'] = 'L\'importatore \'{$a}\' richiede un tenant';
$string['importersettingsinvalid'] = 'Le impostazioni dell’importatore non sono in un formato JSON valido';
$string['importersettingsvalidationfailed'] = 'La validazione delle impostazioni dell\'importatore non è andata a buon fine: {$a}';
$string['importformat'] = 'Formato del file';
$string['importformatauto'] = 'Individuazione automatica';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Formato Workplace';
$string['importfromfile'] = 'Nuova importazione da questo file';
$string['importgeneralsettings'] = 'Impostazioni generali';
$string['importgeneralsettingsalt'] = 'Selezionare la destinazione dei dati importati. Nel passo successivo sarà possibile specificare quali elementi importare.';
$string['importhasconflits'] = 'L\'importazione ha conflitti:';
$string['importincrementidnumber'] = 'Aggiungi suffisso numerico al codice identificativo';
$string['importintothecurrenttenant'] = 'Importa nel tenant corrente';
$string['importlogerror'] = 'Non è stato possibile importare il modello di certificato \'{$a->name}\'';
$string['importlogerrorinvalidreportsource'] = 'Fonte report mancante o non valida';
$string['importlogerrorinvalidreporttype'] = 'Tipo di report non valido';
$string['importlogexception'] = 'Eccezione: {$a}';
$string['importlogfailed'] = 'Non è stato possibile importare il corso {$a->fullname}\'';
$string['importlogfailedcohort'] = 'Non è stato possibile importare il gruppo globale \'{$a->name}\'';
$string['importlogfailedcoursecategory'] = 'Non è stato possibile importare la categoria di corso \'{$a->name}\'';
$string['importlogsuccess'] = 'Creato corso \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccesscertificates'] = 'Creato modello di certificato \'<a href="{$a->url}">{$a->name}</a>\' contenente {$a->pagescount} pageine e {$a->elementscount} elementi';
$string['importlogsuccesscohort'] = 'Creato gruppo globale \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccesscohortallocations'] = 'Assegnato l\'utente \'{$a->userfullname} al gruppo globale \'{$a->name}\'';
$string['importlogsuccesscoursecategory'] = 'Creato categoria \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccessissue'] = 'Rilasciato certificato \'{$a->template}\' all\'utente \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'Disponibile in tutti i tenant';
$string['importnotfound'] = 'Importazione non trovata';
$string['importoptions'] = 'Opzioni';
$string['importoptionsdesc'] = 'Indicare gli elementi da importare selezionandoli.';
$string['importproblem'] = 'Problema: {$a}';
$string['importproblemaffects'] = 'Riguarda:';
$string['importreportlogerror'] = 'Non è stato possibile importare il report \'{$a}\'';
$string['importreportlogsuccess'] = 'È stato creato il report \'<a href="{$a->url}">{$a->name}</a>\' contenente {$a->columncount} colonne, {$a->conditioncount} condizioni e {$a->filtercount} filtri';
$string['importreview'] = 'Revisione';
$string['importreviewdesc'] = 'Controllare che tutto sia corretto prima dell\'importazione del file,';
$string['imports'] = 'Importazioni';
$string['importselectallreports'] = 'Importa tutti i report personalizzati';
$string['importselectlimitreports'] = 'Importa specifici report personalizzati...';
$string['importselectsource'] = 'Seleziona fonte';
$string['importselectsourcedesc'] = 'Caricare un file CSV o un file Moodle Workplace. Nel passo successivo sarà possibile specificare quali elementi importare.';
$string['importselecttenant'] = 'Seleziona tenant...';
$string['importsetidnumbertoempty'] = 'Imposta a vuoto il codice identificativo';
$string['importsolution'] = 'Soluzione:';
$string['importstatus'] = 'Stato';
$string['importunknownerror'] = 'Errore sconosciuto {$a}';
$string['importunknownformat'] = 'Non è possibile individuare il formato del file dall\'estensione. Per favore selezionare un formato.';
$string['includecoursecontent'] = 'Includi contenuto dei corsi';
$string['includecoursecontent_help'] = 'Include tutto il contenuto del corso, attività, filtri, eventi di calendario, ecc.

Il file esportato conterrà le impostazioni di default di questo sito relativi ai backup standard dei corsi. Non saranno inclusi dati utenti.';
$string['instances'] = 'Istanze';
$string['instancescount'] = 'Istanze ({$a}):';
$string['invaliddevice'] = 'Si sta tentando di accedere Moodle Workplace con l\'app Moodle standard. Per favore scaricare l\'app Moodle Workplace';
$string['loading'] = 'Caricamento in corso...';
$string['log'] = 'Log';
$string['managecoursecategories'] = 'Gestione categorie di corso';
$string['mappingerrorbadgeheader'] = 'Alcuni badge non esistono';
$string['mappingerrorbadgelog'] = 'Il badge {$a} non è stato trovato';
$string['mappingerrorcertificateheader'] = 'Alcuni modelli di certificato non esistono';
$string['mappingerrorcertificatelog'] = 'Il certificato {$a} non è stato trovato';
$string['mappingerrorcohortheader'] = 'Alcuni gruppi globali utente non esistono';
$string['mappingerrorcohortlog'] = 'Il gruppo globale {$a} non è stato trovato';
$string['mappingerrorcompetencyheader'] = 'Alcuni competenze non esistono';
$string['mappingerrorcompetencylog'] = 'La competenza {$a} non è stata trovata';
$string['mappingerrorcontextnotfound'] = 'Il contesto non è stato trovoato';
$string['mappingerrorcoursenotfound'] = 'Il corso {$a} non è stato trovato';
$string['mappingerrorlpheader'] = 'Alcuni modelli di piani di formazione non esistono';
$string['mappingerrorlplog'] = 'Il modello di piano di formazione {$a} non è stato trovato';
$string['mappingerroruserfieldheader'] = 'Alcuni campi del profilo utente non esistono';
$string['mappingerroruserfieldlog'] = 'Il campo {$a} del profilo utente non è stato trovato';
$string['mappingerrorusernotfound'] = 'Non è stato possibile trovare l\'utente {$a} nel tenant corrente';
$string['mappingnoticecoursecreated'] = 'E\' stato creato il corso vuoto <a href="{$a->courseurl}">{$a->fullname}</a>';
$string['mappingnoticecourseidnumber'] = 'Non è stato trovato un corso dal titolo abbreviato \'{$a->shortname}\'. E\' stato trovato <a href="{$a->courseurl}">un altro corso</a> con lo stesso codice identificativo \'{$a->idnumber}\' ma con un titolo abbreviato differente';
$string['mappingnoticeuseremail'] = 'Non è stato trovato un utente con username \'{$a->username}\'. E\' stato trovato <a href="{$a->profileurl}">un altro utente</a> con la stessa email {$a->email} ma con uno username differente';
$string['messagefullexportcomplete'] = 'L\'esportazione è stata completata il {$a->date}

Stato: {$a->status}

Per i dettagli <a href="{$a->url}">cliccare qui</a>';
$string['messagefullimportcomplete'] = 'L\'importazione è stata completata il {$a->date}

Stato: {$a->status}

Per i dettagli <a href="{$a->url}">cliccare qui</a>';
$string['messageprovider:exportcomplete'] = 'Esportazione completata';
$string['messageprovider:importcomplete'] = 'Importazione completata';
$string['migrationcannotswitchtenant'] = 'Non è stato trovato un tenant con codice identificativo {$a} oppure non sei autorizzato a passare su quel tenant';
$string['migrationnotenanterror'] = 'Le opzioni tenant e sanza tenant non possono essere selezionate contemporaneamente';
$string['migrationreportaudiences'] = 'Destinatari';
$string['migrationreportdefinition'] = 'Definizione del report';
$string['migrationreportdefinition_help'] = 'Includi colonne del report, condizioni e filtri';
$string['migrationschoosefrom'] = 'Seleziona da';
$string['noavailableimporter'] = 'Non è stato possibile trovare un importatore disponibile per questo file';
$string['noavailableimporters'] = 'Non ci sono importatori';
$string['nocategoriesavailable'] = 'Non ci sono categorie disponibili';
$string['noconflictsfound'] = 'Non sono stati trovati conflitti';
$string['nodetails'] = 'Non sono stati trovati dettagli';
$string['nonproductionsite'] = 'Sito non in produzione';
$string['nonproductionsitemessage'] = 'Questo sito non è in produzione';
$string['nopermissioncategoryimport'] = 'Non sei autorizzato a importare in questa categoria.';
$string['nopermissioncategoryrestore'] = 'Non sei autorizzato a ripristinare in questa categoria.';
$string['nopermissionform'] = 'Non sei autorizzato ad accedere a questo form.';
$string['nopermissiontab'] = 'Non sei autorizzato ad accedere a questa pagina.';
$string['nothing'] = 'Niente';
$string['nothingtoexport'] = 'Niente da esportre';
$string['nothingtoimport'] = 'Niente da importare';
$string['notpossible'] = 'Non possibile';
$string['numhour'] = '{$a} ora';
$string['outcomes'] = 'Risultati';
$string['performanceinfo'] = 'Informazioni prestazioni tab (DB reads/writes: {$a->reads}/{$a->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:courseid'] = 'Corso reimpostato';
$string['privacy:metadata:exportcreatedby'] = 'ID dell\'utente che ha effettuato il reset.';
$string['privacy:metadata:exportstatus'] = 'Stato dell\'export';
$string['privacy:metadata:grade'] = 'Valutazione ottenuta dall\'utente prima del reset-';
$string['privacy:metadata:importcreatedby'] = 'ID dell\'utente che ha effettuato l\'importazione.';
$string['privacy:metadata:importstatus'] = 'Stato dell\'importazione.';
$string['privacy:metadata:programid'] = 'ID del programma da dove viene il corso';
$string['privacy:metadata:reason'] = 'Motivo del reset del corso.';
$string['privacy:metadata:resetinfo'] = 'Informazioni su cosa è stato resettato nel corso.';
$string['privacy:metadata:resetstatus'] = 'Stato del reset.';
$string['privacy:metadata:tenantid'] = 'ID del tenant correlato.';
$string['privacy:metadata:timecreated'] = 'Orario di creazione.';
$string['privacy:metadata:timemodified'] = 'Orario di modifica.';
$string['privacy:metadata:timerequested'] = 'Orario di richiesta del reset';
$string['privacy:metadata:tool_wp_course_reset'] = 'Reset corso.';
$string['privacy:metadata:usermodified'] = 'Utente modificato';
$string['privacy:metadata:userrequested'] = 'Utente che ha chiesto il reset del corso.';
$string['privacy:metadata:wascompleted'] = 'Stato di completamento dell\'utente prima del reset del corso.';
$string['problem'] = 'Problema';
$string['proceed'] = 'Prosegui';
$string['processing'] = 'Elaborazione';
$string['productionsite'] = 'Sito in produzione';
$string['productionstate'] = 'Stato produzione';
$string['productionstatedesc'] = 'I siti che non sono in produzione visualizzeranno un messaggio in basso a destra.';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'Motivo del reset';
$string['refresh'] = 'Ricarica';
$string['reg_moodleproduct'] = 'Prodotto Moodle ({$a})';
$string['reg_wpactiveusers'] = 'Numero di login unici del mese scorso ({$a})';
$string['reg_wpcertificates'] = 'Numero di certificati ({$a})';
$string['reg_wpcertificatesissues'] = 'Numero di certificati rilasciati ({$a})';
$string['reg_wpparticipantnumberaverage'] = 'Numero medio di partecipanti attivi del mese scorso ({$a})';
$string['reg_wpplugins'] = 'Elenco dei plugin installati ed abilitati, numero di istanze ({$a})';
$string['reg_wpproductionstate'] = 'Stato della produzione ({$a})';
$string['resetinfo'] = 'Resetta informazioni';
$string['resetstatus'] = 'Resetta stato';
$string['safenavigation'] = 'E\' sicuro continuare a navigare il sito';
$string['selectallcategoriesinthisfile'] = 'Seleziona tutte categorie di corso presenti nel file';
$string['selectallcohortsinthisfile'] = 'Seleziona tutti i gruppi globali presenti nel file';
$string['selectallcoursesinthisfile'] = 'Seleziona tutti i corsi presenti nel file';
$string['selectalltemplates'] = 'Seleziona tutti i modelli di certificato';
$string['selectalltemplatesinfile'] = 'Seleziona tutti i modelli di certificato presenti nel file';
$string['selectatleastonecategory'] = 'Seleziona almeno una categoria';
$string['selectatleastonecohort'] = 'Seleziona almeno un gruppo globale';
$string['selectatleastonecourse'] = 'Seleziona almeno un corso';
$string['selectatleastonetemplate'] = 'Seleziona almeno un modello';
$string['selectcoursecategory'] = 'Seleziona categorie di corsi';
$string['selectcoursesmanually'] = 'Seleziona corsi manualmente...';
$string['selectedcoursecategory'] = 'Categoria di corsi selezionata: {$a}';
$string['selectexporter'] = 'Seleziona esportatore';
$string['selectimporter'] = 'Seleziona importatore';
$string['selectmanually'] = 'Seleziona manualmente...';
$string['selectmanuallycategories'] = 'Seleziona manualmente categorie e sotto categorie';
$string['selectmanuallycertificates'] = 'Seleziona manualmente modelli di certificato';
$string['shortnamechanged'] = 'Il titolo abbreviato è stato cambiato da \'{$a->from}\' a \'{$a->to}\'';
$string['showless'] = 'Visualizza di meno';
$string['showxmore'] = 'Visualizza  {$a} di più...';
$string['solution'] = 'Soluzione';
$string['stepx'] = 'Passo {$a}.';
$string['tenant'] = 'Tenant';
$string['thissite'] = '(questo sito)';
$string['timerequested'] = 'Orario della richiesta';
$string['timereseted'] = 'Orario di reset';
$string['uploadimportfile'] = 'Carica un file';
$string['userrequested'] = 'Utente che ha richiesto';
$string['viewexport'] = 'Visualizza esportazione';
$string['viewimport'] = 'Visualizza importazione';
$string['viewlicense'] = 'Visualizza licenza';
$string['wascompleted'] = 'E\' stato completato';
$string['willbeimported'] = 'Sarà importato';
$string['workplacelicenseheader'] = 'Licenza Workplace license';
$string['workplacelicensenew'] = 'Moodle Workplace - Copyright © 2018 onwards, Moodle Pty Ltd
Moodle  - Copyright © 1999 onwards, Martin Dougiamas

Moodle Workplace™ Code is the collection of software scripts (plugins and modifications, and any derivations thereof) that are exclusively owned and licensed by Moodle under the terms of this proprietary Moodle Workplace Licence("MWL") alongside Moodle’s open software package ("Core") offering which itself is freely downloadable at "download.moodle.org" and which is provided by Moodle under a single GNU General Public Licence version 3.0, dated 29 June 2007("GPL"). MWL is strictly controlled by Moodle Pty Ltd and its certified premium partners. Wherever conflicting terms exist, the terms of the MWL are binding and shall prevail.

The Moodle Core software package governed by GPL is subject to copyright protection from 1999 onwards by Martin Dougiamas with portions contributed/copyrighted by other contributors. Such Moodle® open software and corresponding documentation are distributed in the hope that they will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose.

By accessing Moodle Workplace™ that is governed by the MWL you agree that you have signed an MWL with Moodle Pty Ltd ensuring (among other things) that you:
- will not possess the Moodle Workplace™ Code without being subject to the terms of the MWL;
- will cease using Moodle Workplace™ and immediately delete all copies of the Moodle Workplace™ Code from your servers and any computers under your control if you are no longer a Moodle Certified Premium Partner or a client of a Moodle Certified Premium Partner. You must confirm this in writing to Moodle within 7 days of such event occurring;
- will not distribute copies of Moodle Workplace™ Code to any third party not a party to the MWL that you have signed and you must indemnify Moodle for any loss suffered by Moodle due to failure by you to comply with the MWL;
- agree that any improvements to Moodle Workplace™ Code must be explicitly shared with Moodle Pty Ltd and its certified premium partners, with such rights in the improvements assigned to Moodle Pty Ltd thereby allowing Moodle Pty Ltd full rights to include such improvements in future versions of Moodle Workplace™ Code.
- indemnify and hold both Moodle Pty Ltd and its certified premium partners harmless for any damages, fines, penalties, or other liability arising out of any data input by you and your end users.

Moodle Workplace™ websites may include a tracking pixel for statistical purposes and compliance monitoring. No personal data is collected or processed, only the site URL.

This is a summary only: for the full terms of the MWL please refer to the MWL you have signed.';
$string['workplacelicensenotagreed'] = 'Non potrai visualizzare questo contenuto finché l’amministratore del sito non avrà accettato la licenza Moodle Workplace.';
$string['wp:manageexportimport'] = 'Gestire importazioni/esportazioni Workplace';
$string['wp:useexportimport'] = 'Utilizzare importazioni/esportazioni Workplace';
