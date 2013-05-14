<div id="user-contents" class="contents">
	<div class="accountlist"><h2>List of Accounts:</h2>
		<div>
		<table>
			<?php 
				foreach ($accounts as $account) {
					echo '<tr>';
					echo '<td>'.$account['accountname'];
					echo '<td>'.$account['account_id'];
					echo '<td>'.$account['info_sys'];
					echo '<td>'.$account['gmail'];
					echo '<td>'.$account['type'];
					echo '<td><button>Delete</button>';
					echo '</tr>';
				}
			?>
		</table>
		<a href=<?php echo site_url('add_account');?>><button>Add a user account</button></a>
		</div>
	</div>
</div>