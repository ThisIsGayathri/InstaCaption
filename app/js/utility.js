var el = x => document.getElementById(x);

var upload_img = document.getElementById('inp_file').addEventListener('change', fileChange, false);

function fileChange(e) {

    var file = e.target.files[0];

    if (file.type == "image/jpeg" || file.type == "image/png") {

        // Activate Submit Button
        el('submit_btn').type = "submit";
        document.getElementById('inp_img').value = '';
        var reader = new FileReader();  
        
        }
        reader.readAsDataURL(file);
    } else {
        document.getElementById('inp_file').value = '';	
        alert('Please select image only in JPG or PNG format!');	
    }
}
