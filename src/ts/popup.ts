/*
 * toggles the state of the popup by the id given
 * this works by changing the class of the popup
 **/
function togglePopup(id: string): void {
	// selects the element from the DOM by the given id
	const popup: HTMLElement | null = document.getElementById(id);
	
	// if a void id pointer
	if (!popup) {
		console.error(`id: ${id} is not a valid id`);
		return;
	}

	// toggle the class for hidden
	popup.classList.toggle('hidden');
}