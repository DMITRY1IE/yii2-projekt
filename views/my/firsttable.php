<?php
$this->title = 'Таблица'
?>
<h1>Таблица</h1>
<ul>
<?php foreach ($firsttable as $coment) { ?>
    <li><?=$coment->Date?>:<?=$coment->Name?>:<?=$coment->Text?></li>
<?php } ?>
</ul> 