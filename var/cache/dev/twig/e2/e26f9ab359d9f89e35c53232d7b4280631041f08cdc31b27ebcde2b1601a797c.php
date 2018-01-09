<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_bc92719d05a0360d23a3d1a25f50e51e48bcb66029564a0bfbd446e224256dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc92719d05a0360d23a3d1a25f50e51e48bcb66029564a0bfbd446e224256dd2->enter($__internal_bc92719d05a0360d23a3d1a25f50e51e48bcb66029564a0bfbd446e224256dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_324fbd20f419c1ab3e06e7bb9da2751c2bd58e9703b3adc4cca8f6cc890df261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324fbd20f419c1ab3e06e7bb9da2751c2bd58e9703b3adc4cca8f6cc890df261->enter($__internal_324fbd20f419c1ab3e06e7bb9da2751c2bd58e9703b3adc4cca8f6cc890df261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bc92719d05a0360d23a3d1a25f50e51e48bcb66029564a0bfbd446e224256dd2->leave($__internal_bc92719d05a0360d23a3d1a25f50e51e48bcb66029564a0bfbd446e224256dd2_prof);

        
        $__internal_324fbd20f419c1ab3e06e7bb9da2751c2bd58e9703b3adc4cca8f6cc890df261->leave($__internal_324fbd20f419c1ab3e06e7bb9da2751c2bd58e9703b3adc4cca8f6cc890df261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
