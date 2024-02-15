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
 * Strings for component 'tool_mergeusers', language 'it', version '4.1'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Scegli utenti da unire';
$string['clear_selection'] = 'Cancella la selezione di utenti';
$string['cligathering:description'] = 'Stabilire le coppie di id utente che verranno uniti, il primo verrà unito nel\\n
secondo. Il primo ID utente (fromid) \'perde\' tutti i suoi dati che verranno \'migrati\'\\n
nel secondo (toid). L\'utente "toid" includerà i dati di entrambi gli utenti.';
$string['cligathering:fromid'] = 'Id utente  (fromid) dal quale migrare i dati:';
$string['cligathering:stopping'] = 'Per interrompere l\'unione, Ctrl+C o digita -1, o nel campo fromid o nel campo toid.';
$string['cligathering:toid'] = 'Id utente di destinazione (toid):';
$string['dbok'] = 'Unione avvenuta correttamente';
$string['deleted'] = 'L\'utente con ID  {$a} è stato eliminato';
$string['error_return'] = 'Ritorna alla ricerca';
$string['errorsameuser'] = 'Si sta cercando di unire lo stesso utente';
$string['eventusermergedfailure'] = 'Unione non riuscita';
$string['eventusermergedsuccess'] = 'Unione avvenuta correttamente';
$string['excluded_exceptions'] = 'Escludi eccezioni';
$string['exportlogs'] = 'Esporta i log in formato CSV';
$string['finishtime'] = 'Unione completata {$a}';
$string['form_description'] = '<p>E\' possibile cercare qui gli utenti
    se non conosci il nome utente/numero ID dell\'utente. Altrimenti è possibile espandere il modulo e
    inserire direttamente tali informazioni. Si prega di consultare la guida sui campi per ulteriori informazioni.</p>';
$string['form_header'] = 'Trova utenti da unire';
$string['header'] = 'Unione di due utenti in un unico account';
$string['header_help'] = '<p>Dato un utente da eliminare e un utente da mantenere, questo plugin unirà i dati dell\'utente
 associati al primo utente nel secondo. Entrambi gli utenti devono
 esistere già e nessun account verrà effettivamente eliminato. Il processo di eliminazione deve essere eseguito manualmente dall\'amministratore.</p>
 <p><strong>Fallo solo se sai cosa stai facendo perché non è reversibile!</strong></p>';
$string['into'] = 'in';
$string['invalid_option'] = 'Opzione del modulo non valida';
$string['invaliduser'] = 'Utente non valido';
$string['logid'] = 'Per ulteriori informazioni, i risultati sono registrati nel log id {$a}.';
$string['logko'] = 'Riscontrati alcuni errori:';
$string['logok'] = 'Query inviate al DB:';
$string['mergedbyuseridonlog'] = 'Uniti da';
$string['mergeusers'] = 'Unisci account utenti';
$string['mergeusers:mergeusers'] = 'Unisci account utenti';
$string['mergeusers:view'] = 'Unione Account utenti';
$string['mergeusers_confirm'] = 'Dopo aver confermato, verrà avviato il processo di unione.
    <br /><strong>Questa operazione non è reversibile!</strong>
    Sei sicuro di voler continuare?';
$string['mergeusersadvanced'] = '<strong>Inserimento diretto dell\'utente</strong>';
$string['mergeusersadvanced_help'] = 'Inserire nei campi sottostanti se
    si sa esattamente quali utenti si vuole unire.<br /><br />
    Fare clic sul pulsante "cerca" per verificare/confermare che l\'input inserito
 sia effettivamente un utente.';
