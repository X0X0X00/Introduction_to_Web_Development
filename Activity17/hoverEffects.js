
// Select the image and the description text - fill in the blanks as needed
const image = document.getElementById('hoverImage');
const description = document.getElementById('descriptionText');

// Add event listeners for mouse hover effects - fill in the blanks as needed
image.addEventListener('mouseover', applyHoverEffect);
image.addEventListener('mouseout', resetHoverEffect);

// TODO: Define the applyHoverEffect and resetHoverEffect functions (see below)
 
// Function to apply the hover effect
function applyHoverEffect() {
    image.style.transform = 'scale(1.2)';
    image.style.opacity = '0.8';
    description.textContent = "You're hovering over the image!";
}

// Function to reset the hover effect
function resetHoverEffect() {
    image.style.transform = 'scale(1)';
    image.style.opacity = '1';
    description.textContent = 'This is a sample image. Hover to see what happens!';
}