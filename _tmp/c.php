<?php $f=explode(',',$_GET['f']); ?>
<style>body{margin:0;display:grid;grid-template-columns:repeat(5,1fr);gap:4px;font:12px sans-serif;background:#fff}img{width:100%;height:110px;object-fit:cover}</style>
<?php foreach($f as $b): ?><div><img src="/assets/figma/<?=rawurlencode($b)?>"><?=$b?></div><?php endforeach; ?>