$string['merging'] = 'Uniti';
$string['newuser'] = 'Utente da mantenere';
$string['newuserid'] = 'ID utente da mantenere';
$string['newuseridonlog'] = 'Utente mantenuto';
$string['no_saveselection'] = 'Non è stato selezionato nè un vecchio utente nè un nuovo utente.';
$string['nologs'] = 'Non ci sono ancora logs di unione.';
$string['nomergedby'] = 'Non registrato';
$string['olduser'] = 'Utente da rimuovere';
$string['olduserid'] = 'ID utente da rimuovere';
$string['olduseridonlog'] = 'Utente rimosso';
$string['pluginname'] = 'Unione account utenti';
$string['qa_action_delete_fromid'] = 'Mantieni i tentativi del nuovo utente';
$string['qa_action_delete_toid'] = 'Mantieni i tentativi del vecchio utente';
$string['qa_action_remain'] = 'Non fare nulla: non mantenere nè eliminare';
$string['qa_action_remain_log'] = 'I dati utente dalla tabella <strong>{$a}</strong> non sono aggiornati.';
$string['qa_action_renumber'] = 'Unisci i tentativi di entrambi gli utenti e rinumera';
$string['qa_chosen_action'] = 'Attiva l\'opzione per i tentativi dei quiz: {$a}.';
$string['qa_grades'] = 'Punteggi ricalcolati per i quiz: {$a}.';
$string['quizattemptsaction'] = 'Come gestire i tentativi dei quiz';
$string['quizattemptsaction_desc'] = 'Quando si uniscono i tentativi di quiz, possono verificarsi tre casi:
    <ol>
    <li>Solo il vecchio utente ha tentativi di quiz. Tutti i tentativi si visualizzeranno come se fossero stati fatti dal nuovo utente.</li>
    <li>Solo il nuovo utente ha tentativi di quiz. Tutto è corretto e non è stato fatto nulla.</li>
    <li>Entrambi gli utenti hanno svolto tentativi nello stesso quiz. <strong>Occorre scegliere cosa fare in questo caso.
    </strong>. Occorre scegliere una delle seguenti azioni:
        <ul>
        <li><strong>{$a->renumber}</strong>. I tentativi del vecchio utente vengono uniti a quelli del nuovo utente
        e rivalutati dal momento in cui sono stati avviati.</li>
        <li><strong>{$a->delete_fromid}</strong>. I tentativi del vecchio utente vengono rimossi. I tentativi del nuovo utente
        vengono mantenuti, poiché questa opzione li considera i più importanti.</li>
        <li><strong>{$a->delete_toid}</strong>. I tentativi del nuovo utente vengono rimossi. I tentativi dai
         vecchi utenti vengono mantenuti, poiché questa opzione li considera i più importanti.</li>
        <li><strong>{$a->remain}</strong> (per impostazione predefinita). I tentativi non vengono accorpati né cancellati, rimanendo collegati
        all\'utente che li ha creati. Questa è l\'azione più sicura, ma è possibile unire gli utenti dall\'utente A all\'utente B o da B ad A
        e produrre valutazioni differenti del quiz.</li>
        </ul>
    </li>';
$string['results'] = 'Risultati dell\'unione e log';
$string['review_users'] = 'Conferma utenti da unire';
$string['saveselection_submit'] = 'Salva la selezione';
$string['searchuser'] = 'Cerca utente';
$string['searchuser_help'] = 'Inserire un nome utente, nome/cognome, indirizzo email
    o user id per cercare potenziali utenti. E\' possibile anche specificare se si
    desidera eseguire la ricerca solo in un determinato campo.';
$string['starttime'] = 'Unione iniziata {$a}';
$string['suspenduser_setting'] = 'Sospendi vecchio account';
$string['suspenduser_setting_desc'] = 'Se abilitato sospende il vecchio utente
    automaticamente alla conclusione del processo di unione, impedendo all\'utente
    di accedere a Moodle (consigliato). Se disabilitato, il vecchio utente rimane attivo.
    In entrambi i casi, il vecchio utente non avrà più i dati.';
$string['tableko'] = 'Tabella {$a} : l\'update NON E\' OK!';
$string['tableok'] = 'Tabella {$a} : update OK!';
$string['tableskipped'] = 'Per motivi di log o di sicurezza stiamo saltando <strong>{$a}</strong>.
 <br />Per rimuovere queste voci, eliminare il vecchio utente dopo che questo script è stato eseguito correttamente.';
$string['timetaken'] = 'L\'unione è stata eseguita in {$a} secondi';
$string['transactions_not_supported'] = 'Per tua informazione, il tuo database
    <strong>non supporta le transazioni</strong>.';
$string['transactions_setting'] = 'Solo transazioni consentite';
$string['transactions_setting_desc'] = 'Se abilitato, l\'unione degli utenti non funzionerà
    su database che NON supportano le transazioni (consigliato).
    Abilitare questa opzione è necessario per garantire che il database rimanga coerente
    in caso di errori di unione. <br />Se disabilitato, verranno eseguite sempre azioni di unione.
    In caso di errori, il log di unione mostrerà qual era il problema.
    Segnalare ai sostenitori del plugin per avere una soluzione in breve.
    <br />Le tabelle principali di Moodle e alcuni plug-in di terze parti sono già
    considerate da questo plugin. Se non disponi di plug-in di terze parti
    nella tua installazione di Moodle, si può stare tranquilli sull\'esecuzione di questo plugin
    abiltiando o disabilitando questa opzione.';
$string['transactions_supported'] = 'Per tua informazione, il tuo database
    <strong>supporta le transazioni</strong>.';
$string['uniquekeynewidtomaintain'] = 'Mantieni i dati del nuovo utente';
$string['uniquekeynewidtomaintain_desc'] = 'In caso di conflitto,
    come quando la colonna relativa a user.id è una chiave univoca, questo plugin manterrà i
    dati del nuovo utente (per impostazione predefinita). Ciò significa anche che i dati del vecchio utente vengono
    cancellati per mantenere la coerenza. Altrimenti, se questa opzione viene deselezionata,
    i dati del vecchio utente verranno conservati.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Rivedi utenti da unire</b>';
$string['userselecttable_legend'] = '<b>Seleziona utenti da unire</b>';
$string['viewlog'] = 'Visualizza i log dell\'unione utenti';
$string['wronglogid'] = 'I log richiesti non esistono.';
