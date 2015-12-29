<form action="offspring.php" method="post" id="offspring" onsubmit="return checkValid()">
        <div class="row">
            <div class="form-inline col-xs-4 col-xs-offset-5" style="margin-top: 20px;">
                <label for="inhrtType">Inheritance Type:</label>
                <select class="form-control" id="inhrtType" name="inhrtType" data-target="#inhrtTypes">
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
                        <span class="input-group-addon" id="basic-addon1">Dominant Allele</span>
                        <input type="text" class="form-control" name="dAl" id="dAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-3 reg hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Recessive Allele</span>
                        <input type="text" class="form-control" name="rAl" id="rAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <!--Phenotypes-->
                <div class="col-xs-6 reg hide">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous Dominant Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Dom Phenotype</span>
                        <input type="text" class="form-control" name="homod" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-xs-6 reg hide">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous Recessive Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Rec Phenotype</span>
                        <input type="text" class="form-control" name="homor" aria-describedby="basic-addon1">
                    </div>
                </div>
                <!--Incomplete Dominance-->
                <!--Alleles-->
                <div class="col-xs-offset-2 col-xs-3 incmplt hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Allele 1</span>
                        <input type="text" class="form-control" name="al1" id="al1" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-3 incmplt hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Allele 2</span>
                        <input type="text" class="form-control" name="al2" id="al2" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <!--Phenotypes-->
                <div class="col-xs-4 incmplt hide">
                    <div class="input-group input-group-special">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous 1 Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Homo1 Phenotype</span>
                        <input type="text" class="form-control type-special" name="homo1" aria-describedby="basic-addon1" placeholder="Must be phenotype of homozygous Allele 1">
                    </div>
                </div>
                <div class="col-xs-4 incmplt hide">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Heterozygous Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Hetero Phenotype</span>
                        <input type="text" class="form-control" name="hetero" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-xs-4 incmplt hide">
                    <div class="input-group input-group-special">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous 2 Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Homo2 Phenotype</span>
                        <input type="text" class="form-control type-special" name="homo2" aria-describedby="basic-addon1" placeholder="Must be phenotype of homozygous Allele 2">
                    </div>
                </div>
                <!--Codominance-->
                <!--Alleles-->
                <div class="col-xs-offset-3 col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 1</span> 
                        <span class="input-group-addon desc-small" id="basic-addon1">Al1</span>
                        <input type="text" class="form-control" name="coAl1" id="coAl1" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Allele 2</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Al2</span>
                        <input type="text" class="form-control" name="coAl2" id="coAl2" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <div class="col-xs-2 co hide" style="margin-bottom: 15px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Recessive Allele</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Rec Al</span>
                        <input type="text" class="form-control" name="recAl" id="coRAl" aria-describedby="basic-addon1" maxlength = 1>
                    </div>
                </div>
                <!--Phenotypes-->
                <div class="col-xs-5 col-xs-offset-1 hide co">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous 1 Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Homo1 Phen.</span>
                        <input type="text" class="form-control" name="coHomo1" aria-describedby="basic-addon1" placeholder="Must be phenotype of homozygous Allele 1">
                    </div>
                </div>
                <div class="col-xs-5 hide co">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Heterozygous Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Hetero Phen.</span>
                        <input type="text" class="form-control" name="coHetero" aria-describedby="basic-addon1" placeholder="Must be phenotype of heterozygous Allele 1 and Allele 2">
                    </div>
                </div>
                <div class="col-xs-5 col-xs-offset-1 hide co" style="margin-top: 20px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous 2 Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Homo2 Phen.</span>
                        <input type="text" class="form-control" name="coHomo2" aria-describedby="basic-addon1" placeholder="Must be phenotype of homozygous Allele 2">
                    </div>
                </div>
                <div class="col-xs-5 hide co" style="margin-top: 20px;">
                    <div class="input-group">
                        <span class="input-group-addon desc-big" id="basic-addon1">Homozygous Recessive Phenotype</span>
                        <span class="input-group-addon desc-small" id="basic-addon1">Rec Phen.</span>
                        <input type="text" class="form-control" name="coHomor" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
        </div>
        <hr>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-5 form-inline">
                            <label for="name" class="control-label" style="margin-right: 10px;">Name</label>
                            <input autofocus class="form-control" name="name" id="name" placeholder="Name of Offspring" type="text"/>
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
                <h2 class="text-center">Parent 1</h2>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4 parent-1">
                        <input autofocus class="form-control parent1 box" name="parent1-1" class="parent1" id="parent1-1" placeholder="Allele 1" type="text" maxlength = 1/>
                    </div>
                    <div class="col-xs-4 col-xs-offset-4 parent-1" style="padding-bottom: 50px;">
                        <input autofocus class="form-control parent1 box" name="parent1-2" class="parent1" id="parent1-2" placeholder="Allele 2" type="text" maxlength = 1/>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <h2 class="text-center">Parent 2</h2>
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-2 parent-1">
                        <input autofocus class="form-control parent1 box" name="parent2-1" class="parent1" id="parent2-1" placeholder="Allele 1" type="text" maxlength = 1/>
                    </div>
                    <div class="col-xs-4 parent-1">
                        <input autofocus class="form-control parent1 box" name="parent2-2" class="parent1" id="parent2-2" placeholder="Allele 2" type="text" maxlength = 1/>
                    </div>
                </div>
            </div>
        </div>
	<button type="submit" class="btn btn-default center-block">Submit!</button>
        </form>
	<div class="allelesNotValid" class="center-block">
		<h3 class="text-center text-danger"> The alleles don't match/the same letter is used to identify 2+ alleles!</h3>
	</div>
