<?php if($message) : ?>
<div class="mor alert success">
<p><?php print($message); ?></p>
</div>
<?php endif; ?>

<?php if($settings_form) : ?>
<?= form_open(
'C=addons_extensions&M=extension_settings&file=&file=mx_cloner',
'',
array("file" => "mx_cloner")
)
?>

<table class="mainTable padTable" id="event_table" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<th class="default" colspan="2">
<?= lang('extension_settings_info')?></div>
</th>
</tr>
</tbody> <?php endif; ?>
<tbody>
<tr>
<td><?= lang('title_field_suffix')?></td>
<td><input dir="ltr" style="width: 100%;" name="<?=$input_prefix; ?>[title_suffix]" id="" value="<?=((isset($settings['title_suffix'])) ? $settings['title_suffix'] : '' );?>" size="20" maxlength="120" class="input" type="text"></td>
</tr>
<tr>
<td><?= lang('url_title_suffix')?></td>
<td><input dir="ltr" style="width: 100%;" name="<?=$input_prefix; ?>[url_suffix]" id="" value="<?=((isset($settings['url_suffix'])) ? $settings['url_suffix'] : '' );?>" size="20" maxlength="120" class="input" type="text"></td>
</tr>

<tr>
<td><?= lang('update_entry_time')?></td>
<td><input type="checkbox" name="<?=$input_prefix;?>[update_time]" value="y" <?= ((isset($settings['update_time'])) ? (($settings['update_time'] == 'y') ? " checked=checked'" : "" ) : "");?>/></td>
</tr>
		
		
		
		
		
</tbody>		

		
</table>
<p class="centerSubmit"><input name="edit_field_group_name" value="<?= lang('save_extension_settings'); ?>" class="submit" type="submit"></p>


<?= form_close(); ?>

