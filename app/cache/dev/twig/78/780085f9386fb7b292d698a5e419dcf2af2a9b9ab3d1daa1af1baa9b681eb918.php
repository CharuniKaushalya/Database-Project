<?php

/* user/new.html.twig */
class __TwigTemplate_942fd8e985365d0d2686f431df82d26d236b8a392a73dfb9b4ad79291a06fc59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "user/new.html.twig", 1);
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
        $__internal_440e2b1bbb05b264def53538b2de0dbf512c0a8490855b9cf37273211cea2ce1 = $this->env->getExtension("native_profiler");
        $__internal_440e2b1bbb05b264def53538b2de0dbf512c0a8490855b9cf37273211cea2ce1->enter($__internal_440e2b1bbb05b264def53538b2de0dbf512c0a8490855b9cf37273211cea2ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440e2b1bbb05b264def53538b2de0dbf512c0a8490855b9cf37273211cea2ce1->leave($__internal_440e2b1bbb05b264def53538b2de0dbf512c0a8490855b9cf37273211cea2ce1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e2e8bdf87d2fd78b219dee63baec8efd085efe7500222af2b026f7e96105763 = $this->env->getExtension("native_profiler");
        $__internal_9e2e8bdf87d2fd78b219dee63baec8efd085efe7500222af2b026f7e96105763->enter($__internal_9e2e8bdf87d2fd78b219dee63baec8efd085efe7500222af2b026f7e96105763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9e2e8bdf87d2fd78b219dee63baec8efd085efe7500222af2b026f7e96105763->leave($__internal_9e2e8bdf87d2fd78b219dee63baec8efd085efe7500222af2b026f7e96105763_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c406e7730e36c8e5b70162c6dca9be825f52a2f6a2828d7002bb8c4d2d9ddf9 = $this->env->getExtension("native_profiler");
        $__internal_3c406e7730e36c8e5b70162c6dca9be825f52a2f6a2828d7002bb8c4d2d9ddf9->enter($__internal_3c406e7730e36c8e5b70162c6dca9be825f52a2f6a2828d7002bb8c4d2d9ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <body class=\"bg-cyan\">
        <div class=\"body body-m\">
        
            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"sky-form\" method=\"post\" >
                <header>Registration form</header>
                <fieldset>                  
                    <section >
                        <label class=\"input\">
                            <input type=\"text\" name=\"name_full\" placeholder=\"Name in Full\" required>
                        </label>
                    </section>

                    <section >
                        <label class=\"input\">
                            <input type=\"text\" name=\"emp_no\" placeholder=\"Employee no\" required>
                        </label>
                    </section>
                    
                    <section >
                        <label class=\"input\">
                            <input type=\"text\" name=\"name_initials\" placeholder=\"Name in Initials\">

                        </label>
                    </section> 
                    <section>
                        <label class=\"input\">
                            <i class=\"icon-append icon-user\"></i>
                            <input type=\"text\" name=\"username\" placeholder=\"Username\" required>
                        </label>
                    </section>              
                    <section>
                        <label class=\"input\">
                            <i class=\"icon-append icon-lock\"></i>
                            <input type=\"password\" name=\"password\" placeholder=\"Password\" id=\"password\" required>
                        </label>
                    </section>
                    <section>
                        <label class=\"input\">
                            <i class=\"icon-append icon-lock\"></i>
                            <input type=\"password\" name=\"password_confirm\" placeholder=\"Confirm password\" id=\"password_confirm\" oninput=\"check(this)\" required>
                            <script language='javascript' type='text/javascript'>
                                function check(input) {
                                    if (input.value != document.getElementById('password').value) {
                                        input.setCustomValidity('Passwords Must be Matching.');
                                    } else {
                                        input.setCustomValidity('');
                                }
                            }
                            </script>
                        </label>
                    </section>
                    <section>
                        <label class=\"input\">
                            <input type=\"text\" name=\"nic\" placeholder=\"NIC\">
                        </label>
                    </section>
                    <section>
                        <label class=\"select\">
                            <select name=\"sex\">
                                <option value=\"0\" selected=\"\" disabled=\"\">Gender</option>
                                <option value=\"Male\">Male</option>
                                <option value=\"Female\">Female</option>
                            </select>
                            <i></i>
                        </label>
                    </section>
                    <div class=\"row\">
                        <section class=\"col col-6\">
                            <p style=\"font-size:110%;\">Date of Birth</p>
                        </section>
                        <section class=\"col col-6\">
                            <label class=\"input\">
                                <input type=\"date\" name=\"dob\" placeholder=\"Date Of Birth\">
                            </label>
                        </section>
                        <section class=\"col col-6\">
                            <p style=\"font-size:110%;\">Role ID</p>
                        </section>
                        <section class=\"col col-6\">
                            <label class=\"select\">
                                <select name=\"role\">
                                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 95
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                </select>
                            </label>
                        </section>
                    </div>
                </fieldset>
                <footer>
                    <button href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" type=\"submit\" value=\"Create\" name=\"submit\" class=\"button\">Submit</button>
                </footer>
            </form>
            
        </div>
    
</body>

";
        
        $__internal_3c406e7730e36c8e5b70162c6dca9be825f52a2f6a2828d7002bb8c4d2d9ddf9->leave($__internal_3c406e7730e36c8e5b70162c6dca9be825f52a2f6a2828d7002bb8c4d2d9ddf9_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 103,  164 => 97,  153 => 95,  149 => 94,  68 => 16,  63 => 13,  57 => 12,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <form action="{{ path('user_new') }}" class="sky-form" method="post" >*/
/*                 <header>Registration form</header>*/
/*                 <fieldset>                  */
/*                     <section >*/
/*                         <label class="input">*/
/*                             <input type="text" name="name_full" placeholder="Name in Full" required>*/
/*                         </label>*/
/*                     </section>*/
/* */
/*                     <section >*/
/*                         <label class="input">*/
/*                             <input type="text" name="emp_no" placeholder="Employee no" required>*/
/*                         </label>*/
/*                     </section>*/
/*                     */
/*                     <section >*/
/*                         <label class="input">*/
/*                             <input type="text" name="name_initials" placeholder="Name in Initials">*/
/* */
/*                         </label>*/
/*                     </section> */
/*                     <section>*/
/*                         <label class="input">*/
/*                             <i class="icon-append icon-user"></i>*/
/*                             <input type="text" name="username" placeholder="Username" required>*/
/*                         </label>*/
/*                     </section>              */
/*                     <section>*/
/*                         <label class="input">*/
/*                             <i class="icon-append icon-lock"></i>*/
/*                             <input type="password" name="password" placeholder="Password" id="password" required>*/
/*                         </label>*/
/*                     </section>*/
/*                     <section>*/
/*                         <label class="input">*/
/*                             <i class="icon-append icon-lock"></i>*/
/*                             <input type="password" name="password_confirm" placeholder="Confirm password" id="password_confirm" oninput="check(this)" required>*/
/*                             <script language='javascript' type='text/javascript'>*/
/*                                 function check(input) {*/
/*                                     if (input.value != document.getElementById('password').value) {*/
/*                                         input.setCustomValidity('Passwords Must be Matching.');*/
/*                                     } else {*/
/*                                         input.setCustomValidity('');*/
/*                                 }*/
/*                             }*/
/*                             </script>*/
/*                         </label>*/
/*                     </section>*/
/*                     <section>*/
/*                         <label class="input">*/
/*                             <input type="text" name="nic" placeholder="NIC">*/
/*                         </label>*/
/*                     </section>*/
/*                     <section>*/
/*                         <label class="select">*/
/*                             <select name="sex">*/
/*                                 <option value="0" selected="" disabled="">Gender</option>*/
/*                                 <option value="Male">Male</option>*/
/*                                 <option value="Female">Female</option>*/
/*                             </select>*/
/*                             <i></i>*/
/*                         </label>*/
/*                     </section>*/
/*                     <div class="row">*/
/*                         <section class="col col-6">*/
/*                             <p style="font-size:110%;">Date of Birth</p>*/
/*                         </section>*/
/*                         <section class="col col-6">*/
/*                             <label class="input">*/
/*                                 <input type="date" name="dob" placeholder="Date Of Birth">*/
/*                             </label>*/
/*                         </section>*/
/*                         <section class="col col-6">*/
/*                             <p style="font-size:110%;">Role ID</p>*/
/*                         </section>*/
/*                         <section class="col col-6">*/
/*                             <label class="select">*/
/*                                 <select name="role">*/
/*                                     {% for role in roles %}*/
/*                                         <option value="{{role.id}}">{{role.role}}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </label>*/
/*                         </section>*/
/*                     </div>*/
/*                 </fieldset>*/
/*                 <footer>*/
/*                     <button href="{{ path('user_index') }}" type="submit" value="Create" name="submit" class="button">Submit</button>*/
/*                 </footer>*/
/*             </form>*/
/*             */
/*         </div>*/
/*     */
/* </body>*/
/* */
/* {% endblock %}*/
