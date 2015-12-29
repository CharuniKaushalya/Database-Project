<?php

/* child/show.html.twig */
class __TwigTemplate_d124b11f00390b1733ac27d63dd6fb9a160c560a66fad90bcf2ab51721aa3b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "child/show.html.twig", 1);
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
        $__internal_b5ae1138074acc943e7d1b560f300453483cdbf131057cb488b1984a118033c9 = $this->env->getExtension("native_profiler");
        $__internal_b5ae1138074acc943e7d1b560f300453483cdbf131057cb488b1984a118033c9->enter($__internal_b5ae1138074acc943e7d1b560f300453483cdbf131057cb488b1984a118033c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "child/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ae1138074acc943e7d1b560f300453483cdbf131057cb488b1984a118033c9->leave($__internal_b5ae1138074acc943e7d1b560f300453483cdbf131057cb488b1984a118033c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b52300c5486502a3a9d24974e620731ae2a72ec4ed048e3b8d240287a5328982 = $this->env->getExtension("native_profiler");
        $__internal_b52300c5486502a3a9d24974e620731ae2a72ec4ed048e3b8d240287a5328982->enter($__internal_b52300c5486502a3a9d24974e620731ae2a72ec4ed048e3b8d240287a5328982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Child Details</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Nameinfull</th>
                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "nameInFull", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Nameinintials</th>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "nameInIntials", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Sex</th>
                                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "sex", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "religion", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Mediumoflearning</th>
                                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "mediumOfLearning", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Dob</th>
                                <td>";
        // line 42
        if ($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "dob", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "dob", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                            </tr>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class=\"box-footer\">
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("child_index");
        echo "\" class=\"btn btn-info\">Back to the list</a>
                ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("child_edit", array("id" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info pull-right\">Edit</a>
                    <input type=\"submit\" class=\"btn btn-danger pull-right\" value=\"Delete\">
                ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </div><!-- /.box-footer -->
              </div>
            </div>
        </div>
    </div> 
";
        
        $__internal_b52300c5486502a3a9d24974e620731ae2a72ec4ed048e3b8d240287a5328982->leave($__internal_b52300c5486502a3a9d24974e620731ae2a72ec4ed048e3b8d240287a5328982_prof);

    }

    public function getTemplateName()
    {
        return "child/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  121 => 54,  117 => 53,  113 => 52,  104 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <h3 class="box-title">Child Details</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/* */
/*                     <table class="table">*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <th>Nameinfull</th>*/
/*                                 <td>{{ child.nameInFull }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Nameinintials</th>*/
/*                                 <td>{{ child.nameInIntials }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Sex</th>*/
/*                                 <td>{{ child.sex }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Religion</th>*/
/*                                 <td>{{ child.religion }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Mediumoflearning</th>*/
/*                                 <td>{{ child.mediumOfLearning }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Dob</th>*/
/*                                 <td>{% if child.dob %}{{ child.dob|date('Y-m-d') }}{% endif %}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th>Id</th>*/
/*                                 <td>{{ child.id }}</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer">*/
/*                 <a href="{{ path('child_index') }}" class="btn btn-info">Back to the list</a>*/
/*                 {{ form_start(delete_form) }}*/
/*                 <a href="{{ path('child_edit', { 'id': child.id }) }}" class="btn btn-info pull-right">Edit</a>*/
/*                     <input type="submit" class="btn btn-danger pull-right" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*                 </div><!-- /.box-footer -->*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* {% endblock %}*/
/* */
