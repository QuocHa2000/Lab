<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/MySubmit.css"> -->
    <link rel="stylesheet" href="css/MySubmit.css">
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css" />
    <script src="https://kit.fontawesome.com/c9801e10cc.js" crossorigin="anonymous"></script>

    <style>
        #navigation {
            margin: 10px 0;
        }
        
        @media (max-width: 767px) {
            #title,
            #description {
                display: none;
            }
        }
    </style>
</head>

<body class="background">
    <div class="container" style="margin-left: 450px;">

        <h1 id="title">Upload your files </h1>
        <blockquote id="description" style="width:580px">
            <p>
                File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.<br /> Supports cross-domain, chunked and resumable file uploads and client-side image resizing.<br
                />

            </p>
        </blockquote>
        <div class="author">
            <form method="GET" action="">
                <label for="authorname"><h5>Author Name</h5></label>
                <input type="text" id="authorname" name="authorname">
                <label for="email"><h5>Email</h5></label>
                <input type="text" id="email" name="email">
                <input type="submit">
            </form>
        </div>

        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <input type="file" style="color : aliceblue;">
                <button type="submit" class="btn btn-primary start">
                    <i class="fas fa-upload"></i>
                    <span>Start upload</span>
                </button>
            </div>
        </div>
        </form>
        <div class="Note">
            <div>
                <h3> Notes</h3>
            </div>
            <div>
                <ul>
                    <li>
                        The maximum file size for uploads in server is
                        <strong>20 MB</strong>
                    </li>
                    <li>
                        Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in

                    </li>
                    <li>
                        Uploaded files will be deleted automatically after
                        <strong>5 minutes or less</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>