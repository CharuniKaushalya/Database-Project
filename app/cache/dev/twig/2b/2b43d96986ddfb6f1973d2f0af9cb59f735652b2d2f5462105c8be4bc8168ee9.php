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
        $__internal_69b9466979a48d0858cbfea2ea10499c7707ca8d8817f83e724820936f62aa83 = $this->env->getExtension("native_profiler");
        $__internal_69b9466979a48d0858cbfea2ea10499c7707ca8d8817f83e724820936f62aa83->enter($__internal_69b9466979a48d0858cbfea2ea10499c7707ca8d8817f83e724820936f62aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b9466979a48d0858cbfea2ea10499c7707ca8d8817f83e724820936f62aa83->leave($__internal_69b9466979a48d0858cbfea2ea10499c7707ca8d8817f83e724820936f62aa83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb1a526f73e9e18fb5e550df452a1abc69e8b486dcf3597f5ceb5ec61b54756 = $this->env->getExtension("native_profiler");
        $__internal_3eb1a526f73e9e18fb5e550df452a1abc69e8b486dcf3597f5ceb5ec61b54756->enter($__internal_3eb1a526f73e9e18fb5e550df452a1abc69e8b486dcf3597f5ceb5ec61b54756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "description", array(), "array"), "html", null, true);
            echo "</td>
                        
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 41
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
        // line 47
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
        
        $__internal_3eb1a526f73e9e18fb5e550df452a1abc69e8b486dcf3597f5ceb5ec61b54756->leave($__internal_3eb1a526f73e9e18fb5e550df452a1abc69e8b486dcf3597f5ceb5ec61b54756_prof);

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
        return array (  111 => 47,  99 => 41,  93 => 38,  85 => 33,  81 => 32,  77 => 31,  74 => 30,  70 => 29,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for role in roles %}*/
/*                     <tr>*/
/*                         <td>{{ role['id'] }}</td>*/
/*                         <td>{{ role['role'] }}</td>*/
/*                         <td>{{ role['description'] }}</td>*/
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
