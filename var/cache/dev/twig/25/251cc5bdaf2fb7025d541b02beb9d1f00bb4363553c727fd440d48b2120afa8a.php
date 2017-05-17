<?php

/* @Admin/entity.html.twig */
class __TwigTemplate_96f86d9b68fb0fd12d31939cdbd37698c3ef785716f1955a688149bc908e3a05 extends Twig_Template
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
        $__internal_3836da72d77dcd73339316b40479228716c435cf5080343c0c2a5e6b356965b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3836da72d77dcd73339316b40479228716c435cf5080343c0c2a5e6b356965b3->enter($__internal_3836da72d77dcd73339316b40479228716c435cf5080343c0c2a5e6b356965b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $__internal_d23fc1597102f8cca07c6980297025ca7a7532cb85ad4e7a9138773bf1fb2852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23fc1597102f8cca07c6980297025ca7a7532cb85ad4e7a9138773bf1fb2852->enter($__internal_d23fc1597102f8cca07c6980297025ca7a7532cb85ad4e7a9138773bf1fb2852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3836da72d77dcd73339316b40479228716c435cf5080343c0c2a5e6b356965b3->leave($__internal_3836da72d77dcd73339316b40479228716c435cf5080343c0c2a5e6b356965b3_prof);

        
        $__internal_d23fc1597102f8cca07c6980297025ca7a7532cb85ad4e7a9138773bf1fb2852->leave($__internal_d23fc1597102f8cca07c6980297025ca7a7532cb85ad4e7a9138773bf1fb2852_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_357405a0708bcc85ee99f26b9144d2d3edb734ddbf3f10b05a4b3acd5a226963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357405a0708bcc85ee99f26b9144d2d3edb734ddbf3f10b05a4b3acd5a226963->enter($__internal_357405a0708bcc85ee99f26b9144d2d3edb734ddbf3f10b05a4b3acd5a226963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00a346e48829ba6eb7291b59b0b8bdf970cc545f3513425269fb8641d8ecb2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a346e48829ba6eb7291b59b0b8bdf970cc545f3513425269fb8641d8ecb2da->enter($__internal_00a346e48829ba6eb7291b59b0b8bdf970cc545f3513425269fb8641d8ecb2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
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
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFishCollection"]) ? $context["currentFishCollection"] : $this->getContext($context, "currentFishCollection")));
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
        echo twig_escape_filter($this->env, (isset($context["backUrl"]) ? $context["backUrl"] : $this->getContext($context, "backUrl")), "html", null, true);
        echo "\" class=\"btn btn-info\" role=\"button\">Back</a>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div></div></div>

";
        
        $__internal_00a346e48829ba6eb7291b59b0b8bdf970cc545f3513425269fb8641d8ecb2da->leave($__internal_00a346e48829ba6eb7291b59b0b8bdf970cc545f3513425269fb8641d8ecb2da_prof);

        
        $__internal_357405a0708bcc85ee99f26b9144d2d3edb734ddbf3f10b05a4b3acd5a226963->leave($__internal_357405a0708bcc85ee99f26b9144d2d3edb734ddbf3f10b05a4b3acd5a226963_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d6ea613f69058cf162e00af127c68ad1e65280595c210f5fe524cd9c0a909ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d6ea613f69058cf162e00af127c68ad1e65280595c210f5fe524cd9c0a909ca->enter($__internal_0d6ea613f69058cf162e00af127c68ad1e65280595c210f5fe524cd9c0a909ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f51a1c2c4c1ee77a776de3bdc0e191383f1ae692e9ea0f95b97b8e467416477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f51a1c2c4c1ee77a776de3bdc0e191383f1ae692e9ea0f95b97b8e467416477->enter($__internal_1f51a1c2c4c1ee77a776de3bdc0e191383f1ae692e9ea0f95b97b8e467416477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/adapters/jquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1f51a1c2c4c1ee77a776de3bdc0e191383f1ae692e9ea0f95b97b8e467416477->leave($__internal_1f51a1c2c4c1ee77a776de3bdc0e191383f1ae692e9ea0f95b97b8e467416477_prof);

        
        $__internal_0d6ea613f69058cf162e00af127c68ad1e65280595c210f5fe524cd9c0a909ca->leave($__internal_0d6ea613f69058cf162e00af127c68ad1e65280595c210f5fe524cd9c0a909ca_prof);

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
", "@Admin/entity.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views/entity.html.twig");
    }
}
