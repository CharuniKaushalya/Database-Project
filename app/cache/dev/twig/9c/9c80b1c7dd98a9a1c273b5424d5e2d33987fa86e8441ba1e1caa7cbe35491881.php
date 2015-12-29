<?php

/* role/new.html.twig */
class __TwigTemplate_943570a2ef3650b74d9b6dfa2217b33d7df4252f56999976f973868040044d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/new.html.twig", 1);
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
        $__internal_85c4645093ff12f0eb9202275baad6c519bba9e4ffdc11c34e1c87de0604445c = $this->env->getExtension("native_profiler");
        $__internal_85c4645093ff12f0eb9202275baad6c519bba9e4ffdc11c34e1c87de0604445c->enter($__internal_85c4645093ff12f0eb9202275baad6c519bba9e4ffdc11c34e1c87de0604445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c4645093ff12f0eb9202275baad6c519bba9e4ffdc11c34e1c87de0604445c->leave($__internal_85c4645093ff12f0eb9202275baad6c519bba9e4ffdc11c34e1c87de0604445c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9226198f604e741f6d830146f64685c26cf3588a7994a7dc235a5e7eeb2c8544 = $this->env->getExtension("native_profiler");
        $__internal_9226198f604e741f6d830146f64685c26cf3588a7994a7dc235a5e7eeb2c8544->enter($__internal_9226198f604e741f6d830146f64685c26cf3588a7994a7dc235a5e7eeb2c8544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Add a Role</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class=\"form-horizontal\" method=\"post\">
                    <div class=\"box-body\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Role</label>
                            <div class=\"col-sm-10\">
                                <input placeholder=\"Role\" type=\"text\" name=\"role\" maxlength=\"15\" required class=\"form-control\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">Description</label>
                            <div class=\"col-sm-10\">
                                <input placeholder=\"Description\" type=\"textArea\" name=\"description\" maxlength=\"45\" required class=\"form-control\">
                            </div>
                        </div>
                       
                        </div>
                        <button type=\"submit\" class=\"btn btn-info pull-right\" name=\"submit\">Save</button>
                        </div><!-- /.box-body -->
                </form>
                <div class=\"box-footer\">
                
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("role_index");
        echo "\" class=\"btn btn-info \">Back to the list</a>
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div>   
";
        
        $__internal_9226198f604e741f6d830146f64685c26cf3588a7994a7dc235a5e7eeb2c8544->leave($__internal_9226198f604e741f6d830146f64685c26cf3588a7994a7dc235a5e7eeb2c8544_prof);

    }

    public function getTemplateName()
    {
        return "role/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Add a Role</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <!-- form start -->*/
/*                 <form class="form-horizontal" method="post">*/
/*                     <div class="box-body">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Role</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input placeholder="Role" type="text" name="role" maxlength="15" required class="form-control">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">Description</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input placeholder="Description" type="textArea" name="description" maxlength="45" required class="form-control">*/
/*                             </div>*/
/*                         </div>*/
/*                        */
/*                         </div>*/
/*                         <button type="submit" class="btn btn-info pull-right" name="submit">Save</button>*/
/*                         </div><!-- /.box-body -->*/
/*                 </form>*/
/*                 <div class="box-footer">*/
/*                 */
/*                 <a href="{{ path('role_index') }}" class="btn btn-info ">Back to the list</a>*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>   */
/* {% endblock %}*/
/* */
