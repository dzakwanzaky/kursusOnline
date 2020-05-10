<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
    h4 {
       text-align: center;
       color: #4a4a4a;
       font-weight: 400;
    }
    h2 {
        color: #000000;
        font-weight: 600;
    }
    .kou {
        background-color: #f4f6f9;
        padding: 3px;
    }
   
</style>
<div class="kou">

</div>
<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <br>
                <br>
                <br>
                <br>
                <h4>Program Les Inofa Bimbel</h4>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">

                               <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                    

                                            <h2 style="color: #000; font-weight: 500; ">SD</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program Sekolah Dasar</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgramOnline1">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                    

                                            <h2 style="color: #000; font-weight: 500;">SMP</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program Sekolah Menengah Pertama</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgramOnline2">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                   

                                            <h2 style="color: #000; font-weight: 500;">SMA</h2>
                                          
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program Sekolah Menengah Atas</p>
                                            </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgramOnline3">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                  
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="pricing" class="section lb">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
 <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                            
                                <input type="text" class="form-control" id="program" name="program" style="display:none" value="SBMPTN">

                          <!--  <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                      

                                            <h2 style="color: #000; font-weight: 500;">SBMPTN</h2>
                                          
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program SBMPTN</p>
                                            </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram4">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                       
                                            <h2 style="color: #000; font-weight: 500;">KOMPUTER</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program Komputer</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram5">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                      

                                            <h2 style="color: #000; font-weight: 500;">CPNS</h2>
                                          
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>Silakan pilih untuk membeli kelas program CPNS</p>
                                            </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram6">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
                                        </div>
                                    
                                    </div>
                                     <br> -->
   <br>
   <br>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

  
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/paket_program_page.blade.php ENDPATH**/ ?>