<?php
/*
** Zabbix
** Copyright (C) 2001-2020 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


/**
 * @var CView $this
 */
?>

<script type="text/javascript">
	jQuery(function() {
		initPMaster(
			'slideshows',
			<?=
				CJs::encodeJson([
					WIDGET_SLIDESHOW => [
						'frequency' => timeUnitToSeconds($data['element']['delay']) * $data['refreshMultiplier'],
						'url' => 'slides.php?output=html&elementid='.$this->data['elementId'].
							(isset($this->data['groupid']) ? '&groupid='.$this->data['groupid'] : '').
							(isset($this->data['hostid']) ? '&hostid='.$this->data['hostid'] : ''),
						'counter' => 0,
						'darken' => 0,
						'params' => [
							'widgetRefresh' => WIDGET_SLIDESHOW,
							'lastupdate' => time()
						]
					]
				])
			?>
		);
	});
</script>
