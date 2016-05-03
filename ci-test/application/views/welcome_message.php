<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Search Filter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
		.container-fluid{
			padding: 20px;			
		}
		.header{border-bottom:1px dotted;}
		.header div{font-weight : bold;}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>    
	<script src="//malsup.github.io/jquery.blockUI.js"></script>
	<script type="text/javascript">
		function searchData()
		{
			$( "#result" ).block({ message: '<h1>Just a moment...</h1>' });
			$.post( "<?php echo base_url('welcome/search') ?>",$('#search').serialize(), function( data ) {
				data = $.parseJSON(data);
				if(data.length > 0)
				{
					var html = '<hgroup class="mb20"><h1>Search Results</h1><h2 class="lead"><strong class="text-danger">'+data.length+'</strong> results were found.</h2></hgroup>';
					html += '<section class="col-xs-12 col-sm-6 col-md-12 header"><div class="col-xs-12 col-sm-12 col-md-2">Name</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">Bedrooms</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">Bathrooms</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">Storeys</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">Garages</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">Price</div></section><span class="clearfix borda"></span>';
					$.each(data, function(idx, obj) {
						html += '<section class="col-xs-12 col-sm-6 col-md-12"><div class="col-xs-12 col-sm-12 col-md-2">'+obj.name+'</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">'+obj.bedrooms+'</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">'+obj.bathrooms+'</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">'+obj.storeys+'</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">'+obj.garages+'</div><div class="col-xs-12 col-sm-12 col-md-2 text-center">$ '+obj.price+'</div></section><span class="clearfix borda"></span>';
					});
					$( "#result" ).empty().html(html);
				}
				else
					$( "#result" ).empty().html("No results found.");
				
				$( "#result" ).delay(10000).unblock();
			});
		}
	</script>
</head>
<body>
	<div class="container-fluid">
	<div class="col-md-12">
	<div class="row">
	<div class="col-sm-3">
      <div class="well">
      <h3 align="center">Search Filter</h3>
        <form class="form-horizontal" name="search" id="search">
          <div class="form-group">
            <label for="location1" class="control-label">Name</label>
            <input type="text" class="form-control" name="name" />			
          </div>
          <div class="form-group">
            <label for="type1" class="control-label">Bedrooms</label>
            <select class="form-control" name="bedrooms" id="bedrooms">
			  <option value="">No of Bedrooms</option>
			  <?php for($i=1;$i<=10;$i++): ?>              
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
		  <div class="form-group">
            <label for="type1" class="control-label">Bathrooms</label>
            <select class="form-control" name="bathrooms" id="bathrooms">
			  <option value="">No of Bathrooms</option>
			  <?php for($i=1;$i<=10;$i++): ?>              
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
		  <div class="form-group">
            <label for="type1" class="control-label">Storeys</label>
            <select class="form-control" name="storeys" id="storeys">
			  <option value="">No of Storeys</option>
			  <?php for($i=1;$i<=10;$i++): ?>              
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
		  <div class="form-group">
            <label for="type1" class="control-label">Garages</label>
            <select class="form-control" name="garages" id="garages">
			  <option value="">No of Garages</option>
			  <?php for($i=1;$i<=10;$i++): ?>              
              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="pricefrom" class="control-label">Price</label>
            <div class="col-md-12">
			  <div class="col-md-6">				
				<input type="text" class="form-control" placeholder="min" id="min" name="min">
			  </div>
			  <div class="col-md-6">				
				<input type="text" class="form-control" placeholder="max" id="max" name="max">
			  </div>
            </div>
          </div>          		  
          <p class="text-center"><button type="button" class="btn btn-danger" onclick="searchData()">Search</button></p>
        </form>
      </div>
    </div>
	<div class="col-md-9">
		<div id="result">
		</div>
	</div>
	</div>
	</div>
</div>	
</body>
</html>
