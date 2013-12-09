<<<<<<< HEAD

=======
<<<<<<< HEAD
<style>
#holder { border: 4px solid #ccc; width:200px; min-height: 200px; margin: 20px auto;}
#holder.hover { border: 4px dashed #0c0; }
#holder img { display: block; margin: 5px auto; }
#holder p { margin: 0px; font-size: 14px; }
.fail { background: #c00; padding: 2px; color: #fff; }
    .hidden { display: none !important;}
    </style>
    
=======
<!--Retrieve the general information from the database-->
>>>>>>> 1e0c26c017f857619f74b1328da7d9b34cb5b7f9
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
>>>>>>> b22446a87094802b92633f407ceab6deff89decf
<?php
    include_once 'functions.php';
    $result = $db->prepare('select * from form where studentID ='.$_GET['studentID']);
    $result->execute();
    $result = $result->fetch();
?>
    
<!--Drag & Drop Picture-->
    <div id="holder"></div>
    <p id="upload" class="hidden">
    <label>Drag & drop not supported<br><input type="file"></label></p>
    <p id="filereader">File API & FileReader API not supported</p>
    <p id="formdata">XHR2's FormData is not supported</p>
    <p id="progress">XHR2's upload progress isn't supported</p>
    
    <script>
    var holder = document.getElementById('holder'),
    tests = {
    filereader: typeof FileReader != 'undefined',
    dnd: 'draggable' in document.createElement('span'),
    formdata: !!window.FormData,
    progress: "upload" in new XMLHttpRequest
    },
    support = {
    filereader: document.getElementById('filereader'),
    formdata: document.getElementById('formdata'),
    progress: document.getElementById('progress')
    },
    acceptedTypes = {
        'image/png': true,
        'image/jpeg': true,
        'image/gif': true
    },
    progress = document.getElementById('uploadprogress'),
    fileupload = document.getElementById('upload');
    
    "filereader formdata progress".split(' ').forEach(function (api) {
                                                      if (tests[api] === false) {
                                                      support[api].className = 'fail';
                                                      } else {
                                                      support[api].className = 'hidden';
                                                      }
                                                      });
    
    function previewfile(file) {
        if (tests.filereader === true && acceptedTypes[file.type] === true) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var image = new Image();
                image.src = event.target.result;
                image.width = 200; // a fake resize
                image.height = 200;
                holder.appendChild(image);
            };
            
            reader.readAsDataURL(file);
        }  else {
            holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
            console.log(file);
        }
    }
    
    function readfiles(files) {
        debugger;
        var formData = tests.formdata ? new FormData() : null;
        for (var i = 0; i < files.length; i++) {
            if (tests.formdata) formData.append('file', files[i]);
            previewfile(files[i]);
        }
        
        //post a new XHR request
        if (tests.formdata) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/devnull.php');
            xhr.onload = function() {
                progress.value = progress.innerHTML = 100;
            };
            
            if (tests.progress) {
                xhr.upload.onprogress = function (event) {
                    if (event.lengthComputable) {
                        var complete = (event.loaded / event.total * 100 | 0);
                        progress.value = progress.innerHTML = complete;
                    }
                }
            }
            
            xhr.send(formData);
        }
    }
    
    if (tests.dnd) {
        holder.ondragover = function () { this.className = 'hover'; return false; };
        holder.ondragend = function () { this.className = ''; return false; };
        holder.ondrop = function (e) {
            this.className = '';
            e.preventDefault();
            readfiles(e.dataTransfer.files);
        }
    } else {
        fileupload.className = 'hidden';
        fileupload.querySelector('input').onchange = function () {
            readfiles(this.files);
        };
    }
    
    </script>


