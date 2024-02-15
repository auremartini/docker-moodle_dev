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
 * Strings for component 'block_coupon', language 'it', version '4.1'.
 *
 * @package     block_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Elimina coupon';
$string['action:coupon:delete:confirm'] = 'Sei sicuro di voler eliminare questo coupon? Questo non può essere annullato!';
$string['action:error:delete'] = 'elimina errore';
$string['and'] = 'e';
$string['batchidselect'] = 'Batch ID';
$string['blockname'] = 'Coupon';
$string['button:continue'] = 'Continua';
$string['button:next'] = 'Successivo';
$string['button:save'] = 'Genera coupon';
$string['button:submit_coupon_code'] = 'Invia coupon';
$string['cleanup:confirm:confirmmessage'] = 'Sì, voglio eliminare i coupon con queste opzioni';
$string['cleanup:confirm:header'] = 'Si prega di confermare le seguenti opzioni di pulizia';
$string['cohort'] = 'coorti';
$string['confirm_coupons_sent_body'] = 'Ciao,<br /><br />

Desideriamo informarti che tutti i coupon da te creati su {$a->timecreated} sono stati inviati.<br /><br />

Cordiali saluti,<br /><br />

L\'Amministratore di Moodle';
$string['confirm_coupons_sent_subject'] = 'Tutti i coupon sono stati inviati';
$string['coupon:addinstance'] = 'Aggiungere blocco Coupon';
$string['coupon:administration'] = 'Gestire blocco Coupon';
$string['coupon:claim:wronguser'] = 'Questo coupon personalizzato <i>non</i> può essere riscosso da te';
$string['coupon:cleanup:heading'] = 'Elimina coupon';
$string['coupon:cleanup:info'] = 'Utilizza questo modulo per configurare i coupon da eliminare dal sistema.<br/>
<b>Attenzione:</b> questa procedura <i>rimuove</i> i coupon dal sistema, non c\'è modo di recuperarli una volta completata la procedura di pulizia';
$string['coupon:deleted'] = 'Coupon eliminato/i';
$string['coupon:extendenrol'] = 'Proroga iscrizione coupon';
$string['coupon:extendenrolments'] = 'Genera coupon per estendere le iscrizioni';
$string['coupon:extenrol:summary'] = 'Tipo di coupon: {$a->coupontype}<br/>
Quantità di coupon da generare: {$a->amount}<br/>
Sfondo utilizzato per generare coupon: {$a->logo}<br/>
Coupon generati da: {$a->owner}<br/>
Corsi selezionati: {$a->courses}<br/>
Periodo di estensione: {$a->duration}<br/>
Invia coupon su: {$a->senddate}<br/>
Invia coupon a: {$a->recipient}<br/><br/>
Corpo dell\'email: {$a->emailbody}<br/>';
$string['coupon:generatecoupons'] = 'Crea nuovo coupon';
$string['coupon:inputcoupons'] = 'Utilizza un coupon per iscriverti';
$string['coupon:myaddinstance'] = 'Aggiungere blocco coupon alla pagina My';
$string['coupon:send:fail'] = 'Invio mail fallito. Motivo: {$a}';
$string['coupon:senddate:instant'] = 'Istante';
$string['coupon:timeframe'] = 'Tipo';
$string['coupon:type'] = 'Tipo';
$string['coupon:type:all'] = 'Tutti';
$string['coupon:type:cohort'] = 'Iscrizione gruppo globale';
$string['coupon:type:course'] = 'Iscrizione corso';
$string['coupon:type:enrolext'] = 'Estendi iscrizione';
$string['coupon:used'] = 'Rimozione';
$string['coupon:used:all'] = 'Tutti i coupon';
$string['coupon:used:no'] = 'Solo coupon non utilizzati';
$string['coupon:used:yes'] = 'Solo coupon utilizzati';
$string['coupon:user:heading'] = 'Utilizza configurazione per {$a->firstname} {$a->lastname}';
$string['coupon:user:info'] = 'Utilizza il modulo sottostante per configurare le opzioni e i corsi accessibili per cui questo utilizzo può richiedere il coupon';
$string['coupon:viewallreports'] = 'Visualizza report coupon (tutt)';
$string['coupon:viewreports'] = 'Visualizza report coupon (solo i miei)';
$string['coupon_mail_content'] = '<p>Gentile {$a->to_name},</p>
<p>Ricevi questo messaggio perché sono stati generati nuovi coupon.<br/>
I coupon sono disponibili per il download nell\'ambiente e-learning.<br /><br />
Fai clic su {$a->downloadlink} per ottenere i tuoi coupon</p>
<p>Cordiali saluti,<br /><br />
{$a->from_name}</p>';
$string['coupon_mail_csv_content'] = 'Gentile ##to_gender## ##to_name##,<br /><br />

Sei stato recentemente iscritto al nostro corso di formazione ##course_fullnames##.
Durante il corso hai accesso al nostro ambiente di apprendimento online: ##site_name##.<br /><br />

