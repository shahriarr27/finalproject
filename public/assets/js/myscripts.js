// Put this script in header or above select element
ClassicEditor.create( document.querySelector( '.ckeditor' ) )
  .catch( error => {
    console.error( error );
} );

function check(elem) {
  // use one of possible conditions
  // if (elem.value == 'Other')
  if (elem.selectedIndex == 1) {
      document.getElementById("teacher_fields").style.display = 'block';
  }
  else {
      document.getElementById("teacher_fields").style.display = 'none';
  }
  if(elem.selectedIndex == 2) {
    document.getElementById("student_fields").style.display = 'block';
  }
  else {
      document.getElementById("student_fields").style.display = 'none';
  }
}


let fileInput = document.getElementById("file-upload-input");
let fileSelect = document.getElementsByClassName("file-upload-select")[0];
fileSelect.onclick = function() {
	fileInput.click();
}
fileInput.onchange = function() {
	let filename = fileInput.files[0].name;
	let selectName = document.getElementsByClassName("file-select-name")[0];
  selectName.innerText = filename;
}

