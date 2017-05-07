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
        $__internal_5a5c8449ec758056dd6cf0e2fa38e77c5089ba986dbc65ab735a6f2e642792c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5c8449ec758056dd6cf0e2fa38e77c5089ba986dbc65ab735a6f2e642792c5->enter($__internal_5a5c8449ec758056dd6cf0e2fa38e77c5089ba986dbc65ab735a6f2e642792c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_76debf05127d88b94febeea7a3d95b1094c206c8d83cadd2886f8ec8d232ddc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76debf05127d88b94febeea7a3d95b1094c206c8d83cadd2886f8ec8d232ddc4->enter($__internal_76debf05127d88b94febeea7a3d95b1094c206c8d83cadd2886f8ec8d232ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5a5c8449ec758056dd6cf0e2fa38e77c5089ba986dbc65ab735a6f2e642792c5->leave($__internal_5a5c8449ec758056dd6cf0e2fa38e77c5089ba986dbc65ab735a6f2e642792c5_prof);

        
        $__internal_76debf05127d88b94febeea7a3d95b1094c206c8d83cadd2886f8ec8d232ddc4->leave($__internal_76debf05127d88b94febeea7a3d95b1094c206c8d83cadd2886f8ec8d232ddc4_prof);

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
