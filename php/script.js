function showDiv(div_in) {
	var div = document.getElementsByClassName(div_in)[0];
	
	div.style.display = "block";
    div.classList.add("fadeIn");
	if (div_in == 'industries'){
		hideDiv('programs');
		hideDiv('insights_head');
	}
	else if (div_in == 'programs'){
		hideDiv('industries');
		hideDiv('insights_head');
	}
	else{
		hideDiv('industries');
		hideDiv('programs');
	}
}
function hideBoth(){
	hideDiv('programs');
	hideDiv('industries');
	hideDiv('insights_head');
}
function hideDiv(div_in) {
	document.getElementsByClassName(div_in)[0].style.display = 'none';
}
window.addEventListener( "unload", function() {
	hideDiv('industries');
	hideDiv('programs');
} );

function myFunction() {
	alert('The div was clicked!');
	// Add your desired functionality here
}
burg_curr = 0;
latest_id = null;
function show_burg_buttons(){
	var div = document.getElementsByClassName('hamburg_buttons_con')[0];
	var div2 = document.getElementsByClassName('hamburger_buttons')[0];
	var div3 = document.getElementsByClassName('burg_bar1')[0];
	var div4 = document.getElementsByClassName('burg_bar2')[0];
	var div5 = document.getElementsByClassName('burg_bar3')[0];
	if (burg_curr == 0){
		//turn into x
		div.style.display = "flex";
		div2.style.display = "block";
		div3.style.cssText = "width: 67.26px;top:0;margin-top: 0;padding-top: 0;transform-origin: left;transform: rotate(42deg); animation: rotateAnimationTopIn 0.5s;";
		div4.style.cssText = "opacity: 0;";
		div5.style.cssText = "width: 67.26px; margin-top: 20px;padding-bottom: 0;transform-origin: left;transform: rotate(-42deg); animation: rotateAnimationBottomIn 0.5s;";
		burg_curr=1;
	}else if (burg_curr ==1){
		//turn into hamburger
		div.style.animation = "slideRight 0.25s ease-in-out forwards";
		div2.style.animation = "slideRight 0.25s ease-in-out forwards";
		setTimeout(function() {
			div.style.display = "none";
			div2.style.display = "none";
			div.style.animation = "slideLeft 0.25s ease-in-out forwards";
		div2.style.animation = "slideLeft 0.25s ease-in-out forwards";
		}, 250);
		
		div3.style.cssText = "width: 100%; height: 2px; background-color: black; animation: rotateAnimationTopOut 0.5s;";
		div4.style.cssText = "width: 100%; height: 2px; background-color: black; margin-top: 20px; animation: fadeInAnimation 0.5s forwards;";
		div5.style.cssText = "width: 100%; height: 2px; background-color: black; margin-top: 20px; animation: rotateAnimationBottomOut 0.5s;";
		burg_curr=0;
	}else if (burg_curr ==3){
		div3.style.cssText = "width: 67.26px;top:0;margin-top: 0;padding-top: 0;transform-origin: left;transform: rotate(42deg); animation: rotateAnimationTopIn 0.5s;";
		div4.style.cssText = "opacity: 0;";
		div5.style.cssText = "width: 67.26px; margin-top: 20px;padding-bottom: 0;transform-origin: left;transform: rotate(-42deg); animation: rotateAnimationBottomIn 0.5s;";
		var div = document.getElementsByClassName(latest_id+"_div")[0];
		var div2 = document.getElementsByClassName('burg_sub_header_container')[0];
		div.style.animation = "slideRight 0.25s ease-in-out forwards";
		div2.style.animation = "slideRight 0.25s ease-in-out forwards";
		setTimeout(function() {
			div.style.display = "none";
			div2.style.display = "none";
			div.style.animation = "slideLeft 0.25s ease-in-out forwards";
		div2.style.animation = "slideLeft 0.25s ease-in-out forwards";
		}, 250);
		burg_curr=1;
	}
}
function show_burg_buttn(id){
	var buttn = document.getElementById(id);
	var div = document.getElementsByClassName(id+"_div")[0];
	var div2 = document.getElementsByClassName('burg_sub_header_container')[0];
	var div3 = document.getElementsByClassName('burg_bar1')[0];
	var div4 = document.getElementsByClassName('burg_bar2')[0];
	var div5 = document.getElementsByClassName('burg_bar3')[0];
	div3.style.cssText = "width: 34.82px;margin-top:22.5px;margin-bottom:-22.5px;transform-origin: left;transform: rotate(23deg); animation: rotateAnimationTopIn2 0.5s;";
	div4.style.cssText = "margin-bottom:-22.5px; animation: fadeInAnimation 0.5s;";
	div5.style.cssText = "width: 34.82px; transform-origin: left;transform: rotate(-23deg); animation: rotateAnimationBottomIn2 0.5s;";
	div.style.display = "flex";
	div2.style.display = "block";
	burg_curr=3;
	latest_id= id;
}
/*document.addEventListener("DOMContentLoaded", function(event) { 
	var scrollpos = localStorage.getItem('scrollpos');
	var div = document.getElementsByClassName('main_website_container')[0];
	if (scrollpos) div.scrollTop =scrollpos;
});

window.onbeforeunload = function(e) {
	var div = document.getElementsByClassName('main_website_container')[0];
	localStorage.setItem('scrollpos', div.scrollTop);
};
window.addEventListener("beforeunload", function() {
	var div = document.getElementsByClassName('main_website_container')[0];
	localStorage.setItem('scrollpos', div.scrollTop);
	
});*/

