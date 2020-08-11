<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/tree-list-bootstrap/dist/css/bstreeview.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/styles/layout.css">

    <script src="<?= base_url() ?>/assets/jquery/dist/jquery.slim.min.js"></script>
    <script src="<?= base_url()?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/tree-list-bootstrap/dist/js/bstreeview.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"> Web App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="row">
        <sidebar class="sidebar col-2">
            <div id="tree">
            </div>
        </sidebar>
        <div class="container main-container">
            <div class="main">
                <div class="col"></div>
            </div>
        </div>
    </div>
</body>


</html>


<script>
    $(function () {
        let json2 = `[
            {
                "text" : "Menu 1",
                "icon" : "fa fa-folder",
                "nodes" : [
                    { 
                        "text" : "Menu 1  A", 
                        "icon" : "fa fa-folder",
                        "nodes" : [
                            {
                                "text" : "Menu 1 AA",
                                "icon" : "fa fa-folder"
                            }
                        ]
                    },
                    {
                        "text" : "Menu 1 B",
                        "icon" : "fa fa-folder",
                        "nodes": [
                            {
                                "text" : "Menu 1 BB",
                                "icon" : "fa fa-folder"
                            }
                        ]
                    }
                ]
            },
            {
                "text" : "Menu 2" , 
                "icon" : "fa fa-folder"
            }
        ]`
        console.log(json2);

        $('#tree').bstreeview({
            data: json2
        });

        console.log(json);
    });
</script>