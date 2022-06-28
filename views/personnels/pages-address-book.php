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
                <li><a href="#">Pages</a></li>
                <li class="active">Address Book</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-users"></span> Address Book <small>139 contacts</small></h2>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Use search to find contacts. You can search by: name, address, phone. Or use the advanced search.</p>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="fa fa-search"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Who are you looking for?" />
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="fa fa-plus"></span>
                                                Ajouter un nouvel utilisateur
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user3.jpg" alt="Nadia Ali" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Nadia Ali</div>
                                    <div class="profile-data-title">Singer-Songwriter</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(555) 555-55-55</p>
                                    <p><small>Email</small><br />nadiaali@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user.jpg" alt="Dmitry Ivaniuk" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Dmitry Ivaniuk</div>
                                    <div class="profile-data-title">Web Developer / UI/UX Designer</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(333) 333-33-22</p>
                                    <p><small>Email</small><br />dmitry@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user2.jpg" alt="John Doe" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">John Doe</div>
                                    <div class="profile-data-title">Web Developer/Designer</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(234) 567-89-12</p>
                                    <p><small>Email</small><br />john@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user4.jpg" alt="Brad Pitt" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Brad Pitt</div>
                                    <div class="profile-data-title">Actor and Film Producer</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(321) 777-55-11</p>
                                    <p><small>Email</small><br />brad@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user5.jpg" alt="John Travolta" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">John Travolta</div>
                                    <div class="profile-data-title">Actor</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(111) 222-33-78</p>
                                    <p><small>Email</small><br />travolta@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user6.jpg" alt="Darth Vader" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Darth Vader</div>
                                    <div class="profile-data-title">Cyborg</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(000) 000-00-01</p>
                                    <p><small>Email</small><br />vader@domain.com</p>
                                    <p><small>Address</small><br />Somewhere deep in space</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/user7.jpg" alt="Samuel Leroy Jackson" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Samuel Leroy Jackson</div>
                                    <div class="profile-data-title">Actor and film producer</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(552) 221-23-25</p>
                                    <p><small>Email</small><br />samuel@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                    <div class="col-md-3">
                        <!-- CONTACT ITEM -->
                        <div class="panel panel-default">
                            <div class="panel-body profile">
                                <div class="profile-image">
                                    <img src="assets/images/users/no-image.jpg" alt="Samuel Leroy Jackson" />
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">Alex Sonar</div>
                                    <div class="profile-data-title">Designer</div>
                                </div>
                                <div class="profile-controls">
                                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    <a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="contact-info">
                                    <p><small>Mobile</small><br />(213) 428-74-13</p>
                                    <p><small>Email</small><br />alex@domain.com</p>
                                    <p><small>Address</small><br />123 45 Street San Francisco, CA, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- END CONTACT ITEM -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Personnel</h5>
                </div>
                <div class="modal-body">
                    <form id="jvalidate" method="POST" role="form" class="form-horizontal" action="?section=Personnel&amp;page=Inscription&amp;action=nouveau">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nom et prenom:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nomPrenom" />
                                    <!-- <span class="help-block">min size = 2, max size = 8</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">E-mail:</label>
                                <div class="col-md-9">
                                    <input type="text" value="" name="email" class="form-control" />
                                    <!-- <span class="help-block">required email</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password:</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" id="password2" />
                                    <!-- <span class="help-block">min size = 5, max size = 10</span> -->
                                    <span class="help-block">
                                        Doit être un minimum de 8 caractères <br>
                                        Doit contenir au moins 1 chiffre <br>
                                        Doit contenir au moins un caractère majuscule <br>
                                        Doit contenir au moins un caractère minuscule
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Confirm Password:</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="re-password" />
                                    <!-- <span class="help-block">required same value as Password</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Telephone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="telephone" />
                                    <!-- <span class="help-block">min size = 10, max size = 10</span> -->
                                    <span class="help-block">
                                        Doit debut par 00225 <br>
                                        Suivi de 01 ou 05 ou 07 <br>
                                        Doit egal à 15 chiffres <br>
                                        Sans espace
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Numero de votre piece d'identite:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="numeroCni" />
                                    <!-- <span class="help-block">min size = 18, max size = 100</span> -->
                                    <span class="help-block">
                                        Doit avoir 3 caractere en miniscule <br>
                                        Suivi de 3 chiffre <br>
                                        sans espace
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date de naissance</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control datepicker" name="dateNaissance" />
                                    <!-- <span class="help-block">required date</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Profile</label>
                                <div class="col-md-9">
                                    <select class="form-control select">
                                        <?php foreach ($infos as $profile) :  ?>
                                            <option><?=$profile->titre_pp?></option>>
                                        <?php endforeach ?>
                                    </select>
                                    <!-- <span class="help-block">required date</span> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Photo de la Cni</label>
                                <div class="col-md-9">
                                    <input type="file" class="file-input file-input-new" class="form-control" name="photoCni" />
                                    <!-- <span class="help-block">min size = 18, max size = 100</span> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Avatar</label>
                                <div class="col-md-9">
                                    <input type="file" class="file-input file-input-new" class="form-control" name="avatar" />
                                    <!-- <span class="help-block">min size = 18, max size = 100</span> -->
                                </div>
                            </div>

                            <div class="btn-group pull-right modal-footer">
                                <!-- <button class="btn btn-primary" type="button" onClick="jvalidate.resetForm();$('#gender').next('.bootstrap-select').removeClass('error').removeClass('valid')">Hide prompts</button> -->
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>