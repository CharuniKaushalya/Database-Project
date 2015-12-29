<?php

/* child/edit.html.twig */
class __TwigTemplate_3f381769458d52a698d41a59fea863195dac76ce9e8ee1aacff362215d859939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "child/edit.html.twig", 1);
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
        $__internal_26250415c026bc21ff7def1ca81301939d78840eee697c021e82407797d8d0d1 = $this->env->getExtension("native_profiler");
        $__internal_26250415c026bc21ff7def1ca81301939d78840eee697c021e82407797d8d0d1->enter($__internal_26250415c026bc21ff7def1ca81301939d78840eee697c021e82407797d8d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "child/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26250415c026bc21ff7def1ca81301939d78840eee697c021e82407797d8d0d1->leave($__internal_26250415c026bc21ff7def1ca81301939d78840eee697c021e82407797d8d0d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80461b230ac90a4376746a1d42aa7af6ca7b0a89e78957f8536a68b6ea3d376d = $this->env->getExtension("native_profiler");
        $__internal_80461b230ac90a4376746a1d42aa7af6ca7b0a89e78957f8536a68b6ea3d376d->enter($__internal_80461b230ac90a4376746a1d42aa7af6ca7b0a89e78957f8536a68b6ea3d376d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Edit Child Details:";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name in full</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameInFull", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name in full", "id" => "form-nameInFull")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Name with intials</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameInIntials", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name with initials", "id" => "form-nameInIntials")));
        echo "
                            </div>
                        </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">Sex</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sex", array()), 'widget');
        echo "
                          </div>
                      </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Religion</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "religion", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Religion", "id" => "form-religion")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Medium of learning</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mediumOfLearning", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Birth Day</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dob", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-dob")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"box-footer\">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "
                        <button type=\"submit\" class=\"btn btn-info pull-right\">Next</button>
                        ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <button class=\"btn btn-default\"><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_edit", array("id" => $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "id", array()))), "html", null, true);
        echo "\">Back</button>
                     </div>
                </form>
              </div>
        </div>
    </div>
</div>
";
        
        $__internal_80461b230ac90a4376746a1d42aa7af6ca7b0a89e78957f8536a68b6ea3d376d->leave($__internal_80461b230ac90a4376746a1d42aa7af6ca7b0a89e78957f8536a68b6ea3d376d_prof);

    }

    public function getTemplateName()
    {
        return "child/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  123 => 58,  118 => 56,  110 => 51,  101 => 45,  92 => 39,  83 => 33,  74 => 27,  65 => 21,  57 => 16,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*             <div class="box box-info">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Edit Child Details:{{child.id}}</h3>*/
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
/*                                 {{ form_widget(edit_form.nameInIntials, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name with initials', 'id' : 'form-nameInIntials'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label">Sex</label>*/
/*                           <div class="col-sm-10">*/
/*                             {{ form_widget(edit_form.sex) }}*/
/*                           </div>*/
/*                       </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Religion</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.religion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Religion', 'id' : 'form-religion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Medium of learning</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.mediumOfLearning) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Birth Day</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.dob, { 'attr' : { 'class' : 'form-control' , 'id' : 'form-dob'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="box-footer">*/
/*                         {{ form_rest( edit_form ) }}*/
/*                         <button type="submit" class="btn btn-info pull-right">Next</button>*/
/*                         {{ form_end(edit_form) }}*/
/*                         <button class="btn btn-default"><a href="{{ path('applicant_edit', { 'id': applicant.id }) }}">Back</button>*/
/*                      </div>*/
/*                 </form>*/
/*               </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
