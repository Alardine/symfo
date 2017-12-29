<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
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
        $__internal_ea144d52b3e8be3b3e5537666eaf2ac0081a4629a1e5c4829a8394bcbbb2f999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea144d52b3e8be3b3e5537666eaf2ac0081a4629a1e5c4829a8394bcbbb2f999->enter($__internal_ea144d52b3e8be3b3e5537666eaf2ac0081a4629a1e5c4829a8394bcbbb2f999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f41cabca797a4f4481ee93861fd2201da3076d8ced0232d39d8f00ce97d79483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41cabca797a4f4481ee93861fd2201da3076d8ced0232d39d8f00ce97d79483->enter($__internal_f41cabca797a4f4481ee93861fd2201da3076d8ced0232d39d8f00ce97d79483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" />
        <meta name=\"description\" content=\"Reconversion professionnelle dans la banque, formation et recrutement, certification AMF \">
        <meta name=\"keywords\" content=\"Formation certification AMF\">
        <meta name=\"viewport\" content=\"width=device-width,initial=scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Caudex|Roboto+Slab\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/trouverUnTalent.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

    </head>
    <body>

          <!-- <div class=\"backG\"></div> -->
          <header>
              <div id=\"logo-button\">
                  <div>
                      <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                      <img id=\"logo_alardine\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/alardin3d_spin2.gif"), "html", null, true);
        echo "\" alt=\"alardine_logo\"></a>
                  </div>
                  <nav id=\"navigation\">
                      <ul>
                          <li id=\"menu1\" class=\"menu\">
                              <a href=\"nous.php\">Qui Sommmes Nous ?</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu2\" class=\"menu\">
                              <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" id=\"co\">Candidat</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu3\" class=\"menu\">
                              <a href=\"trouver_un_talent.php\">Recrutement</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu4\" class=\"menu\">
                              <a href=\"#\">Actualités</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu4\" class=\"menu\">
                              <a href=\"#\" id=\"addModal\">Contacter-nous</a>
                          </li>
                      </ul>
                  </nav>

                  <section id=\"lien\">
                  <a href=\"https://www.facebook.com/Alardine.recrutement.formation/\" target=\"_blank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
                  <a href=\"https://twitter.com/alardine\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
                  <a href=\"https://www.linkedin.com/company/alardine?\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a>
                  </section>
                  </div>
    </header>
  ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "  </main>
      <footer>
         <section>
              <h3>Nos certifications et labels</h3>
              <figure id=\"certificat\">
                  <div>
                      <img class=\"logo\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/afaq.png"), "html", null, true);
        echo "\">
                      <figcaption>
                          Notre centre de formation est certifié e-AFAQ « Conformité en formation professionnelle », reconnu par le CNEFOP
                      </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/qrcode.png"), "html", null, true);
        echo "\">
                      <figcaption>
                          Vérifier la validité du certificat de notre centre en flashant le QR code </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/icpf.png"), "html", null, true);
        echo "\">
                      <figcaption>
                          L’ICPF &amp; PSI atteste que notre formateur confirmé satisfait aux exigences requises de la formation reconnu par le CNEFOP </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/chartediversite.png"), "html", null, true);
        echo "\">
                      <figcaption>
                          Nous sommes signataire de la charte de la diversité
                      </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" id=\"datadock\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/datadock.png"), "html", null, true);
        echo "\">
                      <figcaption>
                          Alardine Formation est référencé sur la nouvelle plateforme Datadock commune à tous les financeurs
                      </figcaption>
                  </div>
              </figure>
          </section>

          <section id=\"copyright\">
              <p class=\"copyright\">
                  © 2017&nbsp;ALARDINE
              </p>
              <div tabindex=\"0\" title=\"Facebook Like\" aria-label=\"Facebook Like\" class=\"fbl1 copyright\" id=\"comp-iykjpw0p\">
                  <div id=\"comp-iykjpw0pfacebook\" class=\"fbl1facebook\"><iframe frameborder=\"0\" width=\"290\" height=\"40\" scrolling=\"no\" overflow=\"hidden\" allowtransparency=\"true\" title=\"Facebook Like\" aria-label=\"Facebook Like\" id=\"comp-iykjpw0piframe\" class=\"fbl1iframe\" src=\"https://www.facebook.com/plugins/like.php?a=a&amp;action=recommend&amp;colorscheme=light&amp;href=http%3A%2F%2Fwww.alardine.fr&amp;layout=standard&amp;locale=fr_FR&amp;send=false&amp;show_faces=false\" style=\"width: 290px; height: 40px;\"></iframe></div>
              </div>
              <p class=\"copyright\">
                  <a class=\"auto-generated-link\" data-auto-recognition=\"true\" data-content=\"Contact@alardine.fr\" href=\"mailto:Contact@alardine.fr\" data-type=\"mail\">
                      Contact@alardine.fr</a>&nbsp;  | &nbsp;  87-95 rue Louis Ampère Neuilly-sur-Marne
              </p>
          </section>
      </footer>

  <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>


        ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "    </body>
