<?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 20))->to($tags); ?>
<?php if ($tags->have()) : ?>
<div class="title">
<svg class="icon2" aria-hidden="true" style="width:17px;height:17px;margin-right:5px"><use xlink:href="#icon-A67"></use></svg>标签搜索</div>
<ul class="cloud">
<?php $colors  = [
'#F8D800',
'#0396FF',
'#EA5455',
'#7367F0',
'#32CCBC',
'#F6416C',
'#28C76F',
'#9F44D3',
'#F55555',
'#736EFE',
'#E96D71',
'#DE4313',
'#D939CD',
'#4C83FF',
'#F072B6',
'#C346C2',
'#5961F9',
'#FD6585',
'#465EFB',
'#FFC600',
'#FA742B',
'#5151E5',
'#BB4E75',
'#FF52E5',
'#49C628',
'#00EAFF',
'#F067B4',
'#F067B4',
'#ff9a9e',
'#00f2fe',
'#4facfe',
'#f093fb',
'#6fa3ef',
'#bc99c4',
'#46c47c',
'#f9bb3c',
'#e8583d',
'#f68e5f',
]; ?>
<?php while ($tags->next()) : ?>
<li class="item"><a style="background:<?php echo $colors[mt_rand(0, count($colors) - 1)] ?>" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>