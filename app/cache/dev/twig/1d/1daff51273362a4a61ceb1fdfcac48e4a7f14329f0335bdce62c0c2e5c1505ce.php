<?php

/* user/login.html.twig */
class __TwigTemplate_687f5762ca2e3d6d381a4904884b2f23f1183ed7989bc7ed935b20ded4a407a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "user/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b79dff474be128cad83161a5e45d60790d8652215451310df58c1fbc4c83f142 = $this->env->getExtension("native_profiler");
        $__internal_b79dff474be128cad83161a5e45d60790d8652215451310df58c1fbc4c83f142->enter($__internal_b79dff474be128cad83161a5e45d60790d8652215451310df58c1fbc4c83f142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79dff474be128cad83161a5e45d60790d8652215451310df58c1fbc4c83f142->leave($__internal_b79dff474be128cad83161a5e45d60790d8652215451310df58c1fbc4c83f142_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83551e703c570260e9c285bf71e8253ccc5d8777002c72717889f61564dc3a54 = $this->env->getExtension("native_profiler");
        $__internal_83551e703c570260e9c285bf71e8253ccc5d8777002c72717889f61564dc3a54->enter($__internal_83551e703c570260e9c285bf71e8253ccc5d8777002c72717889f61564dc3a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <style type=\"text/css\">
            body {
                background: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/loginlogin/img/backgrounds/1.jpg"), "html", null, true);
        echo "');
                background-size: cover;
            }
        </style>
";
        
        $__internal_83551e703c570260e9c285bf71e8253ccc5d8777002c72717889f61564dc3a54->leave($__internal_83551e703c570260e9c285bf71e8253ccc5d8777002c72717889f61564dc3a54_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_97272be206b86f9a9fe9422f0fadee3697bfc74ec3b1357a672f98537d5e5ed4 = $this->env->getExtension("native_profiler");
        $__internal_97272be206b86f9a9fe9422f0fadee3697bfc74ec3b1357a672f98537d5e5ed4->enter($__internal_97272be206b86f9a9fe9422f0fadee3697bfc74ec3b1357a672f98537d5e5ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <body class=\"bg-cyan\">
        <div class=\"body body-m\">
        
            <form class=\"sky-form\" method=\"post\" >
            \t<header>Please Sign In</header>
                <fieldset> 
\t            <section>
\t                <label class=\"input\">
\t                    <i class=\"icon-append icon-user\"></i>
\t                         <input type=\"text\" name=\"username\" placeholder=\"Username\" maxlength=\"35\" size=\"4\" required>
\t                    </label>
\t            </section>
\t            <section>
\t                <label class=\"input\">
\t                    <i class=\"icon-append icon-lock\"></i>
\t                    <input type=\"password\" name=\"password\" placeholder=\"Password\" id=\"password\" required>
\t                </label>
\t            </section> 
\t\t        <input type=\"checkbox\" name=\"remember\" value=\"remember-me\" checked>Remember me
\t\t        
\t\t         </fieldset>
                <footer>
\t            <button class=\"btn btn-info pull-right\" type=\"submit\">Sign in</button>
\t            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" >Sign Up</a>
\t            </footer>
            </form>
            
        </div>
    
</body>

";
        
        $__internal_97272be206b86f9a9fe9422f0fadee3697bfc74ec3b1357a672f98537d5e5ed4->leave($__internal_97272be206b86f9a9fe9422f0fadee3697bfc74ec3b1357a672f98537d5e5ed4_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  63 => 13,  57 => 12,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*         <style type="text/css">*/
/*             body {*/
/*                 background: url('{{asset('bundles/loginlogin/img/backgrounds/1.jpg')}}');*/
/*                 background-size: cover;*/
/*             }*/
/*         </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <body class="bg-cyan">*/
/*         <div class="body body-m">*/
/*         */
/*             <form class="sky-form" method="post" >*/
/*             	<header>Please Sign In</header>*/
/*                 <fieldset> */
/* 	            <section>*/
/* 	                <label class="input">*/
/* 	                    <i class="icon-append icon-user"></i>*/
/* 	                         <input type="text" name="username" placeholder="Username" maxlength="35" size="4" required>*/
/* 	                    </label>*/
/* 	            </section>*/
/* 	            <section>*/
/* 	                <label class="input">*/
/* 	                    <i class="icon-append icon-lock"></i>*/
/* 	                    <input type="password" name="password" placeholder="Password" id="password" required>*/
/* 	                </label>*/
/* 	            </section> */
/* 		        <input type="checkbox" name="remember" value="remember-me" checked>Remember me*/
/* 		        */
/* 		         </fieldset>*/
/*                 <footer>*/
/* 	            <button class="btn btn-info pull-right" type="submit">Sign in</button>*/
/* 	            <a href="{{path('user_new')}}" >Sign Up</a>*/
/* 	            </footer>*/
/*             </form>*/
/*             */
/*         </div>*/
/*     */
/* </body>*/
/* */
/* {% endblock %}*/