function redirect(url){
	window.location.href = url;
}


function isTextOverflowed(element) {
    return element.offsetHeight >= 187;
}

function resize() {
    const editableDivs = document.querySelectorAll('.article');
    editableDivs.forEach((div, index) => {
        const element = div.querySelector('h1');
        
        // Check for overflow before starting the loop
        if (!isTextOverflowed(element)) {
            return; // No need to resize, text doesn't overflow
        }
        
        while (true) {
		
            const oldFont = parseFloat(getComputedStyle(element).fontSize);
            const newFontSize = oldFont - 1;
            element.style.fontSize = `${newFontSize}px`;
            console.log(element.style.fontSize);
			//alert(element.offsetHeight);
            // Check for overflow after font size adjustment
            if (!isTextOverflowed(element) || newFontSize < 10) {
                break; // Break the loop if no overflow or font size is too small
            }
            
            
        }
		
    });
}



document.addEventListener('DOMContentLoaded', function() {
	const specificElement = document.getElementsByClassName("articles")[0];
	specificElement.addEventListener('load', resize());
});

document.addEventListener('DOMContentLoaded', function() {
	//setInterval(changeBackground, 5000); // Change background every 5 seconds
	changeImage();
	setInterval(changeImage, 5000);
    var link = document.createElement('link');
    link.rel = 'icon';
    link.href = '../Archive/Logos/Bird Nexlanding.png';
    document.head.appendChild(link);
});

/*function scroll(){
	var div = document.getElementsByClassName('main_website_container')[0];
	div.scrollTop = div.scrollTop+1;
}*/

function scroll(){
	scrollpos='1000px';
	var div = document.getElementsByClassName('main_website_container')[0];
	div.scrollTop =scrollpos;
}

function onClick(e) {
	e.preventDefault();
	grecaptcha.enterprise.ready(async () => {
	  const token = await grecaptcha.enterprise.execute('6Le7JwkoAAAAAI_ZayRRFFVrtEtJ4o7w_kNugbHd', {action: 'LOGIN'});
	  // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
	  // reCAPTCHA Enterprise to the end user's browser.
	  // This token must be validated by creating an assessment.
	  // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
	});
}

const backgrounds = [
    'url("../archive/Toronto2.png")', // Add your image URLs here
    'url("../archive/Miami.jpg")',
    'url("../archive/Paris.jpg")'
];

let index = 0;

function changeBackground() {
    const div = document.getElementsByClassName('p3_r1c1')[0];
    div.style.background = backgrounds[index];
	div.style.backgroundSize = 'cover';
	if (index==1){
		div.style.backgroundPosition = 'right';
	}
    index = (index + 1) % backgrounds.length;
}

//setInterval(changeBackground, 5000); // Change background every 5 seconds


let images = [
	'../archive/Toronto2.png',  /* Add more image URLs as needed */
	'../archive/Miami.jpg',
	'../archive/Paris.jpg'
];
let currentImageIndex = 0;

function changeImage() {
	currentImageIndex = (currentImageIndex + 1) % images.length;
	const imageContainers = document.querySelectorAll('.background-image');
  
	imageContainers.forEach((container, index) => {
	  const backgroundImage = `url('${images[(currentImageIndex + index) % images.length]}')`;
	  container.style.backgroundImage = backgroundImage;
	});
	
	const oldImage = document.querySelector('.background-image.old');
	const newImage = document.querySelector('.background-image.new');
	
	oldImage.style.transform = 'translateX(-100%)';
	newImage.style.transform = 'translateX(0)';
	
	oldImage.classList.remove('old');
	oldImage.classList.add('new');
	
	newImage.classList.remove('new');
	newImage.classList.add('old');
}
  