<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Show Car</h2>
    <form >
       

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$car->title}}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{$car->price}}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description">{{$car->description}}</textarea>
        </div>
        <div class="row">
                <p class="text-light bg-secondary" style="padding: 20px; border-radius:25px; text-align: center">
                    Category: {{$car->category->category_name}}
                </p>
            </div>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="published"  @checked($car->published)> Published</label>
        </div>
    </form>
</div>

</body>
</html>