<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bd67d6403b8f245034355ba3f2279acb79cbe328184bd4b2de32357ef86435dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9b3198baed9cfb34a31aaab37c1897ea8c7e08896e0514ba467cad01463115e = $this->env->getExtension("native_profiler");
        $__internal_c9b3198baed9cfb34a31aaab37c1897ea8c7e08896e0514ba467cad01463115e->enter($__internal_c9b3198baed9cfb34a31aaab37c1897ea8c7e08896e0514ba467cad01463115e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b3198baed9cfb34a31aaab37c1897ea8c7e08896e0514ba467cad01463115e->leave($__internal_c9b3198baed9cfb34a31aaab37c1897ea8c7e08896e0514ba467cad01463115e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fcf1066ac60ee8365a511861170816bb4405670d7102849472f79c29ef1ae019 = $this->env->getExtension("native_profiler");
        $__internal_fcf1066ac60ee8365a511861170816bb4405670d7102849472f79c29ef1ae019->enter($__internal_fcf1066ac60ee8365a511861170816bb4405670d7102849472f79c29ef1ae019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fcf1066ac60ee8365a511861170816bb4405670d7102849472f79c29ef1ae019->leave($__internal_fcf1066ac60ee8365a511861170816bb4405670d7102849472f79c29ef1ae019_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52343d49dde9c7b3bae3c1c4d4f4de10a4c90cd5d77326620aed058d163dfa16 = $this->env->getExtension("native_profiler");
        $__internal_52343d49dde9c7b3bae3c1c4d4f4de10a4c90cd5d77326620aed058d163dfa16->enter($__internal_52343d49dde9c7b3bae3c1c4d4f4de10a4c90cd5d77326620aed058d163dfa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_52343d49dde9c7b3bae3c1c4d4f4de10a4c90cd5d77326620aed058d163dfa16->leave($__internal_52343d49dde9c7b3bae3c1c4d4f4de10a4c90cd5d77326620aed058d163dfa16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4e1d8c82d8b3d7c6b42ac4c092a1998a76ee2145089558ffc7777c826ff2e0c = $this->env->getExtension("native_profiler");
        $__internal_d4e1d8c82d8b3d7c6b42ac4c092a1998a76ee2145089558ffc7777c826ff2e0c->enter($__internal_d4e1d8c82d8b3d7c6b42ac4c092a1998a76ee2145089558ffc7777c826ff2e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4e1d8c82d8b3d7c6b42ac4c092a1998a76ee2145089558ffc7777c826ff2e0c->leave($__internal_d4e1d8c82d8b3d7c6b42ac4c092a1998a76ee2145089558ffc7777c826ff2e0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
