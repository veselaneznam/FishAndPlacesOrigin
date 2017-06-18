<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e782e39ca3d65cdf4d8409bfc2e3674b107c7888062ca3d7e51800dfdef36e6f extends Twig_Template
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
        $__internal_eeb564d60f5fc2ceda06876cadec7d94a02ce2722dfcab3fe452225f98ad77e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb564d60f5fc2ceda06876cadec7d94a02ce2722dfcab3fe452225f98ad77e9->enter($__internal_eeb564d60f5fc2ceda06876cadec7d94a02ce2722dfcab3fe452225f98ad77e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6fefc0594a509d32f17dafa462fc50875463b6177452033e933b2fa2f28793bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fefc0594a509d32f17dafa462fc50875463b6177452033e933b2fa2f28793bb->enter($__internal_6fefc0594a509d32f17dafa462fc50875463b6177452033e933b2fa2f28793bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eeb564d60f5fc2ceda06876cadec7d94a02ce2722dfcab3fe452225f98ad77e9->leave($__internal_eeb564d60f5fc2ceda06876cadec7d94a02ce2722dfcab3fe452225f98ad77e9_prof);

        
        $__internal_6fefc0594a509d32f17dafa462fc50875463b6177452033e933b2fa2f28793bb->leave($__internal_6fefc0594a509d32f17dafa462fc50875463b6177452033e933b2fa2f28793bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
