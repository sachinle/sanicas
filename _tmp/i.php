<?php $f=array_merge(glob(__DIR__.'/../assets/images/*.{JPG,jpg,jpeg}',GLOB_BRACE)); ?>
<style>body{margin:0;display:grid;grid-template-columns:repeat(8,1fr);gap:3px;font:10px sans-serif;background:#fff}img{width:100%;height:80px;object-fit:cover}</style>
<?php foreach($f as $i=>$x): $b=basename($x); ?><div><img loading="eager" src="/assets/images/<?=rawurlencode($b)?>"><?=substr($b,0,22)?></div><?php endforeach; ?>
