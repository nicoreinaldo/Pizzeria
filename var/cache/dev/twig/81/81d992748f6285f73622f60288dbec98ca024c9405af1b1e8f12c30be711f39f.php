<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_111af36d9aaec26d61ccec7aa26665d80a6153838da23d07aeb676e957a90213 extends Twig_Template
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
        $__internal_0e2338a07e707396210072713bfb67ebae04807a87b485238a2ac2fb2be7af16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2338a07e707396210072713bfb67ebae04807a87b485238a2ac2fb2be7af16->enter($__internal_0e2338a07e707396210072713bfb67ebae04807a87b485238a2ac2fb2be7af16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c797ee8caa58bfbd84720d921545ede9bdef5edc3cdb6aa7cdadada3bc2f12b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c797ee8caa58bfbd84720d921545ede9bdef5edc3cdb6aa7cdadada3bc2f12b7->enter($__internal_c797ee8caa58bfbd84720d921545ede9bdef5edc3cdb6aa7cdadada3bc2f12b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0e2338a07e707396210072713bfb67ebae04807a87b485238a2ac2fb2be7af16->leave($__internal_0e2338a07e707396210072713bfb67ebae04807a87b485238a2ac2fb2be7af16_prof);

        
        $__internal_c797ee8caa58bfbd84720d921545ede9bdef5edc3cdb6aa7cdadada3bc2f12b7->leave($__internal_c797ee8caa58bfbd84720d921545ede9bdef5edc3cdb6aa7cdadada3bc2f12b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
