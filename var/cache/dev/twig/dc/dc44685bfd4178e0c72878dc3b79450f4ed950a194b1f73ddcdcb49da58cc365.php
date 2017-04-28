<?php

/* productos/index.html.twig */
class __TwigTemplate_5c1393bb463101920c62bafabc4bb30d47cbf1d5b649d37c20a2d602c00886fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productos/index.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d6f51cad5b84b9dec763c286058880a6df67ed90e71bd5b8b4a0c8415c89ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6f51cad5b84b9dec763c286058880a6df67ed90e71bd5b8b4a0c8415c89ac1->enter($__internal_6d6f51cad5b84b9dec763c286058880a6df67ed90e71bd5b8b4a0c8415c89ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/index.html.twig"));

        $__internal_1504caad59dc5dfc7f3be18c1cb3b7ecb8dabea20500421c7ae767fa620c81b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1504caad59dc5dfc7f3be18c1cb3b7ecb8dabea20500421c7ae767fa620c81b7->enter($__internal_1504caad59dc5dfc7f3be18c1cb3b7ecb8dabea20500421c7ae767fa620c81b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d6f51cad5b84b9dec763c286058880a6df67ed90e71bd5b8b4a0c8415c89ac1->leave($__internal_6d6f51cad5b84b9dec763c286058880a6df67ed90e71bd5b8b4a0c8415c89ac1_prof);

        
        $__internal_1504caad59dc5dfc7f3be18c1cb3b7ecb8dabea20500421c7ae767fa620c81b7->leave($__internal_1504caad59dc5dfc7f3be18c1cb3b7ecb8dabea20500421c7ae767fa620c81b7_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_9116611a76b14bb7dec2918871e6577833aaded056ba358b810c449b2de56f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9116611a76b14bb7dec2918871e6577833aaded056ba358b810c449b2de56f61->enter($__internal_9116611a76b14bb7dec2918871e6577833aaded056ba358b810c449b2de56f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_e291301c385db3ffe026dd2bf109578cfeb7b4e29c5ddd306ecd80208926131a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e291301c385db3ffe026dd2bf109578cfeb7b4e29c5ddd306ecd80208926131a->enter($__internal_e291301c385db3ffe026dd2bf109578cfeb7b4e29c5ddd306ecd80208926131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Listado de Productos</h1>";
        
        $__internal_e291301c385db3ffe026dd2bf109578cfeb7b4e29c5ddd306ecd80208926131a->leave($__internal_e291301c385db3ffe026dd2bf109578cfeb7b4e29c5ddd306ecd80208926131a_prof);

        
        $__internal_9116611a76b14bb7dec2918871e6577833aaded056ba358b810c449b2de56f61->leave($__internal_9116611a76b14bb7dec2918871e6577833aaded056ba358b810c449b2de56f61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6facc6fb1d7019defd89c05cd56cc84bbc7eef80592c345f6fd2b864d9d057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6facc6fb1d7019defd89c05cd56cc84bbc7eef80592c345f6fd2b864d9d057->enter($__internal_cc6facc6fb1d7019defd89c05cd56cc84bbc7eef80592c345f6fd2b864d9d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a24b7db76d2ea803eb27c5dc8fe1209cb0700b39b176e0b7a95b86dfa741eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a24b7db76d2ea803eb27c5dc8fe1209cb0700b39b176e0b7a95b86dfa741eed->enter($__internal_3a24b7db76d2ea803eb27c5dc8fe1209cb0700b39b176e0b7a95b86dfa741eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Idproducto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_show", array("idproducto" => $this->getAttribute($context["producto"], "idproducto", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "idproducto", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_show", array("idproducto" => $this->getAttribute($context["producto"], "idproducto", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_edit", array("idproducto" => $this->getAttribute($context["producto"], "idproducto", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("productos_new");
        echo "\">Create a new producto</a>
        </li>
    </ul>
";
        
        $__internal_3a24b7db76d2ea803eb27c5dc8fe1209cb0700b39b176e0b7a95b86dfa741eed->leave($__internal_3a24b7db76d2ea803eb27c5dc8fe1209cb0700b39b176e0b7a95b86dfa741eed_prof);

        
        $__internal_cc6facc6fb1d7019defd89c05cd56cc84bbc7eef80592c345f6fd2b864d9d057->leave($__internal_cc6facc6fb1d7019defd89c05cd56cc84bbc7eef80592c345f6fd2b864d9d057_prof);

    }

    public function getTemplateName()
    {
        return "productos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  128 => 36,  116 => 30,  110 => 27,  103 => 23,  99 => 22,  95 => 21,  89 => 20,  86 => 19,  82 => 18,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Listado de Productos</h1>{% endblock %}

{% block body %}

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Idproducto</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for producto in productos %}
            <tr>
                <td><a href=\"{{ path('productos_show', { 'idproducto': producto.idproducto }) }}\">{{ producto.nombre }}</a></td>
                <td>{{ producto.precio }}</td>
                <td>{{ producto.descripcion }}</td>
                <td>{{ producto.idproducto }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('productos_show', { 'idproducto': producto.idproducto }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('productos_edit', { 'idproducto': producto.idproducto }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('productos_new') }}\">Create a new producto</a>
        </li>
    </ul>
{% endblock %}
", "productos/index.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\productos\\index.html.twig");
    }
}
