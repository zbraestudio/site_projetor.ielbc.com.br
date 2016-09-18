<?
include('inc.header.php');


$laminas_str = $_GET['laminas'];
$laminas = explode('|', $laminas_str);

?>

<body id="projecoes">

<ul>
    <?
    foreach($laminas as $lamina) {
        ?>
        <li style="background-image: url(<?= $lamina; ?>);"></li>
        <?
    }
    ?>

</ul>
</body>
