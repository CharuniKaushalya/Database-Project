<?php

/* childrenofstaff/show.html.twig */
class __TwigTemplate_7ae1f12a02de190dae854335b5334b2ba9373cbfe9c577220c38b9743a20758c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofstaff/show.html.twig", 1);
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
        $__internal_727fb70a3d190f298cda13356cb34b550d60bb259152b598b1502aa74635b0ee = $this->env->getExtension("native_profiler");
        $__internal_727fb70a3d190f298cda13356cb34b550d60bb259152b598b1502aa74635b0ee->enter($__internal_727fb70a3d190f298cda13356cb34b550d60bb259152b598b1502aa74635b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofstaff/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_727fb70a3d190f298cda13356cb34b550d60bb259152b598b1502aa74635b0ee->leave($__internal_727fb70a3d190f298cda13356cb34b550d60bb259152b598b1502aa74635b0ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d238521f4588add53fff553ae2e3f09eb2d58b940605da20d6399a8ce89f1cc8 = $this->env->getExtension("native_profiler");
        $__internal_d238521f4588add53fff553ae2e3f09eb2d58b940605da20d6399a8ce89f1cc8->enter($__internal_d238521f4588add53fff553ae2e3f09eb2d58b940605da20d6399a8ce89f1cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1></h1>
    <div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                     <h3 class=\"box-title\">ChildOfStaff Detail: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "empId", array()), "html", null, true);
        echo "</h3>
                     <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("childrenofstaff_index");
        echo "\">Back to the list</a></button>
                </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <table class=\"col-md-8 table-hover record_properties\">
                            <tbody>
                                <tr>
                                    <th>Empid</th>
                                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "empId", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Periodofservice</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "periodOfService", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Periodofdifficultschoolservice</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "periodOfDifficultSchoolService", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Difffromyear</th>
                                    <td>";
        // line 34
        if ($this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "diffFromYear", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "diffFromYear", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Difftoyear</th>
                                    <td>";
        // line 38
        if ($this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "diffToYear", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "diffToYear", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Unutilizedleave</th>
                                    <td>";
        // line 42
        if ($this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "unUtilizedLeave", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "unUtilizedLeave", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofstaff_edit", array("id" => $this->getAttribute((isset($context["childrenOfStaff"]) ? $context["childrenOfStaff"] : $this->getContext($context, "childrenOfStaff")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\">Edit</a>
                        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
                        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div><!-- /.box-footer -->
            </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_d238521f4588add53fff553ae2e3f09eb2d58b940605da20d6399a8ce89f1cc8->leave($__internal_d238521f4588add53fff553ae2e3f09eb2d58b940605da20d6399a8ce89f1cc8_prof);

    }

    public function getTemplateName()
    {
        return "childrenofstaff/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 56,  128 => 54,  124 => 53,  114 => 46,  105 => 42,  96 => 38,  87 => 34,  80 => 30,  73 => 26,  66 => 22,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1></h1>*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                      <h3 class="box-title">ChildOfStaff Detail: {{  childrenOfStaff.empId }}</h3>*/
/*                      <button  class="btn btn-info pull-right"><a href="{{ path('childrenofstaff_index') }}">Back to the list</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <table class="col-md-8 table-hover record_properties">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Empid</th>*/
/*                                     <td>{{ childrenOfStaff.empId }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Periodofservice</th>*/
/*                                     <td>{{ childrenOfStaff.periodOfService }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Periodofdifficultschoolservice</th>*/
/*                                     <td>{{ childrenOfStaff.periodOfDifficultSchoolService }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Difffromyear</th>*/
/*                                     <td>{% if childrenOfStaff.diffFromYear %}{{ childrenOfStaff.diffFromYear|date('Y-m-d') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Difftoyear</th>*/
/*                                     <td>{% if childrenOfStaff.diffToYear %}{{ childrenOfStaff.diffToYear|date('Y-m-d') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Unutilizedleave</th>*/
/*                                     <td>{% if childrenOfStaff.unUtilizedLeave %}{{ childrenOfStaff.unUtilizedLeave|date('Y-m-d') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ childrenOfStaff.id }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         */
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                     <a href="{{ path('childrenofstaff_edit', { 'id': childrenOfStaff.id }) }}" class="btn btn-info pull-right">Edit</a>*/
/*                         {{ form_start(delete_form) }}*/
/*                             <input type="submit" value="Delete" class="btn btn-danger">*/
/*                         {{ form_end(delete_form) }}*/
/*                     </div><!-- /.box-footer -->*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* {% endblock %}*/
/* */
