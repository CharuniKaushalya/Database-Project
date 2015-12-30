<?php

/* user/index.html.twig */
class __TwigTemplate_a497d3f213cbe078c3b2decc3926779ddface861020cb5f6bed86d25cc3e4316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_7a69695925912e2b266bca427f17ee23dd78a0b9689473c6af7dd095fbf8b7ec = $this->env->getExtension("native_profiler");
        $__internal_7a69695925912e2b266bca427f17ee23dd78a0b9689473c6af7dd095fbf8b7ec->enter($__internal_7a69695925912e2b266bca427f17ee23dd78a0b9689473c6af7dd095fbf8b7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a69695925912e2b266bca427f17ee23dd78a0b9689473c6af7dd095fbf8b7ec->leave($__internal_7a69695925912e2b266bca427f17ee23dd78a0b9689473c6af7dd095fbf8b7ec_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_35120e221c272d4d288f97be32b74182d57511879d790a503fc8d12732c530f0 = $this->env->getExtension("native_profiler");
        $__internal_35120e221c272d4d288f97be32b74182d57511879d790a503fc8d12732c530f0->enter($__internal_35120e221c272d4d288f97be32b74182d57511879d790a503fc8d12732c530f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>User list</h1>

    <table class=\"table\"> 
        <thead>
            <tr>
                <th>Nameinfull</th>
                <th>Nameinintials</th>
                <th>Username</th>
                <th>Empno</th>
                <th>Password</th>
                <th>Remembertoken</th>
                <th>Confirmationcode</th>
                <th>Sex</th>
                <th>Dob</th>
                <th>Nic</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameInFull", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nameInIntials", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "empNo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "rememberToken", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "confirmationCode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sex", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["user"], "dob", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "dob", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nic", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_35120e221c272d4d288f97be32b74182d57511879d790a503fc8d12732c530f0->leave($__internal_35120e221c272d4d288f97be32b74182d57511879d790a503fc8d12732c530f0_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  124 => 40,  113 => 35,  109 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 25,  66 => 24,  62 => 23,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table class="table"> */
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nameinfull</th>*/
/*                 <th>Nameinintials</th>*/
/*                 <th>Username</th>*/
/*                 <th>Empno</th>*/
/*                 <th>Password</th>*/
/*                 <th>Remembertoken</th>*/
/*                 <th>Confirmationcode</th>*/
/*                 <th>Sex</th>*/
/*                 <th>Dob</th>*/
/*                 <th>Nic</th>*/
/*                 <th>Id</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.nameInFull }}</a></td>*/
/*                 <td>{{ user.nameInIntials }}</td>*/
/*                 <td>{{ user.userName }}</td>*/
/*                 <td>{{ user.empNo }}</td>*/
/*                 <td>{{ user.password }}</td>*/
/*                 <td>{{ user.rememberToken }}</td>*/
/*                 <td>{{ user.confirmationCode }}</td>*/
/*                 <td>{{ user.sex }}</td>*/
/*                 <td>{% if user.dob %}{{ user.dob|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ user.nic }}</td>*/
/*                 <td>{{ user.id }}</td>*/
/*                 <td>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
