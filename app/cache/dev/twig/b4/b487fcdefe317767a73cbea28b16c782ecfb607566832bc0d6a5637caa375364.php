<?php

/* child/new.html.twig */
class __TwigTemplate_b535940cbc408828e687d7150131cbdf7b16e7a4ef9a213705b9a03274252e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "child/new.html.twig", 1);
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
        $__internal_44e0e9cd4eecc5c73c49efe548d1266a52cad44929325d3f5a6e2e8dd975675a = $this->env->getExtension("native_profiler");
        $__internal_44e0e9cd4eecc5c73c49efe548d1266a52cad44929325d3f5a6e2e8dd975675a->enter($__internal_44e0e9cd4eecc5c73c49efe548d1266a52cad44929325d3f5a6e2e8dd975675a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "child/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e0e9cd4eecc5c73c49efe548d1266a52cad44929325d3f5a6e2e8dd975675a->leave($__internal_44e0e9cd4eecc5c73c49efe548d1266a52cad44929325d3f5a6e2e8dd975675a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f65c9f344576f5bddb4462a3a5f7567acf7d847dc3482c273806a904dfe8814 = $this->env->getExtension("native_profiler");
        $__internal_3f65c9f344576f5bddb4462a3a5f7567acf7d847dc3482c273806a904dfe8814->enter($__internal_3f65c9f344576f5bddb4462a3a5f7567acf7d847dc3482c273806a904dfe8814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Child Form</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameInIntials", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name with initials", "id" => "form-nameInIntials")));
        echo "
                            </div>
                        </div>
                      <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\">Sex</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sex", array()), 'widget');
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
                            <label class=\"col-sm-2 control-label\">Medium of learning</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mediumOfLearning", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Birth Day</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dob", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "form-dob")));
        echo "
                            </div>
                        </div>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <button type=\"submit\" class=\"btn btn-info pull-right\">Next</button>
                        ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                    <div class=\"box-footer\">
                        
                        <button class=\"btn btn-default\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("applicant_edit", array("id" => $this->getAttribute((isset($context["applicant"]) ? $context["applicant"] : $this->getContext($context, "applicant")), "id", array()))), "html", null, true);
        echo "\">Back</button>
                     </div>
                </form>
              </div>
        </div>
    </div>
</div>
";
        
        $__internal_3f65c9f344576f5bddb4462a3a5f7567acf7d847dc3482c273806a904dfe8814->leave($__internal_3f65c9f344576f5bddb4462a3a5f7567acf7d847dc3482c273806a904dfe8814_prof);

    }

    public function getTemplateName()
    {
        return "child/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 60,  118 => 56,  113 => 54,  107 => 51,  98 => 45,  89 => 39,  80 => 33,  71 => 27,  62 => 21,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Child Form</h3>*/
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
/*                                 {{ form_widget(form.nameInIntials, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name with initials', 'id' : 'form-nameInIntials'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                       <div class="form-group">*/
/*                           <label class="col-sm-2 control-label">Sex</label>*/
/*                           <div class="col-sm-10">*/
/*                             {{ form_widget(form.sex) }}*/
/*                           </div>*/
/*                       </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Religion</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.religion, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Religion', 'id' : 'form-religion'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Medium of learning</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.mediumOfLearning) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Birth Day</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.dob, { 'attr' : { 'class' : 'form-control' , 'id' : 'form-dob'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ form_rest( form ) }}*/
/*                         <button type="submit" class="btn btn-info pull-right">Next</button>*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                     <div class="box-footer">*/
/*                         */
/*                         <button class="btn btn-default"><a href="{{ path('applicant_edit', { 'id': applicant.id }) }}">Back</button>*/
/*                      </div>*/
/*                 </form>*/
/*               </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
