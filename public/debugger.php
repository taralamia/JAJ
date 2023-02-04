<!DOCTYPE html>
<html>

<head>
<title>JAJ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS-->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/debugger.css">
</head>

<body>

    <!--Navigation Section-->

    <?php include './View/partials/header.php'; ?>

    <!--End of Navigation Section-->
    <div class="container-fluid">
        <div class="row main">
            <div class="col-md-8 left-column">

                <div class="problem-details">
                    <form id="submit-form">

                        <h4>Select Language</h4>

                        <select name="language" class="form-control">
                            <option value="54">C++ (GCC 9.2.0)</option>
                            <option value="62">Java (OpenJDK 13.0.1)</option>
                            <option value="71">Python (3.8.1)</option>
                        </select>

                        <h4>Source Code</h4>
                        <textarea name="sourceCode" class="form-control code-editor"></textarea>


                    </form>
                </div>

            </div>
            <div class="col-md-4 right-column">
                <form id="submit-form">



                    <div class="test-cases">

                        <h4>Test Cases</h4>

                        <div class="form-group">

                            <label>Input Test Case</label>
                            <textarea name="testCase" class="form-control "></textarea>

                        </div>
                        <div class="form-group">

                            <label>Expected Output</label>
                            <textarea name="expectedOutput" class="form-control "></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>



                    </div>
                </form>
                <iframe name="submit-iframe" style="display: none;"></iframe>

            </div>
        </div>
    </div>

    <script>
        const submitForm = document.querySelector('#submit-form');
        submitForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(submitForm);
            fetch('./Controller/submission.php', {
                    method: 'post',
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    alert(result);

                });
        });
    </script>


</body>

</html>