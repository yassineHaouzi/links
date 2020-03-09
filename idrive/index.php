<!DOCTYPE html>
<html>
<head>
    <title>Reporting App</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="row">

        <div class="col-8">
            <button class="btn btn-link link" name="idrive">Idrive</button>
        </div>
    </div>
</div>

<script>
    // Add the following code if you want the name of the file appear on select

    $(function () {

        $('.link').on('click', function () {

                var sponsor = $(this).attr('name');

                $.ajax({
                    url: 'php/acc.php', // point to server-side PHP script
                    type: 'POST',
                    data: "sponsor=" + sponsor,
                    success: function (res) {
                        console.log(res)
                    },
                    error:function (err) {
                        console.log(err)
                    }
                });
        });

    })

</script>


</body>
</html>