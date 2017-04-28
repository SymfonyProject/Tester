<?php

/* clientes/index.html.twig */
class __TwigTemplate_93866aba788d33dbed8c8ff7feaf2b79c6b64e36c2a6f1dfed2ca4da1e444fe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clientes/index.html.twig", 1);
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
        $__internal_6d13122dba9b379f9b1c92e01102703c44f519eaa05d8d362f32cc0e1d2c3720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d13122dba9b379f9b1c92e01102703c44f519eaa05d8d362f32cc0e1d2c3720->enter($__internal_6d13122dba9b379f9b1c92e01102703c44f519eaa05d8d362f32cc0e1d2c3720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/index.html.twig"));

        $__internal_fccffe7daf997c08928fc015ddc00ca32cfd6140b7c63a2ff12fadc9be820920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccffe7daf997c08928fc015ddc00ca32cfd6140b7c63a2ff12fadc9be820920->enter($__internal_fccffe7daf997c08928fc015ddc00ca32cfd6140b7c63a2ff12fadc9be820920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clientes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d13122dba9b379f9b1c92e01102703c44f519eaa05d8d362f32cc0e1d2c3720->leave($__internal_6d13122dba9b379f9b1c92e01102703c44f519eaa05d8d362f32cc0e1d2c3720_prof);

        
        $__internal_fccffe7daf997c08928fc015ddc00ca32cfd6140b7c63a2ff12fadc9be820920->leave($__internal_fccffe7daf997c08928fc015ddc00ca32cfd6140b7c63a2ff12fadc9be820920_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_acfad9f4c28b78d4067f9a8e5c96b747998e6580543476511af164d4e82ef851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfad9f4c28b78d4067f9a8e5c96b747998e6580543476511af164d4e82ef851->enter($__internal_acfad9f4c28b78d4067f9a8e5c96b747998e6580543476511af164d4e82ef851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_04b361847eda77c32d87dff4223bd01077c76d4741c2aa032eca9e8dda1822f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b361847eda77c32d87dff4223bd01077c76d4741c2aa032eca9e8dda1822f5->enter($__internal_04b361847eda77c32d87dff4223bd01077c76d4741c2aa032eca9e8dda1822f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        echo "<h1>Listado de Clientes</h1>";
        
        $__internal_04b361847eda77c32d87dff4223bd01077c76d4741c2aa032eca9e8dda1822f5->leave($__internal_04b361847eda77c32d87dff4223bd01077c76d4741c2aa032eca9e8dda1822f5_prof);

        
        $__internal_acfad9f4c28b78d4067f9a8e5c96b747998e6580543476511af164d4e82ef851->leave($__internal_acfad9f4c28b78d4067f9a8e5c96b747998e6580543476511af164d4e82ef851_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebd2bd56db9173d92894382e0640f0ca5b43efdb2cd7380944d2b82080ff0b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebd2bd56db9173d92894382e0640f0ca5b43efdb2cd7380944d2b82080ff0b9->enter($__internal_3ebd2bd56db9173d92894382e0640f0ca5b43efdb2cd7380944d2b82080ff0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e4d4360b7028a91cd46b66494bdaf0054cc888f61cf4d4e64d6e635562a0925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4d4360b7028a91cd46b66494bdaf0054cc888f61cf4d4e64d6e635562a0925->enter($__internal_9e4d4360b7028a91cd46b66494bdaf0054cc888f61cf4d4e64d6e635562a0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table  class=\"table-striped table-hover\">
        <thead>
            <tr>
                <th>Mail</th>
                <th>Password</th>
                <th>Direccion</th>
                <th>Cpostal</th>
                <th>Ciudad</th>
                <th>Idclientes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 20
            echo "            <tr>
                <td class=\"danger\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_show", array("idclientes" => $this->getAttribute($context["cliente"], "idclientes", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "mail", array()), "html", null, true);
            echo "</a></td>
                <td class=\"danger\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "password", array()), "html", null, true);
            echo "</td>
                <td class=\"danger\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "direccion", array()), "html", null, true);
            echo "</td>
                <td class=\"danger\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cpostal", array()), "html", null, true);
            echo "</td>
                <td class=\"danger\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "ciudad", array()), "html", null, true);
            echo "</td>
                <td class=\"danger\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "idclientes", array()), "html", null, true);
            echo "</td>
                <td class=\"danger\">
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_show", array("idclientes" => $this->getAttribute($context["cliente"], "idclientes", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_edit", array("idclientes" => $this->getAttribute($context["cliente"], "idclientes", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clientes_new");
        echo "\">Create a new cliente</a>
        </li>
    </ul>
";
        
        $__internal_9e4d4360b7028a91cd46b66494bdaf0054cc888f61cf4d4e64d6e635562a0925->leave($__internal_9e4d4360b7028a91cd46b66494bdaf0054cc888f61cf4d4e64d6e635562a0925_prof);

        
        $__internal_3ebd2bd56db9173d92894382e0640f0ca5b43efdb2cd7380944d2b82080ff0b9->leave($__internal_3ebd2bd56db9173d92894382e0640f0ca5b43efdb2cd7380944d2b82080ff0b9_prof);

    }

    public function getTemplateName()
    {
        return "clientes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  137 => 39,  125 => 33,  119 => 30,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  90 => 21,  87 => 20,  83 => 19,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block jumbotron %}<h1>Listado de Clientes</h1>{% endblock %}

{% block body %}
    <table  class=\"table-striped table-hover\">
        <thead>
            <tr>
                <th>Mail</th>
                <th>Password</th>
                <th>Direccion</th>
                <th>Cpostal</th>
                <th>Ciudad</th>
                <th>Idclientes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for cliente in clientes %}
            <tr>
                <td class=\"danger\"><a href=\"{{ path('clientes_show', { 'idclientes': cliente.idclientes }) }}\">{{ cliente.mail }}</a></td>
                <td class=\"danger\">{{ cliente.password }}</td>
                <td class=\"danger\">{{ cliente.direccion }}</td>
                <td class=\"danger\">{{ cliente.cpostal }}</td>
                <td class=\"danger\">{{ cliente.ciudad }}</td>
                <td class=\"danger\">{{ cliente.idclientes }}</td>
                <td class=\"danger\">
                    <ul>
                        <li>
                            <a href=\"{{ path('clientes_show', { 'idclientes': cliente.idclientes }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('clientes_edit', { 'idclientes': cliente.idclientes }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('clientes_new') }}\">Create a new cliente</a>
        </li>
    </ul>
{% endblock %}
", "clientes/index.html.twig", "C:\\xampp\\htdocs\\Tienda_V1\\app\\Resources\\views\\clientes\\index.html.twig");
    }
}
