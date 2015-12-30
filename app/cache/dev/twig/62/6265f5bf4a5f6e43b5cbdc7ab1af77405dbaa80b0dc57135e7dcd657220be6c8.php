<?php

/* childrenofotoeos/index.html.twig */
class __TwigTemplate_a73b656bb4c9f5e473d8d5bb91bacf2f00f41251ffe3e23ede680a9e4dedc670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofotoeos/index.html.twig", 1);
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
        $__internal_85d16fed3fa9e09d8b105cd13ebe3e1588560d64ea5d1d86a0544443d71dea7f = $this->env->getExtension("native_profiler");
        $__internal_85d16fed3fa9e09d8b105cd13ebe3e1588560d64ea5d1d86a0544443d71dea7f->enter($__internal_85d16fed3fa9e09d8b105cd13ebe3e1588560d64ea5d1d86a0544443d71dea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofotoeos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d16fed3fa9e09d8b105cd13ebe3e1588560d64ea5d1d86a0544443d71dea7f->leave($__internal_85d16fed3fa9e09d8b105cd13ebe3e1588560d64ea5d1d86a0544443d71dea7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfad755cb571e30dd17f7881b96c47a4ebc86c103d3083c7aaaa2f8421b52b0e = $this->env->getExtension("native_profiler");
        $__internal_dfad755cb571e30dd17f7881b96c47a4ebc86c103d3083c7aaaa2f8421b52b0e->enter($__internal_dfad755cb571e30dd17f7881b96c47a4ebc86c103d3083c7aaaa2f8421b52b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
             <h3 class=\"box-title\">ChildrenOfOtoeos list</h3>
        </div><!-- /.box-header -->
         <!-- form start -->
        <form class=\"form-horizontal\">
        <div class=\"box-body\">

            <table class=\"table\"> 
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Last transfer received</th>
                        <th>Before Address workplace</th>
                        <th>After address wrkplace</th>
                        <th>Distance</th>
                        <th>No school addmitted</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["childrenOfOtoeos"]) ? $context["childrenOfOtoeos"] : $this->getContext($context, "childrenOfOtoeos")));
        foreach ($context['_seq'] as $context["_key"] => $context["childrenOfOtoeo"]) {
            // line 35
            echo "                    <tr>
                        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofotoeos_show", array("id" => $this->getAttribute($context["childrenOfOtoeo"], "id", array(), "array"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 37
            if ($this->getAttribute($context["childrenOfOtoeo"], "last_transfer_received", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "last_transfer_received", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "before_address_wrk_place", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "after_address_wrk_place", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "distance", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["childrenOfOtoeo"], "no_scl_addmitted", array(), "array"), "html", null, true);
            echo "</td>
                        
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofotoeos_show", array("id" => $this->getAttribute($context["childrenOfOtoeo"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofotoeos_edit", array("id" => $this->getAttribute($context["childrenOfOtoeo"], "id", array(), "array"))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childrenOfOtoeo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </tbody>
            </table>
    </div><!-- /.box-body -->
        <div class=\"box-footer\">
        </div><!-- /.box-footer -->
        </form>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_dfad755cb571e30dd17f7881b96c47a4ebc86c103d3083c7aaaa2f8421b52b0e->leave($__internal_dfad755cb571e30dd17f7881b96c47a4ebc86c103d3083c7aaaa2f8421b52b0e_prof);

    }

    public function getTemplateName()
    {
        return "childrenofotoeos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  117 => 49,  111 => 46,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  85 => 37,  79 => 36,  76 => 35,  72 => 34,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <div class="box box-info">*/
/*         <div class="box-header with-border">*/
/*              <h3 class="box-title">ChildrenOfOtoeos list</h3>*/
/*         </div><!-- /.box-header -->*/
/*          <!-- form start -->*/
/*         <form class="form-horizontal">*/
/*         <div class="box-body">*/
/* */
/*             <table class="table"> */
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Last transfer received</th>*/
/*                         <th>Before Address workplace</th>*/
/*                         <th>After address wrkplace</th>*/
/*                         <th>Distance</th>*/
/*                         <th>No school addmitted</th>*/
/*                         */
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for childrenOfOtoeo in childrenOfOtoeos %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('childrenofotoeos_show', { 'id': childrenOfOtoeo['id'] }) }}">{{ childrenOfOtoeo.id }}</a></td>*/
/*                         <td>{% if childrenOfOtoeo['last_transfer_received'] %}{{ childrenOfOtoeo['last_transfer_received']|date('Y-m-d') }}{% endif %}</td>*/
/*                         <td>{{ childrenOfOtoeo['before_address_wrk_place'] }}</td>*/
/*                         <td>{{ childrenOfOtoeo['after_address_wrk_place'] }}</td>*/
/*                         <td>{{ childrenOfOtoeo['distance'] }}</td>*/
/*                         <td>{{ childrenOfOtoeo['no_scl_addmitted'] }}</td>*/
/*                         */
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('childrenofotoeos_show', { 'id': childrenOfOtoeo['id'] }) }}">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('childrenofotoeos_edit', { 'id': childrenOfOtoeo['id'] }) }}">edit</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*     </div><!-- /.box-body -->*/
/*         <div class="box-footer">*/
/*         </div><!-- /.box-footer -->*/
/*         </form>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
