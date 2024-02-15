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
 * Strings for component 'qtype_stack', language 'it', version '4.1'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAlgEquiv_SA_not_equation'] = 'La tua risposta dovrebbe essere una equazione, ma non lo è.';
$string['ATAlgEquiv_SA_not_expression'] = 'La tua risposta dovrebbe essere un\'espressione, non un\'equazione, disuguaglianza, elenco, inseme o matrice.';
$string['ATAlgEquiv_SA_not_function'] = 'La risposta dovrebbe essere una funzione definita usando l\' operatore <tt>:=</tt>, ma non lo è.';
$string['ATAlgEquiv_SA_not_inequality'] = 'La tua risposta dovrebbe essere una disuguaglianza, ma non lo è.';
$string['ATAlgEquiv_SA_not_list'] = 'La risposta deve essere un elenco, ma non lo è. La sintassi prevede di inserire un elenco di valori separato da virgole racchiuso tra parentesi quadre.';
$string['ATAlgEquiv_SA_not_logic'] = 'La risposta dovrebbe essere un\'uguaglianza, disuguaglianza o una loro combinazione logica, ma non lo è.';
$string['ATAlgEquiv_SA_not_matrix'] = 'La tua risposta dovrebbe essere una matrice, ma non lo è.';
$string['ATAlgEquiv_SA_not_set'] = 'La tua risposta dovrebbe essere un insieme, ma non lo è. Per inserire un insieme racchiudi tra parentesi graffe l\'elenco degli elementi separati da virgola.';
$string['ATAlgEquiv_SA_not_string'] = 'La risposta deve essere una stringa, ma non lo è.';
$string['ATAlgEquiv_TA_not_equation'] = 'Hai inserito un\'equazione, ma la risposta non è un\'equazione. Forse hai scritto qualcosa come y=2*x+1 mentre avresti dovuto scrivere solo 2*x+1.';
$string['ATCompSquare_SA_not_depend_var'] = 'La tua risposta dovrebbe dipendere dalla variabile {$a->m0} ma così non è.';
$string['ATCompSquare_not_AlgEquiv'] = 'La tua risposta è in una forma corretta, ma non è equivalente alla risposta corretta.';
$string['ATDiff_int'] = 'Sembra invece che tu abbia integrato!';
$string['ATEquivFirst_SA_wrong_end'] = 'La tua ultima risposta non è nella forma corretta.';
$string['ATEquivFirst_SA_wrong_start'] = 'La prima riga dell\'argomento deve essere "{$a->m0}".';
$string['ATFacForm_isfactored'] = 'La risposta è fattorizzata, bene.';
$string['ATFacForm_notalgequiv'] = 'La tua risposta non è algebricamente equivalente alla risposta corretta. Devi aver sbagliato qualcosa.';
$string['ATFacForm_notfactored'] = 'La tua risposta non è fattorizzata.';
$string['ATInequality_backwards'] = 'Hai invertito la disuguaglianza.';
$string['ATInequality_nonstrict'] = 'La diseguaglianza dovrebbe essere esatta, ma non lo è.';
$string['ATInequality_strict'] = 'La diseguaglianza non deve essere esatta.';
$string['ATInt_const'] = 'Devi aggiungere una costante di integrazione, altrimenti la risposta è corretta. Bene.';
$string['ATInt_const_int'] = 'Devi aggiungere una costante di integrazione. Deve essere una costante arbitraria, non un numero.';
$string['ATInt_diff'] = 'Sembra che invece tu abbia differenziato.';
$string['ATList_wrongentries'] = 'Ciò che sotto è sottolineato in rosso è  sbagliato. {$a->m0}';
$string['ATList_wronglen'] = 'Il tuo elenco dovrebbe contenere {$a->m0} elementi, mentre ne contiene {$a->m1}.';
$string['ATLowestTerms_not_rat'] = 'Devi eliminare il seguente termine dal denominatore: {$a->m0}';
$string['ATMatrix_wrongentries'] = 'I valori sottolineati in rosso sono errati. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'La matrice dovrebbe essere {$a->m0} per {$a->m1}, invece è {$a->m2} per {$a->m3}.';
$string['ATNumDecPlaces_NoDP'] = 'La tua risposta deve essere un numero in formato decimale, incluso il punto decimale.';
$string['ATNumDecPlaces_Wrong_DPs'] = 'La tua risposta ha un numero errato di cifre decimali.';
$string['ATNumSigFigs_NotDecimal'] = 'La tua risposta dovrebbe essere un numero in formato decimale, ma non lo è.';
$string['ATNumSigFigs_WrongDigits'] = 'La tua risposta contiene un numero di cifre significative errato.';
$string['ATNumSigFigs_WrongSign'] = 'Hai sbagliato il segno.';
$string['ATNumerical_FAILED'] = 'La tua risposta dovrebbe essere un numero in virgola mobile, una lista o un insieme di numeri. Non lo è.';
$string['ATNumerical_SA_not_list'] = 'La risposta dovrebbe essere una lista, ma non lo è. Per digitare una lista racchiudi tra parentesi quadre i valori separati da virgola.';
$string['ATNumerical_SA_not_number'] = 'la tua risposta dovrebbe essere un numero in virgola mobile, ma non lo è.';
$string['ATNumerical_SA_not_set'] = 'La tua risposta dovrebbe essere un insieme. Per digitare un insieme racchiudi tra parentesi graffe i valori separati da virgola.';
$string['ATPartFrac_denom_ret'] = 'Se la tua risposta fosse scritta come un\'unica frazione allora il denominatore sarebbe {$a->m0}. Invece, dovrebbe essere {$a->m1}.';
$string['ATPartFrac_diff_variables'] = 'Le variabili nella tua risposta sono differenti da quelle della domanda, controllale.';
$string['ATPartFrac_ret_expression'] = 'La tua risposta come singola frazione è {$a->m0}';
$string['ATSet_wrongsz'] = 'Il tuo insieme dovrebbe avere {$a->m0} elementi distinti, invece ne ha {$a->m1}.';
$string['ATSets_missingentries'] = 'Quanto segue manca dal tuo insieme. {$a->m0}';
$string['ATSysEquiv_SA_extra_variables'] = 'Ci sono troppe variabili nella tua risposta.';
$string['FacForm_UnPick_intfac'] = 'Occorre estrarre un fattore comune.';
$string['Subst'] = 'La tua risposta sarebbe stata esattta se avessi usato la seguente sostituzione di variabili:{$a->m0}';
$string['addanothernode'] = 'Aggiungi  un altro nodo';
$string['addanothertestcase'] = 'Aggiungi un altro caso di test...';
$string['addatestcase'] = 'Aggiungi un caso di test...';
$string['addingatestcase'] = 'Aggiunta di un caso di test alla domanda {$a}';
$string['alg_indices_fact'] = 'Valgono le seguenti leggi per il calcolo con le potenze:
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Proprietà delle potenze';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ significa } a \\hbox{ è maggiore di } b.\\]
\\[ a < b \\hbox{ significa } a \\hbox{ è minore di } b.\\]
\\[a\\geq b \\hbox{ significa } a \\hbox{ è maggiore o uguale a } b.\\]
\\[a\\leq b \\hbox{ significa } a \\hbox{ è minore o uguale a } b.\\]';
$string['alg_inequalities_name'] = 'Disuguaglianze';
$string['alg_logarithms_fact'] = 'Per ogni base \\(c>0\\) con \\(c \\neq 1\\):
\\[\\log_c(a) = b \\mbox{, significa } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
La formula di cambiamento di base è:
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Logaritmi con  base \\(e\\), con notazione \\(\\log_e\\) oppure \\(\\ln\\) sono detti logaritmi naturali.  La lettera \\(e\\) rappresenta la costante esponenziale che vale approssimativamente \\(2.718\\).';
$string['alg_logarithms_name'] = 'Le leggi dei logaritmi';
$string['alg_partial_fractions_fact'] = 'Una frazione propria è del tipo \\[{\\frac{P(x)}{Q(x)}}\\] dove \\(P\\) and \\(Q\\) sono polinomi, con il grado di \\(P\\) inferiore al grado di \\(Q\\).  In questo caso si procede come segue: fattorizzare  \\(Q(x)\\),
<ul>
<li>
un <em>fattore lineare</em> \\(ax+b\\) nel denominatore produce una frazione parziale nella forma \\[{\\frac{A}{ax+b}}.\\]
</li>
<li>
un <em>fattore lineare ripetuto</em> \\((ax+b)^2\\) nel denominatore produce una frazione parziale nella forma \\[{A\\over ax+b}+{B\\over (ax+b)^2}.\\]
</li>
<li>
un <em>fattore quadratico</em> \\(ax^2+bx+c\\) nel denominatore produce una frazione parziale nella forma \\[{Ax+B\\over ax^2+bx+c}\\]
</li>
<li>
<em>Frazione improprie</em> richiedono un termine aggiuntivo che è un polinomio di grado \\(n-d\\) dove \\(n\\) è il grado del numeratore
 (cioè \\(P(x)\\)) e \\(d\\) è il grado del denominatore (cioè \\(Q(x)\\)).
</li></ul>';
$string['alg_partial_fractions_name'] = 'Decomposizione in frazioni semplici';
$string['alg_quadratic_formula_fact'] = 'Le soluzioni di un\'equazione quadratica della forma:
\\[ax^2 + bx + c = 0,\\]
sono date dalla formula quadratica:
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'La formula quadratica';
$string['all'] = 'Tutti';
$string['allnodefeedbackmustusethesameformat'] = 'I feedback per i nodi di un PRT devono avere tutti lo stesso formato di testo.';
$string['allowwords'] = 'Parole consentite';
$string['allowwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Allow_Words';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['assumepositive'] = 'Assumi positivo';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Positive';
$string['assumereal'] = 'Assumi reale';
$string['assumereal_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Real';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['autosimplifyprt_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['calc_diff_standard_derivatives_fact'] = 'La seguente tabella mostra le derivate di alcune funzioni fondamentali. E\' importante imparare queste derivate perché sono usate spesso.
<center>
<table>
<tr><th>\\(f(x)\\) \\(\\qquad\\)\\(\\qquad\\)\\(\\qquad\\)\\(\\qquad\\)   </th><th> \\(f\'(x)\\)</th></tr>
<tr>
<td>\\(k\\), costante </td> <td> \\(0\\) </td> </tr> <tr> <td>
\\(x^n\\), per ogni costante \\(n\\) </td> <td> \\(nx^{n-1}\\)</td> </tr> <tr> <td>
\\(e^x\\)                   </td> <td> \\(e^x\\)</td> </tr> <tr> <td>
\\(\\ln(x)=\\log_{\\rm e}(x)\\)              </td> <td> \\(\\frac{1}{x}\\)                </td> </tr> <tr> <td>
\\(\\sin(x)\\)                             </td> <td> \\(\\cos(x)\\)                    </td> </tr> <tr> <td>
\\(\\cos(x)\\)                             </td> <td> \\(-\\sin(x)\\)                   </td> </tr> <tr> <td>
\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\)   </td> <td>   \\(\\sec^2(x)\\)                </td> </tr> <tr> <td>
\\(cosec(x)=\\frac{1}{\\sin(x)}\\)         </td> <td>   \\(-cosec(x)\\cot(x)\\)        </td> </tr> <tr> <td>
\\(\\sec(x)=\\frac{1}{\\cos(x)}\\)           </td> <td>   \\(\\sec(x)\\tan(x)\\)           </td> </tr> <tr> <td>
\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\)     </td> <td>   \\(-cosec^2(x)\\)             </td> </tr> <tr> <td>
\\(\\cosh(x)\\)                            </td> <td>   \\(\\sinh(x)\\)                 </td> </tr> <tr> <td>
\\(\\sinh(x)\\)                            </td> <td>   \\(\\cosh(x)\\)                 </td> </tr> <tr> <td>
\\(\\tanh(x)\\)                            </td> <td>   \\(sech^2(x)\\)               </td> </tr> <tr> <td>
\\(sech(x)\\)                            </td> <td>   \\(-sech(x)\\tanh(x)\\)        </td> </tr> <tr> <td>
\\(cosech(x)\\)                          </td> <td>   \\(-cosech(x)\\coth(x)\\)      </td> </tr> <tr> <td>
\\(coth(x)\\)                            </td> <td>   \\(-cosech^2(x)\\)            </td> </tr>
</table>
</center>

 \\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) =  \\frac{1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) =  \\frac{-1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) =  \\frac{1}{1+x^2}\\]
 \\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2-1}}\\]
 \\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2+1}}\\]
 \\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) =  \\frac{1}{1-x^2}\\]';
