function togglePopup(id: string): void {
	const popup: HTMLElement | null = document.getElementById(id);
	
	// if a void id pointer
	if (!popup) {
		console.error(`id: ${id} is not a valid id`);
		return;
	}

	popup.classList.toggle('hidden');
}