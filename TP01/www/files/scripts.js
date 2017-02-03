var currentPage = 0;

function changeColor(obj){
	begin();
	obj.style.color = "#B05D60";
}

function begin(){
	var elements, i;
	elements = document.getElementsByClassName("links");
	for(i = 0; i < elements.length; i++){
		elements[i].style.color="black"; 
	}
}
