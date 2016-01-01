<?php

/* role/index.html.twig */
class __TwigTemplate_00d932affe2bfe063104754deea7c7a0169645ac07c2510bbcbfbef3eff4b005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/index.html.twig", 1);
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
        $__internal_6523a52e2a0fa16f0dd2b292a9fcf4a5064294349816abc754d49dcef85c5394 = $this->env->getExtension("native_profiler");
        $__internal_6523a52e2a0fa16f0dd2b292a9fcf4a5064294349816abc754d49dcef85c5394->enter($__internal_6523a52e2a0fa16f0dd2b292a9fcf4a5064294349816abc754d49dcef85c5394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6523a52e2a0fa16f0dd2b292a9fcf4a5064294349816abc754d49dcef85c5394->leave($__internal_6523a52e2a0fa16f0dd2b292a9fcf4a5064294349816abc754d49dcef85c5394_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7f07afb91194d157d2feb107f51106f1a84caedde558a6fb7a5796025449e9d = $this->env->getExtension("native_profiler");
        $__internal_a7f07afb91194d157d2feb107f51106f1a84caedde558a6fb7a5796025449e9d->enter($__internal_a7f07afb91194d157d2feb107f51106f1a84caedde558a6fb7a5796025449e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
             <h3 class=\"box-title\">Role List</h3>
             <button type=\"submit\" class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("role_new");
        echo "\">Create a new entry</a></button>
        </div><!-- /.box-header -->
         <!-- form start -->
        <form class=\"form-horizontal\">
        <div class=\"box-body\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th></th>
                        <th>Role</th>
                        <th>Description</th>
                        <th>View Previlges</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "description", array(), "array"), "html", null, true);
            echo "</td>
                        <th><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_previlege", array("id" => $this->getAttribute($context["role"], "id", array(), "array"))), "html", null, true);
            echo "\">View Previlges</a></th>
                        
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute($context["role"], "id", array(), "array"))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        
        $__internal_a7f07afb91194d157d2feb107f51106f1a84caedde558a6fb7a5796025449e9d->leave($__internal_a7f07afb91194d157d2feb107f51106f1a84caedde558a6fb7a5796025449e9d_prof);

    }

    public function getTemplateName()
    {
        return "role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  104 => 43,  98 => 40,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  75 => 31,  71 => 30,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*              <h3 class="box-title">Role List</h3>*/
/*              <button type="submit" class="btn btn-info pull-right"><a href="{{ path('role_new') }}">Create a new entry</a></button>*/
/*         </div><!-- /.box-header -->*/
/*          <!-- form start -->*/
/*         <form class="form-horizontal">*/
/*         <div class="box-body">*/
/*             <table class="table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th></th>*/
/*                         <th>Role</th>*/
/*                         <th>Description</th>*/
/*                         <th>View Previlges</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for role in roles %}*/
/*                     <tr>*/
/*                         <td>{{ role['id'] }}</td>*/
/*                         <td>{{ role['role'] }}</td>*/
/*                         <td>{{ role['description'] }}</td>*/
/*                         <th><a href="{{ path('role_previlege', { 'id': role['id'] }) }}">View Previlges</a></th>*/
/*                         */
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('role_show', { 'id': role['id'] }) }}">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('role_edit', { 'id': role['id'] }) }}">edit</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer">*/
/*         </div><!-- /.box-footer -->*/
/*         </form>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
