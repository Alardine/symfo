<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_bbb2b13d30c5dbb109abbc5e0c1a236037b820374946f94f71fbb167baec9e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3f080a0f272172303b0b5f9f0e8240155f4bbf3202d8c824c0bb51644d2ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3f080a0f272172303b0b5f9f0e8240155f4bbf3202d8c824c0bb51644d2ae4->enter($__internal_6e3f080a0f272172303b0b5f9f0e8240155f4bbf3202d8c824c0bb51644d2ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_11b2a2931b9c7fc765e7b53bfa5db4f1ef927ef53459669d388cfc8690ce7cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b2a2931b9c7fc765e7b53bfa5db4f1ef927ef53459669d388cfc8690ce7cfc->enter($__internal_11b2a2931b9c7fc765e7b53bfa5db4f1ef927ef53459669d388cfc8690ce7cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6e3f080a0f272172303b0b5f9f0e8240155f4bbf3202d8c824c0bb51644d2ae4->leave($__internal_6e3f080a0f272172303b0b5f9f0e8240155f4bbf3202d8c824c0bb51644d2ae4_prof);

        
        $__internal_11b2a2931b9c7fc765e7b53bfa5db4f1ef927ef53459669d388cfc8690ce7cfc->leave($__internal_11b2a2931b9c7fc765e7b53bfa5db4f1ef927ef53459669d388cfc8690ce7cfc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 7,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
      
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/var/www/html/alardine/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
