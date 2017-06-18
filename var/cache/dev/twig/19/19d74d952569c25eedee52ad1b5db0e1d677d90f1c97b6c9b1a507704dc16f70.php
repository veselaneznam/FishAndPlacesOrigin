<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9371d7a8d2c518295215e29d325af23cfe64a44f286d4168e05e2cebed07c516 extends Twig_Template
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
        $__internal_8db5e8b040c0dc4ee44a47381d3f0431a600cac65932f01bd7fa26c8206cc0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db5e8b040c0dc4ee44a47381d3f0431a600cac65932f01bd7fa26c8206cc0a8->enter($__internal_8db5e8b040c0dc4ee44a47381d3f0431a600cac65932f01bd7fa26c8206cc0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ee6df8b25fc097e51a594bf4b9ab352881a694a760c089a8b1f1bf0731289610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6df8b25fc097e51a594bf4b9ab352881a694a760c089a8b1f1bf0731289610->enter($__internal_ee6df8b25fc097e51a594bf4b9ab352881a694a760c089a8b1f1bf0731289610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8db5e8b040c0dc4ee44a47381d3f0431a600cac65932f01bd7fa26c8206cc0a8->leave($__internal_8db5e8b040c0dc4ee44a47381d3f0431a600cac65932f01bd7fa26c8206cc0a8_prof);

        
        $__internal_ee6df8b25fc097e51a594bf4b9ab352881a694a760c089a8b1f1bf0731289610->leave($__internal_ee6df8b25fc097e51a594bf4b9ab352881a694a760c089a8b1f1bf0731289610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
