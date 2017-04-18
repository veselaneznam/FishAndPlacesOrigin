<?php

/* @Admin/dam/list.html.twig */
class __TwigTemplate_5201300150e5128af581a847d188b4954ec08ec20e4afbb7bf635258ef4ac80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/dam/list.html.twig", 1);
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
        $__internal_26186ef684fa97ae05f6b13dc376ddf5af9c33bcfe0269de95518e1a5b57b178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26186ef684fa97ae05f6b13dc376ddf5af9c33bcfe0269de95518e1a5b57b178->enter($__internal_26186ef684fa97ae05f6b13dc376ddf5af9c33bcfe0269de95518e1a5b57b178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $__internal_3d02e8642bfe50c31ba1bf8039636f78cbee5992ba949460ada90dccf1c4be99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d02e8642bfe50c31ba1bf8039636f78cbee5992ba949460ada90dccf1c4be99->enter($__internal_3d02e8642bfe50c31ba1bf8039636f78cbee5992ba949460ada90dccf1c4be99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26186ef684fa97ae05f6b13dc376ddf5af9c33bcfe0269de95518e1a5b57b178->leave($__internal_26186ef684fa97ae05f6b13dc376ddf5af9c33bcfe0269de95518e1a5b57b178_prof);

        
        $__internal_3d02e8642bfe50c31ba1bf8039636f78cbee5992ba949460ada90dccf1c4be99->leave($__internal_3d02e8642bfe50c31ba1bf8039636f78cbee5992ba949460ada90dccf1c4be99_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eadb86d2cb819ec83eab39443da4b3378ada93e31e90a5bf2938402f814fda5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadb86d2cb819ec83eab39443da4b3378ada93e31e90a5bf2938402f814fda5e->enter($__internal_eadb86d2cb819ec83eab39443da4b3378ada93e31e90a5bf2938402f814fda5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_810b977974511b32b1e39ae3b0c64ce5180353594a21222a29172082f4f80323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810b977974511b32b1e39ae3b0c64ce5180353594a21222a29172082f4f80323->enter($__internal_810b977974511b32b1e39ae3b0c64ce5180353594a21222a29172082f4f80323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2>Dam List</h2>
        <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_dam");
        echo "\" class=\"btn btn-info\" role=\"button\">Add Dam</a>
        ";
        // line 7
        $this->loadTemplate("@Admin/dam/search.html.twig", "@Admin/dam/list.html.twig", 7)->display($context);
        // line 8
        echo "        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Is Active</th>
                <th>Show on first page</th>
                <th>Price pro person</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        if ( !(null === (isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")))) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
                // line 22
                echo "                    <tr>
                        <td><img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
                echo "\" width=\"100px\" class=\"thumbnail\"></td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 26
                    echo "                            <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 28
                    echo "                            <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 30
                echo "                        </td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "showOnFirstPage", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "priceProPerson", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_list", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Add Images</a>
                            ";
                // line 38
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 39
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Deactivate</a>
                            ";
                } else {
                    // line 42
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Activate</a>
                            ";
                }
                // line 45
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
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
        
        $__internal_810b977974511b32b1e39ae3b0c64ce5180353594a21222a29172082f4f80323->leave($__internal_810b977974511b32b1e39ae3b0c64ce5180353594a21222a29172082f4f80323_prof);

        
        $__internal_eadb86d2cb819ec83eab39443da4b3378ada93e31e90a5bf2938402f814fda5e->leave($__internal_eadb86d2cb819ec83eab39443da4b3378ada93e31e90a5bf2938402f814fda5e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/dam/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  150 => 48,  142 => 45,  135 => 42,  128 => 39,  126 => 38,  121 => 36,  116 => 34,  111 => 32,  107 => 31,  104 => 30,  100 => 28,  96 => 26,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  78 => 21,  76 => 20,  62 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <a href=\"{{ path('create_dam') }}\" class=\"btn btn-info\" role=\"button\">Add Dam</a>
        {% include '@Admin/dam/search.html.twig' %}
        <table class=\"table table-striped\">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Is Active</th>
                <th>Show on first page</th>
                <th>Price pro person</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {% if damCollection is not null %}
                {% for dam in damCollection %}
                    <tr>
                        <td><img src=\"{{ dam.mainImage.webPath }}\" width=\"100px\" class=\"thumbnail\"></td>
                        <td>{{ dam.name }}</td>
                        <td>{% if dam.isActive == 1 %}
                            <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            {% else %}
                            <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            {% endif %}
                        </td>
                        <td>{{ dam.showOnFirstPage }}</td>
                        <td>{{ dam.priceProPerson }}</td>
                        <td>
                            <a href=\"{{ path('edit_dam', { 'id': dam.id }) }}\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            <a href=\"{{ path('dam_images_list', { 'id': dam.id }) }}\" class=\"btn btn-success\"
                               role=\"button\">Add Images</a>
                            {% if dam.isActive == 1 %}
                                <a href=\"{{ path('deactivate_dam', { 'id': dam.id }) }}\"
                                   class=\"btn delete btn-danger\" role=\"button\">Deactivate</a>
                            {% else %}
                                <a href=\"{{ path('activate_dam', { 'id': dam.id }) }}\"
                                   class=\"btn delete btn-danger\" role=\"button\">Activate</a>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

            {% endif %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "@Admin/dam/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/dam/list.html.twig");
    }
}
