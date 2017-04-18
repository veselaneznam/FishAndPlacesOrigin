<?php

/* @Admin/entity.html.twig */
class __TwigTemplate_7b4c966e03116dfaccb45765b5dc2eb7e2557ef4ad536bf3451a12b14cba78f8 extends Twig_Template
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
        $__internal_92548b652bffd28713931478a4ffcd01bb0f8c6429109da5b325968b8231531e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92548b652bffd28713931478a4ffcd01bb0f8c6429109da5b325968b8231531e->enter($__internal_92548b652bffd28713931478a4ffcd01bb0f8c6429109da5b325968b8231531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $__internal_fa4ecf7005bc32147181ad6fcc3740f874304e7063d3338accac625e6cd72ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4ecf7005bc32147181ad6fcc3740f874304e7063d3338accac625e6cd72ea5->enter($__internal_fa4ecf7005bc32147181ad6fcc3740f874304e7063d3338accac625e6cd72ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/entity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92548b652bffd28713931478a4ffcd01bb0f8c6429109da5b325968b8231531e->leave($__internal_92548b652bffd28713931478a4ffcd01bb0f8c6429109da5b325968b8231531e_prof);

        
        $__internal_fa4ecf7005bc32147181ad6fcc3740f874304e7063d3338accac625e6cd72ea5->leave($__internal_fa4ecf7005bc32147181ad6fcc3740f874304e7063d3338accac625e6cd72ea5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f111c95928224ba3accf10f2e543d6b00e6b75b101571c9bbd0658f98479c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f111c95928224ba3accf10f2e543d6b00e6b75b101571c9bbd0658f98479c5->enter($__internal_40f111c95928224ba3accf10f2e543d6b00e6b75b101571c9bbd0658f98479c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7431234de4ab8f99629c4ee674173414218940272d5b153188888730cca71d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7431234de4ab8f99629c4ee674173414218940272d5b153188888730cca71d69->enter($__internal_7431234de4ab8f99629c4ee674173414218940272d5b153188888730cca71d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7431234de4ab8f99629c4ee674173414218940272d5b153188888730cca71d69->leave($__internal_7431234de4ab8f99629c4ee674173414218940272d5b153188888730cca71d69_prof);

        
        $__internal_40f111c95928224ba3accf10f2e543d6b00e6b75b101571c9bbd0658f98479c5->leave($__internal_40f111c95928224ba3accf10f2e543d6b00e6b75b101571c9bbd0658f98479c5_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd6d4e55aeeeb18af23e8851551b0bd4c3ee89c1482750c2ee93a6b5dc189487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6d4e55aeeeb18af23e8851551b0bd4c3ee89c1482750c2ee93a6b5dc189487->enter($__internal_cd6d4e55aeeeb18af23e8851551b0bd4c3ee89c1482750c2ee93a6b5dc189487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f10c18070784ffc3c2b751c8da8515866ba26eb751f1ce274f60be43e2a353c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10c18070784ffc3c2b751c8da8515866ba26eb751f1ce274f60be43e2a353c9->enter($__internal_f10c18070784ffc3c2b751c8da8515866ba26eb751f1ce274f60be43e2a353c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/adapters/jquery.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f10c18070784ffc3c2b751c8da8515866ba26eb751f1ce274f60be43e2a353c9->leave($__internal_f10c18070784ffc3c2b751c8da8515866ba26eb751f1ce274f60be43e2a353c9_prof);

        
        $__internal_cd6d4e55aeeeb18af23e8851551b0bd4c3ee89c1482750c2ee93a6b5dc189487->leave($__internal_cd6d4e55aeeeb18af23e8851551b0bd4c3ee89c1482750c2ee93a6b5dc189487_prof);

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
