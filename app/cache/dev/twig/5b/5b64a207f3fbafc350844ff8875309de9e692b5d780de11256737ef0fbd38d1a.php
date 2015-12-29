<?php

/* user/logss.html.twig */
class __TwigTemplate_da5ae8067b8cda3ae57f536730fb0b0a1c218a78dc9a9d55ff16871f803bc8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/logss.html.twig", 1);
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
        $__internal_59bef1c5d736fecab005d16f69e1ac886e958670bce03df3192e03b42f829c04 = $this->env->getExtension("native_profiler");
        $__internal_59bef1c5d736fecab005d16f69e1ac886e958670bce03df3192e03b42f829c04->enter($__internal_59bef1c5d736fecab005d16f69e1ac886e958670bce03df3192e03b42f829c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/logss.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bef1c5d736fecab005d16f69e1ac886e958670bce03df3192e03b42f829c04->leave($__internal_59bef1c5d736fecab005d16f69e1ac886e958670bce03df3192e03b42f829c04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b43ec4da4e02e8ce16d7ea35dd2fde55e9922e8381b5499d2617d4d28c99af5 = $this->env->getExtension("native_profiler");
        $__internal_5b43ec4da4e02e8ce16d7ea35dd2fde55e9922e8381b5499d2617d4d28c99af5->enter($__internal_5b43ec4da4e02e8ce16d7ea35dd2fde55e9922e8381b5499d2617d4d28c99af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>Hellosssssssssssssss ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>
  <div class=\"dropdown pull-right\">
              <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Sign In
              <span class=\"caret\"></span></button>
              <ul class=\"dropdown-menu dropdown-menu-right\" style=\"color:black;background-color:rgba(41,44,47,0.9);\">
              ";
        // line 9
        if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "Login Error")) {
            // line 10
            echo "              <li><a href=\"#\">Sign In</a></li>
                <li><a href=\"#\">Sign Up</a></li>
             ";
        } else {
            // line 13
            echo "              <li><a href=\"#\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
              ";
        }
        // line 15
        echo "                
              </ul>
            </div>
";
        
        $__internal_5b43ec4da4e02e8ce16d7ea35dd2fde55e9922e8381b5499d2617d4d28c99af5->leave($__internal_5b43ec4da4e02e8ce16d7ea35dd2fde55e9922e8381b5499d2617d4d28c99af5_prof);

    }

    public function getTemplateName()
    {
        return "user/logss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  56 => 13,  51 => 10,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <h2>Hellosssssssssssssss {{name}}</h2>*/
/*   <div class="dropdown pull-right">*/
/*               <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sign In*/
/*               <span class="caret"></span></button>*/
/*               <ul class="dropdown-menu dropdown-menu-right" style="color:black;background-color:rgba(41,44,47,0.9);">*/
/*               {% if name == "Login Error" %}*/
/*               <li><a href="#">Sign In</a></li>*/
/*                 <li><a href="#">Sign Up</a></li>*/
/*              {% else %}*/
/*               <li><a href="#">{{name}}</a></li>*/
/*               {% endif %}*/
/*                 */
/*               </ul>*/
/*             </div>*/
/* {% endblock %}*/
/* */
