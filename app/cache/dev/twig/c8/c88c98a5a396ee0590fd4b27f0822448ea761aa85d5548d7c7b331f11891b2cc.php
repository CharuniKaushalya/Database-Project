<?php

/* school/index.html.twig */
class __TwigTemplate_8b7d51077e99ffc7e5e47f59ffd94b67830be37751d03ac2ba10b9e60773881b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "school/index.html.twig", 1);
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
        $__internal_7a3fc9ffecdb47a36cea95e76cd51a3b48dd453a476fc6d9647b313edbdbc0a7 = $this->env->getExtension("native_profiler");
        $__internal_7a3fc9ffecdb47a36cea95e76cd51a3b48dd453a476fc6d9647b313edbdbc0a7->enter($__internal_7a3fc9ffecdb47a36cea95e76cd51a3b48dd453a476fc6d9647b313edbdbc0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "school/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3fc9ffecdb47a36cea95e76cd51a3b48dd453a476fc6d9647b313edbdbc0a7->leave($__internal_7a3fc9ffecdb47a36cea95e76cd51a3b48dd453a476fc6d9647b313edbdbc0a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5f37573b8b39de65f0d1d68eba86a11cfb6b994e1de0cf3e8c36f69dde15d9f = $this->env->getExtension("native_profiler");
        $__internal_a5f37573b8b39de65f0d1d68eba86a11cfb6b994e1de0cf3e8c36f69dde15d9f->enter($__internal_a5f37573b8b39de65f0d1d68eba86a11cfb6b994e1de0cf3e8c36f69dde15d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1></h1>
    <div class=\"container-fluid\">
    <div class=\"row\" style=\"height:20px;\"> 
    </div>
    <div class=\"row\"> 
        <div class=\"col-md-1\"> 
        </div>
        <div class=\"col-md-10\"> 
    <div class=\"box box-info\">
        <div class=\"box-header with-border\">
             <h3 class=\"box-title\">School List</h3>
             <button type=\"submit\" class=\"btn btn-info pull-right\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("school_new");
        echo "\">Create a new entry</a></button>
        </div><!-- /.box-header -->
         <!-- form start -->
        <form class=\"form-horizontal\">
        <div class=\"box-body\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Totstudents</th>
                        <th>Totvacancies</th>
                        <th>Startdate</th>
                        <th>Id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schools"]) ? $context["schools"] : $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 34
            echo "                    <tr>
                        <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_show", array("id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "name", array(), "array"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "address", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "tot_students", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "tot_vacancies", array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            if ($this->getAttribute($context["school"], "start_date", array(), "array")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["school"], "start_date", array(), "array"), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array(), "array"), "html", null, true);
            echo "</td>
                        <td>
                            <ul>
                                <li>
                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_show", array("id" => $this->getAttribute($context["school"], "id", array(), "array"))), "html", null, true);
            echo "\">show</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_edit", array("id" => $this->getAttribute($context["school"], "id", array(), "array"))), "html", null, true);
            echo "\">edit</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        </div><!-- /.box-body -->
        <div class=\"box-footer\">
        </div><!-- /.box-footer -->
        </form>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_a5f37573b8b39de65f0d1d68eba86a11cfb6b994e1de0cf3e8c36f69dde15d9f->leave($__internal_a5f37573b8b39de65f0d1d68eba86a11cfb6b994e1de0cf3e8c36f69dde15d9f_prof);

    }

    public function getTemplateName()
    {
        return "school/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  118 => 47,  112 => 44,  105 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  81 => 35,  78 => 34,  74 => 33,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1></h1>*/
/*     <div class="container-fluid">*/
/*     <div class="row" style="height:20px;"> */
/*     </div>*/
/*     <div class="row"> */
/*         <div class="col-md-1"> */
/*         </div>*/
/*         <div class="col-md-10"> */
/*     <div class="box box-info">*/
/*         <div class="box-header with-border">*/
/*              <h3 class="box-title">School List</h3>*/
/*              <button type="submit" class="btn btn-info pull-right"><a href="{{ path('school_new') }}">Create a new entry</a></button>*/
/*         </div><!-- /.box-header -->*/
/*          <!-- form start -->*/
/*         <form class="form-horizontal">*/
/*         <div class="box-body">*/
/*             <table class="table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Name</th>*/
/*                         <th>Address</th>*/
/*                         <th>Totstudents</th>*/
/*                         <th>Totvacancies</th>*/
/*                         <th>Startdate</th>*/
/*                         <th>Id</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for school in schools %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('school_show', { 'id': school.id }) }}">{{ school['name'] }}</a></td>*/
/*                         <td>{{ school['address'] }}</td>*/
/*                         <td>{{ school['tot_students'] }}</td>*/
/*                         <td>{{ school['tot_vacancies'] }}</td>*/
/*                         <td>{% if school['start_date'] %}{{ school['start_date']|date('Y-m-d') }}{% endif %}</td>*/
/*                         <td>{{ school['id'] }}</td>*/
/*                         <td>*/
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('school_show', { 'id': school['id'] }) }}">show</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('school_edit', { 'id': school['id'] }) }}">edit</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer">*/
/*         </div><!-- /.box-footer -->*/
/*         </form>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
