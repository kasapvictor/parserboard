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

/* registration.html */
class __TwigTemplate_b7d0b89fc6f929ffd5d4be33c727bf4438ef63675b21e38ad180d9449b2295d4 extends \Twig\Template
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
        $this->loadTemplate("partials/head.html", "registration.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.html", "registration.html", 3)->display($context);
        // line 4
        echo "<main class=\"main\">
\t<div class=\"container\">
\t\t<section class=\"wrap-entry\">
\t\t\t<div class=\"wrap-form-user w-form\">
\t\t\t\t<h1 class=\"title-h1\">Parser board</h1>
\t\t\t\t<form id=\"registration-form\" name=\"registration-form\">

\t\t\t\t\t<h2 class=\"title-h2\">Регистрация</h2>

\t\t\t\t\t<label class=\"field-label\" for=\"registration-email\">Email</label>
\t\t\t\t\t<input autofocus=\"true\"
\t\t\t\t\t       class=\"field w-input\"
\t\t\t\t\t       id=\"registration-email\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"email\"
\t\t\t\t\t       placeholder=\"example@example.com\"
\t\t\t\t\t       required=\"required\"
\t\t\t\t\t       type=\"text\">

\t\t\t\t\t<label class=\"field-label\" for=\"registration-password-first\">Пароль</label>
\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t       id=\"registration-password-first\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"registration-password-first\"
\t\t\t\t\t       required=\"required\"
\t\t\t\t\t       type=\"password\">

\t\t\t\t\t<label class=\"field-label\" for=\"registration-password-proof\">Подтверждение пароля</label>
\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t       id=\"registration-password-proof\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"registration-password-proof\"
\t\t\t\t\t       required=\"required\"
\t\t\t\t\t       type=\"password\">

\t\t\t\t\t<input class=\"user-button w-button\"
\t\t\t\t\t       data-wait=\"...\"
\t\t\t\t\t       type=\"submit\"
\t\t\t\t\t       value=\"Отправить\">
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
        // line 55
        $this->loadTemplate("partials/footer.html", "registration.html", 55)->display($context);
    }

    public function getTemplateName()
    {
        return "registration.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 55,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "registration.html", "/home/v/vic4884g/parser-board.ru/public_html/templates/registration.html");
    }
}
