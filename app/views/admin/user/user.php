<div class="container">
<a href="<?=BASEURLS;?>/forms_admins/createuser" class="btn btn-flat btn-primary" style="margin-bottom: 12px;">TAMBAH</a>
            <div class="card mt-5">
                <div class="card-header text-center">
                    Daftar User
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php require 'app/core/function.php';
$data = mysqli_query($conn,"SELECT * FROM users");
 foreach($data as $dt) : ?>
                            <tr>

                                <td><?= $dt['name'];?></td>
                                <td><?= $dt['email'];?></td>
                                <td><?= $dt['password'];?></td>
<td>                    
                                    <a href="<?=BASEURLS;?>/forms_admins/user/edit/<?= $dt['id'];?>" class="btn btn-warning">Edit</a>
                                    <a href="<?=BASEURLS;?>/forms_admins/user/deleteuser/<?= $dt['id'];?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                           <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>