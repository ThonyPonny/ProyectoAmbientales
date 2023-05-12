const formulario = document.getElementById('formulario');
const resultado = document.getElementById('resultado');

formulario.addEventListener('submit', function (e) {
	e.preventDefault();

	const respuestas = ['b', 'a', 'c', 'c', 'b', 'a', 'a', 'b', 'a', 'c'];
	let buenas = 0;
	let malas = 0;

	for (let i = 1; i <= respuestas.length; i++) {
		const respuesta = formulario[`pregunta${i}`].value;

		if (respuesta === respuestas[i - 1]) {
			buenas++;
		} else {
			malas++;
		}
	}

	resultado.innerHTML = `Buenas: ${buenas} - Malas: ${malas}`;
	// Crear un objeto XMLHttpRequest
	const xhr = new XMLHttpRequest();

	// Configurar la petición HTTP
	xhr.open('POST', 'registro.php');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

	// Enviar los datos al servidor
	xhr.send(`buenas=${buenas}&malas=${malas}`);

	// Manejar la respuesta del servidor
	xhr.onload = function () {
		if (xhr.status === 200) {
			alert(xhr.responseText);
		} else {
			alert('Ha ocurrido un error');
		}
	};
});