$string['calc_diff_standard_derivatives_name'] = 'Derivate fondamentali';
$string['calc_int_methods_substitution_name'] = 'Integrazione per sostituzione';
$string['calc_product_rule_fact'] = 'La seguente regola consente di derivare il prodotto di due funzioni. Supponi di dover derivare \\(f(x)\\cdot g(x)\\) rispetto ad \\(x\\).
\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)\\cdot g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}}  + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] o, usando una notazione alternativa, \\[ \\big(f(x)\\cdot g(x)\\big)\' = f\'(x)\\cdot g(x)+f(x)\\cdot g\'(x). \\]';
$string['calc_product_rule_name'] = 'Derivata di un prodotto';
$string['calc_quotient_rule_fact'] = 'La derivata del quoziente di due funzioni derivabili  \\(f(x)\\) e \\(g(x)\\) è
\\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ - \\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}, \\]
o, usando una notazione alternativa, \\[\\left(\\frac{f(x)}{g(x)}\\right)\'=\\frac{f\'(x)\\cdot g(x)-f(x) \\cdot g\'(x)}{(g(x))^2}. \\]';
$string['calc_quotient_rule_name'] = 'Derivata di un quoziente.';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#sqrt_minus_one.';
$string['defaultprtcorrectfeedback'] = '<span style="font-size: 1.5em; color:green;"><i class="fa fa-check"></i></span> Risposta esatta, bene.';
$string['defaultprtincorrectfeedback'] = '<span style="font-size: 1.5em; color:red;"><i class="fa fa-times"></i></span>
Risposta errata.';
$string['defaultprtpartiallycorrectfeedback'] = '<span style="font-size: 1.5em; color:orange;"><i class="fa fa-adjust"></i></span> Risposta parzialmente corretta.';
$string['equiv_LET'] = 'Sia';
$string['equivfirstline'] = 'La prima linea del tuo argomento è sbagliata!';
$string['exportthisquestion'] = 'Esporta questa domanda';
$string['feedbackstyle_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Feedback_variables';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = 'Parole proibite';
$string['forbidwords_help'] = 'Questo è un elenco di stringhe di testo separate da virgola, ma inserire ciò è vietato in una risposta';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbidden_Words';
$string['generalfeedback'] = 'Feedback generale';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['greek_alphabet_fact'] = '<center>
<table>
<tr><td>
 Maiuscole, \\(\\quad\\) </td><td>  minuscole, \\(\\quad\\) </td><td>  nome </td> </tr>   <tr> <td>
 \\(A\\)  </td><td>  \\(\\alpha\\)  </td><td>  alpha  </td> </tr>   <tr> <td>
 \\(B\\)  </td><td>  \\(\\beta\\)  </td><td>  beta </td> </tr>   <tr> <td>
 \\(\\Gamma\\)  </td><td>  \\(\\gamma\\)  </td><td>  gamma </td> </tr>   <tr> <td>
 \\(\\Delta\\)  </td><td>  \\(\\delta\\)  </td><td>  delta </td> </tr>   <tr> <td>
 \\(E\\)  </td><td>  \\(\\epsilon\\)  </td><td>  epsilon </td> </tr>   <tr> <td>
 \\(Z\\)  </td><td>  \\(\\zeta\\)  </td><td>  zeta </td> </tr>   <tr> <td>
 \\(H\\)  </td><td>  \\(\\eta\\)  </td><td>  eta </td> </tr>   <tr> <td>
 \\(\\Theta\\)  </td><td>  \\(\\theta\\)  </td><td>  theta </td> </tr>   <tr> <td>
 \\(K\\)  </td><td>  \\(\\kappa\\)  </td><td>  kappa </td> </tr>   <tr> <td>
 \\(M\\)  </td><td>  \\(\\mu\\)  </td><td>  mu </td> </tr>   <tr> <td>
 \\(N\\)  </td><td>  \\( u\\)  </td><td>  nu </td> </tr>   <tr> <td>
 \\(\\Xi\\)  </td><td>  \\(\\xi\\)  </td><td>  xi </td> </tr>   <tr> <td>
 \\(O\\)  </td><td>  \\(o\\)  </td><td>  omicron </td> </tr>   <tr> <td>
 \\(\\Pi\\)  </td><td>  \\(\\pi\\)  </td><td>  pi </td> </tr>   <tr> <td>
 \\(I\\)  </td><td>  \\(\\iota\\)  </td><td>  iota </td> </tr>   <tr> <td>
 \\(P\\)  </td><td>  \\(\\rho\\) </td><td>  rho </td> </tr>   <tr> <td>
 \\(\\Sigma\\)  </td><td>  \\(\\sigma\\)  </td><td>  sigma </td> </tr>   <tr> <td>
 \\(\\Lambda\\)  </td><td>  \\(\\lambda\\)  </td><td>  lambda </td> </tr>   <tr> <td>
 \\(T\\)  </td><td>  \\(\\tau\\)  </td><td>  tau </td> </tr>   <tr> <td>
 \\(\\Upsilon\\)  </td><td>  \\(\\upsilon\\)  </td><td>  upsilon </td> </tr>   <tr> <td>
 \\(\\Phi\\)  </td><td>  \\(\\phi\\)  </td><td>  phi </td> </tr>   <tr> <td>
 \\(X\\)  </td><td>  \\(\\chi\\)  </td><td>  chi </td> </tr>   <tr> <td>
 \\(\\Psi\\)  </td><td>  \\(\\psi\\)  </td><td> psi </td> </tr>   <tr> <td>
 \\(\\Omega\\)  </td><td>  \\(\\omega\\)  </td><td>  omega </td></tr>
</table></center>';
$string['greek_alphabet_name'] = 'Alfabeto greco';
$string['healthautomaxopt'] = 'Crea automaticamente un\'immagine Maxima ottimizzata.';
$string['healthchecksstackmaximaversion'] = 'Versione di Maxima';
$string['hyp_functions_fact'] = 'Le funzioni iperboliche hanno proprietà simili alle funzioni trigonometriche ma possono essere rappresentate in forma esponenziale come segue:
 \\[ \\cosh(x)      = \\frac{e^x+e^{-x}}{2}, \\qquad \\sinh(x)=\\frac{e^x-e^{-x}}{2} \\]
 \\[ \\tanh(x)      = \\frac{\\sinh(x)}{\\cosh(x)} = \\frac{{e^x-e^{-x}}}{e^x+e^{-x}} \\]
 \\[ {\\rm sech}(x) ={1\\over \\cosh(x)}={2\\over {\\rm e}^x+{\\rm e}^{-x}}, \\qquad  {\\rm cosech}(x)= {1\\over \\sinh(x)}={2\\over {\\rm e}^x-{\\rm e}^{-x}} \\]
 \\[ {\\rm coth}(x) ={\\cosh(x)\\over \\sinh(x)} = {1\\over {\\rm tanh}(x)} ={{\\rm e}^x+{\\rm e}^{-x}\\over {\\rm e}^x-{\\rm e}^{-x}}\\]';
$string['hyp_functions_name'] = 'Funzioni iperboliche';
$string['hyp_identities_fact'] = 'La somiglianza tra il modo in cui si comportano le funzioni iperboliche e trigonometriche è evidente osservando alcune identità iperboliche di base:
  \\[{\\rm e}^x=\\cosh(x)+\\sinh(x), \\quad {\\rm e}^{-x}=\\cosh(x)-\\sinh(x)\\]
  \\[\\cosh^2(x) -\\sinh^2(x) = 1\\]
  \\[1-{\\rm tanh}^2(x)={\\rm sech}^2(x)\\]
  \\[{\\rm coth}^2(x)-1={\\rm cosech}^2(x)\\]
  \\[\\sinh(x\\pm y)=\\sinh(x)\\ \\cosh(y)\\ \\pm\\ \\cosh(x)\\ \\sinh(y)\\]
  \\[\\cosh(x\\pm y)=\\cosh(x)\\ \\cosh(y)\\ \\pm\\ \\sinh(x)\\ \\sinh(y)\\]
  \\[\\sinh(2x)=2\\,\\sinh(x)\\cosh(x)\\]
  \\[\\cosh(2x)=\\cosh^2(x)+\\sinh^2(x)\\]
  \\[\\cosh^2(x)={\\cosh(2x)+1\\over 2}\\]
  \\[\\sinh^2(x)={\\cosh(2x)-1\\over 2}\\]';
$string['hyp_identities_name'] = 'Identità funzioni iperboliche';
$string['hyp_inverse_functions_name'] = 'Funzioni iperboliche inverse';
$string['inputextraoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Extra options';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypematrix'] = 'Matrice';
$string['inputtypesinglechar'] = 'Singolo carattere';
$string['inputtypetextarea'] = 'Area di testo';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['inversetrig'] = 'Funzioni trigonometriche inverse';
$string['inversetrig_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#inverse_trig';
$string['logicsymbol_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#logicsymbol';
$string['matrixparens_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Matrix.md#matrixparens';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#multiplication';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['nodex'] = 'Nodo {$a}';
$string['numericalinputvarsforbidden'] = 'L\'input deve essere un numero, non può contenere variabili.';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['prtcorrectfeedback'] = 'Feedback standard per corretto';
$string['prtincorrectfeedback'] = 'Feedback standard per errato';
$string['prtpartiallycorrectfeedback'] = 'Feedback standard per parzialmente corretto';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Maxima.md#Simplification';
$string['questiontext_help'] = 'Il testo della domanda è CASText. Questa è la "domanda" che lo studente vede effettivamente. È necessario inserire gli elementi di input e le stringhe di convalida, in questo campo e solo in questo campo. Ad esempio, usando `[[input: ans1]] [[validation: ans1]]`.';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questionvariables'] = 'Variabili della domanda';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Question_variables';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Require_lowest_terms';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#surd';
$string['stackCas_MissingOpenDisplay'] = '<code>\\[</code> mancante.';
$string['stackCas_failedReturn'] = 'CAS non è riuscito a restituire alcun dato.';
$string['stackDoc_404message'] = 'Il file non è stato trovato';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/';
$string['studentValidation_invalidAnswer'] = 'Questa risposta non è valida.';
$string['studentValidation_listofvariables'] = 'Le variabili trovate nella tua risposta sono: {$a}';
$string['studentValidation_yourLastAnswer'] = 'La tua ultima risposta è stata interpretata come segue: {$a}';
$string['syntaxattribute_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['syntaxattributevalue'] = 'Valore';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['tans'] = 'TAns';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['tansrequired'] = 'TAns non deve essere vuoto.';
$string['teacheranswershow'] = 'Una risposta esatta è \\( {$a->display} \\), che può essere scritta come: {$a->value}';
$string['teacheranswershow_disp'] = 'Una risposta esatta è {$a->display}';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#model_answer';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['testsuitecolerror'] = 'Errori CAS';
$string['trig_degrees_radians_fact'] = '\\[
360^\\circ= 2\\pi \\hbox{ radianti},\\quad
1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ radianti}
\\]
\\[
1 \\hbox{ radiante} = {180\\over \\pi} \\hbox{ gradi}
\\approx 57.3^\\circ
\\]';
$string['trig_degrees_radians_name'] = 'Gradi e radianti';
$string['trig_standard_identities_name'] = 'Identità trigonometriche standard';
$string['trig_standard_values_fact'] = '\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad
\\tan( 45^\\circ)=1
\\]
\\[
\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ)={\\sqrt{3}\\over 2},\\qquad
\\tan (30^\\circ)={1\\over \\sqrt{3}}
\\]
\\[
\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad
\\tan (60^\\circ)={ \\sqrt{3}}
\\]';
$string['trig_standard_values_name'] = 'Valori trigonometrici standard';
$string['true'] = 'Vero';
$string['variantsselectionseed'] = 'Gruppo casuale';
$string['verifyquestionandupdate'] = 'Verifica il testo della domanda e aggiorna la finestra';
$string['youmustconfirm'] = 'Devi confermare qui.';
