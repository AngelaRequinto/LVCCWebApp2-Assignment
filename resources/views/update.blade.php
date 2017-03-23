<!DOCTYPE html>
<html>
<head>
        <title>UPDATE DATA</title>
</head>

<style>
input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 80px;
}
</style>
<body>
      <center><h1>Update Data</h1></center>
        <form method="POST" action="/updating/{{$id}}">
        <div>
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$id}}">
        
        <label for="fname">First Name</label>
        <input type="text" name="first_name" value="{{$first_name}}">
        
        <label for="lname">Last Name</label>
        <input type="text" name="last_name" value="{{$last_name}}">
        
        <label for="idNumber">Id Number</label>
        <input type="text" name="id_number" value="{{$id_number}}">
        
        <label for="course">Course</label>
        <input type="text" name="course" value="{{$course}}">
        
        <label for="address">Address</label>
        <input type="text" name="address" value="{{$address}}">
        
        <button type="submit">submit</button>
        </div>
        </form>
        </body>
        </html>
  