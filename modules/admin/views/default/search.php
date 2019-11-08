<?php
/**
 * Created by PhpStorm.
 * User: Lord
 * Date: 19.06.2019
 * Time: 23:37
 */
?>

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<!-- Page content -->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card bg-gradient-lighter">
                <div class="card-body">
                    <!-- Chart -->
                    <div class="col-xl-12 mb-5 mb-xl-0">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Deklaratsiyalar <smal>(<?=sizeof($model)?>)</smal></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">FIO</th>
                                        <th scope="col">Tartib</th>
                                        <th scope="col">Vaqt</th>
                                        <th scope="col">Holat</th>
                                        <th scope="col">Amal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?if(!sizeof($model))
                                        echo '<th>Natija topilmadi</th>';
                                    foreach ($model as $item){?>
                                        <tr>
                                            <td scope="row">
                                                <?=$item->familiya.' '.$item->ism.' '.$item->sharif?>
                                            </td>
                                            <td>
                                                <?=$item->qaysi_tartib?>
                                            </td>
                                            <td>
                                                <?=$item->vaqt?>
                                            </td>
                                            <td>
                                                <?=$item->status?>
                                            </td>
                                            <td>
                                                <a href="<?= Yii::$app->urlManager->createUrl(['/admin/dalolatnoma/view', 'id' => $item->id]) ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    <?}?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2019 <a href="http://www.ubtuit.uz/" class="font-weight-bold ml-1" target="_blank">UBTUIT</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="http://www.ubtuit.uz/" class="nav-link" target="_blank">Ushbu veb sahifa TATU Urganch filiali talabasi tomonidan yaratildi</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>



