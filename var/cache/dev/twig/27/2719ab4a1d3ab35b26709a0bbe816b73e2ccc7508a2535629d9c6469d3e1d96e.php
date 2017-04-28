<?php

/* default/index.html.twig */
class __TwigTemplate_da7f3d09635f1c726a0b40f16666e11f2e3578ed77cc6108c44defdba4fcb5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4f4fd989dabf86643e196ef14324ba0d7b468f34e5fc803b908cf23134f969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4f4fd989dabf86643e196ef14324ba0d7b468f34e5fc803b908cf23134f969->enter($__internal_5d4f4fd989dabf86643e196ef14324ba0d7b468f34e5fc803b908cf23134f969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1c4006d81889bbdbb199beec7a3319bda6943ab26ce3e553090e943f1ca264aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4006d81889bbdbb199beec7a3319bda6943ab26ce3e553090e943f1ca264aa->enter($__internal_1c4006d81889bbdbb199beec7a3319bda6943ab26ce3e553090e943f1ca264aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4f4fd989dabf86643e196ef14324ba0d7b468f34e5fc803b908cf23134f969->leave($__internal_5d4f4fd989dabf86643e196ef14324ba0d7b468f34e5fc803b908cf23134f969_prof);

        
        $__internal_1c4006d81889bbdbb199beec7a3319bda6943ab26ce3e553090e943f1ca264aa->leave($__internal_1c4006d81889bbdbb199beec7a3319bda6943ab26ce3e553090e943f1ca264aa_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_3cb6a3be565c15b08d55207186fd9f1827c7aaddee1145a806b81c855f682a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb6a3be565c15b08d55207186fd9f1827c7aaddee1145a806b81c855f682a90->enter($__internal_3cb6a3be565c15b08d55207186fd9f1827c7aaddee1145a806b81c855f682a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_8281287a983d0c7282c0a47cfd96a341318d222eb60c7998123022a38be73d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8281287a983d0c7282c0a47cfd96a341318d222eb60c7998123022a38be73d44->enter($__internal_8281287a983d0c7282c0a47cfd96a341318d222eb60c7998123022a38be73d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Mantenimiento de Tienda</h1>";
        
        $__internal_8281287a983d0c7282c0a47cfd96a341318d222eb60c7998123022a38be73d44->leave($__internal_8281287a983d0c7282c0a47cfd96a341318d222eb60c7998123022a38be73d44_prof);

        
        $__internal_3cb6a3be565c15b08d55207186fd9f1827c7aaddee1145a806b81c855f682a90->leave($__internal_3cb6a3be565c15b08d55207186fd9f1827c7aaddee1145a806b81c855f682a90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_129ff46ba5edcafa47f857e3a9943811f06f8a0dc18b2df9a0e0b78078b806cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129ff46ba5edcafa47f857e3a9943811f06f8a0dc18b2df9a0e0b78078b806cb->enter($__internal_129ff46ba5edcafa47f857e3a9943811f06f8a0dc18b2df9a0e0b78078b806cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ec791c25dd0a47aca3f5e5f826879af7a3873ae2d44961e43f9fce59d8bf2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec791c25dd0a47aca3f5e5f826879af7a3873ae2d44961e43f9fce59d8bf2fa->enter($__internal_4ec791c25dd0a47aca3f5e5f826879af7a3873ae2d44961e43f9fce59d8bf2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"alert alert-success\">
    Bienvenidos al mantenimiento de la Tienda V.1
    </div>
    <a href=\"/clientes\" class=\"btn btn-info btn-bg\">Mantenimiento de Clientes</a>
    <a href=\"/productos\" class=\"btn btn-warning btn-bg\">Mantenimiento de Productos</a>
    
";
        
        $__internal_4ec791c25dd0a47aca3f5e5f826879af7a3873ae2d44961e43f9fce59d8bf2fa->leave($__internal_4ec791c25dd0a47aca3f5e5f826879af7a3873ae2d44961e43f9fce59d8bf2fa_prof);

        
        $__internal_129ff46ba5edcafa47f857e3a9943811f06f8a0dc18b2df9a0e0b78078b806cb->leave($__internal_129ff46ba5edcafa47f857e3a9943811f06f8a0dc18b2df9a0e0b78078b806cb_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b932df3153b0eaa462f18cbf03579b3851b9d01a0835e9699e86c144c7bef7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b932df3153b0eaa462f18cbf03579b3851b9d01a0835e9699e86c144c7bef7a->enter($__internal_9b932df3153b0eaa462f18cbf03579b3851b9d01a0835e9699e86c144c7bef7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_43dd08cc6f740cf13a4241535d3766d4ba4b8290cb7fc34468a209f8f7269383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dd08cc6f740cf13a4241535d3766d4ba4b8290cb7fc34468a209f8f7269383->enter($__internal_43dd08cc6f740cf13a4241535d3766d4ba4b8290cb7fc34468a209f8f7269383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_43dd08cc6f740cf13a4241535d3766d4ba4b8290cb7fc34468a209f8f7269383->leave($__internal_43dd08cc6f740cf13a4241535d3766d4ba4b8290cb7fc34468a209f8f7269383_prof);

        
        $__internal_9b932df3153b0eaa462f18cbf03579b3851b9d01a0835e9699e86c144c7bef7a->leave($__internal_9b932df3153b0eaa462f18cbf03579b3851b9d01a0835e9699e86c144c7bef7a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  86 => 15,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Mantenimiento de Tienda</h1>{% endblock %}

{% block body %}
    
    <div class=\"alert alert-success\">
    Bienvenidos al mantenimiento de la Tienda V.1
    </div>
    <a href=\"/clientes\" class=\"btn btn-info btn-bg\">Mantenimiento de Clientes</a>
    <a href=\"/productos\" class=\"btn btn-warning btn-bg\">Mantenimiento de Productos</a>
    
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\default\\index.html.twig");
    }
}
