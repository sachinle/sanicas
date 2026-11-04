<?php $f=['Copy of 255A0681','Copy of 255A0682','Copy of 255A0769','Copy of 255A0795','Copy of 255A0858','Copy of 255A0870','Copy of 255A1137','Copy of 255A1422','Copy of 255A1426','PRN04735','PRN05142','PRN06190']; ?>
<style>body{margin:0;display:grid;grid-template-columns:repeat(6,1fr);gap:4px;font:11px sans-serif;background:#fff}img{width:100%;height:200px;object-fit:cover}</style>
<?php foreach($f as $b): ?><div><img src="/_tmp/thumbs/<?=rawurlencode($b)?>.jpg?v=2"><?=str_replace('Copy of ','',$b)?></div><?php endforeach; ?>
