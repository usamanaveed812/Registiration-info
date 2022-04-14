<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <style type="text/css">

    h2{
      text-align: center;
      margin-top:50px; 
      color: #6495ED
    }
    .container {  
  max-width: 1350px;  
  width: 100%;  
  margin: 50px;  
  height: auto;  
  display: block; 

  margin-left:500px; 
}  
body {  
  color:#000000;  
  font-size: 20px;  
  font-family: Verdana, Arial, Helvetica, monospace;  
  background-color: #F0E8A0;  
} 
    
  </style>
</head>
<body>
  <h2>Registiration Form</h2> 
 <form action="insert.php" method="POST">
  <div class="container">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" placeholder="Enter name" required></td>
   </tr>
   
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password"  placeholder="Enter password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="M" required>Male
     <input type="radio" name="gender" value="F" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="+92">+92</option>
      <option value="+97">+97</option>
      <option value="+79">+79</option>
      <option value="+73">+73</option>
      <option value="+72">+72</option>
      <option value="+74">+74</option>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
 </div>
</body>
</html>