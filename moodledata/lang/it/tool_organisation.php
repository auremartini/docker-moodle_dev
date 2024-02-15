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
 * Strings for component 'tool_organisation', language 'it', version '4.1'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Azioni';
$string['addchilddepartment'] = 'Nuovo sotto reparto del reparto \'{$a}\'';
$string['addchildposition'] = 'Nuova sotto posizione della posizione \'{$a}\'';
$string['adddepartment'] = 'Nuovo reparto della struttura \'{$a}\'';
$string['adddepartmentframework'] = 'Nuova struttura di reparti';
$string['addjob'] = 'Nuova mansione';
$string['addjobforuser'] = 'Nuova mansione di \'{$a}\'';
$string['addnewdepartment'] = 'Nuovo reparto';
$string['addnewposition'] = 'Nuova posizione';
$string['addposition'] = 'Nuova posizione della struttura \'{$a}\'';
$string['addpositionframework'] = 'Nuova struttura di posizioni';
$string['allframeworks'] = 'Strutture di posizioni e reparti';
$string['anydepartment'] = 'Qualsiasi';
$string['anymanager'] = 'Manager o capo reparto';
$string['anyposition'] = 'Qualisiasi';
$string['assfirstchildof'] = 'Come primo figlio di \'{$a}\'';
$string['assignnewjob'] = 'Assegna un\'altra mansione all\'utent';
$string['audienceand'] = 'And';
$string['audiencecustomise'] = 'Personalizza...';
$string['audiencejobdescription'] = 'L\'utente appartiene al reparto: {$a->department}<br />
Ricopre la posizione: {$a->position}';
$string['audiencemanager'] = 'Manager';
$string['audiencemanagerdescription'] = 'Autorizzazioni: {$a->permissions}';
$string['audienceor'] = 'Or';
$string['audienceselect'] = 'Relazione con il visualizzatore di report';
$string['audienceselectinitial'] = 'Seleziona audience';
$string['audienceself'] = 'Loro stessi';
$string['audienceusersall'] = 'Tutti gli utenti';
$string['audienceusersdept'] = 'Nello stesso reparto di chi visualizza il report';
$string['audienceusersreporting'] = 'Riporta a chi visualizza il report';
$string['audienceusersreporting_help'] = 'Includi utenti che riportano a chi visualizza il report (che dovrebbe avere una posizione di manager)

