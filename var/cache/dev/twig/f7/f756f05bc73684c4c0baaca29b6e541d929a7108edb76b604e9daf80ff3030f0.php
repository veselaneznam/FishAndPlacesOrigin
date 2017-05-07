<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b286ba8e723e0a25005e660bfbddf6937f82159f1b8208a1a1a9fb5cef90b325 extends Twig_Template
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
        $__internal_150111ae128bec099e6ab5054e8fd350ffa8497f4babcd3710f47c65a0d0ce80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150111ae128bec099e6ab5054e8fd350ffa8497f4babcd3710f47c65a0d0ce80->enter($__internal_150111ae128bec099e6ab5054e8fd350ffa8497f4babcd3710f47c65a0d0ce80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d77968dbec1f721706a64dc555a53eff12e34ad64f52973e415b37af97b12105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77968dbec1f721706a64dc555a53eff12e34ad64f52973e415b37af97b12105->enter($__internal_d77968dbec1f721706a64dc555a53eff12e34ad64f52973e415b37af97b12105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_150111ae128bec099e6ab5054e8fd350ffa8497f4babcd3710f47c65a0d0ce80->leave($__internal_150111ae128bec099e6ab5054e8fd350ffa8497f4babcd3710f47c65a0d0ce80_prof);

        
        $__internal_d77968dbec1f721706a64dc555a53eff12e34ad64f52973e415b37af97b12105->leave($__internal_d77968dbec1f721706a64dc555a53eff12e34ad64f52973e415b37af97b12105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
