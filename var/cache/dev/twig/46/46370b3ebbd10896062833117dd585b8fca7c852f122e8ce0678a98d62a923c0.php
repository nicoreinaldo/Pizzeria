<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8b80adb9338105607039f313a2856d066d8cef22f533aa2350d29cd16cb1d358 extends Twig_Template
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
        $__internal_2d96f4b0195de6e2d125f318e8bc4d6ce711a05c33ffe6185de8522c87c65565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d96f4b0195de6e2d125f318e8bc4d6ce711a05c33ffe6185de8522c87c65565->enter($__internal_2d96f4b0195de6e2d125f318e8bc4d6ce711a05c33ffe6185de8522c87c65565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_026e70a262f9267779cda5e89e5efe2581cfa6a92bf536af0d5e52aef2a11a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026e70a262f9267779cda5e89e5efe2581cfa6a92bf536af0d5e52aef2a11a7c->enter($__internal_026e70a262f9267779cda5e89e5efe2581cfa6a92bf536af0d5e52aef2a11a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2d96f4b0195de6e2d125f318e8bc4d6ce711a05c33ffe6185de8522c87c65565->leave($__internal_2d96f4b0195de6e2d125f318e8bc4d6ce711a05c33ffe6185de8522c87c65565_prof);

        
        $__internal_026e70a262f9267779cda5e89e5efe2581cfa6a92bf536af0d5e52aef2a11a7c->leave($__internal_026e70a262f9267779cda5e89e5efe2581cfa6a92bf536af0d5e52aef2a11a7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
