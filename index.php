<?php
include 'generate_triangles.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangle Generator</title>
</head>
<body>

<h2>Triangle Generator</h2>

<form method="post">
    Enter size:
    <input type="number" name="size" value="5">
    <button type="submit">Generate</button>
</form>

<pre>
<?php
if (isset($_POST['size'])) {
    echo generateTriangles($_POST['size']);
}
?>
</pre>

</body>
</html>
