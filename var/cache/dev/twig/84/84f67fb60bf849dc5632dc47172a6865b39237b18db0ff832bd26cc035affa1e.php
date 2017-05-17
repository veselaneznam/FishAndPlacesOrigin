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
        $__internal_91985342c981bb9bbecab60e4381a762cfd0faa517d8d60a6c744e21caee0712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91985342c981bb9bbecab60e4381a762cfd0faa517d8d60a6c744e21caee0712->enter($__internal_91985342c981bb9bbecab60e4381a762cfd0faa517d8d60a6c744e21caee0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a9b2e306590e7981edf77187341944882bf1860d9d44d0138b33a689146a23b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b2e306590e7981edf77187341944882bf1860d9d44d0138b33a689146a23b7->enter($__internal_a9b2e306590e7981edf77187341944882bf1860d9d44d0138b33a689146a23b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_91985342c981bb9bbecab60e4381a762cfd0faa517d8d60a6c744e21caee0712->leave($__internal_91985342c981bb9bbecab60e4381a762cfd0faa517d8d60a6c744e21caee0712_prof);

        
        $__internal_a9b2e306590e7981edf77187341944882bf1860d9d44d0138b33a689146a23b7->leave($__internal_a9b2e306590e7981edf77187341944882bf1860d9d44d0138b33a689146a23b7_prof);

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
