<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri Registration Form</title>

    <!-- css file -->
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container">
    <form class="row g-3 bg-info p-3 mt-3">
        <h1 class="text-center m-3">Registration form</h1>
  <div class="col-md-8">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Surname first" name="name">
  </div>
  <div class="col-md-4">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="abc@xyz.com" name="email">
  </div>
  <div class="col-5">
    <label class="form-label">Date of Birth</label>
    <input type="date" class="form-control name="dob">
  </div>
  <div class="col-7">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" class="form-select">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="I prefer not to answer">I prefer not to answer</option>
</select>
</div>


  <div class="col-12">
    <label for="inputState" class="form-label">Country</label>
    <select id="inputState" class="form-select">
      <option value="Nigeria">Nigeria</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Egypt">Egypt</option>
      <option value="Congo">Congo</option>
      <option value="Tanzania">Tanzania</option>
      <option value="South Africa">South Africa</option>
      <option value="Kenya">Kenya</option>
      <option value="Uganda">Uganda</option>
      <option value="Algeria">Algeria</option>
      <option value="Sudan">Sudan</option>
      <option value="Morocco">Morocco</option>
      <option value="Angola">Angola</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Ghana">Ghana</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Côte d'Ivoire">Côte d'Ivoire</option>
      <option value="Niger">Niger</option>
      <option value="Burkina Faso">Burkina Faso</option>
      <option value="Mali">Mali</option>
      <option value="Malawi">Malawi</option>
      <option value="Zambia">Zambia</option>
      <option value="Senegal">Senegal</option>
      <option value="Chad">Chad</option>
      <option value="Somalia">Somalia</option>
      <option value="Zimbabwe">Zimbabwe</option>
      <option value="others">Others</option>
     
    </select>
  </div>
  
 
  
  <div class="col-12 text-center mt-5">
    <button type="submit" class="btn btn-primary"> <a href="#"></a>Submit</button>
  </div>
</form>



    </div>








    
</body>
</html>