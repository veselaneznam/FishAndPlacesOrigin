<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03f0f9f8c4c8d74ef98be14cc026b610291bdef55289d4cb016f1d67ee754565 extends Twig_Template
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
        $__internal_674fd7b140f62b3ed5f70453ef9abfe368f17b3141abc9869ad9133c1b503317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674fd7b140f62b3ed5f70453ef9abfe368f17b3141abc9869ad9133c1b503317->enter($__internal_674fd7b140f62b3ed5f70453ef9abfe368f17b3141abc9869ad9133c1b503317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_edd3314e1fffbcd960e9f685abc5f55bd64638634e0bd0c0fffcfb2d124e1f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd3314e1fffbcd960e9f685abc5f55bd64638634e0bd0c0fffcfb2d124e1f46->enter($__internal_edd3314e1fffbcd960e9f685abc5f55bd64638634e0bd0c0fffcfb2d124e1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_674fd7b140f62b3ed5f70453ef9abfe368f17b3141abc9869ad9133c1b503317->leave($__internal_674fd7b140f62b3ed5f70453ef9abfe368f17b3141abc9869ad9133c1b503317_prof);

        
        $__internal_edd3314e1fffbcd960e9f685abc5f55bd64638634e0bd0c0fffcfb2d124e1f46->leave($__internal_edd3314e1fffbcd960e9f685abc5f55bd64638634e0bd0c0fffcfb2d124e1f46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
