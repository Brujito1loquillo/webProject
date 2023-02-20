<main>
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>
				<?php echo $text["userAndPasswd"]; ?>
			</legend>
			
			<p>
				<label for="username">
					<?php echo $text["username"]; ?>:
				</label>
				<input type="email" name="username" id="username" />
			</p>
			
			<p>
				<label for="passwd">
					<?php echo $text["passwd"]; ?>:
				</label>
				<input type="password" name="passwd" id="passwd" />
			</p>
			
			<p>
				<label for="passwd2">
					<?php echo $text["repeatPasswd"]; ?>:
				</label>
				<input type="password" name="passwd2" id="passwd2" />
			</p>
		</fieldset>
		
		<fieldset>
			<legend>
				<?php echo $text["personal"]; ?>
			</legend>
			
			<p>
				<label for="dni">
					<?php echo $text["dni"]; ?>:
				</label>
				<input type="text" name="dni" id="dni" />
			</p>
			
			<p>
				<label for="name">
					<?php echo $text["name"]; ?>:
				</label>
				<input type="text" name="name" id="name" />
				
				<label for="surname">
					<?php echo $text["surname"]; ?>:
				</label>
				<input type="text" name="surname" id="surname" />
			</p>
			
			<p>
				<label for="birth">
					<?php echo $text["birth"]; ?>:
				</label>
				<input type="date" name="birth" id="birth" />
			</p>
			
			<div id="gender">
				<p>
					<?php echo $text["gender"]; ?>:
				</p>
				
				<p>
    				<input type="radio" name="gender" value="M" id="male" />
    				<label for="male">
    					<?php echo $text["male"]; ?>
    				</label>
    			</p>
				
				<p>
    				<input type="radio" name="gender" value="F" id="female" />
    				<label for="female">
    					<?php echo $text["female"]; ?>
    				</label>
    			</p>
			</div>
		</fieldset>
		
		<fieldset>
			<legend>
				<?php echo $text["opc"]; ?>
			</legend>
			
			<p>
				<label for="adr">
					<?php echo $text["adr"]; ?>:
				</label>
				<input type="text" name="adr" id="adr" />
			</p>
			
			<p>
				<label for="pcode">
					<?php echo $text["pcode"]; ?>:
				</label>
				<input type="text" name="pcode" id="pcode" />
			</p>
			
			<p>
				<label for="loc">
					<?php echo $text["loc"]; ?>:
				</label>
				<input type="text" name="loc" id="loc" />
			</p>
			
			<p>
				<label for="prov">
					<?php echo $text["prov"]; ?>:
				</label>
				<input type="text" name="prov" id="prov" />
			</p>
			
			<p>
				<label for="phone">
					<?php echo $text["phone"]; ?>:
				</label>
				<input type="tel" name="phone" id="phone" />
			</p>
		</fieldset>
		
		<fieldset>
			<legend>
				<?php echo $text["userImage"]; ?>
			</legend>
			
			<p>
				<label for="img">
					<?php echo $text["image"]; ?>:
				</label>
				<input type="file" name="img" id="img" accept="image/*" />
		</fieldset>
		
		<input type="submit" value="<?php echo $text["send"]; ?>" />
	</form>
</main>
