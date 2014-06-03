<?php
include_once('config.php');
include_once('BibleDAO.php');

$books = BibleDAO::getBooks();
$defaultChapters = BibleDAO::getChapterNumbers(1);
$defaultVerses = BibleDAO::getVerseNumbers(1, 1);
$defaultVerseText = BibleDAO::getVerseText(1, 1, 1);
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/design.css">
	<div id="div_header"><p id="header">King James Bible</p>

	</div>
</head>

<body style="background-image:url('img/heaven1.jpg')">

	<div id = 'container'>
		<div id = "select_container">
			<div id="select">
				<div id="book_div">
					<label>Book</label><br>
					<select name="books" id="books">
						<?php foreach($books as $id => $book): ?>
							<option value="<?= $id ?>"><?= $book ?></option>
						<?php endforeach ?>
					</select></br>

					<label>Chapter</label><br>
					<select name="chapters" id="chapters">
						<?php for($i = 1; $i <= $defaultChapters; $i++): ?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor ?>
					</select></br>

					<label>Verse</label><br>
					<select name="verses" id="verses">
						<?php for($i = 1; $i <= $defaultVerses; $i++): ?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor ?>
					</select></br>
				</div>
			</div>

			<div id="output_container">
				<div id="verse_text">
					<div id = "verse_text_container">
						<?= $defaultVerseText ?>
					</div>
				</div>
			</div>
		</div>	

		<div id="search">	
				<div id="search_div">
					<center><label>Search for words/phrase.</label></center><br>
					<input placeholder="Search..." type="text" id="key">
				</div>

				<div id = "result_div">
						<h4 id="result"><i></i></h4>
				</div>
		</div>
	</div>	

<script type="text/javascript" src="js/jquery.1.10.2.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/myjquery.js"></script>
<script type="text/javascript" src="js/thumb.js"></script>

</body>
</html>