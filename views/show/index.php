<form action="<?=$controller->url_for('/show/save/');?>" method="post">
<input name="new_order" value="" type="hidden" />
<p> Hier k�nnen Sie die verwendeten Inhaltselemente
<ul>
<li>sortieren,</li>
<li>umbenennen und</li>
<li>die Sichtbarkeit f�r Teilnehmende ausschalten</li>
</ul>
</p>
<?	
$tab_num = 0; ?>

<ul id="sortable">

<? foreach($tabs as $tab){?>
 	<li name="<?=$tab_num?>" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
 	<? if(!in_array($tab['tab'], $ignore_visibility_tabs)){ ?>
		<input type="checkbox" name="visible_<?=$tab_num?>" <?=$tab['visible']?>/> 
	<? } else {
	strcmp($tab['visible'],'checked') == 0 ? $visible = 'on': $visible = 'off';
	?>
	<input type="hidden" name="visible_<?=$tab_num?>" value="<?=$visible?>"/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<? } ?> 
 	<input type="hidden" value="<?= $tab['tab']; ?>" name="tab_title_<?=$tab_num?>" />
	<input value="<?= $tab['title']; ?>" name="new_tab_title_<?=$tab_num?>" size="20"/>
	<input type="hidden" value="<?= $tab['position']; ?>" name="tab_position_<?=$tab_num?>" />
 	(<?= $tab['orig_title']; ?>)</p>
	</li>
 	<?$tab_num++;
	
}?>

</ul>

<input type="hidden" name="tab_num" value="<?=$tab_num?>" />
<p><button title="�nderungen �bernehmen" name="submit" class="button" type="submit">�bernehmen</button></p>
</form>


