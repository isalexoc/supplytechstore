// nav toggle - select button and links
const navToggle = document.querySelector("#navToggle")
const nav = document.querySelector("#nav-links")
const body = document.querySelector("body")
const maincontent = document.querySelector("main")

// add event listener
navToggle.addEventListener("click", () => {
    nav.classList.toggle('nav-open')
	body.classList.toggle("no-scroll"); 

	if (nav.classList.contains("nav-open")) {
        nav.scrollTop = 0;
    }
})



// Function to close the menu
function closeMenu() {
    if (nav.classList.contains("nav-open")) {
        nav.classList.remove("nav-open");
        body.classList.remove("no-scroll");
    }
}

// Event listener for clicks on the document
document.addEventListener("click", (event) => {
    // Check if the click is outside both the menu and the navigation toggle button
    if (!nav.contains(event.target) && !navToggle.contains(event.target)) {
        closeMenu();
    }
});

const headdin = document.querySelector('.header');
let prevScrollpos = window.pageYOffset;

		window.addEventListener('scroll', ()=>{
			let currentScrollPos = window.pageYOffset;

			if(prevScrollpos < currentScrollPos){
				headdin.classList.add('hide');
			}else{
				headdin.classList.remove('hide');
			}

			prevScrollpos = currentScrollPos;
		})

const whatsappLink = document.querySelector('#whatsapp-link');

whatsappLink.addEventListener('click', (event) => {
			event.preventDefault(); // Prevent the default behavior
			const url = whatsappLink.href; // Get the link's URL
			const windowFeatures = 'width=800,height=600,menubar=no,toolbar=no,location=no,status=no,resizable=yes,scrollbars=yes';
		
			// Open the popup window with the specified features
			window.open(url, 'whatsappWindow', windowFeatures);
});