<?php

/* applicant/preferrence.html.twig */
class __TwigTemplate_d599e0730d9a8af318c43c6c4eb57859b87ed71721c0266c994215961cbde0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "applicant/preferrence.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537f7e5dfd2ae7f68e794a0073f57b0fd68ec2c6a9e1dbb1edf275120e1eba5b = $this->env->getExtension("native_profiler");
        $__internal_537f7e5dfd2ae7f68e794a0073f57b0fd68ec2c6a9e1dbb1edf275120e1eba5b->enter($__internal_537f7e5dfd2ae7f68e794a0073f57b0fd68ec2c6a9e1dbb1edf275120e1eba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "applicant/preferrence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537f7e5dfd2ae7f68e794a0073f57b0fd68ec2c6a9e1dbb1edf275120e1eba5b->leave($__internal_537f7e5dfd2ae7f68e794a0073f57b0fd68ec2c6a9e1dbb1edf275120e1eba5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f724aa8715b94a325400da70378be17a63b1fd44982ec18d2440d70d069d919 = $this->env->getExtension("native_profiler");
        $__internal_3f724aa8715b94a325400da70378be17a63b1fd44982ec18d2440d70d069d919->enter($__internal_3f724aa8715b94a325400da70378be17a63b1fd44982ec18d2440d70d069d919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Preference creation</h1>
    <div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Child Details</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
\t\t\t\t\t<form method=\"post\" class=\"schools\" name=\"schools\">
\t\t\t\t\t\t";
        // line 18
        $context["count"] = 0;
        // line 19
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) ? $context["schools"] : $this->getContext($context, "schools")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 20
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"checkbox form-group\" name=\"myschool\">
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\"><input type=\"checkbox\" name=\"school[";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "][sid]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array(), "array"), "html", null, true);
            echo "\">Option ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "name", array(), "array"), "html", null, true);
            echo "</label>
                            \t<label class=\"col-sm-2 control-label\">Prefferrence No:</label>
                            \t<div class=\"col-sm-5\">
                                \t<input type=\"number\" class=\"form-control\" name=\"school[";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "][id]\">
                           \t\t </div>
                       \t\t </div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t\t<input type=\"submit\" value=\"Create\" name=\"submit\" class=\"btn btn-info\"/>
\t\t\t\t\t</form>


\t\t\t\t</div><!-- /.box-body -->
                <div class=\"box-footer\">
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>       
";
        
        $__internal_3f724aa8715b94a325400da70378be17a63b1fd44982ec18d2440d70d069d919->leave($__internal_3f724aa8715b94a325400da70378be17a63b1fd44982ec18d2440d70d069d919_prof);

    }

    public function getTemplateName()
    {
        return "applicant/preferrence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  94 => 29,  84 => 26,  76 => 20,  58 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Preference creation</h1>*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Child Details</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/* 					<form method="post" class="schools" name="schools">*/
/* 						{% set count = 0 %}*/
/* 						{% for school in schools %}*/
/* 							*/
/* 							<div class="checkbox form-group" name="myschool">*/
/* 							  */
/* 							</div>*/
/* 								  */
/* 							<div class="form-group">*/
/* 								<label class="col-sm-3 control-label"><input type="checkbox" name="school[{{ loop.index }}][sid]" value="{{school['id']}}">Option {{school['name']}}</label>*/
/*                             	<label class="col-sm-2 control-label">Prefferrence No:</label>*/
/*                             	<div class="col-sm-5">*/
/*                                 	<input type="number" class="form-control" name="school[{{ loop.index }}][id]">*/
/*                            		 </div>*/
/*                        		 </div>*/
/* 							<br/>*/
/* 						{% endfor %}*/
/* 						<input type="submit" value="Create" name="submit" class="btn btn-info"/>*/
/* 					</form>*/
/* */
/* */
/* 				</div><!-- /.box-body -->*/
/*                 <div class="box-footer">*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>       */
/* {% endblock %}*/
