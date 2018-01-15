<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_a7e8db1e20537240bae1b03749f2661dd5837a1ed556105247a240ac9a80ae47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e8db1e20537240bae1b03749f2661dd5837a1ed556105247a240ac9a80ae47->enter($__internal_a7e8db1e20537240bae1b03749f2661dd5837a1ed556105247a240ac9a80ae47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_20bd1fc0e6e5dd303df73ec5ca35cc2695bf17eb708fc6c19deed4a273ddc812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bd1fc0e6e5dd303df73ec5ca35cc2695bf17eb708fc6c19deed4a273ddc812->enter($__internal_20bd1fc0e6e5dd303df73ec5ca35cc2695bf17eb708fc6c19deed4a273ddc812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a7e8db1e20537240bae1b03749f2661dd5837a1ed556105247a240ac9a80ae47->leave($__internal_a7e8db1e20537240bae1b03749f2661dd5837a1ed556105247a240ac9a80ae47_prof);

        
        $__internal_20bd1fc0e6e5dd303df73ec5ca35cc2695bf17eb708fc6c19deed4a273ddc812->leave($__internal_20bd1fc0e6e5dd303df73ec5ca35cc2695bf17eb708fc6c19deed4a273ddc812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
