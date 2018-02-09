<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d650e9fdda6b858f75e44870bb83960581e3af30bdd44bf77b0945bfe6e33141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1ef9b4dbede0ad99d364c2d764b4ac999e644759b8570a00b70f0c7e5a1ddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ef9b4dbede0ad99d364c2d764b4ac999e644759b8570a00b70f0c7e5a1ddde->enter($__internal_c1ef9b4dbede0ad99d364c2d764b4ac999e644759b8570a00b70f0c7e5a1ddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c1ef9b4dbede0ad99d364c2d764b4ac999e644759b8570a00b70f0c7e5a1ddde->leave($__internal_c1ef9b4dbede0ad99d364c2d764b4ac999e644759b8570a00b70f0c7e5a1ddde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e14d54f5dc3f21104b3512dda9e637acf7318bbbeaf607601c8fc65b67269c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e14d54f5dc3f21104b3512dda9e637acf7318bbbeaf607601c8fc65b67269c3->enter($__internal_3e14d54f5dc3f21104b3512dda9e637acf7318bbbeaf607601c8fc65b67269c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3e14d54f5dc3f21104b3512dda9e637acf7318bbbeaf607601c8fc65b67269c3->leave($__internal_3e14d54f5dc3f21104b3512dda9e637acf7318bbbeaf607601c8fc65b67269c3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec4ad1aa7a28a261a040cab9956b4e7c5c0076114014aadfdd0229c93b6de57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4ad1aa7a28a261a040cab9956b4e7c5c0076114014aadfdd0229c93b6de57b->enter($__internal_ec4ad1aa7a28a261a040cab9956b4e7c5c0076114014aadfdd0229c93b6de57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ec4ad1aa7a28a261a040cab9956b4e7c5c0076114014aadfdd0229c93b6de57b->leave($__internal_ec4ad1aa7a28a261a040cab9956b4e7c5c0076114014aadfdd0229c93b6de57b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_33ba75f2393d66c6c2dc589604a0e1c0955f563e15ffe37922a418a62868a22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ba75f2393d66c6c2dc589604a0e1c0955f563e15ffe37922a418a62868a22f->enter($__internal_33ba75f2393d66c6c2dc589604a0e1c0955f563e15ffe37922a418a62868a22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33ba75f2393d66c6c2dc589604a0e1c0955f563e15ffe37922a418a62868a22f->leave($__internal_33ba75f2393d66c6c2dc589604a0e1c0955f563e15ffe37922a418a62868a22f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/helorion/LML/Refonte-site-LML/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
