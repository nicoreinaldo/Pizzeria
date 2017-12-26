<?php

/* :pizzapedido:new.html.twig */
class __TwigTemplate_4f05ca7aa2bcf75094f64012c57fd1271a085fa24657fc15b3e128a2ac6b4c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pizzapedido:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41941fc053919d806861ed2a41eeaa7ad42574e6060069f95766be9d732f45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41941fc053919d806861ed2a41eeaa7ad42574e6060069f95766be9d732f45a->enter($__internal_c41941fc053919d806861ed2a41eeaa7ad42574e6060069f95766be9d732f45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $__internal_417f7282a59c733a9d82c25adb26bdb74ec16e825c01872983b17bdd2c878eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417f7282a59c733a9d82c25adb26bdb74ec16e825c01872983b17bdd2c878eed->enter($__internal_417f7282a59c733a9d82c25adb26bdb74ec16e825c01872983b17bdd2c878eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pizzapedido:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41941fc053919d806861ed2a41eeaa7ad42574e6060069f95766be9d732f45a->leave($__internal_c41941fc053919d806861ed2a41eeaa7ad42574e6060069f95766be9d732f45a_prof);

        
        $__internal_417f7282a59c733a9d82c25adb26bdb74ec16e825c01872983b17bdd2c878eed->leave($__internal_417f7282a59c733a9d82c25adb26bdb74ec16e825c01872983b17bdd2c878eed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8208c6450cbf84e5e71619301c41f58f7c64cb4cfd104017f169277ccc26c919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8208c6450cbf84e5e71619301c41f58f7c64cb4cfd104017f169277ccc26c919->enter($__internal_8208c6450cbf84e5e71619301c41f58f7c64cb4cfd104017f169277ccc26c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79a6098bfcff8c1e11584948f7e1bed3396ddb50c4e792155c0c5d8363b37c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a6098bfcff8c1e11584948f7e1bed3396ddb50c4e792155c0c5d8363b37c9f->enter($__internal_79a6098bfcff8c1e11584948f7e1bed3396ddb50c4e792155c0c5d8363b37c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pizzapedido creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pizzapedido_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_79a6098bfcff8c1e11584948f7e1bed3396ddb50c4e792155c0c5d8363b37c9f->leave($__internal_79a6098bfcff8c1e11584948f7e1bed3396ddb50c4e792155c0c5d8363b37c9f_prof);

        
        $__internal_8208c6450cbf84e5e71619301c41f58f7c64cb4cfd104017f169277ccc26c919->leave($__internal_8208c6450cbf84e5e71619301c41f58f7c64cb4cfd104017f169277ccc26c919_prof);

    }

    public function getTemplateName()
    {
        return ":pizzapedido:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Pizzapedido creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('pizzapedido_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":pizzapedido:new.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pizzapedido/new.html.twig");
    }
}
