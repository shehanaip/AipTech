// Testimonials data
const testimonials = [
	{
	  name: "Sehan",
	  image: "images/trust_1.png",
	  text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.",
	},
	// Add more testimonials as needed
	{
	  name: "aip",
	  image: "images/trust_2.png", // Update the image path
	  text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.",
	},
  ];
  
  // Current testimonial index
  let currentTestimonialIndex = 0;
  
  // Function to update the testimonial content with animation
  function updateTestimonialWithAnimation() {
	const testimonial = testimonials[currentTestimonialIndex];
	const imageElement = document.getElementById("testimonialImage");
	const nameElement = document.getElementById("testimonialName");
	const textElement = document.getElementById("testimonialText");
  
	// Add 'loaded' class to trigger the transition
	imageElement.classList.remove("loaded");
	nameElement.classList.remove("loaded");
	textElement.classList.remove("loaded");
  
	setTimeout(() => {
	  imageElement.src = testimonial.image;
	  nameElement.innerText = testimonial.name;
	  textElement.innerHTML = testimonial.text;
  
	  // Add 'loaded' class to trigger the opacity change
	  imageElement.classList.add("loaded");
	  nameElement.classList.add("loaded");
	  textElement.classList.add("loaded");
	}, 200); // Adjust the timeout based on your transition duration
  }
  
  // Function to show the previous testimonial with animation
  function prevTestimonialWithAnimation(event) {
	event.preventDefault();
	currentTestimonialIndex = (currentTestimonialIndex - 1 + testimonials.length) % testimonials.length;
	updateTestimonialWithAnimation();
  }
  
  // Function to show the next testimonial with animation
  function nextTestimonialWithAnimation(event) {
	event.preventDefault();
	const imageElement = document.getElementById("testimonialImage");
	const nameElement = document.getElementById("testimonialName");
	const textElement = document.getElementById("testimonialText");
  
	// Add 'fade-out' class to trigger the fade-out effect
	imageElement.classList.add("fade-out");
	nameElement.classList.add("fade-out");
	textElement.classList.add("fade-out");
  
	setTimeout(() => {
	  currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
	  updateTestimonialWithAnimation();
  
	  // Remove 'fade-out' class to trigger the fade-in effect
	  imageElement.classList.remove("fade-out");
	  nameElement.classList.remove("fade-out");
	  textElement.classList.remove("fade-out");
	}, 2000); // Adjust the timeout based on your transition duration
  }
  
  // Attach event listeners to buttons
  document.getElementById("prevBtn").addEventListener("click", prevTestimonialWithAnimation);
  document.getElementById("nextBtn").addEventListener("click", nextTestimonialWithAnimation);
  
  // Initial testimonial display with animation
  updateTestimonialWithAnimation();
//   progress bar


function increase() {
    
    let SPEED = 40;
    // Retrieve the percentage value
    let limit = parseInt(document.getElementById("value1").innerHTML, 10);

    for(let i = 0; i <= limit; i++) {
        setTimeout(function () {
            document.getElementById("value1").innerHTML = i + "%";
        }, SPEED * i);
    }
}

increase();

// nav bar

function openNav() {
	document.getElementById("mySidebar").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
	document.getElementById("menuButton").style.display = "none"; 
	document.getElementById("carouselExampleIndicators").classList.add("pushed-aside");
}

function closeNav() {
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
	document.getElementById("menuButton").style.display = "block";
	document.getElementById("carouselExampleIndicators").classList.remove("pushed-aside");
}
// for loader
// var loader = document.getElementById("preloader");
// window.addEventListener("load", function(){
// 	loader.style.display="none";
// })