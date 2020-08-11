<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Testing Product </title>
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
            <div class="main mt-3 pt-3">
                <h4> Product List</h4>
                <button type="button" class="btn btn-sm btn-success mb-2" data-toggle="modal"
                    data-target="#modalAddProduct">
                    Add New
                </button>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Product Name </th>
                            <th> Price </th>
                            <th> Category </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $row) : ?>
                        <tr>
                            <td class="small">
                                <?= $row->product_name; ?>
                            </td>
                            <td class="small">
                                <?= $row->product_price; ?>
                            </td>
                            <td class="small">
                                <?= $row->category_name; ?>
                            </td>
                            <td class="small">
                                <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->product_id; ?>"
                                    data-name="<?= $row->product_name; ?>" data-price="<?= $row->product_price; ?>"
                                    data-category="<?= $row->product_category_id; ?>"> Edit </a>
                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->product_id; ?>"
                                    data-name="<?= $row->product_name; ?>">
                                    Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <form action="/product/save" method="post">
        <div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#exampleModalLabel"> Add New Product </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true"> &times; </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Product Name"> Product Name </label>
                            <input type="text" name="product_name" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="Product Price"> Product Price </label>
                            <input type="text" name="product_price" id="" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="Product Category"> Product Category </label>
                            <select name="product_category" id="" class="form-control form-control-sm">
                                <option value=""> -- Select -- </option>
                                <?php foreach($category as $row) : ?>
                                <option value="<?= $row->category_id?>"> <?= $row->category_name?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"> Close </button>
                            <button type="submit" class="btn btn-sm btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End of Modal Add Product -->

    <!--  Modal Edit Product -->
    <form action="/product/update" method="post">
        <div class="modal fade" id="modalEditProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#exampleModalLabel"> Add New Product </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true"> &times; </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="product_id" id="" class="form-control form-control-sm product_id"
                                type="hidden">
                            <label for="Product Name"> Product Name </label>
                            <input type="text" name="product_name" id=""
                                class="form-control form-control-sm product_name">
                        </div>
                        <div class="form-group">
                            <label for="Product Price"> Product Price </label>
                            <input type="text" name="product_price" id=""
                                class="form-control form-control-sm product_price">
                        </div>
                        <div class="form-group">
                            <label for="Product Category"> Product Category </label>
                            <select name="product_category" id="" class="form-control form-control-sm category">
                                <option value=""> -- Select -- </option>
                                <?php foreach($category as $row) : ?>
                                <option value="<?= $row->category_id?>"> <?= $row->category_name?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"> Close </button>
                            <button type="submit" class="btn btn-sm btn-success"> Update </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End of Modal Edit Product -->

    <!-- Modal Delete Product -->
    <form action="/product/delete" method="post">
        <div class="modal fade" id="modalDeleteProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#exampleModalLabel"> Add New Product </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span
                                aria-hidden="true"> &times; </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="display-5"> Are you sure want to delete <span class="this">this</span> product ?</p>
                        <input type="hidden" name="product_id" class="form-control form-control-sm product_id">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"> Close </button>
                            <button type="submit" class="btn btn-sm btn-success"> Delete </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End of Modal Delete Product -->
</body>


</html>

<!-- Render Sidebar Menu -->
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
        ]`;

        $('#tree').bstreeview({
            data: json2
        });
    });
</script>
<!-- End of Render Sidebar Menu -->

<!-- Render Modal Edit and Modal Delete -->
<script>
    $(document).ready(function () {
        $('.btn-edit').on('click', function () {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const price = $(this).data('price');
            const category = $(this).data('category');

            $('.product_id').val(id);
            $('.product_name').val(name);
            $('.product_price').val(price);
            $('.category').val(category);

            $('#modalEditProduct').modal('show');
        });

        $('.btn-delete').on('click', function () {
            const id = $(this).data('id');

            $('.product_id').val(id);

            $('#modalDeleteProduct').modal('show');;
        })
    });
</script>
<!-- End of Render Modal Edit and Modal Delete -->