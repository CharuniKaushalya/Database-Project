<?php

/* applicant/new.html.twig */
class __TwigTemplate_27a682d8005d927e2c81223a071bc73e62406b31446909a8c9c0b6d1b28d9abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "applicant/new.html.twig", 1);
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
        $__internal_6b5c3b5537b6de442deba36c19fd55b6561eda9b8afefebe4df6acd5d49d3f59 = $this->env->getExtension("native_profiler");
        $__internal_6b5c3b5537b6de442deba36c19fd55b6561eda9b8afefebe4df6acd5d49d3f59->enter($__internal_6b5c3b5537b6de442deba36c19fd55b6561eda9b8afefebe4df6acd5d49d3f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "applicant/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b5c3b5537b6de442deba36c19fd55b6561eda9b8afefebe4df6acd5d49d3f59->leave($__internal_6b5c3b5537b6de442deba36c19fd55b6561eda9b8afefebe4df6acd5d49d3f59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db616dca514c79d937d212e6da87b27350adfb4f36d1c5b7cc3714f39c4e262d = $this->env->getExtension("native_profiler");
        $__internal_db616dca514c79d937d212e6da87b27350adfb4f36d1c5b7cc3714f39c4e262d->enter($__internal_db616dca514c79d937d212e6da87b27350adfb4f36d1c5b7cc3714f39c4e262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Gardian Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name in full</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameInFull", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name in full", "id" => "form-nameInFull")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name with intials</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameInInitials", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name with initials", "id" => "form-nameInIntials")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">NIC</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nic", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "National Identicard NO", "id" => "form-nic")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Religion</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "religion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Religion", "id" => "form-religion")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Whether Srilankan</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wetherSrilankan", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Address</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permanentAddress", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Permanent Address", "id" => "form-permanentAddress")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">District</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "district", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "District", "id" => "form-district")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Divitional Secretary Area</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "divsionalScretaryArea", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Divitional Secretary Area", "id" => "form-divsionalScretaryArea")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Grama Niladari Division</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gramaNiladariDivion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Grama Niladari Division", "id" => "form-gramaNiladariDivion")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">No Years In Electoral Register</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noYearsInElectoralRegister", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "No Years In Electoral Register", "id" => "form-noYearsInElectoralRegister")));
        echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "                       
                        <button type=\"submit\" class=\"btn btn-info pull-right\">Next</button>
                        ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        <button class=\"btn btn-default\"><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("applicant_index");
        echo "\">Back</a></button>
                     </div><!-- /.box-footer -->
                </form>
              </div>
                </div>
            </div>
        </div>
";
        
        $__internal_db616dca514c79d937d212e6da87b27350adfb4f36d1c5b7cc3714f39c4e262d->leave($__internal_db616dca514c79d937d212e6da87b27350adfb4f36d1c5b7cc3714f39c4e262d_prof);

    }

    public function getTemplateName()
    {
        return "applicant/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 84,  156 => 82,  151 => 80,  143 => 75,  134 => 69,  125 => 63,  116 => 57,  107 => 51,  98 => 45,  89 => 39,  80 => 33,  71 => 27,  62 => 21,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Gardian Form</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name in full</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.nameInFull, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name in full', 'id' : 'form-nameInFull'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name with intials</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.nameInInitials, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name with initials', 'id' : 'form-nameInIntials'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">NIC</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.nic, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'National Identicard NO', 'id' : 'form-nic'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Religion</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.religion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Religion', 'id' : 'form-religion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Whether Srilankan</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.wetherSrilankan) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Address</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.permanentAddress, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Permanent Address', 'id' : 'form-permanentAddress'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">District</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.district, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'District', 'id' : 'form-district'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Divitional Secretary Area</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.divsionalScretaryArea, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Divitional Secretary Area', 'id' : 'form-divsionalScretaryArea'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Grama Niladari Division</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.gramaNiladariDivion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Grama Niladari Division', 'id' : 'form-gramaNiladariDivion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">No Years In Electoral Register</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.noYearsInElectoralRegister, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'No Years In Electoral Register', 'id' : 'form-noYearsInElectoralRegister'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                         {{ form_rest( form ) }}                       */
/*                         <button type="submit" class="btn btn-info pull-right">Next</button>*/
/*                         {{ form_end(form) }}*/
/* */
/*                         <button class="btn btn-default"><a href="{{ path('applicant_index') }}">Back</a></button>*/
/*                      </div><!-- /.box-footer -->*/
/*                 </form>*/
/*               </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
/* */
