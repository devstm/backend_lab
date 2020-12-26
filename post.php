<html lang="en">
<form style="background-color: white;
    width: 50%;
    min-height: 400px;
    text-align: center;
    margin-left: 25%;
    margin-top: 5%;
    border: #d7d7d7 solid 4px;
    border-radius: 20px;
    box-shadow: black;
    padding: 20px;" action="echo.php" method="POST">


    <h1> Enter Data To Post It: </h1>
    <div class="input">
        <div class="form-group">
            <label for="name" style="font-size: 22px">Message</label>
            <input class="form-control" name="message" type="text">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1" style="font-size: 22px">Number:</label>
            <input  type="text" name="number" class="form-control"
                   id="exampleInputEmail1">
        </div>
    </div>


    <input type="submit" name="submit" value="submit" class="btn btn-primary">

</form>
</html>






