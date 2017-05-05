<?php

/* default/info.html.twig */
class __TwigTemplate_aa1b7d24a5e1b8dc4443bf66e909e6213fef060ba9f7e3f53c9688cb912bfda7 extends Twig_Template
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
        $__internal_4e65d56fae06a734c343e330fa350450f2203f6a067c652092211296df0f2d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e65d56fae06a734c343e330fa350450f2203f6a067c652092211296df0f2d28->enter($__internal_4e65d56fae06a734c343e330fa350450f2203f6a067c652092211296df0f2d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/info.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "getMethod", array(), "method"), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "headers", array()), "get", array(0 => "user-agent"), "method"), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "isSecure", array(), "method"), "html", null, true);
        echo "
";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["request"] ?? $this->getContext($context, "request")));
        echo "
";
        
        $__internal_4e65d56fae06a734c343e330fa350450f2203f6a067c652092211296df0f2d28->leave($__internal_4e65d56fae06a734c343e330fa350450f2203f6a067c652092211296df0f2d28_prof);

    }

    public function getTemplateName()
    {
        return "default/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{request.getMethod()}}
{{request.headers.get('user-agent')}}
{{request.isSecure()}}
{{dump(request)}}
", "default/info.html.twig", "/opt/lampp/htdocs/apka/app/Resources/views/default/info.html.twig");
    }
}
