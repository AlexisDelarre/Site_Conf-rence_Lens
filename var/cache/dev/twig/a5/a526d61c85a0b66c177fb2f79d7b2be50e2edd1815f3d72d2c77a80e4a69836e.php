<?php

/* security/register.html.twig */
class __TwigTemplate_2fa6a46e53e90248ca8d8f3553f4448a7190845ce52f8e97a926550639a12a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ece1a5c47332c2e8187f0f8de19ebd029c1675ba497e34f865d07aae11d462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ece1a5c47332c2e8187f0f8de19ebd029c1675ba497e34f865d07aae11d462->enter($__internal_86ece1a5c47332c2e8187f0f8de19ebd029c1675ba497e34f865d07aae11d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ece1a5c47332c2e8187f0f8de19ebd029c1675ba497e34f865d07aae11d462->leave($__internal_86ece1a5c47332c2e8187f0f8de19ebd029c1675ba497e34f865d07aae11d462_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2fbf2e90e7e81761893e5da9c3d2c6a8f7081de03c12b8ac8e17deb3cb0ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2fbf2e90e7e81761893e5da9c3d2c6a8f7081de03c12b8ac8e17deb3cb0ee5->enter($__internal_5b2fbf2e90e7e81761893e5da9c3d2c6a8f7081de03c12b8ac8e17deb3cb0ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"inscription\">

        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_5b2fbf2e90e7e81761893e5da9c3d2c6a8f7081de03c12b8ac8e17deb3cb0ee5->leave($__internal_5b2fbf2e90e7e81761893e5da9c3d2c6a8f7081de03c12b8ac8e17deb3cb0ee5_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"inscription\">

        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}

    </div>
{% endblock %}
", "security/register.html.twig", "/export/etu/alexis.delarre/Bureau/CONF LML/templates/security/register.html.twig");
    }
}
