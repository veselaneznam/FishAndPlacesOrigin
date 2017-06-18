<?php

/* @GoGreen/fish/fish_view.html.twig */
class __TwigTemplate_28523390b648cbcde20e5103dfb6cdb16ee7ee91a4daa8e78c0ad755a4039874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@GoGreen/base.html.twig", "@GoGreen/fish/fish_view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@GoGreen/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49bd04184bcb130ff1e3c81ec23e08e3bf2d4bd7d5882087ba9aba91b3708e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bd04184bcb130ff1e3c81ec23e08e3bf2d4bd7d5882087ba9aba91b3708e96->enter($__internal_49bd04184bcb130ff1e3c81ec23e08e3bf2d4bd7d5882087ba9aba91b3708e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/fish/fish_view.html.twig"));

        $__internal_e98c29e314b00a1af3dd4033a9f31c444aab6358c1d8af6035cea14cc852a540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98c29e314b00a1af3dd4033a9f31c444aab6358c1d8af6035cea14cc852a540->enter($__internal_e98c29e314b00a1af3dd4033a9f31c444aab6358c1d8af6035cea14cc852a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GoGreen/fish/fish_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bd04184bcb130ff1e3c81ec23e08e3bf2d4bd7d5882087ba9aba91b3708e96->leave($__internal_49bd04184bcb130ff1e3c81ec23e08e3bf2d4bd7d5882087ba9aba91b3708e96_prof);

        
        $__internal_e98c29e314b00a1af3dd4033a9f31c444aab6358c1d8af6035cea14cc852a540->leave($__internal_e98c29e314b00a1af3dd4033a9f31c444aab6358c1d8af6035cea14cc852a540_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_cbd3b0c81459ac2315c59ca89c8fd5207ab8c14d03a9d00981c4e9a1296528fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd3b0c81459ac2315c59ca89c8fd5207ab8c14d03a9d00981c4e9a1296528fc->enter($__internal_cbd3b0c81459ac2315c59ca89c8fd5207ab8c14d03a9d00981c4e9a1296528fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_edbe9104d8266a3587fb63bd645d0c86501b5a12cb6f750faa0e074355e3ca0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbe9104d8266a3587fb63bd645d0c86501b5a12cb6f750faa0e074355e3ca0e->enter($__internal_edbe9104d8266a3587fb63bd645d0c86501b5a12cb6f750faa0e074355e3ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"row container_custome\">
            <table class=\"table table-condensed\">
                <thead>
                <tr>
                    <th><h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fish"] ?? $this->getContext($context, "fish")), "name", array()), "html", null, true);
        echo "</h3></th>
                    <th><h3>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Dam List", array(), "messages");
        echo "</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fish"] ?? $this->getContext($context, "fish")), "image", array()), "webPath", array()), "html", null, true);
        echo "\"></td>
                    <td>
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["damCollection"] ?? $this->getContext($context, "damCollection")));
        foreach ($context['_seq'] as $context["_key"] => $context["dam"]) {
            // line 17
            echo "                            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                                <a class=\"thumbnail\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => $this->getAttribute($context["dam"], "id", array()))), "html", null, true);
            echo "\">
                                    <img class=\"img-responsive\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dam"], "mainImage", array()), "webPath", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
            echo "\">
                                    <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["dam"], "name", array()), "html", null, true);
            echo "</span>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </td>

                </tr>
                </tbody>
            </table>
        <div class=\"col-lg-12 text-justify\" >
            <div>";
        // line 30
        echo $this->getAttribute(($context["fish"] ?? $this->getContext($context, "fish")), "description", array());
        echo "</div>
            <div id=\"disqus_thread\"></div>
        </div>
    </div>
    <script>
        //Uncomment when its deployed
        ";
        // line 37
        echo "        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        // line 40
        echo "        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ribar-bg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

";
        
        $__internal_edbe9104d8266a3587fb63bd645d0c86501b5a12cb6f750faa0e074355e3ca0e->leave($__internal_edbe9104d8266a3587fb63bd645d0c86501b5a12cb6f750faa0e074355e3ca0e_prof);

        
        $__internal_cbd3b0c81459ac2315c59ca89c8fd5207ab8c14d03a9d00981c4e9a1296528fc->leave($__internal_cbd3b0c81459ac2315c59ca89c8fd5207ab8c14d03a9d00981c4e9a1296528fc_prof);

    }

    public function getTemplateName()
    {
        return "@GoGreen/fish/fish_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  123 => 39,  121 => 38,  119 => 37,  110 => 30,  102 => 24,  92 => 20,  86 => 19,  82 => 18,  79 => 17,  75 => 16,  70 => 14,  62 => 9,  58 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@GoGreen/base.html.twig' %}
{% block content %}
    {{ parent() }}
    <div class=\"row container_custome\">
            <table class=\"table table-condensed\">
                <thead>
                <tr>
                    <th><h3>{{ fish.name }}</h3></th>
                    <th><h3>{% trans %}Dam List {% endtrans %}</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src=\"{{ fish.image.webPath}}\"></td>
                    <td>
                        {% for dam in damCollection %}
                            <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                                <a class=\"thumbnail\" href=\"{{ path('dam_view', {'id': dam.id}) }}\">
                                    <img class=\"img-responsive\" src=\"{{  dam.mainImage.webPath }}\" alt=\"{{ dam.name }}\">
                                    <span>{{ dam.name }}</span>
                                </a>
                            </div>
                        {% endfor %}
                    </td>

                </tr>
                </tbody>
            </table>
        <div class=\"col-lg-12 text-justify\" >
            <div>{{ fish.description |raw }}</div>
            <div id=\"disqus_thread\"></div>
        </div>
    </div>
    <script>
        //Uncomment when its deployed
        {#var disqus_config = function () {#}
        {#this.page.url = {{ path('dam_view', {'id': dam.id}) }};  // Replace PAGE_URL with your page's canonical URL variable#}
        {#this.page.identifier = {{ path(dam.id) }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable#}
        {#};#}
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://ribar-bg.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>

{% endblock %}
", "@GoGreen/fish/fish_view.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views/fish/fish_view.html.twig");
    }
}
