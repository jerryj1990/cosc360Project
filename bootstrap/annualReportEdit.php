<!-- this file is updates the annual report in the database-->
<?php include_once 'header.php'; ?>

<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php 
	if($_SESSION['role']==0){
		header('Location: profile.php');
	}
?>
<!--Drag & Drop Picture-->

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
<!--Form-->
<div class="menu">
<!--retrieving information according to the annualreport the user cliked
 previously. If the annualReport field in "form" table is 1 in such annual report it will retrieve all the informaiton form the table. 
 It also show a create report button if the field is 0-->
	<?php
		echo '<form class="well" id="form" action="updateReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" method="post">';
		$annualReport = $_GET['annualReport'];
		$result = $db->prepare('select '.$annualReport. ' from form where studentID ='.$_GET['studentID']);
		$result->execute();
		$result = $result->fetch();
		if($result[$annualReport]){
			$result = $db->prepare('select * from '.$_GET['annualReport'].' where studentID ='.$_GET['studentID']);
			$result->execute();
			$result = $result->fetch();
			echo '<div id="holder"></div>';
			echo '<p id="upload" class="hidden">';
			echo '<label>Drag & drop not supported<br><input type="file" name="annualReport"></label></p><br><br><br><br><br>';
			echo '<p>GradID</p>';
			echo '<input type="text"  name="gradID" value="'.$result['gradID'].'"/> &nbsp;<br>';
			echo '<p>Status</p>';
			echo '<input type="date" name="status" value="'.$result['status'].'"><br>';
			echo '<p>Start</p>';
			echo '<input type="date" name="startDate" value="'.$result['startDate'].'"><br>';
			echo '<p>End Date</p>';
			echo '<input type="date" name="endDate" value="'.$result['endDate'].'"><br>';
			echo '<p>Due</p>';
			echo '<input type="date" name="due" value="'.$result['due'].'"><br>';
			echo '<p>Submitting</p>';
			echo '<input type="date" name="submitting" value="'.$result['submitting'].'"><br>';
			echo '<p>Submitted</p>';
			echo '<input type="date" name="submitted" value="'.$result['submitted'].'"><br>';
			echo '<p>Resent</p>';
			echo '<input type="date" name="resent" value="'.$result['resent'].'"><br>';
			echo '<br><br><button class="btn btn-primary">Submit</button>';
			echo '</form>';
		}
		else{
			echo '<center>';
			echo 'This report does not exist yet!<br>';
			echo '<a href="createReport.php?studentID='.$_GET['studentID'].'&annualReport='.$_GET['annualReport'].'" class="btn btn-large btn-block btn-primary">Create Report</a>';
			echo '</center>';
		}
	?>
</div>

<?php include_once 'footer.php'; ?>