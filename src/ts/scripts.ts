/*
 * toggles the viability of all password elements on screen by the given array of ids
 **/
function togglePassword(ids: Array<string>): void {
    // loops over the ids
    ids.forEach(id => {
        const inputElement: HTMLElement | null = document.getElementById(id);

        if (!inputElement) {
            // continues onto the next id if it was a bad id
            return;
        }
        if (!(inputElement instanceof HTMLInputElement)) {
            // continues onto the next id if it pointed to a non input element
            return;
        }
        // checks if the input element is a password or text and toggles accordingly
        if (inputElement.type == 'password') {
            inputElement.type = 'text'
        } else {
            inputElement.type = 'password'
        }
    });
}