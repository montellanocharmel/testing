<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/save" method= "post"> 
        <fieldset>
        <hr>
        <label>Code:</label>
        <input type="hidden" name="Id" value="<?= $pro['Id'] ?? '' ?>">
        <input type="text" name="code" placeholder="code" value="<?= $_POST['code'] ?? $pro['code'] ?? '' ?>">
        <br>
        <label>Name:</label>
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name'] ?? $pro['name'] ?? '' ?>">
        <br>
        <label>Quantity:</label>
        <input type="text" name="quantity" placeholder="quantity" value="<?= $_POST['quantity'] ?? $pro['quantity'] ?? '' ?>">
        <br><br>
        <input type="submit" value="Add/Update">
        <hr>
        </fieldset> 
    </form>

        <fieldset>
    <h1>Product Listing</h1>
    <table border='1'>
        <tr>
            <th>code</th>
            <th>name</th>
            <th>quantity</th>
            <th>action</th>
        </tr>

        <?php foreach($product as $pr): ?>
            <tr>
                <td><?= $pr['code'] ?></td>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['quantity'] ?></td>
                <td><a href="/delete/<?= $pr['Id'] ?>">delete</a> || <a href="/edit/<?= $pr['Id'] ?>">edit</a></td>
            </tr>
            </fieldset>
        <?php endforeach; ?>
    </table>
</body>
<style>
    label{
display:inline-block;
width:200px;
margin-right:-100px;
text-align:left;
margin-left:-10px;
margin-bottom:10px;
}
input{

}

fieldset{
border:none;
width:500px;
margin:0px auto;
}
</style>
</html>