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
        $__internal_8537418e9b444ebcf5ae9a23809ea39eae2d7640cb4a7be104e5ed675bb6b864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8537418e9b444ebcf5ae9a23809ea39eae2d7640cb4a7be104e5ed675bb6b864->enter($__internal_8537418e9b444ebcf5ae9a23809ea39eae2d7640cb4a7be104e5ed675bb6b864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_55aac9b7e77c39d77ac18575f409b78e397c6cc4cf484cd84954d782a86d2b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aac9b7e77c39d77ac18575f409b78e397c6cc4cf484cd84954d782a86d2b14->enter($__internal_55aac9b7e77c39d77ac18575f409b78e397c6cc4cf484cd84954d782a86d2b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_8537418e9b444ebcf5ae9a23809ea39eae2d7640cb4a7be104e5ed675bb6b864->leave($__internal_8537418e9b444ebcf5ae9a23809ea39eae2d7640cb4a7be104e5ed675bb6b864_prof);

        
        $__internal_55aac9b7e77c39d77ac18575f409b78e397c6cc4cf484cd84954d782a86d2b14->leave($__internal_55aac9b7e77c39d77ac18575f409b78e397c6cc4cf484cd84954d782a86d2b14_prof);

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
