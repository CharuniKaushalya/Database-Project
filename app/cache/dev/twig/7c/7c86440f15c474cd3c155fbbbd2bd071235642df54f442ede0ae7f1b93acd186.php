<?php

/* role/show.html.twig */
class __TwigTemplate_f410f46e02e3a87e9c682523988179ef346e51f75d95a8e576f946f2ccf153f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/show.html.twig", 1);
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
        $__internal_b57e14178eca37a665b8b1ba6e23e6b534c80dd83d4866e506ee3d39c1c25407 = $this->env->getExtension("native_profiler");
        $__internal_b57e14178eca37a665b8b1ba6e23e6b534c80dd83d4866e506ee3d39c1c25407->enter($__internal_b57e14178eca37a665b8b1ba6e23e6b534c80dd83d4866e506ee3d39c1c25407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b57e14178eca37a665b8b1ba6e23e6b534c80dd83d4866e506ee3d39c1c25407->leave($__internal_b57e14178eca37a665b8b1ba6e23e6b534c80dd83d4866e506ee3d39c1c25407_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_357f03eb08ad317fc2a3915befaa77fcfbef48664d1e85c555e50226adeb2508 = $this->env->getExtension("native_profiler");
        $__internal_357f03eb08ad317fc2a3915befaa77fcfbef48664d1e85c555e50226adeb2508->enter($__internal_357f03eb08ad317fc2a3915befaa77fcfbef48664d1e85c555e50226adeb2508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                     <h3 class=\"box-title\">Schol Detail: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id", array()), "html", null, true);
        echo "</h3>
                     <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("role_index");
        echo "\">Back to the list</a></button>
                </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <table class=\"col-md-8 table-hover record_properties\">
                            <tbody>
                                <tr>
                                    <th>Role</th>
                                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "role", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Descriptiom</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "description", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                         <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id", array()))), "html", null, true);
        echo "\">Edit</a></button>
                        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                           
                            <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
                        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div><!-- /.box-footer -->
            </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_357f03eb08ad317fc2a3915befaa77fcfbef48664d1e85c555e50226adeb2508->leave($__internal_357f03eb08ad317fc2a3915befaa77fcfbef48664d1e85c555e50226adeb2508_prof);

    }

    public function getTemplateName()
    {
        return "role/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  93 => 37,  89 => 36,  80 => 30,  73 => 26,  66 => 22,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                      <h3 class="box-title">Schol Detail: {{ role.id }}</h3>*/
/*                      <button  class="btn btn-info pull-right"><a href="{{ path('role_index') }}">Back to the list</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <table class="col-md-8 table-hover record_properties">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Role</th>*/
/*                                     <td>{{ role.role }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Descriptiom</th>*/
/*                                     <td>{{ role.description }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ role.id }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                          <button  class="btn btn-info pull-right"><a href="{{ path('role_edit', { 'id': role.id }) }}">Edit</a></button>*/
/*                         {{ form_start(delete_form) }}*/
/*                            */
/*                             <input type="submit" class="btn btn-danger" value="Delete">*/
/*                         {{ form_end(delete_form) }}*/
/*                     </div><!-- /.box-footer -->*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* {% endblock %}*/
/* */
