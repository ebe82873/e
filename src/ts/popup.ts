function togglePopup(id: string): void {
	const popup: HTMLElement | null = document.getElementById(id);
	
	// if a void id pointer
	if (!popup) {
		return;
	}
	
	// if it is not a popup
	if (popup.classList.contains('popup')) {
		return;
	}
	
	popup.hidden = !popup.hidden;
}