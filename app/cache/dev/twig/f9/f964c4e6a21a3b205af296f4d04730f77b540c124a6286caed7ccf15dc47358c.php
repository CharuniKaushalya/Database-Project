<?php

/* applicant/edit.html.twig */
class __TwigTemplate_628c2aa875064de3a480baf284bd5fb43384fa3fce2a373b1f82925b58fe9c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "applicant/edit.html.twig", 1);
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
        $__internal_3c45321d874f361afd097a34bc3e64571356d72aee66a6eadc694dfd40600c43 = $this->env->getExtension("native_profiler");
        $__internal_3c45321d874f361afd097a34bc3e64571356d72aee66a6eadc694dfd40600c43->enter($__internal_3c45321d874f361afd097a34bc3e64571356d72aee66a6eadc694dfd40600c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "applicant/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c45321d874f361afd097a34bc3e64571356d72aee66a6eadc694dfd40600c43->leave($__internal_3c45321d874f361afd097a34bc3e64571356d72aee66a6eadc694dfd40600c43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6c4bf60010010f849a208c076cc72c23c01d94688b06653fa3b801798bdca5 = $this->env->getExtension("native_profiler");
        $__internal_ac6c4bf60010010f849a208c076cc72c23c01d94688b06653fa3b801798bdca5->enter($__internal_ac6c4bf60010010f849a208c076cc72c23c01d94688b06653fa3b801798bdca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <button class=\"btn btn-info pull-right\"  value=\"Delete\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_new", array("id" => $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "id", array()))), "html", null, true);
        echo "\">Add a Child</a></button>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name in full</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameInFull", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name in full", "id" => "form-nameInFull")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name with intials</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameInInitials", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name with initials", "id" => "form-nameInIntials")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">NIC</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nic", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "National Identicard NO", "id" => "form-nic")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Religion</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "religion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Religion", "id" => "form-religion")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Whether Srilankan</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "wetherSrilankan", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Address</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "permanentAddress", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Permanent Address", "id" => "form-permanentAddress")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">District</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "district", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "District", "id" => "form-district")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Divitional Secretary Area</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "divsionalScretaryArea", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Divitional Secretary Area", "id" => "form-divsionalScretaryArea")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Grama Niladari Division</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "gramaNiladariDivion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Grama Niladari Division", "id" => "form-gramaNiladariDivion")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">No Years In Electoral Register</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noYearsInElectoralRegister", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "No Years In Electoral Register", "id" => "form-noYearsInElectoralRegister")));
        echo "
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class=\"box-footer\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "                       
                        <button type=\"submit\" class=\"btn btn-info pull-right\">Next</button>
                        ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input type=\"submit\" class=\"btn btn-danger pull-right\" stlye=\"margin-right:12px\" value=\"Delete\">
                        ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "


                        <button class=\"btn btn-default\"><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("applicant_index");
        echo "\">Back</a></button>
                     </div><!-- /.box-footer -->
                </form>
              </div>
                </div>
            </div>
        </div>
";
        
        $__internal_ac6c4bf60010010f849a208c076cc72c23c01d94688b06653fa3b801798bdca5->leave($__internal_ac6c4bf60010010f849a208c076cc72c23c01d94688b06653fa3b801798bdca5_prof);

    }

    public function getTemplateName()
    {
        return "applicant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  169 => 86,  164 => 84,  160 => 83,  155 => 81,  147 => 76,  138 => 70,  129 => 64,  120 => 58,  111 => 52,  102 => 46,  93 => 40,  84 => 34,  75 => 28,  66 => 22,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <button class="btn btn-info pull-right"  value="Delete"><a href="{{ path('child_new', { 'id': applicant.id }) }}">Add a Child</a></button>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(edit_form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name in full</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.nameInFull, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name in full', 'id' : 'form-nameInFull'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Name with intials</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.nameInInitials, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name with initials', 'id' : 'form-nameInIntials'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">NIC</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.nic, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'National Identicard NO', 'id' : 'form-nic'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Religion</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.religion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Religion', 'id' : 'form-religion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Whether Srilankan</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.wetherSrilankan) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Address</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.permanentAddress, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Permanent Address', 'id' : 'form-permanentAddress'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">District</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.district, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'District', 'id' : 'form-district'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Divitional Secretary Area</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.divsionalScretaryArea, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Divitional Secretary Area', 'id' : 'form-divsionalScretaryArea'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Grama Niladari Division</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.gramaNiladariDivion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Grama Niladari Division', 'id' : 'form-gramaNiladariDivion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">No Years In Electoral Register</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.noYearsInElectoralRegister, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'No Years In Electoral Register', 'id' : 'form-noYearsInElectoralRegister'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                     <div class="box-footer">*/
/*                         {{ form_rest( edit_form ) }}                       */
/*                         <button type="submit" class="btn btn-info pull-right">Next</button>*/
/*                         {{ form_end(edit_form) }}*/
/*                         {{ form_start(delete_form) }}*/
/*                             <input type="submit" class="btn btn-danger pull-right" stlye="margin-right:12px" value="Delete">*/
/*                         {{ form_end(delete_form) }}*/
/* */
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
