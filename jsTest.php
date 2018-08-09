<!DOCTYPE html>
<html>
<body>

<p>Write something in the text field to trigger a function.</p>

<input type="text" id="myInput" oninput="myFunction()">
<input type = "text" id="ln2" style="width:80px; margin-top:5px; margin-left:5px; border:1px solid blue;" name="detailLine_2">
<input type = "text" id="dos_2" style="width:150px; margin-top:5px; margin-left:5px; border:1px solid blue;" name="detailDOS_2" oninput="myFunction()">

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("dos_2").value;
    document.getElementById("ln2").value = "You wrote: ";
}
</script>

</body>
</html>