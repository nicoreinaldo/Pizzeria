<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_84d34b98cec717d836a092b776fc378d794e757287e244875cb5bab373cf3802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d34b98cec717d836a092b776fc378d794e757287e244875cb5bab373cf3802->enter($__internal_84d34b98cec717d836a092b776fc378d794e757287e244875cb5bab373cf3802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_95db1ebeccc5ac8f975df74068f0f666631ba2f0cd287acc4e815714a446635b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95db1ebeccc5ac8f975df74068f0f666631ba2f0cd287acc4e815714a446635b->enter($__internal_95db1ebeccc5ac8f975df74068f0f666631ba2f0cd287acc4e815714a446635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_84d34b98cec717d836a092b776fc378d794e757287e244875cb5bab373cf3802->leave($__internal_84d34b98cec717d836a092b776fc378d794e757287e244875cb5bab373cf3802_prof);

        
        $__internal_95db1ebeccc5ac8f975df74068f0f666631ba2f0cd287acc4e815714a446635b->leave($__internal_95db1ebeccc5ac8f975df74068f0f666631ba2f0cd287acc4e815714a446635b_prof);

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
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
