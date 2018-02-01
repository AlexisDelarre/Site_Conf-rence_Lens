<?php

/* contact/contact.html.twig */
class __TwigTemplate_8231cb610c17a602b389b1ee9ada6fe799472e4e5366b0ebf38b1489b033257e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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
        $__internal_95f2f78f9af2dd3cabeaada779d2b0ecfa57af33813ab1e3fbf1910a363ff4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f2f78f9af2dd3cabeaada779d2b0ecfa57af33813ab1e3fbf1910a363ff4ba->enter($__internal_95f2f78f9af2dd3cabeaada779d2b0ecfa57af33813ab1e3fbf1910a363ff4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f2f78f9af2dd3cabeaada779d2b0ecfa57af33813ab1e3fbf1910a363ff4ba->leave($__internal_95f2f78f9af2dd3cabeaada779d2b0ecfa57af33813ab1e3fbf1910a363ff4ba_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab4b0146d4cd9a078863d1ba1d9bd4ef42cc7c9383f68c49e1cbc2aea7a1b91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4b0146d4cd9a078863d1ba1d9bd4ef42cc7c9383f68c49e1cbc2aea7a1b91d->enter($__internal_ab4b0146d4cd9a078863d1ba1d9bd4ef42cc7c9383f68c49e1cbc2aea7a1b91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"flex-center position-ref full-height\">
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
        $this->loadTemplate("navbar.html.twig", "contact/contact.html.twig", 14)->display($context);
        // line 15
        echo "            <div class=\"container-contact\">
                    <div class=\"content\">
                        <h1>Identité</h1>
                        <p>Le laboratoire est l'unité EA 2462 et il est rattaché à l'école doctorale <a href=\"http://edspi.univ-lille1.fr/\">Sciences pour l'Ingénieur</a> numéro 72.</p>

                        <h1>Adresse postale</h1>

                        <p>LML - Laboratoire de Mathématiques de Lens</p>
                        <p>Faculté des Sciences Jean Perrin</p>
                        <p>Université d'Artois</p>
                        <p>Rue Jean Souvraz SP 18</p>
                        <p>62307 LENS CEDEX</p>

                        <h1>Direction du laboratoire</h1>
                        <p>Pascal Lefèvre (tél: +33 (0)3 21 79 17 76, fax: +33 (0)3 21 79 17 29)</p>
                        <h1>Secrétariat</h1>
                        <p>Angélique Gérard (tél: +33 (0) 3 21 79 17 94, fax: +33 (0) 3 21 79 17 29)</p>
                    </div>

            </div>
        </div>
    </div>
";
        
        $__internal_ab4b0146d4cd9a078863d1ba1d9bd4ef42cc7c9383f68c49e1cbc2aea7a1b91d->leave($__internal_ab4b0146d4cd9a078863d1ba1d9bd4ef42cc7c9383f68c49e1cbc2aea7a1b91d_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
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
            <div class=\"container-contact\">
                    <div class=\"content\">
                        <h1>Identité</h1>
                        <p>Le laboratoire est l'unité EA 2462 et il est rattaché à l'école doctorale <a href=\"http://edspi.univ-lille1.fr/\">Sciences pour l'Ingénieur</a> numéro 72.</p>

                        <h1>Adresse postale</h1>

                        <p>LML - Laboratoire de Mathématiques de Lens</p>
                        <p>Faculté des Sciences Jean Perrin</p>
                        <p>Université d'Artois</p>
                        <p>Rue Jean Souvraz SP 18</p>
                        <p>62307 LENS CEDEX</p>

                        <h1>Direction du laboratoire</h1>
                        <p>Pascal Lefèvre (tél: +33 (0)3 21 79 17 76, fax: +33 (0)3 21 79 17 29)</p>
                        <h1>Secrétariat</h1>
                        <p>Angélique Gérard (tél: +33 (0) 3 21 79 17 94, fax: +33 (0) 3 21 79 17 29)</p>
                    </div>

            </div>
        </div>
    </div>
{% endblock %}

", "contact/contact.html.twig", "/home/nh/Documents/Refonte-site-LML/templates/contact/contact.html.twig");
    }
}
