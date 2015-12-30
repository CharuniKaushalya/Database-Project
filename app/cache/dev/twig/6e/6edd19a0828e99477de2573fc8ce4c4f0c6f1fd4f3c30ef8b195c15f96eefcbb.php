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
        $__internal_37900f83af4add95426b58531e12535f046408594d554cc70d5e59bb60778c9d = $this->env->getExtension("native_profiler");
        $__internal_37900f83af4add95426b58531e12535f046408594d554cc70d5e59bb60778c9d->enter($__internal_37900f83af4add95426b58531e12535f046408594d554cc70d5e59bb60778c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "childrenofotoeos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37900f83af4add95426b58531e12535f046408594d554cc70d5e59bb60778c9d->leave($__internal_37900f83af4add95426b58531e12535f046408594d554cc70d5e59bb60778c9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_430ff3f86ced375a03b67d6edc207fa878dba6a77b7a46283303c3d79cb5c9fa = $this->env->getExtension("native_profiler");
        $__internal_430ff3f86ced375a03b67d6edc207fa878dba6a77b7a46283303c3d79cb5c9fa->enter($__internal_430ff3f86ced375a03b67d6edc207fa878dba6a77b7a46283303c3d79cb5c9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Last Transfer Received</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastTransferReceived", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name", "id" => "form-name")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Before Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beforeAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-beforeAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">After Address Work Place</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "afterAddressWrkPlace", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-afterAddressWrkPlace")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Distance</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "distance", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-distance")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">No School Addmitted</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "noSclAddmitted", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Address", "id" => "form-noSclAddmitted")));
        echo "
                            </div>
                        </div>

                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <input type=\"submit\" value=\"Create\" class=\"btn btn-info pull-right\"/>
                        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                     </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("childrenofotoeos_index");
        echo "\" class=\"btn btn-info\">Back to the list</a>
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_430ff3f86ced375a03b67d6edc207fa878dba6a77b7a46283303c3d79cb5c9fa->leave($__internal_430ff3f86ced375a03b67d6edc207fa878dba6a77b7a46283303c3d79cb5c9fa_prof);

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
        return array (  123 => 58,  115 => 53,  110 => 51,  106 => 50,  99 => 46,  90 => 40,  81 => 34,  72 => 28,  63 => 22,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
