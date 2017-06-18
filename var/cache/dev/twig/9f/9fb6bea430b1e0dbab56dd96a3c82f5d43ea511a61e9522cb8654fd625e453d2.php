<?php

/* @Admin/entity.html.twig */
class __TwigTemplate_3c17723b8e3f03b72a6226dd9aa3c132ed66461c68921d55cc9544ab192b93a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Admin/base.html.twig", "@Admin/entity.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d3b02c6ddb00da943e35e1eaa8cc3f8d56285f8cc19ce949791fde21df1a972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3b02c6ddb00da943e35e1eaa8cc3f8d56285f8cc19ce949791fde21df1a972->enter($__internal_2d3b02c6ddb00da943e35e1eaa8cc3f8d56285f8cc19ce949791fde21df1a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $__internal_95d9ef54343dd7d3a61ced4be2392db292b983d4d1a6fbb94e57c3c66b68207e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d9ef54343dd7d3a61ced4be2392db292b983d4d1a6fbb94e57c3c66b68207e->enter($__internal_95d9ef54343dd7d3a61ced4be2392db292b983d4d1a6fbb94e57c3c66b68207e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3b02c6ddb00da943e35e1eaa8cc3f8d56285f8cc19ce949791fde21df1a972->leave($__internal_2d3b02c6ddb00da943e35e1eaa8cc3f8d56285f8cc19ce949791fde21df1a972_prof);

        
        $__internal_95d9ef54343dd7d3a61ced4be2392db292b983d4d1a6fbb94e57c3c66b68207e->leave($__internal_95d9ef54343dd7d3a61ced4be2392db292b983d4d1a6fbb94e57c3c66b68207e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dae1db73c96ecd3a6e0503f1d6d9b8763d40c7773203ea3c40b7f5ab1978fecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae1db73c96ecd3a6e0503f1d6d9b8763d40c7773203ea3c40b7f5ab1978fecd->enter($__internal_dae1db73c96ecd3a6e0503f1d6d9b8763d40c7773203ea3c40b7f5ab1978fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45b9325b2330c6941509e11bb94ae884c4822933451961fccc49ccd323588592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b9325b2330c6941509e11bb94ae884c4822933451961fccc49ccd323588592->enter($__internal_45b9325b2330c6941509e11bb94ae884c4822933451961fccc49ccd323588592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 11
        if (array_key_exists("currentFishCollection", $context)) {
            // line 12
            echo "                    <table>
                        <th> Current Fish Collection</th>
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFishCollection"] ?? $this->getContext($context, "currentFishCollection")));
            foreach ($context['_seq'] as $context["_key"] => $context["fish"]) {
                // line 15
                echo "                        <tr>
                            <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["fish"], "name", array()), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fish'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </table>
                ";
        }
        // line 21
        echo "                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["backUrl"] ?? $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>

";
        
        $__internal_45b9325b2330c6941509e11bb94ae884c4822933451961fccc49ccd323588592->leave($__internal_45b9325b2330c6941509e11bb94ae884c4822933451961fccc49ccd323588592_prof);

        
        $__internal_dae1db73c96ecd3a6e0503f1d6d9b8763d40c7773203ea3c40b7f5ab1978fecd->leave($__internal_dae1db73c96ecd3a6e0503f1d6d9b8763d40c7773203ea3c40b7f5ab1978fecd_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4e15e699f34e04bd48e40b806699e0882f8958d3f977ec5abf5cc48f99baaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e15e699f34e04bd48e40b806699e0882f8958d3f977ec5abf5cc48f99baaf7->enter($__internal_c4e15e699f34e04bd48e40b806699e0882f8958d3f977ec5abf5cc48f99baaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c304cb7b36cf15fc04294a5a5d2c3b3194721a7a8cb1d2f6fa3abbd732469b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c304cb7b36cf15fc04294a5a5d2c3b3194721a7a8cb1d2f6fa3abbd732469b88->enter($__internal_c304cb7b36cf15fc04294a5a5d2c3b3194721a7a8cb1d2f6fa3abbd732469b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/adapters/jquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c304cb7b36cf15fc04294a5a5d2c3b3194721a7a8cb1d2f6fa3abbd732469b88->leave($__internal_c304cb7b36cf15fc04294a5a5d2c3b3194721a7a8cb1d2f6fa3abbd732469b88_prof);

        
        $__internal_c4e15e699f34e04bd48e40b806699e0882f8958d3f977ec5abf5cc48f99baaf7->leave($__internal_c4e15e699f34e04bd48e40b806699e0882f8958d3f977ec5abf5cc48f99baaf7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 30,  128 => 29,  119 => 28,  105 => 24,  101 => 23,  97 => 21,  93 => 19,  84 => 16,  81 => 15,  77 => 14,  73 => 12,  71 => 11,  67 => 10,  62 => 8,  58 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>{{ title }}</h3>
                {{ form_start(form) }}

                {{ form_widget(form) }}
                {% if currentFishCollection is defined %}
                    <table>
                        <th> Current Fish Collection</th>
                        {% for fish in currentFishCollection %}
                        <tr>
                            <td>{{ fish.name }}</td>
                        </tr>
                        {% endfor %}
                    </table>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                <button type=\"reset\" class=\"btn btn-danger\">Cancel</button>
                <a href=\"{{ backUrl }}\" class=\"btn btn-info\" role=\"button\">Back</a>
                {{ form_end(form) }}
            </div></div></div>

{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/ivoryckeditor/ckeditor.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/ivoryckeditor/adapters/jquery.js') }}\"></script>
{% endblock %}
", "@Admin/entity.html.twig", "/var/www/FishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/entity.html.twig");
    }
}
