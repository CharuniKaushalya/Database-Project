<?php

/* child/app_child_show.html.twig */
class __TwigTemplate_86c6750baa64cc1f7d3f9e9a3ee3b68876f5e99d83e063e9d0b2ee313a2b07e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "child/app_child_show.html.twig", 1);
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
        $__internal_bddc51b6d45df154d5a185f4bcc2d31c723e04dd1fb19bb2a26cdb0479404179 = $this->env->getExtension("native_profiler");
        $__internal_bddc51b6d45df154d5a185f4bcc2d31c723e04dd1fb19bb2a26cdb0479404179->enter($__internal_bddc51b6d45df154d5a185f4bcc2d31c723e04dd1fb19bb2a26cdb0479404179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "child/app_child_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bddc51b6d45df154d5a185f4bcc2d31c723e04dd1fb19bb2a26cdb0479404179->leave($__internal_bddc51b6d45df154d5a185f4bcc2d31c723e04dd1fb19bb2a26cdb0479404179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e5aaa654c8e60d2f2946a8501ebb2e3b6912e0d4e44ddb3a90a998f2aef578 = $this->env->getExtension("native_profiler");
        $__internal_b0e5aaa654c8e60d2f2946a8501ebb2e3b6912e0d4e44ddb3a90a998f2aef578->enter($__internal_b0e5aaa654c8e60d2f2946a8501ebb2e3b6912e0d4e44ddb3a90a998f2aef578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Child list</h1>
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
                    <button class=\"btn btn-info pull-right\"  value=\"Delete\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_new", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Add a Child</a></button>
                </div><!-- /.box-header -->
                <div class=\"box-body\">

                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Nameinfull</th>
                                <th>Nameinintials</th>
                                <th>Sex</th>
                                <th>Religion</th>
                                <th>Mediumoflearning</th>
                                <th>Dob</th>
                                <th>Id</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "                            <tr>
                                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_show", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "nameInFull", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "nameInIntials", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "sex", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "religion", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "mediumOfLearning", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            if ($this->getAttribute($context["child"], "dob", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["child"], "dob", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_show", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_edit", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                    </div><!-- /.box-body -->
                <div class=\"box-footer\">
                <button class=\"btn btn-info pull-right\"  value=\"Delete\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_preferrence", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Continue</a></button>
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>

    
";
        
        $__internal_b0e5aaa654c8e60d2f2946a8501ebb2e3b6912e0d4e44ddb3a90a998f2aef578->leave($__internal_b0e5aaa654c8e60d2f2946a8501ebb2e3b6912e0d4e44ddb3a90a998f2aef578_prof);

    }

    public function getTemplateName()
    {
        return "child/app_child_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  134 => 54,  122 => 48,  116 => 45,  109 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  81 => 35,  78 => 34,  74 => 33,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Child list</h1>*/
/* <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Child Details</h3>*/
/*                     <button class="btn btn-info pull-right"  value="Delete"><a href="{{ path('child_new', { 'id': id }) }}">Add a Child</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/* */
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Nameinfull</th>*/
/*                                 <th>Nameinintials</th>*/
/*                                 <th>Sex</th>*/
/*                                 <th>Religion</th>*/
/*                                 <th>Mediumoflearning</th>*/
/*                                 <th>Dob</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for child in children %}*/
/*                             <tr>*/
/*                                 <td><a href="{{ path('child_show', { 'id': child.id }) }}">{{ child.nameInFull }}</a></td>*/
/*                                 <td>{{ child.nameInIntials }}</td>*/
/*                                 <td>{{ child.sex }}</td>*/
/*                                 <td>{{ child.religion }}</td>*/
/*                                 <td>{{ child.mediumOfLearning }}</td>*/
/*                                 <td>{% if child.dob %}{{ child.dob|date('Y-m-d') }}{% endif %}</td>*/
/*                                 <td>{{ child.id }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('child_show', { 'id': child.id }) }}">show</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('child_edit', { 'id': child.id }) }}">edit</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                     </div><!-- /.box-body -->*/
/*                 <div class="box-footer">*/
/*                 <button class="btn btn-info pull-right"  value="Delete"><a href="{{ path('applicant_preferrence', { 'id': id }) }}">Continue</a></button>*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
