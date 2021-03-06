
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php include('views/includes/menuGauche.php') ?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <?php include('views/includes/menuHaut.php') ?>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Basic</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-arrow-circle-o-left"></span>CATEGORIES</h2>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-xs-12">
                        <!-- START BORDERED TABLE SAMPLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Liste des categories des chambres</h3>
                                <button type="button" class="btn btn-info btn-rounded pull-right" data-toggle="modal" data-target="#exampleModalCenter">
                                    Ajouter une categorie de chambres
                                </button>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">titre</th>
                                            <th class="text-center">options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($infos as $k=>$profile) : ?>
                                        <tr class="text-center">
                                            <td><?=$k?></td>
                                            <td><?=$profile->titre_pp?></td>
                                            <td>
                                                <button class="btn btn-rounded btn-default">
                                                    <a href="?section=Profile&amp;page=Modification&amp;action=modifier&amp;id=<?=$profile->id_pp?>" class="fa fa-pencil"></a>
                                                </button>
                                                <button class="btn btn-rounded btn-danger">
                                                    <a href="?section=Profile&amp;page=Suppression&amp;action=supprimer&amp;id=<?=$profile->id_pp?>" onclick="return confirm('Voulez-vous vraiment supprimer ce profile ?')" class="fa fa-times text-danger"></a>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BORDERED TABLE SAMPLE -->
                    </div>






                    <!-- END PAGE CONTENT WRAPPER -->
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter <b>nouvelle categorie de chambres</b> </h5>
                            </div>
                            <div class="modal-body">
                                <form action="?section=CategoriesChambre&amp;page=Inscription&amp;action=ajouter" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="categoriesChambre" placeholder="Enter la categorie de chambre">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-rounded btn-danger ">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->