<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style_index.css">
	<title></title>
</head>
<body>

	<div class="container">
		<span class="header">Đăng nhập rồi mới vào được!</span	>
		<div class="form">
			<div class="form-usrn">
				<label for="username">Username</label>
				<input type="text" id="username" spellcheck="false">
			</div>
			<div class="form-pwd">
				<label for="password">Password</label>
				<input type="password" id="password">
			</div>
			<button type="submit" id="btn-submit">Login</button>

			<ul id="form-messages" style="list-style-type:none;padding:0;font-size:16px;line-height:20px;"></ul>
		</div>
	</div>
	<script>
		const form = {
			username: document.getElementById('username'),
			password: document.getElementById('password'),
			submit: document.getElementById('btn-submit'),
			messages: document.getElementById('form-messages')
		}

		form.submit.addEventListener('click', () => {
            const request = new XMLHttpRequest();

            request.onload = () => {
                let responseObject = null;

                try {
                    responseObject = JSON.parse(request.responseText);
                } catch (e) {
                    console.error('Could not parse JSON!');
                }

                if (responseObject) {
                    handleResponse(responseObject);
                }
            };

            const requestData = `username=${form.username.value}&password=${form.password.value}`;

            request.open('post', 'check_login.php');
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.send(requestData);
        });

        function handleResponse (responseObject) {
            if (responseObject.ok) {
                location.href = 'form_insert.php';
            } else {
                while (form.messages.firstChild) {
                    form.messages.removeChild(form.messages.firstChild);
                }

                responseObject.messages.forEach((message) => {
                    const li = document.createElement('li');
                    li.textContent = message;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = "block";
            }
        }
	</script>
</body>
</html>