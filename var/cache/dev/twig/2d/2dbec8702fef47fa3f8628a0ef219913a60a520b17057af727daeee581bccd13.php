<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c8524662da54c258e4fa8c0ab555450466bf4ca71db21872576dfd8f573cca04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ba6267b2fe79ab6423e94dbc8aa012b3c85c3dad3ffec57918f1b6f7f668a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba6267b2fe79ab6423e94dbc8aa012b3c85c3dad3ffec57918f1b6f7f668a06->enter($__internal_1ba6267b2fe79ab6423e94dbc8aa012b3c85c3dad3ffec57918f1b6f7f668a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_fea77adc206ac6bf0fbe4c07c6401f79603a23f1591697b40fe14494a861ba3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea77adc206ac6bf0fbe4c07c6401f79603a23f1591697b40fe14494a861ba3a->enter($__internal_fea77adc206ac6bf0fbe4c07c6401f79603a23f1591697b40fe14494a861ba3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba6267b2fe79ab6423e94dbc8aa012b3c85c3dad3ffec57918f1b6f7f668a06->leave($__internal_1ba6267b2fe79ab6423e94dbc8aa012b3c85c3dad3ffec57918f1b6f7f668a06_prof);

        
        $__internal_fea77adc206ac6bf0fbe4c07c6401f79603a23f1591697b40fe14494a861ba3a->leave($__internal_fea77adc206ac6bf0fbe4c07c6401f79603a23f1591697b40fe14494a861ba3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47d03aa332754968df5bebd9c4e6b8fb9753e2f4dec2eec13d74defa6a3b16f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d03aa332754968df5bebd9c4e6b8fb9753e2f4dec2eec13d74defa6a3b16f7->enter($__internal_47d03aa332754968df5bebd9c4e6b8fb9753e2f4dec2eec13d74defa6a3b16f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79f9c8eeba071a9e74fe82508f0d892b188615ff13deb5c7939c6ca6c1382e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f9c8eeba071a9e74fe82508f0d892b188615ff13deb5c7939c6ca6c1382e63->enter($__internal_79f9c8eeba071a9e74fe82508f0d892b188615ff13deb5c7939c6ca6c1382e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div>
        ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_79f9c8eeba071a9e74fe82508f0d892b188615ff13deb5c7939c6ca6c1382e63->leave($__internal_79f9c8eeba071a9e74fe82508f0d892b188615ff13deb5c7939c6ca6c1382e63_prof);

        
        $__internal_47d03aa332754968df5bebd9c4e6b8fb9753e2f4dec2eec13d74defa6a3b16f7->leave($__internal_47d03aa332754968df5bebd9c4e6b8fb9753e2f4dec2eec13d74defa6a3b16f7_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdb73801176500969092ce032804a7da4298d57c0cf1de8316f2c3b97dfb40dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb73801176500969092ce032804a7da4298d57c0cf1de8316f2c3b97dfb40dc->enter($__internal_bdb73801176500969092ce032804a7da4298d57c0cf1de8316f2c3b97dfb40dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e286bb6e88d6a3bd9ef202bc196b845f24ae8fde09c438947684bdd8b12d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e286bb6e88d6a3bd9ef202bc196b845f24ae8fde09c438947684bdd8b12d05e->enter($__internal_1e286bb6e88d6a3bd9ef202bc196b845f24ae8fde09c438947684bdd8b12d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_1e286bb6e88d6a3bd9ef202bc196b845f24ae8fde09c438947684bdd8b12d05e->leave($__internal_1e286bb6e88d6a3bd9ef202bc196b845f24ae8fde09c438947684bdd8b12d05e_prof);

        
        $__internal_bdb73801176500969092ce032804a7da4298d57c0cf1de8316f2c3b97dfb40dc->leave($__internal_bdb73801176500969092ce032804a7da4298d57c0cf1de8316f2c3b97dfb40dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base2.html.twig' %}

{% block  body %}
    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/nico/pizzerianostra/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
