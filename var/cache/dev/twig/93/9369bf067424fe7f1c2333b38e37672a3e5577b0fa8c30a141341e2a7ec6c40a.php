<?php

/* @Admin/cmsPage/list.html.twig */
class __TwigTemplate_e01974eacc73b384b1fd07b4aa5c9c12d0a5157fdb97adf6a47fe43318d85dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/cmsPage/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91ccd0f8db46bb16969930e2f19f623119dba749687f762399e8166c79a962d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ccd0f8db46bb16969930e2f19f623119dba749687f762399e8166c79a962d7->enter($__internal_91ccd0f8db46bb16969930e2f19f623119dba749687f762399e8166c79a962d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $__internal_d2c6e242c04fbf52cff13869d0cf6dac87631d582bc756a69870e01c686ab3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c6e242c04fbf52cff13869d0cf6dac87631d582bc756a69870e01c686ab3d8->enter($__internal_d2c6e242c04fbf52cff13869d0cf6dac87631d582bc756a69870e01c686ab3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91ccd0f8db46bb16969930e2f19f623119dba749687f762399e8166c79a962d7->leave($__internal_91ccd0f8db46bb16969930e2f19f623119dba749687f762399e8166c79a962d7_prof);

        
        $__internal_d2c6e242c04fbf52cff13869d0cf6dac87631d582bc756a69870e01c686ab3d8->leave($__internal_d2c6e242c04fbf52cff13869d0cf6dac87631d582bc756a69870e01c686ab3d8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_39bbd8d0aef6c52a10f0735f08b80a927e9f369518a8245b9055cf26628d724a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bbd8d0aef6c52a10f0735f08b80a927e9f369518a8245b9055cf26628d724a->enter($__internal_39bbd8d0aef6c52a10f0735f08b80a927e9f369518a8245b9055cf26628d724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba3207c44ea2497c85cb2ab8301c88b3dd0e6ba4964fb524c199b39f14dfd0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3207c44ea2497c85cb2ab8301c88b3dd0e6ba4964fb524c199b39f14dfd0ba->enter($__internal_ba3207c44ea2497c85cb2ab8301c88b3dd0e6ba4964fb524c199b39f14dfd0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2>Dam List</h2>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_cms_page");
        echo "\" class=\"btn btn-info\" role=\"button\">Add Page</a>
        ";
        // line 7
        $this->loadTemplate("@Admin/dam/search.html.twig", "@Admin/cmsPage/list.html.twig", 7)->display($context);
        // line 8
        echo "        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Is Active</th>
                <th>Is Navigation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        if ( !(null === (isset($context["pageCollection"]) ? $context["pageCollection"] : $this->getContext($context, "pageCollection")))) {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageCollection"]) ? $context["pageCollection"] : $this->getContext($context, "pageCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                if (($this->getAttribute($context["page"], "isActive", array()) == 1)) {
                    // line 24
                    echo "                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 26
                    echo "                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 28
                echo "                        </td>
                        <td>";
                // line 29
                if (($this->getAttribute($context["page"], "isNavigation", array()) == 1)) {
                    // line 30
                    echo "                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 32
                    echo "                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 34
                echo "                        </td>
                        <td>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_page", array("id" => $this->getAttribute((isset($context["fish"]) ? $context["fish"] : $this->getContext($context, "fish")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            ";
                // line 39
                echo "                            ";
                // line 40
                echo "                            ";
                // line 41
                echo "                            ";
                // line 42
                echo "                            ";
                // line 43
                echo "                            ";
                // line 44
                echo "                            ";
                // line 45
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
            ";
        }
        // line 50
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_ba3207c44ea2497c85cb2ab8301c88b3dd0e6ba4964fb524c199b39f14dfd0ba->leave($__internal_ba3207c44ea2497c85cb2ab8301c88b3dd0e6ba4964fb524c199b39f14dfd0ba_prof);

        
        $__internal_39bbd8d0aef6c52a10f0735f08b80a927e9f369518a8245b9055cf26628d724a->leave($__internal_39bbd8d0aef6c52a10f0735f08b80a927e9f369518a8245b9055cf26628d724a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/cmsPage/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  141 => 48,  133 => 45,  131 => 44,  129 => 43,  127 => 42,  125 => 41,  123 => 40,  121 => 39,  116 => 36,  112 => 34,  108 => 32,  104 => 30,  102 => 29,  99 => 28,  95 => 26,  91 => 24,  89 => 23,  85 => 22,  82 => 21,  77 => 20,  75 => 19,  62 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Admin/base.html.twig' %}
{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <h2>Dam List</h2>
        <a href=\"{{ path('create_cms_page') }}\" class=\"btn btn-info\" role=\"button\">Add Page</a>
        {% include '@Admin/dam/search.html.twig' %}
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Is Active</th>
                <th>Is Navigation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% if pageCollection is not null %}
                {% for page in pageCollection %}
                    <tr>
                        <td>{{ page.title }}</td>
                        <td>{% if page.isActive == 1 %}
                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            {% else %}
                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            {% endif %}
                        </td>
                        <td>{% if page.isNavigation == 1 %}
                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            {% else %}
                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('edit_page', { 'id': fish.id }) }}\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            {#{% if dam.isActive == 1 %}#}
                            {#<a href=\"{{ path('deactivate_dam', { 'id': dam.id }) }}\"#}
                            {#class=\"btn delete btn-danger\" role=\"button\">Deactivate</a>#}
                            {#{% else %}#}
                            {#<a href=\"{{ path('activate_dam', { 'id': dam.id }) }}\"#}
                            {#class=\"btn delete btn-danger\" role=\"button\">Activate</a>#}
                            {#{% endif %}#}
                        </td>
                    </tr>
                {% endfor %}

            {% endif %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "@Admin/cmsPage/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/cmsPage/list.html.twig");
    }
}
