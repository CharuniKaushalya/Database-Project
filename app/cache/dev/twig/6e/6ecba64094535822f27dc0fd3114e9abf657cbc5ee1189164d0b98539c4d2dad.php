<?php

/* role/edit.html.twig */
class __TwigTemplate_dac8d5ce2ae2e4fa34eb8dff5ffce4c2f949c795ad74755d040c848d1b8fc5f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/edit.html.twig", 1);
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
        $__internal_9d3101b9e7ac8df1aa0fcbc6a80077c4c3f0175818c1193d9348608abab929f5 = $this->env->getExtension("native_profiler");
        $__internal_9d3101b9e7ac8df1aa0fcbc6a80077c4c3f0175818c1193d9348608abab929f5->enter($__internal_9d3101b9e7ac8df1aa0fcbc6a80077c4c3f0175818c1193d9348608abab929f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d3101b9e7ac8df1aa0fcbc6a80077c4c3f0175818c1193d9348608abab929f5->leave($__internal_9d3101b9e7ac8df1aa0fcbc6a80077c4c3f0175818c1193d9348608abab929f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ceb818ff07d5884d1357a288fcad07bc1d174a05fdd20c70c2b7d5902b025007 = $this->env->getExtension("native_profiler");
        $__internal_ceb818ff07d5884d1357a288fcad07bc1d174a05fdd20c70c2b7d5902b025007->enter($__internal_ceb818ff07d5884d1357a288fcad07bc1d174a05fdd20c70c2b7d5902b025007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Edit a Role</h3>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("role_index");
        echo "\" class=\"btn btn-info pull-right \">Back to the list</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Role</label>
                            <div class=\"col-sm-10\">
                                <input placeholder=\"Role\" type=\"text\" name=\"role\" maxlength=\"15\" required class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "role", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Description</label>
                            <div class=\"col-sm-10\">
                                <input placeholder=\"Description\" type=\"textArea\" name=\"description\" maxlength=\"45\" required class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "description", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                       
                        </div>
                        <button type=\"submit\" class=\"btn btn-info pull-right\" name=\"submit\">Edit</button>
                         
                        </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"delete\">
                        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_ceb818ff07d5884d1357a288fcad07bc1d174a05fdd20c70c2b7d5902b025007->leave($__internal_ceb818ff07d5884d1357a288fcad07bc1d174a05fdd20c70c2b7d5902b025007_prof);

    }

    public function getTemplateName()
    {
        return "role/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  86 => 39,  73 => 29,  64 => 23,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Edit a Role</h3>*/
/*                     <a href="{{ path('role_index') }}" class="btn btn-info pull-right ">Back to the list</a>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Role</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input placeholder="Role" type="text" name="role" maxlength="15" required class="form-control" value="{{ role.role}}">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Description</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input placeholder="Description" type="textArea" name="description" maxlength="45" required class="form-control" value="{{ role.description}}">*/
/*                             </div>*/
/*                         </div>*/
/*                        */
/*                         </div>*/
/*                         <button type="submit" class="btn btn-info pull-right" name="submit">Edit</button>*/
/*                          */
/*                         </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 {{ form_start(delete_form) }}*/
/*                             <input class="btn btn-danger" type="submit" value="Delete" name="delete">*/
/*                         {{ form_end(delete_form) }}*/
/*                 */
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>   */
/* {% endblock %}*/
/* */