In questo ambiente, oltre ai materiali del corso, avrai la possibilità di fare rete con altri studenti.
Il corso inizierà con una serie di compiti di preparazione, chiediamo gentilmente di prenderne visione al più tardi 3 giorni (lavorativi) prima dell\'inizio del corso.
Sia tu che l\'insegnante potete quindi prepararvi correttamente per il corso.<br /><br />

Tutti i materiali del corso saranno accessibili per te, al massimo 4 giorni prima dell\'inizio del corso.
Può sempre succedere che l\'insegnante richieda materiali extra da aggiungere in un secondo momento, ad esempio dopo una seduta in presenza.
Se ciò accade, sarai in grado di vederlo nell\'ambiente di apprendimento.
Durante gli incontri non riceverai materiale didattico cartaceo, ti consigliamo di portare un laptop e/o tablet.<br /><br />

Il codice coupon di cui hai bisogno per iscriverti è: ##submission_code##<br/><br/>

Questo coupon è personale e unico e dà accesso ai corsi appropriati per la tua istruzione.
Si prega di leggere attentamente le istruzioni sul coupon.<br /><br />

Se hai domande sulla creazione di un account o se trovi altri problemi, puoi contattare l\'helpdesk.
Le informazioni possono essere trovate sul sistema di apprendimento.
Quando nessuno è disponibile a rispondere alla tua domanda, ti preghiamo di lasciare il tuo nome, indirizzo e-mail e numero di telefono e ti risponderemo il prima possibile.<br /><br />

Ti auguriamo buona fortuna per il corso.<br /><br />

Cordiali saluti,<br /><br />

##site_name##';
$string['coupon_mail_csv_content_cohorts'] = 'Gentile ##to_gender## ##to_name##,<br /><br />

Sei stato recentemente iscritto alla nostra formazione **SI PREGA DI COMPILARE MANUALMENTE**.
Durante il corso hai accesso al nostro ambiente di apprendimento online: ##site_name##.<br /><br />

In questo ambiente, oltre ai materiali del corso, avrai la possibilità di fare rete con altri studenti.
Il corso inizierà con una serie di compiti di preparazione, chiediamo gentilmente di prenderne visione al più tardi 3 giorni (lavorativi) prima dell\'inizio del corso.
Sia tu che l\'insegnante potete quindi prepararvi correttamente per il corso.<br /><br />

Tutti i materiali del corso saranno accessibili per te, al massimo 4 giorni prima dell\'inizio del corso.
Può sempre succedere che l\'insegnante richieda materiali extra da aggiungere in un secondo momento, ad esempio dopo una seduta in presenza. Se ciò accade, sarai in grado di vederlo nell\'ambiente di apprendimento.
Durante gli incontri non riceverai materiale didattico cartaceo, ti consigliamo di portare un laptop e/o tablet.<br /><br />

Il codice coupon di cui hai bisogno per iscriverti è: ##submission_code##<br/><br/>

Questo coupon è personale e unico e dà accesso ai corsi appropriati per la tua istruzione.
Si prega di leggere attentamente le istruzioni sul coupon.<br /><br />

Se hai domande sulla creazione di un account o se trovi altri problemi, puoi contattare l\'helpdesk.
Le informazioni possono essere trovate sul nostro ambiente di apprendimento.
Quando nessuno è disponibile a rispondere alla tua domanda, ti preghiamo di lasciare il tuo nome, indirizzo e-mail e numero di telefono e ti risponderemo il prima possibile.<br /><br />

Ti auguriamo buona fortuna per il corso.<br /><br />

Cordiali saluti,<br /><br />

##site_name##';
$string['coupon_mail_extend_content'] = 'Gentile ##to_gender## ##to_name##,<br /><br />

Sei stato iscritto al nostro corso di formazione ##course_fullnames## e ti è stata concessa una proroga.
Hai già accesso al nostro ambiente di apprendimento online: ##site_name##.<br /><br />
La tua estensione è ##extensionperiod##.<br /><br />

In allegato trovi il coupon per estendere l\'accesso al corso. Questo coupon è personale e unico e estende l\'accesso ai corsi appropriati per la tua istruzione.
Si prega di leggere attentamente le istruzioni sul coupon.<br /><br />

In caso di domande relative a problemi, è possibile contattare l\'helpdesk.
Le informazioni possono essere trovate sul nostro ambiente di apprendimento.
Quando nessuno è disponibile a rispondere alla tua domanda, ti preghiamo di lasciare il tuo nome, indirizzo e-mail e numero di telefono e ti risponderemo il prima possibile.<br /><br />

Cordiali saluti,<br /><br />

