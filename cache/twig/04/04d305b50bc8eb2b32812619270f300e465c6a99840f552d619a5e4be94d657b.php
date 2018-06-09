<?php

/* partials/base.html.twig */
class __TwigTemplate_7ad4f98dd6f97eb805fe7949a120c5b03f21ad6e6a9fb3e2fafa16713292989c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo100.png", true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
    ";
        // line 12
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/stack.min.css"), "method");
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73415751-2', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js\"></script>
    <script type=\"text/javascript\">
        window.cookieconsent_options = {\"message\":\"This website uses cookies to ensure you get the best experience on our website\",\"dismiss\":\"Got it!\",\"learnMore\":\"More info\",\"link\":null,\"theme\":\"light-floating\"};
    </script>
  </head>
  <body>

    <header>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 special-col\">
            <a href=\"";
        // line 49
        echo ($context["base_url_absolute"] ?? null);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo512.png", true);
        echo "\" alt=\"logo\" class=\"logo\"></a>
            <h1><a href=\"";
        // line 50
        echo ($context["base_url_absolute"] ?? null);
        echo "\">Captain<span class=\"font-bold\">Share</span></a></h1>
            <h2>A curated directory of sharing economy resources to make & save money</h2>
          </div>
        </div>
      </div>
      <hr>
    </header>

    ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->loadTemplate("partials/modal.html.twig", "partials/base.html.twig", 65)->display($context);
        // line 66
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    ";
        // line 68
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/stack.min.js"), "method");
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    <script src=\"//load.sumome.com/\" data-sumo-site-id=\"38121637f65347c0aa163a48c245100146982563197abaf1bac751f0009960ca\" async=\"async\"></script>

    <script type=\"text/javascript\">
        window.doorbellOptions = {
            appKey: 'd3ixY9YwIfcMpgQ5SMMEYLoYDyxda3opdlO5n4CkVpkBitEef32GkYFQN11M8XRr'
        };
        (function(d, t) {
            var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://embed.doorbell.io/button/3495?t='+(new Date().getTime());(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g);
        }(document, 'script'));
    </script>

  </body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "    ";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 62)->display($context);
        // line 63
        echo "    ";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  185 => 70,  181 => 63,  178 => 62,  175 => 61,  171 => 59,  168 => 58,  163 => 16,  160 => 15,  140 => 74,  137 => 73,  135 => 70,  132 => 69,  130 => 68,  126 => 66,  124 => 65,  121 => 64,  119 => 61,  116 => 60,  114 => 58,  103 => 50,  97 => 49,  64 => 19,  61 => 18,  59 => 15,  56 => 14,  53 => 13,  51 => 12,  44 => 9,  42 => 8,  34 => 7,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/base.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\partials\\base.html.twig");
    }
}
