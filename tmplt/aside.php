<aside>
	<div id="title">
		<h1>
			<a href="<?php echo $this->lang["web"]["href"]; ?>">
				<?php
                    echo $this->lang["web"]["title"];
                ?>
			</a>
		</h1>
	</div>
	
	<div id="menu">
		<?php
            echo $this->menu;
		?>
	</div>
	
	<div id="footer">
        <div id="usr">
        	<a href="?">
        		<img title="log-in" alt="log-in" src="img/icons/user/login.png" />
        	</a>
        	
        	<a href="<?php echo $this->lang["practics"][7]["ufs"][2]["exs"]["02"]["href"]; ?>">
        		<?php
        		$register = $this->lang["practics"][7]["ufs"][2]["exs"]["02"]["title"];
        		
        		echo "<img title=\"$register\" alt=\"$register\" src=\"img/icons/user/register.png\" />"; 
        		?>
        	</a>
        </div>
        
        <div id="lang">
        	<?php
                echo LangController::showLangs();
        	?>
        </div>
        
        <div id="resources">
        	<a href="?php/show">
        		<img title="PhP" alt="PhP" src="img/icons/resources/php.png" />
        	</a>
        </div>
	</div>
</aside>