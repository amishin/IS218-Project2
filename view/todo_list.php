<?php include '../view/header.php'; ?>
<body>

    <div class = "container"> 

        <h2><?php echo "Welcome, " . $username; ?></h2>


        <h1>To-Do Items</h1>

        <table>
            <tr>
                <th> Start Date </th>
                <th> Message </th>
                <th> Due Date </th>
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>
            <?php foreach ($items as $item) : ?>
                <?php if($item['isdone'] == 0) :?>
                    <tr>
                        <td><?php echo date('d-m-Y', strtotime($item['createddate'])); ?></td>
                        <td><?php echo $item['message']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($item['duedate'])); ?></td>

                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                value="delete_item">
                            <input type="hidden" name="id"
                                value="<?php echo $item['id']; ?>">
                            <input type="submit" class = "table_button" value="Delete">
                        </form></td>

                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                value="complete_item">
                            <input type="hidden" name="id"
                                value="<?php echo $item['id']; ?>">
                            <input type="submit" class = "table_button"  value="Completed">
                        </form></td>

                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                value="show_edit_form">
                            <input type="hidden" name="id"
                                value="<?php echo $item['id']; ?>">
                            <input type="submit" class = "table_button"  value="Edit">
                        </form></td>

                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>

        </table>

        <div class = "add"><a href="?action=show_add_form">Add Item</a></div>

       <h1>Completed Items</h1>

       <table>
            <tr>
                <th> Start Date </th>
                <th> Message </th>
                <th> Due Date </th>
                <th> </th>
                <th> </th>
            </tr>
            <?php foreach ($items as $item) : ?>
                <?php if($item['isdone'] == 1) :?>
                    <tr>
                        <td><?php echo date('d-m-Y', strtotime($item['createddate'])); ?></td>
                        <td><?php echo $item['message']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($item['duedate'])); ?></td>

                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                value="delete_item">
                            <input type="hidden" name="id"
                                value="<?php echo $item['id']; ?>">
                            <input type="submit" class = "table_button" value="Delete">
                        </form></td>

                        <td><form action="." method="post">
                            <input type="hidden" name="action"
                                value="show_edit_form">
                            <input type="hidden" name="id"
                                value="<?php echo $item['id']; ?>">
                            <input type="submit" class = "table_button" value="Edit">
                        </form></td>

                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
        <div class = "add"><a href = logout.php> Sign Out </a></div>
    </div>

</body>
<?php include '../view/footer.php'; ?>