<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1fcf9633efd0d5da982597b1a8e25d6ae0617c2129438114484b72b0892acb88 extends Twig_Template
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
        $__internal_f8244982cc70f65dc90c2a23e0bbb16aac259397a36f31268d0450363aee0a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8244982cc70f65dc90c2a23e0bbb16aac259397a36f31268d0450363aee0a23->enter($__internal_f8244982cc70f65dc90c2a23e0bbb16aac259397a36f31268d0450363aee0a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fd49eb39a1bb56b6a305fff3f2991cd191e9914caaec5d6cba8ab5c6038742e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd49eb39a1bb56b6a305fff3f2991cd191e9914caaec5d6cba8ab5c6038742e4->enter($__internal_fd49eb39a1bb56b6a305fff3f2991cd191e9914caaec5d6cba8ab5c6038742e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f8244982cc70f65dc90c2a23e0bbb16aac259397a36f31268d0450363aee0a23->leave($__internal_f8244982cc70f65dc90c2a23e0bbb16aac259397a36f31268d0450363aee0a23_prof);

        
        $__internal_fd49eb39a1bb56b6a305fff3f2991cd191e9914caaec5d6cba8ab5c6038742e4->leave($__internal_fd49eb39a1bb56b6a305fff3f2991cd191e9914caaec5d6cba8ab5c6038742e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
