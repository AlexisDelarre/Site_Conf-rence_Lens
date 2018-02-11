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
        $__internal_8c4ef799a6671cc466b2bd6f2a48be6093939db257895052e053a29cc7d1a1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4ef799a6671cc466b2bd6f2a48be6093939db257895052e053a29cc7d1a1eb->enter($__internal_8c4ef799a6671cc466b2bd6f2a48be6093939db257895052e053a29cc7d1a1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4ef799a6671cc466b2bd6f2a48be6093939db257895052e053a29cc7d1a1eb->leave($__internal_8c4ef799a6671cc466b2bd6f2a48be6093939db257895052e053a29cc7d1a1eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7975d13e7c50de20d920611e8990ae936e6d921faa82508db8c5c83ef2cfade7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7975d13e7c50de20d920611e8990ae936e6d921faa82508db8c5c83ef2cfade7->enter($__internal_7975d13e7c50de20d920611e8990ae936e6d921faa82508db8c5c83ef2cfade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7975d13e7c50de20d920611e8990ae936e6d921faa82508db8c5c83ef2cfade7->leave($__internal_7975d13e7c50de20d920611e8990ae936e6d921faa82508db8c5c83ef2cfade7_prof);

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
", "security/register.html.twig", "/home/helorion/LML/Refonte-site-LML/templates/security/register.html.twig");
    }
}
