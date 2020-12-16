<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="code.php" method="POST" enctype="multipart/form-data">

<div class="modal-body">

    <div class="form-group">
        <label> Add Heading </label>
        <input type="text" name="heading" class="form-control" placeholder="Enter heading">
    </div>
    <div class="form-group">
        <label>Add subheading</label>
        <input type="text" name="subheading" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label>Article Type</label>
        <input type="text" name="article" class="form-control" placeholder="Enter authoe details">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea id="editor" cols="5" rows="5" type="text" name="content" class="form-control" placeholder="Write the description"></textarea>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="postbtn" class="btn btn-primary">Save</button>
</div>
</form>

</div>
</div>
</div>
</body>
</html>