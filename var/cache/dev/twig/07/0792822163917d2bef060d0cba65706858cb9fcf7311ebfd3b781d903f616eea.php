<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_0892f3a4cfd12c33f39e1a024f4635dc04405d58a628d7729de1d938e340f844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0892f3a4cfd12c33f39e1a024f4635dc04405d58a628d7729de1d938e340f844->enter($__internal_0892f3a4cfd12c33f39e1a024f4635dc04405d58a628d7729de1d938e340f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5c2cd0451a67db370f338bb9f01ba2cb910d24aaedb2b0a350224fff6584fab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2cd0451a67db370f338bb9f01ba2cb910d24aaedb2b0a350224fff6584fab5->enter($__internal_5c2cd0451a67db370f338bb9f01ba2cb910d24aaedb2b0a350224fff6584fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0892f3a4cfd12c33f39e1a024f4635dc04405d58a628d7729de1d938e340f844->leave($__internal_0892f3a4cfd12c33f39e1a024f4635dc04405d58a628d7729de1d938e340f844_prof);

        
        $__internal_5c2cd0451a67db370f338bb9f01ba2cb910d24aaedb2b0a350224fff6584fab5->leave($__internal_5c2cd0451a67db370f338bb9f01ba2cb910d24aaedb2b0a350224fff6584fab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
