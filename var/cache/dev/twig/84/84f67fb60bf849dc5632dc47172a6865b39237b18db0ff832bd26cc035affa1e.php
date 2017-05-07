<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7c2b83a92c41937e16af2007af3a97d4bdd998d52a9d5935cc37c52bbcf53bb4 extends Twig_Template
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
        $__internal_14c08ef4cacac823d2023cc6fa69b94833a9b5f055026b878c5f7d9f6278ed81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c08ef4cacac823d2023cc6fa69b94833a9b5f055026b878c5f7d9f6278ed81->enter($__internal_14c08ef4cacac823d2023cc6fa69b94833a9b5f055026b878c5f7d9f6278ed81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ee5d5ce1a1c43fac253cced0c3a60eb2836e7ac69794575bc6e227e905702de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5d5ce1a1c43fac253cced0c3a60eb2836e7ac69794575bc6e227e905702de8->enter($__internal_ee5d5ce1a1c43fac253cced0c3a60eb2836e7ac69794575bc6e227e905702de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_14c08ef4cacac823d2023cc6fa69b94833a9b5f055026b878c5f7d9f6278ed81->leave($__internal_14c08ef4cacac823d2023cc6fa69b94833a9b5f055026b878c5f7d9f6278ed81_prof);

        
        $__internal_ee5d5ce1a1c43fac253cced0c3a60eb2836e7ac69794575bc6e227e905702de8->leave($__internal_ee5d5ce1a1c43fac253cced0c3a60eb2836e7ac69794575bc6e227e905702de8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
