<?php

/* @GoGreen/dam/map_info_window.html.twig */
class __TwigTemplate_a5871e5d6da63736fec8e94b5ebd938195ad02538f15eba3184c5bbfda29b11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c1cfd0db748ae3becc066f6957bd91aad005ca53aaecf4cb88c5c6082e7ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c1cfd0db748ae3becc066f6957bd91aad005ca53aaecf4cb88c5c6082e7ed7->enter($__internal_62c1cfd0db748ae3becc066f6957bd91aad005ca53aaecf4cb88c5c6082e7ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/map_info_window.html.twig"));

        $__internal_75a062f810fc2419701a8551b1b1b489132a2a3c9768bb8d5a09d079d61a78fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a062f810fc2419701a8551b1b1b489132a2a3c9768bb8d5a09d079d61a78fd->enter($__internal_75a062f810fc2419701a8551b1b1b489132a2a3c9768bb8d5a09d079d61a78fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/map_info_window.html.twig"));

        // line 1
        echo "<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h5 id=\"firstHeading\" class=\"firstHeading\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h5>
    <div id=\"bodyContent\">
        <div class=\"col-lg-6 text-justify\">
            <table class=\"table table-condensed\">
                <thead>
                <tr colspan=\"2\">
                    <th>

                        ";
        // line 12
        if ((($context["mainImage"] ?? $this->getContext($context, "mainImage")) != null)) {
            // line 13
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, ($context["mainImage"] ?? $this->getContext($context, "mainImage")), "html", null, true);
            echo "\" width=\"80px\" title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" >
                        ";
        } else {
            // line 15
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg"), "html", null, true);
            echo "\" class=\"img-responsive\">
                        ";
        }
        // line 17
        echo "                    </th>
                    <th><h5>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Info", array(), "messages");
        echo "</h5></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rating", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, ($context["rating"] ?? $this->getContext($context, "rating")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Price", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, ($context["priceProPerson"] ?? $this->getContext($context, "priceProPerson")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Address", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, ($context["address"] ?? $this->getContext($context, "address")), "html", null, true);
        echo "</td>
                </tr>
                    <td><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_map_direction", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Directions", array(), "messages");
        echo "</a></td>
                    <td><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("More details", array(), "messages");
        echo "</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_62c1cfd0db748ae3becc066f6957bd91aad005ca53aaecf4cb88c5c6082e7ed7->leave($__internal_62c1cfd0db748ae3becc066f6957bd91aad005ca53aaecf4cb88c5c6082e7ed7_prof);

        
        $__internal_75a062f810fc2419701a8551b1b1b489132a2a3c9768bb8d5a09d079d61a78fd->leave($__internal_75a062f810fc2419701a8551b1b1b489132a2a3c9768bb8d5a09d079d61a78fd_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/map_info_window.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  91 => 31,  84 => 29,  76 => 26,  68 => 23,  60 => 18,  57 => 17,  51 => 15,  43 => 13,  41 => 12,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h5 id=\"firstHeading\" class=\"firstHeading\">{{ name }}</h5>
    <div id=\"bodyContent\">
        <div class=\"col-lg-6 text-justify\">
            <table class=\"table table-condensed\">
                <thead>
                <tr colspan=\"2\">
                    <th>

                        {% if mainImage != null %}
                            <img src=\"{{ mainImage }}\" width=\"80px\" title=\"{{ name }}\" >
                        {% else %}
                            <img src=\"{{ asset('uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg') }}\" class=\"img-responsive\">
                        {% endif %}
                    </th>
                    <th><h5>{% trans %}Info{% endtrans %}</h5></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">{% trans %}Rating{% endtrans %}</td> <td>{{ rating }}</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">{% trans %}Price{% endtrans %}</td> <td>{{ priceProPerson }}</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">{% trans %}Address{% endtrans %}</td> <td>{{ address }}</td>
                </tr>
                    <td><a href=\"{{ path('dam_map_direction', {'id': id}) }}\">{% trans %}Directions{% endtrans %}</a></td>
                    <td><a href=\"{{ path('dam_view', {'id': id}) }}\">{% trans %}More details{% endtrans %}</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
", "@GoGreen/dam/map_info_window.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/map_info_window.html.twig");
    }
}
