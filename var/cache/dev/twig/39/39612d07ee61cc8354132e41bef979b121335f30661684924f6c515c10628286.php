<?php

/* @GoGreen/dam/dam_fish_collection.html.twig */
class __TwigTemplate_3d442754dbeda389bbea8483fe0b7ddf857093ff9a35198283e88bfe62445331 extends Twig_Template
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
        $__internal_cc2a584c8a117be01cb2c61bb35c931227e36cd3a822e36810fb4b9b38658dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2a584c8a117be01cb2c61bb35c931227e36cd3a822e36810fb4b9b38658dfc->enter($__internal_cc2a584c8a117be01cb2c61bb35c931227e36cd3a822e36810fb4b9b38658dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/dam_fish_collection.html.twig"));

        $__internal_77ddd1da9291f094d785057579bfebfdee4c5cda8437e3c9b73207292cc34b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ddd1da9291f094d785057579bfebfdee4c5cda8437e3c9b73207292cc34b63->enter($__internal_77ddd1da9291f094d785057579bfebfdee4c5cda8437e3c9b73207292cc34b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/dam/dam_fish_collection.html.twig"));

        // line 1
        echo "
<table class=\"table table-condensed\">
    <thead>
    <tr colspan=\"2\">
        <th><h3>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fish in", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "</h3></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["dam"] ?? $this->getContext($context, "dam")), "fishCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fish"]) {
            // line 10
            echo "    <tr>
        <td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fish_view", array("id" => $this->getAttribute($context["fish"], "id", array()))), "html", null, true);
            echo "\">

                <img src= \"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fish"], "image", array()), "webPath", array()), "html", null, true);
            echo "\" width=\"100px\" height=\"40px\">
                <span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["fish"], "name", array()), "html", null, true);
            echo "</span></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tbody>
</table>
";
        
        $__internal_cc2a584c8a117be01cb2c61bb35c931227e36cd3a822e36810fb4b9b38658dfc->leave($__internal_cc2a584c8a117be01cb2c61bb35c931227e36cd3a822e36810fb4b9b38658dfc_prof);

        
        $__internal_77ddd1da9291f094d785057579bfebfdee4c5cda8437e3c9b73207292cc34b63->leave($__internal_77ddd1da9291f094d785057579bfebfdee4c5cda8437e3c9b73207292cc34b63_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/dam/dam_fish_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  56 => 14,  52 => 13,  47 => 11,  44 => 10,  40 => 9,  31 => 5,  25 => 1,);
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
<table class=\"table table-condensed\">
    <thead>
    <tr colspan=\"2\">
        <th><h3>{% trans %}Fish in {% endtrans %} {{ dam.name }}</h3></th>
    </tr>
    </thead>
    <tbody>
    {% for fish in dam.fishCollection %}
    <tr>
        <td><a href=\"{{ path('fish_view', {'id': fish.id}) }}\">

                <img src= \"{{ fish.image.webPath}}\" width=\"100px\" height=\"40px\">
                <span>{{ fish.name }}</span></a></td>
    </tr>
    {% endfor %}
    </tbody>
</table>
", "@GoGreen/dam/dam_fish_collection.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/dam/dam_fish_collection.html.twig");
    }
}
