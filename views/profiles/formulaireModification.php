<body>
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
                <h2><span class="fa fa-arrow-circle-o-left"></span>MODIFICATION DE PROFILES</h2>
            </div>
            <div class="page-content-wrap">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"> PROFILES</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row mt">
                                <div class="col-lg-12">
                                    <div class="form-panel">
                                        <div class=" form">
                                            <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="index.php?section=Profile&amp;page=Modification&amp;action=modifier">
                                                <div class="form-group ">
                                                    <input  type="hidden" value="<?=$id?>" name="id" />
                                                    <div class="col-lg-10">
                                                        <input class=" form-control" name="profile" type="text" value="<?= $titre ?>" required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-danger" onclick="return confirm('Attention votre profile sera modfier')" type="submit">Save</button>
                                                        <a href="index.php?section=Profile" class="btn btn-info">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /form-panel -->
                                </div>
                                <!-- /col-lg-12 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>