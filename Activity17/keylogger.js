
// Select the input field and display area
const inputField = document.getElementById('keyLoggerInput');
const displayArea = document.getElementById('loggedKeys');

// Add an event listener to capture key presses - fill in the blanks as needed
inputField.addEventListener('keydown', function(event) {
    // Get the key that was pressed
    const key = event.key;

    // TODO: Update the logged keys display (see below)
});   

// Add an event listener to capture key presses - fill in the blanks as needed
inputField.addEventListener('keydown', function(event) {
    const key = event.key; // Get the pressed key

    // Add the key to the display area
    displayArea.textContent += key + ' '; // Add a space after each key
});
