<?php

/* school/new.html.twig */
class __TwigTemplate_73ec31e1cc8bafb33ef2c72c5f8a6720bac206e357de0a0890e7eb36f525adac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "school/new.html.twig", 1);
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
        $__internal_7953a89ec069295697a24034593fce9949516e8d1286fc53738b091025bc415a = $this->env->getExtension("native_profiler");
        $__internal_7953a89ec069295697a24034593fce9949516e8d1286fc53738b091025bc415a->enter($__internal_7953a89ec069295697a24034593fce9949516e8d1286fc53738b091025bc415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7953a89ec069295697a24034593fce9949516e8d1286fc53738b091025bc415a->leave($__internal_7953a89ec069295697a24034593fce9949516e8d1286fc53738b091025bc415a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fa94a4b52af9e0aff63edcb5813dcb8c143bb6b45dea0eb7f3bfba0f1ee3deb = $this->env->getExtension("native_profiler");
        $__internal_9fa94a4b52af9e0aff63edcb5813dcb8c143bb6b45dea0eb7f3bfba0f1ee3deb->enter($__internal_9fa94a4b52af9e0aff63edcb5813dcb8c143bb6b45dea0eb7f3bfba0f1ee3deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Add a School</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-name")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-address")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Total Students</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totStudents", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Total Students", "id" => "form-totStudents")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Total Vacancies</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "totVacancies", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Total Vacancies", "id" => "form-totVacancies")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Start Date</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-startDate")));
        echo "
                            </div>
                        </div>

                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <button type=\"submit\" class=\"btn btn-info pull-right\">Save</button>
                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("school_index");
        echo "\" class=\"btn btn-info \">Back to the list</a>
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_9fa94a4b52af9e0aff63edcb5813dcb8c143bb6b45dea0eb7f3bfba0f1ee3deb->leave($__internal_9fa94a4b52af9e0aff63edcb5813dcb8c143bb6b45dea0eb7f3bfba0f1ee3deb_prof);

    }

    public function getTemplateName()
    {
        return "school/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  111 => 52,  106 => 50,  99 => 46,  90 => 40,  81 => 34,  72 => 28,  63 => 22,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Add a School</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.name, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-name'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.address, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-address'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Total Students</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.totStudents, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Total Students', 'id' : 'form-totStudents'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Total Vacancies</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.totVacancies, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Total Vacancies', 'id' : 'form-totVacancies'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Start Date</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.startDate, { 'attr' : { 'class' : 'form-control', 'id' : 'form-startDate'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_rest( form ) }}*/
/*                         <button type="submit" class="btn btn-info pull-right">Save</button>*/
/*                         {{ form_end(form) }}*/
/*                     </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 <a href="{{ path('school_index') }}" class="btn btn-info ">Back to the list</a>*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>   */
/* {% endblock %}*/
/* */