<!--Drag & Drop Picture-->
<div id="holder"></div>
<p id="upload" class="hidden">
<label>Drag & drop not supported<br><input type="file"></label></p>
<script>
var holder = document.getElementById('holder'),
tests = {
filereader: typeof FileReader != 'undefined',
dnd: 'draggable' in document.createElement('span'),
formdata: !!window.FormData,
progress: "upload" in new XMLHttpRequest
},
support = {
filereader: document.getElementById('filereader'),
formdata: document.getElementById('formdata'),
progress: document.getElementById('progress')
},
acceptedTypes = {
'image/png': true,
'image/jpeg': true,
'image/gif': true
},
progress = document.getElementById('uploadprogress'),
fileupload = document.getElementById('upload');
"filereader formdata progress".split(' ').forEach(function (api) {
if (tests[api] === false) {
support[api].className = 'fail';
} else {
support[api].className = 'hidden';
}
});
function previewfile(file) {
if (tests.filereader === true && acceptedTypes[file.type] === true) {
var reader = new FileReader();
reader.onload = function (event) {
var image = new Image();
image.src = event.target.result;
image.width = 200; // a fake resize
image.height = 200;
holder.appendChild(image);
};
reader.readAsDataURL(file);
} else {
holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
console.log(file);
}
}
function readfiles(files) {
debugger;
var formData = tests.formdata ? new FormData() : null;
for (var i = 0; i < files.length; i++) {
if (tests.formdata) formData.append('file', files[i]);
previewfile(files[i]);
}
//post a new XHR request
if (tests.formdata) {
var xhr = new XMLHttpRequest();
xhr.open('POST', '/devnull.php');
xhr.onload = function() {
progress.value = progress.innerHTML = 100;
};
if (tests.progress) {
xhr.upload.onprogress = function (event) {
if (event.lengthComputable) {
var complete = (event.loaded / event.total * 100 | 0);
progress.value = progress.innerHTML = complete;
}
}
}
xhr.send(formData);
}
}
if (tests.dnd) {
holder.ondragover = function () { this.className = 'hover'; return false; };
holder.ondragend = function () { this.className = ''; return false; };
holder.ondrop = function (e) {
this.className = '';
e.preventDefault();
readfiles(e.dataTransfer.files);
}
} else {
fileupload.className = 'hidden';
fileupload.querySelector('input').onchange = function () {
readfiles(this.files);
};
}
</script>

<!-- Profile Information -->

<!-- Student ID -->
	<div class="row">
		<div class="span3">
		<p><strong>Student ID</strong></p>
		</div>
		<?php echo $result['studentID']; ?>
	</div>

<!-- Name -->
	<div class="row">
		<div class="span3">
		<p><strong>Name</strong></p>
		</div>
	<?php echo $result['firstName'];?> &nbsp;
	<?php echo $result['lastName'];?>
	</div>

<!-- Degree -->
	<div class="row">
		<div class="span3">
		<p><strong>Degree</strong></p>
		</div>
		<?php echo $result['degree'];?>

	</div>

<br>

<!-- Supervisors -->
	<div class="row">
		<div class="span3">
			<p><strong>Supervisors</strong></p>
		</div>
	<?php echo $result['super1FirstName'];?>&nbsp;
	<?php echo $result['super1LastName'];?>
	<br>
	<?php echo $result['super2FirstName'];?>&nbsp;
	<?php echo $result['super2LastName'];?>
</div>

<br>

<!-- Supervisor Emails -->
	<div class="row">
		<div class="span3">
			<p><strong>Supervisor Emails</strong></p>
		</div>
	<?php echo $result['super1mail'];?>
	<br>
	<?php echo $result['super2mail'];?>
	</div>

<br>

<!-- Program -->
	<div class="row">
		<div class="span3">
			<p><strong>Program</strong></p>
		</div>
	<?php echo $result['program'];?>
	</div>

<!-- Room -->
	<div class="row">
		<div class="span3">
			<p><strong>Room</strong></p>
		</div>
	<?php echo $result['room'];?>
	</div>

<!-- Scholarship -->
	<div class="row">
		<div class="span3">
			<p><strong>Scholarship</strong></p>
		</div>
	<?php echo $result['scholarship'];?>
	</div>

<!-- GTA -->
	<div class="row">
		<div class="span3">
			<p><strong>GTA</strong></p>
		</div>
	<?php echo $result['gta'];?>
	<?php
			session_start();
			if($_SESSION['role']==1){
				echo '<a href="profileEdit?studentID='.$result['studentID'].'" class="btn btn-primary right">Edit</a>';
			}
			?>
	</div>


