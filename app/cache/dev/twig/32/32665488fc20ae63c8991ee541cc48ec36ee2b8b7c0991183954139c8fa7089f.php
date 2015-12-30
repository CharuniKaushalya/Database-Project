<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cad663360422d46a7e2c29b5c6e050edf63e47a4c52262f6422a9232b39a16e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5d070832d6ed8794bda8473cabe53316ef1b8b6895ee741b2ea5f95d1442079 = $this->env->getExtension("native_profiler");
        $__internal_d5d070832d6ed8794bda8473cabe53316ef1b8b6895ee741b2ea5f95d1442079->enter($__internal_d5d070832d6ed8794bda8473cabe53316ef1b8b6895ee741b2ea5f95d1442079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d070832d6ed8794bda8473cabe53316ef1b8b6895ee741b2ea5f95d1442079->leave($__internal_d5d070832d6ed8794bda8473cabe53316ef1b8b6895ee741b2ea5f95d1442079_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de7fb004e0f150b302ca2c05b2269b69c6dd1f98de9d320807fa1bfc19a42ac2 = $this->env->getExtension("native_profiler");
        $__internal_de7fb004e0f150b302ca2c05b2269b69c6dd1f98de9d320807fa1bfc19a42ac2->enter($__internal_de7fb004e0f150b302ca2c05b2269b69c6dd1f98de9d320807fa1bfc19a42ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de7fb004e0f150b302ca2c05b2269b69c6dd1f98de9d320807fa1bfc19a42ac2->leave($__internal_de7fb004e0f150b302ca2c05b2269b69c6dd1f98de9d320807fa1bfc19a42ac2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e05076466049711d5c7ccd84d4555096c887eac2d81dbe7c8dc5100460dffdaa = $this->env->getExtension("native_profiler");
        $__internal_e05076466049711d5c7ccd84d4555096c887eac2d81dbe7c8dc5100460dffdaa->enter($__internal_e05076466049711d5c7ccd84d4555096c887eac2d81dbe7c8dc5100460dffdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e05076466049711d5c7ccd84d4555096c887eac2d81dbe7c8dc5100460dffdaa->leave($__internal_e05076466049711d5c7ccd84d4555096c887eac2d81dbe7c8dc5100460dffdaa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41bb4b2a2a926fb7a81d9985f94c59f0018dfa6ee3e66e7b10c9eabae05bf3ef = $this->env->getExtension("native_profiler");
        $__internal_41bb4b2a2a926fb7a81d9985f94c59f0018dfa6ee3e66e7b10c9eabae05bf3ef->enter($__internal_41bb4b2a2a926fb7a81d9985f94c59f0018dfa6ee3e66e7b10c9eabae05bf3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_41bb4b2a2a926fb7a81d9985f94c59f0018dfa6ee3e66e7b10c9eabae05bf3ef->leave($__internal_41bb4b2a2a926fb7a81d9985f94c59f0018dfa6ee3e66e7b10c9eabae05bf3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
