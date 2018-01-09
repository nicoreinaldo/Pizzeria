<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_f3a1b1668704238be3b5c94cd8cd5cf8417ee84d09767284e67ceea576dbbb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e330d2298d2d4099702556be2a099b09a6ce3d0da4c506ede6aeb3720d05ddab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e330d2298d2d4099702556be2a099b09a6ce3d0da4c506ede6aeb3720d05ddab->enter($__internal_e330d2298d2d4099702556be2a099b09a6ce3d0da4c506ede6aeb3720d05ddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c68e99f9fd656781b0251db474bb6951f9144cba66b89a58eeaad5ece0bdaeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68e99f9fd656781b0251db474bb6951f9144cba66b89a58eeaad5ece0bdaeab->enter($__internal_c68e99f9fd656781b0251db474bb6951f9144cba66b89a58eeaad5ece0bdaeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_e330d2298d2d4099702556be2a099b09a6ce3d0da4c506ede6aeb3720d05ddab->leave($__internal_e330d2298d2d4099702556be2a099b09a6ce3d0da4c506ede6aeb3720d05ddab_prof);

        
        $__internal_c68e99f9fd656781b0251db474bb6951f9144cba66b89a58eeaad5ece0bdaeab->leave($__internal_c68e99f9fd656781b0251db474bb6951f9144cba66b89a58eeaad5ece0bdaeab_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0ebe607c3bb2574d31bacc61f545330e368f9bea9ee394f6f60a657a95ef84e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebe607c3bb2574d31bacc61f545330e368f9bea9ee394f6f60a657a95ef84e5->enter($__internal_0ebe607c3bb2574d31bacc61f545330e368f9bea9ee394f6f60a657a95ef84e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_1dbe5b8210c93659ccb0f4e2ddbd19de9571eec76ba9998d686b4eb85c4abd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbe5b8210c93659ccb0f4e2ddbd19de9571eec76ba9998d686b4eb85c4abd4a->enter($__internal_1dbe5b8210c93659ccb0f4e2ddbd19de9571eec76ba9998d686b4eb85c4abd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1dbe5b8210c93659ccb0f4e2ddbd19de9571eec76ba9998d686b4eb85c4abd4a->leave($__internal_1dbe5b8210c93659ccb0f4e2ddbd19de9571eec76ba9998d686b4eb85c4abd4a_prof);

        
        $__internal_0ebe607c3bb2574d31bacc61f545330e368f9bea9ee394f6f60a657a95ef84e5->leave($__internal_0ebe607c3bb2574d31bacc61f545330e368f9bea9ee394f6f60a657a95ef84e5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_05146aeda864e0de5eb104104484609dba5b079b50052df71696986045836db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05146aeda864e0de5eb104104484609dba5b079b50052df71696986045836db0->enter($__internal_05146aeda864e0de5eb104104484609dba5b079b50052df71696986045836db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_4faa0a1daf0c1497e762592bd99055135df2503802210cef9d4a20e04c7ae86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faa0a1daf0c1497e762592bd99055135df2503802210cef9d4a20e04c7ae86d->enter($__internal_4faa0a1daf0c1497e762592bd99055135df2503802210cef9d4a20e04c7ae86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4faa0a1daf0c1497e762592bd99055135df2503802210cef9d4a20e04c7ae86d->leave($__internal_4faa0a1daf0c1497e762592bd99055135df2503802210cef9d4a20e04c7ae86d_prof);

        
        $__internal_05146aeda864e0de5eb104104484609dba5b079b50052df71696986045836db0->leave($__internal_05146aeda864e0de5eb104104484609dba5b079b50052df71696986045836db0_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_56e4d7345c6c83da1e2a145dedcec8e25cf3a2b5f6518ac1c9179173c81372e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e4d7345c6c83da1e2a145dedcec8e25cf3a2b5f6518ac1c9179173c81372e6->enter($__internal_56e4d7345c6c83da1e2a145dedcec8e25cf3a2b5f6518ac1c9179173c81372e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d98f36347c997b45fa575af8bd800bf2f022fc94f12928e4118c379d5fc614c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98f36347c997b45fa575af8bd800bf2f022fc94f12928e4118c379d5fc614c3->enter($__internal_d98f36347c997b45fa575af8bd800bf2f022fc94f12928e4118c379d5fc614c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_d98f36347c997b45fa575af8bd800bf2f022fc94f12928e4118c379d5fc614c3->leave($__internal_d98f36347c997b45fa575af8bd800bf2f022fc94f12928e4118c379d5fc614c3_prof);

        
        $__internal_56e4d7345c6c83da1e2a145dedcec8e25cf3a2b5f6518ac1c9179173c81372e6->leave($__internal_56e4d7345c6c83da1e2a145dedcec8e25cf3a2b5f6518ac1c9179173c81372e6_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9731fae9ffd8f84e1e99e7b5fbe6696060a44cc7dd10935d48d12a6ce1879787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9731fae9ffd8f84e1e99e7b5fbe6696060a44cc7dd10935d48d12a6ce1879787->enter($__internal_9731fae9ffd8f84e1e99e7b5fbe6696060a44cc7dd10935d48d12a6ce1879787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_85454e8fd2694796f3a1975a37b0d8bab87508e27c2e64ba08582dd210d168cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85454e8fd2694796f3a1975a37b0d8bab87508e27c2e64ba08582dd210d168cd->enter($__internal_85454e8fd2694796f3a1975a37b0d8bab87508e27c2e64ba08582dd210d168cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_85454e8fd2694796f3a1975a37b0d8bab87508e27c2e64ba08582dd210d168cd->leave($__internal_85454e8fd2694796f3a1975a37b0d8bab87508e27c2e64ba08582dd210d168cd_prof);

        
        $__internal_9731fae9ffd8f84e1e99e7b5fbe6696060a44cc7dd10935d48d12a6ce1879787->leave($__internal_9731fae9ffd8f84e1e99e7b5fbe6696060a44cc7dd10935d48d12a6ce1879787_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1f26e7436225f94676ccc638e682695457b146f7065ed71a65fa3177defddaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f26e7436225f94676ccc638e682695457b146f7065ed71a65fa3177defddaa7->enter($__internal_1f26e7436225f94676ccc638e682695457b146f7065ed71a65fa3177defddaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e85508868a52e5cb253182eb21677ca777f5a7b65eefb363bd721eb770f58c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85508868a52e5cb253182eb21677ca777f5a7b65eefb363bd721eb770f58c1a->enter($__internal_e85508868a52e5cb253182eb21677ca777f5a7b65eefb363bd721eb770f58c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e85508868a52e5cb253182eb21677ca777f5a7b65eefb363bd721eb770f58c1a->leave($__internal_e85508868a52e5cb253182eb21677ca777f5a7b65eefb363bd721eb770f58c1a_prof);

        
        $__internal_1f26e7436225f94676ccc638e682695457b146f7065ed71a65fa3177defddaa7->leave($__internal_1f26e7436225f94676ccc638e682695457b146f7065ed71a65fa3177defddaa7_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2663f73408936bcde921c9ae811acbcc75891ede0d0e8af6d8155e8736237c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2663f73408936bcde921c9ae811acbcc75891ede0d0e8af6d8155e8736237c42->enter($__internal_2663f73408936bcde921c9ae811acbcc75891ede0d0e8af6d8155e8736237c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e1b878689dc254c15f887543989edc20eb202a0e3699d829d850e34c4b0b7b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b878689dc254c15f887543989edc20eb202a0e3699d829d850e34c4b0b7b7a->enter($__internal_e1b878689dc254c15f887543989edc20eb202a0e3699d829d850e34c4b0b7b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e1b878689dc254c15f887543989edc20eb202a0e3699d829d850e34c4b0b7b7a->leave($__internal_e1b878689dc254c15f887543989edc20eb202a0e3699d829d850e34c4b0b7b7a_prof);

        
        $__internal_2663f73408936bcde921c9ae811acbcc75891ede0d0e8af6d8155e8736237c42->leave($__internal_2663f73408936bcde921c9ae811acbcc75891ede0d0e8af6d8155e8736237c42_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_92551cd10429afdd6a6adfeda24aa87aff2c824c44e4cb1324f340dcd96a840c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92551cd10429afdd6a6adfeda24aa87aff2c824c44e4cb1324f340dcd96a840c->enter($__internal_92551cd10429afdd6a6adfeda24aa87aff2c824c44e4cb1324f340dcd96a840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_2c632c3f1c7846bf1794b5baf550f549197cc5b9a069c3ef5e889003c83a7af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c632c3f1c7846bf1794b5baf550f549197cc5b9a069c3ef5e889003c83a7af8->enter($__internal_2c632c3f1c7846bf1794b5baf550f549197cc5b9a069c3ef5e889003c83a7af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2c632c3f1c7846bf1794b5baf550f549197cc5b9a069c3ef5e889003c83a7af8->leave($__internal_2c632c3f1c7846bf1794b5baf550f549197cc5b9a069c3ef5e889003c83a7af8_prof);

        
        $__internal_92551cd10429afdd6a6adfeda24aa87aff2c824c44e4cb1324f340dcd96a840c->leave($__internal_92551cd10429afdd6a6adfeda24aa87aff2c824c44e4cb1324f340dcd96a840c_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2194443cf5c88526cbe9e32b0db1b134258b9fd516464da8e0a7239b4b7f2a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2194443cf5c88526cbe9e32b0db1b134258b9fd516464da8e0a7239b4b7f2a33->enter($__internal_2194443cf5c88526cbe9e32b0db1b134258b9fd516464da8e0a7239b4b7f2a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7bc1f9eab61683c623869950362cef220f31eb1371e4c08a959b8f0d6d9992af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc1f9eab61683c623869950362cef220f31eb1371e4c08a959b8f0d6d9992af->enter($__internal_7bc1f9eab61683c623869950362cef220f31eb1371e4c08a959b8f0d6d9992af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7bc1f9eab61683c623869950362cef220f31eb1371e4c08a959b8f0d6d9992af->leave($__internal_7bc1f9eab61683c623869950362cef220f31eb1371e4c08a959b8f0d6d9992af_prof);

        
        $__internal_2194443cf5c88526cbe9e32b0db1b134258b9fd516464da8e0a7239b4b7f2a33->leave($__internal_2194443cf5c88526cbe9e32b0db1b134258b9fd516464da8e0a7239b4b7f2a33_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f603a7f73136b2fd97bafd1748606bb2335e8b51e3c1cbafb2719457cad35584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f603a7f73136b2fd97bafd1748606bb2335e8b51e3c1cbafb2719457cad35584->enter($__internal_f603a7f73136b2fd97bafd1748606bb2335e8b51e3c1cbafb2719457cad35584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_69e9377e38586e9597a768d2419b5e4fe8c5b33d220318c5f70d887a66823750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e9377e38586e9597a768d2419b5e4fe8c5b33d220318c5f70d887a66823750->enter($__internal_69e9377e38586e9597a768d2419b5e4fe8c5b33d220318c5f70d887a66823750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_69e9377e38586e9597a768d2419b5e4fe8c5b33d220318c5f70d887a66823750->leave($__internal_69e9377e38586e9597a768d2419b5e4fe8c5b33d220318c5f70d887a66823750_prof);

        
        $__internal_f603a7f73136b2fd97bafd1748606bb2335e8b51e3c1cbafb2719457cad35584->leave($__internal_f603a7f73136b2fd97bafd1748606bb2335e8b51e3c1cbafb2719457cad35584_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5ef4bb211d8184d78f1eabcbf330081edd958b1229223d0c416b2854a225e62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef4bb211d8184d78f1eabcbf330081edd958b1229223d0c416b2854a225e62c->enter($__internal_5ef4bb211d8184d78f1eabcbf330081edd958b1229223d0c416b2854a225e62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0178d3ded727dd2961c604da4e2a0071816d48f6bdafa21d0d7f8643f90dde6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0178d3ded727dd2961c604da4e2a0071816d48f6bdafa21d0d7f8643f90dde6b->enter($__internal_0178d3ded727dd2961c604da4e2a0071816d48f6bdafa21d0d7f8643f90dde6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_0178d3ded727dd2961c604da4e2a0071816d48f6bdafa21d0d7f8643f90dde6b->leave($__internal_0178d3ded727dd2961c604da4e2a0071816d48f6bdafa21d0d7f8643f90dde6b_prof);

        
        $__internal_5ef4bb211d8184d78f1eabcbf330081edd958b1229223d0c416b2854a225e62c->leave($__internal_5ef4bb211d8184d78f1eabcbf330081edd958b1229223d0c416b2854a225e62c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/home/nico/pizzerianostra/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
