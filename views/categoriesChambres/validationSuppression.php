        <div class="text-center">
            <h1>ATTENTION!!</h1>
            <span class="alert alert-danger"><i>Votre action est irreversible</i></span>
            <div class="error-text text-danger">Veuillez sasir le mot de passe du super administrateur</div>
            <div class="error-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <form action="?section=profile&amp;page=suppression&action=supprimer" method="post">
                                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                            <div class="form-group">
                                <input type="password" class="form-control" name="passwordSuperAdmin" placeholder="Enter le mot de passe">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  name="re-passwordSuperAdmin" placeholder="Confirmer le mot de passe">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-rounded btn-danger ">Supprimer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>