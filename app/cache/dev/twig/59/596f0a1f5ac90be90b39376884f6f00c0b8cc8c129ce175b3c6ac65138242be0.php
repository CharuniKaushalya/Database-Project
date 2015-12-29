<?php

/* applicant/index2.html.twig */
class __TwigTemplate_cef492bc1874a7bbf214f78e7ca40d38a87b2a8a56014e004d0217ec9b3757c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "applicant/index2.html.twig", 1);
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
        $__internal_a5ab0c2ec5bb22ddf280541bb92ad10d6e5156e2f9046afc1d9d13b26f610645 = $this->env->getExtension("native_profiler");
        $__internal_a5ab0c2ec5bb22ddf280541bb92ad10d6e5156e2f9046afc1d9d13b26f610645->enter($__internal_a5ab0c2ec5bb22ddf280541bb92ad10d6e5156e2f9046afc1d9d13b26f610645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "applicant/index2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ab0c2ec5bb22ddf280541bb92ad10d6e5156e2f9046afc1d9d13b26f610645->leave($__internal_a5ab0c2ec5bb22ddf280541bb92ad10d6e5156e2f9046afc1d9d13b26f610645_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a17579ef3e9efa75e4b6a17f7753ccdaefb6d056d3b0771fd0f01322b6200b = $this->env->getExtension("native_profiler");
        $__internal_11a17579ef3e9efa75e4b6a17f7753ccdaefb6d056d3b0771fd0f01322b6200b->enter($__internal_11a17579ef3e9efa75e4b6a17f7753ccdaefb6d056d3b0771fd0f01322b6200b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1></h1>
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
        echo "\">Create a new entry</a></button>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Name in full</th>
                                <th>Name in intials</th>
                                <th>Permanent Address</th>
                                <th>Grama Niladari Divion</th>
                                <th>Divsional Scretary Area</th>
                                <th>District</th>
                                <th>Dob</th>
                                <th>Nic</th>
                                <th>Whether srilankan</th>
                                <th>No Years In Electoral Register</th>
                                <th>No Schools Located Closer</th>
                                <th>Id</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applicants"]) ? $context["applicants"] : $this->getContext($context, "applicants")));
        foreach ($context['_seq'] as $context["_key"] => $context["applicant"]) {
            // line 38
            echo "                            <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_show", array("id" => $this->getAttribute($context["applicant"], "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "name_in_full", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "name_in_initials", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "permanent_address", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "grama_niladari_divion", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "divsional_scretary_area", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "district", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            if ($this->getAttribute($context["applicant"], "dob", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["applicant"], "dob", array(), "array"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "nic", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            if ($this->getAttribute($context["applicant"], "wether_srilankan", array(), "array")) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "no_years_in_electoral_register", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "no_schools_located_closer", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_show", array("id" => $this->getAttribute($context["applicant"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_edit", array("id" => $this->getAttribute($context["applicant"], "id", array(), "array"))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['applicant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        
        $__internal_11a17579ef3e9efa75e4b6a17f7753ccdaefb6d056d3b0771fd0f01322b6200b->leave($__internal_11a17579ef3e9efa75e4b6a17f7753ccdaefb6d056d3b0771fd0f01322b6200b_prof);

    }

    public function getTemplateName()
    {
        return "applicant/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 64,  154 => 58,  148 => 55,  141 => 51,  137 => 50,  133 => 49,  125 => 48,  121 => 47,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  99 => 42,  95 => 41,  89 => 40,  85 => 39,  82 => 38,  78 => 37,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1></h1>*/
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
/*                     <button class="btn btn-info pull-right"><a href="{{ path('applicant_new') }}">Create a new entry</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <table class="table">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Name in full</th>*/
/*                                 <th>Name in intials</th>*/
/*                                 <th>Permanent Address</th>*/
/*                                 <th>Grama Niladari Divion</th>*/
/*                                 <th>Divsional Scretary Area</th>*/
/*                                 <th>District</th>*/
/*                                 <th>Dob</th>*/
/*                                 <th>Nic</th>*/
/*                                 <th>Whether srilankan</th>*/
/*                                 <th>No Years In Electoral Register</th>*/
/*                                 <th>No Schools Located Closer</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for applicant in applicants %}*/
/*                             <tr>*/
/*                             <td>{{ applicant['id']}}</td>*/
/*                                 <td><a href="{{ path('applicant_show', { 'id': applicant['id'] }) }}">{{ applicant['name_in_full'] }}</td>*/
/*                                 <td>{{ applicant['name_in_initials'] }}</td>*/
/*                                 <td>{{ applicant['permanent_address'] }}</td>*/
/*                                 <td>{{ applicant['grama_niladari_divion'] }}</td>*/
/*                                 <td>{{ applicant['divsional_scretary_area'] }}</td>*/
/*                                 <td>{{ applicant['district']}}</td>*/
/*                                 <td>{% if applicant['dob'] %}{{ applicant['dob']|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 <td>{{ applicant['nic'] }}</td>*/
/*                                 <td>{% if applicant['wether_srilankan'] %}Yes{% else %}No{% endif %}</td>*/
/*                                 <td>{{ applicant['no_years_in_electoral_register'] }}</td>*/
/*                                 <td>{{ applicant['no_schools_located_closer'] }}</td>*/
/*                                 <td>{{ applicant['id'] }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('applicant_show', { 'id': applicant['id'] }) }}">show</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('applicant_edit', { 'id': applicant['id'] }) }}">edit</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer">*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
