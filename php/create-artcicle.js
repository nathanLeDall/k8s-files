var bottmCon;
var last_node;
document.addEventListener('DOMContentLoaded', function() {
	bottmCon = document.getElementsByClassName('bottom_con')[0];
});
function addText(){
	var textarea = document.createElement("textarea");

	// Set attributes and styles for the textarea
	textarea.style.minHeight = "100px";
	textarea.style.width = "100%";
	textarea.style.resize = "none";
	textarea.id= 'top_con_text';
	// Add an event listener for input events
	textarea.addEventListener("input", function() {
		this.style.height = "auto";
		this.style.height = (this.scrollHeight) + "px";
	});
	last_node = textarea;
	bottmCon.appendChild(textarea);
}

function addImg(){
	var img = document.createElement("img");
	img.id = 'img';
	img.src = '../Archive/temp-pic.jpeg';
	last_node = img;
	bottmCon.appendChild(img);
	listen();
	
	document.getElementById('fileInput').click();
}



function addTitle(){
	var textarea = document.createElement("textarea");

	// Set attributes and styles for the textarea
	textarea.style.minHeight = "100px";
	textarea.style.width = "100%";
	textarea.style.resize = "none";
	textarea.id= 'top_con_title';
	// Add an event listener for input events
	textarea.addEventListener("input", function() {
		this.style.height = "auto";
		this.style.height = (this.scrollHeight) + "px";
	});
	last_node = textarea;
	bottmCon.appendChild(textarea);
}


function listen(){
	document.getElementById('fileInput').addEventListener('change', function() {
	var file = this.files[0];
	if (file) {
		var reader = new FileReader();
		reader.onload = function() {
			var img = new Image();
			img.src = reader.result;
			img.id = "img";
			last_node = img;
			bottmCon.lastChild.replaceWith(img);

		}
		reader.readAsDataURL(file);
	}
});}

function removeLast(){
	const lastChild = bottmCon.lastChild;

	// Check if there is a last child and remove it if it exists
	if (lastChild) {
		
		bottmCon.removeChild(lastChild);
	}
}

function addBullet(){
	var textarea = document.createElement("textarea");

	// Set attributes and styles for the textarea
	textarea.style.minHeight = "100px";
	textarea.style.width = "100%";
	textarea.style.resize = "none";
	textarea.id= 'top_con_bullet';
	// Add an event listener for input events
	textarea.addEventListener("input", function() {
		this.style.height = "auto";
		this.style.height = (this.scrollHeight) + "px";
	});
	last_node = textarea;
	bottmCon.appendChild(textarea);
}