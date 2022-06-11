<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="src/jquery.typeahead.css">

    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <!--script src="../dist/jquery.typeahead.min.js"></script-->
    <script src="src/jquery.typeahead.js"></script>

</head>
<body>

<div style="width: 100%; max-width: 800px; margin: 0 auto;">

    <h1>Country_v2 Demo</h1>

    <ul>
        <li>
            <a href="http://www.runningcoder.org/jquerytypeahead/documentation/">Documentation</a>
        </li>
        <li>
            <a href="http://www.runningcoder.org/jquerytypeahead/demo/">Demos</a>
        </li>
    </ul>

    <div class="js-result-container"></div>

    <form id="form-car_v1" name="form-car_v1">
    <div class="typeahead__container">
        <div class="typeahead__field">
            <div class="typeahead__query">
                <input class="js-typeahead-car_v1" name="car_v1[query]" placeholder="Search" autocomplete="off">
            </div>
            <div class="typeahead__button">
                <button type="submit">
                    <i class="typeahead__search-icon"></i>
                </button>
            </div>
        </div>
    </div>
</form>

    <script>

        $.typeahead({
    input: '.js-typeahead-car_v1',
    minLength: 1,
    order: "asc",
    offset: true,
    hint: true,
    source: {
        car: {
            data: ["My first added brand", "M1 added brand at start"],
            ajax: {
                type: "POST",
                url: "json.php",
                data: {
                    myKey: "myValue"
                }
            }
        }
    },
    callback: {
        onClick: function (node, a, item, event) {
 
            console.log(node)
            console.log(a)
            console.log(item)
            console.log(event)
 
            console.log('onClick function triggered');
 
        },
        onSubmit: function (node, form, item, event) {
 
            console.log(node)
            console.log(form)
            console.log(item)
            console.log(event)
 
            console.log('onSubmit override function triggered');
 
        }
    }
});

    </script>

</div>

</body>
</html>
