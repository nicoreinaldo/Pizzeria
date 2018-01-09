<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_1ac3b1d4035260dc21f350392f77618c8aeb770eb8daf046bed007c40af93b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac3b1d4035260dc21f350392f77618c8aeb770eb8daf046bed007c40af93b39->enter($__internal_1ac3b1d4035260dc21f350392f77618c8aeb770eb8daf046bed007c40af93b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9753626e1badf4b64f07e4c36984da8ec51e7485cfa45630bc16a6d38333fe52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9753626e1badf4b64f07e4c36984da8ec51e7485cfa45630bc16a6d38333fe52->enter($__internal_9753626e1badf4b64f07e4c36984da8ec51e7485cfa45630bc16a6d38333fe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1ac3b1d4035260dc21f350392f77618c8aeb770eb8daf046bed007c40af93b39->leave($__internal_1ac3b1d4035260dc21f350392f77618c8aeb770eb8daf046bed007c40af93b39_prof);

        
        $__internal_9753626e1badf4b64f07e4c36984da8ec51e7485cfa45630bc16a6d38333fe52->leave($__internal_9753626e1badf4b64f07e4c36984da8ec51e7485cfa45630bc16a6d38333fe52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
