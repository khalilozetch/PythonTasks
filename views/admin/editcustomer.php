
<html>
    <head>
        <title>Displaying MySQL Data in HTML Table</title>
        <style type="text/css">
            body {
                font-size: 15px;
                color: #343d44;
                font-family: "segoe-ui", "open-sans", tahoma, arial;
                padding: 0;
                margin: 0;
            }
            table {
                margin: auto;
                font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
                font-size: 12px;
            }

            h1 {
                margin: 25px auto 0;
                text-align: center;
                text-transform: uppercase;
                font-size: 17px;
            }

            table td {
                transition: all .5s;
            }

            /* Table */
            .data-table {
                border-collapse: collapse;
                font-size: 14px;
                min-width: 537px;
            }

            .data-table th, 
            .data-table td {
                border: 1px solid #e1edff;
                padding: 7px 17px;
            }
            .data-table caption {
                margin: 7px;
            }

            /* Table Header */
            .data-table thead th {
                background-color: #508abb;
                color: #FFFFFF;
                border-color: #6ea1cc !important;
                text-transform: uppercase;
            }

            /* Table Body */
            .data-table tbody td {
                color: #353535;
            }
            .data-table tbody td:first-child,
            .data-table tbody td:nth-child(4),
            .data-table tbody td:last-child {
                text-align: right;
            }

            .data-table tbody tr:nth-child(odd) td {
                background-color: #f4fbff;
            }
            .data-table tbody tr:hover td {
                background-color: #ffffa2;
                border-color: #ffff0f;
            }

            /* Table Footer */
            .data-table tfoot th {
                background-color: #e5f5ff;
                text-align: right;
            }
            .data-table tfoot th:first-child {
                text-align: left;
            }
            .data-table tbody td:empty
            {
                background-color: #ffcccc;
            }
        </style>
    </head>
    <body>
        <h1>Table 1</h1>
        <table class="data-table">
            <caption class="title">customer table</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../model/admin/UDModel.php';

                $row = new editCustomer();
                $arrData = $row->selectData();

                foreach ($arrData as $arr) {
                    //`customer_id`, `c_name`, `password`, `c_email`, `c_address`, `c_phone`
                    ?>

                    <tr>
                        <td> <?php echo $arr['customer_id']; ?></td>
                        <td> <?php echo $arr['c_name']; ?></td>
                        <td> <?php echo $arr['password']; ?></td>
                        <td> <?php echo $arr['c_email']; ?></td>
                        <td> <?php echo $arr['c_address']; ?></td>
                        <td> <?php echo $arr['c_phone']; ?></td>
                        <td><a href="edit.php?edit=1 &employee_id=<?php echo $arr['employee_id']; ?>" /> EDIT</td>
                        <td><a href="#" employee_id="<?php echo $arr['employee_id']; ?>"/> delete</td>

                    </tr>
                <?php } ?>




            </tbody>

        </table>
    </body>
</ht
