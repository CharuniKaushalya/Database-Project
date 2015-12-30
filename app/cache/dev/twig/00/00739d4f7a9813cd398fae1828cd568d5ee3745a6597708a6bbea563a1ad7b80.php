<?php

/* base2.html.twig */
class __TwigTemplate_fe19672edb6394be8d39fbc42973580b8b4a83702825afb92970a14f95dd317c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23831eab5e55408276200084b4d51c29d9d5f4116d932904385d38d8032eac78 = $this->env->getExtension("native_profiler");
        $__internal_23831eab5e55408276200084b4d51c29d9d5f4116d932904385d38d8032eac78->enter($__internal_23831eab5e55408276200084b4d51c29d9d5f4116d932904385d38d8032eac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/demo.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/header-second-bar.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/AdminLTE.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
    </head>
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "           
</html>";
        
        $__internal_23831eab5e55408276200084b4d51c29d9d5f4116d932904385d38d8032eac78->leave($__internal_23831eab5e55408276200084b4d51c29d9d5f4116d932904385d38d8032eac78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_62942e20eeaf504606210f3a92420dafeafb17b48ccd752eb90184f7423a54a7 = $this->env->getExtension("native_profiler");
        $__internal_62942e20eeaf504606210f3a92420dafeafb17b48ccd752eb90184f7423a54a7->enter($__internal_62942e20eeaf504606210f3a92420dafeafb17b48ccd752eb90184f7423a54a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ministry Of Education";
        
        $__internal_62942e20eeaf504606210f3a92420dafeafb17b48ccd752eb90184f7423a54a7->leave($__internal_62942e20eeaf504606210f3a92420dafeafb17b48ccd752eb90184f7423a54a7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d481e1b9cb67c351c1fe0fa641f090d4bcf2dbbf30d5407ddffd14004ab4995e = $this->env->getExtension("native_profiler");
        $__internal_d481e1b9cb67c351c1fe0fa641f090d4bcf2dbbf30d5407ddffd14004ab4995e->enter($__internal_d481e1b9cb67c351c1fe0fa641f090d4bcf2dbbf30d5407ddffd14004ab4995e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        
        $__internal_d481e1b9cb67c351c1fe0fa641f090d4bcf2dbbf30d5407ddffd14004ab4995e->leave($__internal_d481e1b9cb67c351c1fe0fa641f090d4bcf2dbbf30d5407ddffd14004ab4995e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_b811406dfd40248696fc0b33a4213060bade868099c6e159a79c973ce0d445ed = $this->env->getExtension("native_profiler");
        $__internal_b811406dfd40248696fc0b33a4213060bade868099c6e159a79c973ce0d445ed->enter($__internal_b811406dfd40248696fc0b33a4213060bade868099c6e159a79c973ce0d445ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b811406dfd40248696fc0b33a4213060bade868099c6e159a79c973ce0d445ed->leave($__internal_b811406dfd40248696fc0b33a4213060bade868099c6e159a79c973ce0d445ed_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  96 => 9,  90 => 8,  78 => 7,  70 => 23,  68 => 22,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  39 => 10,  37 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">*/
/*         <title>{% block title %}Ministry Of Education{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/demo.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/sky-forms.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('public/css/header-second-bar.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('public/css/AdminLTE.min.css') }}" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">*/
/*     </head>*/
/*     {% block body %}{% endblock %}*/
/*            */
/* </html>*/
