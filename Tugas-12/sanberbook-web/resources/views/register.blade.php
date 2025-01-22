<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Daftar Akun - SanberBook</title>
	</head>
	<body>
		<h1>Buat Account Baru!</h1>
		<h3>Sign Up Form</h3>
		<form action="{{ route('welcome') }}" method="POST">
      @csrf
			<label for="first_name">First name:</label><br /><br />
			<input
				type="text"
				id="first_name"
				name="first_name"
				placeholder="Masukkan nama depan..."
				required
			/><br /><br />

			<label for="last_name">Last name:</label><br /><br />
			<input
				type="text"
				id="last_name"
				name="last_name"
				placeholder="Masukkan nama belakang..."
				required
			/><br /><br />

			<label for="gender">Gender:</label><br /><br />
			<input type="radio" id="male" name="gender" value="male" />
			<label for="male">Male</label><br />
			<input type="radio" id="female" name="gender" value="female" />
			<label for="female">Female</label><br />
			<input type="radio" id="other_gender" name="gender" value="other" />
			<label for="other_gender">Other</label><br /><br />

			<label for="nationality">Nationality:</label><br /><br />
			<select name="nationality" id="nationality">
				<option value="indonesian">Indonesian</option>
				<option value="malaysian">Malaysian</option>
				<option value="singaporean">Singaporean</option>
				<option value="australian">Australian</option></select
			><br /><br />

			<label for="language">Language Spoken:</label><br /><br />
			<input
				type="checkbox"
				id="indonesian"
				name="language[]"
				value="indonesian"
			/>
			<label for="indonesian">Bahasa Indonesia</label><br />
			<input type="checkbox" id="english" name="language[]" value="english" />
			<label for="english">English</label><br />
			<input type="checkbox" id="other_lang" name="language[]" value="other" />
			<label for="other_language">Other</label><br /><br />

			<label for="bio">Bio:</label><br />
			<textarea id="bio" name="bio" cols="30" rows="10" placeholder="Masukkan bio..."></textarea><br />

			<input type="submit" value="Sign Up" />
		</form>
	</body>
</html>