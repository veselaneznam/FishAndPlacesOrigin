<?php

/* @GoGreen/dam/list.html.twig */
class __TwigTemplate_dc435dd8037d4ff5c22e54471ff80c6728f5ceadf60e0fdd2fbe04684f7bcb0e extends Twig_Template
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
        $__internal_47a3d7f5b27ebba5f13c9e879aa9c166ae187d8dd30a6a643b939365d003b88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a3d7f5b27ebba5f13c9e879aa9c166ae187d8dd30a6a643b939365d003b88a->enter($__internal_47a3d7f5b27ebba5f13c9e879aa9c166ae187d8dd30a6a643b939365d003b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/list.html.twig"));

        $__internal_ce003520ab11bd0bba779733b8e9b965f7ada929e9d58b3cb8988179c503faea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce003520ab11bd0bba779733b8e9b965f7ada929e9d58b3cb8988179c503faea->enter($__internal_ce003520ab11bd0bba779733b8e9b965f7ada929e9d58b3cb8988179c503faea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/list.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (array_key_exists("damCollection", $context)) {
            // line 3
            echo "<div class=\"row text-center\">

    <div class=\"col-lg-10\">
        <h3 class=\"page-header\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</h3>
    </div>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["damCollection"] ?? $this->getContext($context, "damCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
                // line 9
                echo "    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
        <a class=\"thumbnail\" href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 11
                if (($this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()) != null)) {
                    // line 12
                    echo "                <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                    echo "\">
            ";
                } else {
                    // line 14
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg"), "html", null, true);
                    echo "\" class=\"img-responsive\">
            ";
                }
                // line 16
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
                echo "</span>
        </a>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</div>

";
        }
        
        $__internal_47a3d7f5b27ebba5f13c9e879aa9c166ae187d8dd30a6a643b939365d003b88a->leave($__internal_47a3d7f5b27ebba5f13c9e879aa9c166ae187d8dd30a6a643b939365d003b88a_prof);

        
        $__internal_ce003520ab11bd0bba779733b8e9b965f7ada929e9d58b3cb8988179c503faea->leave($__internal_ce003520ab11bd0bba779733b8e9b965f7ada929e9d58b3cb8988179c503faea_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  67 => 16,  61 => 14,  53 => 12,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  35 => 6,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if damCollection is defined %}
<div class=\"row text-center\">

    <div class=\"col-lg-10\">
        <h3 class=\"page-header\">{{ title }}</h3>
    </div>
    {% for dam in damCollection %}
    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
        <a class=\"thumbnail\" href=\"{{ path('dam_view', {'id': dam.id}) }}\">
            {% if dam.mainImage.webPath != null %}
                <img class=\"img-responsive\" src=\"{{  dam.mainImage.webPath }}\" alt=\"{{ dam.name }}\">
            {% else %}
                <img src=\"{{ asset('uploads/images/4b009f43fe1cb51540022ad3fdcca0e7.jpeg') }}\" class=\"img-responsive\">
            {% endif %}
            <span>{{ dam.name }}</span>
        </a>
    </div>
    {% endfor %}
</div>

{% endif %}
", "@GoGreen/dam/list.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/list.html.twig");
    }
}
