<?php

/* applicant/show.html.twig */
class __TwigTemplate_ada5841a16d6ff923a9dfeaa7c97af87fa25a030598e61deb3bb5b192dce4e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "applicant/show.html.twig", 1);
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
        $__internal_f84b95ff40ebb24171c852a90182db42455ea06a7c48e4a783ccc7832011a2af = $this->env->getExtension("native_profiler");
        $__internal_f84b95ff40ebb24171c852a90182db42455ea06a7c48e4a783ccc7832011a2af->enter($__internal_f84b95ff40ebb24171c852a90182db42455ea06a7c48e4a783ccc7832011a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "applicant/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f84b95ff40ebb24171c852a90182db42455ea06a7c48e4a783ccc7832011a2af->leave($__internal_f84b95ff40ebb24171c852a90182db42455ea06a7c48e4a783ccc7832011a2af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a1a56b40d2e12071d8ca4424fec6a4120f288235029a9377a164b69eb91846 = $this->env->getExtension("native_profiler");
        $__internal_37a1a56b40d2e12071d8ca4424fec6a4120f288235029a9377a164b69eb91846->enter($__internal_37a1a56b40d2e12071d8ca4424fec6a4120f288235029a9377a164b69eb91846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Applicant</h1>
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
                    <button class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("applicant_new");
        echo "\">Create a new Applicant</a></button>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Nameinfull</th>
                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "nameInFull", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nameininitials</th>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "nameInInitials", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Permanentaddress</th>
                                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "permanentAddress", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Gramaniladaridivion</th>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "gramaNiladariDivion", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Divsionalscretaryarea</th>
                                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "divsionalScretaryArea", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "district", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Dob</th>
                                <td>";
        // line 46
        if ($this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "dob", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "dob", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nic</th>
                                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "nic", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Wethersrilankan</th>
                                <td>";
        // line 54
        if ($this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "wetherSrilankan", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                            </tr>
                            <tr>
                                <th>Noyearsinelectoralregister</th>
                                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "noYearsInElectoralRegister", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Noschoolslocatedcloser</th>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "noSchoolsLocatedCloser", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "id", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer\">                     
                    <button type=\"submit\" class=\"btn btn-info pull-right\"><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_edit", array("id" => $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "id", array()))), "html", null, true);
        echo "\">Edit</a></button>
                    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <input type=\"submit\" class=\"btn btn-danger pull-right\" stlye=\"margin-right:12px\" value=\"Delete\">
                    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "


                    <button class=\"btn btn-default\"><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("applicant_index");
        echo "\">Back</a></button>

                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>

";
        
        $__internal_37a1a56b40d2e12071d8ca4424fec6a4120f288235029a9377a164b69eb91846->leave($__internal_37a1a56b40d2e12071d8ca4424fec6a4120f288235029a9377a164b69eb91846_prof);

    }

    public function getTemplateName()
    {
        return "applicant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 78,  164 => 75,  159 => 73,  155 => 72,  146 => 66,  139 => 62,  132 => 58,  121 => 54,  114 => 50,  105 => 46,  98 => 42,  91 => 38,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Applicant</h1>*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Gardian Details</h3>*/
/*                     <button class="btn btn-info pull-right"><a href="{{ path('applicant_new') }}">Create a new Applicant</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <table class="table">*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <th>Nameinfull</th>*/
/*                                 <td>{{ applicant.nameInFull }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Nameininitials</th>*/
/*                                 <td>{{ applicant.nameInInitials }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Permanentaddress</th>*/
/*                                 <td>{{ applicant.permanentAddress }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Gramaniladaridivion</th>*/
/*                                 <td>{{ applicant.gramaNiladariDivion }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Divsionalscretaryarea</th>*/
/*                                 <td>{{ applicant.divsionalScretaryArea }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>District</th>*/
/*                                 <td>{{ applicant.district }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Dob</th>*/
/*                                 <td>{% if applicant.dob %}{{ applicant.dob|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Nic</th>*/
/*                                 <td>{{ applicant.nic }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Wethersrilankan</th>*/
/*                                 <td>{% if applicant.wetherSrilankan %}Yes{% else %}No{% endif %}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Noyearsinelectoralregister</th>*/
/*                                 <td>{{ applicant.noYearsInElectoralRegister }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Noschoolslocatedcloser</th>*/
/*                                 <td>{{ applicant.noSchoolsLocatedCloser }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Id</th>*/
/*                                 <td>{{ applicant.id }}</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer">                     */
/*                     <button type="submit" class="btn btn-info pull-right"><a href="{{ path('applicant_edit', { 'id': applicant.id }) }}">Edit</a></button>*/
/*                     {{ form_start(delete_form) }}*/
/*                         <input type="submit" class="btn btn-danger pull-right" stlye="margin-right:12px" value="Delete">*/
/*                     {{ form_end(delete_form) }}*/
/* */
/* */
/*                     <button class="btn btn-default"><a href="{{ path('applicant_index') }}">Back</a></button>*/
/* */
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
