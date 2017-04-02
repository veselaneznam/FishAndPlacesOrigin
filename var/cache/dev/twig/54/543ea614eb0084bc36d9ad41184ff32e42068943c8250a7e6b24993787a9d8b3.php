<?php

/* @Dam/dam/list.html.twig */
class __TwigTemplate_eb390f59f2ccf560b9350937ac408533be342970b5d2960650a753a38eca4bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Dam/base.html.twig", "@Dam/dam/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Dam/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7e94541e5f0f0e31a3b862dffe826074907a0b532507d7ee44fce13845bfaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e94541e5f0f0e31a3b862dffe826074907a0b532507d7ee44fce13845bfaa5->enter($__internal_a7e94541e5f0f0e31a3b862dffe826074907a0b532507d7ee44fce13845bfaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e94541e5f0f0e31a3b862dffe826074907a0b532507d7ee44fce13845bfaa5->leave($__internal_a7e94541e5f0f0e31a3b862dffe826074907a0b532507d7ee44fce13845bfaa5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3d2fb3b48b063e01d5986d12cebabc750eb757042d62e2603d530be4c6b4e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d2fb3b48b063e01d5986d12cebabc750eb757042d62e2603d530be4c6b4e39->enter($__internal_e3d2fb3b48b063e01d5986d12cebabc750eb757042d62e2603d530be4c6b4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\MapExtension')->render((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => (isset($context["map"]) ? $context["map"] : $this->getContext($context, "map"))));
        echo "
    <div class=\"container\">
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
        <br/>
        <div class=\"row\">
            ";
        // line 10
        $this->loadTemplate("@Dam/dam/search.html.twig", "@Dam/dam/list.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
        <br/>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Manufacture</th>
                <th>Model</th>
                <th>Year of Manufacture</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 27
        if ( !(null === (isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")))) {
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dams"]) ? $context["dams"] : $this->getContext($context, "dams")));
            foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
                // line 29
                echo "                    <tr>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_e3d2fb3b48b063e01d5986d12cebabc750eb757042d62e2603d530be4c6b4e39->leave($__internal_e3d2fb3b48b063e01d5986d12cebabc750eb757042d62e2603d530be4c6b4e39_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  103 => 34,  94 => 31,  90 => 30,  87 => 29,  82 => 28,  80 => 27,  62 => 11,  60 => 10,  54 => 7,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Dam/base.html.twig' %}
{% block body %}
    {{ parent() }}
    {{ ivory_google_map(map) }}
    {{ ivory_google_api([map]) }}
    <div class=\"container\">
        <h2>{{ title }}</h2>
        <br/>
        <div class=\"row\">
            {% include '@Dam/dam/search.html.twig' %}
        </div>
        <br/>
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Manufacture</th>
                <th>Model</th>
                <th>Year of Manufacture</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% if damCollection is not null %}
                {% for dam in dams %}
                    <tr>
                        <td>{{ dam.id }}</td>
                        <td>{{ dam.name }}</td>
                    </tr>
                {% endfor %}
            {% endif %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "@Dam/dam/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/list.html.twig");
    }
}
