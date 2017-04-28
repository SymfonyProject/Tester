<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c32123bc7dccf9b089e4f06070d22e869b418a2b59d2d47d58ebfff8f41661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fa984360510df5cf471b9bac18a6f49f2e2175bfacb121212ca6eb30f184e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa984360510df5cf471b9bac18a6f49f2e2175bfacb121212ca6eb30f184e4e->enter($__internal_3fa984360510df5cf471b9bac18a6f49f2e2175bfacb121212ca6eb30f184e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_11822d4532eea467adc2b486302e42fd67fcae9381645d55e4ce3275677b07e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11822d4532eea467adc2b486302e42fd67fcae9381645d55e4ce3275677b07e2->enter($__internal_11822d4532eea467adc2b486302e42fd67fcae9381645d55e4ce3275677b07e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa984360510df5cf471b9bac18a6f49f2e2175bfacb121212ca6eb30f184e4e->leave($__internal_3fa984360510df5cf471b9bac18a6f49f2e2175bfacb121212ca6eb30f184e4e_prof);

        
        $__internal_11822d4532eea467adc2b486302e42fd67fcae9381645d55e4ce3275677b07e2->leave($__internal_11822d4532eea467adc2b486302e42fd67fcae9381645d55e4ce3275677b07e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72ef5a32d039ac9de1bb641ac61d2c04e98ce4159da1cb2d67bec0cc066568a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ef5a32d039ac9de1bb641ac61d2c04e98ce4159da1cb2d67bec0cc066568a5->enter($__internal_72ef5a32d039ac9de1bb641ac61d2c04e98ce4159da1cb2d67bec0cc066568a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04182ffb06d3aecd67cb596cc3c30f37c1ebf8746d75ffdb1ab54de2a593d19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04182ffb06d3aecd67cb596cc3c30f37c1ebf8746d75ffdb1ab54de2a593d19a->enter($__internal_04182ffb06d3aecd67cb596cc3c30f37c1ebf8746d75ffdb1ab54de2a593d19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04182ffb06d3aecd67cb596cc3c30f37c1ebf8746d75ffdb1ab54de2a593d19a->leave($__internal_04182ffb06d3aecd67cb596cc3c30f37c1ebf8746d75ffdb1ab54de2a593d19a_prof);

        
        $__internal_72ef5a32d039ac9de1bb641ac61d2c04e98ce4159da1cb2d67bec0cc066568a5->leave($__internal_72ef5a32d039ac9de1bb641ac61d2c04e98ce4159da1cb2d67bec0cc066568a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4036bb262b051a09b5312a7d9023816d0a266fadc0479e0ec006a6e3b44d3bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4036bb262b051a09b5312a7d9023816d0a266fadc0479e0ec006a6e3b44d3bb8->enter($__internal_4036bb262b051a09b5312a7d9023816d0a266fadc0479e0ec006a6e3b44d3bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5c54ec7a509a52128c0c710fd802f0b137bfd6bbc7750a893386c4942a0452d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c54ec7a509a52128c0c710fd802f0b137bfd6bbc7750a893386c4942a0452d8->enter($__internal_5c54ec7a509a52128c0c710fd802f0b137bfd6bbc7750a893386c4942a0452d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5c54ec7a509a52128c0c710fd802f0b137bfd6bbc7750a893386c4942a0452d8->leave($__internal_5c54ec7a509a52128c0c710fd802f0b137bfd6bbc7750a893386c4942a0452d8_prof);

        
        $__internal_4036bb262b051a09b5312a7d9023816d0a266fadc0479e0ec006a6e3b44d3bb8->leave($__internal_4036bb262b051a09b5312a7d9023816d0a266fadc0479e0ec006a6e3b44d3bb8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b36197b643f2b9f58fe14e0e37fc45992523eafb58527706e269390f438ebf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36197b643f2b9f58fe14e0e37fc45992523eafb58527706e269390f438ebf1a->enter($__internal_b36197b643f2b9f58fe14e0e37fc45992523eafb58527706e269390f438ebf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dec5eecef79ef3a989fbbbdcdb9ce99ca95509b2f41628413de08bd4629daa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec5eecef79ef3a989fbbbdcdb9ce99ca95509b2f41628413de08bd4629daa6d->enter($__internal_dec5eecef79ef3a989fbbbdcdb9ce99ca95509b2f41628413de08bd4629daa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dec5eecef79ef3a989fbbbdcdb9ce99ca95509b2f41628413de08bd4629daa6d->leave($__internal_dec5eecef79ef3a989fbbbdcdb9ce99ca95509b2f41628413de08bd4629daa6d_prof);

        
        $__internal_b36197b643f2b9f58fe14e0e37fc45992523eafb58527706e269390f438ebf1a->leave($__internal_b36197b643f2b9f58fe14e0e37fc45992523eafb58527706e269390f438ebf1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
