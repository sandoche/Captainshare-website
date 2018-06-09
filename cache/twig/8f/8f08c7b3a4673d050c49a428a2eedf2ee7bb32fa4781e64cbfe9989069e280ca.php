<?php

/* partials/modal.html.twig */
class __TwigTemplate_ed7c3ac4a029954b8d724c951c08cbb4759fcd2151927b9fcfe77e07a585606d extends Twig_Template
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
        echo "<!-- Modal -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Get the newsletter</h4>
      </div>
      <div class=\"modal-body\">
        <p>Sign up for the newsletter and get updates about new sharing economy resources.</p>

        <!-- Begin MailChimp Signup Form -->
        <div id=\"mc_embed_signup\">
        <form action=\"//captainshare.us13.list-manage.com/subscribe/post?u=4e037a9ed1c0e643489ab9e0e&amp;id=0280cc2c70\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
            <div id=\"mc_embed_signup_scroll\">
          
          <div id=\"mce-responses\" class=\"clear\">
            <div class=\"response\" id=\"mce-error-response\" style=\"display:none\"></div>
            <div class=\"response\" id=\"mce-success-response\" style=\"display:none\"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\"><input type=\"text\" name=\"b_4e037a9ed1c0e643489ab9e0e_0280cc2c70\" tabindex=\"-1\" value=\"\"></div>
            </div>

          <div class=\"input-group\">
            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"required email form-control\" id=\"mce-EMAIL\" placeholder=\"Email address\">
            <span class=\"input-group-btn\">
              <input type=\"submit\" value=\"Subscribe\" name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button btn btn-default\"></div>
            </span>
          </div><!-- /input-group -->



        </form>
        </div>

        <!--End mc_embed_signup-->

      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/modal.html.twig", "C:\\Users\\Sandoche\\Desktop\\grav\\user\\themes\\stack\\templates\\partials\\modal.html.twig");
    }
}
