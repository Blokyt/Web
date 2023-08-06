const imgmenu1 = document.querySelector('.imgmenu1');
window.addEventListener('scroll', () => {
	if (window.scrollY > 100) {
		imgmenu1.classList.add('scrollmenu');
}
	else{
		imgmenu1.classList.remove('scrollmenu');
	}
});
const imgmenu2 = document.querySelector('.imgmenu2');
window.addEventListener('scroll', () => {
	if (window.scrollY > 100) {
		imgmenu2.classList.add('scrollmenu');
}
	else{
		imgmenu2.classList.remove('scrollmenu');
	}
});

const imgprez1 = document.querySelector('.imgprez1');
window.addEventListener('scroll', () => {
	if (window.scrollY > 100) {
		imgprez1.classList.add('scrollprez');
}
	else{
		imgprez1.classList.remove('scrollprez');
	}
});
const imgprez2 = document.querySelector('.imgprez2');
window.addEventListener('scroll', () => {
	if (window.scrollY > 100) {
		imgprez2.classList.add('scrollprez');
}
	else{
		imgprez2.classList.remove('scrollprez');
	}
});
