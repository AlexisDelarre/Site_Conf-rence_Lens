<?php

/* homepage/accueil.html.twig */
class __TwigTemplate_b53ddd2164a65ec18b6d32117f681b44a172aaf73a253250c0eeda358284e7c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/accueil.html.twig", 1);
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
        $__internal_b79d2cb2f863e7da7ed13505c391e6ae82c705d7be1e2b0dc02a8b050caa7945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79d2cb2f863e7da7ed13505c391e6ae82c705d7be1e2b0dc02a8b050caa7945->enter($__internal_b79d2cb2f863e7da7ed13505c391e6ae82c705d7be1e2b0dc02a8b050caa7945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79d2cb2f863e7da7ed13505c391e6ae82c705d7be1e2b0dc02a8b050caa7945->leave($__internal_b79d2cb2f863e7da7ed13505c391e6ae82c705d7be1e2b0dc02a8b050caa7945_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2d2663789f66761afde639162119539bbecbd8463e1b3ce260ef86805869497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d2663789f66761afde639162119539bbecbd8463e1b3ce260ef86805869497->enter($__internal_d2d2663789f66761afde639162119539bbecbd8463e1b3ce260ef86805869497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "homepage/accueil.html.twig", 14)->display($context);
        // line 15
        echo "            <div class=\"container-accueil\">
                    <p class=\"content\">
                        <h1>Bienvenue sur la page web du Laboratoire de Mathématiques de Lens</h1>

                        <p>Le Laboratoire de Mathématiques de Lens (EA2462) fait partie de l'Université d'Artois. Il participe à la Fédération de Recherche Mathématique du Nord-Pas-de-Calais.

                            Le laboratoire développe ses recherches dans plusieurs directions (cliquer sur le titre de chaque équipe ci-dessous pour avoir une description plus détaillée et la liste des membres).</p>
                         <p>   La liste de ses publications peut être consultée sur HAL.</p>

                        <h1>Algèbre:</h1>

                        <p>Formes quadratiques sur les corps (déploiement des formes bilinéaires et quadratiques, caractéristique 2)</p>
                        <p>Groupes de Witt des corps et des schémas</p>
                        <p>Catégories triangulées et dérivées</p>
                        <p>Théories cohomologiques sur les schémas (groupes de Chow, K-théorie, cobordisme algébrique, théorie homotopique des schémas)</p>
                        <p>Algèbre non commutative (extensions d’anneaux, fonctions symétriques non commutatives, algèbres de Hopf, groupes quantiques)</p>
                        <h1>Analyse fonctionnelle:</h1>

                        <h1>Opérateurs de composition</h1>
                        <p>Dynamique des opérateurs linéaires (hypercyclicité, chaos)</p>
                        <p>Géométrie des espaces de Banach (analyse Harmonique, fonctions périodiques à fréquences localisées)</p>

                        <h1>Didactique des mathématiques:</h1>

                        <p>Études didactiques de l'utilisation de l'histoire des mathématiques en classe et en formation (projet EDU-HM, financement régional)</p>
                        <p>Le langage dans l’Enseignement et l’Apprentissage des Mathématiques (projet LEMME)</p>
                        <p>Enseigner et apprendre la géométrie à l’école primaire</p>
                        <p> - Production de ressources</p>
                        <p> - Étude du développement professionnel d’enseignants (premier et second degrés)</p>
                        <h1>Histoire des mathématiques:</h1>

                        <p>Géométrie, de la période antique jusqu’au 17ème siècle</p>
                        <p>Algèbre aux 19ème et 20ème siècles</p>

                        <h1>Géométrie:</h1>

                        <p>Géométrie algébrique (surfaces rationnelles en caractéristique 0 ou p > 2, revêtements des courbes elliptiques, liées à l’étude de certaines équations aux dérivées partielles non linéaires, invariants différentiels)</p>
                        <p>Physique mathématique (quantification par déformation, représentations des groupes de Lie, application à la caractérisation des opérateurs différentiels équivariants)</p>
                <p>Topologie algébrique (cohomologie d’intersection, complexité topologique, genre de Mislin)</p>
                <p>Géométrie différentielle (feuilletages riemanniens singuliers et actions de groupes de Lie isométriques)</p>


                    </div>

            </div>
        </div>
    </div>
";
        
        $__internal_d2d2663789f66761afde639162119539bbecbd8463e1b3ce260ef86805869497->leave($__internal_d2d2663789f66761afde639162119539bbecbd8463e1b3ce260ef86805869497_prof);

    }

    public function getTemplateName()
    {
        return "homepage/accueil.html.twig";
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
            <div class=\"container-accueil\">
                    <p class=\"content\">
                        <h1>Bienvenue sur la page web du Laboratoire de Mathématiques de Lens</h1>

                        <p>Le Laboratoire de Mathématiques de Lens (EA2462) fait partie de l'Université d'Artois. Il participe à la Fédération de Recherche Mathématique du Nord-Pas-de-Calais.

                            Le laboratoire développe ses recherches dans plusieurs directions (cliquer sur le titre de chaque équipe ci-dessous pour avoir une description plus détaillée et la liste des membres).</p>
                         <p>   La liste de ses publications peut être consultée sur HAL.</p>

                        <h1>Algèbre:</h1>

                        <p>Formes quadratiques sur les corps (déploiement des formes bilinéaires et quadratiques, caractéristique 2)</p>
                        <p>Groupes de Witt des corps et des schémas</p>
                        <p>Catégories triangulées et dérivées</p>
                        <p>Théories cohomologiques sur les schémas (groupes de Chow, K-théorie, cobordisme algébrique, théorie homotopique des schémas)</p>
                        <p>Algèbre non commutative (extensions d’anneaux, fonctions symétriques non commutatives, algèbres de Hopf, groupes quantiques)</p>
                        <h1>Analyse fonctionnelle:</h1>

                        <h1>Opérateurs de composition</h1>
                        <p>Dynamique des opérateurs linéaires (hypercyclicité, chaos)</p>
                        <p>Géométrie des espaces de Banach (analyse Harmonique, fonctions périodiques à fréquences localisées)</p>

                        <h1>Didactique des mathématiques:</h1>

                        <p>Études didactiques de l'utilisation de l'histoire des mathématiques en classe et en formation (projet EDU-HM, financement régional)</p>
                        <p>Le langage dans l’Enseignement et l’Apprentissage des Mathématiques (projet LEMME)</p>
                        <p>Enseigner et apprendre la géométrie à l’école primaire</p>
                        <p> - Production de ressources</p>
                        <p> - Étude du développement professionnel d’enseignants (premier et second degrés)</p>
                        <h1>Histoire des mathématiques:</h1>

                        <p>Géométrie, de la période antique jusqu’au 17ème siècle</p>
                        <p>Algèbre aux 19ème et 20ème siècles</p>

                        <h1>Géométrie:</h1>

                        <p>Géométrie algébrique (surfaces rationnelles en caractéristique 0 ou p > 2, revêtements des courbes elliptiques, liées à l’étude de certaines équations aux dérivées partielles non linéaires, invariants différentiels)</p>
                        <p>Physique mathématique (quantification par déformation, représentations des groupes de Lie, application à la caractérisation des opérateurs différentiels équivariants)</p>
                <p>Topologie algébrique (cohomologie d’intersection, complexité topologique, genre de Mislin)</p>
                <p>Géométrie différentielle (feuilletages riemanniens singuliers et actions de groupes de Lie isométriques)</p>


                    </div>

            </div>
        </div>
    </div>
{% endblock %}

", "homepage/accueil.html.twig", "/home/nh/Documents/Refonte-site-LML/templates/homepage/accueil.html.twig");
    }
}
