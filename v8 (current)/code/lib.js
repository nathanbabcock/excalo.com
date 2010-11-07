function toggle(id){
	if(document.getElementById("config_content_"+id).style.display==="block"){
		document.getElementById("config_content_"+id).style.display="none";
		document.getElementById("config_opener_"+id).src="img/plus.png";
	}
	else{
		document.getElementById("config_content_"+id).style.display="block";
		document.getElementById("config_opener_"+id).src="img/minus.png";
	}
}

var W3CDOM = (document.createElement && document.getElementsByTagName);

// For styling file inputs
// http://www.quirksmode.org/dom/inputfile.html
function initFileUploads() {
	if (!W3CDOM) return;
	var fakeFileUpload = document.createElement('div');
	fakeFileUpload.className = 'fakefile';
	var input = document.createElement('input');
	input.className="upload";
	fakeFileUpload.appendChild(input);
	var image = document.createElement('div');
	image.className='button';
	image.innerHTML='<img alt="" src="img/buttons/blue_left.png" class="button_left  button_left_iefix"><a class="button_mid button_blue">Browse</a><img alt="" src="img/buttons/blue_right.png" class="button_right">';
	fakeFileUpload.appendChild(image);
	var x = document.getElementsByTagName('input');
	for (var i=0;i<x.length;i++) {
		if (x[i].type != 'file') continue;
		if (x[i].parentNode.className != 'fileinputs') continue;
		x[i].className = 'file hidden';
		var clone = fakeFileUpload.cloneNode(true);
		x[i].parentNode.appendChild(clone);
		x[i].relatedElement = clone.getElementsByTagName('input')[0];
		x[i].onchange = x[i].onmouseout = function () {
			this.relatedElement.value = this.value;
		}
	}
}