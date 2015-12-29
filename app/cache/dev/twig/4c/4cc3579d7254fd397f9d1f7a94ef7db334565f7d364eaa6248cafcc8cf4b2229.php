<?php

/* childrenofotoeos/show.html.twig */
class __TwigTemplate_295a4b57570f3a8baf2df867d320b0231ffa90ca30644583e3baf906a86f921d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofotoeos/show.html.twig", 1);
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
        $__internal_31d021d8eccd6cc9823ca7231a024d796e7c32d3edc5694f6196ff19ff777660 = $this->env->getExtension("native_profiler");
        $__internal_31d021d8eccd6cc9823ca7231a024d796e7c32d3edc5694f6196ff19ff777660->enter($__internal_31d021d8eccd6cc9823ca7231a024d796e7c32d3edc5694f6196ff19ff777660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofotoeos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d021d8eccd6cc9823ca7231a024d796e7c32d3edc5694f6196ff19ff777660->leave($__internal_31d021d8eccd6cc9823ca7231a024d796e7c32d3edc5694f6196ff19ff777660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_994cf0f92d02b3cfacf12ff6e10892c1f6c8be3972f948962635eb2ec77b9f06 = $this->env->getExtension("native_profiler");
        $__internal_994cf0f92d02b3cfacf12ff6e10892c1f6c8be3972f948962635eb2ec77b9f06->enter($__internal_994cf0f92d02b3cfacf12ff6e10892c1f6c8be3972f948962635eb2ec77b9f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ChildrenOfOtoeos</h1>
    <div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                     <h3 class=\"box-title\">childrenofotoeos Detail: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "id", array()), "html", null, true);
        echo "</h3>
                     <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("childrenofotoeos_index");
        echo "\">Back to the list</a></button>
                </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <table class=\"col-md-8 table-hover record_properties\">
                            <tbody>
                                <tr>
                                    <th>Lasttransferreceived</th>
                                    <td>";
        // line 22
        if ($this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "lastTransferReceived", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "lastTransferReceived", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Beforeaddresswrkplace</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "beforeAddressWrkPlace", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Afteraddresswrkplace</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "afterAddressWrkPlace", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Distance</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "distance", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Noscladdmitted</th>
                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "noSclAddmitted", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                         <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofotoeos_edit", array("id" => $this->getAttribute((isset($context["childrenOfOtoeo"]) ? $context["childrenOfOtoeo"] : $this->getContext($context, "childrenOfOtoeo")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\">Edit</a>
                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div><!-- /.box-footer -->
            </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_994cf0f92d02b3cfacf12ff6e10892c1f6c8be3972f948962635eb2ec77b9f06->leave($__internal_994cf0f92d02b3cfacf12ff6e10892c1f6c8be3972f948962635eb2ec77b9f06_prof);

    }

    public function getTemplateName()
    {
        return "childrenofotoeos/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 52,  117 => 50,  113 => 49,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  66 => 22,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ChildrenOfOtoeos</h1>*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                      <h3 class="box-title">childrenofotoeos Detail: {{ childrenOfOtoeo.id }}</h3>*/
/*                      <button  class="btn btn-info pull-right"><a href="{{ path('childrenofotoeos_index') }}">Back to the list</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <table class="col-md-8 table-hover record_properties">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Lasttransferreceived</th>*/
/*                                     <td>{% if childrenOfOtoeo.lastTransferReceived %}{{ childrenOfOtoeo.lastTransferReceived|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Beforeaddresswrkplace</th>*/
/*                                     <td>{{ childrenOfOtoeo.beforeAddressWrkPlace }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Afteraddresswrkplace</th>*/
/*                                     <td>{{ childrenOfOtoeo.afterAddressWrkPlace }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Distance</th>*/
/*                                     <td>{{ childrenOfOtoeo.distance }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Noscladdmitted</th>*/
/*                                     <td>{{ childrenOfOtoeo.noSclAddmitted }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ childrenOfOtoeo.id }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                         */
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                          <a href="{{ path('childrenofotoeos_edit', { 'id': childrenOfOtoeo.id }) }}" class="btn btn-info pull-right">Edit</a>*/
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
