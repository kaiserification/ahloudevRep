function select(element) {
	return document.querySelector(element);
}

let success = false;


select('#form').addEventListener('submit', function(e) {
	e.preventDefault();
	let somme = 0;
	let poids = [1,3,1,3,1,3,1,3,1,3,1,3];
	let value = this.querySelector('#code').value.trim();
	let partialCode = value.substr(0, value.length - 1);
	let lastCode = value.charAt(value.length - 1);

	console.log(parseInt(value));

	if(! isNaN(value) ) {
		if(value.length == 13) {
			for(let i = 0 ; i < partialCode.length ; i++) {
				somme += parseInt(partialCode.charAt(i)) * poids[i];
			}

			key = somme % 10 == 0 ? somme % 10 : 10 - somme % 10;

			if(key == 0 || key == lastCode) {
				success = true;
				select('span#error').textContent = "Ce code est bel et bien valide.";
			} else {
				success = false;
				select('span#error').textContent = "Ce code est invalide.";
			}
		} else {
			success = false;
			select('span#error').textContent = "La taille du code n'est pas valide.";
		}

	} else {
		success = false;
		select('span#error').textContent = "Le format du code n'est pas valide.";
	}

	if(success) {
		this.querySelector('div').classList.add('has-success');
	} else {
		this.querySelector('div').classList.add('has-error');
	}
});