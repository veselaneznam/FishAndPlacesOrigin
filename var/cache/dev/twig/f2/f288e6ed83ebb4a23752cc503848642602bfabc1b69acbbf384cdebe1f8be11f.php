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
        $__internal_9c012b4fc270e627cb26be7594eeb410299ba7d0e94ca08e5e2968beda823afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c012b4fc270e627cb26be7594eeb410299ba7d0e94ca08e5e2968beda823afb->enter($__internal_9c012b4fc270e627cb26be7594eeb410299ba7d0e94ca08e5e2968beda823afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $__internal_02ab26101546767bc94a885544015f4135fb0d0b8b113c200e13193d03323a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ab26101546767bc94a885544015f4135fb0d0b8b113c200e13193d03323a25->enter($__internal_02ab26101546767bc94a885544015f4135fb0d0b8b113c200e13193d03323a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/dam/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c012b4fc270e627cb26be7594eeb410299ba7d0e94ca08e5e2968beda823afb->leave($__internal_9c012b4fc270e627cb26be7594eeb410299ba7d0e94ca08e5e2968beda823afb_prof);

        
        $__internal_02ab26101546767bc94a885544015f4135fb0d0b8b113c200e13193d03323a25->leave($__internal_02ab26101546767bc94a885544015f4135fb0d0b8b113c200e13193d03323a25_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe81ffb6b84b943956a9eee43b066aa9c88df0baf41660b69c16fa4f51e8e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe81ffb6b84b943956a9eee43b066aa9c88df0baf41660b69c16fa4f51e8e48->enter($__internal_fbe81ffb6b84b943956a9eee43b066aa9c88df0baf41660b69c16fa4f51e8e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0785910a64092d1e5f79011c515d7af5069681c6da2f565cd0cd50dd3e01b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0785910a64092d1e5f79011c515d7af5069681c6da2f565cd0cd50dd3e01b2e->enter($__internal_d0785910a64092d1e5f79011c515d7af5069681c6da2f565cd0cd50dd3e01b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("import_json");
        echo "\" class=\"btn btn-info\" role=\"button\">Import from Json</a>
        ";
        // line 8
        $this->loadTemplate("@Admin/dam/search.html.twig", "@Admin/dam/list.html.twig", 8)->display($context);
        // line 9
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
        // line 21
        if ( !(null === (isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")))) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["damCollection"]) ? $context["damCollection"] : $this->getContext($context, "damCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
                // line 23
                echo "                    <tr>
                        <td>
                            ";
                // line 25
                if (($this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()) != null)) {
                    // line 26
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
                    echo "\" width=\"100px\" class=\"thumbnail\">
                            ";
                } else {
                    // line 28
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg"), "html", null, true);
                    echo "\" width=\"100px\" class=\"thumbnail\">
                            ";
                }
                // line 30
                echo "                        </td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 33
                    echo "                            <span class=\"glyphicon glyphicon-ok\" style=\"color: green\" aria-hidden=\"true\"></span>
                            ";
                } else {
                    // line 35
                    echo "                            <span class=\"glyphicon glyphicon-remove red\" style=\"color: red\" aria-hidden=\"true\"></span>
                            ";
                }
                // line 37
                echo "                        </td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "showOnFirstPage", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "priceProPerson", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Edit</a>
                            <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_list", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               role=\"button\">Add Images</a>
                            ";
                // line 45
                if (($this->getAttribute($context["dam"], "isActive", array()) == 1)) {
                    // line 46
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deactivate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Deactivate</a>
                            ";
                } else {
                    // line 49
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activate_dam", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                    echo "\"
                                   class=\"btn delete btn-danger\" role=\"button\">Activate</a>
                            ";
                }
                // line 52
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
            ";
        }
        // line 57
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_d0785910a64092d1e5f79011c515d7af5069681c6da2f565cd0cd50dd3e01b2e->leave($__internal_d0785910a64092d1e5f79011c515d7af5069681c6da2f565cd0cd50dd3e01b2e_prof);

        
        $__internal_fbe81ffb6b84b943956a9eee43b066aa9c88df0baf41660b69c16fa4f51e8e48->leave($__internal_fbe81ffb6b84b943956a9eee43b066aa9c88df0baf41660b69c16fa4f51e8e48_prof);

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
        return array (  172 => 57,  168 => 55,  160 => 52,  153 => 49,  146 => 46,  144 => 45,  139 => 43,  134 => 41,  129 => 39,  125 => 38,  122 => 37,  118 => 35,  114 => 33,  112 => 32,  108 => 31,  105 => 30,  99 => 28,  93 => 26,  91 => 25,  87 => 23,  82 => 22,  80 => 21,  66 => 9,  64 => 8,  60 => 7,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
        <a href=\"{{ path('import_json') }}\" class=\"btn btn-info\" role=\"button\">Import from Json</a>
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
