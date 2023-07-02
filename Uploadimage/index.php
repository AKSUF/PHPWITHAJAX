<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #image_preview{
            width: 50%;
            height: 50%;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-success">Upload image & remove image</h1>
    <div class="mt-5">
        <form action="" id="submit_form">
            <label for="">Select imagee</label>
            <br>
            <input class="mt-5" type="file" name='file' id="upload_file"/>
            <br>
            <input class="mt-5" type="submit" value="Upload" name="upload_button" id="upload_btn">
        </form>
    </div>
    <div id="preview">
        <h3>Image Preview</h3>
        <div id="image_preview"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>
