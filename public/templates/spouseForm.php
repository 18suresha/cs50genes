<form action="spouse.php" id="spouse" method="post">
        <div class="row">
            <div class="form-inline col-xs-4 col-xs-offset-5" style="margin-top: 20px;">
                <label for="inhrtType">Inheritance Type:</label>
                <select class="form-control" id="sinhrtType" name="inhrtType" data-target="#inhrtTypes">
                    <option value="">Select an Inheritance Type...</option>
                    <option value="reg" data-show=".reg">Mendelian</option>
                    <option value="incmplt" data-show=".incmplt">Incomplete Dominance</option>
                    <option value="co" data-show=".co">Codominance</option>
                </select>
                <br>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div id="inhrtTypes">
                <!--Regular Inheritance-->
                <!--Alleles-->
                <div class="col-xs-offset-2 col-xs-3 reg hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Dominant Allele</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Dom Al</span>
                        <input type="text" class="form-control" name="dAl" id="sdAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-3 reg hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Recessive Allele</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Rec Al</span>
                        <input type="text" class="form-control" name="rAl" id="srAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <!--Incomplete Dominance-->
                <!--Alleles-->
                <div class="col-xs-offset-2 col-xs-3 incmplt hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 1</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Al1</span>
                        <input type="text" class="form-control" name="al1" id="sal1" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-3 incmplt hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 2</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Al2</span>
                        <input type="text" class="form-control" name="al2" id="sal2" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <!--Codominance-->
                <!--Alleles-->
                <div class="col-xs-offset-3 col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 1</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Al1</span>
                        <input type="text" class="form-control" name="cal1" id="scoAl1" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 2</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Al2</span>
                        <input type="text" class="form-control" name="cal2" id="scoAl2" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Recessive Allele</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Rec Al</span>
                        <input type="text" class="form-control" name="recAl" id="scoRAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
            </div>
        </div>
        <hr>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-5 form-inline">
                            <label for="name" class="control-label" style="margin-right: 10px;">Name</label>
                            <input autofocus class="form-control" name="name" id="name" placeholder="Name of Spouse" type="text"/>
                </div>
            </div>
	    <div class="checkbox col-xs-6 col-xs-offset-4 form-inline">
    		<label>
      			 <input type="checkbox" name="emailyn"> Would you like to send an email of the results? - 
    		</label>
		<input autofocus class="form-control" name="email" id="email" placeholder="Email" type="text"/>
  	    </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-xs-6">
                <h2 class="text-center">Parent</h2>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 parent-1">
                        <input autofocus class="form-control parent1 box" name="parent-1" id="parent-1" placeholder="Allele 1" type="text" maxlength = 1/>
                    </div>
                    <div class="col-xs-4 col-xs-offset-4 parent-1" style="padding-bottom: 50px;">
                        <input autofocus class="form-control parent1 box" name="parent-2" id="parent-2" placeholder="Allele 2" type="text" maxlength = 1/>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <h2 class="text-center">Child</h2>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-2 parent-1">
                        <input autofocus class="form-control parent1 box" name="child-1" id="child-1" placeholder="Allele 1" type="text" maxlength = 1/>
                    </div>
                    <div class="col-xs-4 parent-1">
                        <input autofocus class="form-control parent1 box" name="child-2" id="child-2" placeholder="Allele 2" type="text" maxlength = 1/>
                    </div>
                </div>
            </div>
        </div>
	<button type="submit" class="btn btn-default center-block">Submit!</button>
        </form>
	<div class="allelesNotValid" class="center-block">
		<h3 class="text-center text-danger"> The alleles don't match/the same letter is used to identify 2+ alleles!</h3>
	</div>
