const background = document.querySelector("div.background");
const tombol1 = document.querySelector(".maincontent .showcar #tombol1");
const tombol2 = document.querySelector(".maincontent .showcar #tombol2");
const img = document.querySelector(".maincontent .showcar img");
const h1 = document.querySelector(".maincontent h1");
const h2 = document.querySelector(".maincontent h2");
const logo = document.querySelector("nav h1");
const h5 = document.querySelector(".maincontent h5");
const p = document.querySelector(".maincontent p");
let gambar = 1;

tombol1.addEventListener("click", function (e) {
	e.preventDefault();
	if (gambar == 1) {
		h2.innerHTML = "JESKO";
		h5.innerHTML = "KOENIGSEGG";
		img.src = "assets/img/car/koenigsegg.png";

		background.classList.remove("background");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background1");
		gambar = 2;
	} else if (gambar == 2) {
		h2.innerHTML = "FERRARI 488 GTB";
		h5.innerHTML = "FERRARI";
		img.src = "assets/img/car/ferrari.png";

		background.classList.remove("background1");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background2");
		gambar = 3;
	} else {
		h2.innerHTML = "AVENTADOR";
		h5.innerHTML = "LAMBORGHINI";
		img.src = "assets/img/car/aventadorr.png";

		background.classList.remove("background2");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background");
		gambar = 1;
	}
});

tombol2.addEventListener("click", function (e) {
	e.preventDefault();
	if (gambar == 1) {
		h2.innerHTML = "JESKO";
		h5.innerHTML = "KOENIGSEGG";
		img.src = "assets/img/car/koenigsegg.png";

		background.classList.remove("background");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background1");
		gambar = 2;
	} else if (gambar == 2) {
		h2.innerHTML = "FERRARI 488 GTB";
		h5.innerHTML = "FERRARI";
		img.src = "assets/img/car/ferrari.png";

		background.classList.remove("background1");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background2");
		gambar = 3;
	} else {
		h2.innerHTML = "AVENTADOR";
		h5.innerHTML = "LAMBORGHINI";
		img.src = "assets/img/car/aventadorr.png";

		background.classList.remove("background2");
		background.classList.add("fade");

		setTimeout(() => {
			background.classList.remove("fade");
		}, 1000);

		background.classList.add("background");
		gambar = 1;
	}
});

const navbar = document.querySelector("#navbar");

window.addEventListener("scroll", function () {
	if (window.scrollY > 80) {
		navbar.classList.add("nav-floating");
	} else if (window.scrollY < 80) {
		navbar.classList.remove("nav-floating");
	}
});

window.onload = function () {
	h1.classList.add("muncul");
	h2.classList.add("muncul");
	h5.classList.add("muncul");
	p.classList.add("muncul");
	img.classList.add("muncul2");
};

// container 2

const cards = document.querySelectorAll(".container2 .card");
window.addEventListener("scroll", function () {
	if (window.scrollY < 262) {
		for (let i = 0; i < cards.length; i++) {
			cards[i].classList.replace("muncul", "hilang");
		}
	} else if (window.scrollY > 262) {
		for (let i = 0; i < cards.length; i++) {
			cards[i].classList.replace("hilang", "muncul");
		}
	}
});

// sidebar tombol
const tombolBurger = document.querySelector("nav .tombolBurger");
const sidebarTombol = document.querySelector(".side-bar .tombol a");
const sidebar = document.querySelector("nav .side-bar");
sidebarTombol.addEventListener("click", function (e) {
	e.preventDefault();
	sidebar.style.display = "none";
	tombolBurger.style.display = "flex";
});

tombolBurger.addEventListener("click", function (e) {
	e.preventDefault();
	sidebar.style.display = "block";
	tombolBurger.style.display = "none";
});

// window.addEventListener ('scroll',function(){
//   console.log(this.scrollY);
// })

// const carChoice = document.querySelector(".container2 .button-area");
// window.addEventListener("scroll", function () {
//   if (window.scrollY > 106) {
//       carChoice.classList.replace('logo-hilang', 'logo-muncul');
//   } else if (window.scrollY < 106) {
//         carChoice.classList.replace('logo-muncul','logo-hilang');
//     }
// })

const tombolCloseFormRegister = document.querySelector(
	".register-close-button"
);
const formRegister = document.querySelector(".register-session");
tombolCloseFormRegister.addEventListener("click", function () {
	formRegister.style.display = "none";
});

const tombolCloseFormLogin = document.querySelector(".login-close-button");
const formLogin = document.querySelector(".login-session");
tombolCloseFormLogin.addEventListener("click", function () {
	formLogin.style.display = "none";
});

const loginButton = document.querySelector(".navigasi .beda");
loginButton.addEventListener("click", function (e) {
	e.preventDefault();
	formLogin.style.display = "flex";
});

const daftarLinkButton = document.querySelector(
	".contentForm a.keterangan-form-login"
);
daftarLinkButton.addEventListener("click", function (e) {
	e.preventDefault();
	formLogin.style.display = "none";
	formRegister.style.display = "flex";
});

const loginLinkButton = document.querySelector(
	".contentForm a.keterangan-form-register"
);
loginLinkButton.addEventListener("click", function (e) {
	e.preventDefault();
	formLogin.style.display = "flex";
	formRegister.style.display = "none";
});

const loginSidebar = document.querySelector(".list-tombol a.loginSidebar");
loginSidebar.addEventListener("click", function (e) {
	e.preventDefault();
	formLogin.style.display = "flex";
});
