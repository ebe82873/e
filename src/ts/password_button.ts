// a tri way state for the password toggle function 
enum PasswordStates {
	toggle,
	show,
	hide,
}

/*
 * a class to manage the state of password viability
 **/
class PasswordButton {
	private passwordButton: HTMLButtonElement
	private passwordVisible: boolean = false
	private inputElements: Array<HTMLInputElement>;

	constructor(id: string) {
		this.passwordButton = this.getPasswordButton(id);

		this.passwordButton.addEventListener('click', () => {
			this.togglePasswords();
		})

		this.inputElements = this.getInputElements();

		console.info(this.inputElements);

		this.togglePasswords(PasswordStates.hide);
	}

	private getPasswordButton(id: string): HTMLButtonElement {
		const passwordButton: HTMLElement | null = document.getElementById('toggle-password-button');

		console.log(passwordButton);
		
		if (!passwordButton) {
			throw new Error(`${id} Not an element`);
		}

		if (!(passwordButton instanceof HTMLButtonElement)) {
			throw new Error(`${id} Not a password element`);
		}

		return passwordButton;
	}

	private getInputElements(): Array<HTMLInputElement> {
		const elements = document.getElementsByTagName('input');
		let passwordElements: Array<HTMLInputElement> = [];

		for (let i = 0; i < elements.length; i++) {
			const element = elements[i];

			if (element.type == 'password') {
				passwordElements.push(element);
			}
		}

		return passwordElements;
	}
		
	/*
		* toggles the viability of all the password elements
		**/
	togglePasswords(state: PasswordStates = PasswordStates.toggle): void {
		// sets the state of the of password visibility
		if (state == PasswordStates.toggle) {
			this.passwordVisible = !this.passwordVisible
		} else if (state == PasswordStates.hide) {
			this.passwordVisible = false;
		} else if (state) {
			this.passwordVisible = true;
		}

		// loops over the password elements
		this.inputElements.forEach((element) => {
			this.togglePassword(element);
		});

		// sets the inner text for the button
		this.passwordButton.innerText = {
			true: 'Hide',
			false: 'Show'
		}[this.passwordVisible.toString()] + ' Password';
	}
	
	/*
	 * toggles the visibility of an input element
	 **/
	private togglePassword(inputElement: HTMLInputElement) {
		if (this.passwordVisible) {
			inputElement.type = 'text'
		} else {
			inputElement.type = 'password'
		}
	}
}

// creates an instance of a password button
const pswBtn = new PasswordButton('toggle-password-button');