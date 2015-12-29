<?php

/* childrenofstaff/edit.html.twig */
class __TwigTemplate_720f3d2b0fe9ba4eebd40500dbf00c1f1715175032c3c8ba372bc719be8e1b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofstaff/edit.html.twig", 1);
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
        $__internal_2643b5b2f45ec1f14a6a2624a8de5e68554d806115b829aa51b8c48ed6415b7d = $this->env->getExtension("native_profiler");
        $__internal_2643b5b2f45ec1f14a6a2624a8de5e68554d806115b829aa51b8c48ed6415b7d->enter($__internal_2643b5b2f45ec1f14a6a2624a8de5e68554d806115b829aa51b8c48ed6415b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofstaff/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2643b5b2f45ec1f14a6a2624a8de5e68554d806115b829aa51b8c48ed6415b7d->leave($__internal_2643b5b2f45ec1f14a6a2624a8de5e68554d806115b829aa51b8c48ed6415b7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74b049882888f5e033e7531b706049048d900ea7bc18cd1280c181f986f78c1e = $this->env->getExtension("native_profiler");
        $__internal_74b049882888f5e033e7531b706049048d900ea7bc18cd1280c181f986f78c1e->enter($__internal_74b049882888f5e033e7531b706049048d900ea7bc18cd1280c181f986f78c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">ChildrenOfStaff edit</h3>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("childrenofstaff_index");
        echo "\" class=\"btn btn-info pull-right\">Back to the list</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Employee Id</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "empId", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "Employee Id" => "form-empId")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Period Of Service</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "periodOfService", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Period Of Service", "id" => "form-periodOfService")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Period Of Difficult School Service</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "periodOfDifficultSchoolService", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Period Of Difficult School Service", "id" => "form-periodOfDifficultSchoolService")));
        echo "
                            </div>
                        </div>
                        <label class=\"control-label\">Diffcult Service: </label>
                        <div class=\"form-group\">
                            
                            <label class=\"col-sm-2 control-label\">  From Year</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "diffFromYear", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-diffFromYear")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">  To Year</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "diffToYear", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-diffToYear")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">UnUtilized Leave</label>
                            <div class=\"col-sm-9\">
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "unUtilizedLeave", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-unUtilizedLeave")));
        echo "
                            </div>
                        </div>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Edit\" class=\"btn btn-info pull-right\" />
                        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
                        ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

  
                        
                    </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_74b049882888f5e033e7531b706049048d900ea7bc18cd1280c181f986f78c1e->leave($__internal_74b049882888f5e033e7531b706049048d900ea7bc18cd1280c181f986f78c1e_prof);

    }

    public function getTemplateName()
    {
        return "childrenofstaff/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 64,  133 => 62,  129 => 61,  124 => 59,  120 => 58,  114 => 55,  105 => 49,  96 => 43,  85 => 35,  76 => 29,  67 => 23,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">ChildrenOfStaff edit</h3>*/
/*                     <a href="{{ path('childrenofstaff_index') }}" class="btn btn-info pull-right">Back to the list</a>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(edit_form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Employee Id</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.empId, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'Employee Id' : 'form-empId'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Period Of Service</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.periodOfService, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Period Of Service', 'id' : 'form-periodOfService'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Period Of Difficult School Service</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.periodOfDifficultSchoolService, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Period Of Difficult School Service', 'id' : 'form-periodOfDifficultSchoolService'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <label class="control-label">Diffcult Service: </label>*/
/*                         <div class="form-group">*/
/*                             */
/*                             <label class="col-sm-2 control-label">  From Year</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(edit_form.diffFromYear, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-diffFromYear'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">  To Year</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(edit_form.diffToYear, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-diffToYear'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">UnUtilized Leave</label>*/
/*                             <div class="col-sm-9">*/
/*                                 {{ form_widget(edit_form.unUtilizedLeave, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-unUtilizedLeave'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_rest(edit_form) }}*/
/*                             {{ form_widget(edit_form) }}*/
/*                             <input type="submit" value="Edit" class="btn btn-info pull-right" />*/
/*                         {{ form_end(edit_form) }}*/
/*                         {{ form_start(delete_form) }}*/
/*                             <input type="submit" value="Delete" class="btn btn-danger">*/
/*                         {{ form_end(delete_form) }}*/
/* */
/*   */
/*                         */
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
