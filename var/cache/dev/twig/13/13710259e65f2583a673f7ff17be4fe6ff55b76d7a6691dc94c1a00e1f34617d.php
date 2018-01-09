<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6a73981c1dfc36ebd2879f0f0f120d03219f13e7305867de63e6c1eeb358794e extends Twig_Template
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
        $__internal_a6730706caf13abd3d757d08d113cc8361fe361beb6b6f543f78cc456256cdf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6730706caf13abd3d757d08d113cc8361fe361beb6b6f543f78cc456256cdf3->enter($__internal_a6730706caf13abd3d757d08d113cc8361fe361beb6b6f543f78cc456256cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bceddb9f763d236db2c4d767453f8c4b08b9ed54d46d0bbca468a2b14ec74aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bceddb9f763d236db2c4d767453f8c4b08b9ed54d46d0bbca468a2b14ec74aa2->enter($__internal_bceddb9f763d236db2c4d767453f8c4b08b9ed54d46d0bbca468a2b14ec74aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a6730706caf13abd3d757d08d113cc8361fe361beb6b6f543f78cc456256cdf3->leave($__internal_a6730706caf13abd3d757d08d113cc8361fe361beb6b6f543f78cc456256cdf3_prof);

        
        $__internal_bceddb9f763d236db2c4d767453f8c4b08b9ed54d46d0bbca468a2b14ec74aa2->leave($__internal_bceddb9f763d236db2c4d767453f8c4b08b9ed54d46d0bbca468a2b14ec74aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
