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
 * Strings for component 'tool_dynamicrule', language 'it', version '4.1'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Attive';
$string['activerules'] = 'Regole attive';
$string['addcondition'] = 'Aggiungi condizione';
$string['addconditions'] = 'Aggiungi condizione a questa regola';
$string['addoutcome'] = 'Aggiungi azione';
$string['addoutcomes'] = 'Aggiungi azione a questa regola';
$string['archive'] = 'Archivia';
$string['archived'] = 'Archiviate';
$string['archivedrules'] = 'Regole archiviate';
$string['availableplaceholders'] = 'Segnaposto disponibili';
$string['body'] = 'Corpo';
$string['cachedef_conditions'] = 'Memorizzazione dell\'elenco delle condizioni delle regole dinamiche e degli eventi da ascoltare';
$string['cannotdisablerule'] = 'Non hai sufficienti privilegi per disabilitare la regola \'{$a}\'';
$string['cannotdisablesharedrule'] = 'La regole condivisa \'{$a}\' può essere disabilitata solo dallo spazio condiviso';
$string['cannotenablecomponentrule'] = 'Non è possibile abilitare la regola \'{$a}\' a meno che contenga azioni e non contenga errori.';
$string['cannotenablerule'] = 'Non è possibile abilitare la regola \'{$a}\' a meno che contenga condizioni e non contenga errori.';
$string['cannotenablesharedrule'] = 'La regola condivisa \'{$a}\' può essere abilitata solo dallo spazio condiviso.';
$string['cohort'] = 'Gruppo globale';
$string['conditioncohortmember'] = 'Utente appartiene al gruppo globale';
$string['conditioncohortmemberdescription'] = 'Utenti che appartengono al gruppo globale \'{$a}\'';
$string['conditioncohortmemberdescriptionwithdate'] = 'Utenti che appartengono al gruppo globale \'{$a->name}\'<br />
Inseriti nel gruppo globale il o dopo il \'{$a->conditiondate}\'';
$string['conditioncohortnotmember'] = 'Utente non appartiene al gruppo globale';
$string['conditioncohortnotmemberdescription'] = 'Utenti che non appartengono al gruppo globale \'{$a}\'';
$string['conditioncompetencydescription'] = 'Utenti che hanno archiviato la competenza \'{$a}\'';
$string['conditioncompetencyselector'] = 'Seleziona competenza';
$string['conditioncompetencyselector_help'] = 'Seleziona la competenza per trovare coloro che l\'hanno ottenuta';
$string['conditioncompetencytitle'] = 'Utente ha archiviato la competenza';
$string['conditioncoursecompleted'] = 'Completamento corso';
$string['conditioncoursecompletedafter'] = 'Data di completamento successiva al {$a}';
$string['conditioncoursecompletedbefore'] = 'Data di completamento precedente al {$a}';
$string['conditioncoursecompleteddescription'] = 'Utenti che hanno completato il corso \'{$a}\'';
$string['conditioncourselastaccess'] = 'Ultimo accesso al corso';
$string['conditioncourselastaccessdescriptionafter'] = 'Utenti che hanno effettuato l\'ultimo accesso al corso \'{$a->coursename}\' a partire da {$a->conditiondate}.';
$string['conditioncourselastaccessdescriptionbefore'] = 'Utenti che hanno effettuato l\'ultimo accesso al corso \'{$a->nome del corso}\' prima di {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionbeforelast'] = 'Utenti che non hanno acceduto il corso \'{$a->coursename}\' per {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionever'] = 'Utenti che hanno acceduto il corso \'{$a->coursename}\' almeno una volta';
$string['conditioncourselastaccessdescriptioninlast'] = 'Utenti che hanno acceduto il corso \'{$a->coursename}\' nell\'ultimo {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionnever'] = 'Utenti che non hanno mai acceduto il corso \'{$a->coursename}\'';
$string['conditioncourselastaccessnotice'] = 'Questa condizione si applica agli utenti che sono iscritto al corso.';
$string['conditioncoursenotcompleted'] = 'Non completamento corso';
$string['conditioncoursenotcompleteddescription'] = 'Utenti che non hanno completato il corso \'{$a}\'';
$string['conditioncoursenotcompletedformnotice'] = 'Questa condizione sarà applicata ali utenti indipendentemente dalla loro iscrizione al corso.';
$string['conditioncriteria'] = 'Criteri';
$string['conditioncriterianotavailableyet'] = 'Non ancora disponibile';
$string['conditionisbroken'] = 'Questa condizione contiene un errore.';
$string['conditionisnotavailable'] = 'Questa condizione non è disponibile.';
$string['conditionnotsaved'] = 'La condizione non è stata salvata.';
$string['conditions'] = 'Condizioni';
$string['conditionusercreated'] = 'Tempo trascorso dalla data di creazione utente';
$string['conditionusercreateddescriptionbefore'] = 'Utenti creati durante gli ultimi {$a}';
$string['conditionusercreateddescriptionover'] = 'Utenti creati prima dell\'ultimo {$a}';
$string['conditionuserenrolled'] = 'Utenti iscritti';
$string['conditionuserenrolleddescription'] = 'Utenti iscritti al corso \'{$a->course}\'<br />
Metodo di iscrizione: \'{$a->enrol}\'';
$string['conditionuserenrolleddescriptionwithdate'] = 'Utenti iscritti al corso \'{$a->course}\'<br />

