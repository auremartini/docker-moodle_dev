<?php

class __Mustache_c36cc124ed2d5fdcf383ced421a6a34c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="secondary-navigation d-print-none">
';
        $buffer .= $indent . '  <nav class="moremenu navigation observed">
';
        $buffer .= $indent . '    <table><tr><td width="100%">
';
        $buffer .= $indent . '    <ul id="moremenu-';
        $value = $this->resolveValue($context->find('uuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-nav-tabs" role="tablist" class="nav more-nav nav-tabs">
';
        $buffer .= $indent . '      <li data-key="activity_general" class="nav-item" role="none" data-forceintomoremenu=false">
';
        $buffer .= $indent . '        <a role="tab" class="nav-link active active_tree_node" href="#linkinfo" data-toggle="tab" data-text="';
        $value = $context->find('str');
        $buffer .= $this->sectionD65eec6e6b44ac93d150cdd2addd3b14($context, $indent, $value);
        $buffer .= '" aria-selected="true">';
        $value = $context->find('str');
        $buffer .= $this->sectionD65eec6e6b44ac93d150cdd2addd3b14($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </li>
';
        $buffer .= $indent . '      <li data-key="activity_agenda" class="nav-item" role="none" data-forceintomoremenu=false">
';
        $buffer .= $indent . '        <a role="tab" class="nav-link" href="#linkagenda" data-toggle="tab" data-text="';
        $value = $context->find('str');
        $buffer .= $this->section19946ccebbeeb1527518e9afb5841088($context, $indent, $value);
        $buffer .= '" aria-selected="true">';
        $value = $context->find('str');
        $buffer .= $this->section19946ccebbeeb1527518e9afb5841088($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </li>
';
        $buffer .= $indent . '      <li data-key="activity_estimate" class="nav-item" role="none" data-forceintomoremenu=false">
';
        $buffer .= $indent . '        <a role="tab" class="nav-link" href="#linkestimate" data-toggle="tab" data-text="';
        $value = $context->find('str');
        $buffer .= $this->sectionD8e691efd25d5a8a5c4fea999d2a199a($context, $indent, $value);
        $buffer .= '" aria-selected="true">';
        $value = $context->find('str');
        $buffer .= $this->sectionD8e691efd25d5a8a5c4fea999d2a199a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </li>
';
        $buffer .= $indent . '      <li data-key="activity_users" class="nav-item" role="none" data-forceintomoremenu=false">
';
        $buffer .= $indent . '        <a role="tab" class="nav-link" href="#linkusers" data-toggle="tab" data-text="';
        $value = $context->find('str');
        $buffer .= $this->sectionA60fe8d845c6c6b34f53ddd08c93990c($context, $indent, $value);
        $buffer .= '" aria-selected="true">';
        $value = $context->find('str');
        $buffer .= $this->sectionA60fe8d845c6c6b34f53ddd08c93990c($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </li>
';
        $buffer .= $indent . '      <li data-key="activity_msg" class="nav-item" role="none" data-forceintomoremenu=false">
';
        $buffer .= $indent . '        <a role="tab" class="nav-link" href="#linkmsg" data-toggle="tab" data-text="';
        $value = $context->find('str');
        $buffer .= $this->section96c570d2b21ad235279d16542ecafffb($context, $indent, $value);
        $buffer .= '" aria-selected="true">';
        $value = $context->find('str');
        $buffer .= $this->section96c570d2b21ad235279d16542ecafffb($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '      </li>
';
        $buffer .= $indent . '    </td><td>
';
        $buffer .= $indent . '      <form action="" method="post">
';
        $buffer .= $indent . '        <button class="btn btn-secondary btn-lg" type="submit">';
        $value = $context->find('str');
        $buffer .= $this->section146c51eac2248552640ee51db10659bf($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </td><td>
';
        $buffer .= $indent . '      <form action="" method="post">
';
        $buffer .= $indent . '        <button class="btn btn-primary btn-lg" type="submit">';
        $value = $context->find('str');
        $buffer .= $this->section01fa3798d8b587b74e13eda40820954d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '      </form>
';
        $buffer .= $indent . '    </td></tr></table>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </nav>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div id="page-content" class="pb-3 d-print-block">
';
        $buffer .= $indent . '<div id="region-main-box">
';
        $buffer .= $indent . '  <section id="region-main" aria-label="Content">
';
        $buffer .= $indent . '    <span class="notifications" id="user-notifications"></span>
';
        $buffer .= $indent . '    <div role="main">
';
        $buffer .= $indent . '      <span id="maincontent"></span>
';
        $buffer .= $indent . '      <div class="tab-content mt-3">
';
        $buffer .= $indent . '        <div class="tab-pane active" id="linkinfo">
';
        $buffer .= $indent . '          <table id="local-odysseus-activity-info" class="generaltable">
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->section1267bef6b9d6804d789b3cb2228bd8a3($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1" width="90%">';
        $value = $this->resolveValue($context->find('destination'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->section615101799bec3172e7eb69178b2d7701($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('activity_type_text'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->sectionB242ee3a25a9e1ac6ae3099dda765b61($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('date_start'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $value = $context->find('date_end');
        $buffer .= $this->section36e5db543bc0e67341b1885ca9c77392($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->sectionCca97e0b8f58409202f48364b93e4abd($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('altdate_start'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $value = $context->find('altdate_end');
        $buffer .= $this->section21ac19e4092e9f8486f99ab608c71adb($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->sectionE0eb578a54f0be2df7b0bf4c34b2b405($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('transport_text'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->sectionCe4d0c6502974929549d8c203184cc84($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('goals'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '              <td class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->section57ddd6b53e01bc7c22574219a5f4ccb7($context, $indent, $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '              <td class="cell c1">';
        $value = $this->resolveValue($context->find('notes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</td>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '          </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="linkusers">TAB2</div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="linkagenda">TAB3</div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="linkestimate">TAB4</div>
';
        $buffer .= $indent . '        <div class="tab-pane" id="linkmsg">TAB5</div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </section>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionD65eec6e6b44ac93d150cdd2addd3b14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' info, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' info, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19946ccebbeeb1527518e9afb5841088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' agenda, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' agenda, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8e691efd25d5a8a5c4fea999d2a199a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' estimate, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' estimate, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA60fe8d845c6c6b34f53ddd08c93990c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' users, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' users, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96c570d2b21ad235279d16542ecafffb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' msg, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' msg, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section146c51eac2248552640ee51db10659bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01fa3798d8b587b74e13eda40820954d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' submit, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' submit, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1267bef6b9d6804d789b3cb2228bd8a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' destination, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' destination, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section615101799bec3172e7eb69178b2d7701(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activity_type, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activity_type, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB242ee3a25a9e1ac6ae3099dda765b61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' date, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' date, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36e5db543bc0e67341b1885ca9c77392(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' - {{date_end}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' - ';
                $value = $this->resolveValue($context->find('date_end'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCca97e0b8f58409202f48364b93e4abd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' altdate, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' altdate, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21ac19e4092e9f8486f99ab608c71adb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' - {{altdate_end}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' - ';
                $value = $this->resolveValue($context->find('altdate_end'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0eb578a54f0be2df7b0bf4c34b2b405(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' transport, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' transport, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe4d0c6502974929549d8c203184cc84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' goals, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' goals, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57ddd6b53e01bc7c22574219a5f4ccb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notes, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notes, local_odysseus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
