<h1>Notifications (setFlash Symfony)</h1>

<div class="alert fade in alert-success">
    <a class="close" data-dismiss="alert" href="#">×</a>
    <strong>Notice !</strong> Vous avez réussi à lire ce message.
</div>
<div class="alert fade in alert-error">
    <a class="close" data-dismiss="alert" href="#">×</a>
    <strong>Notice_error !</strong> Changez ça et ça et reessayez.
</div>
<div class="alert fade in alert-info">
    <a class="close" data-dismiss="alert" href="#">×</a>
    <strong>Notice_information !</strong> Ce texte attire votre attention sur quelque chose.
</div>

<h1>Breadcrumb (Fil d'ariane)</h1>
<p>
    Pour générer un Breadcrumb sous Symfony, essayez un de ces <a href="http://www.symfony-project.org/plugins/filter?filter%5Bsf_1_0%5D=on&filter%5Bsf_1_1%5D=on&filter%5Bsf_1_2%5D=on&filter%5Bsf_1_3%5D=on&filter%5Bsf_1_4%5D=on&filter%5Bpropel%5D=on&filter%5Bdoctrine%5D=on&filter%5Bcategory_id%5D=&filter%5Bname%5D=breadcrumb" target="blank">plugins</a>.
</p>
<ul class="breadcrumb">
	<li><a href="#">Home</a> <span class="divider">/</span></li>
	<li><a href="#">Library</a> <span class="divider">/</span></li>
	<li class="active">Data</li>
</ul>

<h1>DataTable (sortable par colonne)</h1>
<p>
    Pour les filtres par colonnes référez-vous au DOM. Il suffit d'ajouter la classe "with-filter" à la table. <br />Le reste de la configuration se fait dans la balise thead.
</p>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped with-filter bordered" id="example">
	<thead>
		<tr>
			<th class="input">Filter engines</th>
			<th class="input">Filter browsers</th>
			<th class="select">Filter Platform</th>
			<th class="select">Filter version</th>
			<th></th>
		</tr>
		<tr>
			<th>Rendering engine</th>
			<th>Browser</th>
			<th>Platform(s)</th>
			<th>Engine version</th>
			<th>CSS grade</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Trident</td>
			<td>Internet Explorer 4.0</td>
			<td>Win 95+</td>
			<td>4</td>
			<td>X</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Camino 1.0</td>
			<td>OSX.2+</td>
			<td>1.8</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.5</td>
			<td>Win 95+ / OSX.1+</td>
			<td>1.5</td>
			<td>A</td>
		</tr>
		<tr>
			<td>Gecko</td>
			<td>Mozilla 1.6</td>
			<td>Win 95+ / OSX.1+</td>
			<td>1.6</td>
			<td>A</td>
		</tr>
	</tbody>
</table>

<hr>

<h1>Form Symfony et gestion d'erreurs</h1>
<div class="alert alert-block alert-error fade in">
    <a class="close" data-dismiss="alert" href="#">×</a>
    <h4 class="alert-heading">Erreur(s)</h4>
    <ul>
        <li>Le login est requis.</li>
        <li>Confirmation du mot de passe requise.</li>
        <li>Les deux mots de passe ne correspondent pas</li>
    </ul>
</div>
<form action="action.php" method="post">
    <div class="control-group error">
        <label for="myform_username">Login</label>        
        <input type="text" value="" placeholder="Login" id="myform_username">
        <span class="help-inline">Le login est requis.</span>
    </div>
    <div class="control-group">
        <label for="myform_email">Email</label>        
        <input type="text" value="email@hotmail.com" placeholder="Email" id="myform_email">        
        <span class="help-inline"></span>
    </div>
    <div class="control-group">
        <label for="myform_birthdate">Date de naissance</label>        
        <div class="input-prepend">
            <span class="add-on"><i class="icon-calendar"></i></span>
            <input type="text" class="datepicker" placeholder="Date de naissance" id="myform_birthdate">
            <span class="help-inline"></span>
        </div>
    </div>
    <div class="control-group">
        <label for="myform_photo">Photo</label>        
        <input type="file" name="file" class="input-file" placeholder="Photo" id="myform_photo">        
        <span class="help-inline"></span>
    </div>
    <div class="control-group error">
        <label for="myform_password">Mot de passe</label>        
        <input type="password" placeholder="Mot de passe" id="myform_password">        
        <span class="help-inline">Les deux mots de passe ne correspondent pas</span>
    </div>
    <div class="control-group error">
        <label for="myform_password_confirm">Confirmation</label>        
        <input type="password" placeholder="Confirmation" id="myform_password_confirm">        
        <span class="help-inline">Confirmation du mot de passe requise.</span>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn">.btn</button>
        <button type="submit" class="btn btn-primary">.btn-primary</button>
        <button type="submit" class="btn btn-success">.btn-success</button>
        <button type="submit" class="btn btn-warning">.btn-warning</button>
        <button type="submit" class="btn btn-danger">.btn-danger</button>
        <button type="submit" class="btn btn-info">.btn-info</button>
        <button type="submit" class="btn btn-inverse">.btn-inverse</button>
    </div>
</form>    

<br clear="all" />
<br clear="all" />

<h1>Boutons et autres</h1>
<span class="label">.label</span>
<span class="label label-info">.label-info</span>
<span class="label label-success">.label-success</span>
<span class="label label-warning">.label-warning</span>
<span class="label label-important">.label-important</span>
<span class="label label-info">.label-info</span>

<br clear="all" />
<br clear="all" />

<div class="btn-group">
	<a class="btn" href="#">Left</a>
	<a class="btn" href="#">Middle</a>
	<a class="btn" href="#">Right</a>
</div>

<br clear="all" />

<div class="btn-group">
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="#">btn-primary</a></li>
		<li><a href="#">btn-danger</a></li>
		<li><a href="#">btn-success</a></li>
		<li class="divider"></li>
		<li><a href="#">btn-info</a></li>
	</ul>
</div>

<br clear="all" />

<a href="#" class="btn" rel="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">Bouton Popover</a>

<a class="btn" href="#"><i class="icon-comment"></i> A href avec icon</a>
<a class="btn btn-large" href="#"><i class="icon-comment"></i> A href avec icon LARGE</a>

<br clear="all" />
<br clear="all" />

<button type="submit" class="btn btn-large">.btn-large</button>
<button type="submit" class="btn btn-mini">.btn-mini</button>

<br clear="all" />
<br clear="all" />

<a class="btn btn-large" data-toggle="modal" href="#myModal" >Launch Modal</a>

<br clear="all" />
<br clear="all" />

<div id="myModal" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Modal Heading</h3>
	</div>
	<div class="modal-body">
		<h4>Text in a modal</h4>
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary">Save changes</a>
		<a href="#" class="btn" data-dismiss="modal" >Close</a>
	</div>
</div>

<h1>Accordion</h1>

<div class="accordion" id="accordion2">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			Collapsible Group Item #1
			</a>
		</div>
		<div id="collapseOne" class="accordion-body collapse in">
			<div class="accordion-inner">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				Collapsible Group Item #2
			</a>
		</div>
		<div id="collapseTwo" class="accordion-body collapse">
			<div class="accordion-inner">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				Collapsible Group Item #3
			</a>
		</div>
		<div id="collapseThree" class="accordion-body collapse">
			<div class="accordion-inner">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			</div>
		</div>
	</div>
</div>

<br clear="all" />
<br clear="all" />

<h1>Tabulations</h1>

<ul class="nav nav-tabs">
	<li class="active">
		<a href="#home" data-toggle="tab">Home</a>
	</li>
	<li>
		<a href="#profile" data-toggle="tab">Profile</a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
			<li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
		</ul>
	</li>
</ul>
<div class="tab-content">
	<div class="tab-pane fade in active" id="home">
		<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
	</div>
	<div class="tab-pane fade" id="profile">
		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
	</div>
	<div class="tab-pane fade" id="dropdown1">
		<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
	</div>
	<div class="tab-pane fade" id="dropdown2">
		<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
	</div>
</div>

<br clear="all" />
<br clear="all" />

<script type="text/javascript">
	/* DataTables */
    var oTable = $('#example').dataTable( {
    	"sDom": "<'row'<'length'l><'filter'f>r>t<'row'<'length'i><'length'p>>",
    	"oLanguage": { "sUrl": "/js/dataTables/jquery.dataTables-fr.js" },
    	"bAutoWidth": false
    } );
</script>