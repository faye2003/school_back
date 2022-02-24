$(function () {
	$("#contactForm input,#contactForm textarea,#contactForm button").jqBoostrapValidation({
		preventSubmit:true,
		SubmitError: function($form, event,  errors){
			// ici mon message ou evenement
		},
		SubmitSuccess: function ($form, event) {
			event.preventDefault();
			// récupérer les information depuis mon formulaire
			var name = $("input#name").val();
			var email = $("input#email").val();
			var phone = $("input#phone")val();
			var message = $("textarea#message").val();
			var userName = name;
			// autoriser la saisi des espaces dans le nom de l'utilisateur
			if (userName.indexOf(" ") >= 0) {
				userName = name.split(" ").slice(0, -1).join(" ");
			}
			$reqUser = $("#btnEnvoi");
			$reqUser.prop("disabled", true); //Désactiver le button submit pour empêcher de dupliquer le message
			$.ajax({
				url: "mail/contact.php",
				type: "POST",
				data: {
					name : name,
					email : email,
					phone : phone,
					message : message
				},
				cache : false,
				suucess: function () {
					// Message de success
					$("#success").html("<div class='alert alert-success'>");
					$("#success > .alert-success")
						.html(
							"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
						).append("</button>");
					$("#success > .alert-success").append("<strong>Votre message a été envoyé avec succès !</strong>");
					$("#success > .alert-success").append("</div>");
					// vider les champs
					$("#contactForm").trigger("reset");
				},

				// erreurs
				error: function () {
					// evoies echoués
					$("#success").html("<div class='alert alert-danger");
					$("#success > .alert-danger")
						.html(
							"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
						).append("</button>");
					$("#success > .alert-danger").append(
						$("<strong>").text(
							"Désolé " + userName + ", le serveur ne répond pas, Réessayer plutard !"
						)
					);

					$("#success > alert-danger").append("</div>");

					// vider tous les champs
					$("#contactForm").trigger("reset");
				},

				complete: function () {
					setTimeout(function() {
						$reqUser.prop("disabled", false);
					}, 1000);
				}
			});
		},

		filter: function () {
			return $(this).is(":visible");
		}
	});

	$("a[data-toggle='tab']").click(function (e) {
		e.preventDefault();
		$(this).tab("show");
	});
});

$("#name").focus(function () {
	$("#success").html("");
});