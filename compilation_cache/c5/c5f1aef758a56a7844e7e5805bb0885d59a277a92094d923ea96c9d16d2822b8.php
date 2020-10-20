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

/* password.view.php */
class __TwigTemplate_a51f27c36f7df20efb0006fe22b50451871e241909167573182d02cc889d5e0e extends \Twig\Template
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
        $this->loadTemplate("partials/head.php", "password.view.php", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->loadTemplate("partials/header.php", "password.view.php", 3)->display($context);
        // line 4
        echo "
\t<main class=\"main\">
\t<div class=\"container\">
\t\t<section class=\"wrap-entry\">
\t\t\t<div class=\"wrap-form-user w-form\">
\t\t\t\t<h1 class=\"title-h1\">Parser board</h1>
\t\t\t\t<form id=\"email-form\" name=\"email-form\">
\t\t\t\t\t<h2 class=\"title-h2\">Изменение пароля</h2>

\t\t\t\t\t<label class=\"field-label\"
\t\t\t\t\t       for=\"email\">Email</label>
\t\t\t\t\t<input
\t\t\t\t\t\t\tautofocus=\"true\"
\t\t\t\t\t\t\tclass=\"field w-input\"
\t\t\t\t\t\t\tid=\"email\"
\t\t\t\t\t\t\tmaxlength=\"256\"
\t\t\t\t\t\t\tname=\"email\"
\t\t\t\t\t\t\tplaceholder=\"example@example.com\"
\t\t\t\t\t\t\trequired=\"required\"
\t\t\t\t\t\t\ttype=\"text\">

\t\t\t\t\t<label
\t\t\t\t\t\t\tclass=\"field-label\"
\t\t\t\t\t\t\tfor=\"password-first\">Старый пароль</label>
\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t       id=\"password-first\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"password-first\"
\t\t\t\t\t       required=\"required\"
\t\t\t\t\t       type=\"password\">

\t\t\t\t\t<label
\t\t\t\t\t\t\tclass=\"field-label\"
\t\t\t\t\t\t\tfor=\"required-proof\">Новый пароль</label>
\t\t\t\t\t<input class=\"field w-input\"
\t\t\t\t\t       id=\"required-proof\"
\t\t\t\t\t       maxlength=\"256\"
\t\t\t\t\t       name=\"required-proof\"
\t\t\t\t\t       required=\"required\"
\t\t\t\t\t       type=\"password\">

\t\t\t\t\t<input
\t\t\t\t\t\t\tclass=\"user-button w-button\"
\t\t\t\t\t\t\tdata-wait=\"...\"
\t\t\t\t\t\t\ttype=\"submit\"
\t\t\t\t\t\t\tvalue=\"Сменить пароль\">
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
        // line 62
        $this->loadTemplate("partials/footer.php", "password.view.php", 62)->display($context);
    }

    public function getTemplateName()
    {
        return "password.view.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 62,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "password.view.php", "/home/v/vic4884g/parser-board.ru/public_html/views/password.view.php");
    }
}
