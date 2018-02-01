<?php

/* liens/liens.html.twig */
class __TwigTemplate_8969830d6470ec4bcfc6044bd376a890f11dbfe2bf57e11044b7e8912999fac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "liens/liens.html.twig", 1);
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
        $__internal_9aac9bb6c3366b2cb00497931a363873ed263f8f29e3075f4d4eeda57e7c3375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aac9bb6c3366b2cb00497931a363873ed263f8f29e3075f4d4eeda57e7c3375->enter($__internal_9aac9bb6c3366b2cb00497931a363873ed263f8f29e3075f4d4eeda57e7c3375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liens/liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aac9bb6c3366b2cb00497931a363873ed263f8f29e3075f4d4eeda57e7c3375->leave($__internal_9aac9bb6c3366b2cb00497931a363873ed263f8f29e3075f4d4eeda57e7c3375_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f393cd0696f3d6ca673a738337f60bb1db1761841ed039d3b9ae51d3940e10d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f393cd0696f3d6ca673a738337f60bb1db1761841ed039d3b9ae51d3940e10d7->enter($__internal_f393cd0696f3d6ca673a738337f60bb1db1761841ed039d3b9ae51d3940e10d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "liens/liens.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"div-membres\">

    <p><b>Quelques liens vers le monde extérieur qui peuvent être utiles.</b></p>
    <ol>

        <li><b>Revues et Livres</b>



            <ul>
                <li><a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability?format=WX#WVsiTXDlHqbJlrrc.97\" target=\"_blank\">
                        Introduction to Banach Spaces: Analysis and Probability, </a>
                    <a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability-volume-1?format=HB#7XeJgkmvUyQHV0QK.97\" target=\"_blank\">Vol. 1 </a> and
                    <a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability-volume-2?format=HB#6uoUtRhGS761bkQX.97\" target=\"_blank\">Vol.2</a>, Cambridge studies in advanced mathematics 166 and 167, Cambridge university press (2017), <b>Daniel Li</b> and Hervé Queffélec</li>

                <li><a href=\"http://www.editions-ellipses.fr/product_info.php?products_id=11183\" target=\"_blank\">
                        Intégration et applications - Cours et exercices corrigés</a>, <b>Daniel Li</b></li>

                <li><a href=\"http://www.editions-ellipses.fr/product_info.php?cPath=655_579&amp;products_id=9387\" target=\"_blank\">Cours d’analyse fonctionnelle avec 200 exercices corrigés</a>, <b>Daniel Li</b></li>

                <li><a href=\"http://smf.emath.fr/Publications/CoursSpecialises/2004/12/html/smf_cours-spec_12.html\" target=\"_blank\">Introduction à l'étude des espaces de Banach</a>, <b>Daniel Li</b> &amp; Hervé Queffelec</li>

                <li><a href=\"http://www.cassini.fr/#analyse_complexe\" target=\"_self\">Analyse complexe</a>, E. Amar &amp; <b>E. Matheron</b></li>

                <li><a href=\"http://www.cambridge.org/uk/catalogue/catalogue.asp?isbn=9780521514965\" target=\"_self\">Dynamics of linear operators</a>, F. Bayart &amp; <b>E. Matheron</b></li>

                <li><a href=\"http://labomathlens.free.fr/Images/LectNotes.jpg\" target=\"_blank\"> Geometric Methods in the Algebraic Theory of Quadratic Forms</a>, École d'été Lens, 2000. O. Izhboldin, B. Kahn,<b> N. Karpenko</b> et A. Vishik. Ed. Jean Pierre Tignol</li>

                <!--<li><a href=\"http://smf.emath.fr/Publications/Toutes/Presentation/\" target=\"_blank\">Société Mathématique de France</a></li>

                <li><a href=\"http://www.springerlink.com/app/home/journal.asp?wasp=d48ad7805cd64dafa78b911651b2d605&amp;referrer=parent&amp;backto=linkingpublicationresults,1:110312,1\" target=\"_blank\">Lecture Notes in Mathematics</a></li>-->
            </ul>
        </li>

        <li><b>Prépublications</b>

            <ul>
                <li><a href=\"http://fr.arxiv.org/archive\" target=\"_blank\">ArXiv</a> (\t\t\t<a href=\"http://fr.arxiv.org/list/math.AT/recent\" target=\"_blank\">Topologie Algébrique</a>, \t\t\t<a href=\"http://fr.arxiv.org/list/math.DG/recent\" target=\"_blank\">Geométrie Différentielle</a>, \t\t\t<a href=\"http://fr.arxiv.org/list/math.FA/recent\" target=\"_blank\">Analyse Fonctionnelle</a>, ...)</li>

                <li>\t\t\t<a href=\"http://hal-univ-artois.archives-ouvertes.fr/view_by_stamp.php?&amp;halsid=hbodkb78r9lghji1oima8k37p3&amp;label=UNIV-ARTOIS&amp;langue=fr&amp;action_todo=browse_byLaboAffi&amp;submit=1&amp;which_labo=41\" target=\"_self\">HAL - LML </a></li>

            </ul>
        </li>

        <li><b>Bases des données et moteurs de recherche</b>

            <ul>
                <li><a href=\"http://www.ams.org/mathscinet/search\" target=\"_blank\">Math Sci Net (accès restreint)</a></li>

                <li><a href=\"http://www.zentralblatt-math.org/zmath/\" target=\"_blank\">Zentralblatt (accès restreint)</a></li>

                <li><a href=\"http://scholar.google.com/\" target=\"_blank\">GoogleScholar</a></li>
            </ul>
        </li>

        <li><b>Bibliothèques</b>

            <ul>
                <li><a href=\"http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=EXPLOITATION\" target=\"_blank\">Bibliothèque de l'Université d'Artois </a></li>

                <li><a href=\"http://portail-bu.univ-artois.fr/\" target=\"_blank\">Bibliothèque de l'Université d'Artois</a> et plus précisément la <a href=\"http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&amp;PORTAL_ID=bu_lens.xml\" target=\"_blank\">bibliothèque de l'université à Lens.</a></li>

                <li><a href=\"http://www.rnbm.org/\" target=\"_blank\">Réseau National des Bibliothèques de Mathématiques</a></li>
            </ul>
        </li>

        <li><b>Administration</b>
            <ul>

                <li><a href=\"http://www.univ-artois.fr/\" target=\"_blank\">Université d'Artois</a></li>
            </ul>

            <ul>
                <li><a href=\"http://www.education.gouv.fr/index.php\" target=\"_blank\">Ministère de l'Éducation Nationale, de l'Enseignement Supérieur et de la Recherche</a></li>
            </ul>
        </li>

        <!--<li><b>Autes enseignements</b>
        <ul>

        <li>\t\t\t<a href=\"http://archives.math.utk.edu/\" target=\"_blank\">Math Archives</a></li>

        <li>\t\t\t<a href=\"http://www.cmla.ens-cachan.fr/Cmla/Bibli/Logiciel.htm\" target=\"_blank\">Logiciels Mathématiques</a> ....ACTUALISER....</li>

        </ul>
        </li>

        <li><b>Moteurs de Recherche </b>
        <ul>

        <li><a href=\"http://www.google.fr/\" target=\"_blank\">Google</a></li>


        </ul>
        </li>-->

        <li><b>Laboratoires de Mathématiques de la Région</b>
            <ul>

                <li><a href=\"http://math.univ-lille1.fr/\" target=\"_blank\">Laboratoire Painlevé</a> (Université de Lille 1)</li>

                <li><a href=\"http://www-lmpa.univ-littoral.fr/\" target=\"_blank\">LMPA Joseph Liouville</a> (Université du Littoral, Côte d'Opale)</li>

                <li><a href=\"http://www.univ-valenciennes.fr/lamav/\" target=\"_blank\">LAMAV</a> (Université de Valenciennes et du Hainaut-Cambrésis)</li>

                <li><a href=\"http://federation-math.univ-lille1.fr/\" target=\"_blank\">Fédération de Recherche de Mathématique du Nord-Pas-de-Calais</a></li>
            </ul>
        </li>
    </ol>
</div>
";
        
        $__internal_f393cd0696f3d6ca673a738337f60bb1db1761841ed039d3b9ae51d3940e10d7->leave($__internal_f393cd0696f3d6ca673a738337f60bb1db1761841ed039d3b9ae51d3940e10d7_prof);

    }

    public function getTemplateName()
    {
        return "liens/liens.html.twig";
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
<div class=\"div-membres\">

    <p><b>Quelques liens vers le monde extérieur qui peuvent être utiles.</b></p>
    <ol>

        <li><b>Revues et Livres</b>



            <ul>
                <li><a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability?format=WX#WVsiTXDlHqbJlrrc.97\" target=\"_blank\">
                        Introduction to Banach Spaces: Analysis and Probability, </a>
                    <a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability-volume-1?format=HB#7XeJgkmvUyQHV0QK.97\" target=\"_blank\">Vol. 1 </a> and
                    <a href=\"http://www.cambridge.org/fr/academic/subjects/mathematics/abstract-analysis/introduction-banach-spaces-analysis-and-probability-volume-2?format=HB#6uoUtRhGS761bkQX.97\" target=\"_blank\">Vol.2</a>, Cambridge studies in advanced mathematics 166 and 167, Cambridge university press (2017), <b>Daniel Li</b> and Hervé Queffélec</li>

                <li><a href=\"http://www.editions-ellipses.fr/product_info.php?products_id=11183\" target=\"_blank\">
                        Intégration et applications - Cours et exercices corrigés</a>, <b>Daniel Li</b></li>

                <li><a href=\"http://www.editions-ellipses.fr/product_info.php?cPath=655_579&amp;products_id=9387\" target=\"_blank\">Cours d’analyse fonctionnelle avec 200 exercices corrigés</a>, <b>Daniel Li</b></li>

                <li><a href=\"http://smf.emath.fr/Publications/CoursSpecialises/2004/12/html/smf_cours-spec_12.html\" target=\"_blank\">Introduction à l'étude des espaces de Banach</a>, <b>Daniel Li</b> &amp; Hervé Queffelec</li>

                <li><a href=\"http://www.cassini.fr/#analyse_complexe\" target=\"_self\">Analyse complexe</a>, E. Amar &amp; <b>E. Matheron</b></li>

                <li><a href=\"http://www.cambridge.org/uk/catalogue/catalogue.asp?isbn=9780521514965\" target=\"_self\">Dynamics of linear operators</a>, F. Bayart &amp; <b>E. Matheron</b></li>

                <li><a href=\"http://labomathlens.free.fr/Images/LectNotes.jpg\" target=\"_blank\"> Geometric Methods in the Algebraic Theory of Quadratic Forms</a>, École d'été Lens, 2000. O. Izhboldin, B. Kahn,<b> N. Karpenko</b> et A. Vishik. Ed. Jean Pierre Tignol</li>

                <!--<li><a href=\"http://smf.emath.fr/Publications/Toutes/Presentation/\" target=\"_blank\">Société Mathématique de France</a></li>

                <li><a href=\"http://www.springerlink.com/app/home/journal.asp?wasp=d48ad7805cd64dafa78b911651b2d605&amp;referrer=parent&amp;backto=linkingpublicationresults,1:110312,1\" target=\"_blank\">Lecture Notes in Mathematics</a></li>-->
            </ul>
        </li>

        <li><b>Prépublications</b>

            <ul>
                <li><a href=\"http://fr.arxiv.org/archive\" target=\"_blank\">ArXiv</a> (\t\t\t<a href=\"http://fr.arxiv.org/list/math.AT/recent\" target=\"_blank\">Topologie Algébrique</a>, \t\t\t<a href=\"http://fr.arxiv.org/list/math.DG/recent\" target=\"_blank\">Geométrie Différentielle</a>, \t\t\t<a href=\"http://fr.arxiv.org/list/math.FA/recent\" target=\"_blank\">Analyse Fonctionnelle</a>, ...)</li>

                <li>\t\t\t<a href=\"http://hal-univ-artois.archives-ouvertes.fr/view_by_stamp.php?&amp;halsid=hbodkb78r9lghji1oima8k37p3&amp;label=UNIV-ARTOIS&amp;langue=fr&amp;action_todo=browse_byLaboAffi&amp;submit=1&amp;which_labo=41\" target=\"_self\">HAL - LML </a></li>

            </ul>
        </li>

        <li><b>Bases des données et moteurs de recherche</b>

            <ul>
                <li><a href=\"http://www.ams.org/mathscinet/search\" target=\"_blank\">Math Sci Net (accès restreint)</a></li>

                <li><a href=\"http://www.zentralblatt-math.org/zmath/\" target=\"_blank\">Zentralblatt (accès restreint)</a></li>

                <li><a href=\"http://scholar.google.com/\" target=\"_blank\">GoogleScholar</a></li>
            </ul>
        </li>

        <li><b>Bibliothèques</b>

            <ul>
                <li><a href=\"http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=EXPLOITATION\" target=\"_blank\">Bibliothèque de l'Université d'Artois </a></li>

                <li><a href=\"http://portail-bu.univ-artois.fr/\" target=\"_blank\">Bibliothèque de l'Université d'Artois</a> et plus précisément la <a href=\"http://portail-bu.univ-artois.fr/medias/medias.aspx?INSTANCE=exploitation&amp;PORTAL_ID=bu_lens.xml\" target=\"_blank\">bibliothèque de l'université à Lens.</a></li>

                <li><a href=\"http://www.rnbm.org/\" target=\"_blank\">Réseau National des Bibliothèques de Mathématiques</a></li>
            </ul>
        </li>

        <li><b>Administration</b>
            <ul>

                <li><a href=\"http://www.univ-artois.fr/\" target=\"_blank\">Université d'Artois</a></li>
            </ul>

            <ul>
                <li><a href=\"http://www.education.gouv.fr/index.php\" target=\"_blank\">Ministère de l'Éducation Nationale, de l'Enseignement Supérieur et de la Recherche</a></li>
            </ul>
        </li>

        <!--<li><b>Autes enseignements</b>
        <ul>

        <li>\t\t\t<a href=\"http://archives.math.utk.edu/\" target=\"_blank\">Math Archives</a></li>

        <li>\t\t\t<a href=\"http://www.cmla.ens-cachan.fr/Cmla/Bibli/Logiciel.htm\" target=\"_blank\">Logiciels Mathématiques</a> ....ACTUALISER....</li>

        </ul>
        </li>

        <li><b>Moteurs de Recherche </b>
        <ul>

        <li><a href=\"http://www.google.fr/\" target=\"_blank\">Google</a></li>


        </ul>
        </li>-->

        <li><b>Laboratoires de Mathématiques de la Région</b>
            <ul>

                <li><a href=\"http://math.univ-lille1.fr/\" target=\"_blank\">Laboratoire Painlevé</a> (Université de Lille 1)</li>

                <li><a href=\"http://www-lmpa.univ-littoral.fr/\" target=\"_blank\">LMPA Joseph Liouville</a> (Université du Littoral, Côte d'Opale)</li>

                <li><a href=\"http://www.univ-valenciennes.fr/lamav/\" target=\"_blank\">LAMAV</a> (Université de Valenciennes et du Hainaut-Cambrésis)</li>

                <li><a href=\"http://federation-math.univ-lille1.fr/\" target=\"_blank\">Fédération de Recherche de Mathématique du Nord-Pas-de-Calais</a></li>
            </ul>
        </li>
    </ol>
</div>
{% endblock %}", "liens/liens.html.twig", "/home/nh/Documents/Refonte-site-LML/templates/liens/liens.html.twig");
    }
}
