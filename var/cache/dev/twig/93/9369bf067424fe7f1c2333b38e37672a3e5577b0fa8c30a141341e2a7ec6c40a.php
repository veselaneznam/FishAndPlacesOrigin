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
        $__internal_aa0fe739aea34e4d45d8e9d60a49e5d2f26d8a4a65c0a14e31e3fcccf64bb781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0fe739aea34e4d45d8e9d60a49e5d2f26d8a4a65c0a14e31e3fcccf64bb781->enter($__internal_aa0fe739aea34e4d45d8e9d60a49e5d2f26d8a4a65c0a14e31e3fcccf64bb781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $__internal_e510d6c528301dddeffcbd38f07461687dd1aa3acbe7c9d5f79200ee82decea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e510d6c528301dddeffcbd38f07461687dd1aa3acbe7c9d5f79200ee82decea3->enter($__internal_e510d6c528301dddeffcbd38f07461687dd1aa3acbe7c9d5f79200ee82decea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/cmsPage/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa0fe739aea34e4d45d8e9d60a49e5d2f26d8a4a65c0a14e31e3fcccf64bb781->leave($__internal_aa0fe739aea34e4d45d8e9d60a49e5d2f26d8a4a65c0a14e31e3fcccf64bb781_prof);

        
        $__internal_e510d6c528301dddeffcbd38f07461687dd1aa3acbe7c9d5f79200ee82decea3->leave($__internal_e510d6c528301dddeffcbd38f07461687dd1aa3acbe7c9d5f79200ee82decea3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2672ce3d7388b66abb0f2c7b470a550f49638329cd7ff07a50b851e778d1050e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2672ce3d7388b66abb0f2c7b470a550f49638329cd7ff07a50b851e778d1050e->enter($__internal_2672ce3d7388b66abb0f2c7b470a550f49638329cd7ff07a50b851e778d1050e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d45b979a1581bec58a558be2a63d2bd6efff559396692f63427c8e8b7baaf2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45b979a1581bec58a558be2a63d2bd6efff559396692f63427c8e8b7baaf2eb->enter($__internal_d45b979a1581bec58a558be2a63d2bd6efff559396692f63427c8e8b7baaf2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d45b979a1581bec58a558be2a63d2bd6efff559396692f63427c8e8b7baaf2eb->leave($__internal_d45b979a1581bec58a558be2a63d2bd6efff559396692f63427c8e8b7baaf2eb_prof);

        
        $__internal_2672ce3d7388b66abb0f2c7b470a550f49638329cd7ff07a50b851e778d1050e->leave($__internal_2672ce3d7388b66abb0f2c7b470a550f49638329cd7ff07a50b851e778d1050e_prof);

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
