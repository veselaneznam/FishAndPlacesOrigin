<?php

/* @Admin/fish/list.html.twig */
class __TwigTemplate_d4223115d3627947d68d3b68ffdd4628676935924ef69d307d026d3968a6b119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/fish/list.html.twig", 1);
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
        $__internal_7a51b3d7814c15dfd82d241de68810180ef1bc0fb6c3dc0462e30f302da324f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a51b3d7814c15dfd82d241de68810180ef1bc0fb6c3dc0462e30f302da324f6->enter($__internal_7a51b3d7814c15dfd82d241de68810180ef1bc0fb6c3dc0462e30f302da324f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/fish/list.html.twig"));

        $__internal_1a42eb5a07d532cee92b7db451e534a97b66f94231383e62c4fe768a275ddbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a42eb5a07d532cee92b7db451e534a97b66f94231383e62c4fe768a275ddbb9->enter($__internal_1a42eb5a07d532cee92b7db451e534a97b66f94231383e62c4fe768a275ddbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/fish/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a51b3d7814c15dfd82d241de68810180ef1bc0fb6c3dc0462e30f302da324f6->leave($__internal_7a51b3d7814c15dfd82d241de68810180ef1bc0fb6c3dc0462e30f302da324f6_prof);

        
        $__internal_1a42eb5a07d532cee92b7db451e534a97b66f94231383e62c4fe768a275ddbb9->leave($__internal_1a42eb5a07d532cee92b7db451e534a97b66f94231383e62c4fe768a275ddbb9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_397313ae7c45aa9c6908e28ffcb7279b3fe96c9d4fa6c686201aa0b02159d3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397313ae7c45aa9c6908e28ffcb7279b3fe96c9d4fa6c686201aa0b02159d3fc->enter($__internal_397313ae7c45aa9c6908e28ffcb7279b3fe96c9d4fa6c686201aa0b02159d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88790d1b60eff1fd5027a972b6b12b37e37a345f218c86f54dea4f7bd7b9594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88790d1b60eff1fd5027a972b6b12b37e37a345f218c86f54dea4f7bd7b9594->enter($__internal_a88790d1b60eff1fd5027a972b6b12b37e37a345f218c86f54dea4f7bd7b9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2>Fish List</h2>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_fish");
        echo "\" class=\"btn btn-info\" role=\"button\">Add Fish</a>
        ";
        // line 7
        $this->loadTemplate("@Admin/dam/search.html.twig", "@Admin/fish/list.html.twig", 7)->display($context);
        // line 8
        echo "        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Is Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 18
        if ( !(null === (isset($context["fishCollection"]) ? $context["fishCollection"] : $this->getContext($context, "fishCollection")))) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fishCollection"]) ? $context["fishCollection"] : $this->getContext($context, "fishCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["fish"]) {
                // line 20
                echo "                    <tr>
                        <td><img src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fish"], "image", array()), "webPath", array()), "html", null, true);
                echo "\" width=\"100px\" class=\"thumbnail\"></td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["fish"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                if (($this->getAttribute($context["fish"], "isActive", array()) == 1)) {
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
                        <td>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_fish", array("id" => $this->getAttribute($context["fish"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            ";
                // line 33
                echo "                                ";
                // line 34
                echo "                                   ";
                // line 35
                echo "                            ";
                // line 36
                echo "                                ";
                // line 37
                echo "                                   ";
                // line 38
                echo "                            ";
                // line 39
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_a88790d1b60eff1fd5027a972b6b12b37e37a345f218c86f54dea4f7bd7b9594->leave($__internal_a88790d1b60eff1fd5027a972b6b12b37e37a345f218c86f54dea4f7bd7b9594_prof);

        
        $__internal_397313ae7c45aa9c6908e28ffcb7279b3fe96c9d4fa6c686201aa0b02159d3fc->leave($__internal_397313ae7c45aa9c6908e28ffcb7279b3fe96c9d4fa6c686201aa0b02159d3fc_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/fish/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  131 => 42,  123 => 39,  121 => 38,  119 => 37,  117 => 36,  115 => 35,  113 => 34,  111 => 33,  106 => 30,  102 => 28,  98 => 26,  94 => 24,  92 => 23,  88 => 22,  84 => 21,  81 => 20,  76 => 19,  74 => 18,  62 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <h2>Fish List</h2>
        <a href=\"{{ path('create_fish') }}\" class=\"btn btn-info\" role=\"button\">Add Fish</a>
        {% include '@Admin/dam/search.html.twig' %}
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Is Active</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% if fishCollection is not null %}
                {% for fish in fishCollection %}
                    <tr>
                        <td><img src=\"{{ fish.image.webPath }}\" width=\"100px\" class=\"thumbnail\"></td>
                        <td>{{ fish.name }}</td>
                        <td>{% if fish.isActive == 1 %}
                                <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            {% else %}
                                <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('edit_fish', { 'id': fish.id }) }}\" class=\"btn btn-success\"
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
", "@Admin/fish/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/fish/list.html.twig");
    }
}
