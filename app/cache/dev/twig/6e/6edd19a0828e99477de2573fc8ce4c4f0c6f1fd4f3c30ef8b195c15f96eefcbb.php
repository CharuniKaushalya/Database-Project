<?php

/* childrenofotoeos/new.html.twig */
class __TwigTemplate_fde9df32e5d5dffece347a4230c1aa26d516f168c2801b14a54a719e2317f368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofotoeos/new.html.twig", 1);
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
        $__internal_bde5f1dd3ed3a774a7f9ad538c47c8922273c56b97f5a92ed9724f23469b237a = $this->env->getExtension("native_profiler");
        $__internal_bde5f1dd3ed3a774a7f9ad538c47c8922273c56b97f5a92ed9724f23469b237a->enter($__internal_bde5f1dd3ed3a774a7f9ad538c47c8922273c56b97f5a92ed9724f23469b237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofotoeos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde5f1dd3ed3a774a7f9ad538c47c8922273c56b97f5a92ed9724f23469b237a->leave($__internal_bde5f1dd3ed3a774a7f9ad538c47c8922273c56b97f5a92ed9724f23469b237a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80478dbc41589daa980460c5bafbd10b18d86a016228155bc0d9983edb9f9c1 = $this->env->getExtension("native_profiler");
        $__internal_c80478dbc41589daa980460c5bafbd10b18d86a016228155bc0d9983edb9f9c1->enter($__internal_c80478dbc41589daa980460c5bafbd10b18d86a016228155bc0d9983edb9f9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">ChildrenOfOtoeos creation</h3>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("applicant_index");
        echo "\" class=\"btn btn-info\">Skip</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Last Transfer Received</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastTransferReceived", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-name")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Before Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beforeAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-beforeAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">After Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "afterAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-afterAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Distance</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distance", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-distance")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">No School Addmitted</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noSclAddmitted", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-noSclAddmitted")));
        echo "
                            </div>
                        </div>

                        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Create\" class=\"btn btn-info pull-right\"/>
                        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                     </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("childrenofotoeos_index");
        echo "\" class=\"btn btn-info\">Back to the list</a>
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_c80478dbc41589daa980460c5bafbd10b18d86a016228155bc0d9983edb9f9c1->leave($__internal_c80478dbc41589daa980460c5bafbd10b18d86a016228155bc0d9983edb9f9c1_prof);

    }

    public function getTemplateName()
    {
        return "childrenofotoeos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  119 => 54,  114 => 52,  110 => 51,  103 => 47,  94 => 41,  85 => 35,  76 => 29,  67 => 23,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">ChildrenOfOtoeos creation</h3>*/
/*                     <a href="{{ path('applicant_index') }}" class="btn btn-info">Skip</a>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Last Transfer Received</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.lastTransferReceived, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-name'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Before Address Work Place</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.beforeAddressWrkPlace, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-beforeAddressWrkPlace'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">After Address Work Place</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.afterAddressWrkPlace, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-afterAddressWrkPlace'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Distance</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.distance, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-distance'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">No School Addmitted</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(form.noSclAddmitted, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-noSclAddmitted'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_start(form) }}*/
/*                             {{ form_widget(form) }}*/
/*                             <input type="submit" value="Create" class="btn btn-info pull-right"/>*/
/*                         {{ form_end(form) }}*/
/* */
/*                      </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 <a href="{{ path('childrenofotoeos_index') }}" class="btn btn-info">Back to the list</a>*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>   */
/* {% endblock %}*/
/* */
