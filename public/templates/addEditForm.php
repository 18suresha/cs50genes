        <div class="row"><div class="col-sm-8 col-sm-offset-2">
            <h3 class="text-center" style="line-height: 30px;">You can either edit or add a member. If you type in an already-used name, that person's information will be edited. If you type in a new name, a new member will be added with his/her's information.</h3></div></div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-6 col-sm-offset-4">
        <form action="addEdit.php" class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Full Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-4">
                    <select class="form-control" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Age</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Age | Integers Only" pattern="[0-9]{1,3}" name="age">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Relationship</label>
                <div class="col-sm-4">
                    <select class="form-control" name="rel">
                        <option value="Spouse">Spouse</option>
                        <option value="Son">Son</option>
                        <option value="Daughter">Daughter</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-default">Edit/Register</button>
                </div>
            </div>
        </form>
        </div>
        </div>
