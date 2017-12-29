<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_399ffa0e1b97d0370bf55ef49bddfd11f1035122bd711cb4da2f8776792ecdca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399ffa0e1b97d0370bf55ef49bddfd11f1035122bd711cb4da2f8776792ecdca->enter($__internal_399ffa0e1b97d0370bf55ef49bddfd11f1035122bd711cb4da2f8776792ecdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f39f7cad58dab98d4477dbe2ce54690370a5d3f7f0e51c2ec644149991f5c5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39f7cad58dab98d4477dbe2ce54690370a5d3f7f0e51c2ec644149991f5c5a7->enter($__internal_f39f7cad58dab98d4477dbe2ce54690370a5d3f7f0e51c2ec644149991f5c5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399ffa0e1b97d0370bf55ef49bddfd11f1035122bd711cb4da2f8776792ecdca->leave($__internal_399ffa0e1b97d0370bf55ef49bddfd11f1035122bd711cb4da2f8776792ecdca_prof);

        
        $__internal_f39f7cad58dab98d4477dbe2ce54690370a5d3f7f0e51c2ec644149991f5c5a7->leave($__internal_f39f7cad58dab98d4477dbe2ce54690370a5d3f7f0e51c2ec644149991f5c5a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab1fee7cbcb9eb5e4e5e8d43eb0dff6697936ef3fc5a3102f9301c66a31e9a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1fee7cbcb9eb5e4e5e8d43eb0dff6697936ef3fc5a3102f9301c66a31e9a3e->enter($__internal_ab1fee7cbcb9eb5e4e5e8d43eb0dff6697936ef3fc5a3102f9301c66a31e9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97a9cd1bf2674f84432bcd98504ebec4a2caeb1af3884e8b383567ef815409e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a9cd1bf2674f84432bcd98504ebec4a2caeb1af3884e8b383567ef815409e4->enter($__internal_97a9cd1bf2674f84432bcd98504ebec4a2caeb1af3884e8b383567ef815409e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_97a9cd1bf2674f84432bcd98504ebec4a2caeb1af3884e8b383567ef815409e4->leave($__internal_97a9cd1bf2674f84432bcd98504ebec4a2caeb1af3884e8b383567ef815409e4_prof);

        
        $__internal_ab1fee7cbcb9eb5e4e5e8d43eb0dff6697936ef3fc5a3102f9301c66a31e9a3e->leave($__internal_ab1fee7cbcb9eb5e4e5e8d43eb0dff6697936ef3fc5a3102f9301c66a31e9a3e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4b3ad35adba4a7b0a3408593f6c386209b0350dc626d0e205abeb3ac35cd94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b3ad35adba4a7b0a3408593f6c386209b0350dc626d0e205abeb3ac35cd94f->enter($__internal_c4b3ad35adba4a7b0a3408593f6c386209b0350dc626d0e205abeb3ac35cd94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a3ae059f497bce6a5885fbbd69d8f60aab72e468e285aefe9528725f5b511ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3ae059f497bce6a5885fbbd69d8f60aab72e468e285aefe9528725f5b511ab->enter($__internal_2a3ae059f497bce6a5885fbbd69d8f60aab72e468e285aefe9528725f5b511ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2a3ae059f497bce6a5885fbbd69d8f60aab72e468e285aefe9528725f5b511ab->leave($__internal_2a3ae059f497bce6a5885fbbd69d8f60aab72e468e285aefe9528725f5b511ab_prof);

        
        $__internal_c4b3ad35adba4a7b0a3408593f6c386209b0350dc626d0e205abeb3ac35cd94f->leave($__internal_c4b3ad35adba4a7b0a3408593f6c386209b0350dc626d0e205abeb3ac35cd94f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a37471f31f0f85d5515a8a8955058c5ca0762517140d0775cd27b1f2bc943cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37471f31f0f85d5515a8a8955058c5ca0762517140d0775cd27b1f2bc943cfb->enter($__internal_a37471f31f0f85d5515a8a8955058c5ca0762517140d0775cd27b1f2bc943cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbaf92fc002840391cb2518ae1090bef62af5234e2078646dec232785afc417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbaf92fc002840391cb2518ae1090bef62af5234e2078646dec232785afc417e->enter($__internal_cbaf92fc002840391cb2518ae1090bef62af5234e2078646dec232785afc417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cbaf92fc002840391cb2518ae1090bef62af5234e2078646dec232785afc417e->leave($__internal_cbaf92fc002840391cb2518ae1090bef62af5234e2078646dec232785afc417e_prof);

        
        $__internal_a37471f31f0f85d5515a8a8955058c5ca0762517140d0775cd27b1f2bc943cfb->leave($__internal_a37471f31f0f85d5515a8a8955058c5ca0762517140d0775cd27b1f2bc943cfb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/alardine/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
