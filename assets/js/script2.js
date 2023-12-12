const titulo = document.getElementById('titulo');
const subtitulo = document.getElementById('subtitulo');
const conteudo = document.getElementById('conteudo');
const img = document.getElementById('imgLink');
const btn1 = document.getElementById('btnAdm');


function calback1(e){
	e.preventDefault();
	let title = titulo.value;
	let subtitle = subtitulo.value;
	let content = conteudo.value;
	let imgLink = img.value;
	const dataPost = {
		titulo:title,
		subtitulo:subtitle,
		conteudo:content,
		linkImg:imgLink
	};
	fetch('../assets/controller/cadastrapost.php',{
		headers: {
            'Content-Type': 'application/json'
		},
		method: "POST",
		body: JSON.stringify(dataPost)
	})
	.then(function(req){
		return req.json();
	})
	.then(function(res){
		console.log(res)
	})
	
}
btn1.addEventListener('click',calback1);

