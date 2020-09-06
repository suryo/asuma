

<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->


       
            <div class="box box-warning">
                <div class="box-body ">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                      
                       
					   
					     <?= form_open(base_url('report/dosen_result'), [
                            'name'    => 'form_bpm_angket_mahasiswa', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_bpm_angket_mahasiswa', 
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'GET'
                            ]); ?> 
						 
						 
					   <div class="form-group ">
                            <label for="gelar" class="col-sm-2 control-label">Periode
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="periode" id="periode" placeholder="periode" value="20192">
                                <small class="info help-block">
                                <b>Input Periode</b> exp: 20181.</small>
                            </div>
                        </div>
					   
					    		
						
					   
					   
					    <div class="form-group ">
                            <label for="Dosen" class="col-sm-2 control-label">Dosen 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="nip" id="nip" data-placeholder="Select Dosen" >
                                    <option value=""></option>	
									<?php  
										$query=$this->db->query("select * from data_dosen order by nama asc")->result();
									?>
									 
                                    <?php foreach ($query as $row): ?>  
                                    <option value="<?= $row->nip ?>"><?= $row->nama."-".$row->nip; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                
                            </div>
                        </div>
					  
					   
					   <button type="submit" class="btn btn-default">Cek Data Dosen</button>
                   <?= form_close(); ?> 
					   
					   
                    </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
     

<!-- /.content -->
<!-- Page script -->
<script>
    $(document).ready(function(){
                   
      $('#btn_cancel').click(function(){
        swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = BASE_URL + 'administrator/akademik_data_dosen';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_akademik_data_dosen = $('#form_akademik_data_dosen');
        var data_post = form_akademik_data_dosen.serializeArray();
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: BASE_URL + '/administrator/akademik_data_dosen/add_save',
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
                
          } else {
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
       
 
       
    
    
    }); /*end doc ready*/
</script> 