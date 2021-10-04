<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Typeahead JS Live Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="">
                    <h1 class="text-dark">Typeahead JS Live Search</h1>

                    <input type="text" name="user_name" id="user_name" class="form-control-lg"
                        placeholder="Enter User Name..." />
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    var path = "{{ url('autocomplete-search-query') }}";

    $('#user_name').typeahead({

        source: function(query, process) {

            return $.get(path, {
                query: query
            }, function(data) {

                return process(data);

            });

        }

    });
</script>
