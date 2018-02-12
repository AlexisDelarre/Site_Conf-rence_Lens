<?php

/* Conference/index.html.twig */
class __TwigTemplate_e812ca4b900c9ebe78cc4d203cd8730a13f650ce9d8dfc55241eec1128bb92d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Conference/index.html.twig", 1);
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
        $__internal_e99ca07e4362c0cca0c2f6357955eacfeef80267b0d36b296b415eaa4a9ddcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99ca07e4362c0cca0c2f6357955eacfeef80267b0d36b296b415eaa4a9ddcbd->enter($__internal_e99ca07e4362c0cca0c2f6357955eacfeef80267b0d36b296b415eaa4a9ddcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Conference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99ca07e4362c0cca0c2f6357955eacfeef80267b0d36b296b415eaa4a9ddcbd->leave($__internal_e99ca07e4362c0cca0c2f6357955eacfeef80267b0d36b296b415eaa4a9ddcbd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_edc498ee8eff303ef9647d78508191641bf9b11badc212bdac7110be7be4b012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc498ee8eff303ef9647d78508191641bf9b11badc212bdac7110be7be4b012->enter($__internal_edc498ee8eff303ef9647d78508191641bf9b11badc212bdac7110be7be4b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_conference_new");
        echo "\">Nouvelle conference</a></div>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["conference"]);
        foreach ($context['_seq'] as $context["_key"] => $context["conference"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["conference"], "title", array()), "html", null, true);
            echo "
        ";
            // line 10
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_conference_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["conference"], "id", array()))), "html", null, true);
                echo "\">Edit</a> --
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_conference_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["conference"], "id", array()))), "html", null, true);
                echo "\">Delete</a>
        ";
            }
            // line 14
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

";
        
        $__internal_edc498ee8eff303ef9647d78508191641bf9b11badc212bdac7110be7be4b012->leave($__internal_edc498ee8eff303ef9647d78508191641bf9b11badc212bdac7110be7be4b012_prof);

    }

    public function getTemplateName()
    {
        return "Conference/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  69 => 14,  64 => 12,  59 => 11,  57 => 10,  52 => 9,  48 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

    <a href=\"{{ path('app_conference_new') }}\">Nouvelle conference</a></div>

    {% for conference in conference %}
        {{ conference.title }}
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('app_conference_edit', {'id': conference.id}) }}\">Edit</a> --
            <a href=\"{{ path('app_conference_delete', {'id': conference.id}) }}\">Delete</a>
        {% endif %}

    {% endfor %}


{% endblock %}", "Conference/index.html.twig", "/export/etu/alexis.delarre/Bureau/CONF LML/templates/Conference/index.html.twig");
    }
}
