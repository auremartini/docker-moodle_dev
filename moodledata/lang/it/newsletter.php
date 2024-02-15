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
 * Strings for component 'newsletter', language 'it', version '4.1'.
 *
 * @package     newsletter
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['AND'] = 'and';
$string['OR'] = 'or';
$string['account_already_confirmed'] = 'Il suo account è già stato abilitato.
Per accedere alla newsletter, fare clic su {$a->newsletterlink}.';
$string['account_confirmed'] = 'Benvenuto su {$a->sitename}, {$a->fullname}!

Il tuo account {$a->username} è stato abilitato.
Per modificare i dettagli del tuo account, clicca su {$a->editlink}.
Per accedere alla newsletter, cliccare su {$a->newsletterlink}.';
$string['allowguestusersubscriptions'] = 'Consentire l\'iscrizione di utenti ospiti';
$string['allowguestusersubscriptions_help'] = 'Abilitare la possibilità per gli utenti ospiti di iscriversi alle newsletter di questo sito. Ciò richiederà la creazione di account utente.';
$string['allusers'] = 'Utenti (compresi quelli non iscritti):';
$string['already_published'] = 'Questa edizione è stata pubblicata.';
$string['attachments'] = 'Allegati';
$string['attachments_help'] = 'Caricate i file che volete consegnare con questa edizione come allegati.';
$string['attachments_no'] = 'Nessun allegato caricato.';
$string['biggerthan'] = 'è più grande di (numero)';
$string['calculateusers'] = 'Calcola il numero di destinatari filtrati';
$string['cohortmanagement'] = 'Iscriversi/non iscriversi ai gruppi globali';
$string['cohortsavailable'] = 'Gruppi globali disponibili';
$string['config_activation_timeout_desc'] = 'Selezionare per quanti giorni saranno validi i link di attivazione inviati via e-mail.';
$string['config_activation_timeout_label'] = 'Tempo di scadenza dei link di attivazione';
$string['config_bounce_email'] = 'Indirizzo e-mail che dovrebbe ricevere i bounces. Assicurarsi che questo indirizzo sia usato solo per gestire i bounce.';
$string['config_bounce_enable'] = 'Abilitare l\'elaborazione dei bounce per il modulo newsletter';
$string['config_bounceinfo'] = 'Utilizzare la gestione dei bounces per la newsletter solo se non è possibile configurare le impostazioni di rimbalzo VERP di Moodle come descritto nella pagina seguente: https://docs.moodle.org/dev/Email_processing.
Il metodo VERP Moodle non può essere utilizzato su tutti i sistemi ed è piuttosto difficile da configurare. Questa è un\'alternativa più semplice, ma funziona solo per il modulo newsletter. Dopo aver salvato le impostazioni, testarle in {$a}';
$string['config_bounceprocessing'] = 'Impostazioni per la gestione dei bounces: Fornire i dati di accesso alla casella di posta elettronica per l\'indirizzo di posta di bounce.';
$string['config_debug_desc'] = 'Selezionare questa casella per abilitare l\'output di debug per il cron job della newsletter.';
$string['config_debug_label'] = 'Modalità cron DEBUG';
$string['config_host'] = 'Server host di posta (ex. mail.yourserver.com)';
$string['config_password'] = 'Password della casella di posta elettronica';
$string['config_port'] = 'casella di posta elettronica; l\'impostazione predefinita è 143, altre scelte comuni sono 110 (pop3), 995 (gmail).';
$string['config_send_notifications_desc'] = 'Selezionare questa casella per abilitare l\'invio di notifiche relative all\'iscrizione agli iscritti.';
$string['config_send_notifications_label'] = 'Invio di notifiche';
$string['config_sendinglimit'] = 'Limitare le e-mail per esecuzione';
$string['config_sendinglimit_desc'] = 'Limita il numero di e-mail inviate a ogni esecuzione di cron per evitare lo spam.';
$string['config_service'] = 'Il servizio da utilizzare (imap o pop3)';
$string['config_service_option'] = 'Le opzioni del servizio (nessuna, tls, notls, ssl)';
$string['config_username'] = 'Nome utente della casella di posta';
$string['contains'] = 'contiene (testo)';
$string['containsnot'] = 'non contiene (testo)';
$string['create_new_issue'] = 'Creare una nuova edizione';
$string['default_stylesheet'] = 'Foglio di stile predefinito';
$string['delete_all_subscriptions'] = 'Eliminare tutte le iscrizioni';
$string['delete_issue'] = 'Eliminare questa edizione';
$string['delete_issue_question'] = 'Sei sicuro di voler eliminare questa edizione?';
$string['delete_subscription_question'] = 'Sei sicuro di voler eliminare questa iscrizione?';
$string['duplicate_issue'] = 'Duplicata questa edizione';
$string['duplicate_issue_title'] = 'Duplica l\'edizione della newsletter';
$string['edit_issue'] = 'Modifica questa edizione';
$string['edit_issue_title'] = 'Modifica dell\'edizione della newsletter';
$string['edit_subscription_title'] = 'Modifica iscrizione';
$string['emailexists'] = 'Esiste già un account utente con questo indirizzo e-mail. Effettuare il login per iscriversi alla newsletter. Se si è dimenticato il login, utilizzare il link {$a} nella pagina di login per recuperarlo.';
$string['entries_per_page'] = 'Voci per pagina';
$string['equals'] = 'ha esattamente questo valore (testo o numero)';
$string['equalsnot'] = 'non ha esattamente questo valore (testo o numero)';
$string['eventissuecreated'] = 'Creazione dell\'edizione della newsletter';
$string['eventissueviewed'] = 'Edizione della newsletter visualizzata';
$string['eventsubscriptioncreated'] = 'Nuova iscrizione alla newsletter';
$string['eventsubscriptiondeleted'] = 'Iscrizione alla newsletter cancellata';
$string['eventsubscriptionresubscribed'] = 'Ri-iscrizione alla newsletter';
$string['eventsubscriptionsviewed'] = 'Iscrizioni alla newsletter visualizzate';
$string['eventsubscriptionunsubscribed'] = 'Iscrizione alla newsletter cancellata';
$string['filteredusercount'] = '{$a} utenti riceveranno la newsletter. Se si modifica qualcosa, fare clic sul pulsante "Calcola" qui sotto.';
$string['filteredusers'] = 'Utenti filtrati:';
$string['groupby'] = 'Problemi di gruppo da parte di:';
$string['guestsubscribe'] = 'Iscriviti ora';
$string['guestsubscriptionsuccess'] = 'La tua email è stata registrata con successo. <br />  Per attivare l\'iscrizione, controllate la casella di posta del vostro account di posta ({$a}) e cliccate sul link di conferma.';
$string['header_actions'] = 'Azioni';
$string['header_bounceratio'] = 'Rapporto di bounce';
$string['header_content'] = 'Contenuto dell\'edizione';
$string['header_email'] = 'E-Mail';
$string['header_filteruser'] = 'Filtra Utenti';
$string['header_filteruserinfo'] = 'È possibile limitare gli utenti che riceveranno la newsletter definendo un campo del profilo utente che deve avere un valore specifico. Solo gli utenti con questo valore riceveranno la newsletter.';
$string['header_health'] = 'Stato (Consegnato / Bounces)';
$string['header_name'] = 'Nome';
$string['header_profilefield'] = 'Campo profilo per l\'iscrizione';
$string['header_publish'] = 'Opzioni di pubblicazione';
$string['header_publishinfo'] = 'Una volta avviata la consegna dell\'edizione della newsletter, non sarà più possibile modificare la data di pubblicazione.';
$string['header_subscriberid'] = 'Sottoscritto da';
$string['header_timestatuschanged'] = 'Ultima modifica di stato';
$string['header_timesubscribed'] = 'Data di sottoscrizione';
$string['header_unsubscriberid'] = 'Non iscritto da';
$string['health_0'] = 'Attivo';
$string['health_1'] = 'Problematica';
$string['health_2'] = 'Nella lista nera';
$string['health_4'] = 'Non sottoscritto';
$string['inarray'] = 'l\'utente ha uno di questi valori separati dalla virgola';
$string['isempty'] = 'il campo è vuoto';
$string['isnotempty'] = 'il campo non è vuoto';
$string['issue_htmlcontent'] = 'Contenuto HTML';
$string['issue_stylesheet'] = 'Foglio di stile per il contenuto HTML';
$string['issue_title'] = 'Titolo edizione';
$string['issue_title_help'] = 'Digitare il titolo di questa edizione. Richiesto.';
$string['lowerthan'] = 'è minore di (numero)';
$string['manage_subscriptions'] = 'Gestire le iscrizioni';
$string['mode_group_by_month'] = 'Raggruppare le edizioni per mese';
$string['mode_group_by_week'] = 'Raggruppare le edizioni per settimana';
$string['mode_group_by_year'] = 'Raggruppare le edizioni per anno';
$string['modulename'] = 'Newsletter';
$string['modulename_help'] = 'Il modulo newsletter consente la pubblicazione di newsletter via e-mail.';
$string['modulenameplural'] = 'Newsletters';
$string['newsletter'] = 'Newsletter';
$string['newsletter:addinstance'] = 'Aggiungi una newsletter';
$string['newsletter:createissue'] = 'Creare un edizione di newsletter';
$string['newsletter:deleteissue'] = 'Cancellare un edizione della newsletter';
$string['newsletter:deletesubscription'] = 'Cancellare le iscrizioni alla newsletter';
$string['newsletter:duplicateissue'] = 'Duplica l\'edizione della newsletter';
$string['newsletter:editissue'] = 'Modificare un edizione della newsletter';
$string['newsletter:editsubscription'] = 'Modifica delle iscrizioni alla newsletter';
$string['newsletter:manageownsubscription'] = 'Gestisci la mia iscrizione alla newsletter';
$string['newsletter:managesubscriptions'] = 'Gestisci le iscrizioni alla newsletter';
$string['newsletter:publishissue'] = 'Pubblica un edizione della newsletter';
$string['newsletter:readissue'] = 'Leggi un numero della newsletter';
$string['newsletter:subscribecohort'] = 'Iscrivi un gruppo globale alla newsletter';
$string['newsletter:subscribeuser'] = 'Iscrivi gli utenti alla newsletter';
$string['newsletter:unsubscribecohort'] = 'Cancella una gruppo globale da una newsletter';
$string['newsletter:viewnewsletter'] = 'Visualizza un\'istanza di newsletter';
$string['newsletterintro'] = 'Descrizione';
$string['newslettername'] = 'Nome';
$string['newslettername_help'] = 'È il contenuto del tooltip di aiuto associato al campo della newsletter. È supportata la sintassi Markdown.';
$string['no_issues'] = 'Questa newsletter non ha ancora edizioni.';
$string['nofieldselected'] = 'Nessun campo del profilo selezionato';
$string['notinarray'] = 'l\'utente non ha nessuno di questi valori separati da virgola';
$string['page_first'] = 'Primo';
$string['page_last'] = 'Ultimo';
$string['page_next'] = 'Successivo';
$string['page_previous'] = 'Precedente';
$string['pluginadministration'] = 'Amministrazione newsletter';
$string['pluginname'] = 'Next';
$string['privacy:metadata:newsletter_bounces'] = 'Rappresenta le newsletter che abbiamo ricevuto un bounce dal server.';
$string['privacy:metadata:newsletter_bounces:issueid'] = 'Quale newsletter è stata respinta';
$string['privacy:metadata:newsletter_bounces:statuscode'] = 'Codice di stato ricevuto';
$string['privacy:metadata:newsletter_bounces:timecreated'] = 'Timestamp della creazione della voce';
$string['privacy:metadata:newsletter_bounces:timereceived'] = 'Timestamp della ricezione del bounce';
$string['privacy:metadata:newsletter_bounces:type'] = 'Tipo che abbiamo ricevuto';
$string['privacy:metadata:newsletter_bounces:userid'] = 'Utente che ha creato il record';
$string['privacy:metadata:newsletter_deliveries'] = 'Rappresentare le newsletter che abbiamo inviato agli utenti.';
$string['privacy:metadata:newsletter_deliveries:delivered'] = 'Data di consegna della newsletter';
$string['privacy:metadata:newsletter_deliveries:issueid'] = 'ID del problema inviato';
$string['privacy:metadata:newsletter_deliveries:newsletterid'] = 'ID della newsletter inviata';
$string['privacy:metadata:newsletter_deliveries:userid'] = 'Utente che ha ricevuto la newsletter';
$string['privacy:metadata:newsletter_subscriptions'] = 'Rappresenta una sottoscrizione a una newsletter.';
$string['privacy:metadata:newsletter_subscriptions:health'] = 'Stato di salute della sottoscrizione da memorizzare se sono stati riscontrati errori';
$string['privacy:metadata:newsletter_subscriptions:newsletterid'] = 'ID della newsletter sottoscritta';
$string['privacy:metadata:newsletter_subscriptions:sentnewsletters'] = 'Numero di newsletter già inviate';
$string['privacy:metadata:newsletter_subscriptions:subscriberid'] = 'ID dell\'utente che si è iscritto';
$string['privacy:metadata:newsletter_subscriptions:timestatuschanged'] = 'Timestamp dell\'ultima modifica';
$string['privacy:metadata:newsletter_subscriptions:timesubscribed'] = 'Timestamp al momento della sottoscrizione';
$string['privacy:metadata:newsletter_subscriptions:unsubscriberid'] = 'ID dell\'utente che si è disiscritto';
$string['privacy:metadata:newsletter_subscriptions:userid'] = 'Utente che ha creato il record';
$string['process_bounces'] = 'Elaborare le e-mail respinte';
$string['publish_in'] = 'Da pubblicare in {$a->days} giorni, {$a->days} ore, {$a->days} min, {$a->seconds} sec.';
$string['publishon'] = 'Pubblica su';
$string['readonline'] = 'Visualizza la versione web';
$string['resubscribe'] = 'Confermare la sottoscrizione';
$string['resubscribe_btn'] = 'Conferma';
$string['resubscribe_text'] = 'Siete stati cancellati da questa newsletter. Volete davvero riscrivervi?';
$string['resubscriptionsuccess'] = 'La re-iscrizione è stata effettuata con successo.';
$string['search:newsletterissue'] = 'Edizione newsletter';
$string['send_newsletter'] = 'Invia newsletter';
$string['stylesheets'] = 'Caricare i fogli di stile della newsletter';
$string['stylesheets_help'] = 'Caricare i file CSS che serviranno come fogli di stile per i numeri di questa newsletter. È possibile caricarne più di uno e selezionarli quando si crea un nuovo numero. Questo campo è facoltativo, poiché il modulo viene fornito con almeno un file di foglio di stile già pronto.';
$string['sub_mode_forced'] = 'Forzato';
$string['sub_mode_opt_in'] = 'Opt in';
$string['sub_mode_opt_out'] = 'Opt out';
$string['subscribe'] = 'Iscriviti';
$string['subscribe_question'] = 'Desidera iscriversi alla newsletter "{$a->name}" utilizzando l\'indirizzo e-mail "{$a->email}"?';
$string['subscribedusers'] = 'Utenti iscritti';
$string['subscribedusersmatching'] = 'Utenti iscritti corrispondenti a ({$a})';
$string['subscribercandidates'] = 'Potenziali sottoscrittori';
$string['subscribercandidatesmatching'] = 'Utenti corrispondenti per ({$a})';
$string['subscription_message'] = 'Gentile {$a->fullname},

