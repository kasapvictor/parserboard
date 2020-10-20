<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_a47c3c013aa1a02c8c9bd5636f11f85da9ad10f54efccb08d19e75813a07c761 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("partials/head.php", "index.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "index.html", 3)->display($context);
        // line 4
        echo "
<main class=\"main\">
\t<div class=\"container\">
\t\t<section class=\"wrap-entry\">
\t\t\t<div class=\"wrap-form-user w-form\">
\t\t\t\t<h1 class=\"title-h1\">Parser board</h1>
\t\t\t\t<h2 class=\"title-h2\">Вход</h2>
\t\t\t\t<form id=\"entry-form\" name=\"entry-form\">
\t\t\t\t\t<label for=\"email\"
\t\t\t\t\t       class=\"field-label\">Email</label>
\t\t\t\t\t<input type=\"text\"
\t\t\t\t\t       class=\"field w-input\"
\t\t\t\t\t       autofocus=\"true\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"email\"
\t\t\t\t\t       placeholder=\"example@example.com\"
\t\t\t\t\t       id=\"email\"
\t\t\t\t\t       required=\"required\">

\t\t\t\t\t<label for=\"password\"
\t\t\t\t\t       class=\"field-label\">Пароль</label>
\t\t\t\t\t<input type=\"password\"
\t\t\t\t\t       class=\"field w-input\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"password\"
\t\t\t\t\t       id=\"password\"
\t\t\t\t\t       required=\"required\">

\t\t\t\t\t<input type=\"submit\"
\t\t\t\t\t       value=\"Войти\"
\t\t\t\t\t       data-wait=\"...\"
\t\t\t\t\t       class=\"user-button w-button\">

\t\t\t\t\t<div class=\"entry-links\">
\t\t\t\t\t\t<a href=\"#\" class=\"link icon-new-user\">Регистрация</a>
\t\t\t\t\t\t<a href=\"#\" class=\"link icon-question\">Забыл пароль?</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"w-form-done\">
\t\t\t\t\t<div>Thank you! Your submission has been received!</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"w-form-fail\">
\t\t\t\t\t<div>Oops! Something went wrong while submitting the form.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
</main>

";
        // line 53
        $this->loadTemplate("partials/footer.php", "index.html", 53)->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 53,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/home/v/vic4884g/parser-board.ru/public_html/views/index.html");
    }
}
