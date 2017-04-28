<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7777e5c6601e7047644159b39ac1e8a34e7eb84e99171996bfa204778a064d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7777e5c6601e7047644159b39ac1e8a34e7eb84e99171996bfa204778a064d1d->enter($__internal_7777e5c6601e7047644159b39ac1e8a34e7eb84e99171996bfa204778a064d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d3ca1234cdb63ce0c6705e1cc7b20c4ff9cbe45e86e00964cd01d4f3010a4edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ca1234cdb63ce0c6705e1cc7b20c4ff9cbe45e86e00964cd01d4f3010a4edb->enter($__internal_d3ca1234cdb63ce0c6705e1cc7b20c4ff9cbe45e86e00964cd01d4f3010a4edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7777e5c6601e7047644159b39ac1e8a34e7eb84e99171996bfa204778a064d1d->leave($__internal_7777e5c6601e7047644159b39ac1e8a34e7eb84e99171996bfa204778a064d1d_prof);

        
        $__internal_d3ca1234cdb63ce0c6705e1cc7b20c4ff9cbe45e86e00964cd01d4f3010a4edb->leave($__internal_d3ca1234cdb63ce0c6705e1cc7b20c4ff9cbe45e86e00964cd01d4f3010a4edb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3acb914d1dadc482c7aa39b2303863e3522872e720289a768cf53e0f3b7141e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb914d1dadc482c7aa39b2303863e3522872e720289a768cf53e0f3b7141e4->enter($__internal_3acb914d1dadc482c7aa39b2303863e3522872e720289a768cf53e0f3b7141e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0264eeee3a86cc1b5b8d61fb02c1dd8df6cc5c672a0de235633b511526ae663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0264eeee3a86cc1b5b8d61fb02c1dd8df6cc5c672a0de235633b511526ae663->enter($__internal_c0264eeee3a86cc1b5b8d61fb02c1dd8df6cc5c672a0de235633b511526ae663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c0264eeee3a86cc1b5b8d61fb02c1dd8df6cc5c672a0de235633b511526ae663->leave($__internal_c0264eeee3a86cc1b5b8d61fb02c1dd8df6cc5c672a0de235633b511526ae663_prof);

        
        $__internal_3acb914d1dadc482c7aa39b2303863e3522872e720289a768cf53e0f3b7141e4->leave($__internal_3acb914d1dadc482c7aa39b2303863e3522872e720289a768cf53e0f3b7141e4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_183f10de3d31c4bc4cbace1ce6c980e5dde4d057421c4f3919be0436582b7425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183f10de3d31c4bc4cbace1ce6c980e5dde4d057421c4f3919be0436582b7425->enter($__internal_183f10de3d31c4bc4cbace1ce6c980e5dde4d057421c4f3919be0436582b7425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3070c23b757ee1e95ecf0a8f880347be2098d0aaaf2dfec08195e999e193c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3070c23b757ee1e95ecf0a8f880347be2098d0aaaf2dfec08195e999e193c5a->enter($__internal_e3070c23b757ee1e95ecf0a8f880347be2098d0aaaf2dfec08195e999e193c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3070c23b757ee1e95ecf0a8f880347be2098d0aaaf2dfec08195e999e193c5a->leave($__internal_e3070c23b757ee1e95ecf0a8f880347be2098d0aaaf2dfec08195e999e193c5a_prof);

        
        $__internal_183f10de3d31c4bc4cbace1ce6c980e5dde4d057421c4f3919be0436582b7425->leave($__internal_183f10de3d31c4bc4cbace1ce6c980e5dde4d057421c4f3919be0436582b7425_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_53aa2e7e4f9d426a0e51e8751cbaae66fc43170cb85583c6a534ed9e4fa0b328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53aa2e7e4f9d426a0e51e8751cbaae66fc43170cb85583c6a534ed9e4fa0b328->enter($__internal_53aa2e7e4f9d426a0e51e8751cbaae66fc43170cb85583c6a534ed9e4fa0b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_910b9542bc89adfe7718f514a81807c6d30c0f42c85f48f25e7b2cddd8eb033d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910b9542bc89adfe7718f514a81807c6d30c0f42c85f48f25e7b2cddd8eb033d->enter($__internal_910b9542bc89adfe7718f514a81807c6d30c0f42c85f48f25e7b2cddd8eb033d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_910b9542bc89adfe7718f514a81807c6d30c0f42c85f48f25e7b2cddd8eb033d->leave($__internal_910b9542bc89adfe7718f514a81807c6d30c0f42c85f48f25e7b2cddd8eb033d_prof);

        
        $__internal_53aa2e7e4f9d426a0e51e8751cbaae66fc43170cb85583c6a534ed9e4fa0b328->leave($__internal_53aa2e7e4f9d426a0e51e8751cbaae66fc43170cb85583c6a534ed9e4fa0b328_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
