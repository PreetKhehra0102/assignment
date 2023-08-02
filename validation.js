// Function to validate the add_content.html form
function validateAddContentForm() {
    var title = document.getElementById('title').value;
    var description = document.getElementById('description').value;
  
    if (title.trim() === '') {
      alert('Please enter a title.');
      return false;
    }
  
    if (description.trim() === '') {
      alert('Please enter a description.');
      return false;
    }
  
    return true;
  }
  
  // Function to validate the update_content.html form
  function validateUpdateContentForm() {
    var title = document.getElementById('title').value;
    var description = document.getElementById('description').value;
  
    if (title.trim() === '') {
      alert('Please enter a title.');
      return false;
    }
  
    if (description.trim() === '') {
      alert('Please enter a description.');
      return false;
    }
  
    return true;
  }
  