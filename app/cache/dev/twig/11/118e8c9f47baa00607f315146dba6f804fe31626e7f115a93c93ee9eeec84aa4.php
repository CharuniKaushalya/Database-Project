<?php

/* school/edit.html.twig */
class __TwigTemplate_33f24adbd8b2fa235e5dbea47b4ac2440fc3f3e86854bdafb3d87f10dd52d0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "school/edit.html.twig", 1);
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
        $__internal_2e92b5c6c2ae91df0ded20ef506493e2534afde35d96409ee09a37ec39b4c113 = $this->env->getExtension("native_profiler");
        $__internal_2e92b5c6c2ae91df0ded20ef506493e2534afde35d96409ee09a37ec39b4c113->enter($__internal_2e92b5c6c2ae91df0ded20ef506493e2534afde35d96409ee09a37ec39b4c113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e92b5c6c2ae91df0ded20ef506493e2534afde35d96409ee09a37ec39b4c113->leave($__internal_2e92b5c6c2ae91df0ded20ef506493e2534afde35d96409ee09a37ec39b4c113_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_691af75416172109c66811ac977768e400008c2ff0480ffd8fb114d0cd1ee2d3 = $this->env->getExtension("native_profiler");
        $__internal_691af75416172109c66811ac977768e400008c2ff0480ffd8fb114d0cd1ee2d3->enter($__internal_691af75416172109c66811ac977768e400008c2ff0480ffd8fb114d0cd1ee2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Edit School details:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["school"]) ? $context["school"] : $this->getContext($context, "school")), "id", array()), "html", null, true);
        echo "</h3>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("school_index");
        echo "\" class=\"btn btn-info pull-right\">Back to the list</a> 
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-name")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-address")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Total Students</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "totStudents", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Total Students", "id" => "form-totStudents")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Total Vacancies</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "totVacancies", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Total Vacancies", "id" => "form-totVacancies")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Start Date</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDate", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-startDate")));
        echo "
                            </div>
                        </div>

                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                            <input  class=\"btn btn-info pull-right\" type=\"submit\" value=\"Edit\" />
                        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                        ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </div>
                    <div class=\"box-footer\">
                        
                     </div>
                </form>
              </div>
        </div>
    </div>
</div>
    </ul>
";
        
        $__internal_691af75416172109c66811ac977768e400008c2ff0480ffd8fb114d0cd1ee2d3->leave($__internal_691af75416172109c66811ac977768e400008c2ff0480ffd8fb114d0cd1ee2d3_prof);

    }

    public function getTemplateName()
    {
        return "school/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  127 => 56,  122 => 54,  117 => 52,  113 => 51,  106 => 47,  97 => 41,  88 => 35,  79 => 29,  70 => 23,  62 => 18,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Edit School details:{{school.id}}</h3>*/
/*                     <a href="{{ path('school_index') }}" class="btn btn-info pull-right">Back to the list</a> */
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(edit_form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.name, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-name'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.address, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-address'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Total Students</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.totStudents, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Total Students', 'id' : 'form-totStudents'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Total Vacancies</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.totVacancies, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Total Vacancies', 'id' : 'form-totVacancies'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Start Date</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.startDate, { 'attr' : { 'class' : 'form-control', 'id' : 'form-startDate'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_start(edit_form) }}*/
/*                             {{ form_widget(edit_form) }}*/
/*                             <input  class="btn btn-info pull-right" type="submit" value="Edit" />*/
/*                         {{ form_end(edit_form) }}*/
/* */
/*                         {{ form_start(delete_form) }}*/
/*                             <input class="btn btn-danger" type="submit" value="Delete">*/
/*                         {{ form_end(delete_form) }}*/
/*                     </div>*/
/*                     <div class="box-footer">*/
/*                         */
/*                      </div>*/
/*                 </form>*/
/*               </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
