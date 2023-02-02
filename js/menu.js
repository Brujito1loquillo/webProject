/**
 * MENU
 */

function menu() {
	let menu = document.getElementById("menu");
	
	menu.addEventListener("click", function (e) {
		// console.log($e.target.firstElementChild);
		
		// console.log($e.target.childNodes);
		// $e.target..classList.toggle("visible");
		// $e.target.firstElementChild.classList.toggle("visible");
		
		
		// console.log(e.target.children);
		
		/*
		e.target.children.forEach(function (child) {
			console.log(child);
		});
		*/
		
		for (let child of e.target.children) {
			child.classList.toggle("visible");
		}
		
		// e.target.children.classList.toggle("visible");
		
	});
}