/*
 * toggles the viability of all password elements on screen by the given array of ids
 **/
function togglePasswords(ids: Array<string>): void {
    // loops over the ids
    ids.forEach(id => {
        togglePassword(id);
    });
}

function togglePassword(id: string) {
    const inputElement: HTMLElement | null = document.getElementById(id);

    // if a void id pointer
    if (!inputElement) {
        return;
    }

    // if it pointed to a non input element
    if (!(inputElement instanceof HTMLInputElement)) {
        return;
    }

    // checks if the input element is a password or text and toggles accordingly
    if (inputElement.type == 'password') {
        inputElement.type = 'text'
    } else {
        inputElement.type = 'password'
    }
}

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