Hai richiesto di essere iscritto alla newsletter di
 \'{$a->newslettername}\' del \'{$a->sitename}\'
utilizzando questo indirizzo e-mail.

Si prega di confermare l\'iscrizione cliccando sul seguente link:

{$a->link}

È possibile modificare le impostazioni in qualsiasi momento utilizzando queste credenziali:

Username: {$a->username}
Password: {$a->password}


Se avete bisogno di aiuto, contattate l\'amministratore del sito,
{$a->admin}';
$string['subscription_mode'] = 'Utenti corrispondenti per ({$a})';
$string['subscription_mode_help'] = 'Selezionare se gli utenti iscritti sono iscritti a questa newsletter automaticamente (opt-out) o se devono iscriversi manualmente (opt-in). ATTENZIONE! L\'opt-out comporta l\'iscrizione automatica di tutti gli utenti iscritti!';
$string['toc'] = 'Selezionare la modalità di autogenerazione della tabella dei contenuti';
$string['toc_header'] = 'Tabella dei contenuti';
$string['toc_help'] = 'Questo è il numero di livelli di titoli da includere. Esempio: Un numero di newsletter con tre diversi livelli di titoli (h1, h2, h3). Si può scegliere di utilizzare solo i titoli più importanti per la tabella dei contenuti. Quindi si sceglie di selezionare solo 1 livello di titoli. Se si vuole includere anche l\'h2 nella tabella dei contenuti, si scelgono 2 livelli.';
$string['toc_no'] = 'Non autogenerare una tabella dei contenuti';
$string['toc_yes'] = 'Usare il livello(i) di titolo {$a}';
$string['unsubscribe'] = 'Elimina l\'iscrizione';
$string['unsubscribe_link_text'] = 'Clicca qui per la discrizione';
$string['unsubscribe_mail_subj'] = 'L\'iscrizione alla newsletter è stata annullata con successo';
$string['unsubscribe_mail_text'] = '<p>
Caro/a {$a->firstname} {$a->lastname},
<br>
L\'iscrizione alla newsletter {$a->newslettertitle} è stata annullata con successo. Se lo avete fatto di proposito, non è necessaria nessun ulteriore azione. Se invece vi siete cancellati per sbaglio, potete riscrivervi ora al seguente link:
<br>
{$a->newsletterurl}</p>';
$string['unsubscribe_nounsub'] = 'Distributore';
$string['unsubscribe_nounsub_text'] = 'Non inviate un link di annullamento dell\'iscrizione.';
$string['unsubscribe_question'] = 'Desidera cancellare il suo indirizzo e-mail "{$a->email}" dalla newsletter "{$a->nome}"?';
$string['unsubscribedinfo'] = 'Gli utenti contrassegnati con (!) sono stati cancellati.';
$string['unsubscription_succesful'] = 'La tua email "{$a->email}" è stata rimossa con successo dalla seguente newsletter: "{$a->name}".';
$string['userprofilefield_addcondition'] = 'Aggiungi un\'altra condizione';
$string['userprofilefield_field'] = 'Campo profilo utente';
$string['userprofilefield_operator'] = 'Operatore';
$string['userprofilefield_value'] = 'Valore';
$string['welcomemessage'] = 'Messaggio di benvenuto';
$string['welcomemessage_help'] = 'Questo testo viene presentato all\'utente dopo che si è iscritto con successo a una newsletter.';
$string['welcomemessageguestuser'] = 'Messaggio di benvenuto all\'utente ospite';
$string['welcomemessageguestuser_help'] = 'Questo testo verrà visualizzato da un nuovo utente dopo che si è iscritto con successo come OSPITE a una newsletter.';
$string['welcomeredirect'] = 'Benvenuto! A breve verrà reindirizzato alla pagina di accesso.';
$string['welcometonewsletter'] = 'Benvenuto nella newsletter';
$string['welcometonewsletter_guestsubscription'] = 'Benvenuto alla newsletter! <br />Puoi cancellarti in qualsiasi momento cliccando sul pulsante di cancellazione dopo il login o sul link di cancellazione presente in ogni edizione della newsletter.';
