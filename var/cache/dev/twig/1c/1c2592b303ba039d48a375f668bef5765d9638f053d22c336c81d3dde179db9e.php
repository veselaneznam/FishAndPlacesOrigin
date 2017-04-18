<?php

/* @Admin/damImage/list.html.twig */
class __TwigTemplate_321d2b113a4a2c0225b1cdcdd3d923f83a1e3bd3473160c5ef11fbdcfae0c7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/damImage/list.html.twig", 1);
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
        $__internal_071fd4106a5dda718b872261afe9636cad4a416e004e51b57735e53a50ab6ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071fd4106a5dda718b872261afe9636cad4a416e004e51b57735e53a50ab6ae9->enter($__internal_071fd4106a5dda718b872261afe9636cad4a416e004e51b57735e53a50ab6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/damImage/list.html.twig"));

        $__internal_cc31af966829eabe0e4bae1f71316613df7a5bc71b7d29b1b6b0abb80d58fec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc31af966829eabe0e4bae1f71316613df7a5bc71b7d29b1b6b0abb80d58fec4->enter($__internal_cc31af966829eabe0e4bae1f71316613df7a5bc71b7d29b1b6b0abb80d58fec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/damImage/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_071fd4106a5dda718b872261afe9636cad4a416e004e51b57735e53a50ab6ae9->leave($__internal_071fd4106a5dda718b872261afe9636cad4a416e004e51b57735e53a50ab6ae9_prof);

        
        $__internal_cc31af966829eabe0e4bae1f71316613df7a5bc71b7d29b1b6b0abb80d58fec4->leave($__internal_cc31af966829eabe0e4bae1f71316613df7a5bc71b7d29b1b6b0abb80d58fec4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f7c8a3759587c3998e830d8a09c740ba0bd35acf63fe80f3281995deee08fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f7c8a3759587c3998e830d8a09c740ba0bd35acf63fe80f3281995deee08fd->enter($__internal_47f7c8a3759587c3998e830d8a09c740ba0bd35acf63fe80f3281995deee08fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b639825988f0719cba6b961ddbbb524c9240133365b709cdc9f1d1d6f8a95f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b639825988f0719cba6b961ddbbb524c9240133365b709cdc9f1d1d6f8a95f83->enter($__internal_b639825988f0719cba6b961ddbbb524c9240133365b709cdc9f1d1d6f8a95f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        ";
        // line 5
        $this->loadTemplate("@Admin/add_images.html.twig", "@Admin/damImage/list.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        if (array_key_exists("damImageCollection", $context)) {
            // line 7
            echo "            <div class=\"row text-center\">

                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["damImageCollection"]) ? $context["damImageCollection"] : $this->getContext($context, "damImageCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["damImage"]) {
                // line 10
                echo "                    ";
                if (($this->getAttribute($context["damImage"], "isMain", array()) == 0)) {
                    // line 11
                    echo "                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <a class=\"thumbnail\" href=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_view", array("id" => $this->getAttribute($this->getAttribute($context["damImage"], "dam", array()), "id", array()))), "html", null, true);
                    echo "\">
                            <img class=\"img-responsive\" src=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["damImage"], "webPath", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["damImage"], "dam", array()), "name", array()), "html", null, true);
                    echo "\">
                            <span>";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["damImage"], "dam", array()), "name", array()), "html", null, true);
                    echo "</span>
                        </a>
                        <a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dam_images_delete", array("id" => $this->getAttribute($context["damImage"], "id", array()))), "html", null, true);
                    echo "\"
                           class=\"btn delete btn-danger\" role=\"button\">Delete
                        </a>
                    </div>
                ";
                }
                // line 21
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['damImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            </div>

        ";
        }
        // line 25
        echo "    </div>
";
        
        $__internal_b639825988f0719cba6b961ddbbb524c9240133365b709cdc9f1d1d6f8a95f83->leave($__internal_b639825988f0719cba6b961ddbbb524c9240133365b709cdc9f1d1d6f8a95f83_prof);

        
        $__internal_47f7c8a3759587c3998e830d8a09c740ba0bd35acf63fe80f3281995deee08fd->leave($__internal_47f7c8a3759587c3998e830d8a09c740ba0bd35acf63fe80f3281995deee08fd_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/damImage/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  103 => 22,  97 => 21,  89 => 16,  84 => 14,  78 => 13,  74 => 12,  71 => 11,  68 => 10,  64 => 9,  60 => 7,  57 => 6,  55 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
        {% include '@Admin/add_images.html.twig' %}
        {% if damImageCollection is defined %}
            <div class=\"row text-center\">

                {% for damImage in damImageCollection %}
                    {% if damImage.isMain == 0 %}
                    <div class=\"col-lg-3 col-md-4 col-xs-6 thumb\">
                        <a class=\"thumbnail\" href=\"{{ path('dam_view', {'id': damImage.dam.id}) }}\">
                            <img class=\"img-responsive\" src=\"{{  damImage.webPath }}\" alt=\"{{ damImage.dam.name }}\">
                            <span>{{ damImage.dam.name }}</span>
                        </a>
                        <a href=\"{{ path('dam_images_delete', { 'id': damImage.id }) }}\"
                           class=\"btn delete btn-danger\" role=\"button\">Delete
                        </a>
                    </div>
                {% endif %}
                {% endfor %}
            </div>

        {% endif %}
    </div>
{% endblock %}
", "@Admin/damImage/list.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/damImage/list.html.twig");
    }
}
