<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7c9f8eb59aa8cc789485d6d4b6c32c573fb11bf524537932cb04bd8215e2313d extends Twig_Template
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
        $__internal_59f37bbce982154b3c2d284d4536c1a85f2834193241de66264d79eb1445b0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f37bbce982154b3c2d284d4536c1a85f2834193241de66264d79eb1445b0ed->enter($__internal_59f37bbce982154b3c2d284d4536c1a85f2834193241de66264d79eb1445b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a158f3de77de448f7d5c89ebe20937dec3eff5c7aa1bed392bcba68c9b1147f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a158f3de77de448f7d5c89ebe20937dec3eff5c7aa1bed392bcba68c9b1147f6->enter($__internal_a158f3de77de448f7d5c89ebe20937dec3eff5c7aa1bed392bcba68c9b1147f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_59f37bbce982154b3c2d284d4536c1a85f2834193241de66264d79eb1445b0ed->leave($__internal_59f37bbce982154b3c2d284d4536c1a85f2834193241de66264d79eb1445b0ed_prof);

        
        $__internal_a158f3de77de448f7d5c89ebe20937dec3eff5c7aa1bed392bcba68c9b1147f6->leave($__internal_a158f3de77de448f7d5c89ebe20937dec3eff5c7aa1bed392bcba68c9b1147f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
