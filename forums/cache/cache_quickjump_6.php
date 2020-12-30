<?php

if (!defined('PUN')) exit;
define('PUN_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?>				<form id="qjump" method="get" action="viewforum.php">
					<div><label><span><?php echo $lang_common['Jump to'] ?><br /></span>
					<select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
						<optgroup label="General">
							<option value="1"<?php echo ($forum_id == 1) ? ' selected="selected"' : '' ?>>Announcements</option>
							<option value="2"<?php echo ($forum_id == 2) ? ' selected="selected"' : '' ?>>General talk</option>
							<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Spotlight</option>
						</optgroup>
						<optgroup label="Premium lounge">
							<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>CS:GO Discussion</option>
							<option value="5"<?php echo ($forum_id == 5) ? ' selected="selected"' : '' ?>>Feedback</option>
							<option value="6"<?php echo ($forum_id == 6) ? ' selected="selected"' : '' ?>>Marketplace</option>
						</optgroup>
					</select></label>
					<input type="submit" value="<?php echo $lang_common['Go'] ?>" accesskey="g" />
					</div>
				</form>
