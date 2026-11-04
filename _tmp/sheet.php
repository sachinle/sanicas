<?php $f=glob(__DIR__.'/../assets/figma/*.{jpg,jpeg,png}',GLOB_BRACE); $f=array_filter($f,fn($x)=>!preg_match('/\/(co-|logo)/',$x)); ?>
<style>body{margin:0;display:grid;grid-template-columns:repeat(10,1fr);gap:2px;font:9px sans-serif}img{width:100%;height:60px;object-fit:cover}</style>
<?php foreach($f as $x): $b=basename($x); ?><div><img src="/assets/figma/<?=rawurlencode($b)?>"><?=$b?></div><?php endforeach; ?>
