document.getElementById('downloadBtn').addEventListener('click', function() {
    const link = document.createElement('a');
    link.href = './assets/js/Jimenez_Resume.pdf'; // Ensure this path is correct
    link.download = './assets/js/Jimenez_Resume.pdf'; // This will set the download attribute
    document.body.appendChild(link); // Append to the body to make it part of the document
    link.click(); // Trigger the download
    document.body.removeChild(link); // Clean up by removing the element
});