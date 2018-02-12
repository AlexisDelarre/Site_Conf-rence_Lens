<?php

/* security/login.html.twig */
class __TwigTemplate_33609298a0d248a7a3424c5076adb635d11a6c4985770b13f8e86c0f8eefdf43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 2);
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
        $__internal_9a7dcf58ffd1c27a6658e36f2f64787c71f713afb6fe2d1dd006bebf88a948f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7dcf58ffd1c27a6658e36f2f64787c71f713afb6fe2d1dd006bebf88a948f7->enter($__internal_9a7dcf58ffd1c27a6658e36f2f64787c71f713afb6fe2d1dd006bebf88a948f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7dcf58ffd1c27a6658e36f2f64787c71f713afb6fe2d1dd006bebf88a948f7->leave($__internal_9a7dcf58ffd1c27a6658e36f2f64787c71f713afb6fe2d1dd006bebf88a948f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_baf28818231ad9734930589dcfc0cde705eb313e3ee3ebff59c1b4498669aa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf28818231ad9734930589dcfc0cde705eb313e3ee3ebff59c1b4498669aa1a->enter($__internal_baf28818231ad9734930589dcfc0cde705eb313e3ee3ebff59c1b4498669aa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div id=\"container_connexion\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

            <label for=\"username\">USERNAME</label>
            <input type=\"text\" tabindex=\"10\" size=\"25\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"username\" name=\"_username\">



            <label for=\"password\">PASSWORD</label>


            <input type=\"password\" tabindex=\"20\" size=\"25\" value=\"\" id=\"password\" name=\"_password\">


            <input class=\"button\" type=\"submit\" tabindex=\"100\" value=\"SE CONNECTER\" id=\"wp-submit\" name=\"wp-submit\">

        </form></div>


";
        
        $__internal_baf28818231ad9734930589dcfc0cde705eb313e3ee3ebff59c1b4498669aa1a->leave($__internal_baf28818231ad9734930589dcfc0cde705eb313e3ee3ebff59c1b4498669aa1a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}


{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div id=\"container_connexion\">
        <form action=\"{{ path('login') }}\" method=\"post\">

            <label for=\"username\">USERNAME</label>
            <input type=\"text\" tabindex=\"10\" size=\"25\" value=\"{{  last_username }}\" id=\"username\" name=\"_username\">



            <label for=\"password\">PASSWORD</label>


            <input type=\"password\" tabindex=\"20\" size=\"25\" value=\"\" id=\"password\" name=\"_password\">


            <input class=\"button\" type=\"submit\" tabindex=\"100\" value=\"SE CONNECTER\" id=\"wp-submit\" name=\"wp-submit\">

        </form></div>


{% endblock %}
", "security/login.html.twig", "/export/etu/alexis.delarre/Bureau/CONF LML/templates/security/login.html.twig");
    }
}
