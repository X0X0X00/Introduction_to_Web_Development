
// Select the form and error message display - fill in the blanks as needed
const form = document.getElementById('userForm');
const errorDisplay = document.getElementById('errorMessages');

// Add an event listener to handle form submission - fill in the blanks as needed
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // TODO: Validate the name and email fields (see below)
});

 // (!) remember to fill in the blanks as needed
 form.addEventListener('submit', function(event) {
    event.preventDefault();

    // Clear previous error messages
    errorDisplay.textContent = '';

    // Get the values of name and email fields
    const name = form.name.value.trim();
    const email = form.email.value.trim();

    let errors = [];

    // Validate the name field
    if (name === '') {
        errors.push('Name is required.');
    }

    // Validate the email field
    if (email === '' || !email.includes('@') || !email.includes('.')) {
        errors.push('Please enter a valid email address.');
    }

    // Display errors or submit form if no errors
    if (errors.length > 0) {
        errorDisplay.textContent = errors.join(' ');
    } else {
        errorDisplay.textContent = 'Form submitted successfully!';
        // Optional: Uncomment the next line to actually submit the form
        // form.submit();
    }
});