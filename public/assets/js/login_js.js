const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');

const adminContainer = document.getElementById('admin-container');
const admin1 = document.getElementById('admin1');
const admin2 = document.getElementById('admin2');
const notAdmin = document.getElementById('notAdmin');

const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

admin1.addEventListener('click', () => {
	adminContainer.classList.remove("admin-container-hidden");
});

admin2.addEventListener('click', () => {
	adminContainer.classList.remove("admin-container-hidden");
});

notAdmin.addEventListener('click', () => {
	adminContainer.classList.add("admin-container-hidden");
});