Un riporto diretto è un utente che ricopre una posizione subito sotto alla posizione del suo manager.';
$string['audienceusersreportingdirect'] = 'Solo riporti diretti';
$string['cachedef_myjob'] = 'Mansione dell\'utente attuale e del suo team';
$string['conditioncanallocateprograms'] = 'Può assegnare programmi';
$string['conditioncanreceivenotifications'] = 'Può ricevere notifiche';
$string['conditionuserdepartment'] = 'Utenti che appartengono al reparto';
$string['conditionuserdepartmentdescription'] = 'Utenti che hanno una mansione nel reparto \'{$a->deptname}\'<br />
Sotto reparto: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Utenti che non hanno una mansione nel reparto \'{$a->deptname}\'<br />
Sotto reparto: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'Utenti che hanno una mansione nel reparto \'{$a->deptname}\'<br />
Sotto reparto: {$a->subdeptsinclude}
Il o dopo il: {$a->conditiondate}';
$string['conditionuserdepartmentsallcriteria'] = 'Utenti con mansioni in tutti i dipartimenti selezionati';
$string['conditionuserdepartmentsalldescription'] = 'Utenti che hanno in contemporanea mansioni in uno qualsiasi dei seguenti reparti \'{$a->deptname}\'<br />
Sotto reparti: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionnegated'] = 'Utenti che non hanno in contemporanea mansioni in uno qualsiasi dei seguenti reparti \'{$a->deptname}\'<br />
Sotto reparti: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionwithdate'] = 'Utenti che hanno in contemporanea mansioni in tutti i seguenti reparti \'{$a->deptname}\'<br />
Sotto reparti: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanycriteria'] = 'Utenti con una mansione in uno qualsiasi dei reparti selezionati';
$string['conditionuserdepartmentsanycriteria_help'] = 'L’assegnazione di una nuova mansione ad un utente ha già una mansione in uno dei reparti selezionati, non genererà una nuova azione';
$string['conditionuserdepartmentsanydescription'] = 'Utenti che hanno mansioni in uno qualsiasi dei seguenti reparti: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionnegated'] = 'Utenti che non hanno una mansione in nessuno dei seguenti reparti: \'{$a->deptname}\'<br />
Sotto reparti: {$a->subdeptsinclude}<br />
Il o dopo il: {$a->conditiondate}';
$string['conditionuserdepartmentsanydescriptionwithdate'] = 'Utenti che hanno una mansione in uno qualsiasi dei seguenti reparti: \'{$a->deptname}\'<br />
Sotto reparti: {$a->subdeptsinclude}<br />
Il o dopo il: {$a->conditiondate}';
$string['conditionuserdepartmentseachcriteria'] = 'Tutte le volte che un utente riceve una mansione in uno qualsiasi dei dipartimenti selezionati';
$string['conditionuserdepartmentseachcriteria_help'] = 'Equivalente alla creazione di più regole, una per ciascuno dei reparti selezionati';
$string['conditionusernotindepartment'] = 'Utenti che non appartengono al reparto';
$string['conditionuserposition'] = 'Utenti che ricoprono la posizione';
$string['conditionuserpositiondescription'] = 'Utenti che ricoprono la posizione \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Utenti che non ricoprono la posizione \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'Utenti che non ricoprono la posizione \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}
Il o dopo il: {$a->conditiondate}';
$string['conditionuserpositionsallcriteria'] = 'Utenti con mansioni in tutte le posizioni selezionate';
$string['conditionuserpositionsalldescription'] = 'Utenti che hanno mansioni in tutte le seguenti posizioni contemporaneamente: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionnegated'] = 'Utenti che non hanno mansioni in tutte le posizioni contemporaneamente: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionwithdate'] = 'Utenti che hanno mansioni in tutte le seguenti posizioni contemporaneamente: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}<br />
Il o dopo il: {$a->conditiondate}';
$string['conditionuserpositionsanycriteria'] = 'Utenti con mansioni in una qualsiasi delle posizioni selezionate';
$string['conditionuserpositionsanycriteria_help'] = 'Quando un utente ha già una mansione in una posizione selezionata, ottenere una nuova mansione nella seconda non attiverà nuovamente le azioni';
$string['conditionuserpositionsanydescription'] = 'Utenti che hanno mansioni in almeno una delle seguenti posizioni: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionnegated'] = 'Utenti che non hanno una mansione in nessuna delle seguenti posizioni: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionwithdate'] = 'Utenti che hanno una mansioni in una delle seguenti posizioni: \'{$a->posname}\'<br />
Sotto posizioni: {$a->subposinclude}<br />
Il o dopo il: {$a->conditiondate}';
$string['conditionuserpositionseachcriteria'] = 'Ogni volta che l\'utente ottiene una mansione in una delle posizioni selezionate';
$string['conditionuserpositionseachcriteria_help'] = 'Equivalente alla creazione di più regole, una per ciascuna delle posizioni selezionate';
$string['conditionuserwithoutposition'] = 'Utenti che non ricoprono la posizione';
$string['creategenericframework'] = 'Crea struttura generica';
$string['current'] = 'Attuale: {$a}';
$string['delete'] = 'Elimina';
$string['deletedepartment'] = 'Elimina reparto \'{$a}\'';
$string['deletedepartmentconfirm'] = 'Sei sicuro di eliminare il reparto \'{$a}\'?';
$string['deletedepartmentframework'] = 'Elimina la struttura di reparti \'{$a}\'';
$string['deletedepartmentframeworkconfirm'] = 'Sei sicuro di eliminare la struttura di reparti \'{$a}\'?';
$string['deletejob'] = 'Elimina mansione';
$string['deleteposition'] = 'Elimina posizione \'{$a}\'';
$string['deletepositionconfirm'] = 'Sei sicuro di eliminare la posizione \'{$a}\'?';
$string['deletepositionframework'] = 'Elimina la struttura di posizioni \'{$a}\'';
$string['deletepositionframeworkconfirm'] = 'Sei sicuro di eliminare la struttura di posizioni \'{$a}\'?';
$string['department'] = 'Reparto';
$string['department_help'] = 'Seleziona reparto';
$string['departmentandpositionrequiredforjobcreate'] = 'Per assegnare mansioni è necessario creare reparti e posizioni';
$string['departmentdeleted'] = 'Reparto eliminato correttamente';
$string['departmentdescription'] = 'Descrizione';
$string['departmentframework'] = 'Struttura di reparti';
$string['departmentframeworkidnumber'] = 'Codice identificativo struttura di reparti';
$string['departmentframeworkpostfix'] = '{$a} (Struttura di reparti)';
$string['departmentframeworks'] = 'Strutture di reparti';
$string['departmentfrmidnumberconflict'] = 'Codice identificativo struttura di reparti già esistente';
$string['departmenthasjobs'] = 'Non è possibile eliminare il reparto poiché ha mansioni associate.';
$string['departmentidentifier'] = 'Identificativo reparto';
$string['departmentidentifier_help'] = 'Colonna che identifica la riga del CSV, utilizzata per individuare il genitore';
$string['departmentidnumber'] = 'Codice identificativo';
$string['departmentidnumberconflict'] = 'Codice identificativo del reparto già esistente';
$string['departmentleadpermissions'] = 'Autorizzazioni del capo reparto';
$string['departmentmanagementicons'] = 'Icone gestione del reparto';
$string['departmentmanager'] = 'Capo reparto';
$string['departmentmanager_help'] = 'Un capo reparto sarà considerato manager di coloro che appartengono allo stesso reparto o a sotto reparti, indipendentemente dalla loro posizione.';
$string['departmentname'] = 'Nome';
$string['departmentnotfound'] = 'Reparto non trovato';
$string['departmentparent'] = 'Genitore';
$string['departmentrequiredforjobcreate'] = 'Per assegnare mansioni è necessario creare reparti';
$string['departments'] = 'Reparti';
$string['departmentwithicons'] = 'Reparto con permessi';
$string['details'] = 'Dettagli';
$string['editdates'] = 'Modifica date';
$string['editdepartment'] = 'Modifica reparto \'{$a}\'';
$string['editdepartmentframework'] = 'Modifica struttura di reparti \'{$a}\'';
$string['editdepartmentname'] = 'Modifica nome';
$string['editjobdatesforuser'] = 'Modifica date della mansione di \'{$a}\'';
$string['editposition'] = 'Modifica posizione di \'{$a}\'';
$string['editpositionframework'] = 'Modifica struttura di posizioni \'{$a}\'';
$string['editpositionname'] = 'Modifica nome';
$string['enddate'] = 'Data di fine';
$string['enddate_help'] = 'Data di fine mansione';
$string['enddaterelativetostart'] = 'Relativa alla data di inizio';
$string['entitydepartment'] = 'Reparto';
$string['entityjob'] = 'Mansione';
$string['entityposition'] = 'Posizione';
$string['errorcreatingdepartment'] = 'Si è verificato un errore durante la creazione del reparto. Per favore riprovare.';
$string['errorcreatingjob'] = 'Si è verificato un errore durante la creazione della mansione. Per favore riprovare.';
$string['errorcreatingposition'] = 'Si è verificato un errore durante la creazione della posizione . Per favore riprovare.';
$string['errorcsvcantuseframeworkidnumber'] = 'Non è possibile utilizzare contemporaneamente l\'ID e il codice identificativo della struttura';
$string['errorcsvinvalidframeworkidnumber'] = 'Una struttura con questo condice identificativo non esiste o non è disponibile';
$string['errorcsvinvalidparentmapping'] = 'La mappature del campo \'Gentitore\' non può essere uguale all\'dentificativo';
$string['errorcsvnohierarchy'] = 'Se non è stata selezionata una gerarchia, la colonna \'Parent\' non può avere una mappatura.';
$string['errorcsvnoparent'] = 'Se non è stata selezionata una gerarchia, la colonna \'Parent\' deve avere uan mappatura.';
$string['erroridnumberdepartment'] = 'Un reparto con codice identificativo \'{$a}\' esiste già';
$string['erroridnumberposition'] = 'Una posizione con codice identificativo \'{$a}\' esiste già';
$string['errorinvaliddepartment'] = 'Reparto non valido';
$string['errorinvalidenddate'] = 'Date non valide, la data di fine deve essere successiva alla data di inizio';
$string['errorinvalidjobenddate'] = 'Formato della data di fine non valido';
$string['errorinvalidjobstartdate'] = 'Formato della data di inizio non valido';
$string['errorinvalidposition'] = 'Posizione non valida';
$string['errorjobscannotbeimported'] = 'Non è possibile importare mansioni nello spazio condiviso';
$string['errormovehierarchy'] = 'Si è verificato un errore durante lo spostamento della posizione o della organizzazione in un altro punto della gerarchia';
$string['errorparentnotfound'] = 'Non è stato trovato il genitore';
$string['errorparentnotfounddepartment'] = 'Non è stato trovato il genitore del reparto con codice identificativo \'{$a}\'';
$string['errorparentnotfoundposition'] = 'Non è stato trovato il genitore della posizione con codice identificativo \'{$a}\'';
$string['errorsameidnumberdepartment'] = 'Un reparto con stesso codice identificativo esiste già';
$string['errorsameidnumberposition'] = 'Una posizione con stesso codice identificativo esiste già';
$string['eventdepartmentcreated'] = 'Creazione reparto';
$string['eventdepartmentdeleted'] = 'Eliminazione reparto';
$string['eventdepartmentupdated'] = 'Aggiornamento reparto';
$string['eventjobcreated'] = 'Creazione mansione';
$string['eventjobdeleted'] = 'Eliminazione mansione';
$string['eventjobupdated'] = 'Aggiornamento mansione';
$string['eventpositioncreated'] = 'Creazione posizione';
$string['eventpositiondeleted'] = 'Eliminazione posizione';
$string['eventpositionupdated'] = 'Aggiornamento posizione';
$string['expanddepartmentframework'] = 'Espandi la struttura di reparti \'{$a}\'';
$string['expandpositionframework'] = 'Espandi la struttura di posizioni \'{$a}\'';
$string['exporterjobs'] = 'Mansioni della struttura organizzativa';
$string['exporterjobsdesc'] = 'Mansioni la propria posizione e reparto';
$string['exporterorgstructure'] = 'Strutture organizzative';
$string['exporterorgstructuredesc'] = 'Strutture con tutta la gerarchia di reparti e/o posizioni';
$string['exportframeworkssettings'] = 'Descrizione, gerarchia e autorizzazioni';
$string['frameworks'] = 'Strutture';
$string['fullcompletionreport'] = 'Programmi in ritardo';
$string['fullname'] = 'Utente';
$string['globalmanagementicons'] = 'Icone del manager';
$string['globalmanager'] = 'Manager';
$string['globalmanager_help'] = 'Una persona con la mansione di manager sarà considerato manager di tutte le persone in una posizione inferiore, indipendentemente dal reparto di appartenenza.';
$string['hascurrentjobs'] = 'Ha mansioni assegnate';
$string['hasjobdepartment'] = 'Ha mansione nel reparto';
$string['hasjobposition'] = 'Ha mansione nella posizione';
$string['hierarchy'] = 'Gerarchia';
$string['hierarchydepartments'] = 'Gerarchia di reparti...';
$string['hierarchypositions'] = 'Gerarchia di posizioni...';
$string['importerdepartmentscsv'] = 'Importazione reparti (CSV)';
$string['importerdepartmentscsvdesc'] = 'Reparti con o senza gerarchia da importare in una struttura';
$string['importerpositionscsv'] = 'Importazione posizioni (CSV)';
$string['importerpositionscsvdesc'] = 'Posizioni con o senza gerarchia da importare in una struttura';
$string['importlogdeptfailed'] = 'Non è stato possibile importare il reparto \'{$a->name}\'';
$string['importlogdeptfrmfailed'] = 'Non è stato possibile importare la struttura di reparti \'{$a->name}\'';
$string['importlogdeptfrmsuccess'] = 'Creata la nuova struttura di reparti \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogdeptsuccess'] = 'Creato il nuovo reparto \'{$a->name}\'';
$string['importlogidnumberexistsdepartment'] = 'Un reparto con codice identificativo \'{$a->originalidnumber}\' esiste già';
$string['importlogidnumberexistsposition'] = 'Una posizione con codice identificativo \'{$a->originalidnumber}\' esiste già';
$string['importlogjobfailed'] = 'Non è stato possibile importare la mansione \'{$a->userfullname}\' - {$a->position} ({$a->department})';
$string['importlogjobsuccess'] = 'Creata  la mansione \'{$a->userfullname}\' - {$a->position} ({$a->department})';
$string['importlogposfailed'] = 'Non è stato possibile importare la posizione \'{$a->name}\'';
$string['importlogposfrmfailed'] = 'Non è stato possibile importare la struttura di posizioni \'{$a->name}\'';
$string['importlogposfrmsuccess'] = 'Creata struttura di posizioni \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogpossuccess'] = 'Creata la nuova posizione \'{$a->name}\'';
$string['include_shared_entities'] = 'Includi elementi condivisi';
$string['include_shared_entities_help'] = 'Abilitando l\'impostazione, i file esportati conterranno anche tutte le strutture condivise disponibili nel tenant';
$string['jobcreated'] = 'Mansione creata';
$string['jobdeleteconfirm'] = 'Sei sicuro di eliminare questa mansione e tutti i dati associati?<br />
Se desideri conservare i dati di questa mansione per consultazioni future, dovresti invece considerare di impostarlo come terminata.<br />
<br />L\'azione non potrà essere annullata.';
$string['jobdeleted'] = 'Mansione eliminata correttamente';
$string['jobfrom'] = 'Da {$a}';
$string['jobfromto'] = 'Da {$a->from} a {$a->to}';
$string['jobname'] = '{$a->position} nel {$a->department}';
$string['jobnotfound'] = 'Mansione non trovata';
$string['jobpositiondepartment'] = 'Posizione e reparto';
$string['jobs'] = 'Mansioni';
$string['jobsnumber'] = 'Mansioni';
$string['jobsnumber_help'] = 'Visualizza le mansioni attive e passate.<br />Ad esempio, 10 (2) significa che ci sono 10 mansioni attive e 2 mansioni passate.';
$string['jobstartdateafter'] = 'Inizio mansione è il o dopo il';
$string['jobtenantdoesnotmatch'] = 'Il tenant della mansione non corrisponde al tenant dell\'utente';
$string['jobtransfered'] = 'Utente trasferito ad una nuova mansione';
$string['jobupdated'] = 'Mansione aggiornata';
$string['learning'] = 'Formazione';
$string['listdeptsnohierarchy'] = 'Elenco di reparti senza gerarchia';
$string['listposnohierarchy'] = 'Elenco di posizioni senza gerarchia';
$string['locked'] = 'Bloccato';
$string['locked_help'] = 'Possono farlo solo gli utenti con la possibilità di assegnare mansioni in posizioni/reparti bloccati';
$string['managerpermissions'] = 'Autorizzazioni del manager';
$string['mappingerrordeptnotfound'] = 'Il reparto {$a} non è stato trovato';
$string['mappingerrorposnotfound'] = 'La posizione {$a} non è stata trovato';
$string['mappingnoticenodeptidnumber'] = 'Il reparto è stato trovato attraverso il nome poiché il codice identificativo è vuoto. Si raccomanda di assegnare i codici identificativi ai reparti';
$string['mappingnoticenoposidnumber'] = 'La posizione è stata trovata attraverso il nome poiché il codice identificativo è vuoto. Si raccomanda di assegnare i codici identificativi alle posizioni';
$string['missingdepartment'] = 'Reparto mancante';
$string['missingposition'] = 'Posizione mancante';
$string['missingusers'] = 'Utenti mancanti';
$string['movedepartmentframework'] = 'Sposta struttura di reparti \'{$a}\'';
$string['movepositionframework'] = 'Sposta struttura di posizioni \'{$a}\'';
$string['myteams'] = 'Team';
$string['newframework'] = 'Nuova struttura';
$string['newnamefor'] = 'Nuovo nome di \'{$a}\'';
$string['notification'] = 'Notifica';
$string['notificationcannotcreatejobs'] = 'Prima di assegnare mansioni agli utenti, si devono creare reparti e posizioni.';
$string['onlycurrent'] = 'Solo attuale';
$string['onlyfuture'] = 'Solo futuri';
$string['onlypast'] = 'Solo passati';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Assegnare utenti a programmi/certificazioni';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Capo reparto: Assegnare utenti a programmi/certificazioni';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Assegnare utenti a programmi/certificazioni';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Manager: Assegnare utenti a programmi/certificazioni';
$string['organisation:assigninlocked'] = 'Assegnare mansioni in reparti e posizioni bloccati';
$string['organisation:assignjobs'] = 'Assegnare mansioni';
$string['organisation:managedepartments'] = 'Gestire dipartimenti';
$string['organisation:managepositions'] = 'Gestire posizioni';
$string['organisation:receivenotificationsdept'] = 'Ricevere notifiche';
$string['organisation:receivenotificationsdept_help'] = 'Capo reparto: Ricevere notifiche';
$string['organisation:receivenotificationsglob'] = 'Ricevere notifiche';
$string['organisation:receivenotificationsglob_help'] = 'Manager: Ricevere notifiche';
$string['organisation:viewusersreportdept'] = 'Visualizzare report utente';
$string['organisation:viewusersreportdept_help'] = 'Capo reparto: Visualizzare report utente';
$string['organisation:viewusersreportglob'] = 'Visualizzare report utente';
$string['organisation:viewusersreportglob_help'] = 'Manager: Visualizzare report utente';
$string['organisationadmintab'] = 'Organizzazione';
$string['orgfiltercustomise'] = 'Personalizza';
$string['orgfilterdirectreports'] = 'Visualizza solo i miei riporti diretti';
$string['orgfiltereverybody'] = 'Visualizza chiunque riporti a me';
$string['orgstructure'] = 'Struttura organizzativa';
$string['parent'] = 'Gentiore';
$string['parentidchanged'] = 'Non è stato possibile trovare il reparto genitore \'{$a}\'. Il reparto è stato creato direttamente sotto la struttura.';
$string['parentidchangedposition'] = 'Non è stato possibile trovare la posizione genitore \'{$a}\'. La posizione è stata creata direttamente sotto la struttura.';
$string['parentsameiderror'] = 'Un elemento non può essere genitore di se stesso';
$string['pluginname'] = 'Struttura organizzativa';
$string['position'] = 'Posizione';
$string['position_help'] = 'Seleziona posizione';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'Posizione eliminata correttamente';
$string['positiondescription'] = 'Descrizione';
$string['positionframework'] = 'Struttura delle posizioni';
$string['positionframeworkidnumber'] = 'Codice identificativo della struttura delle posizioni';
$string['positionframeworkpostfix'] = '{$a} (struttura delle posizioni)';
$string['positionframeworks'] = 'Struttura delle posizioni';
$string['positionfrmidnumberconflict'] = 'Il codice identificativo della struttura di posizioni esiste già';
$string['positionhasjobs'] = 'Non è possibile eliminare la posizione poiché ha delle mansioni associate.';
$string['positionidentifier'] = 'Identificativo della posizione';
$string['positionidentifier_help'] = 'Questa è la colonna che identifica la riga nel CSV. Sarà utilizzata per trovare il genitore';
$string['positionidnumber'] = 'Codice identificativo';
$string['positionidnumberconflict'] = 'Il codice identificativo della posizione esiste già';
$string['positionname'] = 'Nome';
$string['positionnotfound'] = 'Posizione non trovata';
$string['positionparent'] = 'Genitore';
$string['positionpermissions'] = 'Autorizzazioni';
$string['positionrequiredforjobcreate'] = 'Per assegnare mansioni è necessario creare posizioni.';
$string['positions'] = 'Posizioni';
$string['positionwithicons'] = 'Posizioni con organizzazioni';
$string['previousjobdatenote'] = 'La mansione precedente sarà terminata un giorno prima dell\'inizio della nuova mansione.';
$string['privacy:metadata:department'] = 'Reparto della mansione';
$string['privacy:metadata:enddate'] = 'Fine della mansione';
$string['privacy:metadata:jobssummary'] = 'Riassunto della mansione';
$string['privacy:metadata:position'] = 'Posizione della mansione';
$string['privacy:metadata:startdate'] = 'Inizio della mansione';
$string['privacy:metadata:timecreated'] = 'Creazione della mansione';
$string['privacy:metadata:timemodified'] = 'Ultima modifica della mansione';
$string['privacy:metadata:userid'] = 'Id Utente';
$string['reg_wpdepartmentframeworks'] = 'Numero di strutture di reparti ({$a})';
$string['reg_wpdepartments'] = 'Numero di reparti ({$a})';
$string['reg_wpjobs'] = 'Numero di mansioni ({$a})';
$string['reg_wppositionframeworks'] = 'Numero di strutture di posizione ({$a})';
$string['reg_wppositions'] = 'Numero di posizioni ({$a})';
$string['rolemanager'] = 'Manager delle strutture organizzative';
$string['rolemanagerdescription'] = 'Può creare e gestire mansioni, posizioni e dipartimenti nel proprio tenant';
$string['ruleoutcomeactive'] = 'Solo mansioni attive';
$string['ruleoutcomeall'] = 'Tutte le mansioni';
$string['ruleoutcomeassignjob'] = 'Assegna mansione';
$string['ruleoutcomeassignjobdesc'] = 'Assegna mansione nel reparto \'{$a->department}\' con la posizione \'{$a->position}\'';
$string['ruleoutcomeassignjobdescwithdates'] = 'Assegna mansione nel reparto \'{$a->department}\' con la posizione \'{$a->position}\'<br />
Data di inizio: {$a->startdate}<br />
Data di fine: {$a->enddate}';
$string['ruleoutcomeassignjobstartruledate'] = 'Data di elaborazione della regolae';
$string['ruleoutcomeassignjobstartuserdate'] = 'Data di creazione utente';
$string['ruleoutcomedaybeforeruledate'] = 'Giorni antecedenti all\'elaborazione della regola';
$string['ruleoutcomeendjobs'] = 'Termina tutte le mansioni';
$string['ruleoutcomeruledate'] = 'Data di svolgimento della regola';
$string['ruleoutcometarget'] = 'Obiettivo';
$string['ruleoutcometarget_help'] = 'Termina tutte le mansioni o solo quelle ancora attive';
$string['selectallactivejobs'] = 'Seleziona tutte le mansioni attive';
$string['selectalldepartmentframeworks'] = 'Seleziona tutte le strutture di reparti';
$string['selectallframeworks'] = 'Seleziona tutte le strutture di reparti e di posizioni';
$string['selectalljobs'] = 'Seleziona tutte le mansioni attive e passate';
$string['selectalljobsinfile'] = 'Seleziona tutte le mansioni in questo file';
$string['selectalljobsinframeworks'] = 'Seleziona tutte le mansioni in qualsiasi struttura selezionata...';
$string['selectallpositionframeworks'] = 'Seleziona tutte le strutture di posizioni';
$string['selectdate'] = 'Seleziona data...';
$string['selectexistingframework'] = 'Seleziona struttura esistente...';
$string['selectjobsinframeworks'] = 'Seleziona tutte le mansioni da una struttura specifica...';
$string['setjobfinished'] = 'Imposta mansione come terminata';
$string['showjobs'] = 'Visualizza mansioni';
$string['showpastjobs'] = 'Visualizza mansioni passate';
$string['somedepartmentsdonotexist'] = 'Alcuni reparti non esistono';
$string['somepositionsdonotexist'] = 'Alcune posizioni non esistono';
$string['startdate'] = 'Data di inizio';
$string['startdate_help'] = 'Data di inizio della mansione';
$string['timecreated'] = 'Data di creazione';
$string['toomanyparentstoshow'] = 'Troppi genitori da visualizzare.';
$string['transfertojob'] = 'Trasferisci \'{$a}\' ad una nuova mansione';
$string['transfertonewjob'] = 'Trasferisci l\'utente ad una nuova mansione';
$string['usernotfound'] = 'Utente non trovato';
$string['users'] = 'Seleziona utenti';
$string['users_help'] = 'Cerca e seleziona utenti per l\'assegnazione della mansione';
$string['validationmsgdeptposchangejob'] = 'Il reparto o la posizione devono essere diversi dagli attuali.';
$string['validationmsgedateonsdate'] = 'La data di fine deve essere successiva alla data di inizio.';
$string['validationmsgedateonsdatechangejob'] = 'LA data di inizio di una nuova mansione deve essere successiva alla data di inzio della mansione precedente.';
$string['withoutpermission'] = 'Senza autorizzazione \'{$a}\'';
$string['withpermission'] = 'Con autorizzazione \'{$a}\'';
$string['withsubdepartments'] = 'Includi sotto reparti';
$string['withsubpositions'] = 'Includi sotto posizioni';
