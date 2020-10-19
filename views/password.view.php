<?php require 'partials/head.php'; ?>

<?php require 'partials/header.php'; ?>

	<main class="main">
	<div class="container">
		<section class="wrap-entry">
			<div class="wrap-form-user w-form">
				<h1 class="title-h1">Parser board</h1>
				<form id="email-form" name="email-form">
					<h2 class="title-h2">Изменение пароля</h2>

					<label class="field-label"
					       for="email">Email</label>
					<input
							autofocus="true"
							class="field w-input"
							id="email"
							maxlength="256"
							name="email"
							placeholder="example@example.com"
							required="required"
							type="text">

					<label
							class="field-label"
							for="password-first">Старый пароль</label>
					<input class="field w-input"
					       id="password-first"
					       maxlength="256"
					       name="password-first"
					       required="required"
					       type="password">

					<label
							class="field-label"
							for="required-proof">Новый пароль</label>
					<input class="field w-input"
					       id="required-proof"
					       maxlength="256"
					       name="required-proof"
					       required="required"
					       type="password">

					<input
							class="user-button w-button"
							data-wait="..."
							type="submit"
							value="Сменить пароль">
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
