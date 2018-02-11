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
        $__internal_88cffae1b079ccc771b3b8cac0d96c61c0a66dc4d14055e9db33e31a5295ca2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cffae1b079ccc771b3b8cac0d96c61c0a66dc4d14055e9db33e31a5295ca2f->enter($__internal_88cffae1b079ccc771b3b8cac0d96c61c0a66dc4d14055e9db33e31a5295ca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_88cffae1b079ccc771b3b8cac0d96c61c0a66dc4d14055e9db33e31a5295ca2f->leave($__internal_88cffae1b079ccc771b3b8cac0d96c61c0a66dc4d14055e9db33e31a5295ca2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b942755d0b968bfbd59349643353e0d1fe03c0d5047a183983ad2246ae5384d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b942755d0b968bfbd59349643353e0d1fe03c0d5047a183983ad2246ae5384d9->enter($__internal_b942755d0b968bfbd59349643353e0d1fe03c0d5047a183983ad2246ae5384d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laboratoire de Mathématiques de Lens";
        
        $__internal_b942755d0b968bfbd59349643353e0d1fe03c0d5047a183983ad2246ae5384d9->leave($__internal_b942755d0b968bfbd59349643353e0d1fe03c0d5047a183983ad2246ae5384d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6be6b2c66e7053b0ce5583f0a352a5cbdc3ee54858231537b1e5fe6e5aa33900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be6b2c66e7053b0ce5583f0a352a5cbdc3ee54858231537b1e5fe6e5aa33900->enter($__internal_6be6b2c66e7053b0ce5583f0a352a5cbdc3ee54858231537b1e5fe6e5aa33900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6be6b2c66e7053b0ce5583f0a352a5cbdc3ee54858231537b1e5fe6e5aa33900->leave($__internal_6be6b2c66e7053b0ce5583f0a352a5cbdc3ee54858231537b1e5fe6e5aa33900_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ec0864909a3ac4b72a4b278202d67d1f2d6849f82876fc138f44aa2c3e25244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec0864909a3ac4b72a4b278202d67d1f2d6849f82876fc138f44aa2c3e25244->enter($__internal_1ec0864909a3ac4b72a4b278202d67d1f2d6849f82876fc138f44aa2c3e25244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ec0864909a3ac4b72a4b278202d67d1f2d6849f82876fc138f44aa2c3e25244->leave($__internal_1ec0864909a3ac4b72a4b278202d67d1f2d6849f82876fc138f44aa2c3e25244_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf912e4ed6d0784b324118849fed72f20fff6057d456a234cd47f3cdd87f5e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf912e4ed6d0784b324118849fed72f20fff6057d456a234cd47f3cdd87f5e4a->enter($__internal_cf912e4ed6d0784b324118849fed72f20fff6057d456a234cd47f3cdd87f5e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf912e4ed6d0784b324118849fed72f20fff6057d456a234cd47f3cdd87f5e4a->leave($__internal_cf912e4ed6d0784b324118849fed72f20fff6057d456a234cd47f3cdd87f5e4a_prof);

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
", "base.html.twig", "/home/helorion/LML/Refonte-site-LML/templates/base.html.twig");
    }
}
