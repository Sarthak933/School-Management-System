<?php
include "dashboard.php";
session_start();
?>

<script>
    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });
</script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "header2.php";
?>

<div class="principal">
		<img src="principal.png">
	</div>
			<div class="content">
				<h3>Welcome to Our Official Website</h3>

		     <p> The school is extremely proud of the achievements by our students and staff. We work closely with the community to ensure the education offered is academically challenging, supports a broad range of vocational opportunities, supports cultural, social and emotional development and meets the high level of expectations of the society.</p>

		      <p>I invite you to explore our website to gain an understanding of how Lakshmipat Singhania School prepares students to face the future challenges.</p>
			</div>

			<div class="say3">
				<h4> Our School's Mission </h4>

				<ul type="disc">
				<li>Developing wholesome personality of the students. </li><br>

	  			<li>Inculcating a sense of self respect, self discipline and self reliance among  the students.</li><br>

		 		<li>Training the students physically, morally and academically to meet the
					challenges of the modern competitive world and to carve a niche for 
					themselves.</li><br>

	  			<li>Stimulating the creative talents of the students through well planned co-curricular and extra curricular activities.</li><br>

	  			<li>Imparting a non-sectarian religious orientation to the students.</li><br>

	  			<li>Producing young individuals possessing knowledge, a scientific temper, the ability to take decisions and spirit of dedication for the service of the nation and mankind.</li><br>

	 			<li>Developing love for motherland, its culture, heritage and traditions.</li><br>
				</ul>
			</div>
</body>
</html>