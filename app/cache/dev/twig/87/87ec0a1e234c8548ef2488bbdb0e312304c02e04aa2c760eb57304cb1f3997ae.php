<?php

/* childrenofotoeos/edit.html.twig */
class __TwigTemplate_dbe2a7b5d12c2754245b5308fc8e600e760dc1c8259c730113f6896a91248366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "childrenofotoeos/edit.html.twig", 1);
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
        $__internal_d56b8efe3a847f2eb49f1b096dacf0daa8566293a49835a15e07caf8695537f9 = $this->env->getExtension("native_profiler");
        $__internal_d56b8efe3a847f2eb49f1b096dacf0daa8566293a49835a15e07caf8695537f9->enter($__internal_d56b8efe3a847f2eb49f1b096dacf0daa8566293a49835a15e07caf8695537f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofotoeos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56b8efe3a847f2eb49f1b096dacf0daa8566293a49835a15e07caf8695537f9->leave($__internal_d56b8efe3a847f2eb49f1b096dacf0daa8566293a49835a15e07caf8695537f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb97b9056364d06b4fad9a7b248d79d0df7a0f43529cc1e553a5b510a8df8a9f = $this->env->getExtension("native_profiler");
        $__internal_bb97b9056364d06b4fad9a7b248d79d0df7a0f43529cc1e553a5b510a8df8a9f->enter($__internal_bb97b9056364d06b4fad9a7b248d79d0df7a0f43529cc1e553a5b510a8df8a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">ChildrenOfOtoeos Edit</h3>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("childrenofotoeos_index");
        echo "\" class=\"btn btn-info\">Back to the list</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Last Transfer Received</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastTransferReceived", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-name")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Before Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "beforeAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-beforeAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">After Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "afterAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-afterAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Distance</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "distance", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-distance")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">No School Addmitted</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "noSclAddmitted", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-noSclAddmitted")));
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
                            <input type=\"submit\" value=\"Edit\" class=\"btn btn-info pull-right\"/>
                        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                     </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                
                ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_bb97b9056364d06b4fad9a7b248d79d0df7a0f43529cc1e553a5b510a8df8a9f->leave($__internal_bb97b9056364d06b4fad9a7b248d79d0df7a0f43529cc1e553a5b510a8df8a9f_prof);

    }

    public function getTemplateName()
    {
        return "childrenofotoeos/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 62,  128 => 60,  119 => 54,  114 => 52,  110 => 51,  103 => 47,  94 => 41,  85 => 35,  76 => 29,  67 => 23,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">ChildrenOfOtoeos Edit</h3>*/
/*                     <a href="{{ path('childrenofotoeos_index') }}" class="btn btn-info">Back to the list</a>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post" {{ form_enctype(edit_form) }}>*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Last Transfer Received</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.lastTransferReceived, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Name', 'id' : 'form-name'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Before Address Work Place</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.beforeAddressWrkPlace, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-beforeAddressWrkPlace'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">After Address Work Place</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.afterAddressWrkPlace, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-afterAddressWrkPlace'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Distance</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.distance, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-distance'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">No School Addmitted</label>*/
/*                             <div class="col-sm-10">*/
/*                                 {{ form_widget(edit_form.noSclAddmitted, { 'attr' : { 'class' : 'form-control' , 'placeholder' : 'Address', 'id' : 'form-noSclAddmitted'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {{ form_start(edit_form) }}*/
/*                             {{ form_widget(edit_form) }}*/
/*                             <input type="submit" value="Edit" class="btn btn-info pull-right"/>*/
/*                         {{ form_end(edit_form) }}*/
/* */
/*                      </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 */
/*                 {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Delete" class="btn btn-danger">*/
/*                 {{ form_end(delete_form) }}*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>   */
/* {% endblock %}*/
/* */
/* */
