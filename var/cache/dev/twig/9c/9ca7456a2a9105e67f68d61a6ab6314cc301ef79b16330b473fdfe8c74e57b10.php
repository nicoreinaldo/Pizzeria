<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_79136f581f3e130fce8213da3708e53fb9ff5d527c1885227bb5d680e560952f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79136f581f3e130fce8213da3708e53fb9ff5d527c1885227bb5d680e560952f->enter($__internal_79136f581f3e130fce8213da3708e53fb9ff5d527c1885227bb5d680e560952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d7fc296006c86b51b378073cf60dc8a69208e30cdf111806442ff90a85191739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fc296006c86b51b378073cf60dc8a69208e30cdf111806442ff90a85191739->enter($__internal_d7fc296006c86b51b378073cf60dc8a69208e30cdf111806442ff90a85191739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_79136f581f3e130fce8213da3708e53fb9ff5d527c1885227bb5d680e560952f->leave($__internal_79136f581f3e130fce8213da3708e53fb9ff5d527c1885227bb5d680e560952f_prof);

        
        $__internal_d7fc296006c86b51b378073cf60dc8a69208e30cdf111806442ff90a85191739->leave($__internal_d7fc296006c86b51b378073cf60dc8a69208e30cdf111806442ff90a85191739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
