<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d64116a7c1c46b51a0a226147889b27de2fe587545c6e9e37d44559d0467a975 extends Twig_Template
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
        $__internal_5f511ab4c9ec86c4473664eb2bbf136f8ac415331b7c85ccd579fb56e0888ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f511ab4c9ec86c4473664eb2bbf136f8ac415331b7c85ccd579fb56e0888ad6->enter($__internal_5f511ab4c9ec86c4473664eb2bbf136f8ac415331b7c85ccd579fb56e0888ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f083efecd88e00604cac664fc1c70980e720fb104ccb9cd641f47a06dc5ebaa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f083efecd88e00604cac664fc1c70980e720fb104ccb9cd641f47a06dc5ebaa1->enter($__internal_f083efecd88e00604cac664fc1c70980e720fb104ccb9cd641f47a06dc5ebaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f511ab4c9ec86c4473664eb2bbf136f8ac415331b7c85ccd579fb56e0888ad6->leave($__internal_5f511ab4c9ec86c4473664eb2bbf136f8ac415331b7c85ccd579fb56e0888ad6_prof);

        
        $__internal_f083efecd88e00604cac664fc1c70980e720fb104ccb9cd641f47a06dc5ebaa1->leave($__internal_f083efecd88e00604cac664fc1c70980e720fb104ccb9cd641f47a06dc5ebaa1_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
