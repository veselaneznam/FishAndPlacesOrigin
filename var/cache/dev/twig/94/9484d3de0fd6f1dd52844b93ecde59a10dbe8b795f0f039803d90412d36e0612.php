<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_04a7ff7db5fc9489276913e03fb8da831cd76cff79e0c560e125437d73e95963 extends Twig_Template
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
        $__internal_ae2c3ab681b871387641d42a7c3098b1c159bf2a729b30434f150dd022b636f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2c3ab681b871387641d42a7c3098b1c159bf2a729b30434f150dd022b636f1->enter($__internal_ae2c3ab681b871387641d42a7c3098b1c159bf2a729b30434f150dd022b636f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d9b01fe0ba8e5fdf345deb4d37280f14c327673517ab1b0ccefb137868c5829b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b01fe0ba8e5fdf345deb4d37280f14c327673517ab1b0ccefb137868c5829b->enter($__internal_d9b01fe0ba8e5fdf345deb4d37280f14c327673517ab1b0ccefb137868c5829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ae2c3ab681b871387641d42a7c3098b1c159bf2a729b30434f150dd022b636f1->leave($__internal_ae2c3ab681b871387641d42a7c3098b1c159bf2a729b30434f150dd022b636f1_prof);

        
        $__internal_d9b01fe0ba8e5fdf345deb4d37280f14c327673517ab1b0ccefb137868c5829b->leave($__internal_d9b01fe0ba8e5fdf345deb4d37280f14c327673517ab1b0ccefb137868c5829b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
