<?php

/* :pedido:edit.html.twig */
class __TwigTemplate_b20d08e8a8b728e5d657f5e6bd092c0f7bbe346e94b5f73453fbcd105b87b39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pedido:edit.html.twig", 1);
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
        $__internal_e12fa1b180860ed579183fb0f0b636c9736c41fe5f09c5960a824e218c0579e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12fa1b180860ed579183fb0f0b636c9736c41fe5f09c5960a824e218c0579e0->enter($__internal_e12fa1b180860ed579183fb0f0b636c9736c41fe5f09c5960a824e218c0579e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $__internal_dbbef8ec5bc87c7e7976e07238bc83c08e8c6460c26675a7324686e159c27b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbef8ec5bc87c7e7976e07238bc83c08e8c6460c26675a7324686e159c27b1d->enter($__internal_dbbef8ec5bc87c7e7976e07238bc83c08e8c6460c26675a7324686e159c27b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pedido:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12fa1b180860ed579183fb0f0b636c9736c41fe5f09c5960a824e218c0579e0->leave($__internal_e12fa1b180860ed579183fb0f0b636c9736c41fe5f09c5960a824e218c0579e0_prof);

        
        $__internal_dbbef8ec5bc87c7e7976e07238bc83c08e8c6460c26675a7324686e159c27b1d->leave($__internal_dbbef8ec5bc87c7e7976e07238bc83c08e8c6460c26675a7324686e159c27b1d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27d55cc3df5bfa21c9822edcd67bc66f67141ed2e9c60e550e1b4989f37db6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d55cc3df5bfa21c9822edcd67bc66f67141ed2e9c60e550e1b4989f37db6c8->enter($__internal_27d55cc3df5bfa21c9822edcd67bc66f67141ed2e9c60e550e1b4989f37db6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d252814a6811053c391c21d6576b7dab268ff2e6092b89bfa6a70c6e34818dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d252814a6811053c391c21d6576b7dab268ff2e6092b89bfa6a70c6e34818dfa->enter($__internal_d252814a6811053c391c21d6576b7dab268ff2e6092b89bfa6a70c6e34818dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\" class=\"btn btn-warning\">Back to the list</a>

                </div>
            </div>
        </ol>
    </section>
    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Edit\" />
                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        <ul>
                            <li>
                                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <input type=\"submit\" value=\"Delete\">
                                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_d252814a6811053c391c21d6576b7dab268ff2e6092b89bfa6a70c6e34818dfa->leave($__internal_d252814a6811053c391c21d6576b7dab268ff2e6092b89bfa6a70c6e34818dfa_prof);

        
        $__internal_27d55cc3df5bfa21c9822edcd67bc66f67141ed2e9c60e550e1b4989f37db6c8->leave($__internal_27d55cc3df5bfa21c9822edcd67bc66f67141ed2e9c60e550e1b4989f37db6c8_prof);

    }

    public function getTemplateName()
    {
        return ":pedido:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  88 => 29,  82 => 26,  77 => 24,  73 => 23,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"content-header\">
        <h1>
            Editar pedido
        </h1>
        <ol class=\"breadcrumb\">
            <div class=\"margin pull-right\">
                <div class=\"btn-group\">
                    <a href=\"{{ path('pedido_index') }}\" class=\"btn btn-warning\">Back to the list</a>

                </div>
            </div>
        </ol>
    </section>
    <br>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        {{ form_start(edit_form) }}
                        {{ form_widget(edit_form) }}
                        <input type=\"submit\" value=\"Edit\" />
                        {{ form_end(edit_form) }}
                        <ul>
                            <li>
                                {{ form_start(delete_form) }}
                                <input type=\"submit\" value=\"Delete\">
                                {{ form_end(delete_form) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



{% endblock %}
", ":pedido:edit.html.twig", "/home/nico/pizzerianostra/app/Resources/views/pedido/edit.html.twig");
    }
}
