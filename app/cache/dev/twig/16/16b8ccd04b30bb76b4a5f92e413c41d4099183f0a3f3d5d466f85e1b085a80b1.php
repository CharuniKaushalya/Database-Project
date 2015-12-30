<?php

/* school/show.html.twig */
class __TwigTemplate_9871ab38b34b32e32c62ff3430342168179a8cdbed5ba3f7d50a44e3bed298c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "school/show.html.twig", 1);
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
        $__internal_1aadfeaa4b5c3b1211601aa40628a6cc7ebb90e75a06a42608f4e51fcfecacb7 = $this->env->getExtension("native_profiler");
        $__internal_1aadfeaa4b5c3b1211601aa40628a6cc7ebb90e75a06a42608f4e51fcfecacb7->enter($__internal_1aadfeaa4b5c3b1211601aa40628a6cc7ebb90e75a06a42608f4e51fcfecacb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aadfeaa4b5c3b1211601aa40628a6cc7ebb90e75a06a42608f4e51fcfecacb7->leave($__internal_1aadfeaa4b5c3b1211601aa40628a6cc7ebb90e75a06a42608f4e51fcfecacb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5540b88570d7825f8c24b29a9bf839a7a5f7cf34e7a86afa544c174ec219512d = $this->env->getExtension("native_profiler");
        $__internal_5540b88570d7825f8c24b29a9bf839a7a5f7cf34e7a86afa544c174ec219512d->enter($__internal_5540b88570d7825f8c24b29a9bf839a7a5f7cf34e7a86afa544c174ec219512d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "id", array()), "html", null, true);
        echo "</h3>
                     <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("school_index");
        echo "\">Back to the list</a></button>
                </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <table class=\"col-md-8 table-hover record_properties\">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "name", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "address", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Totstudents</th>
                                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "totStudents", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Totvacancies</th>
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "totVacancies", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Startdate</th>
                                    <td>";
        // line 38
        if ($this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "startDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "startDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Id</th>
                                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "id", array()), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                         <button  class=\"btn btn-info pull-right\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_edit", array("id" => $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "id", array()))), "html", null, true);
        echo "\">Edit</a></button>
                        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                           
                            <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
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
        
        $__internal_5540b88570d7825f8c24b29a9bf839a7a5f7cf34e7a86afa544c174ec219512d->leave($__internal_5540b88570d7825f8c24b29a9bf839a7a5f7cf34e7a86afa544c174ec219512d_prof);

    }

    public function getTemplateName()
    {
        return "school/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 52,  116 => 49,  112 => 48,  103 => 42,  94 => 38,  87 => 34,  80 => 30,  73 => 26,  66 => 22,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                      <h3 class="box-title">Schol Detail: {{ school.id }}</h3>*/
/*                      <button  class="btn btn-info pull-right"><a href="{{ path('school_index') }}">Back to the list</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <table class="col-md-8 table-hover record_properties">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <th>Name</th>*/
/*                                     <td>{{ school.name }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Address</th>*/
/*                                     <td>{{ school.address }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Totstudents</th>*/
/*                                     <td>{{ school.totStudents }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Totvacancies</th>*/
/*                                     <td>{{ school.totVacancies }}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Startdate</th>*/
/*                                     <td>{% if school.startDate %}{{ school.startDate|date('Y-m-d') }}{% endif %}</td>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                     <th>Id</th>*/
/*                                     <td>{{ school.id }}</td>*/
/*                                 </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                          <button  class="btn btn-info pull-right"><a href="{{ path('school_edit', { 'id': school.id }) }}">Edit</a></button>*/
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
