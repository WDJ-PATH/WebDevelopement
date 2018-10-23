<html>
<body background="img/bluebg.jpg">

<?php
$base="https://cve.circl.lu/api/search/"; // path to your JSON file

$v = $_POST["Vendor"];
$p= $_POST["Product"];

$url=$base.$v."/".$p;
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

?>

<p1>VENDOR : </p1>
<?php echo $v; ?></br> 
<p1>PRODUCT : </p1>
<?php echo $p; ?></br></br></br></br>

<table>
        <tbody>
            <tr>
                <th>Published</th>
                <th>CWE</th>
                <th>CVE ID</th>
                <th>Modified</th>
                <th>Summary</th>
            </tr>
            <?php foreach ($characters as $character) : ?>
            <tr>
                <td> <?php echo $character->Published; ?> </td>
                <td> <?php echo $character->cwe; ?> </td>
                <td> <?php echo $character->id; ?> </td>
                <td> <?php echo $character->Modified; ?> </td>
                <td> <?php echo $character->summary; ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>
</body>
</html>