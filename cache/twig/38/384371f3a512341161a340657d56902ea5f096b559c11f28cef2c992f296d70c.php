<?php

/* category.html.twig */
class __TwigTemplate_3a1b39b74cccd47160bfc0477301032650785f4ec68c0bb78eaed6ec629a0b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "category.html.twig", 1);
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
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/category.css"), "method");
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"block-title\">
  <div class=\"container\">
    <h2 class=\"main-title\"><a href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "\"><i class=\"fa fa-angle-left\"></i></a> ";
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
  </div>
</div>

<div class=\"container\">
  <div class=\"row item\">
    <div class=\"col-md-8\">
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "          <div class=\"row item\">
            <div class=\"col-sm-3 col-xs-12\">
              <a href=\"";
            // line 22
            echo $this->getAttribute($this->getAttribute($context["post"], "header", array()), "site_url", array());
            echo "\" target=\"_blank\">
                <img src=\"";
            // line 23
            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["post"], "media", array()), $this->getAttribute($this->getAttribute($context["post"], "header", array()), "logo", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive logo-site\"/>
              </a>
            </div>
            <div class=\"col-sm-9 col-xs-12\">
              <div class=\"content\">
                <h3 class=\"title\"><a href=\"";
            // line 28
            echo $this->getAttribute($this->getAttribute($context["post"], "header", array()), "site_url", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a></h3>
                <div class=\"description\">";
            // line 29
            echo \Grav\Common\Utils::truncate($this->getAttribute($this->getAttribute($context["post"], "header", array()), "description", array()), 200);
            echo "</div>
                <div class=\"row\">
                  <div class=\"col-xs-8\">
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["post"], "taxonomy", array()), "region", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post_taxonomy"]) {
                // line 33
                echo "                      <span class=\"label label-info\">";
                echo $context["post_taxonomy"];
                echo "</span>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo " ";
                }
                // line 34
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_taxonomy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                  </div>
                  <div class=\"col-xs-4\">
                    <a href=\"";
            // line 37
            echo $this->getAttribute($context["post"], "url", array());
            echo "\" class=\"more\">Read more <i class=\"glyphicon glyphicon-chevron-right\"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
            // line 43
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<hr/>";
            }
            // line 44
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 45,  160 => 44,  156 => 43,  147 => 37,  143 => 35,  129 => 34,  122 => 33,  105 => 32,  99 => 29,  93 => 28,  85 => 23,  81 => 22,  77 => 20,  60 => 19,  48 => 12,  43 => 9,  40 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "category.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\category.html.twig");
    }
}
