<?php

/* error.html.twig */
class __TwigTemplate_c3a294ce26ba4502f357644813a52ddca4c26abfdb117c6ef02b36d9b3aee26e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/index.css"), "method");
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div id=\"error\">
\t\t\t\t<div>
\t\t\t\t\t<h1>";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h1>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<br><br>

";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  48 => 14,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\error.html.twig");
    }
}
