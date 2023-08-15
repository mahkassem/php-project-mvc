<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <img src="imgs/2022_alfa-romeo_giulia_sedan_quadrifoglio_fq_oem_1_1600.jpg" alt="" width="400">
  <p>
    <strong>Name: </strong> <span><?php echo $profile->name ?></span>
  </p>
  <p>
    <strong>Email: </strong> <span><?php echo $profile->email ?></span>
  </p>
  <p>
    <strong>City: </strong> <span><?php echo $profile->city ?></span>
  </p>
  <p>
    <strong>Bio: </strong> <span><?php echo $profile->bio ?></span>
  </p>
</body>

</html>