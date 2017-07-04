<section id="portfolio-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
					
					<div class="col-lg-16 col-lg-12 col-xs-12">
						<div class="portfolio">
						
						<div class="item">
						<form action="?m=hasil" method="post">
    <input type="hidden" name="m" value="hasil" />
    <div class="panel panel-default">
        <div class="panel-heading">        
            <h3 class="panel-title">Pilih Gejala</h3>
        </div>
        <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><input type="checkbox" id="checkAll" /></th>
                <th>No</th>
                <th>Nama Gejala</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $rows = $db->get_results("SELECT * FROM gejala ORDER BY kode_gejala");
        $no=1;
        foreach($rows as $row):?>
        <tr>
            <td><input type="checkbox" name="gejala[]" value="<?=$row->kode_gejala?>" /></td>
            <td><?=$no++?></td>
            <td><?=$row->nama_gejala?></td>
        </tr>
        <?php endforeach;
        ?>
        </table>
        <div class="panel-footer">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Submit Diagnosa</button>
        </div>
    </div>
	
</form>
<script>
$(function(){
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});
</script>

						</div>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
<?php 

?>
</html>
<?php 
?>
