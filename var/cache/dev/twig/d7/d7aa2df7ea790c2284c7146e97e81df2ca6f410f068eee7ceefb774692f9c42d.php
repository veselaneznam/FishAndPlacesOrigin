<?php

/* @Dam/dam/map_info_window.html.twig */
class __TwigTemplate_24fdfcbc21a9e4ac8a99a03d909219f66f4b755ef7d0e311c605bee5833e384a extends Twig_Template
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
        $__internal_feadcc1dd27e15565c5c7c66a90f94038d3f89bf2bdef706e3bee72f31b39d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feadcc1dd27e15565c5c7c66a90f94038d3f89bf2bdef706e3bee72f31b39d58->enter($__internal_feadcc1dd27e15565c5c7c66a90f94038d3f89bf2bdef706e3bee72f31b39d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_info_window.html.twig"));

        $__internal_9b0206447f6e566a4e7bc34d6e8ea3e8bf3df66f1ac0431339328989ab701010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0206447f6e566a4e7bc34d6e8ea3e8bf3df66f1ac0431339328989ab701010->enter($__internal_9b0206447f6e566a4e7bc34d6e8ea3e8bf3df66f1ac0431339328989ab701010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/map_info_window.html.twig"));

        // line 1
        echo "<div id=\"content\">
    <div id=\"siteNotice\">
    </div>
    <h5 id=\"firstHeading\" class=\"firstHeading\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h5>
    <div id=\"bodyContent\">
        <div class=\"col-lg-6 text-justify\">
            <table class=\"table table-condensed\">
                <thead>
                <tr colspan=\"2\">
                    <th><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["mainImage"]) ? $context["mainImage"] : $this->getContext($context, "mainImage")), "html", null, true);
        echo "\" width=\"80px\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" ></th>
                    <th><h5>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Info", array(), "messages");
        echo "</h5></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Rating", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, (isset($context["rating"]) ? $context["rating"] : $this->getContext($context, "rating")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Price", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, (isset($context["priceProPerson"]) ? $context["priceProPerson"] : $this->getContext($context, "priceProPerson")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"color: green; font-weight: bold;\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Address", array(), "messages");
        echo "</td> <td>";
        echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "html", null, true);
        echo "</td>
                </tr>
                    <td><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_map_direction", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Directions", array(), "messages");
        echo "</a></td>
                    <td><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
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
        
        $__internal_feadcc1dd27e15565c5c7c66a90f94038d3f89bf2bdef706e3bee72f31b39d58->leave($__internal_feadcc1dd27e15565c5c7c66a90f94038d3f89bf2bdef706e3bee72f31b39d58_prof);

        
        $__internal_9b0206447f6e566a4e7bc34d6e8ea3e8bf3df66f1ac0431339328989ab701010->leave($__internal_9b0206447f6e566a4e7bc34d6e8ea3e8bf3df66f1ac0431339328989ab701010_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/map_info_window.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  76 => 24,  69 => 22,  61 => 19,  53 => 16,  45 => 11,  39 => 10,  30 => 4,  25 => 1,);
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
                    <th><img src=\"{{ mainImage }}\" width=\"80px\" title=\"{{ name }}\" ></th>
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
", "@Dam/dam/map_info_window.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/map_info_window.html.twig");
    }
}
