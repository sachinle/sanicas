<?php $f=glob(__DIR__.'/thumbs/*.jpg'); ?>
<style>body{margin:0;display:grid;grid-template-columns:repeat(8,1fr);gap:3px;font:10px sans-serif;background:#fff}img{width:100%;height:78px;object-fit:cover}</style>
<?php foreach($f as $x): $b=basename($x); ?><div><img src="/_tmp/thumbs/<?=rawurlencode($b)?>"><?=substr(str_replace('Copy of ','',$b),0,16)?></div><?php endforeach; ?>