3.8+ | Italian [it] | Storico
Utenti iscritti al corso \'{$a->course}\'<br />
Metodo di iscrizione: \'{$a->enrol}\'
Data di iscrizione il o successiva al \'{$a->conditiondate}\'';
$string['conditionuserfirstlogindescriptionever'] = 'Utenti che si sono autenticati almeno una volta';
$string['conditionuserfirstlogindescriptioninlast'] = 'Utenti che si sono autenticati per la prima volta negli ultimi {$a}';
$string['conditionuserfirstlogindescriptionover'] = 'Utenti che si sono autenticati per la prima volta tra {$a->startdate} e {$a->enddate}';
$string['conditionuserlastlogin'] = 'Ultimo collegamento dell\'utente';
$string['conditionuserlastlogindescriptionbefore'] = 'Utenti che si sono collegati prima dell\'ultimo  {$a}';
$string['conditionuserlastlogindescriptionever'] = 'Utenti che si sono collegati ameno una volta';
$string['conditionuserlastlogindescriptioninlast'] = 'Utenti che si sono collegati negli ultimi {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Utenti che non si sono mai collegati';
$string['conditionusernotenrolled'] = 'Utenti non iscritti';
$string['conditionusernotenrolleddescription'] = 'Utenti non iscritti al corso \'{$a->course}\'<br />
Metodo di iscrizione: \'{$a->enrol}\'';
$string['conditionuserprofilefield'] = 'Campo del profilo utente';
$string['conditionuserprofilefielddescription'] = 'Utenti che hanno il campo del profilo \'{$a->fieldname}\' valorizzato a \'{$a->fieldvalue}\'';
$string['conditionuserprofilefielddescriptiontext'] = 'Utenti che hanno il campo del profilo \'{$a->fieldname}\' valorizzato a \'{$a->fieldvalue}\'';
$string['confirmarchiverule'] = 'Se sicuro di archiviare la regola \'{$a}\'? Le regole dinamiche archiviate rimarranno disponibili nei report attuali e futuri';
$string['confirmdeletecondition'] = 'Se sicuro di eliminare la condizione \'{$a}\' assieme a tutti i suoi dati? L\'azione non potrà essere annullata,';
$string['confirmdeleteoutcome'] = 'Se sicuro di eliminare l\'azione \'{$a}\' assieme a tutti i suoi dati? L\'azione non potrà essere annullata,';
$string['confirmdeleterule'] = 'Se sicuro di eliminare la regola \'{$a}\' assieme a tutti i suoi dati? L\'azione non potrà essere annullata,';
$string['confirmduplicaterule'] = 'Sei sicuro di disabilitare la regola \'{$a}\'?';
$string['confirmduplicateruleconflicts'] = 'La regola contiene entità che non possono essere utilizzate in regole non condivise e quindi verranno omesse:';
$string['confirmeditrule'] = 'Poiché alcuni utenti hanno soddisfatto la regola in passato, è possibile solamente modificare le azioni della regola. In alternativa è possibile duplicar la regola.';
$string['confirmenablecomponentrule'] = 'Sei sicuro di abilitare questa regola? L\'abilitazione impatterà {$a} utenti';
$string['confirmenablerule'] = 'Le condizioni saranno bloccate non appena un utente sarà stato impattato dalla regola. Sei sicuro di abilitare la regola?';
$string['countmatchingusers'] = '{$a} corrispondenze totali';
$string['coursecompletiondate'] = 'Data di completamento';
$string['courseinternalid'] = 'ID interno del corso utilizzato negli URL';
$string['courselastaccesstime'] = 'Ultimo accesso al corso da parte dell\'utente';
$string['courselastaccesstime_help'] = 'Tenere presente che la regola verrà applicata una sola volta agli utenti che corrispondono, quindi non può essere utilizzata per sollecitare in modo ricorrente gli utenti che non accedono ai corsi da tempo.<br />Si noti inoltre che una volta che un utente è iscritto a un corso, può soddisfare immediatamente alla condizione "Mai acceduto".';
$string['courseurl'] = 'URL del corso';
$string['creationdate'] = 'Data di creazione';
$string['creationdate_help'] = 'È possibile selezionare una data relativa alla data corrente per abbinare gli utenti creati entro il periodo di tempo specificato.';
$string['dateinthefuture'] = 'È nel futuro';
$string['dateinthepast'] = 'È nel passato';
$string['datelast'] = 'Ultimo {$a} giorno';
$string['datelastdays'] = 'Ultimi...giorni';
$string['datelastplural'] = 'Ultimi {$a} giorni';
$string['datenext'] = 'Prossimo {$a} giorno';
$string['datenextdays'] = 'Prossimi...giorni';
$string['datenextplural'] = 'Prossimi {$a} giorni';
$string['datetypeever'] = 'Mai';
$string['datetypeinlast'] = 'Durante l\'ultimo...';
$string['datetypenever'] = 'Mai';
$string['datetypenone'] = 'Non impostato';
$string['datetypepast'] = 'Prima dell\'ultimo...';
$string['datetyperange'] = 'Intervallo';
$string['deletecondition'] = 'Elimina condizione';
$string['deleteoutcome'] = 'Elimina azione';
$string['disablerulemsg'] = 'Disabilita regola';
$string['duplicate'] = 'Duplica';
$string['dynamicrule:manage'] = 'Gestione regole dinamiche';
$string['editanyway'] = 'Modifica comunque';
$string['editcondition'] = 'Modifica condizione';
$string['editdetails'] = 'Modifica dettagli della regola \'{$a}\'';
$string['editdetailsbutton'] = 'Modifica dettagli';
$string['editoutcome'] = 'Modifica azione';
$string['editrulename'] = 'Modifica nome della regola \'{$a}\'';
$string['enable'] = 'Abilita';
$string['enabled'] = 'Abilita regola';
$string['enablehelp'] = 'abilitazione regola';
$string['enablehelp_help'] = 'Una regola per essere abilitata deve contenere almeno una condizione e una azione e non deve contenere errori';
$string['enablehelpmodal'] = 'abilitazione regola';
$string['enablehelpmodal_help'] = 'Una regola per essere abilitata deve contenere almeno un\'azione';
$string['enablerulemsg'] = 'Abilita regola';
$string['enddate'] = 'Data di fine';
$string['errorbadgehasextracriteria'] = 'Questo badge ha un altro criterio in aggiunta al rilascio manuale, di conseguenza non può essere rilasciato da una regola dinamica';
$string['errorbadgenopermission'] = 'Non hai il ruolo necessario per rilasciare il badge';
$string['errorcannotcreate'] = 'Non sei autorizzato a creare regole';
$string['errorcannotmanage'] = 'Non sei autorizzato a gestire questa regola';
$string['errorcannotmanagecondition'] = 'Non sei autorizzato a gestire questa condizione';
$string['errorcannotmanageoutcome'] = 'Non sei autorizzato a gestire questa azione';
$string['errorcohortnotamember'] = 'Non è possibile rimuovere l\'utente dal gruppo globale perché non è un membro del gruppo globale';
$string['errorcompletionnotenabled'] = 'Il corso non ha il completamento abilitato';
$string['errorinvalidbadge'] = 'Badge non valido';
$string['errorinvalidbody'] = 'Corpo della notifica non valido';
$string['errorinvalidcertificatetenant'] = 'Il certificato non può essere utilizzato in questo tenant.';
$string['errorinvalidcohort'] = 'Gruppo globale non valido';
$string['errorinvalidcohorttenant'] = 'Il gruppo globale non può essere utilizzato in questo tenant.';
$string['errorinvalidcompetency'] = 'Competenza non valida';
$string['errorinvalidcourse'] = 'Corso non valido';
$string['errorinvalidcoursetenant'] = 'Il corso non può essere utilizzato in questo tenant.';
$string['errorinvaliddates'] = 'Date di inizio e fine non valide';
$string['errorinvalidenrolmentmethod'] = 'Questo corso non ha metodo di iscrizione o il metodo non è abilitato';
$string['errorinvalidlearningplan'] = 'Piano di formazione non valido';
$string['errorinvalidoperator'] = 'Operatore non valido.';
$string['errorinvalidsubject'] = 'Oggetto della notifica non valido';
$string['errorinvaliduserfirstlogin'] = 'Data di prima autenticazione non valida';
$string['errorinvaliduserfirstlogintype'] = 'Tipo di prima autenticazione non valido';
$string['errorinvaliduserlastcourseaccess'] = 'Data di ultimo login non valida';
$string['errorinvaliduserlastlogin'] = 'Data di ultimo collegamento non valida';
$string['errorinvaliduserlastlogintype'] = 'Tipo di ultimo collegamento non valido';
$string['errorinvaliduserprofilefield'] = 'Campo del profilo non valido';
$string['errorinvaliduserprofilefieldvalue'] = 'Valore del campo del profilo non valido';
$string['errornopermissionissuecertificate'] = 'Non sei autorizzato a rilasciare questo certificato';
$string['ever'] = 'in totale';
$string['exporterdescription'] = 'Definizione delle regole dinamiche, delle condizioni e delle azioni';
$string['exportselectactive'] = 'Seleziona tutte le regole dinamiche (escluse le archiviate)';
$string['exportselectall'] = 'Seleziona tutte le regole dinamiche (incluse le archiviate)';
$string['exportselectenabled'] = 'Seleziona tutte le regole dinamiche abilitate';
$string['exportsettings'] = 'Definizione delle regole, delle condizioni e delle azioni';
$string['exportsettings_help'] = 'Tutte le regole importate saranno disabilitate, indipendentemente dal loro stato originario.';
$string['field'] = 'Campo';
$string['filterrulename'] = 'Nome della regola';
$string['firstlogin'] = 'Il primo accesso dell\'utente è stato';
$string['firstlogin_help'] = 'È possibile selezionare gli utenti che hanno effettuato l\'accesso per la prima volta in una determinata finestra temporale o in un periodo relativo alla data corrente, così come gli utenti che hanno effettuato l\'accesso per la prima volta in qualsiasi momento o non hanno mai effettuato l\'accesso.';
$string['general'] = 'Generale';
$string['importlogerror'] = 'Non è stato possibile importare la regola \'{$a}\'';
$string['importlogerrorinvalidcondition'] = 'Condizione della regola mancante o non valida';
$string['importlogerrorinvalidoutcome'] = 'Risultato';
$string['importlogsuccess'] = 'Risultato della regola mancante o non valido';
$string['importlogsuccesslink'] = 'Creata la regola \'<a href="{$a->url}">{$a->name}</a>\' contenente {$a->conditionscount} condizioni e {$a->outcomescount} azioni';
$string['importselectall'] = 'Seleziona tutte le regole dinamiche in questo file';
$string['importselectspecified'] = 'Seleziona manualmente...';
$string['includesuspendedusers'] = 'Includi utenti sospesi';
$string['includesuspendedusers_help'] = 'Se questa opzione è selezionata, la regola valuterà le condizioni anche per gli utenti i cui account sono stati sospesi su questo sito. Cercherà quindi di applicare le azioni a tutti gli utenti corrispondenti. Tenere presente che alcune azioni potrebbero non essere applicate completamente agli utenti sospesi, ad esempio perché non ricevono le notifiche.';
$string['lastlogin'] = 'L\'ultimo collegamento dell\'utente il';
$string['lastlogin_help'] = 'E\' possibile selezionare una data relativa rispetto ad oggi oppure utenti che non si sono mai collegati';
$string['limitreached'] = 'Raggiunto il limite di regole dinamiche';
$string['limitreacheddescr'] = 'E\' stato raggiunto il limite di regole dinamiche del sito. Da notare che anche le regole archiviate contano per il raggiungimento del limite.';
$string['limitreachednumdescr'] = 'E\' possibile creare fino a {$a} regole dinamiche. Da notare che anche le regole archiviate contano per il raggiungimento del limite.';
$string['managebadges'] = 'Gestione badge';
$string['managecohorts'] = 'Gestione gruppi globali';
$string['managecompetencies'] = 'Gestione competenze';
$string['managerules'] = 'Gestione regole';
$string['match'] = 'Soddisfacimento';
$string['matchedtime'] = 'Soddisfatta il';
$string['matchlimitinvalid'] = 'La regole deve essere attivata almeno una volta.';
$string['matchstatus'] = 'Stato';
$string['matchstatusdone'] = 'Completato';
$string['matchstatuserror'] = 'Fallito';
$string['matchstatusprogress'] = 'In svolgimento';
$string['messageprovider:notificationoutcome'] = 'Azioni di notifica dello strumento regole dinamiche';
$string['missingcondition'] = 'Condizione mancante';
$string['missingconditiondescr'] = 'La condizione \'{$a->condition}\' non esiste nel plugin \'{$a->plugin}\'.';
$string['missingoutcome'] = 'Azione mancante';
$string['missingoutcomedescr'] = 'L\'azione \'{$a->outcome}\' non esiste nel plugin \'{$a->plugin}\'.';
$string['newnameforrule'] = 'Nuovo nome della regola \'{$a}\'';
$string['newrule'] = 'Nuova regola';
$string['noavailablebadges'] = 'Non sono disponibili badge';
$string['noavailablecohorts'] = 'Non sono disponibili gruppi globali';
$string['noavailablecompetencies'] = 'Non sono disponibili competenze';
$string['noavailablecompletioncourses'] = 'Non sono disponibili corsi con il completamento abilitato';
$string['noavailableenrolledcourses'] = 'Non sono disponibili corsi dove puoi visualizzare l\'elenco dei partecipanti';
$string['noruleconditions'] = 'La regola non ha condizioni';
$string['noruleoutcomes'] = 'La regola non ha azioni';
$string['operatorafter'] = 'Dopo';
$string['operatoranytime'] = 'Qualsiasi orario';
$string['operatorbefore'] = 'Prima';
$string['outcomebadge'] = 'Rilascio badge';
$string['outcomebadgedescription'] = 'Rilascia badge \'{$a}\' agli utenti';
$string['outcomecertificate'] = 'Rilascia certificato';
$string['outcomecertificatedescription'] = 'Rilascia certificato \'{$a}\' agli utenti';
$string['outcomecohort'] = 'Inserimento in gruppo globale';
$string['outcomecohortbroken'] = 'Il gruppo globale con ID {$a}\' non esiste';
$string['outcomecohortdescription'] = 'Inserisci utenti nel gruppo globale \'{$a}\'';
$string['outcomecohortremove'] = 'Rimuovi dal gruppo globale';
$string['outcomecohortremovedescription'] = 'Rimuovi utenti dal gruppo globale \'{$a}\'';
$string['outcomecompetency'] = 'Conferimento competenza';
$string['outcomecompetencybroken'] = 'La competenza con ID {$a}\' non esiste';
$string['outcomecompetencydescription'] = 'Conferisci competenza \'{$a}\' agli utenti';
$string['outcomeisbroken'] = 'Questa azione contiene un errore.';
$string['outcomeisnotavailable'] = 'Questa azione non è disponibile.';
$string['outcomelearningplan'] = 'Assegna piano di formazione';
$string['outcomelearningplanbroken'] = 'Il modello di piano di formazione con ID \'{$a}\' non esiste.';
$string['outcomelearningplandescription'] = 'Assegna agli utenti il modello \'{$a}\' di piano di formazione';
$string['outcomenotification'] = 'Notifica';
$string['outcomenotificationdescription'] = 'Invia notifica \'{$a}\' agli utenti';
$string['outcomenotsaved'] = 'Azione non salvata';
$string['outcomes'] = 'Azioni';
$string['per'] = 'per';
$string['placeholdersdesc'] = 'Segnaposto';
$string['placeholdersdesc_help'] = 'I segnaposto consentono di inerire contenuto dinamico, ad esempio il segnaposto {{userfullname}} verrà sostituito da nome e cognome dell\'utente all\'atto dell\'invio della notifica.';
$string['pluginname'] = 'Regole dinamiche';
$string['previewcoursefullname'] = 'Titolo del corso';
$string['previewcourseshortname'] = 'Titolo abbreviato del corso';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Informazioni sugli utenti che soddisfano una particolare condizione della regola. Gli utenti che soddisfano la condizione saranno impattati dalla azione contenuta nella regola';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = 'Data e ora in cui l\'utente ha soddisfatto la regola';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'ID della regola';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = 'Data e ora nella quale l\'utente non soddisfa più la regola dopo l\'applicazione dell\'azione.';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = 'ID dell\'utente che ha soddisfatto la condizione della regola.';
$string['quarter'] = 'Trimestre';
$string['reg_wpdynamicrules'] = 'Numero di regole dinamiche ({$a})';
$string['reportmatchingusers'] = 'Report degli utenti che soddisfano una regola dinamica';
$string['reportrulematches'] = 'Report degli utenti che hanno soddisfatto e non soddisfatto  una regola dinamica';
$string['rolemanager'] = 'Manager di regole dinamiche';
$string['rolemanagerdescription'] = 'Crea e gestisce regole dinamiche nel proprio tenant';
$string['rulearchive'] = 'Archivia';
$string['ruleeditactions'] = 'Azioni di modifica';
$string['ruleeditdetails'] = 'Dettagli della modifica';
$string['rulematchfreq'] = 'Limite azioni della regola';
$string['rulematchfreq_help'] = 'Non appena un utente soddisfa le condizioni della regola, le azioni verranno applicate. Tali azioni non verranno applicate di nuovo de l\'utente continua a soddisfare la regola. Tuttavia, se l\'utente non soddisfa più le condizioni per poi soddisfarle di nuovo, le azioni saranno applicate di nuovo. L\'impostazione definsce il numero massimo di volte in cui saranno applicate le azioni.';
$string['rulematchfreqdesc0'] = 'Non può essere applicata per più di';
$string['rulematchfreqdesc1'] = 'volte';
$string['rulematchfreqenable'] = 'Limita il numero di volte in cui una regola può essere applicata ad un utente';
$string['rulename'] = 'Nome';
$string['rulenamecopy'] = '{$a->name} Copia {$a->number}';
$string['rulenotfound'] = 'Regola non trovata';
$string['ruleselectitemarchived'] = '{$a} (archiviata)';
$string['ruleunarchive'] = 'Rimuovi dall\'archivio';
$string['ruleviewreport'] = 'Visualizza report';
$string['scheduledtask'] = 'Elaborazione pianificata';
$string['seedetails'] = 'Visualizza dettagli';
$string['seemore'] = 'Visualizza altro...';
$string['select'] = 'Seleziona';
$string['selectbadge'] = 'Seleziona badge';
$string['selectbadge_help'] = 'Affinché un badge possa essere rilasciato da una regola dinamica, devono essere abilitati i badge di sito e il badge deve avere un criterio di rilascio manuale.';
$string['selectcertificate'] = 'Seleziona certificto';
$string['selectcompetency'] = 'Selezione competenza';
$string['selectcompetency_help'] = 'Seleziona competenza da conferire';
$string['selectlearningplan'] = 'Seleziona piano di formazione';
$string['selectlearningplan_help'] = 'Seleziona modello di piano di formazione';
$string['sendto'] = 'Invia a';
$string['sendtodptlead'] = 'Capo reparto';
$string['sendtomanager'] = 'Manager';
$string['sendtomatching'] = 'Utenti che soddisfano';
$string['sitelink'] = 'Link del sito';
$string['sitelinkspecific'] = 'Link al sito specifico per il tenant';
$string['siteshortname'] = 'Nome abbreviato del sito';
$string['startdate'] = 'Data di inizio';
$string['subject'] = 'Oggetto';
$string['taskprocessrules'] = 'Elaborazione regole';
$string['timeadded'] = 'Inserito nel gruppo globale il o dopo questa data e ora';
$string['timecreated'] = 'Creazione';
$string['timeenrolled'] = 'Data e ora di iscrizione il o dopo il';
$string['toomanybadgestoshow'] = 'Troppi badge da visualizzare';
$string['toomanycertificatestoshow'] = 'Troppi badge da visualizzare ({$a})';
$string['toomanycohortstoshow'] = 'Troppi gruppi globali da visualizzare ({$a})';
$string['toomanycompetenciestoshow'] = 'Troppe competenze da visualizzare ({$a})';
$string['toomanylptoshow'] = 'Troppi piani di formazione da visualizzare ({$a})';
$string['uneditabledescription'] = '{$a} (dettagli non disponibili)';
$string['usercreatetype_help'] = 'E\' possibile selezionare una data relativa alla data odierna per individuare gli utenti creati in un dato intervallo di tempo.';
$string['userdetailshidden'] = 'I dettagli sono nascosti';
$string['userfirstlogin'] = 'Primo accesso dell\'utente';
$string['userplaceholders'] = 'Segnaposto utente';
$string['viewmatchingusers'] = 'Visualizza utenti che soddisfano la regola';
$string['warningchangeswillnotapplymatchedusers'] = 'Le modifiche non influenzeranno gli utenti che hanno soddisfatto la regola';
