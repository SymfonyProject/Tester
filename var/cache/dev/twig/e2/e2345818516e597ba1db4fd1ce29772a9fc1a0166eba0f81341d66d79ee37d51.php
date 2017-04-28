<?php

/* base.html.twig */
class __TwigTemplate_54760178e2afd20d65f9beb08cc368901cb954cbe7d422100dbffaa4bf820fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ffb70d0b881dc6bc816b21cebda9c1b2811b1b73eb03e8b5408717b40dd42a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffb70d0b881dc6bc816b21cebda9c1b2811b1b73eb03e8b5408717b40dd42a2->enter($__internal_2ffb70d0b881dc6bc816b21cebda9c1b2811b1b73eb03e8b5408717b40dd42a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2cd1c30f7188bb201754e754086f7d3ef2fcb9eab609c90f6d28da07f4261003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd1c30f7188bb201754e754086f7d3ef2fcb9eab609c90f6d28da07f4261003->enter($__internal_2cd1c30f7188bb201754e754086f7d3ef2fcb9eab609c90f6d28da07f4261003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<html>
    <head>
        <meta charset=\"UTF-8\" />
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"jumbotron\">
            ";
        // line 17
        $this->displayBlock('jumbotron', $context, $blocks);
        echo "    
               
        </div>
        ";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </div>
    </body>
</html>
";
        
        $__internal_2ffb70d0b881dc6bc816b21cebda9c1b2811b1b73eb03e8b5408717b40dd42a2->leave($__internal_2ffb70d0b881dc6bc816b21cebda9c1b2811b1b73eb03e8b5408717b40dd42a2_prof);

        
        $__internal_2cd1c30f7188bb201754e754086f7d3ef2fcb9eab609c90f6d28da07f4261003->leave($__internal_2cd1c30f7188bb201754e754086f7d3ef2fcb9eab609c90f6d28da07f4261003_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_38a4975e6b4d97f934fbd30f69162c244f7e66fce8019d004147e50c46566b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a4975e6b4d97f934fbd30f69162c244f7e66fce8019d004147e50c46566b71->enter($__internal_38a4975e6b4d97f934fbd30f69162c244f7e66fce8019d004147e50c46566b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b837487cc9713f5521dbea879916c7f5b09c32aba422a7485ade00582b9d1e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b837487cc9713f5521dbea879916c7f5b09c32aba422a7485ade00582b9d1e97->enter($__internal_b837487cc9713f5521dbea879916c7f5b09c32aba422a7485ade00582b9d1e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b837487cc9713f5521dbea879916c7f5b09c32aba422a7485ade00582b9d1e97->leave($__internal_b837487cc9713f5521dbea879916c7f5b09c32aba422a7485ade00582b9d1e97_prof);

        
        $__internal_38a4975e6b4d97f934fbd30f69162c244f7e66fce8019d004147e50c46566b71->leave($__internal_38a4975e6b4d97f934fbd30f69162c244f7e66fce8019d004147e50c46566b71_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93c9e59691b71c76c2c6939e37320aac448d3343a22c0ecab45c2310f988f630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c9e59691b71c76c2c6939e37320aac448d3343a22c0ecab45c2310f988f630->enter($__internal_93c9e59691b71c76c2c6939e37320aac448d3343a22c0ecab45c2310f988f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8f1a99e3d2b91f02d0f049070e3e365a52be665ec4631c59c790a4297fb6518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f1a99e3d2b91f02d0f049070e3e365a52be665ec4631c59c790a4297fb6518->enter($__internal_a8f1a99e3d2b91f02d0f049070e3e365a52be665ec4631c59c790a4297fb6518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8f1a99e3d2b91f02d0f049070e3e365a52be665ec4631c59c790a4297fb6518->leave($__internal_a8f1a99e3d2b91f02d0f049070e3e365a52be665ec4631c59c790a4297fb6518_prof);

        
        $__internal_93c9e59691b71c76c2c6939e37320aac448d3343a22c0ecab45c2310f988f630->leave($__internal_93c9e59691b71c76c2c6939e37320aac448d3343a22c0ecab45c2310f988f630_prof);

    }

    // line 17
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_c3cd96f21046a247a1659832f0f9cd56c18eed204d6386fad3c0a68ccd019d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cd96f21046a247a1659832f0f9cd56c18eed204d6386fad3c0a68ccd019d6b->enter($__internal_c3cd96f21046a247a1659832f0f9cd56c18eed204d6386fad3c0a68ccd019d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_cd72eaf9037843fd034b99889551fba969b7911084b389033154ae4924e7b580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72eaf9037843fd034b99889551fba969b7911084b389033154ae4924e7b580->enter($__internal_cd72eaf9037843fd034b99889551fba969b7911084b389033154ae4924e7b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        
        $__internal_cd72eaf9037843fd034b99889551fba969b7911084b389033154ae4924e7b580->leave($__internal_cd72eaf9037843fd034b99889551fba969b7911084b389033154ae4924e7b580_prof);

        
        $__internal_c3cd96f21046a247a1659832f0f9cd56c18eed204d6386fad3c0a68ccd019d6b->leave($__internal_c3cd96f21046a247a1659832f0f9cd56c18eed204d6386fad3c0a68ccd019d6b_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d93a8484b7d78caab5d5985567655ed79950a81539c6bb22b437c8e6c999688b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93a8484b7d78caab5d5985567655ed79950a81539c6bb22b437c8e6c999688b->enter($__internal_d93a8484b7d78caab5d5985567655ed79950a81539c6bb22b437c8e6c999688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_449e137f1b138e0779e6884f8a7938fc94cf75c18e38507fe9699d5f9015758a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449e137f1b138e0779e6884f8a7938fc94cf75c18e38507fe9699d5f9015758a->enter($__internal_449e137f1b138e0779e6884f8a7938fc94cf75c18e38507fe9699d5f9015758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_449e137f1b138e0779e6884f8a7938fc94cf75c18e38507fe9699d5f9015758a->leave($__internal_449e137f1b138e0779e6884f8a7938fc94cf75c18e38507fe9699d5f9015758a_prof);

        
        $__internal_d93a8484b7d78caab5d5985567655ed79950a81539c6bb22b437c8e6c999688b->leave($__internal_d93a8484b7d78caab5d5985567655ed79950a81539c6bb22b437c8e6c999688b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_a083712e6ad64e12b8cb0c2b01fb97a6945bbfad2baa157f9110f26057689156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a083712e6ad64e12b8cb0c2b01fb97a6945bbfad2baa157f9110f26057689156->enter($__internal_a083712e6ad64e12b8cb0c2b01fb97a6945bbfad2baa157f9110f26057689156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b5308434afcb6afaf9f488314f1fdf6ffd000a44ef9b7368e1f5c46397a9c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5308434afcb6afaf9f488314f1fdf6ffd000a44ef9b7368e1f5c46397a9c8b->enter($__internal_8b5308434afcb6afaf9f488314f1fdf6ffd000a44ef9b7368e1f5c46397a9c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b5308434afcb6afaf9f488314f1fdf6ffd000a44ef9b7368e1f5c46397a9c8b->leave($__internal_8b5308434afcb6afaf9f488314f1fdf6ffd000a44ef9b7368e1f5c46397a9c8b_prof);

        
        $__internal_a083712e6ad64e12b8cb0c2b01fb97a6945bbfad2baa157f9110f26057689156->leave($__internal_a083712e6ad64e12b8cb0c2b01fb97a6945bbfad2baa157f9110f26057689156_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 21,  132 => 20,  115 => 17,  98 => 11,  80 => 10,  67 => 22,  64 => 21,  62 => 20,  56 => 17,  47 => 12,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html>
    <head>
        <meta charset=\"UTF-8\" />
                <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            <div class=\"jumbotron\">
            {% block jumbotron %}{% endblock %}    
               
        </div>
        {% block menu %}{% endblock %}
        {% block body %}{% endblock %}
    </div>
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\base.html.twig");
    }
}
