<?php

/* base.html.twig */
class __TwigTemplate_0d34ed0b80a052ee8a9a751f0df62c0e70674e0215ccaf6b29d2844c8df257ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ce18c1bdc229dc5de05b2d416eddbd74428259bc4ed664e33936c9ea0a5b728 = $this->env->getExtension("native_profiler");
        $__internal_5ce18c1bdc229dc5de05b2d416eddbd74428259bc4ed664e33936c9ea0a5b728->enter($__internal_5ce18c1bdc229dc5de05b2d416eddbd74428259bc4ed664e33936c9ea0a5b728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Grade 01 School Management</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/header-second-bar.css"), "html", null, true);
        echo "\">

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.js\"></script>
</head>
<body>
    <header class=\"header-two-bars\">
    <div class=\"header-first-bar\">

        <div class=\"header-limiter\">

            <h1><a href=\"#\">Ministry Of <span>Education</span></a></h1>

            <nav>
                <a href=\"#\" class=\"selected\">Home</a>
                <a href=\"#\">Contact</a>
                <a href=\"#\">About</a>
            </nav>
            
            <div class=\"dropdown pull-right\">
                <p></p>
              <a class=\" dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
            ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method"), "getEmpNo", array(), "method"), "html", null, true);
            echo "
                ";
        } else {
            // line 37
            echo "Sign In
                 ";
        }
        // line 39
        echo "              <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-right\" style=\"color:black;background-color:rgba(41,44,47,0.9);\">
                ";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "login"), "method")) {
            // line 42
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("loggout");
            echo "\">loggout</a></li>
                ";
        } else {
            // line 44
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\">Sign In</a></li>
                    <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "\">Sign Up</a></li>
                 ";
        }
        // line 47
        echo "                
              </ul>
            </div>
        </div>


    </div>
            
    <div class=\"header-second-bar\">

        <div class=\"header-limiter\">

            <nav>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("applicant_index");
        echo "\"><i class=\"fa fa-file-text\"></i> Gardian</a>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("child_index");
        echo "\"><i class=\"fa fa-file-text\"></i> Child</a>
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("school_index");
        echo "\"><i class=\"fa fa-file-text\"></i>School</a>
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("childrenofstaff_index");
        echo "\"><i class=\"fa fa-file-text\"></i> Childern of Staff</a>
                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("childrenofotoeos_index");
        echo "\"><i class=\"fa fa-file-text\"></i> Children of Oteoes</a>
                <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\"><i class=\"fa fa-file-text\"></i> User Registration</a>
            </nav>

        </div>

    </div>

</header>
";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "

</body>
</html>";
        
        $__internal_5ce18c1bdc229dc5de05b2d416eddbd74428259bc4ed664e33936c9ea0a5b728->leave($__internal_5ce18c1bdc229dc5de05b2d416eddbd74428259bc4ed664e33936c9ea0a5b728_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b74c11638e621087562e053ea23d5080381b50d70ea3f929a61f0b456cedc4 = $this->env->getExtension("native_profiler");
        $__internal_55b74c11638e621087562e053ea23d5080381b50d70ea3f929a61f0b456cedc4->enter($__internal_55b74c11638e621087562e053ea23d5080381b50d70ea3f929a61f0b456cedc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55b74c11638e621087562e053ea23d5080381b50d70ea3f929a61f0b456cedc4->leave($__internal_55b74c11638e621087562e053ea23d5080381b50d70ea3f929a61f0b456cedc4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 73,  146 => 75,  144 => 73,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  117 => 61,  113 => 60,  98 => 47,  93 => 45,  88 => 44,  82 => 42,  80 => 41,  76 => 39,  72 => 37,  66 => 36,  37 => 10,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Grade 01 School Management</title>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{asset('public/css/AdminLTE.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('public/css/header-second-bar.css')}}">*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.js"></script>*/
/* </head>*/
/* <body>*/
/*     <header class="header-two-bars">*/
/*     <div class="header-first-bar">*/
/* */
/*         <div class="header-limiter">*/
/* */
/*             <h1><a href="#">Ministry Of <span>Education</span></a></h1>*/
/* */
/*             <nav>*/
/*                 <a href="#" class="selected">Home</a>*/
/*                 <a href="#">Contact</a>*/
/*                 <a href="#">About</a>*/
/*             </nav>*/
/*             */
/*             <div class="dropdown pull-right">*/
/*                 <p></p>*/
/*               <a class=" dropdown-toggle" type="button" data-toggle="dropdown">*/
/*             {% if  app.session.get('login') %}{{ app.session.get('login').getEmpNo() }}*/
/*                 {% else %}Sign In*/
/*                  {% endif %}*/
/*               <span class="caret"></span></a>*/
/*               <ul class="dropdown-menu dropdown-menu-right" style="color:black;background-color:rgba(41,44,47,0.9);">*/
/*                 {% if  app.session.get('login') %}*/
/*                 <li><a href="{{ path('loggout') }}">loggout</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('user_login') }}">Sign In</a></li>*/
/*                     <li><a href="{{ path('user_new') }}">Sign Up</a></li>*/
/*                  {% endif %}*/
/*                 */
/*               </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/*             */
/*     <div class="header-second-bar">*/
/* */
/*         <div class="header-limiter">*/
/* */
/*             <nav>*/
/*                 <a href="{{ path('applicant_index') }}"><i class="fa fa-file-text"></i> Gardian</a>*/
/*                 <a href="{{ path('child_index') }}"><i class="fa fa-file-text"></i> Child</a>*/
/*                 <a href="{{ path('school_index') }}"><i class="fa fa-file-text"></i>School</a>*/
/*                 <a href="{{ path('childrenofstaff_index') }}"><i class="fa fa-file-text"></i> Childern of Staff</a>*/
/*                 <a href="{{ path('childrenofotoeos_index') }}"><i class="fa fa-file-text"></i> Children of Oteoes</a>*/
/*                 <a href="{{ path('user_new') }}"><i class="fa fa-file-text"></i> User Registration</a>*/
/*             </nav>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </header>*/
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
