<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_290fde11590f1bbaf60b82cf01cc8c55c4c7cb735b2d6a309b2f10d8d5415f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_003e767bf95c188a47aa7540252c3b29607824f9a85b37aa6d2349dfb8ebe0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003e767bf95c188a47aa7540252c3b29607824f9a85b37aa6d2349dfb8ebe0b0->enter($__internal_003e767bf95c188a47aa7540252c3b29607824f9a85b37aa6d2349dfb8ebe0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_272a5bfe5c8e14cf8bdae28ffb75140dcb4516ef569393d48f055a1460b8b061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272a5bfe5c8e14cf8bdae28ffb75140dcb4516ef569393d48f055a1460b8b061->enter($__internal_272a5bfe5c8e14cf8bdae28ffb75140dcb4516ef569393d48f055a1460b8b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003e767bf95c188a47aa7540252c3b29607824f9a85b37aa6d2349dfb8ebe0b0->leave($__internal_003e767bf95c188a47aa7540252c3b29607824f9a85b37aa6d2349dfb8ebe0b0_prof);

        
        $__internal_272a5bfe5c8e14cf8bdae28ffb75140dcb4516ef569393d48f055a1460b8b061->leave($__internal_272a5bfe5c8e14cf8bdae28ffb75140dcb4516ef569393d48f055a1460b8b061_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_33a1162ae4d3405b330c00cae2042e123b1c170f22157b0391e8206ab72c15c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a1162ae4d3405b330c00cae2042e123b1c170f22157b0391e8206ab72c15c2->enter($__internal_33a1162ae4d3405b330c00cae2042e123b1c170f22157b0391e8206ab72c15c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_52df37df53d544b088fed2ba60db93e0cf68298e530d40b2c61c1d55f9160239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52df37df53d544b088fed2ba60db93e0cf68298e530d40b2c61c1d55f9160239->enter($__internal_52df37df53d544b088fed2ba60db93e0cf68298e530d40b2c61c1d55f9160239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_52df37df53d544b088fed2ba60db93e0cf68298e530d40b2c61c1d55f9160239->leave($__internal_52df37df53d544b088fed2ba60db93e0cf68298e530d40b2c61c1d55f9160239_prof);

        
        $__internal_33a1162ae4d3405b330c00cae2042e123b1c170f22157b0391e8206ab72c15c2->leave($__internal_33a1162ae4d3405b330c00cae2042e123b1c170f22157b0391e8206ab72c15c2_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_34f306ae398f3378c827641768a5d4460c7d66efbae1d593008d635ca1ec2b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f306ae398f3378c827641768a5d4460c7d66efbae1d593008d635ca1ec2b4e->enter($__internal_34f306ae398f3378c827641768a5d4460c7d66efbae1d593008d635ca1ec2b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_90db77a0d2852384401152cf188512e10f624967a1885ee627e56f78aa93e63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90db77a0d2852384401152cf188512e10f624967a1885ee627e56f78aa93e63f->enter($__internal_90db77a0d2852384401152cf188512e10f624967a1885ee627e56f78aa93e63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_90db77a0d2852384401152cf188512e10f624967a1885ee627e56f78aa93e63f->leave($__internal_90db77a0d2852384401152cf188512e10f624967a1885ee627e56f78aa93e63f_prof);

        
        $__internal_34f306ae398f3378c827641768a5d4460c7d66efbae1d593008d635ca1ec2b4e->leave($__internal_34f306ae398f3378c827641768a5d4460c7d66efbae1d593008d635ca1ec2b4e_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_72445e185fb2e8050ff556504e7442ee367f9f9379ebc28693a1db7fa483c496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72445e185fb2e8050ff556504e7442ee367f9f9379ebc28693a1db7fa483c496->enter($__internal_72445e185fb2e8050ff556504e7442ee367f9f9379ebc28693a1db7fa483c496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b515220023df7b8e91c40ef9608317d9f4461b35068665061209940465dcabef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515220023df7b8e91c40ef9608317d9f4461b35068665061209940465dcabef->enter($__internal_b515220023df7b8e91c40ef9608317d9f4461b35068665061209940465dcabef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b515220023df7b8e91c40ef9608317d9f4461b35068665061209940465dcabef->leave($__internal_b515220023df7b8e91c40ef9608317d9f4461b35068665061209940465dcabef_prof);

        
        $__internal_72445e185fb2e8050ff556504e7442ee367f9f9379ebc28693a1db7fa483c496->leave($__internal_72445e185fb2e8050ff556504e7442ee367f9f9379ebc28693a1db7fa483c496_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2830c625a2567de52712744abe60893863597d5b13d7b9b83daaead4eb4483e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2830c625a2567de52712744abe60893863597d5b13d7b9b83daaead4eb4483e3->enter($__internal_2830c625a2567de52712744abe60893863597d5b13d7b9b83daaead4eb4483e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_298c53ca8eddad1631d65f45c4596ede79b9c00ffd35f71a97448e577ab1e423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298c53ca8eddad1631d65f45c4596ede79b9c00ffd35f71a97448e577ab1e423->enter($__internal_298c53ca8eddad1631d65f45c4596ede79b9c00ffd35f71a97448e577ab1e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_298c53ca8eddad1631d65f45c4596ede79b9c00ffd35f71a97448e577ab1e423->leave($__internal_298c53ca8eddad1631d65f45c4596ede79b9c00ffd35f71a97448e577ab1e423_prof);

        
        $__internal_2830c625a2567de52712744abe60893863597d5b13d7b9b83daaead4eb4483e3->leave($__internal_2830c625a2567de52712744abe60893863597d5b13d7b9b83daaead4eb4483e3_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_30705d8c78427c9ce407b42d47454e34655e664a1e5e14701e7071afbcf5d11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30705d8c78427c9ce407b42d47454e34655e664a1e5e14701e7071afbcf5d11e->enter($__internal_30705d8c78427c9ce407b42d47454e34655e664a1e5e14701e7071afbcf5d11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_77fd69ce3ef6ec63c6add1727a8baad66d84897d9e094267be8c8f5b59b5f602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd69ce3ef6ec63c6add1727a8baad66d84897d9e094267be8c8f5b59b5f602->enter($__internal_77fd69ce3ef6ec63c6add1727a8baad66d84897d9e094267be8c8f5b59b5f602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_77fd69ce3ef6ec63c6add1727a8baad66d84897d9e094267be8c8f5b59b5f602->leave($__internal_77fd69ce3ef6ec63c6add1727a8baad66d84897d9e094267be8c8f5b59b5f602_prof);

        
        $__internal_30705d8c78427c9ce407b42d47454e34655e664a1e5e14701e7071afbcf5d11e->leave($__internal_30705d8c78427c9ce407b42d47454e34655e664a1e5e14701e7071afbcf5d11e_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ecaf3dfe7f1d0e2da8f15a64c66e64d1b968019896415bc432ea72620b39316f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecaf3dfe7f1d0e2da8f15a64c66e64d1b968019896415bc432ea72620b39316f->enter($__internal_ecaf3dfe7f1d0e2da8f15a64c66e64d1b968019896415bc432ea72620b39316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_b24623c3f82613911c212bb2ccc19a2f330e80a96b7806df58e4c72562bdfbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24623c3f82613911c212bb2ccc19a2f330e80a96b7806df58e4c72562bdfbc8->enter($__internal_b24623c3f82613911c212bb2ccc19a2f330e80a96b7806df58e4c72562bdfbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_b24623c3f82613911c212bb2ccc19a2f330e80a96b7806df58e4c72562bdfbc8->leave($__internal_b24623c3f82613911c212bb2ccc19a2f330e80a96b7806df58e4c72562bdfbc8_prof);

        
        $__internal_ecaf3dfe7f1d0e2da8f15a64c66e64d1b968019896415bc432ea72620b39316f->leave($__internal_ecaf3dfe7f1d0e2da8f15a64c66e64d1b968019896415bc432ea72620b39316f_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c148f83902fcdd4874840627663f5a7839e8ede22832f63cb19cc4f86fc620a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c148f83902fcdd4874840627663f5a7839e8ede22832f63cb19cc4f86fc620a9->enter($__internal_c148f83902fcdd4874840627663f5a7839e8ede22832f63cb19cc4f86fc620a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_dbd18c3a23e0ff1c622042d2eb53ca611cb0da16f2af4d85734eed7e4934fc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd18c3a23e0ff1c622042d2eb53ca611cb0da16f2af4d85734eed7e4934fc16->enter($__internal_dbd18c3a23e0ff1c622042d2eb53ca611cb0da16f2af4d85734eed7e4934fc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_dbd18c3a23e0ff1c622042d2eb53ca611cb0da16f2af4d85734eed7e4934fc16->leave($__internal_dbd18c3a23e0ff1c622042d2eb53ca611cb0da16f2af4d85734eed7e4934fc16_prof);

        
        $__internal_c148f83902fcdd4874840627663f5a7839e8ede22832f63cb19cc4f86fc620a9->leave($__internal_c148f83902fcdd4874840627663f5a7839e8ede22832f63cb19cc4f86fc620a9_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_943d16a52aefc6d1c7d110265728a2616d867ba8bf6844519c27aca15479b654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943d16a52aefc6d1c7d110265728a2616d867ba8bf6844519c27aca15479b654->enter($__internal_943d16a52aefc6d1c7d110265728a2616d867ba8bf6844519c27aca15479b654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3c78f4e1d877944eb6fded397bd14b82b3438f5074b9f3ce89114a57b03abc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c78f4e1d877944eb6fded397bd14b82b3438f5074b9f3ce89114a57b03abc93->enter($__internal_3c78f4e1d877944eb6fded397bd14b82b3438f5074b9f3ce89114a57b03abc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_3c78f4e1d877944eb6fded397bd14b82b3438f5074b9f3ce89114a57b03abc93->leave($__internal_3c78f4e1d877944eb6fded397bd14b82b3438f5074b9f3ce89114a57b03abc93_prof);

        
        $__internal_943d16a52aefc6d1c7d110265728a2616d867ba8bf6844519c27aca15479b654->leave($__internal_943d16a52aefc6d1c7d110265728a2616d867ba8bf6844519c27aca15479b654_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e5202c002c166223a46efff970a01654b0494a03d2aff237cc874ee085ac28c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5202c002c166223a46efff970a01654b0494a03d2aff237cc874ee085ac28c5->enter($__internal_e5202c002c166223a46efff970a01654b0494a03d2aff237cc874ee085ac28c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5ad81af8c184fbc1056ae4309a701af9c3745d387baf17b13e01903803a5ca89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad81af8c184fbc1056ae4309a701af9c3745d387baf17b13e01903803a5ca89->enter($__internal_5ad81af8c184fbc1056ae4309a701af9c3745d387baf17b13e01903803a5ca89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_5ad81af8c184fbc1056ae4309a701af9c3745d387baf17b13e01903803a5ca89->leave($__internal_5ad81af8c184fbc1056ae4309a701af9c3745d387baf17b13e01903803a5ca89_prof);

        
        $__internal_e5202c002c166223a46efff970a01654b0494a03d2aff237cc874ee085ac28c5->leave($__internal_e5202c002c166223a46efff970a01654b0494a03d2aff237cc874ee085ac28c5_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bea0c47935995c3cdf8a45deef98bfdc0eeff90a8ed8298f5f6d03fd227e1813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea0c47935995c3cdf8a45deef98bfdc0eeff90a8ed8298f5f6d03fd227e1813->enter($__internal_bea0c47935995c3cdf8a45deef98bfdc0eeff90a8ed8298f5f6d03fd227e1813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_213db370ba80778eb0899163ffc8b6201ed845565e5bc7506e20099707eea253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213db370ba80778eb0899163ffc8b6201ed845565e5bc7506e20099707eea253->enter($__internal_213db370ba80778eb0899163ffc8b6201ed845565e5bc7506e20099707eea253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_213db370ba80778eb0899163ffc8b6201ed845565e5bc7506e20099707eea253->leave($__internal_213db370ba80778eb0899163ffc8b6201ed845565e5bc7506e20099707eea253_prof);

        
        $__internal_bea0c47935995c3cdf8a45deef98bfdc0eeff90a8ed8298f5f6d03fd227e1813->leave($__internal_bea0c47935995c3cdf8a45deef98bfdc0eeff90a8ed8298f5f6d03fd227e1813_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ffcb3513c3d3712a3ca7faf21256838a93527fba61229ccdfb0f7c0d93fd1cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcb3513c3d3712a3ca7faf21256838a93527fba61229ccdfb0f7c0d93fd1cc0->enter($__internal_ffcb3513c3d3712a3ca7faf21256838a93527fba61229ccdfb0f7c0d93fd1cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_76a708637a9b29c428927f47e88902ecd86ed718dab3b13eab9a874e9d49ef0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a708637a9b29c428927f47e88902ecd86ed718dab3b13eab9a874e9d49ef0c->enter($__internal_76a708637a9b29c428927f47e88902ecd86ed718dab3b13eab9a874e9d49ef0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_76a708637a9b29c428927f47e88902ecd86ed718dab3b13eab9a874e9d49ef0c->leave($__internal_76a708637a9b29c428927f47e88902ecd86ed718dab3b13eab9a874e9d49ef0c_prof);

        
        $__internal_ffcb3513c3d3712a3ca7faf21256838a93527fba61229ccdfb0f7c0d93fd1cc0->leave($__internal_ffcb3513c3d3712a3ca7faf21256838a93527fba61229ccdfb0f7c0d93fd1cc0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2452186540c298928e8016e03ebee3b12b988f07dc885cfef25f8227e9072e43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2452186540c298928e8016e03ebee3b12b988f07dc885cfef25f8227e9072e43->enter($__internal_2452186540c298928e8016e03ebee3b12b988f07dc885cfef25f8227e9072e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8956c226f7d0e6eb9697a9a7dec6e3b9a1493a231281c6e70f7afd6d4dd635a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8956c226f7d0e6eb9697a9a7dec6e3b9a1493a231281c6e70f7afd6d4dd635a0->enter($__internal_8956c226f7d0e6eb9697a9a7dec6e3b9a1493a231281c6e70f7afd6d4dd635a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_8956c226f7d0e6eb9697a9a7dec6e3b9a1493a231281c6e70f7afd6d4dd635a0->leave($__internal_8956c226f7d0e6eb9697a9a7dec6e3b9a1493a231281c6e70f7afd6d4dd635a0_prof);

        
        $__internal_2452186540c298928e8016e03ebee3b12b988f07dc885cfef25f8227e9072e43->leave($__internal_2452186540c298928e8016e03ebee3b12b988f07dc885cfef25f8227e9072e43_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff3e9dc14af098fff443911f87b37edae6fbe90bedb04a0a2af6ec0eb76c2d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3e9dc14af098fff443911f87b37edae6fbe90bedb04a0a2af6ec0eb76c2d56->enter($__internal_ff3e9dc14af098fff443911f87b37edae6fbe90bedb04a0a2af6ec0eb76c2d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e617d46061e9e83ff96b3ee274c0328faaac1297e5aea367d4ac97fe8d08151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e617d46061e9e83ff96b3ee274c0328faaac1297e5aea367d4ac97fe8d08151d->enter($__internal_e617d46061e9e83ff96b3ee274c0328faaac1297e5aea367d4ac97fe8d08151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e617d46061e9e83ff96b3ee274c0328faaac1297e5aea367d4ac97fe8d08151d->leave($__internal_e617d46061e9e83ff96b3ee274c0328faaac1297e5aea367d4ac97fe8d08151d_prof);

        
        $__internal_ff3e9dc14af098fff443911f87b37edae6fbe90bedb04a0a2af6ec0eb76c2d56->leave($__internal_ff3e9dc14af098fff443911f87b37edae6fbe90bedb04a0a2af6ec0eb76c2d56_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a8130a5246abe833a232b7285ff89605d09d78e377082ec010db36e041648857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8130a5246abe833a232b7285ff89605d09d78e377082ec010db36e041648857->enter($__internal_a8130a5246abe833a232b7285ff89605d09d78e377082ec010db36e041648857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_464e4294c349b44a18a7383b52208cdb071eec6bfd4cb2d86fc69757264b72b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464e4294c349b44a18a7383b52208cdb071eec6bfd4cb2d86fc69757264b72b9->enter($__internal_464e4294c349b44a18a7383b52208cdb071eec6bfd4cb2d86fc69757264b72b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_464e4294c349b44a18a7383b52208cdb071eec6bfd4cb2d86fc69757264b72b9->leave($__internal_464e4294c349b44a18a7383b52208cdb071eec6bfd4cb2d86fc69757264b72b9_prof);

        
        $__internal_a8130a5246abe833a232b7285ff89605d09d78e377082ec010db36e041648857->leave($__internal_a8130a5246abe833a232b7285ff89605d09d78e377082ec010db36e041648857_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_20f7916e1eda22ee5b0bb2de9bafe23b1bc329e7b4a99874394ae50f109c09e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f7916e1eda22ee5b0bb2de9bafe23b1bc329e7b4a99874394ae50f109c09e6->enter($__internal_20f7916e1eda22ee5b0bb2de9bafe23b1bc329e7b4a99874394ae50f109c09e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_570c8a4b2d643a0f0ee7647a1d063a3bfa857edbd3b3abac057e6de1dad29ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570c8a4b2d643a0f0ee7647a1d063a3bfa857edbd3b3abac057e6de1dad29ba8->enter($__internal_570c8a4b2d643a0f0ee7647a1d063a3bfa857edbd3b3abac057e6de1dad29ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_570c8a4b2d643a0f0ee7647a1d063a3bfa857edbd3b3abac057e6de1dad29ba8->leave($__internal_570c8a4b2d643a0f0ee7647a1d063a3bfa857edbd3b3abac057e6de1dad29ba8_prof);

        
        $__internal_20f7916e1eda22ee5b0bb2de9bafe23b1bc329e7b4a99874394ae50f109c09e6->leave($__internal_20f7916e1eda22ee5b0bb2de9bafe23b1bc329e7b4a99874394ae50f109c09e6_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3f536f26489190d7f92b967a211545f088a14b378b88d35028ef6a6d68e17776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f536f26489190d7f92b967a211545f088a14b378b88d35028ef6a6d68e17776->enter($__internal_3f536f26489190d7f92b967a211545f088a14b378b88d35028ef6a6d68e17776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9144293226094251642c7920e72240165df7740a083138f5448cc1d571039a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9144293226094251642c7920e72240165df7740a083138f5448cc1d571039a0b->enter($__internal_9144293226094251642c7920e72240165df7740a083138f5448cc1d571039a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9144293226094251642c7920e72240165df7740a083138f5448cc1d571039a0b->leave($__internal_9144293226094251642c7920e72240165df7740a083138f5448cc1d571039a0b_prof);

        
        $__internal_3f536f26489190d7f92b967a211545f088a14b378b88d35028ef6a6d68e17776->leave($__internal_3f536f26489190d7f92b967a211545f088a14b378b88d35028ef6a6d68e17776_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d7a656022955fdbebe2988b99cf46e1103d894f4c7a737a22b8923c905d3dc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a656022955fdbebe2988b99cf46e1103d894f4c7a737a22b8923c905d3dc73->enter($__internal_d7a656022955fdbebe2988b99cf46e1103d894f4c7a737a22b8923c905d3dc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cb0fb819e2540b5ec69d34cff3d11935e802b76c43361d58d64241bcc6bab407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0fb819e2540b5ec69d34cff3d11935e802b76c43361d58d64241bcc6bab407->enter($__internal_cb0fb819e2540b5ec69d34cff3d11935e802b76c43361d58d64241bcc6bab407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_cb0fb819e2540b5ec69d34cff3d11935e802b76c43361d58d64241bcc6bab407->leave($__internal_cb0fb819e2540b5ec69d34cff3d11935e802b76c43361d58d64241bcc6bab407_prof);

        
        $__internal_d7a656022955fdbebe2988b99cf46e1103d894f4c7a737a22b8923c905d3dc73->leave($__internal_d7a656022955fdbebe2988b99cf46e1103d894f4c7a737a22b8923c905d3dc73_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d10d312b41243f5bcc035758dd08baf9c9a33209ef0ace5b16b275d838320b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10d312b41243f5bcc035758dd08baf9c9a33209ef0ace5b16b275d838320b9d->enter($__internal_d10d312b41243f5bcc035758dd08baf9c9a33209ef0ace5b16b275d838320b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1ceb27125aef9921a5f2f547e983cd771bbf752a49a2ac235769cc635a70a3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceb27125aef9921a5f2f547e983cd771bbf752a49a2ac235769cc635a70a3bb->enter($__internal_1ceb27125aef9921a5f2f547e983cd771bbf752a49a2ac235769cc635a70a3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1ceb27125aef9921a5f2f547e983cd771bbf752a49a2ac235769cc635a70a3bb->leave($__internal_1ceb27125aef9921a5f2f547e983cd771bbf752a49a2ac235769cc635a70a3bb_prof);

        
        $__internal_d10d312b41243f5bcc035758dd08baf9c9a33209ef0ace5b16b275d838320b9d->leave($__internal_d10d312b41243f5bcc035758dd08baf9c9a33209ef0ace5b16b275d838320b9d_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0737b4a45fb9be291fb1caeb6d5398b9d84153e902eaf9893b38db27ab323ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0737b4a45fb9be291fb1caeb6d5398b9d84153e902eaf9893b38db27ab323ab8->enter($__internal_0737b4a45fb9be291fb1caeb6d5398b9d84153e902eaf9893b38db27ab323ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_43ca241911ada943b98fdf8e6434f84227069a58124daa4bc2d66cf690cef173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ca241911ada943b98fdf8e6434f84227069a58124daa4bc2d66cf690cef173->enter($__internal_43ca241911ada943b98fdf8e6434f84227069a58124daa4bc2d66cf690cef173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_43ca241911ada943b98fdf8e6434f84227069a58124daa4bc2d66cf690cef173->leave($__internal_43ca241911ada943b98fdf8e6434f84227069a58124daa4bc2d66cf690cef173_prof);

        
        $__internal_0737b4a45fb9be291fb1caeb6d5398b9d84153e902eaf9893b38db27ab323ab8->leave($__internal_0737b4a45fb9be291fb1caeb6d5398b9d84153e902eaf9893b38db27ab323ab8_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8168c05edb9a7d2cc0bd65e98494e128599b5d50acbd485e9747afb941fdc0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8168c05edb9a7d2cc0bd65e98494e128599b5d50acbd485e9747afb941fdc0a2->enter($__internal_8168c05edb9a7d2cc0bd65e98494e128599b5d50acbd485e9747afb941fdc0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_95aaead7e37e2ec34e61341c3a6d0b9ef54d74ec9983ee97746c79ef159816aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95aaead7e37e2ec34e61341c3a6d0b9ef54d74ec9983ee97746c79ef159816aa->enter($__internal_95aaead7e37e2ec34e61341c3a6d0b9ef54d74ec9983ee97746c79ef159816aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_95aaead7e37e2ec34e61341c3a6d0b9ef54d74ec9983ee97746c79ef159816aa->leave($__internal_95aaead7e37e2ec34e61341c3a6d0b9ef54d74ec9983ee97746c79ef159816aa_prof);

        
        $__internal_8168c05edb9a7d2cc0bd65e98494e128599b5d50acbd485e9747afb941fdc0a2->leave($__internal_8168c05edb9a7d2cc0bd65e98494e128599b5d50acbd485e9747afb941fdc0a2_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d5533e43830287559837f199dbdce733e762dde9675d5b982b9053329a3e98d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5533e43830287559837f199dbdce733e762dde9675d5b982b9053329a3e98d8->enter($__internal_d5533e43830287559837f199dbdce733e762dde9675d5b982b9053329a3e98d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_44bef9c687c2a83ec2c4c8b22b2d105e5a75c920d3bfdf1995e6e67fb9527804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bef9c687c2a83ec2c4c8b22b2d105e5a75c920d3bfdf1995e6e67fb9527804->enter($__internal_44bef9c687c2a83ec2c4c8b22b2d105e5a75c920d3bfdf1995e6e67fb9527804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_44bef9c687c2a83ec2c4c8b22b2d105e5a75c920d3bfdf1995e6e67fb9527804->leave($__internal_44bef9c687c2a83ec2c4c8b22b2d105e5a75c920d3bfdf1995e6e67fb9527804_prof);

        
        $__internal_d5533e43830287559837f199dbdce733e762dde9675d5b982b9053329a3e98d8->leave($__internal_d5533e43830287559837f199dbdce733e762dde9675d5b982b9053329a3e98d8_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d16acc72f16eaffcda741c0d540b2b30c0b567806347d32c7cc073ca8064788f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16acc72f16eaffcda741c0d540b2b30c0b567806347d32c7cc073ca8064788f->enter($__internal_d16acc72f16eaffcda741c0d540b2b30c0b567806347d32c7cc073ca8064788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a153b1c58640983b1c4567d07380060a7d35ae020849e4c2d0f2917bf6e9130f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a153b1c58640983b1c4567d07380060a7d35ae020849e4c2d0f2917bf6e9130f->enter($__internal_a153b1c58640983b1c4567d07380060a7d35ae020849e4c2d0f2917bf6e9130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a153b1c58640983b1c4567d07380060a7d35ae020849e4c2d0f2917bf6e9130f->leave($__internal_a153b1c58640983b1c4567d07380060a7d35ae020849e4c2d0f2917bf6e9130f_prof);

        
        $__internal_d16acc72f16eaffcda741c0d540b2b30c0b567806347d32c7cc073ca8064788f->leave($__internal_d16acc72f16eaffcda741c0d540b2b30c0b567806347d32c7cc073ca8064788f_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ce32002cd025bcd58f5691a0ddd039e1d62165f4c52e60fa925a736a96ae8382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce32002cd025bcd58f5691a0ddd039e1d62165f4c52e60fa925a736a96ae8382->enter($__internal_ce32002cd025bcd58f5691a0ddd039e1d62165f4c52e60fa925a736a96ae8382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ec1a205ce9f654e547a6d88ae403321fcd27c94102ad14bca25c7851861dcc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1a205ce9f654e547a6d88ae403321fcd27c94102ad14bca25c7851861dcc1c->enter($__internal_ec1a205ce9f654e547a6d88ae403321fcd27c94102ad14bca25c7851861dcc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ec1a205ce9f654e547a6d88ae403321fcd27c94102ad14bca25c7851861dcc1c->leave($__internal_ec1a205ce9f654e547a6d88ae403321fcd27c94102ad14bca25c7851861dcc1c_prof);

        
        $__internal_ce32002cd025bcd58f5691a0ddd039e1d62165f4c52e60fa925a736a96ae8382->leave($__internal_ce32002cd025bcd58f5691a0ddd039e1d62165f4c52e60fa925a736a96ae8382_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8594d050133fdd7a1424fee60fa6777a16f9bcbc02a82da30aff7978f08b5758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8594d050133fdd7a1424fee60fa6777a16f9bcbc02a82da30aff7978f08b5758->enter($__internal_8594d050133fdd7a1424fee60fa6777a16f9bcbc02a82da30aff7978f08b5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_fcbda5526f89de9208a8c27a34e7a83a6b20df8095bf759dd5f26da524276fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbda5526f89de9208a8c27a34e7a83a6b20df8095bf759dd5f26da524276fb9->enter($__internal_fcbda5526f89de9208a8c27a34e7a83a6b20df8095bf759dd5f26da524276fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_fcbda5526f89de9208a8c27a34e7a83a6b20df8095bf759dd5f26da524276fb9->leave($__internal_fcbda5526f89de9208a8c27a34e7a83a6b20df8095bf759dd5f26da524276fb9_prof);

        
        $__internal_8594d050133fdd7a1424fee60fa6777a16f9bcbc02a82da30aff7978f08b5758->leave($__internal_8594d050133fdd7a1424fee60fa6777a16f9bcbc02a82da30aff7978f08b5758_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e1b0ea40c5cee813e56109a26c3a1d9bdb481814670979b180bdb225ef5e70df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b0ea40c5cee813e56109a26c3a1d9bdb481814670979b180bdb225ef5e70df->enter($__internal_e1b0ea40c5cee813e56109a26c3a1d9bdb481814670979b180bdb225ef5e70df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d73cd4698e579801150ccd17aa0bc7956a21f5ceb7c9f4fb94e3b888f7bbe31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73cd4698e579801150ccd17aa0bc7956a21f5ceb7c9f4fb94e3b888f7bbe31b->enter($__internal_d73cd4698e579801150ccd17aa0bc7956a21f5ceb7c9f4fb94e3b888f7bbe31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d73cd4698e579801150ccd17aa0bc7956a21f5ceb7c9f4fb94e3b888f7bbe31b->leave($__internal_d73cd4698e579801150ccd17aa0bc7956a21f5ceb7c9f4fb94e3b888f7bbe31b_prof);

        
        $__internal_e1b0ea40c5cee813e56109a26c3a1d9bdb481814670979b180bdb225ef5e70df->leave($__internal_e1b0ea40c5cee813e56109a26c3a1d9bdb481814670979b180bdb225ef5e70df_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
