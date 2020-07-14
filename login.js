// SOLANO, Meryll Dayne B.
// ITMC231 Platform Technologies
// BS IT - 2ND YEAR
// Final Requirement
// Honor Code:
// This is my own work and I have not received any unauthorized help in completing this. 
// I have not copied from my classmate, friend, nor any unauthorized resource. 
// I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
//If proven guilty, I won't be credited any points for this endeavor.

// controls the modal for signing up
var modal = document.getElementById("myModal");
var btn = document.getElementById("signup-btn");

btn.onclick = function() {
	modal.style.display = "block";
}
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}