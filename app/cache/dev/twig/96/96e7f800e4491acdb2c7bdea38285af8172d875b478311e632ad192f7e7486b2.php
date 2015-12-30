<?php

/* childrenofstaff/index.html.twig */
class __TwigTemplate_b07b826b61b3c147e5e54ec22991af85647756109d9f121bcb5cd73e61a8c949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofstaff/index.html.twig", 1);
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
        $__internal_1205daf25a6c31959a5b19210870761fd505a17df215b5bf9c245830c1cdecb0 = $this->env->getExtension("native_profiler");
        $__internal_1205daf25a6c31959a5b19210870761fd505a17df215b5bf9c245830c1cdecb0->enter($__internal_1205daf25a6c31959a5b19210870761fd505a17df215b5bf9c245830c1cdecb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofstaff/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1205daf25a6c31959a5b19210870761fd505a17df215b5bf9c245830c1cdecb0->leave($__internal_1205daf25a6c31959a5b19210870761fd505a17df215b5bf9c245830c1cdecb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38f8bc85a550ed05333f05e4f1f9adbde6e01966581582be90daa9df64ae6ed = $this->env->getExtension("native_profiler");
        $__internal_e38f8bc85a550ed05333f05e4f1f9adbde6e01966581582be90daa9df64ae6ed->enter($__internal_e38f8bc85a550ed05333f05e4f1f9adbde6e01966581582be90daa9df64ae6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Gardian Details</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Emp id</th>
                                <th>Period of service</th>
                                <th>Period of difficult school service</th>
                                <th>Difficult service from year</th>
                                <th>Difficult service to year</th>
                                <th>Unutilized leave</th>
                                <th>Id</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["childrenOfStaffs"]) ? $context["childrenOfStaffs"] : $this->getContext($context, "childrenOfStaffs")));
        foreach ($context['_seq'] as $context["_key"] => $context["childrenOfStaff"]) {
            // line 32
            echo "                            <tr>
                                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofstaff_show", array("id" => $this->getAttribute($context["childrenOfStaff"], "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "emp_id", array(), "array"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "period_of_service", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "period_of_difficult_school_service", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            if ($this->getAttribute($context["childrenOfStaff"], "diff_from_year", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "diff_from_year", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 37
            if ($this->getAttribute($context["childrenOfStaff"], "diff_to_year", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "diff_to_year", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 38
            if ($this->getAttribute($context["childrenOfStaff"], "un_utilized_leave", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "un_utilized_leave", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfStaff"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofstaff_show", array("id" => $this->getAttribute($context["childrenOfStaff"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofstaff_edit", array("id" => $this->getAttribute($context["childrenOfStaff"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childrenOfStaff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                    </div><!-- /.box-body -->
                <div class=\"box-footer\">
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e38f8bc85a550ed05333f05e4f1f9adbde6e01966581582be90daa9df64ae6ed->leave($__internal_e38f8bc85a550ed05333f05e4f1f9adbde6e01966581582be90daa9df64ae6ed_prof);

    }

    public function getTemplateName()
    {
        return "childrenofstaff/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  121 => 46,  115 => 43,  108 => 39,  102 => 38,  96 => 37,  90 => 36,  86 => 35,  82 => 34,  76 => 33,  73 => 32,  69 => 31,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1></h1>*/
/* <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Gardian Details</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Emp id</th>*/
/*                                 <th>Period of service</th>*/
/*                                 <th>Period of difficult school service</th>*/
/*                                 <th>Difficult service from year</th>*/
/*                                 <th>Difficult service to year</th>*/
/*                                 <th>Unutilized leave</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for childrenOfStaff in childrenOfStaffs %}*/
/*                             <tr>*/
/*                                 <td><a href="{{ path('childrenofstaff_show', { 'id': childrenOfStaff['id'] }) }}">{{ childrenOfStaff['emp_id'] }}</a></td>*/
/*                                 <td>{{ childrenOfStaff['period_of_service'] }}</td>*/
/*                                 <td>{{ childrenOfStaff['period_of_difficult_school_service'] }}</td>*/
/*                                 <td>{% if childrenOfStaff['diff_from_year'] %}{{ childrenOfStaff['diff_from_year']|date('Y-m-d') }}{% endif %}</td>*/
/*                                 <td>{% if childrenOfStaff['diff_to_year'] %}{{ childrenOfStaff['diff_to_year']|date('Y-m-d') }}{% endif %}</td>*/
/*                                 <td>{% if childrenOfStaff['un_utilized_leave'] %}{{ childrenOfStaff['un_utilized_leave']|date('Y-m-d') }}{% endif %}</td>*/
/*                                 <td>{{ childrenOfStaff['id'] }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('childrenofstaff_show', { 'id': childrenOfStaff['id'] }) }}">show</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('childrenofstaff_edit', { 'id': childrenOfStaff.id }) }}">edit</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                     </div><!-- /.box-body -->*/
/*                 <div class="box-footer">*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
