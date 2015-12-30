<?php

/* childrenofstaff/new.html.twig */
class __TwigTemplate_0fe73f107aac5d0c5f8c2a925201f2c8c6c2c75bfd8de2a4ae452d61857351dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofstaff/new.html.twig", 1);
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
        $__internal_abf3169c3962cf12cfdc0463605c56673d8f0b61d57cd92e5e394d58dcc2d605 = $this->env->getExtension("native_profiler");
        $__internal_abf3169c3962cf12cfdc0463605c56673d8f0b61d57cd92e5e394d58dcc2d605->enter($__internal_abf3169c3962cf12cfdc0463605c56673d8f0b61d57cd92e5e394d58dcc2d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofstaff/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf3169c3962cf12cfdc0463605c56673d8f0b61d57cd92e5e394d58dcc2d605->leave($__internal_abf3169c3962cf12cfdc0463605c56673d8f0b61d57cd92e5e394d58dcc2d605_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4c521af2d8432265c4bace6301a81077a81b974563f6e1b66527d83d1a285b = $this->env->getExtension("native_profiler");
        $__internal_0e4c521af2d8432265c4bace6301a81077a81b974563f6e1b66527d83d1a285b->enter($__internal_0e4c521af2d8432265c4bace6301a81077a81b974563f6e1b66527d83d1a285b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">ChildrenOfStaff creation</h3>
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("childrenofotoeos_new", array("id" => (isset($context["Applicant_id"]) ? $context["Applicant_id"] : $this->getContext($context, "Applicant_id")))), "html", null, true);
        echo "\" class=\"btn btn-info\">Back to the list</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Employee Id</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "empId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "Employee Id" => "form-empId")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Period Of Service</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodOfService", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Period Of Service", "id" => "form-periodOfService")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Period Of Difficult School Service</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodOfDifficultSchoolService", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Period Of Difficult School Service", "id" => "form-periodOfDifficultSchoolService")));
        echo "
                            </div>
                        </div>
                        <label class=\"control-label\">Diffcult Service: </label>
                        <div class=\"form-group\">
                            
                            <label class=\"col-sm-2 control-label\">  From Year</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diffFromYear", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-diffFromYear")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">  To Year</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diffToYear", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-diffToYear")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">UnUtilized Leave</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unUtilizedLeave", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-unUtilizedLeave")));
        echo "
                            </div>
                        </div>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Create\" class=\"btn btn-info pull-right\" />
                        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

  
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("childrenofstaff_index");
        echo "\" class=\"btn btn-info\">Back to the list</a>
                    </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_0e4c521af2d8432265c4bace6301a81077a81b974563f6e1b66527d83d1a285b->leave($__internal_0e4c521af2d8432265c4bace6301a81077a81b974563f6e1b66527d83d1a285b_prof);

    }

    public function getTemplateName()
    {
        return "childrenofstaff/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 64,  129 => 61,  124 => 59,  120 => 58,  114 => 55,  105 => 49,  96 => 43,  85 => 35,  76 => 29,  67 => 23,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">ChildrenOfStaff creation</h3>*/
/*                     <a href="{{ path('childrenofotoeos_new' , { 'id': Applicant_id }) }}" class="btn btn-info">Back to the list</a>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Employee Id</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.empId, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'Employee Id' : 'form-empId'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Period Of Service</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.periodOfService, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Period Of Service', 'id' : 'form-periodOfService'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Period Of Difficult School Service</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.periodOfDifficultSchoolService, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Period Of Difficult School Service', 'id' : 'form-periodOfDifficultSchoolService'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <label class="control-label">Diffcult Service: </label>*/
/*                         <div class="form-group">*/
/*                             */
/*                             <label class="col-sm-2 control-label">  From Year</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(form.diffFromYear, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-diffFromYear'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">  To Year</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(form.diffToYear, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-diffToYear'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">UnUtilized Leave</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(form.unUtilizedLeave, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-unUtilizedLeave'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_rest(form) }}*/
/*                             {{ form_widget(form) }}*/
/*                             <input type="submit" value="Create" class="btn btn-info pull-right" />*/
/*                         {{ form_end(form) }}*/
/* */
/*   */
/*                         <a href="{{ path('childrenofstaff_index') }}" class="btn btn-info">Back to the list</a>*/
/*                     </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* {% endblock %}*/
/* */
