<?php require 'partials/head.php'; ?>

    <?php require 'partials/header.php'; ?>

    <main class="main">
        <div class="container">
	        <section class="wrap-entry">
	            <div class="wrap-form-user w-form">
	                <h1 class="title-h1">Parser board</h1>
	                <h2 class="title-h2">Вход</h2>
	                <form id="entry-form" name="entry-form">
	                    <label for="email"
	                           class="field-label">Email</label>
	                    <input type="text"
	                           class="field w-input"
	                           autofocus="true"
	                           maxlength="256"
	                           name="email"
	                           placeholder="example@example.com"
	                           id="email"
	                           required="required">

	                    <label for="password"
	                           class="field-label">Пароль</label>
	                    <input type="password"
	                           class="field w-input"
	                           maxlength="256"
	                           name="password"
	                           id="password"
	                           required="required">

	                    <input type="submit"
	                           value="Войти"
	                           data-wait="..."
	                           class="user-button w-button">

	                    <div class="entry-links">
	                        <a href="#" class="link icon-new-user">Регистрация</a>
	                        <a href="#" class="link icon-question">Забыл пароль?</a>
	                    </div>
	                </form>
	                <div class="w-form-done">
	                    <div>Thank you! Your submission has been received!</div>
	                </div>
	                <div class="w-form-fail">
	                    <div>Oops! Something went wrong while submitting the form.</div>
	                </div>
	            </div>
	        </section>
	    </div>
	</main>

<?php require 'partials/footer.php'; ?>
