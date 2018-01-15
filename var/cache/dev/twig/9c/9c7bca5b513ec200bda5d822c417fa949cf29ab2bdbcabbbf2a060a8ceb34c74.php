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
        $__internal_14374080cb400e3da3fdfb160cc284225453c99efc0999ce9948a08a8bda3734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14374080cb400e3da3fdfb160cc284225453c99efc0999ce9948a08a8bda3734->enter($__internal_14374080cb400e3da3fdfb160cc284225453c99efc0999ce9948a08a8bda3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6371a05f5aaef18b6690f0c58a5ed69c1e6eb453ad2b5e95f8bd73f526547353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6371a05f5aaef18b6690f0c58a5ed69c1e6eb453ad2b5e95f8bd73f526547353->enter($__internal_6371a05f5aaef18b6690f0c58a5ed69c1e6eb453ad2b5e95f8bd73f526547353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14374080cb400e3da3fdfb160cc284225453c99efc0999ce9948a08a8bda3734->leave($__internal_14374080cb400e3da3fdfb160cc284225453c99efc0999ce9948a08a8bda3734_prof);

        
        $__internal_6371a05f5aaef18b6690f0c58a5ed69c1e6eb453ad2b5e95f8bd73f526547353->leave($__internal_6371a05f5aaef18b6690f0c58a5ed69c1e6eb453ad2b5e95f8bd73f526547353_prof);

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