##site_name##';
$string['coupon_mail_subject'] = 'Coupun generato';
$string['coupon_notification_content'] = '<p>I coupon che hai richiesto sono stati generati<br/>
Dovresti aver ricevuto un\'e-mail contenente il link per scaricare i coupon generati.<br/>
Puoi anche scegliere di scaricare i tuoi coupon direttamente facendo clic su {$a->downloadlink}</p>';
$string['coupon_notification_subject'] = 'Coupon generati!';
$string['coupon_recipients_desc'] = 'Le seguenti colonne devono essere presenti nel CSV caricato, indipendentemente dall\'ordine: E-mail, Sesso, Nome.<br/>
Per ogni persona nel CSV, viene generato un coupon che viene inviato all\'utente tramite e-mail.<br/>
Tieni presente che questi coupon verranno creati in modo asincrono da un\'attività in background; <i>non</i> all\'istante.
Questo perché il processo di generazione dei coupon può essere piuttosto lungo, soprattutto per un gran numero di utenti.';
$string['coupons:cleaned'] = 'Un totale di {$a} coupon sono stati puliti/rimossi.';
$string['coupons_generated'] = '<p>I tuoi coupon sono stati generati.<br/>
Dovresti aver ricevuto un\'e-mail contenente il link per scaricare i coupon generati.<br/>
Puoi anche scegliere di scaricare i tuoi coupon direttamente facendo clic su {$a}.</p>';
$string['coupons_generated_codes_only'] = '<p>I tuoi codici coupon sono stati generati.<br/>
Poiché hai scelto di generare solo i codici, non riceverai un\'e-mail<br/>
Puoi utilizzare la panoramica dei coupon (non)utilizzati con un filtro specifico sull\'ID batch per scaricare una panoramica dei codici generati.</p>';
$string['coupons_ready_to_send'] = 'I tuoi coupon sono stati generati e saranno inviati alla data inserita.<br />
Riceverai un messaggio di posta elettronica di conferma quando tutti i coupon saranno stati inviati.';
$string['coupons_sent'] = 'I tuoi coupon sono stati generati. Entro pochi minuti riceverai una mail con i Coupon negli allegati.';
$string['course'] = 'corso';
$string['days_access'] = '{$a} giorni su';
$string['default-coupon-page-template-botleft'] = '<ol>
<li>Registrati su {site_url}</li>
<li>Riceverai un\'e-mail con l\'URL di conferma. Clicca sull\'URL per attivare il tuo account.</li>
<li>Inserisci il tuo codice coupon nel blocco Moodle Coupon</li>
<li>Buon apprendimento!</li>
</ol>';
$string['default-coupon-page-template-botright'] = '<ol>
<li>Accedi a {site_url}</li>
<li>Inserisci il tuo codice coupon nel blocco Moodle Coupon</li>
<li>Buon apprendimento!</li>
</ol>';
$string['default-coupon-page-template-main'] = 'Con questo coupon puoi attivare l\'accesso ai seguenti moduli di e-learning:<br/>
{courses} ({role})<br/><br/>
Hai {accesstime} accesso a questo modulo.<br/><br/>
Utilizza il seguente codice coupon per attivare l\'accesso<br/>
{coupon_code}';
$string['delete:request:confirmmessage'] = 'Voglio eliminare questa richiesta';
$string['delete:request:description'] = 'Da fare: dovrebbe essere renderizzabile/basato su modelli';
$string['delete:request:header'] = 'Elimina richiesta coupon';
$string['delete:request:title'] = 'Elimina richiesta coupon';
$string['delete:requestuser:confirmmessage'] = 'Si, voglio eliminare questo utente';
$string['delete:requestuser:description'] = 'Ciò eliminerà la possibilità di richiedere coupon per l\'utente <b>{$a->firstname} {$a->lastname}</b>.<br/>
Il processo è irreversibile, ma puoi sempre riconfigurare questo utente aggiungendolo nuovamente agli utenti consentiti.';
$string['delete:requestuser:header'] = 'Elimina la richiesta di coupon dell\'utente';
$string['download-sample-csv'] = 'Scarica CSV di esempio';
$string['downloadcoupons:buttontext'] = 'Clicca qui per scaricare';
$string['downloadcoupons:text'] = '<div>Puoi scaricare i tuoi coupon facendo clic sul link sottostante.<br/>
Tieni presente che puoi scaricare questo archivio o PDF solo <i>una volta</i><br/>
Non appena avrai scaricato, il relativo file <i>sarà</i> eliminato.<br/>
{$a}
</div>';
$string['enrolperiod:extension'] = 'per la durata di {$a}';
$string['enrolperiod:indefinite'] = '<i>indefinito</i>';
$string['err:batchid'] = 'Il nome indicato esiste già. Per favore scegli un altro nome o lascia vuoto questo campo';
$string['error:coupon_already_used'] = 'Il codice è già stato usato';
$string['error:course-not-found'] = 'Il corso non può essere trovato';
$string['error:invalid_coupon_code'] = 'Hai inserito un codice non valido';
$string['error:invalid_email'] = 'Inserisci una email valida';
$string['error:nopermission'] = 'Non hai i permessi per eseguire questa azione';
$string['error:numeric_only'] = 'Il campo deve essere numerico';
$string['error:recipients-empty'] = 'Inserisci almeno un utente';
$string['error:recipients-extension'] = 'Puoi caricare solo file csv';
$string['error:required'] = 'Il campo è obbligatorio';
$string['error:sessions-expired'] = 'La tua sessione è scaduta, collegati nuovamente';
$string['findcohortcourses:noselectionstring'] = 'nessuna selezione è stata fatta';
$string['findcohorts:noselectionstring'] = 'nessun gruppo globale è stata selezionato';
