<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kişiler Listesi</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>


   <div class="container">
       <h3 class="text-center" style="margin-top: 20px;">Kişiler Listesi</h3>
       <hr>
       <table class="table table-striped table-hover table-bordered">
           <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Exam 1</th>
           <th>Exam 2</th>
           <th>Exam 3</th>
           <th>Exam 4</th>
           <th>Exam 5</th>
           <th>Exam 6</th>
           <th>Exam 7</th>
           <th>Exam 8</th>
           <th>Operation</th>
           </thead>
           <tbody>
                <?php foreach ($list as $row) { ?>
                    <tr>
                        <td><?= $row->id; ?></td>
                        <td><?= $row->name_surname; ?></td>
                        <td><?= $row->exam1; ?></td>
                        <td><?= $row->exam2; ?></td>
                        <td><?= $row->exam3; ?></td>
                        <td><?= $row->exam4; ?></td>
                        <td><?= $row->exam5; ?></td>
                        <td><?= $row->exam6; ?></td>
                        <td><?= $row->exam7; ?></td>
                        <td><?= $row->exam8; ?></td>
                        <td>
                            <a class="btn btn-primary btn-sm"  href="<?= base_url("Person/pdf_form/$row->id/$row->name_surname"); ?>">PDF</a>
                        </td>
                    </tr>
                <?php } ?>
           </tbody>
       </table>



   </div>

</body>
</html>