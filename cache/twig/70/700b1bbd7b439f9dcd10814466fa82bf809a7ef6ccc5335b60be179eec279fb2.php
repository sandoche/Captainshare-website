<?php

/* partials/footer.html.twig */
class __TwigTemplate_a67cab8e6337408d92b7e8cf847695cd666c4f7235568df29ee55101b980f881 extends Twig_Template
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
        // line 1
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row upper-section\">
            <div class=\"col-xs-12 col-sm-3\">
              <div class=\"title\">About</div>
              <div class=\"description\">CaptainShare is a curated directory of sharing economy resources to make & save money</div>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"title\">Navigate</div>
                <ul>
                    <li><a href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/\">Home</a></li>
                    <li><a href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "/about\">About</a></li>
                    <li><a href=\"http://appyfriends.io/team\" target=\"_blank\">Team</a></li>
                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"title\">Updates</div>
                <ul>
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">Get the newsletter</a></li>
                    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "twitter", array())) {
            // line 21
            echo "                      <li><a href=\"http://twitter.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "twitter", array());
            echo "\" target=\"_blank\">Twitter</a></li>
                    ";
        }
        // line 23
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "facebook", array())) {
            // line 24
            echo "                      <li><a href=\"http://facebook.com/";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "facebook", array());
            echo "\" target=\"_blank\">Facebook</a></li>
                    ";
        }
        // line 26
        echo "                    ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "google_plus", array())) {
            // line 27
            echo "                      <li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", array()), "google_plus", array());
            echo "\" target=\"_blank\">Google+</a></li>
                    ";
        }
        // line 29
        echo "                </ul>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <div class=\"title\">Tips</div>
                <ul>
                    <li><a href=\"";
        // line 34
        echo ($context["base_url_absolute"] ?? null);
        echo "/submit\">Submit a new resource</a></li>
                    <li><a href=\"";
        // line 35
        echo ($context["base_url_absolute"] ?? null);
        echo "/report\">Report a dead link</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <section>All content copyright <a href=\"http://appyfriends.io\">Appyfriends</a> &copy; All rights reserved.</section>
                <section class=\"footer-text\">Made with <i class=\"fa fa-heart green\"></i> from <strong>all around the world</strong></section>
            </div>
          </div>
       </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  79 => 34,  72 => 29,  66 => 27,  63 => 26,  57 => 24,  54 => 23,  48 => 21,  46 => 20,  35 => 12,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/footer.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\partials\\footer.html.twig");
    }
}
