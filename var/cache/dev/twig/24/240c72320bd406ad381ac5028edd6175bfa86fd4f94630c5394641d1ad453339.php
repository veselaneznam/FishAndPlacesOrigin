<?php

/* @Dam/dam/dam_fish_collection.html.twig */
class __TwigTemplate_dfa3f7f3002cb27d4874fded3a13b1406246c7a47a0f0de7ad46cab1140fb765 extends Twig_Template
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
        $__internal_b4393392ad938d204e0414a9633276da53dc234de6fc2ff5850d091201513e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4393392ad938d204e0414a9633276da53dc234de6fc2ff5850d091201513e78->enter($__internal_b4393392ad938d204e0414a9633276da53dc234de6fc2ff5850d091201513e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/dam_fish_collection.html.twig"));

        $__internal_9f809c894141a9481a8f223e385f60211531621f09747d66e50af77d84d04a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f809c894141a9481a8f223e385f60211531621f09747d66e50af77d84d04a2d->enter($__internal_9f809c894141a9481a8f223e385f60211531621f09747d66e50af77d84d04a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dam/dam/dam_fish_collection.html.twig"));

        // line 1
        echo "
<table class=\"table table-condensed\">
    <thead>
    <tr colspan=\"2\">
        <th><h3>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Fish in", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "name", array()), "html", null, true);
        echo "</h3></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dam"]) ? $context["dam"] : $this->getContext($context, "dam")), "fishCollection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["fish"]) {
            // line 10
            echo "    <tr>
        <td><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fish_view", array("id" => $this->getAttribute($context["fish"], "id", array()))), "html", null, true);
            echo "\"><img src= \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fish"], "image", array()), "webPath", array()), "html", null, true);
            echo "\" width=\"100px\" height=\"40px\">
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["fish"], "name", array()), "html", null, true);
            echo "</span></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fish'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_b4393392ad938d204e0414a9633276da53dc234de6fc2ff5850d091201513e78->leave($__internal_b4393392ad938d204e0414a9633276da53dc234de6fc2ff5850d091201513e78_prof);

        
        $__internal_9f809c894141a9481a8f223e385f60211531621f09747d66e50af77d84d04a2d->leave($__internal_9f809c894141a9481a8f223e385f60211531621f09747d66e50af77d84d04a2d_prof);

    }

    public function getTemplateName()
    {
        return "@Dam/dam/dam_fish_collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  53 => 12,  47 => 11,  44 => 10,  40 => 9,  31 => 5,  25 => 1,);
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
        <td><a href=\"{{ path('fish_view', {'id': fish.id}) }}\"><img src= \"{{ fish.image.webPath}}\" width=\"100px\" height=\"40px\">
                <span>{{ fish.name }}</span></a></td>
    </tr>
    {% endfor %}
    </tbody>
</table>
", "@Dam/dam/dam_fish_collection.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views/dam/dam_fish_collection.html.twig");
    }
}
