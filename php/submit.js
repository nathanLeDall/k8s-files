
document.addEventListener('DOMContentLoaded', function() {
	var form  = document.getElementsByClassName('form')[0];
	form.addEventListener('submit', function (e){
		e.preventDefault();
		var div = document.getElementsByClassName("processing")[0];
		var div2 = document.getElementsByClassName("error")[0];
		var div3 = document.getElementsByClassName("completed")[0];
		
		div.style.display = 'block';
		
		const formData = new FormData(this);
		const validateEmail = (email) => {
			return String(email)
				.toLowerCase()
				.match(
				/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				);
			};
		if (!validateEmail(formData.get('email'))){
			
			div.style.display = 'none';
			div2.style.display = 'block';
			div3.style.display = 'none';
			setTimeout(function() {
				div.style.display = "none";
				div2.style.display = "none";
				div3.style.display = "none";
			}, 2000);
			return;
		}
		const captchaResponse = grecaptcha.getResponse();


		if (!captchaResponse.length>0)
		{
			div.style.display = 'none';
			div2.style.display = 'block';
			div3.style.display = 'none';
			setTimeout(function() {
				div.style.display = "none";
				div2.style.display = "none";
				div3.style.display = "none";
			}, 2000);
            return;
		}

		fetch('contacted.php',{
			method: 'post',
			body: formData
		}).then(function (response){
            return response.json(); // Parse the response as JSON
        }).then(function (data){
            if (data.error) {
                console.error(data.error); // Log the error message
				div.style.display = 'none';
				div2.style.display = 'block';
				div3.style.display = 'none';
				setTimeout(function() {
					div.style.display = "none";
					div2.style.display = "none";
					div3.style.display = "none";
				}, 2000);
            } else {
                console.log(data); // Log the response data
				div.style.display = 'none';
				div2.style.display = 'none';
				div3.style.display = 'block';
				form.reset();
				setTimeout(function() {
					div.style.display = "none";
					div2.style.display = "none";
					div3.style.display = "none";
				}, 2000);
				
            }
        }).catch(function (error){
            console.error(error);
			div.style.display = 'none';
			div2.style.display = 'block';
			div3.style.display = 'none';
			setTimeout(function() {
				div.style.display = "none";
				div2.style.display = "none";
				div3.style.display = "none";
			}, 2000);
		});
	});
});

document.addEventListener('DOMContentLoaded', function() {
	var form  = document.getElementsByClassName('form-careers')[0];

	form.addEventListener('submit', function (e){
		e.preventDefault();

		const formData = new FormData(this);
		const validateEmail = (email) => {
			return String(email)
				.toLowerCase()
				.match(
				/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				);
			};
		if (!validateEmail(formData.get('email'))){
			alert("invalid email");
			return;
		}

		const captchaResponse = grecaptcha.getResponse();
		var captchaAlert = document.getElementsByClassName('captcha_error')[0];

		if (!captchaResponse.length>0)
		{
			captchaAlert.style.display = 'block';
            return; // Exit the function, preventing further execution
		}

		

		fetch('careersInput.php',{
			method: 'post',
			body: formData
		}).then(function (response){
            return response.json(); // Parse the response as JSON
        }).then(function (data){
            if (data.error) {
                console.error(data.error); // Log the error message
            } else {
                console.log(data); // Log the response data
				form.reset();
            }
        }).catch(function (error){
            console.error(error);
		});
		
	});
});