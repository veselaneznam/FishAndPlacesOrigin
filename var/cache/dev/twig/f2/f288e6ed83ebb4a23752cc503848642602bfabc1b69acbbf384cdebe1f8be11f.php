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
        $__internal_66eab8a61b96ca6f18e1d343c90e3d15ea282ecc890136cfe13b51047a7fea18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66eab8a61b96ca6f18e1d343c90e3d15ea282ecc890136cfe13b51047a7fea18->enter($__internal_66eab8a61b96ca6f18e1d343c90e3d15ea282ecc890136cfe13b51047a7fea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $__internal_6c6a9c0d7055078c2c328f21c71c9ad07e99c0a0b1c08466304435a7dd153df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6a9c0d7055078c2c328f21c71c9ad07e99c0a0b1c08466304435a7dd153df5->enter($__internal_6c6a9c0d7055078c2c328f21c71c9ad07e99c0a0b1c08466304435a7dd153df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66eab8a61b96ca6f18e1d343c90e3d15ea282ecc890136cfe13b51047a7fea18->leave($__internal_66eab8a61b96ca6f18e1d343c90e3d15ea282ecc890136cfe13b51047a7fea18_prof);

        
        $__internal_6c6a9c0d7055078c2c328f21c71c9ad07e99c0a0b1c08466304435a7dd153df5->leave($__internal_6c6a9c0d7055078c2c328f21c71c9ad07e99c0a0b1c08466304435a7dd153df5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3badf04c7fa4bcf3c551bffbfeb38fb41531aa6e22bb146b2afa2b24305e3bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3badf04c7fa4bcf3c551bffbfeb38fb41531aa6e22bb146b2afa2b24305e3bfe->enter($__internal_3badf04c7fa4bcf3c551bffbfeb38fb41531aa6e22bb146b2afa2b24305e3bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec309d941209e4059e6523e32d282afa8d9df01cd513cfad900362ceef8a041b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec309d941209e4059e6523e32d282afa8d9df01cd513cfad900362ceef8a041b->enter($__internal_ec309d941209e4059e6523e32d282afa8d9df01cd513cfad900362ceef8a041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <td>
                            ";
                // line 24
                if (($this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()) != null)) {
                    // line 25
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
                    echo "\" width=\"100px\" class=\"thumbnail\">
                            ";
                } else {
                    // line 27
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg"), "html", null, true);
                    echo "\" width=\"100px\" class=\"thumbnail\">
                            ";
                }
                // line 29
                echo "                        </td>
                        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 31
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 32
                    echo "                            <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 34
                    echo "                            <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 36
                echo "                        </td>
                        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "showOnFirstPage", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "priceProPerson", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_list", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Add Images</a>
                            ";
                // line 44
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Deactivate</a>
                            ";
                } else {
                    // line 48
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Activate</a>
                            ";
                }
                // line 51
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
            ";
        }
        // line 56
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_ec309d941209e4059e6523e32d282afa8d9df01cd513cfad900362ceef8a041b->leave($__internal_ec309d941209e4059e6523e32d282afa8d9df01cd513cfad900362ceef8a041b_prof);

        
        $__internal_3badf04c7fa4bcf3c551bffbfeb38fb41531aa6e22bb146b2afa2b24305e3bfe->leave($__internal_3badf04c7fa4bcf3c551bffbfeb38fb41531aa6e22bb146b2afa2b24305e3bfe_prof);

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
        return array (  168 => 56,  164 => 54,  156 => 51,  149 => 48,  142 => 45,  140 => 44,  135 => 42,  130 => 40,  125 => 38,  121 => 37,  118 => 36,  114 => 34,  110 => 32,  108 => 31,  104 => 30,  101 => 29,  95 => 27,  89 => 25,  87 => 24,  83 => 22,  78 => 21,  76 => 20,  62 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                        <td>
                            {% if dam.mainImage.webPath != null %}
                            <img src=\"{{ dam.mainImage.webPath }}\" width=\"100px\" class=\"thumbnail\">
                            {% else %}
                                <img src=\"{{ asset('uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg') }}\" width=\"100px\" class=\"thumbnail\">
                            {% endif %}
                        </td>
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
