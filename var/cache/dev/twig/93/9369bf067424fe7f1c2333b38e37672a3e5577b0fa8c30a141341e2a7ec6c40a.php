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
        $__internal_a88fdc56f060cf528271d3c515d09197019e2666e3f2d85c399ddc90e31340b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88fdc56f060cf528271d3c515d09197019e2666e3f2d85c399ddc90e31340b2->enter($__internal_a88fdc56f060cf528271d3c515d09197019e2666e3f2d85c399ddc90e31340b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $__internal_16d119b7d942e3a28d1aab9a977ba2407628253d76c7b0c3a7d16c84859e0c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d119b7d942e3a28d1aab9a977ba2407628253d76c7b0c3a7d16c84859e0c3b->enter($__internal_16d119b7d942e3a28d1aab9a977ba2407628253d76c7b0c3a7d16c84859e0c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a88fdc56f060cf528271d3c515d09197019e2666e3f2d85c399ddc90e31340b2->leave($__internal_a88fdc56f060cf528271d3c515d09197019e2666e3f2d85c399ddc90e31340b2_prof);

        
        $__internal_16d119b7d942e3a28d1aab9a977ba2407628253d76c7b0c3a7d16c84859e0c3b->leave($__internal_16d119b7d942e3a28d1aab9a977ba2407628253d76c7b0c3a7d16c84859e0c3b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_731d3aff6ff2f944bd2ac1b3912d9b06ab10c11ec9cc8c81c9dd907a8cb2109b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731d3aff6ff2f944bd2ac1b3912d9b06ab10c11ec9cc8c81c9dd907a8cb2109b->enter($__internal_731d3aff6ff2f944bd2ac1b3912d9b06ab10c11ec9cc8c81c9dd907a8cb2109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87622be1c5b52fb35481c76fb556e89dd7c9719de8ce0c744f13aeb21bef37ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87622be1c5b52fb35481c76fb556e89dd7c9719de8ce0c744f13aeb21bef37ac->enter($__internal_87622be1c5b52fb35481c76fb556e89dd7c9719de8ce0c744f13aeb21bef37ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2>CMS page List</h2>
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                if (($this->getAttribute($context["page"], "isActive", array()) == 1)) {
                    // line 25
                    echo "                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 27
                    echo "                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 29
                echo "                        </td>
                        <td>";
                // line 30
                if (($this->getAttribute($context["page"], "isNavigation", array()) == 1)) {
                    // line 31
                    echo "                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 33
                    echo "                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 35
                echo "                        </td>
                        <td>
                            <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            ";
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
                echo "                            ";
                // line 46
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
            ";
        }
        // line 51
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_87622be1c5b52fb35481c76fb556e89dd7c9719de8ce0c744f13aeb21bef37ac->leave($__internal_87622be1c5b52fb35481c76fb556e89dd7c9719de8ce0c744f13aeb21bef37ac_prof);

        
        $__internal_731d3aff6ff2f944bd2ac1b3912d9b06ab10c11ec9cc8c81c9dd907a8cb2109b->leave($__internal_731d3aff6ff2f944bd2ac1b3912d9b06ab10c11ec9cc8c81c9dd907a8cb2109b_prof);

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
        return array (  149 => 51,  145 => 49,  137 => 46,  135 => 45,  133 => 44,  131 => 43,  129 => 42,  127 => 41,  125 => 40,  120 => 37,  116 => 35,  112 => 33,  108 => 31,  106 => 30,  103 => 29,  99 => 27,  95 => 25,  93 => 24,  89 => 23,  85 => 22,  82 => 21,  77 => 20,  75 => 19,  62 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <h2>CMS page List</h2>
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
                        <td>{{ page.id }}</td>
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
                            <a href=\"{{ path('edit_page', { 'id': page.id }) }}\" class=\"btn btn-success\"
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
