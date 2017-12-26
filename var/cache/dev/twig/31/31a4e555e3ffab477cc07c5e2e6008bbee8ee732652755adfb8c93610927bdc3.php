<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_bb085d3ef77c1bc9549e57d04461b8342aee2a4e1a8021c725484685331c5c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb085d3ef77c1bc9549e57d04461b8342aee2a4e1a8021c725484685331c5c2d->enter($__internal_bb085d3ef77c1bc9549e57d04461b8342aee2a4e1a8021c725484685331c5c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c849fbc453e46b7b15353acd8144549193f479e060be13fe6ff05ac48eecc656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c849fbc453e46b7b15353acd8144549193f479e060be13fe6ff05ac48eecc656->enter($__internal_c849fbc453e46b7b15353acd8144549193f479e060be13fe6ff05ac48eecc656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bb085d3ef77c1bc9549e57d04461b8342aee2a4e1a8021c725484685331c5c2d->leave($__internal_bb085d3ef77c1bc9549e57d04461b8342aee2a4e1a8021c725484685331c5c2d_prof);

        
        $__internal_c849fbc453e46b7b15353acd8144549193f479e060be13fe6ff05ac48eecc656->leave($__internal_c849fbc453e46b7b15353acd8144549193f479e060be13fe6ff05ac48eecc656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
