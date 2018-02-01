<?php

/* base.html.twig */
class __TwigTemplate_51cf108eff55c1afb343836632af039480f3ff2fd3e34433aaf31dccee6a4233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4f91ff05078688ddcbabac9d688a6c99ae2aea5bf0542307ea1d3d45b464725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f91ff05078688ddcbabac9d688a6c99ae2aea5bf0542307ea1d3d45b464725->enter($__internal_c4f91ff05078688ddcbabac9d688a6c99ae2aea5bf0542307ea1d3d45b464725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_c4f91ff05078688ddcbabac9d688a6c99ae2aea5bf0542307ea1d3d45b464725->leave($__internal_c4f91ff05078688ddcbabac9d688a6c99ae2aea5bf0542307ea1d3d45b464725_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d25e77fbd1e8a0fe0882b9dfecbaf4108b895486f249ef492b10e98966927d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25e77fbd1e8a0fe0882b9dfecbaf4108b895486f249ef492b10e98966927d8a->enter($__internal_d25e77fbd1e8a0fe0882b9dfecbaf4108b895486f249ef492b10e98966927d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laboratoire de Mathématiques de Lens";
        
        $__internal_d25e77fbd1e8a0fe0882b9dfecbaf4108b895486f249ef492b10e98966927d8a->leave($__internal_d25e77fbd1e8a0fe0882b9dfecbaf4108b895486f249ef492b10e98966927d8a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_346a8bf84a76abae73ecaee8f1ce0e31464479ac878e945f4db88b28c91b43fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346a8bf84a76abae73ecaee8f1ce0e31464479ac878e945f4db88b28c91b43fb->enter($__internal_346a8bf84a76abae73ecaee8f1ce0e31464479ac878e945f4db88b28c91b43fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_346a8bf84a76abae73ecaee8f1ce0e31464479ac878e945f4db88b28c91b43fb->leave($__internal_346a8bf84a76abae73ecaee8f1ce0e31464479ac878e945f4db88b28c91b43fb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4724af3b71970bbff975432c8445d541c43a63109069617ae0df265dad189058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4724af3b71970bbff975432c8445d541c43a63109069617ae0df265dad189058->enter($__internal_4724af3b71970bbff975432c8445d541c43a63109069617ae0df265dad189058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4724af3b71970bbff975432c8445d541c43a63109069617ae0df265dad189058->leave($__internal_4724af3b71970bbff975432c8445d541c43a63109069617ae0df265dad189058_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0df61efa7ce2a65246e61e9ce1fb4148ef0730663086570553486da386fc4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df61efa7ce2a65246e61e9ce1fb4148ef0730663086570553486da386fc4e7f->enter($__internal_0df61efa7ce2a65246e61e9ce1fb4148ef0730663086570553486da386fc4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0df61efa7ce2a65246e61e9ce1fb4148ef0730663086570553486da386fc4e7f->leave($__internal_0df61efa7ce2a65246e61e9ce1fb4148ef0730663086570553486da386fc4e7f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  79 => 9,  68 => 6,  56 => 5,  47 => 11,  44 => 10,  42 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Laboratoire de Mathématiques de Lens{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/nh/Documents/Refonte-site-LML/templates/base.html.twig");
    }
}
