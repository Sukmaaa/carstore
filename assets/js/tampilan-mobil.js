const liMesin = document.querySelector("li.mesin");
const spekMesin = document.querySelector(".spek.mesin");

liMesin.addEventListener("mouseenter", function () {
	spekMesin.style.display = "flex";
});

liMesin.addEventListener("mouseleave", function () {
	spekMesin.style.display = "none";
});

const litransmisi = document.querySelector("li.transmisi");
const spektransmisi = document.querySelector(".spek.transmisi");

litransmisi.addEventListener("mouseenter", function () {
	spektransmisi.style.display = "flex";
});

litransmisi.addEventListener("mouseleave", function () {
	spektransmisi.style.display = "none";
});

const libensin = document.querySelector("li.bensin");
const spekbensin = document.querySelector(".spek.bensin");

libensin.addEventListener("mouseenter", function () {
	spekbensin.style.display = "flex";
});

libensin.addEventListener("mouseleave", function () {
	spekbensin.style.display = "none";
});

const likecepatan = document.querySelector("li.kecepatan");
const spekkecepatan = document.querySelector(".spek.kecepatan");

likecepatan.addEventListener("mouseenter", function () {
	spekkecepatan.style.display = "flex";
});

likecepatan.addEventListener("mouseleave", function () {
	spekkecepatan.style.display = "none";
});

const tombolCloseSamping = document.querySelector(".tombolClose a");
const sidebar = document.querySelector(".tombolSamping");
const tombolBurger = document.querySelector(".tombolBurger a");

tombolCloseSamping.addEventListener("click", function (e) {
	e.preventDefault();
	sidebar.style.display = "none";
	tombolBurger.style.display = "flex";
});

tombolBurger.addEventListener("click", function (e) {
	tombolBurger.style.display = "none";
	e.preventDefault();
	sidebar.style.display = "block";
});
