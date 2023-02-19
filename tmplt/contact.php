<main>
	<form method="post" <?php if ($send) echo "class=\"send\""; ?>
	>
		<p>
			<label for="name">
				<?php echo $text["name"]; ?>:
			</label>
			<input type="text" name="name" id="name"
                <?php if (isset($data["name"])) echo "value=\"{$data["name"]}\""; ?> 
			/>
			
			<label for="surname">
				<?php echo $text["surname"]; ?>:
			</label>
			<input type="text" name="surname" id="surname"
				<?php if (isset($data["surname"])) echo "value=\"{$data["surname"]}\""; ?>
			/>
		</p>
		<?php
		if(isset($errors["name"])) {
		    echo "<p class=\"error\">{$errors["name"]}</p>";
		}
		
		if(isset($errors["surname"])) {
		    echo "<p class=\"error\">{$errors["surname"]}</p>";
		}
		?>
		
		<p>
			<label for="email">
				<?php echo $text["email"]; ?>:
			</label>
			<input type="email" name="email" id="email"
				<?php if (isset($data["email"])) echo "value=\"{$data["email"]}\""; ?>
			/>
		</p>
		<?php
		if(isset($errors["email"])) {
		    echo "<p class=\"error\">{$errors["email"]}</p>";
		}
		?>
		
		<label for="message">
			<?php echo $text["message"]; ?>:
		</label>
		<textarea rows="" cols="" name="message" id="message"><?php if (isset($data["message"])) echo $data["message"]; ?></textarea>
		<?php
		if(isset($errors["message"])) {
		    echo "<p class=\"error\">{$errors["message"]}</p>";
		}
		?>
		
		<div id="why">
			<p>
				<?php echo $text["why"]; ?>:
			</p>
			
			<p>
				<input type="checkbox" name="issiue" value="1" id="issiue"
				<?php if (isset($data["why"]) && in_array("issiue", $data["why"])) echo "checked"; ?>
				/>
				<label for="issiue">
					<?php echo $text["issiue"]; ?>
				</label>
			</p>
			
			<p>
				<input type="checkbox" name="imprube" value="2" id="imprube"
				<?php if (isset($data["why"]) && in_array("imprube", $data["why"])) echo "checked"; ?> 
				/>
				<label for="imprube">
					<?php echo $text["imprube"]; ?>
				</label>
			</p>
			
			<p>
				<input type="checkbox" name="other" value="3" id="other"
				<?php if (isset($data["why"]) && in_array("other", $data["why"])) echo "checked"; ?> 
				/>
				<label for="other">
					<?php echo $text["other"]; ?>
				</label> 
			</p>
		</div>
		<?php
		if(isset($errors["why"])) {
		    echo "<p class=\"error\">{$errors["why"]}</p>";
		}
		?>
		
		<p>
			<label for="device">
				<?php echo $text["device"]; ?>:
			</label>
			<br />
			<select name="device" id="device">
				<option value="-">
					<?php echo $text["select"]; ?>
				</option>
				
				<option value="pc"
					<?php if (isset($data["device"]) && $data["device"] === "pc") echo "selected"; ?>
				>
					<?php echo $text["pc"]; ?>
				</option>
				
				<option value="phone"
				<?php if (isset($data["device"]) && $data["device"] === "phone") echo "selected"; ?>
				>
					<?php echo $text["phone"]; ?>
				</option>
				
				<option value="tablet"
				<?php if (isset($data["device"]) && $data["device"] === "tablet") echo "selected"; ?>
				>
					<?php echo $text["tablet"]; ?>
				</option>
				
				<option value="other"
				<?php if (isset($data["device"]) && $data["device"] === "other") echo "selected"; ?>
				>
					<?php echo $text["other"]; ?>
				</option>
			</select>
		</p>
		<?php
		if(isset($errors["device"])) {
		    echo "<p class=\"error\">{$errors["device"]}</p>";
		}
		?>
		
		<input type="submit" value="<?php echo $text["send"]; ?>" />
	</form>
	
	<div id="sended" <?php if ($send) echo "class=\"send\""; ?>>
		<p>
			<?php echo $text["sended"]; ?>.
		</p>
		<a href="?">
			<?php echo $lang["web"]["text"]["goHome"]; ?>
		</a>
	</div>
</main>
