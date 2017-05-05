<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35d893795fca21e5dfd391d69474f5f3b398293750b5037f70cc4583c60dbb2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1bc8652414ee49ef52b0e5d508f67d185e72e23f16f16222694c4901e2a2af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1bc8652414ee49ef52b0e5d508f67d185e72e23f16f16222694c4901e2a2af9->enter($__internal_e1bc8652414ee49ef52b0e5d508f67d185e72e23f16f16222694c4901e2a2af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1bc8652414ee49ef52b0e5d508f67d185e72e23f16f16222694c4901e2a2af9->leave($__internal_e1bc8652414ee49ef52b0e5d508f67d185e72e23f16f16222694c4901e2a2af9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d17819cb206ca92dedbad9fa469e982e5b38d44a9dc812dd51355461c3af8a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17819cb206ca92dedbad9fa469e982e5b38d44a9dc812dd51355461c3af8a37->enter($__internal_d17819cb206ca92dedbad9fa469e982e5b38d44a9dc812dd51355461c3af8a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d17819cb206ca92dedbad9fa469e982e5b38d44a9dc812dd51355461c3af8a37->leave($__internal_d17819cb206ca92dedbad9fa469e982e5b38d44a9dc812dd51355461c3af8a37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be07e40b4135674f12745239c033fd08d195a0d9e1449ee58d0598faaf007e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be07e40b4135674f12745239c033fd08d195a0d9e1449ee58d0598faaf007e8d->enter($__internal_be07e40b4135674f12745239c033fd08d195a0d9e1449ee58d0598faaf007e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be07e40b4135674f12745239c033fd08d195a0d9e1449ee58d0598faaf007e8d->leave($__internal_be07e40b4135674f12745239c033fd08d195a0d9e1449ee58d0598faaf007e8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2a6f8f12cadbb43f0ee6d81782f0a2977a1feac09c7650b858d77f05c48d48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a6f8f12cadbb43f0ee6d81782f0a2977a1feac09c7650b858d77f05c48d48c->enter($__internal_f2a6f8f12cadbb43f0ee6d81782f0a2977a1feac09c7650b858d77f05c48d48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f2a6f8f12cadbb43f0ee6d81782f0a2977a1feac09c7650b858d77f05c48d48c->leave($__internal_f2a6f8f12cadbb43f0ee6d81782f0a2977a1feac09c7650b858d77f05c48d48c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/apka/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
