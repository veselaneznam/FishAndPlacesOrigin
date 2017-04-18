<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e40801c2a5e29c188a7d9ce454e12ddd421b3a37693820cf6aa89c4ece696010 extends Twig_Template
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
        $__internal_69459e44bda3a20a9cde0a996d638b2c9ba6b6660a21d00c460b82098475abfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69459e44bda3a20a9cde0a996d638b2c9ba6b6660a21d00c460b82098475abfe->enter($__internal_69459e44bda3a20a9cde0a996d638b2c9ba6b6660a21d00c460b82098475abfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_be37d8996601ed9b5b1f0936a0fa63c2aaa8defbea5e979657d124c933c9e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be37d8996601ed9b5b1f0936a0fa63c2aaa8defbea5e979657d124c933c9e53d->enter($__internal_be37d8996601ed9b5b1f0936a0fa63c2aaa8defbea5e979657d124c933c9e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_69459e44bda3a20a9cde0a996d638b2c9ba6b6660a21d00c460b82098475abfe->leave($__internal_69459e44bda3a20a9cde0a996d638b2c9ba6b6660a21d00c460b82098475abfe_prof);

        
        $__internal_be37d8996601ed9b5b1f0936a0fa63c2aaa8defbea5e979657d124c933c9e53d->leave($__internal_be37d8996601ed9b5b1f0936a0fa63c2aaa8defbea5e979657d124c933c9e53d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
