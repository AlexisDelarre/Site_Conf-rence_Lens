<?php

/* adresse/adresse.html.twig */
class __TwigTemplate_bde222a31428d92a9eb388488046407f9cdf36491de9e673d66a793c95c77767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "adresse/adresse.html.twig", 1);
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
        $__internal_5e7d2fe90ce71d6b0ee3b14165598d96d349c51aa91d18cf79752b29a37be833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7d2fe90ce71d6b0ee3b14165598d96d349c51aa91d18cf79752b29a37be833->enter($__internal_5e7d2fe90ce71d6b0ee3b14165598d96d349c51aa91d18cf79752b29a37be833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adresse/adresse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7d2fe90ce71d6b0ee3b14165598d96d349c51aa91d18cf79752b29a37be833->leave($__internal_5e7d2fe90ce71d6b0ee3b14165598d96d349c51aa91d18cf79752b29a37be833_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b33421c53e4fbe7310f2da5b32903e44c1bc9be965607beeaa659e6e22851042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33421c53e4fbe7310f2da5b32903e44c1bc9be965607beeaa659e6e22851042->enter($__internal_b33421c53e4fbe7310f2da5b32903e44c1bc9be965607beeaa659e6e22851042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"flex-center position-ref full-height\">
    <div class=\"content\">
        <div id=\"banniere\">
            <div class=\"title m-b-md\">
                <h1>Laboratoire de Mathématiques de Lens</h1>
                <a href=\"http://www.univ-artois.fr/\">
                    Université d'artois
                </a>
            </div>
            <img src=\"/images/batiment.jpg\">
        </div>
        ";
        // line 14
        $this->loadTemplate("navbar.html.twig", "adresse/adresse.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"div-venir\">
    <h3><a id=\"venir\">Comment venir nous voir?</a></h3>
    <p>Le Laboratoire de Mathématiques de Lens de l'université d'Artois se trouve au sein de la faculté des sciences Jean Perrin, à Lens.</p>

    <h3>En voiture</h3>
    L'accès au parking du LML est restreint par une barrière, aussi, sauf arrangement préalable, le mieux est de se garer dans la rue Jean Souvraz ou la rue de la Bassée, qui sont de part et d'autre du campus.

    <h3>A pied, de la gare SNCF</h3>
    <p>Vous pouvez consulter les <a href=\"http://www.voyages-sncf.com\" class=\"spip_out\">horaires des trains</a></p>

    <p>Lens est à 1h15 de TGV de Paris&nbsp;:
        Prendre le TGV à partir de la Gare du Nord. Certains TGV sont directs pour Lens, d'autres nécessitent un changement de train à Arras.</p>

    <p>A partir de Lille&nbsp;:
        Prendre le train TER à la gare de Lille Flandres.</p>
    <p>Pour venir à partir de la gare SNCF de Lens, compter 15 mn à pied, et suivre cet itinéraire:</p>
    <iframe scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e33b215d0958b82fd&amp;ie=UTF8&amp;t=m&amp;ll=50.430639,2.826447&amp;spn=0.009568,0.018239&amp;z=15&amp;output=embed\" width=\"425\" height=\"350\" frameborder=\"0\"></iframe><br><small>View <a href=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e33b215d0958b82fd&amp;ie=UTF8&amp;t=m&amp;ll=50.430639,2.826447&amp;spn=0.009568,0.018239&amp;z=15&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Accès au LML</a> in a larger map</small>
    <h3>Une fois sur le campus de la faculté</h3>
    <p>Faire le tour du bâtiment, jusqu'à se trouver devant la belle façade qui jouxte le jardin à la française, comme ceci:</p>
    <iframe scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e344c89a043471f6c&amp;ie=UTF8&amp;t=h&amp;ll=50.434124,2.8234&amp;spn=0.002392,0.00456&amp;z=17&amp;output=embed\" width=\"425\" height=\"350\" frameborder=\"0\"></iframe><br><small>View <a href=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e344c89a043471f6c&amp;ie=UTF8&amp;t=h&amp;ll=50.434124,2.8234&amp;spn=0.002392,0.00456&amp;z=17&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Faculté des Sciences</a> in a larger map</small>
    <p>Entrer dans le hall, et monter au premier étage. Le LML est installé sur les deux couloirs qui convergent vers le hall. Le bureau de la secrétaire, Angélique Gérard, est le P115.</p>
</div>
";
        
        $__internal_b33421c53e4fbe7310f2da5b32903e44c1bc9be965607beeaa659e6e22851042->leave($__internal_b33421c53e4fbe7310f2da5b32903e44c1bc9be965607beeaa659e6e22851042_prof);

    }

    public function getTemplateName()
    {
        return "adresse/adresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
<div class=\"flex-center position-ref full-height\">
    <div class=\"content\">
        <div id=\"banniere\">
            <div class=\"title m-b-md\">
                <h1>Laboratoire de Mathématiques de Lens</h1>
                <a href=\"http://www.univ-artois.fr/\">
                    Université d'artois
                </a>
            </div>
            <img src=\"/images/batiment.jpg\">
        </div>
        {% include 'navbar.html.twig' %}
<div class=\"div-venir\">
    <h3><a id=\"venir\">Comment venir nous voir?</a></h3>
    <p>Le Laboratoire de Mathématiques de Lens de l'université d'Artois se trouve au sein de la faculté des sciences Jean Perrin, à Lens.</p>

    <h3>En voiture</h3>
    L'accès au parking du LML est restreint par une barrière, aussi, sauf arrangement préalable, le mieux est de se garer dans la rue Jean Souvraz ou la rue de la Bassée, qui sont de part et d'autre du campus.

    <h3>A pied, de la gare SNCF</h3>
    <p>Vous pouvez consulter les <a href=\"http://www.voyages-sncf.com\" class=\"spip_out\">horaires des trains</a></p>

    <p>Lens est à 1h15 de TGV de Paris&nbsp;:
        Prendre le TGV à partir de la Gare du Nord. Certains TGV sont directs pour Lens, d'autres nécessitent un changement de train à Arras.</p>

    <p>A partir de Lille&nbsp;:
        Prendre le train TER à la gare de Lille Flandres.</p>
    <p>Pour venir à partir de la gare SNCF de Lens, compter 15 mn à pied, et suivre cet itinéraire:</p>
    <iframe scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e33b215d0958b82fd&amp;ie=UTF8&amp;t=m&amp;ll=50.430639,2.826447&amp;spn=0.009568,0.018239&amp;z=15&amp;output=embed\" width=\"425\" height=\"350\" frameborder=\"0\"></iframe><br><small>View <a href=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e33b215d0958b82fd&amp;ie=UTF8&amp;t=m&amp;ll=50.430639,2.826447&amp;spn=0.009568,0.018239&amp;z=15&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Accès au LML</a> in a larger map</small>
    <h3>Une fois sur le campus de la faculté</h3>
    <p>Faire le tour du bâtiment, jusqu'à se trouver devant la belle façade qui jouxte le jardin à la française, comme ceci:</p>
    <iframe scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e344c89a043471f6c&amp;ie=UTF8&amp;t=h&amp;ll=50.434124,2.8234&amp;spn=0.002392,0.00456&amp;z=17&amp;output=embed\" width=\"425\" height=\"350\" frameborder=\"0\"></iframe><br><small>View <a href=\"https://maps.google.com/maps/ms?msa=0&amp;msid=202732317600177958434.0004e344c89a043471f6c&amp;ie=UTF8&amp;t=h&amp;ll=50.434124,2.8234&amp;spn=0.002392,0.00456&amp;z=17&amp;source=embed\" style=\"color:#0000FF;text-align:left\">Faculté des Sciences</a> in a larger map</small>
    <p>Entrer dans le hall, et monter au premier étage. Le LML est installé sur les deux couloirs qui convergent vers le hall. Le bureau de la secrétaire, Angélique Gérard, est le P115.</p>
</div>
{% endblock %}", "adresse/adresse.html.twig", "/home/nh/Documents/Refonte-site-LML/templates/adresse/adresse.html.twig");
    }
}
