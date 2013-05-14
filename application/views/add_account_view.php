<div id="user-contents" class="contents">
	<form action = "add_account2" method = "post">
		<div>
			<h3>Add New Account</h3>
			<label>Name</label>
			<input type = "text" name = "accountname"></input>
			<label>Gmail</label>			
			<input type = "text" name = "gmail"></input>
			<label>Unit</label>			
			<select name = "infosys">
				<option value = "hris" >HRIS</option>
				<option value = "fmis">FMIS</option>
				<option value = "spcmis">SPCMIS</option>
				<option value = "upd">UPD</option>
			</select>
			<label>Position</label>			
			<select name = "usertype">
				<option value = "subsuperuser">Subsuperuser</option>
				<option valye = "auditor">Auditor</option>
				<option value = "user">User</option>
			</select>
		<button>Add</button>
	</div>
</div>