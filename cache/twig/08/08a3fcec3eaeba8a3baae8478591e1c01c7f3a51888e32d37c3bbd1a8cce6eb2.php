<?php

/* index.html.twig */
class __TwigTemplate_387799ab9a14068bed10f752faff08c0f30984324083000ece1bb1109a863617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "index.html.twig", 1);
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
        echo "<section class=\"container home\">
  <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 11
            echo "        ";
            if (($this->getAttribute($context["page"], "active", array()) != 1)) {
                // line 12
                echo "        <div class=\"col-md-3 col-sm-4 col-xs-6\">
          <a href=\"";
                // line 13
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"category\">
              ";
                // line 14
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 15
                echo "              ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
          </a>
        </div>
        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </div>
</section>

<section class=\"container\">
  <div class=\"row\">
    <div class=\"col-xs-12\">
      <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
      <!-- CaptainShare -->
      <ins class=\"adsbygoogle\"
           style=\"display:block\"
           data-ad-client=\"ca-pub-7670795591258645\"
           data-ad-slot=\"5801582417\"
           data-ad-format=\"auto\"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <br>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  72 => 19,  64 => 15,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\index.html.twig");
    }
}
