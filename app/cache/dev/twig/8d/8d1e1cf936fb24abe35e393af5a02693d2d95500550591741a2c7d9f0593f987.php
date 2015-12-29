<?php

/* user/welcome.html.twig */
class __TwigTemplate_e493fc5524ea67472f1f580a45bb0cea8198de5c433daeae089bfa91cd4b466d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/welcome.html.twig", 1);
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
        $__internal_664175fa4bb4ca95dcacf9fa4d11de8888ddde1f4f4121287f23011c7b9cd228 = $this->env->getExtension("native_profiler");
        $__internal_664175fa4bb4ca95dcacf9fa4d11de8888ddde1f4f4121287f23011c7b9cd228->enter($__internal_664175fa4bb4ca95dcacf9fa4d11de8888ddde1f4f4121287f23011c7b9cd228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664175fa4bb4ca95dcacf9fa4d11de8888ddde1f4f4121287f23011c7b9cd228->leave($__internal_664175fa4bb4ca95dcacf9fa4d11de8888ddde1f4f4121287f23011c7b9cd228_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24290d7b7e162432e2c34ea91eabc33b7156d7162f79087629decc499f795521 = $this->env->getExtension("native_profiler");
        $__internal_24290d7b7e162432e2c34ea91eabc33b7156d7162f79087629decc499f795521->enter($__internal_24290d7b7e162432e2c34ea91eabc33b7156d7162f79087629decc499f795521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24290d7b7e162432e2c34ea91eabc33b7156d7162f79087629decc499f795521->leave($__internal_24290d7b7e162432e2c34ea91eabc33b7156d7162f79087629decc499f795521_prof);

    }

    public function getTemplateName()
    {
        return "user/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
