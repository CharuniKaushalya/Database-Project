<?php

/* user/show.html.twig */
class __TwigTemplate_a837b17c1f441d9e6413837f91215037aa0b8522c58b96a8e305aa8ac8cbed4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_c53b254e22bc664ca8d4e4a36bdc7cdebac309f687baaf775ae92ba6f3050d40 = $this->env->getExtension("native_profiler");
        $__internal_c53b254e22bc664ca8d4e4a36bdc7cdebac309f687baaf775ae92ba6f3050d40->enter($__internal_c53b254e22bc664ca8d4e4a36bdc7cdebac309f687baaf775ae92ba6f3050d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c53b254e22bc664ca8d4e4a36bdc7cdebac309f687baaf775ae92ba6f3050d40->leave($__internal_c53b254e22bc664ca8d4e4a36bdc7cdebac309f687baaf775ae92ba6f3050d40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b1fae79c4b5b3dcb30775cf6e9f6718f4d9741d5ecffeceda7fad4ab972c93 = $this->env->getExtension("native_profiler");
        $__internal_70b1fae79c4b5b3dcb30775cf6e9f6718f4d9741d5ecffeceda7fad4ab972c93->enter($__internal_70b1fae79c4b5b3dcb30775cf6e9f6718f4d9741d5ecffeceda7fad4ab972c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Nameinfull</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameInFull", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nameinintials</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameInIntials", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Empno</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "empNo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remembertoken</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rememberToken", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confirmationcode</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "confirmationCode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sex", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dob</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dob", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dob", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nic</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nic", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_70b1fae79c4b5b3dcb30775cf6e9f6718f4d9741d5ecffeceda7fad4ab972c93->leave($__internal_70b1fae79c4b5b3dcb30775cf6e9f6718f4d9741d5ecffeceda7fad4ab972c93_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  142 => 63,  136 => 60,  130 => 57,  120 => 50,  113 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nameinfull</th>*/
/*                 <td>{{ user.nameInFull }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nameinintials</th>*/
/*                 <td>{{ user.nameInIntials }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ user.userName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Empno</th>*/
/*                 <td>{{ user.empNo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ user.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Remembertoken</th>*/
/*                 <td>{{ user.rememberToken }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Confirmationcode</th>*/
/*                 <td>{{ user.confirmationCode }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sex</th>*/
/*                 <td>{{ user.sex }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dob</th>*/
/*                 <td>{% if user.dob %}{{ user.dob|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nic</th>*/
/*                 <td>{{ user.nic }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
