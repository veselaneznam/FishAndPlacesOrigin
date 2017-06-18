<?php

/* @Admin/damImage/list.html.twig */
class __TwigTemplate_8b1415a48b6a320b2c33fcec344d0f09e6efa568d5b3e135f0bf1f9bb31de846 extends Twig_Template
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
        $__internal_cf26b8e14091a00d72a7072bf735b3802b58ae0bf15ba6180b912f058bd4c34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf26b8e14091a00d72a7072bf735b3802b58ae0bf15ba6180b912f058bd4c34b->enter($__internal_cf26b8e14091a00d72a7072bf735b3802b58ae0bf15ba6180b912f058bd4c34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/damImage/list.html.twig"));

        $__internal_1791aee7fcf7fc36f2b4ab8eb26c4ba2eee193ad8c0443f9384ce3a730d866c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1791aee7fcf7fc36f2b4ab8eb26c4ba2eee193ad8c0443f9384ce3a730d866c6->enter($__internal_1791aee7fcf7fc36f2b4ab8eb26c4ba2eee193ad8c0443f9384ce3a730d866c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/damImage/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf26b8e14091a00d72a7072bf735b3802b58ae0bf15ba6180b912f058bd4c34b->leave($__internal_cf26b8e14091a00d72a7072bf735b3802b58ae0bf15ba6180b912f058bd4c34b_prof);

        
        $__internal_1791aee7fcf7fc36f2b4ab8eb26c4ba2eee193ad8c0443f9384ce3a730d866c6->leave($__internal_1791aee7fcf7fc36f2b4ab8eb26c4ba2eee193ad8c0443f9384ce3a730d866c6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c71e04d13e73cb00eea41c8f659ed6d44b28bdcbd2971b445d02305ddbb09d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71e04d13e73cb00eea41c8f659ed6d44b28bdcbd2971b445d02305ddbb09d65->enter($__internal_c71e04d13e73cb00eea41c8f659ed6d44b28bdcbd2971b445d02305ddbb09d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31b40e844864e401cdcf97766e0bbfc4b8aaef7cdac7fad30245cc67b041ecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b40e844864e401cdcf97766e0bbfc4b8aaef7cdac7fad30245cc67b041ecc3->enter($__internal_31b40e844864e401cdcf97766e0bbfc4b8aaef7cdac7fad30245cc67b041ecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_seq'] = twig_ensure_traversable(($context["damImageCollection"] ?? $this->getContext($context, "damImageCollection")));
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
        
        $__internal_31b40e844864e401cdcf97766e0bbfc4b8aaef7cdac7fad30245cc67b041ecc3->leave($__internal_31b40e844864e401cdcf97766e0bbfc4b8aaef7cdac7fad30245cc67b041ecc3_prof);

        
        $__internal_c71e04d13e73cb00eea41c8f659ed6d44b28bdcbd2971b445d02305ddbb09d65->leave($__internal_c71e04d13e73cb00eea41c8f659ed6d44b28bdcbd2971b445d02305ddbb09d65_prof);

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
", "@Admin/damImage/list.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/damImage/list.html.twig");
    }
}
