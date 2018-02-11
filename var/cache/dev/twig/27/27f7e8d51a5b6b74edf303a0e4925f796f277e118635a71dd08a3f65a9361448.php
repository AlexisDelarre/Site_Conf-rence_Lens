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
        $__internal_6029c9aefd47293c9187b6887dbe3943019f40011e55b4595e8330651ccb3cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6029c9aefd47293c9187b6887dbe3943019f40011e55b4595e8330651ccb3cec->enter($__internal_6029c9aefd47293c9187b6887dbe3943019f40011e55b4595e8330651ccb3cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6029c9aefd47293c9187b6887dbe3943019f40011e55b4595e8330651ccb3cec->leave($__internal_6029c9aefd47293c9187b6887dbe3943019f40011e55b4595e8330651ccb3cec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab26999b550d893dfaac13ec6fd6e773ef8a4e7b8da9adfec333dd018a5aa00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab26999b550d893dfaac13ec6fd6e773ef8a4e7b8da9adfec333dd018a5aa00->enter($__internal_bab26999b550d893dfaac13ec6fd6e773ef8a4e7b8da9adfec333dd018a5aa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bab26999b550d893dfaac13ec6fd6e773ef8a4e7b8da9adfec333dd018a5aa00->leave($__internal_bab26999b550d893dfaac13ec6fd6e773ef8a4e7b8da9adfec333dd018a5aa00_prof);

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
", "security/login.html.twig", "/home/helorion/LML/Refonte-site-LML/templates/security/login.html.twig");
    }
}
