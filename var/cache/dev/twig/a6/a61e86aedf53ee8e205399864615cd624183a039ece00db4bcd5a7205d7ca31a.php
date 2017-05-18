<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_04e1f583b3ef948f22bde3ccbdb3e75fc7870c0a5e986fe6537126a4caae5fea extends Twig_Template
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
        $__internal_43ba480513ebc3faabded9a478ccd2b55d89c3653bbe5070288f52aca8cfca0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ba480513ebc3faabded9a478ccd2b55d89c3653bbe5070288f52aca8cfca0d->enter($__internal_43ba480513ebc3faabded9a478ccd2b55d89c3653bbe5070288f52aca8cfca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_46fb8ee0f3009c36d4fac708a41f90a72f41c694a54589850d2bc0d6e7f17c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fb8ee0f3009c36d4fac708a41f90a72f41c694a54589850d2bc0d6e7f17c68->enter($__internal_46fb8ee0f3009c36d4fac708a41f90a72f41c694a54589850d2bc0d6e7f17c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43ba480513ebc3faabded9a478ccd2b55d89c3653bbe5070288f52aca8cfca0d->leave($__internal_43ba480513ebc3faabded9a478ccd2b55d89c3653bbe5070288f52aca8cfca0d_prof);

        
        $__internal_46fb8ee0f3009c36d4fac708a41f90a72f41c694a54589850d2bc0d6e7f17c68->leave($__internal_46fb8ee0f3009c36d4fac708a41f90a72f41c694a54589850d2bc0d6e7f17c68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