</html>
";
        
        $__internal_ea144d52b3e8be3b3e5537666eaf2ac0081a4629a1e5c4829a8394bcbbb2f999->leave($__internal_ea144d52b3e8be3b3e5537666eaf2ac0081a4629a1e5c4829a8394bcbbb2f999_prof);

        
        $__internal_f41cabca797a4f4481ee93861fd2201da3076d8ced0232d39d8f00ce97d79483->leave($__internal_f41cabca797a4f4481ee93861fd2201da3076d8ced0232d39d8f00ce97d79483_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c57e33e77e739302e34cd8c0f2309830feca02a260645054748a53db057ef3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57e33e77e739302e34cd8c0f2309830feca02a260645054748a53db057ef3c0->enter($__internal_c57e33e77e739302e34cd8c0f2309830feca02a260645054748a53db057ef3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd91a221d66c0643c5fe167751d2f94d6ae786fb98e6372a046052b300134920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd91a221d66c0643c5fe167751d2f94d6ae786fb98e6372a046052b300134920->enter($__internal_bd91a221d66c0643c5fe167751d2f94d6ae786fb98e6372a046052b300134920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alardine | AMF certification Formation Recrutement Digital";
        
        $__internal_bd91a221d66c0643c5fe167751d2f94d6ae786fb98e6372a046052b300134920->leave($__internal_bd91a221d66c0643c5fe167751d2f94d6ae786fb98e6372a046052b300134920_prof);

        
        $__internal_c57e33e77e739302e34cd8c0f2309830feca02a260645054748a53db057ef3c0->leave($__internal_c57e33e77e739302e34cd8c0f2309830feca02a260645054748a53db057ef3c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3239816e8529bc0108ee9a29f73c98209713c383b69866cf192291218517b40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3239816e8529bc0108ee9a29f73c98209713c383b69866cf192291218517b40c->enter($__internal_3239816e8529bc0108ee9a29f73c98209713c383b69866cf192291218517b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ffee252d527a5983e30917cf164f60fd222880ebb1e145b3f20f549498dc415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffee252d527a5983e30917cf164f60fd222880ebb1e145b3f20f549498dc415->enter($__internal_2ffee252d527a5983e30917cf164f60fd222880ebb1e145b3f20f549498dc415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ffee252d527a5983e30917cf164f60fd222880ebb1e145b3f20f549498dc415->leave($__internal_2ffee252d527a5983e30917cf164f60fd222880ebb1e145b3f20f549498dc415_prof);

        
        $__internal_3239816e8529bc0108ee9a29f73c98209713c383b69866cf192291218517b40c->leave($__internal_3239816e8529bc0108ee9a29f73c98209713c383b69866cf192291218517b40c_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4d0b6f1707990059da33f1f22203aa056959ace6c623d6b1044d5411a7e8dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d0b6f1707990059da33f1f22203aa056959ace6c623d6b1044d5411a7e8dfc->enter($__internal_e4d0b6f1707990059da33f1f22203aa056959ace6c623d6b1044d5411a7e8dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d243c184d5f97bdf929475de5118feab3311140b362a9b397d254dc3d1c9c7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d243c184d5f97bdf929475de5118feab3311140b362a9b397d254dc3d1c9c7e7->enter($__internal_d243c184d5f97bdf929475de5118feab3311140b362a9b397d254dc3d1c9c7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d243c184d5f97bdf929475de5118feab3311140b362a9b397d254dc3d1c9c7e7->leave($__internal_d243c184d5f97bdf929475de5118feab3311140b362a9b397d254dc3d1c9c7e7_prof);

        
        $__internal_e4d0b6f1707990059da33f1f22203aa056959ace6c623d6b1044d5411a7e8dfc->leave($__internal_e4d0b6f1707990059da33f1f22203aa056959ace6c623d6b1044d5411a7e8dfc_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24a6ab6b241b0aba3a291f4d97f6b3e5aedfd4c2e38f47cf7430aee0385ff877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a6ab6b241b0aba3a291f4d97f6b3e5aedfd4c2e38f47cf7430aee0385ff877->enter($__internal_24a6ab6b241b0aba3a291f4d97f6b3e5aedfd4c2e38f47cf7430aee0385ff877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ea32bf8fb5d56e23aacc775890a22434c7e8b06c82e9610f07394af37bc990b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea32bf8fb5d56e23aacc775890a22434c7e8b06c82e9610f07394af37bc990b->enter($__internal_8ea32bf8fb5d56e23aacc775890a22434c7e8b06c82e9610f07394af37bc990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8ea32bf8fb5d56e23aacc775890a22434c7e8b06c82e9610f07394af37bc990b->leave($__internal_8ea32bf8fb5d56e23aacc775890a22434c7e8b06c82e9610f07394af37bc990b_prof);

        
        $__internal_24a6ab6b241b0aba3a291f4d97f6b3e5aedfd4c2e38f47cf7430aee0385ff877->leave($__internal_24a6ab6b241b0aba3a291f4d97f6b3e5aedfd4c2e38f47cf7430aee0385ff877_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 121,  253 => 63,  236 => 6,  218 => 5,  206 => 122,  204 => 121,  198 => 118,  194 => 117,  188 => 114,  163 => 92,  154 => 86,  146 => 81,  138 => 76,  129 => 70,  121 => 64,  119 => 63,  89 => 36,  76 => 26,  72 => 25,  60 => 16,  56 => 15,  52 => 14,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Alardine | AMF certification Formation Recrutement Digital{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{asset('img/favicon.png')}}\" />
        <meta name=\"description\" content=\"Reconversion professionnelle dans la banque, formation et recrutement, certification AMF \">
        <meta name=\"keywords\" content=\"Formation certification AMF\">
        <meta name=\"viewport\" content=\"width=device-width,initial=scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Caudex|Roboto+Slab\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/normalize.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/trouverUnTalent.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">

    </head>
    <body>

          <!-- <div class=\"backG\"></div> -->
          <header>
              <div id=\"logo-button\">
                  <div>
                      <a href=\"{{path('homepage')}}\">
                      <img id=\"logo_alardine\" src=\"{{ asset('img/alardin3d_spin2.gif')}}\" alt=\"alardine_logo\"></a>
                  </div>
                  <nav id=\"navigation\">
                      <ul>
                          <li id=\"menu1\" class=\"menu\">
                              <a href=\"nous.php\">Qui Sommmes Nous ?</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu2\" class=\"menu\">
                              <a href=\"{{path('register')}}\" id=\"co\">Candidat</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu3\" class=\"menu\">
                              <a href=\"trouver_un_talent.php\">Recrutement</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu4\" class=\"menu\">
                              <a href=\"#\">Actualités</a>
                          </li>
                      </ul>
                      <ul>
                          <li id=\"menu4\" class=\"menu\">
                              <a href=\"#\" id=\"addModal\">Contacter-nous</a>
                          </li>
                      </ul>
                  </nav>

                  <section id=\"lien\">
                  <a href=\"https://www.facebook.com/Alardine.recrutement.formation/\" target=\"_blank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
                  <a href=\"https://twitter.com/alardine\" target=\"_blank\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a>
                  <a href=\"https://www.linkedin.com/company/alardine?\" target=\"_blank\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a>
                  </section>
                  </div>
    </header>
  {% block body %}{% endblock %}
  </main>
      <footer>
         <section>
              <h3>Nos certifications et labels</h3>
              <figure id=\"certificat\">
                  <div>
                      <img class=\"logo\" src=\"{{ asset('img/afaq.png')}}\">
                      <figcaption>
                          Notre centre de formation est certifié e-AFAQ « Conformité en formation professionnelle », reconnu par le CNEFOP
                      </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"{{ asset('img/qrcode.png')}}\">
                      <figcaption>
                          Vérifier la validité du certificat de notre centre en flashant le QR code </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"{{ asset('img/icpf.png')}}\">
                      <figcaption>
                          L’ICPF &amp; PSI atteste que notre formateur confirmé satisfait aux exigences requises de la formation reconnu par le CNEFOP </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" src=\"{{ asset('img/chartediversite.png')}}\">
                      <figcaption>
                          Nous sommes signataire de la charte de la diversité
                      </figcaption>
                  </div>
                  <div>
                      <img class=\"logo\" id=\"datadock\" src=\"{{ asset('img/datadock.png')}}\">
                      <figcaption>
                          Alardine Formation est référencé sur la nouvelle plateforme Datadock commune à tous les financeurs
                      </figcaption>
                  </div>
              </figure>
          </section>

          <section id=\"copyright\">
              <p class=\"copyright\">
                  © 2017&nbsp;ALARDINE
              </p>
              <div tabindex=\"0\" title=\"Facebook Like\" aria-label=\"Facebook Like\" class=\"fbl1 copyright\" id=\"comp-iykjpw0p\">
                  <div id=\"comp-iykjpw0pfacebook\" class=\"fbl1facebook\"><iframe frameborder=\"0\" width=\"290\" height=\"40\" scrolling=\"no\" overflow=\"hidden\" allowtransparency=\"true\" title=\"Facebook Like\" aria-label=\"Facebook Like\" id=\"comp-iykjpw0piframe\" class=\"fbl1iframe\" src=\"https://www.facebook.com/plugins/like.php?a=a&amp;action=recommend&amp;colorscheme=light&amp;href=http%3A%2F%2Fwww.alardine.fr&amp;layout=standard&amp;locale=fr_FR&amp;send=false&amp;show_faces=false\" style=\"width: 290px; height: 40px;\"></iframe></div>
              </div>
              <p class=\"copyright\">
                  <a class=\"auto-generated-link\" data-auto-recognition=\"true\" data-content=\"Contact@alardine.fr\" href=\"mailto:Contact@alardine.fr\" data-type=\"mail\">
                      Contact@alardine.fr</a>&nbsp;  | &nbsp;  87-95 rue Louis Ampère Neuilly-sur-Marne
              </p>
          </section>
      </footer>

  <script src=\"{{ asset('js/jquery-3.2.1.min.js')}}\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
  <script src=\"{{ asset('js/slide.js')}}\"></script>
  <script src=\"{{ asset('js/script.js')}}\"></script>


        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/alardine/app/Resources/views/base.html.twig");
    }
}
