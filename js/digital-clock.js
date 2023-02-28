let clock = document.querySelector("#clock");
let span = clock.querySelector("span");

function displayTime(e) {
	let date = new Date();
	let hours = date.getHours();
	let minutes = date.getMinutes();
	let seconds = date.getSeconds();

	clock.innerHTML = `
        ${hours <= 9 ? `0` + hours : hours} : 
        ${minutes <= 9 ? `0` + minutes : minutes} : 
        ${seconds <= 9 ? `0` + seconds : seconds}
    `;
}


window.addEventListener("load", () => {
	setInterval(displayTime, 1000);
});

