var currentPage = 0;

function changeColor(obj){
	begin();
	obj.style.color = "#E6E7E8";
}

function begin(){
	var elements, i;
	elements = document.getElementsByClassName("links");
	for(i = 0; i < elements.length; i++){
		elements[i].style.color="white"; 
	}
}