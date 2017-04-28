<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8609834dda2935b99a2c9429413b566e1a309f5c308a17555acb78e69f1e82ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_06d8bc3b5c888f657cd8546dd78ef66ba4dffdb791cdf9245a21f4d23b4b2c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d8bc3b5c888f657cd8546dd78ef66ba4dffdb791cdf9245a21f4d23b4b2c22->enter($__internal_06d8bc3b5c888f657cd8546dd78ef66ba4dffdb791cdf9245a21f4d23b4b2c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e2f17104df6878d48c3e1c02d276b84e43f0ca929cb5b07dbcae94321ab7d5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f17104df6878d48c3e1c02d276b84e43f0ca929cb5b07dbcae94321ab7d5f3->enter($__internal_e2f17104df6878d48c3e1c02d276b84e43f0ca929cb5b07dbcae94321ab7d5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d8bc3b5c888f657cd8546dd78ef66ba4dffdb791cdf9245a21f4d23b4b2c22->leave($__internal_06d8bc3b5c888f657cd8546dd78ef66ba4dffdb791cdf9245a21f4d23b4b2c22_prof);

        
        $__internal_e2f17104df6878d48c3e1c02d276b84e43f0ca929cb5b07dbcae94321ab7d5f3->leave($__internal_e2f17104df6878d48c3e1c02d276b84e43f0ca929cb5b07dbcae94321ab7d5f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_484704b132a823581fa6fa03c347228ff053c0ebba56d6c27acb310d403408b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484704b132a823581fa6fa03c347228ff053c0ebba56d6c27acb310d403408b0->enter($__internal_484704b132a823581fa6fa03c347228ff053c0ebba56d6c27acb310d403408b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa2bad606cf3e524bea1d97af2ea0a36c5e894e9325f358de26809112620b75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2bad606cf3e524bea1d97af2ea0a36c5e894e9325f358de26809112620b75a->enter($__internal_aa2bad606cf3e524bea1d97af2ea0a36c5e894e9325f358de26809112620b75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa2bad606cf3e524bea1d97af2ea0a36c5e894e9325f358de26809112620b75a->leave($__internal_aa2bad606cf3e524bea1d97af2ea0a36c5e894e9325f358de26809112620b75a_prof);

        
        $__internal_484704b132a823581fa6fa03c347228ff053c0ebba56d6c27acb310d403408b0->leave($__internal_484704b132a823581fa6fa03c347228ff053c0ebba56d6c27acb310d403408b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2de33cb192ea287de24343565a32d9d484a6d0e3ffd71aa1b25ee324e94c3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2de33cb192ea287de24343565a32d9d484a6d0e3ffd71aa1b25ee324e94c3f0->enter($__internal_d2de33cb192ea287de24343565a32d9d484a6d0e3ffd71aa1b25ee324e94c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef025a806055c7dfb44a02cee9457a813892405bb67aa184c802a392c8e26b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef025a806055c7dfb44a02cee9457a813892405bb67aa184c802a392c8e26b8d->enter($__internal_ef025a806055c7dfb44a02cee9457a813892405bb67aa184c802a392c8e26b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ef025a806055c7dfb44a02cee9457a813892405bb67aa184c802a392c8e26b8d->leave($__internal_ef025a806055c7dfb44a02cee9457a813892405bb67aa184c802a392c8e26b8d_prof);

        
        $__internal_d2de33cb192ea287de24343565a32d9d484a6d0e3ffd71aa1b25ee324e94c3f0->leave($__internal_d2de33cb192ea287de24343565a32d9d484a6d0e3ffd71aa1b25ee324e94c3f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb5ce181b2dfbb61c5665b9e5dce3923802accef3646b321b9f70884d6b58a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5ce181b2dfbb61c5665b9e5dce3923802accef3646b321b9f70884d6b58a18->enter($__internal_fb5ce181b2dfbb61c5665b9e5dce3923802accef3646b321b9f70884d6b58a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb21e1e240224c5fea1622605b3b77f7aa296434ade44cdbb9b18e0e9d3eab23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb21e1e240224c5fea1622605b3b77f7aa296434ade44cdbb9b18e0e9d3eab23->enter($__internal_cb21e1e240224c5fea1622605b3b77f7aa296434ade44cdbb9b18e0e9d3eab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cb21e1e240224c5fea1622605b3b77f7aa296434ade44cdbb9b18e0e9d3eab23->leave($__internal_cb21e1e240224c5fea1622605b3b77f7aa296434ade44cdbb9b18e0e9d3eab23_prof);

        
        $__internal_fb5ce181b2dfbb61c5665b9e5dce3923802accef3646b321b9f70884d6b58a18->leave($__internal_fb5ce181b2dfbb61c5665b9e5dce3923802accef3646b321b9f70884d6b58a18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
