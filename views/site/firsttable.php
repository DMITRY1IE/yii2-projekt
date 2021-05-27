<?php
$this->title = 'Таблица'
?>
<!-- <ul>
<?php foreach ($firsttable as $coment) { ?>
    <li><?=$coment->Date?>:<?=$coment->Name?>:<?=$coment->Text?></li>
<?php } ?>
</ul>   -->

<table class="table">
<tr><th>ID</th><th>DATE</th><th>NAME</th><th>TEXT</th></tr>
<?php
foreach($firsttable as $coment) {
    echo "<tr><td>{$coment['id']}</td><td>{$coment['Date']}</td><td>{$coment['Name']}</td><td>{$coment['Text']}</td></tr>";
}

?>
</table>
