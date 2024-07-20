<?php

class __Mustache_a99f6974d6adeb9d6030549d54683e41 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="odysseus-activity-list" class="">
';
        $buffer .= $indent . '	<table id="odysseus-activity-list" class="generaltable">
';
        $buffer .= $indent . '		<tr>
';
        $buffer .= $indent . '	    	<th class="cell c0">';
        $value = $context->find('str');
        $buffer .= $this->section21ef86ac732fae93ea0145c63b1479e9($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '	    	<th class="cell c1">';
        $value = $context->find('str');
        $buffer .= $this->section1267bef6b9d6804d789b3cb2228bd8a3($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '    		<th class="cell c2">';
        $value = $context->find('str');
        $buffer .= $this->section615101799bec3172e7eb69178b2d7701($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '		    <th class="cell c3">';
        $value = $context->find('str');
        $buffer .= $this->sectionB242ee3a25a9e1ac6ae3099dda765b61($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '	    	<th class="cell c4">';
        $value = $context->find('str');
        $buffer .= $this->sectionCca97e0b8f58409202f48364b93e4abd($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '		</tr>
';
        $value = $context->find('records');
        $buffer .= $this->section44853cd9dcaeba17ade98b6950469463($context, $indent, $value);
        $buffer .= $indent . '	</table>	
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section21ef86ac732fae93ea0145c63b1479e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' teachers, local_odysseus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' teachers, local_odysseus ';
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

    private function section9efd4db049a890a46c0b83adb44e9555(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<b>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section500b9e341c63b77815f0534c8ecbb835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</b>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '</b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0557a56605adff6a99467241e9f8ad9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#admin}}<b>{{/admin}}{{^editor}}<i>{{/editor}}{{lastname}}&nbsp;{{firstname}}{{^editor}}</i>{{/editor}}{{#admin}}</b>{{/admin}}<br>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('admin');
                $buffer .= $this->section9efd4db049a890a46c0b83adb44e9555($context, $indent, $value);
                $value = $context->find('editor');
                if (empty($value)) {
                    
                    $buffer .= '<i>';
                }
                $value = $this->resolveValue($context->find('lastname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&nbsp;';
                $value = $this->resolveValue($context->find('firstname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('editor');
                if (empty($value)) {
                    
                    $buffer .= '</i>';
                }
                $value = $context->find('admin');
                $buffer .= $this->section500b9e341c63b77815f0534c8ecbb835($context, $indent, $value);
                $buffer .= '<br>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94b60f7a4a2cdeb4a4298bcdbce18bd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#teacher}}{{#admin}}<b>{{/admin}}{{^editor}}<i>{{/editor}}{{lastname}}&nbsp;{{firstname}}{{^editor}}</i>{{/editor}}{{#admin}}</b>{{/admin}}<br>{{/teacher}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('teacher');
                $buffer .= $this->section0557a56605adff6a99467241e9f8ad9d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
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

    private function section44853cd9dcaeba17ade98b6950469463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<tr>
		    	<td class="cell c0">{{#users}}
                    {{#teacher}}{{#admin}}<b>{{/admin}}{{^editor}}<i>{{/editor}}{{lastname}}&nbsp;{{firstname}}{{^editor}}</i>{{/editor}}{{#admin}}</b>{{/admin}}<br>{{/teacher}}
                {{/users}}</td>
		    	<td class="cell c1">{{destination}}</td>
    			<td class="cell c2">{{activity_type_text}}</td>
    			<td class="cell c3">{{date_start}}{{#date_end}} - {{date_end}}{{/date_end}}</td>
    			<td class="cell c4">{{altdate_start}}{{#altdate_end}} - {{altdate_end}}{{/altdate_end}}</td>
			</tr>
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '			<tr>
';
                $buffer .= $indent . '		    	<td class="cell c0">';
                $value = $context->find('users');
                $buffer .= $this->section94b60f7a4a2cdeb4a4298bcdbce18bd8($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '		    	<td class="cell c1">';
                $value = $this->resolveValue($context->find('destination'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '    			<td class="cell c2">';
                $value = $this->resolveValue($context->find('activity_type_text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '    			<td class="cell c3">';
                $value = $this->resolveValue($context->find('date_start'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('date_end');
                $buffer .= $this->section36e5db543bc0e67341b1885ca9c77392($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '    			<td class="cell c4">';
                $value = $this->resolveValue($context->find('altdate_start'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('altdate_end');
                $buffer .= $this->section21ac19e4092e9f8486f99ab608c71adb($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '			</tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
