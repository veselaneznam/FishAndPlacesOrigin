<?php

/* IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig */
class __TwigTemplate_d52f5308cfd8d764eee02b521f160e0e5a897fac73ef2c8112fe787b1395b920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'place_autocomplete_widget' => array($this, 'block_place_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e24dc21157f9ac1d853821874d36a548da3df237f06ce09e5709fee07ffa371d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24dc21157f9ac1d853821874d36a548da3df237f06ce09e5709fee07ffa371d->enter($__internal_e24dc21157f9ac1d853821874d36a548da3df237f06ce09e5709fee07ffa371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig"));

        $__internal_0a4f4b2a903098152a8b88ef9d9e73c3af6df6f1c867fbd855cd4c0f9f25cf60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4f4b2a903098152a8b88ef9d9e73c3af6df6f1c867fbd855cd4c0f9f25cf60->enter($__internal_0a4f4b2a903098152a8b88ef9d9e73c3af6df6f1c867fbd855cd4c0f9f25cf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_e24dc21157f9ac1d853821874d36a548da3df237f06ce09e5709fee07ffa371d->leave($__internal_e24dc21157f9ac1d853821874d36a548da3df237f06ce09e5709fee07ffa371d_prof);

        
        $__internal_0a4f4b2a903098152a8b88ef9d9e73c3af6df6f1c867fbd855cd4c0f9f25cf60->leave($__internal_0a4f4b2a903098152a8b88ef9d9e73c3af6df6f1c867fbd855cd4c0f9f25cf60_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_b3cfad81f1de55beedb4c37cb29303ce347db28a5939621552c2c204f68504a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cfad81f1de55beedb4c37cb29303ce347db28a5939621552c2c204f68504a3->enter($__internal_b3cfad81f1de55beedb4c37cb29303ce347db28a5939621552c2c204f68504a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        $__internal_1f60577c4b7a8df526c8984cef4fcd1996dd3897634d987a7a289332b06baef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f60577c4b7a8df526c8984cef4fcd1996dd3897634d987a7a289332b06baef9->enter($__internal_1f60577c4b7a8df526c8984cef4fcd1996dd3897634d987a7a289332b06baef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension')->render((isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete")), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        echo "
    ";
        // line 3
        if ((isset($context["api"]) ? $context["api"] : $this->getContext($context, "api"))) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => (isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete"))));
            echo "
    ";
        }
        
        $__internal_1f60577c4b7a8df526c8984cef4fcd1996dd3897634d987a7a289332b06baef9->leave($__internal_1f60577c4b7a8df526c8984cef4fcd1996dd3897634d987a7a289332b06baef9_prof);

        
        $__internal_b3cfad81f1de55beedb4c37cb29303ce347db28a5939621552c2c204f68504a3->leave($__internal_b3cfad81f1de55beedb4c37cb29303ce347db28a5939621552c2c204f68504a3_prof);

    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block place_autocomplete_widget %}
    {{ ivory_google_place_autocomplete(autocomplete, attr) }}
    {% if api %}
        {{ ivory_google_api([autocomplete]) }}
    {% endif %}
{% endblock %}
", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/var/cache/dev/../../../vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
