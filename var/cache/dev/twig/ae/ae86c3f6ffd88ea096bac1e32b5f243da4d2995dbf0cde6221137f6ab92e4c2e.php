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
        $__internal_27f5e5d665ab02ca5d07b8f0fc6a8475310a711deee9dce122e34d0b312e675b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f5e5d665ab02ca5d07b8f0fc6a8475310a711deee9dce122e34d0b312e675b->enter($__internal_27f5e5d665ab02ca5d07b8f0fc6a8475310a711deee9dce122e34d0b312e675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_84dc1f9ae42ae04b7490b61f2a349b5a9cad266132ab16b8308d70afe473eed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dc1f9ae42ae04b7490b61f2a349b5a9cad266132ab16b8308d70afe473eed0->enter($__internal_84dc1f9ae42ae04b7490b61f2a349b5a9cad266132ab16b8308d70afe473eed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_27f5e5d665ab02ca5d07b8f0fc6a8475310a711deee9dce122e34d0b312e675b->leave($__internal_27f5e5d665ab02ca5d07b8f0fc6a8475310a711deee9dce122e34d0b312e675b_prof);

        
        $__internal_84dc1f9ae42ae04b7490b61f2a349b5a9cad266132ab16b8308d70afe473eed0->leave($__internal_84dc1f9ae42ae04b7490b61f2a349b5a9cad266132ab16b8308d70afe473eed0_prof);

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
