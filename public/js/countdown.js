
// var anio, mes, dia, hora, minutos,segundos = 0;
// segundos = 10;
// anio = 2021;
// mes = 10;
// dia = 06;
// hora = 12;
// minutos = 38;

simplyCountdown('#cuenta', {
	
	year: anio, // required
	month: mes, // required
	day: dia, // required
	hours: hora, // Default is 0 [0-23] integer
	minutes: minutos, // Default is 0 [0-59] integer
	seconds: segundos, // Default is 0 [0-59] integer
	words: { //words displayed into the countdown
		days: 'Día',
		hours: 'Hora',
		minutes: 'Minuto',
		seconds: 'Segundo',
		pluralLetter: 's'
	},
	plural: true, //use plurals
	inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
	inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
	// in case of inline set to false
	enableUtc: false, //Use UTC as default
	onEnd: function() {
		// document.getElementById("tex").removeAttribute("hidden");
		// document.getElementById("meet").removeAttribute("hidden");
		// let dd = document.querySelector("#cuenta");
		// dd.addAttribute("hidden");
		if(estado == 1){

			let d = document.querySelector("#tex");
		d.removeAttribute("hidden");
		
		let ds = document.querySelector(".containers") ;
		ds.removeAttribute("hidden");
		

		}else{
		// 	let dd = document.querySelector("#cuenta");
		// dd.removeAttribute("hidden");
			let d = document.querySelector("#tex");
			d.removeAttribute("hidden");
		}
		
		document.getElementById('ou').classList.add('oculta');

		return; 
	}, //Callback on countdown end, put your own function here
	refresh: 1000, // default refresh every 1s
	sectionClass: 'simply-section', //section css class
	amountClass: 'simply-amount', // amount css class
	wordClass: 'simply-word', // word css class
	zeroPad: false,
	countUp: false
});