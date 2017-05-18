<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_149d0421138dc76a2cab59eaf9456d5198a275f9ff4c140bd4127dc86c6b83df extends Twig_Template
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
        $__internal_8fa1d7ca7ecaae981ff88ff8b66ff2a61d361d88a8c0017a382c573b71e76a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa1d7ca7ecaae981ff88ff8b66ff2a61d361d88a8c0017a382c573b71e76a7d->enter($__internal_8fa1d7ca7ecaae981ff88ff8b66ff2a61d361d88a8c0017a382c573b71e76a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_6fd0d1ccbf7cfc53158543c614dbd3e3983027742c85c9ef17b619c3344f602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd0d1ccbf7cfc53158543c614dbd3e3983027742c85c9ef17b619c3344f602a->enter($__internal_6fd0d1ccbf7cfc53158543c614dbd3e3983027742c85c9ef17b619c3344f602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_8fa1d7ca7ecaae981ff88ff8b66ff2a61d361d88a8c0017a382c573b71e76a7d->leave($__internal_8fa1d7ca7ecaae981ff88ff8b66ff2a61d361d88a8c0017a382c573b71e76a7d_prof);

        
        $__internal_6fd0d1ccbf7cfc53158543c614dbd3e3983027742c85c9ef17b619c3344f602a->leave($__internal_6fd0d1ccbf7cfc53158543c614dbd3e3983027742c85c9ef17b619c3344f602a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
