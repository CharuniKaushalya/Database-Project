<?php

/* child/index.html.twig */
class __TwigTemplate_90a80ddb9586b625d8348cbe251c8fd50fda8dee41a69af43f4b86226191f077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "child/index.html.twig", 1);
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
        $__internal_7d15e6abc018db8e474b0fb4247c4c455689b60861731bc4301813c05156234a = $this->env->getExtension("native_profiler");
        $__internal_7d15e6abc018db8e474b0fb4247c4c455689b60861731bc4301813c05156234a->enter($__internal_7d15e6abc018db8e474b0fb4247c4c455689b60861731bc4301813c05156234a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "child/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d15e6abc018db8e474b0fb4247c4c455689b60861731bc4301813c05156234a->leave($__internal_7d15e6abc018db8e474b0fb4247c4c455689b60861731bc4301813c05156234a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3ae655d9f887e29ffa94390d07d96b7e7ad09e37eb99d24c99e87bbbcc6cadb = $this->env->getExtension("native_profiler");
        $__internal_d3ae655d9f887e29ffa94390d07d96b7e7ad09e37eb99d24c99e87bbbcc6cadb->enter($__internal_d3ae655d9f887e29ffa94390d07d96b7e7ad09e37eb99d24c99e87bbbcc6cadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Child Details</h3>
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "                            <tr>
                                <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_show", array("id" => $this->getAttribute($context["child"], "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name_in_full", array(), "array"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name_in_intials", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "sex", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "religion", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "medium_of_learning", array(), "array"), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            if ($this->getAttribute($context["child"], "dob", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["child"], "dob", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array(), "array"), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_show", array("id" => $this->getAttribute($context["child"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_edit", array("id" => $this->getAttribute($context["child"], "id", array(), "array"))), "html", null, true);
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
        // line 53
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
        
        $__internal_d3ae655d9f887e29ffa94390d07d96b7e7ad09e37eb99d24c99e87bbbcc6cadb->leave($__internal_d3ae655d9f887e29ffa94390d07d96b7e7ad09e37eb99d24c99e87bbbcc6cadb_prof);

    }

    public function getTemplateName()
    {
        return "child/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  118 => 47,  112 => 44,  105 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  77 => 34,  74 => 33,  70 => 32,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Child Details</h3>*/
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
/*                                 <td><a href="{{ path('child_show', { 'id': child['id'] }) }}">{{ child['name_in_full'] }}</a></td>*/
/*                                 <td>{{ child['name_in_intials'] }}</td>*/
/*                                 <td>{{ child['sex'] }}</td>*/
/*                                 <td>{{ child['religion'] }}</td>*/
/*                                 <td>{{ child['medium_of_learning'] }}</td>*/
/*                                 <td>{% if child['dob'] %}{{ child['dob']|date('Y-m-d') }}{% endif %}</td>*/
/*                                 <td>{{ child['id'] }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('child_show', { 'id': child['id'] }) }}">show</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('child_edit', { 'id': child['id'] }) }}">edit</a>*/
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
/* */
/*     */
/* {% endblock %}*/
/* */
